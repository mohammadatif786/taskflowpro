
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Employee Panel</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container-scroller">

    @include('layouts.component.employee.navbar')

    <div class="container-fluid page-body-wrapper">

        @include('layouts.component.employee.sidebar')

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


</body>

</html>

