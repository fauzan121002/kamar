<div class="modal fade" id="modal-filter" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modal-filter" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label>Code Booking</label> 
              <input type="text" placeholder="Search Code Booking" name="search[order_id]" class="form-control filter-field">
            </div>
          </div>          
          <div class="col-lg-6">
            <div class="form-group">
              <label>Transaction ID</label> 
              <input type="text" placeholder="Search Code Booking" name="search[transaction_id]" class="form-control filter-field">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>Date Start</label> 
              <input type="text" placeholder="Search Date Start" name="search[created_at][0]" class="form-control filter-field datepicker">
            </div>
          </div>  

          <div class="col-lg-6">
            <div class="form-group">
              <label>Date End</label> 
              <input type="text" placeholder="Search Date End" name="search[created_at][1]" class="form-control filter-field datepicker">
            </div>
          </div>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger filter-btn">Filter</button>
        <button type="button" class="btn btn-primary filter-clean">Clear</button>
        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@section('script')
@parent

<style type="text/css">
  .datepicker {
    border: 1px solid #ced4da !important;
  }
</style>
<script type="text/javascript">
  $(document).ready(function() {
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose : true,
      clearBtn: true
    })
  });
</script>
@stop