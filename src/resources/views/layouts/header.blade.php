<nav class="navbar navbar-static-top" role="navigation">
    <a href="{{url('/')}}" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        <img src="{{url('img/logo.png')}}" alt="logo" />
    </a>
    <!-- Header Navbar: style can be found in header-->
    <!-- Sidebar toggle button-->
    <!-- Sidebar toggle button-->
    <div>
        <a href="javascript:void(0)" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw ti-menu"></i>
        </a>
    </div>
    <div class="navbar-right">
        <ul class="nav navbar-nav">
            
            <!-- User Account: style can be found in dropdown-->
            <li class="dropdown user user-menu">
                <a href="javascript:void(0)" class="dropdown-toggle padding-user" data-toggle="dropdown">
                    <img src="{{url('img/authors/avatar1.jpg')}}" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">
                    <div class="riot">
                        <div>
                            {{--  Addison  --}}
                            {{ Auth::user()->name }}
                            <span>
                                <i class="caret"></i>
                            </span>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{url('img/authors/avatar1.jpg')}}" class="img-circle" alt="User Image">
                        <p> {{ Auth::user()->name }} </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="p-t-3">
                        <a href="{{route('userProfileIndex')}}">
                            <i class="fa fa-fw ti-user"></i> My Profile
                        </a>
                    </li>
                    <li role="presentation"></li>
                    <li>
                        <a href="{{route('userProfileEdit')}}">
                            <i class="fa fa-fw ti-settings"></i> Account Settings
                        </a>
                    </li>
                    <li role="presentation" class="divider"></li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        
                        <div class="pull-right">
                            {{--  <a href="{{ route('logout') }}">
                                <i class="fa fa-fw ti-shift-right"></i> Logout
                            </a>  --}}
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               <i class="fa fa-fw ti-shift-right"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
