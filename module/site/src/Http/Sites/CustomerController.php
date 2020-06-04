<?php
namespace Module\Site\Http\Sites;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App;
use Payments;
use Validator;
use Rooms;
use Books;

class CustomerController extends Controller
{
  protected $customer;
	function __construct()
  {
    $this->lang = App::getLocale();
    $this->middleware('auth:web');
    $this->customer = Auth::user();
  }

  public function getSnapToken(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'required|email',
      'fullname'  => 'required',
      'roomTotal' => 'required',
      'dateStart' => 'required',
      'dateEnd' => 'required',
      'roomID' => 'required',
      'nights' => 'required',
      'uuid'  => 'required',
      'g-recaptcha-response' => 'captcha'
    ]);

    if ($validator->fails()) {
      return response()->json(
        array(
          'status' => false,
          'error' => $validator->errors()
        )
      );
    }
    $calculatePayment = self::calculatePayment($request->roomID, $request->roomTotal, $request->nights);

    $customer = Auth::user();

    $customer_details = array(
      'first_name'       => $customer->name,
      'email'            => $customer->email,
      'phone'            => $customer->phone
    );

    $date = new \DateTime(date('Y-m-d H:i:s'), new \DateTimeZone('Asia/Jakarta'));
    $expired = array(
      'start_time'=> $date->format('Y-m-d H:i:s O'),
      'unit'=> 'minutes',
      'duration'=> 60
    );



    $params = array(
      'transaction_details' => array(
        'order_id' => $request->uuid,
        'gross_amount' => $calculatePayment['grandTotal'],
      ),
      'item_details'        => $calculatePayment['items'],
      'customer_details'    => $customer_details,
      'expiry' => $expired,
      'enabled_payments' => 
      ['credit_card', 'mandiri_clickpay',
      'bca_klikbca', 'bca_klikpay', 'bri_epay', 'echannel', 'permata_va',
      'bca_va', 'bni_va', 'other_va', 'gopay'],
    );
    $snapToken = Payments::getSnapToken($params);
    // set cookies buat save sementara bookingnya nnti panggil kalau success update, set 30menit saja
    $setHistory = array(
      'uuid' => $request->uuid,
      'customer_id' => $customer->id,
      'room_id' => $request->roomID,
      'payment_id' => null,
      'rooms' => $request->roomTotal,
      'guests' => $request->roomTotal * 2,
      'nights' => $request->nights,
      'price' => $calculatePayment['price'],
      'total' => $calculatePayment['total'],
      'service' => $calculatePayment['service'],
      'grand_total' => $calculatePayment['grandTotal'],
      'date_checkin' => $request->dateStart,
      'date_checkout' => $request->dateEnd,
      'notes'=>null,
      'status' => 0
    );
    Books::updateOrCreateHistory(array('uuid'=>$request->uuid), array('uuid'=>$request->uuid,'data'=>$setHistory));
    return response()->json([
      'status' => true,
      'snapToken' => $snapToken
    ]);
  }

  protected function calculatePayment($roomID, $roomTotal, $nights)
  {
    $room = Rooms::findByField('id', $roomID);
    /*calculate backend*/ 

    $total = $room->price * $roomTotal * $nights;
    $service = ($total * 10) / 100;
    $grandTotal = $total + $service;


    $items = array(
      array(
        'id'       => 'rooms',
        'price'    => $room->price * $nights,
        'quantity' => $roomTotal,
        'name'     => $room->name.' '.$nights.' night'
      ),
      array(
        'id'       => 'service',
        'price'    => $service,
        'quantity' => 1,
        'name'     => 'Service of kamartamu'
      )
    );

    return [
      'price' => $room->price,
      'total' => $total,
      'service' => $service,
      'grandTotal' => $grandTotal,
      'items' => $items
    ];
  }


  public function logout(Request $request)
  {
    Auth::guard('web')->logout();
    session()->flush();
    $request->session()->flash('status_notif', 'Thank you for visit kamartamu');
    return redirect()->route('public.index');
  }
}