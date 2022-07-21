 <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

              @foreach($loggedInUserr as $member)
          <li class="nav-item">
            <a class="nav-link" href="{{$member['route']}}">
              <i class="{{$member['icon']}}"></i>
              <span class="menu-title">{{$member['name']}}</span>
            </a>
          </li> 
          @endforeach 
        </ul>
      </nav>