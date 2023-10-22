<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('employee/dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="{{route('employee/task-list')}}">
            <i style="padding-right:15px " class="mdi mdi-clipboard"></i>
          <span class="menu-title" >Task</span>
        </a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="{{route('employee/task-history')}}">
            <i style="padding-right:15px " class="mdi mdi-clipboard-text"></i>
          <span class="menu-title">Task History</span>
        </a>
      </li>
    </ul>
  </nav>
