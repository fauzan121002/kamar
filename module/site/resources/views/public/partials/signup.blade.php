@if(!(bool)Auth::check())
<section class="theme-bg call_action_wrap-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        
        <div class="call_action_wrap">
          <div class="call_action_wrap-head">
            <h3>{{ trans('site::default.signup_quote')  }}</h3>
            <span>{{ trans('site::default.signup_quote_sub')  }}</span>
          </div>
          <a href="#" class="btn btn-call_action_wrap modalSignup">{{ trans('site::default.signup_today')  }}</a>
        </div>
        
      </div>
    </div>
  </div>
</section>
@endif