<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $id;
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        $this->id = Auth::user()->id;
        $details = profile::where('user_id',$this->id)->first();

        return view('admin.profile',compact('details'));
    }
    public function updateProfile(Request $request){

        $this->id = Auth::user()->id;

        $uData = User::find($this->id);
        $uData->name = $request->input('name');
        $uData->email = $request->input('email');
        $uData->save();  // Use save() to persist changes.

        $pData = [
            'mobile' => $request->input('mobile'),
            'country' => $request->input('country'),
            'region' => $request->input('region'),
            'user_id' => $this->id,
        ];

        profile::updateOrCreate(['user_id' => $this->id], $pData);  // Use updateOrCreate properly.

        return back()->with('pUpdate','Profile Update');

    }
    public function uploadImage(Request $request) {

        $this->id = Auth::user()->id;

        $file = $request->file('profile_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $path = $file->move(public_path('image'), $filename); // Move the file to the public folder
        $imageUrl = asset($filename);

        $pData = [
            'image' => $filename,
        ];

        profile::updateOrCreate(['user_id' => $this->id], $pData);  // Use updateOrCreate properly.

        return back()->with('pUpdate','Profile Update');

    }
}
