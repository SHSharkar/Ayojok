<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image" style="">
                <img src="{{asset('superadmin/dist/img/default-user.png')}}" class="img-circle mt-4" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{\Illuminate\Support\Facades\Auth::user()->name}}</p>

                <p>{{\Illuminate\Support\Facades\Auth::user()->job_title}}</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('adminhome')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('admindash')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard (Google)</span>
                </a>
            </li>
            {{-- Client Menu --}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i>
                    <span>Client</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('client')}}"><i class="fa fa-circle-o"></i> Client List</a></li>
                </ul>
            </li>
            {{-- User Menu --}}

            @if(\Illuminate\Support\Facades\Auth::user()->job_title === "admin")
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('Show_addNewUser')}}"><i class="fa fa-circle-o"></i> Add new Admin</a></li>
                    <li><a href="{{route('Show_UserList')}}"><i class="fa fa-circle-o"></i> Admin List</a></li>
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Manager List</a></li>--}}
                </ul>
            </li>
            @endif
             {{--Payment Menu--}}
             {{--<li class="treeview">
              <a href="#">
                <i class="fa fa-credit-card"></i>
                <span>Payment</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Payment Invoice</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Due Payment</a></li>
              </ul>
            </li>--}}

            {{-- Query Menu --}}
            <li>
                <?php
                use App\EventCoordinator;

                $totalquery_unSeen = App\Query::whereIn('status', ['Query Submitted','In Review'])->count();

                $totalOrder = App\Models\order::all()->where('isconfirmed', 0)->count();

                $totalPayment_list = App\Models\order::all()->where('isconfirmed', 1)->count();

                $total_partners = \App\Models\partner::all()->count();

                $total_message = \App\Models\contactus::all()->count();

                ?>
                <a href="{{route('query')}}">
                    <span class="glyphicon glyphicon-blackboard"></span>
                    <span>
                        Query List ( {{$totalquery_unSeen}} )
                    </span>
                </a>
            </li>

            <li>
                <?php
                $totalquery_unSeen = App\Query::where('status', 'In Review')->count();

                $totalOrder = App\Models\order::all()->where('isconfirmed', 0)->count();

                $totalPayment_list = App\Models\order::all()->where('isconfirmed', 1)->count();

                $total_partners = \App\Models\partner::all()->count();
                $total_event_coordinator = EventCoordinator::all()->count();

                $total_message = \App\Models\contactus::all()->count();

                ?>
                <a href="{{route('unauthorized_query')}}">
                    <span class="glyphicon glyphicon-blackboard"></span>
                    <span>
                        Anonymous Query List ( {{$totalquery_unSeen}} )
                    </span>
                </a>
            </li>
            {{-- Confirm List --}}
            <li>
                <a href="{{route('confirm')}}">
                    <span class="glyphicon glyphicon-ok"></span> <span>Booking List ( {{$totalOrder}} )</span>
                </a>
            </li>

            {{-- Order Menu --}}
            <li>
                <a href="{{route('order')}}">
                    <i class="fa fa-clipboard"></i> <span>Payment List ( {{$totalPayment_list}} ) </span>
                </a>
            </li>

            {{-- Product Menu --}}
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-gift"></span>
                    <span>Service</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('service.index')}}"><i class="fa fa-circle-o"></i> Service List</a></li>
                    <li><a href="{{route('service.create')}}"><i class="fa fa-circle-o"></i> New Service Add</a></li>
                </ul>
            </li>

            {{-- Vendor Menu --}}
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-knight"></span>
                    <span>Vendor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('vendors.index')}}"><i class="fa fa-circle-o"></i> Vendor List</a></li>
                    <li><a href="{{route('vendors.create')}}"><i class="fa fa-circle-o"></i> New Vendor Add</a></li>
                    <li><a href="{{route('vendor-packages')}}"><i class="fa fa-circle-o"></i>Vendor Package & Galleries</a>
                    </li>
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i>Vendor Gallery</a></li>--}}
                </ul>
            </li>

            {{-- Report Menu --}}
            {{-- <li class="treeview">
              <a href="#">
                <i class="fa fa-coffee"></i>
                <span>Report</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Product Report</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Vendor Report</a></li>
              </ul>
            </li> --}}

            {{-- Profit Menu --}}
            {{-- <li class="treeview">
              <a href="#">
                <span class="glyphicon glyphicon-piggy-bank"></span>
                <span>Profit</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Product Report</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Vendor Report</a></li>
              </ul>
            </li> --}}

            {{-- Messages --}}
            <li>
                <a href="{{route('mess')}}">
                    <i class="fa fa-envelope-o"></i> <span>Message ( {{$total_message}} ) </span>
                </a>
            </li>
            <li>
                <a href="{{route('ad_partners')}}">
                    <i class="fa fa-handshake-o"></i> <span>Partners ( {{$total_partners}} )</span>
                </a>
            </li>

            <li>
                <a href="{{route('event_coordinators_msg')}}">
                    <i class="fa fa-handshake-o"></i> <span>event-coordinator Message  ( {{$total_event_coordinator}} )</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
