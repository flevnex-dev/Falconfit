
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
      <img src="{{ url('admin/dist/img/AdminLTELogo.png') }}"
           alt="Admin Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Falconfit Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item">
            <a href="{{url('crud')}}" class="nav-link {{ Request::path() == 'crud' ? 'active' : '' }}">
              <i class="nav-icon fas fa-igloo"></i>
              <p>CRUD</p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link {{ Request::path() == 'dashboard' ? 'active' : '' }}">
              <i class="nav-icon fas fa-igloo"></i>
              <p>Dashboard</p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{url('bookingorder/create')}}" class="nav-link {{ Request::path() == 'bookingorder/create' ? 'active' : '' }}">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>Booking Order</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('order/search')}}" class="nav-link {{ Request::path() == 'order/search' ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Booking Order Report</p>
            </a>
          </li> --}}
          {{-- <li class="nav-item has-treeview {{ in_array(Request::path(),array('bookingrequest/create','bookingrequest','bookingconfiguration'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('bookingrequest/create','bookingrequest','bookingconfiguration'))?'active':'' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Booking
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('bookingconfiguration')}}" class="nav-link {{ Request::path() == 'bookingconfiguration' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking Configuration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('bookingrequest/create')}}" class="nav-link {{ Request::path() == 'bookingrequest/create' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Booking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('bookingrequest')}}" class="nav-link {{ Request::path() == 'bookingrequest' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('rentalbooking/create')}}" class="nav-link {{ Request::path() == 'rentalbooking/create' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Rental Booking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('rentalbooking')}}" class="nav-link {{ Request::path() == 'rentalbooking' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rental Booking List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('payment/log')}}" class="nav-link {{ Request::path() == 'payment/log' ? 'active' : '' }}">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>Payment log</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('slider')}}" class="nav-link {{ Request::path() == 'slider' ? 'active' : '' }}">
              <i class="nav-icon fas fa-igloo"></i>
              <p>Slider</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dreamcontent')}}" class="nav-link {{ Request::path() == 'dreamcontent' ? 'active' : '' }}">
              <i class="nav-icon fas fa-igloo"></i>
              <p>Dream Content</p>
            </a>
          </li>
          
          
          
          
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('exploreshelterinfo','shelterphoto'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('exploreshelterinfo','shelterphoto'))?'active':'' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Explore The Shelter
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('exploreshelterinfo')}}" class="nav-link {{ Request::path() == 'exploreshelterinfo' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Explore Shelter Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('shelterphoto')}}" class="nav-link {{ Request::path() == 'shelterphoto' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shelter Photos</p>
                </a>
              </li>
            </ul>
          </li> --}}

          <li class="nav-item has-treeview {{ in_array(Request::path(),array('bookingorder','paymentmethod','shippingcost'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('bookingorder','paymentmethod','shippingcost'))?'active':'' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Booking Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('bookingorder')}}" class="nav-link {{ Request::path() == 'bookingorder' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('paymentmethod')}}" class="nav-link {{ Request::path() == 'paymentmethod' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Method</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('shippingcost')}}" class="nav-link {{ Request::path() == 'shippingcost' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking Cost</p>
                </a>
              </li>
            </ul>
          </li>
          


          <li class="nav-item has-treeview {{ in_array(Request::path(),array('adminProduct/create','adminProduct/list','category','subcategory','size','color','featureproduct'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('adminProduct/create','adminProduct/list','category','subcategory','size','color','featureproduct'))?'active':'' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('adminProduct/create')}}" class="nav-link {{ Request::path() == 'adminProduct/create' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('adminProduct/list')}}" class="nav-link {{ Request::path() == 'adminProduct/list' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('featureproduct')}}" class="nav-link {{ Request::path() == 'featureproduct' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Feature Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('category')}}" class="nav-link {{ Request::path() == 'category' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('subcategory')}}" class="nav-link {{ Request::path() == 'subcategory' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Categoru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('size')}}" class="nav-link {{ Request::path() == 'size' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Size</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('color')}}" class="nav-link {{ Request::path() == 'color' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Color</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{url('merchantmfs')}}" class="nav-link {{ (Request::path() == 'merchantmfs' || Request::path() == 'merchantmfs/list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merchant MFS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('merchantbankinfo')}}" class="nav-link {{ Request::path() == 'merchantbankinfo' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merchant Bank Info</p>
                </a>
              </li> --}}
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('customer')}}" class="nav-link {{ Request::path() == 'customer' ? 'active' : '' }}">
              <i class="nav-icon far fa-envelope"></i>
              <p>Customer</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('contactus')}}" class="nav-link {{ Request::path() == 'contactus' ? 'active' : '' }}">
              <i class="nav-icon far fa-envelope"></i>
              <p>Contact Us</p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('bookingorder/list','orderdetails/list'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('bookingorder/list','orderdetails/list'))?'active':'' }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Order Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('bookingorder/list')}}" class="nav-link {{ Request::path() == 'bookingorder/list' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('orderdetails/list')}}" class="nav-link {{ Request::path() == 'orderdetails/list' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order Details</p>
                </a>
              </li>
              
              
              
            </ul>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('sitesetting','slidercms','sitesociallink','homepagecategoryposition','manucategorycms','currentoffer/list'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('sitesetting','slidercms','sitesociallink','homepagecategoryposition','manucategorycms','currentoffer/list'))?'active':'' }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('sitesetting')}}" class="nav-link {{ Request::path() == 'sitesetting' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('slidercms')}}" class="nav-link {{ Request::path() == 'slidercms' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider CMS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('sitesociallink')}}" class="nav-link {{ Request::path() == 'sitesociallink' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Link</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('homepagecategoryposition')}}" class="nav-link {{ Request::path() == 'homepagecategoryposition' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page Category Position</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('manucategorycms')}}" class="nav-link {{ Request::path() == 'manucategorycms' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('currentoffer/list')}}" class="nav-link {{ Request::path() == 'currentoffer/list' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Current Offer</p>
                </a>
              </li>
              
         
              
              
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    {{-- ============================================ --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
    {{-- <div class="side-bar-bottom">
        <ul class="list-unstyled">
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Edit Profile"><a
              href="#"><i class="fas fa-cog"></i></a></li>
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Change Password"><a
              href="#"><i class="fas fa-key"></i></li>
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Lockscreen"><a
              href="#"><i class="fas fa-unlock"></i></a></li>
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Logout">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i>
            </a>
           
          </li>
        </ul>
      </div> --}}
      <!-- End side-bar-bottom -->
  </aside>

  <style type="text/css">
    .side-bar-bottom {
      width: 100%;
      height: 35px;
      background-color: #343a40;
      position: -webkit-sticky;
      position: sticky;
      bottom: 0px;
      margin-top: 93%;
      color: #cccccc;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border-top: 2px solid #444a50;
      padding-top: 25px;
      /*-webkit-box-shadow: 0px 2px 5px 5px black;
      box-shadow: 0px 2px 5px 5px black;*/
  }
  .side-bar-bottom ul li a i{
    color: #fff;
    padding: 10px;
  }
  </style>