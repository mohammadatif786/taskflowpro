<link rel="stylesheet" href="{{asset('employeeProfile.css')}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img id="profileImage" class="rounded-circle mt-5" height="150px" width="150px" src="{{ $details ? asset('image/'.$details->image) : 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg' }}" alt="Profile Image">
                <input type="file" id="fileInput" style="display: none;" accept="image">
                <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                <span class="text-black-50">{{ Auth::user()->email }}</span>
                <span> </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="{{ route('/admin.update-profile',['adminId'=> Auth::user()->id]) }}" method="post">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" required name="name" class="form-control" placeholder="first name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <input type="email" required name="email" readonly class="form-control" placeholder="email" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Mobile Number</label>
                            <input type="text" required name="mobile" class="form-control" value="{{ old('mobile', ($details ? $details->mobile : 'mobile number')) }} ">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Country</label>
                            <input type="text"  required name="country" class="form-control"  value="{{ old('Country', ($details ? $details->country : 'Country')) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">State/Region</label>
                            <input type="text" required name="region" class="form-control" value="{{ old('Region', ($details ? $details->region : 'Region')) }} ">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <input class="btn btn-primary profile-button" type="submit" value="Save Profile">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('assets/admin/js/profile.js') }}"></script>
