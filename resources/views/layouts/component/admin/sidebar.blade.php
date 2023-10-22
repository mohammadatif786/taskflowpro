<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('/admin/dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="{{route('admin/employee')}}">
            <i style="padding-right:15px " class="mdi mdi-account-multiple"></i>
          <span class="menu-title" >Employee</span>
        </a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="{{route('admin/task')}}">
            <i style="padding-right:15px " class="mdi mdi-clipboard"></i>
          <span class="menu-title" >Task</span>
        </a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="{{route('admin/task-category')}}">
            <i style="padding-right:15px " class="mdi mdi-clipboard-text"></i>
          <span class="menu-title" >Task Category</span>
        </a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="{{route('admin/task-assign-to-employee')}}">
            <i style="padding-right:15px " class="mdi mdi-clippy"></i>
          <span class="menu-title" >Task Assignment</span>
        </a>
      </li>
    </ul>
  </nav>
