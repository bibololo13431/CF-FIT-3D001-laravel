
<div class="container-fluid sb1">
    <div class="row">
        <!--== LOGO ==-->
        <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="index-2.html" class="logo"><img src="{{asset('admin_public/images/logo1.png')}}" alt="" />
            </a>
        </div>
        <!--== SEARCH ==-->
        <div class="col-md-6 col-sm-6 mob-hide">
            <form class="app-search">
                <input type="text" placeholder="Search..." class="form-control">
                <a href="#"><i class="fa fa-search"></i></a>
            </form>
        </div>
        <!--== NOTIFICATION ==-->
        <div class="col-md-2 tab-hide">
            {{-- <div class="top-not-cen">
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
            </div> --}}
        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
            <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="{{asset('admin_public/images/user/6.png')}}" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>

            <!-- Dropdown Structure -->
            <ul id='top-menu' class='dropdown-content top-menu-sty'>
                <li><a href="setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                </li>
                <li><a href="listing-all.html" class="waves-effect"><i class="fa fa-list-ul" aria-hidden="true"></i> Listings</a>
                </li>
                <li><a href="hotel-all.html" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Hotels</a>
                </li>
                <li><a href="package-all.html" class="waves-effect"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                </li>
                <li><a href="event-all.html" class="waves-effect"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Events</a>
                </li>
                <li><a href="offers.html" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                </li>
                <li><a href="user-add.html" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</a>
                </li>
                <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                </li>
                <li class="divider"></li>
                <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--== BODY CONTNAINER ==-->
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li><img src="{{asset('admin_public/images/placeholder.jpg')}}" alt="">
                    </li>
                    <li>
                        <h5>Name <span> Chức vụ</span></h5>
                    </li>
                    <li></li>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="{{ route('admin.pages.dashboard') }}" class="collapsible-header"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                    </li>
                    {{-- <li><a href="#" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="user-all.html">All Users</a>
                                </li>
                                <li><a href="user-add.html">Add New user</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    <li><a href="#" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{ route('admin.tour.index') }}">All Tour</a>
                                </li>
                                <li><a href="{{ route('admin.tour.create') }}">Add New Tour</a>
                                </li>
                                <li><a href="{{route('admin.schedule_category')}}">All Schedule</a>
                                </li>
                                <li><a href="{{route('admin.schedule_category.create')}}">Add Schedule</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Phone order checked</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{ route('admin.phonebook.index') }}">Phone checked</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- <li><a href="#" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a> --}}
                    </li>
                </ul>
            </div>
        </div>