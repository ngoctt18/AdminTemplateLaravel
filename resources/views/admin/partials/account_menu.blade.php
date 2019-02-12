<li class="dropdown user user-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="{{ asset('dist/img/user3-128x128.jpg') }}" class="user-image" alt="User Image">
    <span class="hidden-xs">{{Auth::user()->name}}</span>
  </a>
  <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
      <img src="{{ asset('dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">

      <p>
        {{Auth::user()->name}} - Web Developer
        <small>Member since {{Auth::user()->created_at->format('d/m/Y')}}</small>
      </p>
    </li>
    <!-- Menu Body -->
    <!-- <li class="user-body">
      <div class="row">
        <div class="col-xs-4 text-center">
          <a href="#">Followers</a>
        </div>
        <div class="col-xs-4 text-center">
          <a href="#">Sales</a>
        </div>
        <div class="col-xs-4 text-center">
          <a href="#">Friends</a>
        </div>
      </div>
      /.row
    </li> -->
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a href="#" class="btn btn-default btn-flat">Profile</a>
      </div>
      <div class="pull-right">
        <a href="{{ route(get_guard().'.logout') }}" class="btn btn-default btn-flat">Sign out</a>
      </div>
    </li>
  </ul>
</li>