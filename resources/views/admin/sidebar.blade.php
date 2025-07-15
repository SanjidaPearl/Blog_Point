<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar">
          @if(Auth::user()->img_path)
          <img src="{{ asset(Auth::user()->img_path) }}" alt="Profile Picture" class="img-fluid rounded-circle">
          @else
          <p>No picture uploaded.</p>
          @endif  
          <img src="admincss/img/avatar-6.jpg" alt="..." ></div>
          <div class="title">
            <h1 class="h5">{{ Auth::user()->name }}</h1>
            <h1 class="h5">{{ Auth::user()->email }}</h1>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
  <ul class="list-unstyled">
    <li class="{{ request()->routeIs('adhome') ? 'active' : '' }}">
        <a href="{{ route('adhome') }}"> <i class="icon-home"></i>Home</a>
    </li>
    <li class="{{ request()->is('post_page') ? 'active' : '' }}">
        <a href="{{ url('post_page') }}"> <i class="icon-grid"></i>Add Post</a>
    </li>
    <li class="{{ request()->is('show_post') ? 'active' : '' }}">
        <a href="{{ url('show_post') }}"> <i class="fa fa-bar-chart"></i>Show Post</a>
    </li>
    <li class="{{ request()->is('about_us') ? 'active' : '' }}">
        <a href="{{ url('about_us') }}"> <i class="fa fa-bar-chart"></i>About Us</a>
    </li>
</ul>
</nav>