
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login Page</title>

  <link rel="stylesheet" href="{{asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/base/vendor.bundle.base.css')}}">

  <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                {{-- <img src="{{asset('assets/admin/images/logo.svg')}}" alt="logo"> --}}
              </div>
              <h4>Admin! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>

              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email or Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    <a class="auth-link text-black" href="{{ route('/admin/reset-password') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets/admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('assets/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/admin/js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>
