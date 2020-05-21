@extends('site::theme.kamartamu.layouts.index')
@section('content')
@include('site::public.partials.banner')
<!-- ============================ Featured Property Start ================================== -->
@include('site::public.partials.featured')
<div class="clearfix"></div>
<!-- ============================ Featured Property End ================================== -->

<!-- ============================ Property Start ================================== -->
<section>
  <div class="container">
    
    <div class="row mb-4">
    
      <div class="btn-group nav nav-pills btn-group-toggle m-auto" id="pills-tab" role="tablist">
        <label class="btn btn-secondary">
          <a class="nav-link active" id="buy-home-tab" data-toggle="pill" href="#buy" role="tab" aria-controls="buy" aria-selected="true">For Buy</a>
        </label>
        <label class="btn btn-secondary">
          <a class="nav-link" id="rent-profile-tab" data-toggle="pill" href="#rent" role="tab" aria-controls="rent" aria-selected="false">For Sale</a>
        </label>
        <label class="btn btn-secondary">
           <a class="nav-link" id="sale-contact-tab" data-toggle="pill" href="#sale" role="tab" aria-controls="sale" aria-selected="false">For Rent</a>
        </label>
      </div>
    
    </div>
    
    <div class="row m-0">
      
      <div class="tab-content" id="pills-tabContent">
      
        <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-home-tab">
          <div class="row">
            
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single_property_style property_style_2 modern">
            
                <div class="listing_thumb_wrapper">
                  <div class="modern-pro-wrap">
                    <span class="property-type sale">For Sale</span>
                  </div>
                  <div class="property_gallery_slide-thumb">
                    <img src="https://via.placeholder.com/1300x840" class="img-fluid mx-auto" alt="" />
                  </div>
                  <div class="property_price_compare">
                    <div class="property_price_reviess">
                      <span><i class="lni lni-phone mr-2"></i>+91 855 606 8702</span>
                      <div class="prt_rates"><i class="fa fa-star mr-2"></i>4.8 <span>(33 reviews)</span></div>
                    </div>
                    <div class="lpc-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Bookmark Property"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="property_caption_wrappers pb-0">
                  <div class="property_short_detail">
                    <h4 class="listing-name"><a href="single-property-1.html">New Clue Apartment</a></h4>
                    <span class="property-locations"><i class="ti-location-pin"></i>591 Creek Road, London 02115</span>
                  </div>
                </div>
                
                <div class="property_features_wrap">
                  <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bed.svg" alt="">3 Beds</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bath.svg" alt="">2 Bath</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/area.svg" alt="">418 sq ft</span>
                    </div>
                  </div>
                </div>
                
                <div class="modern_property_footer">
                  <div class="property-author">
                    <div class="path-img"><a href="agent-page.html"><img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" /></a></div>
                    <h5><a href="agent-page.html">Shaurya Preet</a></h5>
                  </div>
                  <div class="property-real-price theme-cl">$7,870</div>
                </div>
              </div>
            </div>
            
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single_property_style property_style_2 modern">
            
                <div class="listing_thumb_wrapper">
                  <div class="modern-pro-wrap">
                    <span class="property-type">For Rent</span>
                  </div>
                  <div class="property_gallery_slide-thumb">
                    <img src="https://via.placeholder.com/1300x840" class="img-fluid mx-auto" alt="" />
                  </div>
                  <div class="property_price_compare">
                    <div class="property_price_reviess">
                      <span><i class="lni lni-phone mr-2"></i>+91 855 606 8702</span>
                      <div class="prt_rates"><i class="fa fa-star mr-2"></i>4.8 <span>(33 reviews)</span></div>
                    </div>
                    <div class="lpc-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Bookmark Property"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="property_caption_wrappers pb-0">
                  <div class="property_short_detail">
                    <h4 class="listing-name"><a href="single-property-1.html">Resort Valley Ocs</a></h4>
                    <span class="property-locations"><i class="ti-location-pin"></i>1122 Flint Street, New York 02115</span>
                  </div>
                </div>
                
                <div class="property_features_wrap">
                  <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bed.svg" alt="">3 Beds</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bath.svg" alt="">2 Bath</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/area.svg" alt="">780 sq ft</span>
                    </div>
                  </div>
                </div>
                
                <div class="modern_property_footer">
                  <div class="property-author">
                    <div class="path-img"><a href="agent-page.html"><img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" /></a></div>
                    <h5><a href="agent-page.html">Yash Singh</a></h5>
                  </div>
                  <div class="property-real-price theme-cl"><span class="off_price">$8,840</span>$8,110</div>
                </div>
              </div>
            </div>
            
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single_property_style property_style_2 modern">
            
                <div class="listing_thumb_wrapper">
                  <div class="modern-pro-wrap">
                    <span class="property-type sale">For Sale</span>
                  </div>
                  <div class="property_gallery_slide-thumb">
                    <img src="https://via.placeholder.com/1300x840" class="img-fluid mx-auto" alt="" />
                  </div>
                  <div class="property_price_compare">
                    <div class="property_price_reviess">
                      <span><i class="lni lni-phone mr-2"></i>+91 855 606 8702</span>
                      <div class="prt_rates"><i class="fa fa-star mr-2"></i>4.8 <span>(33 reviews)</span></div>
                    </div>
                    <div class="lpc-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Bookmark Property"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="property_caption_wrappers pb-0">
                  <div class="property_short_detail">
                    <h4 class="listing-name"><a href="single-property-1.html">Luxury Home In Manhattan</a></h4>
                    <span class="property-locations"><i class="ti-location-pin"></i>3490 Marion Street, CA 02115</span>
                  </div>
                </div>
                
                <div class="property_features_wrap">
                  <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bed.svg" alt="">3 Beds</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bath.svg" alt="">1 Bath</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/area.svg" alt="">628 sq ft</span>
                    </div>
                  </div>
                </div>
                
                <div class="modern_property_footer">
                  <div class="property-author">
                    <div class="path-img"><a href="agent-page.html"><img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" /></a></div>
                    <h5><a href="agent-page.html">Dhananjay Singh</a></h5>
                  </div>
                  <div class="property-real-price theme-cl"><span class="off_price">$9,540</span>$5,770</div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
        <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-profile-tab">
          <div class="row">
            
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single_property_style property_style_2 modern">
            
                <div class="listing_thumb_wrapper">
                  <div class="modern-pro-wrap">
                    <span class="property-type">For Rent</span>
                  </div>
                  <div class="property_gallery_slide-thumb">
                    <img src="https://via.placeholder.com/1300x840" class="img-fluid mx-auto" alt="" />
                  </div>
                  <div class="property_price_compare">
                    <div class="property_price_reviess">
                      <span><i class="lni lni-phone mr-2"></i>+91 855 606 8702</span>
                      <div class="prt_rates"><i class="fa fa-star mr-2"></i>4.8 <span>(33 reviews)</span></div>
                    </div>
                    <div class="lpc-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Bookmark Property"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="property_caption_wrappers pb-0">
                  <div class="property_short_detail">
                    <h4 class="listing-name"><a href="single-property-1.html">Office Space New York</a></h4>
                    <span class="property-locations"><i class="ti-location-pin"></i>3550 Illinois Avenue, UK 02115</span>
                  </div>
                </div>
                
                <div class="property_features_wrap">
                  <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bed.svg" alt="">4 Beds</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bath.svg" alt="">2 Bath</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/area.svg" alt="">1,220 sq ft</span>
                    </div>
                  </div>
                </div>
                
                <div class="modern_property_footer">
                  <div class="property-author">
                    <div class="path-img"><a href="agent-page.html"><img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" /></a></div>
                    <h5><a href="agent-page.html">Niranjan Kumar</a></h5>
                  </div>
                  <div class="property-real-price theme-cl">$9,500</div>
                </div>
              </div>
            </div>
            
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single_property_style property_style_2 modern">
            
                <div class="listing_thumb_wrapper">
                  <div class="modern-pro-wrap">
                    <span class="property-type sale">For Sale</span>
                  </div>
                  <div class="property_gallery_slide-thumb">
                    <img src="https://via.placeholder.com/1300x840" class="img-fluid mx-auto" alt="" />
                  </div>
                  <div class="property_price_compare">
                    <div class="property_price_reviess">
                      <span><i class="lni lni-phone mr-2"></i>+91 855 606 8702</span>
                      <div class="prt_rates"><i class="fa fa-star mr-2"></i>4.8 <span>(33 reviews)</span></div>
                    </div>
                    <div class="lpc-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Bookmark Property"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="property_caption_wrappers pb-0">
                  <div class="property_short_detail">
                    <h4 class="listing-name"><a href="single-property-1.html">Apartment To Rent In Queens</a></h4>
                    <span class="property-locations"><i class="ti-location-pin"></i>1124 Hart Country, USA 02115</span>
                  </div>
                </div>
                
                <div class="property_features_wrap">
                  <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bed.svg" alt="">3 Beds</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bath.svg" alt="">3 Bath</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/area.svg" alt="">840 sq ft</span>
                    </div>
                  </div>
                </div>
                
                <div class="modern_property_footer">
                  <div class="property-author">
                    <div class="path-img"><a href="agent-page.html"><img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" /></a></div>
                    <h5><a href="agent-page.html">Sudha Srivastava</a></h5>
                  </div>
                  <div class="property-real-price theme-cl"><span class="off_price">$10,540</span>$8,810</div>
                </div>
              </div>
            </div>
            
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single_property_style property_style_2 modern">
            
                <div class="listing_thumb_wrapper">
                  <div class="modern-pro-wrap">
                    <span class="property-type">For Rent</span>
                  </div>
                  <div class="property_gallery_slide-thumb">
                    <img src="https://via.placeholder.com/1300x840" class="img-fluid mx-auto" alt="" />
                  </div>
                  <div class="property_price_compare">
                    <div class="property_price_reviess">
                      <span><i class="lni lni-phone mr-2"></i>+91 855 606 8702</span>
                      <div class="prt_rates"><i class="fa fa-star mr-2"></i>4.8 <span>(33 reviews)</span></div>
                    </div>
                    <div class="lpc-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Bookmark Property"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="property_caption_wrappers pb-0">
                  <div class="property_short_detail">
                    <h4 class="listing-name"><a href="single-property-1.html">Energy Certificate For EU</a></h4>
                    <span class="property-locations"><i class="ti-location-pin"></i>3940 Star Trek, CA 02115</span>
                  </div>
                </div>
                
                <div class="property_features_wrap">
                  <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bed.svg" alt="">3 Beds</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bath.svg" alt="">2 Bath</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/area.svg" alt="">418 sq ft</span>
                    </div>
                  </div>
                </div>
                
                <div class="modern_property_footer">
                  <div class="property-author">
                    <div class="path-img"><a href="agent-page.html"><img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" /></a></div>
                    <h5><a href="agent-page.html">Shaurya Preet</a></h5>
                  </div>
                  <div class="property-real-price theme-cl">$5,470</div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
        <div class="tab-pane fade" id="sale" role="tabpanel" aria-labelledby="sale-contact-tab">
          <div class="row">
            
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single_property_style property_style_2 modern">
            
                <div class="listing_thumb_wrapper">
                  <div class="modern-pro-wrap">
                    <span class="property-type sale">For Sale</span>
                  </div>
                  <div class="property_gallery_slide-thumb">
                    <img src="https://via.placeholder.com/1300x840" class="img-fluid mx-auto" alt="" />
                  </div>
                  <div class="property_price_compare">
                    <div class="property_price_reviess">
                      <span><i class="lni lni-phone mr-2"></i>+91 855 606 8702</span>
                      <div class="prt_rates"><i class="fa fa-star mr-2"></i>4.8 <span>(33 reviews)</span></div>
                    </div>
                    <div class="lpc-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Bookmark Property"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="property_caption_wrappers pb-0">
                  <div class="property_short_detail">
                    <h4 class="listing-name"><a href="single-property-1.html">New Clue Apartment</a></h4>
                    <span class="property-locations"><i class="ti-location-pin"></i>591 Creek Road, London 02115</span>
                  </div>
                </div>
                
                <div class="property_features_wrap">
                  <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bed.svg" alt="">3 Beds</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bath.svg" alt="">2 Bath</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/area.svg" alt="">418 sq ft</span>
                    </div>
                  </div>
                </div>
                
                <div class="modern_property_footer">
                  <div class="property-author">
                    <div class="path-img"><a href="agent-page.html"><img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" /></a></div>
                    <h5><a href="agent-page.html">Shaurya Preet</a></h5>
                  </div>
                  <div class="property-real-price theme-cl">$7,870</div>
                </div>
              </div>
            </div>
            
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single_property_style property_style_2 modern">
            
                <div class="listing_thumb_wrapper">
                  <div class="modern-pro-wrap">
                    <span class="property-type">For Rent</span>
                  </div>
                  <div class="property_gallery_slide-thumb">
                    <img src="https://via.placeholder.com/1300x840" class="img-fluid mx-auto" alt="" />
                  </div>
                  <div class="property_price_compare">
                    <div class="property_price_reviess">
                      <span><i class="lni lni-phone mr-2"></i>+91 855 606 8702</span>
                      <div class="prt_rates"><i class="fa fa-star mr-2"></i>4.8 <span>(33 reviews)</span></div>
                    </div>
                    <div class="lpc-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Bookmark Property"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="property_caption_wrappers pb-0">
                  <div class="property_short_detail">
                    <h4 class="listing-name"><a href="single-property-1.html">Resort Valley Ocs</a></h4>
                    <span class="property-locations"><i class="ti-location-pin"></i>1122 Flint Street, New York 02115</span>
                  </div>
                </div>
                
                <div class="property_features_wrap">
                  <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bed.svg" alt="">3 Beds</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bath.svg" alt="">2 Bath</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/area.svg" alt="">780 sq ft</span>
                    </div>
                  </div>
                </div>
                
                <div class="modern_property_footer">
                  <div class="property-author">
                    <div class="path-img"><a href="agent-page.html"><img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" /></a></div>
                    <h5><a href="agent-page.html">Yash Singh</a></h5>
                  </div>
                  <div class="property-real-price theme-cl"><span class="off_price">$8,840</span>$8,110</div>
                </div>
              </div>
            </div>
            
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single_property_style property_style_2 modern">
            
                <div class="listing_thumb_wrapper">
                  <div class="modern-pro-wrap">
                    <span class="property-type sale">For Sale</span>
                  </div>
                  <div class="property_gallery_slide-thumb">
                    <img src="https://via.placeholder.com/1300x840" class="img-fluid mx-auto" alt="" />
                  </div>
                  <div class="property_price_compare">
                    <div class="property_price_reviess">
                      <span><i class="lni lni-phone mr-2"></i>+91 855 606 8702</span>
                      <div class="prt_rates"><i class="fa fa-star mr-2"></i>4.8 <span>(33 reviews)</span></div>
                    </div>
                    <div class="lpc-right">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Bookmark Property"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="property_caption_wrappers pb-0">
                  <div class="property_short_detail">
                    <h4 class="listing-name"><a href="single-property-1.html">Luxury Home In Manhattan</a></h4>
                    <span class="property-locations"><i class="ti-location-pin"></i>3490 Marion Street, CA 02115</span>
                  </div>
                </div>
                
                <div class="property_features_wrap">
                  <div class="list-fx-features">
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bed.svg" alt="">3 Beds</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/bath.svg" alt="">1 Bath</span>
                    </div>
                    <div class="listing-card-info-icon">
                      <span><img src="assets/img/area.svg" alt="">628 sq ft</span>
                    </div>
                  </div>
                </div>
                
                <div class="modern_property_footer">
                  <div class="property-author">
                    <div class="path-img"><a href="agent-page.html"><img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" /></a></div>
                    <h5><a href="agent-page.html">Dhananjay Singh</a></h5>
                  </div>
                  <div class="property-real-price theme-cl"><span class="off_price">$9,540</span>$5,770</div>
                </div>
              </div>
            </div>                  
            
          </div>
        </div>
        
      </div>
      
    </div>
  </div>
</section>
<!-- ============================ Property End ================================== -->

<!-- ================= Our Mission ================= -->
@include('site::public.partials.ourmission')
<!-- ================= Our Mission ================= -->

<!-- ============================ partner Start ================================== -->
@include('site::public.partials.partner')
<div class="clearfix"></div>
<!-- ============================ partner End ================================== -->

<!-- ============================ Call To Action ================================== -->
<section class="theme-bg call_action_wrap-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        
        <div class="call_action_wrap">
          <div class="call_action_wrap-head">
            <h3>{{ trans('site::default.signup_quote')  }}</h3>
            <span>{{ trans('site::default.signup_quote_sub')  }}</span>
          </div>
          <a href="#" data-toggle="modal" data-target="#signup" class="btn btn-call_action_wrap">{{ trans('site::default.signup_today')  }}</a>
        </div>
        
      </div>
    </div>
  </div>
</section>
@stop