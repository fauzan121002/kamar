<div class="header header-light">
  <div class="container-fluid">
    <nav id="navigation" class="navigation navigation-landscape">
      <div class="nav-header">
        <a class="nav-brand" href="{{ route('public.index') }}">
          <img src="{{ asset('themes/landing') }}/assets/img/logo.png" class="logo" alt="" />
        </a>
        <div class="nav-toggle"></div>
      </div>
      <div class="nav-menus-wrapper" style="transition-property: none;">
        <ul class="nav-menu">
        
          <li class="active"><a href="#">Home<span class="submenu-indicator"></span></a>
            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
              <li><a href="#">Modern Home<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu" style="display: none;">
                  <li><a href="modern-home-1.html">Modern Home 1</a></li>
                  <li><a href="modern-home-2.html">Modern Home 2</a></li><li><a href="modern-home-3.html">Modern Home 3</a></li>
                </ul>
              </li>
              <li><a href="index.html">Home 1</a></li>
              <li><a href="home-2.html">Home 2</a></li>
              <li><a href="home-3.html">Home 3</a></li>
              <li><a href="home-4.html">Home 4</a></li>
              <li><a href="home-5.html">Home 5</a></li>
              <li><a href="home-6.html">Home 6</a></li>
              <li><a href="home-7.html">Home 7</a></li>
              <li><a href="map.html">Map Home</a></li>
            </ul>
          </li>
          
          <li><a href="#">Listings<span class="submenu-indicator"></span></a>
            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
              <li><a href="#">Listing Grid<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu" style="display: none;">
                  <li><a href="grid-layout-with-sidebar.html">Grid Style 1</a></li>
                  <li><a href="grid-layout-2.html">Grid Style 2</a></li>
                  <li><a href="grid-layout-3.html">Grid Style 3</a></li>
                  <li><a href="grid-layout-4.html">Grid Style 4</a></li>
                  <li><a href="grid-layout-5.html">Grid Style 5</a></li>
                </ul>
              </li>
              <li><a href="#">Listing List<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu" style="display: none;">
                  <li><a href="list-layout-with-sidebar.html">List Style 1</a></li>
                  <li><a href="list-layout-with-map-2.html">List Style 2</a></li>
                </ul>
              </li>
              <li><a href="#">Listing Map<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu" style="display: none;">
                  <li><a href="half-map.html">Half Map</a></li>
                  <li><a href="classical-layout-with-map.html">Classical With Sidebar</a></li>
                  <li><a href="list-layout-with-map.html">List Sidebar Map</a></li>
                  <li><a href="grid-layout-with-map.html">Grid Sidebar Map</a></li>
                </ul>
              </li>
              <li><a href="#">Agents View<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu" style="display: none;">
                  <li><a href="agents.html">Agent Grid Style</a></li>
                  <li><a href="list-agents.html">Agent List Style</a></li>
                </ul>
              </li>
              <li><a href="#">Agency View<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu" style="display: none;">
                  <li><a href="agencies.html">Agency Grid Style</a></li>
                  <li><a href="list-agencies.html">Agency List Style</a></li>
                </ul>
              </li>
            </ul>
          </li>
          
          <li><a href="#">Property<span class="submenu-indicator"></span></a>
            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
              <li class=""><a href="#">User Admin<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu" style="display: none;">
                  <li><a href="dashboard.html">User Dashboard</a></li>
                  <li><a href="my-profile.html">My Profile</a></li>
                  <li><a href="my-property.html">My Property</a></li>
                  <li><a href="bookmark-list.html">Bookmark Property</a></li>
                  <li><a href="submit-property.html">Submit Property</a></li>
                </ul>
              </li>
              <li><a href="#">Single Property<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu" style="display: none;">
                  <li><a href="single-property-1.html">Single Property 1</a></li>
                  <li><a href="single-property-2.html">Single Property 2</a></li>
                  <li><a href="single-property-3.html">Single Property 3</a></li>
                  <li><a href="single-property-4.html">Single Property 4</a></li>
                  <li><a href="single-property-5.html">Single Property 5</a></li>
                </ul>
              </li>
              <li><a href="compare-property.html">Compare Property</a></li>
            </ul>
          </li>
          
          <li><a href="#">Pages<span class="submenu-indicator"></span></a>
            <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
              <li><a href="blog.html">Blog Style</a></li>
              <li><a href="blog-detail.html">Blog Detail</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="404.html">404 Page</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="register.html">Register</a></li>
              <li><a href="component.html">Elements</a></li>
              <li><a href="privacy.html">Privacy Policy</a></li>
              <li><a href="faq.html">FAQs</a></li>
            </ul>
          </li>
          
          <li><a href="contact.html">Contacts</a></li>
          
        </ul>
        
        <ul class="nav-menu nav-menu-social align-to-right">
          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              @if(App::getLocale() == $localeCode)
              @continue
              @endif
          <li>
            <a class="second-nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [] , false) }}">
              {{ $properties['name'] }}
            </a>
          </li>  
          @endforeach
          <li>
            <a href="#" data-toggle="modal" data-target="#login">
              <i class="ti-user mr-1"></i><span class="dn-lg">{{ trans('site::default.login')}}/{{ trans('site::default.signup')}}</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>