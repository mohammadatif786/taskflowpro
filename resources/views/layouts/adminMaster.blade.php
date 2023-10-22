
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Panel</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
  <div class="container-scroller">

    @include('layouts.component.admin.navbar')

    <div class="container-fluid page-body-wrapper">

        @include('layouts.component.admin.sidebar')

        <div class="main-panel">

            <div class="content-wrapper">

                @yield('content')

            </div>

        </div>
    </div>
  </div>

  <script src="{{asset('assets/admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/admin/js/template.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="{{ asset('assets/admin/js/task.js') }}"></script>
  <script src="{{ asset('assets/admin/js/employee.js') }}"></script>
  <script src="{{ asset('assets/admin/js/taskCategory.js') }}"></script>

</body>

</html>

