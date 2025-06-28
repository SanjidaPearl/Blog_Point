<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admincss/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ Auth::user()->name }}</h1>
            <h1 class="h5">{{ Auth::user()->email }}</h1>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{ url('post_page') }}"> <i class="icon-grid"></i>Add Post </a></li>
                <li><a href="{{ url('/show_post') }}"> <i class="fa fa-bar-chart"></i>Show Post </a></li>
       <li><a href="{{ url('/about_us') }}"> <i class="fa fa-bar-chart"></i>About Us</a></li>
      </nav>