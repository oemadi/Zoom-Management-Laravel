<?php $user = Auth::user(); ?>
<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
        @guest
        @else
        <div class="dropdown user-pro-body">
                <div><img src="{{url('')}}/public/images/eliteadmin-logo-dark.png" alt="user-img" class="img-circle"></div>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $user->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                         <a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" ><i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </li>
                    </ul>
            </div>
        @endguest
        </div>
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
        <li> <a href="{{ route('home')}}" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
        <li><a href="javascript:void(0);" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Master<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="{{route('oauth')}}">Get Token OAuth</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Jadwal<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="{{route('meeting_create')}}">Create Meeting</a></li>
            <li> <a href="{{route('meeting_list')}}">List Meeting</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Join<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="{{route('join_add')}}">Create Join Event</a></li>
            <li> <a href="{{route('join_event')}}">List Join Event</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Report<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="#">Report Peserta</a></li>
          </ul>
        </li>
        </ul>
    </div>
</div>
