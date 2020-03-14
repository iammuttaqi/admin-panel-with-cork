<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Country;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $getUsers = User::all();
        return view('home', compact('getUsers'));
    }

    public function userProfile()
    {
        $getUser = Auth::user();
        return view('auth/user_profile', compact('getUser'));
    }

    public function userProfileSetting(Request $request)
    {
        $getUser = Auth::user();
        if ($request->isMethod('post')) {
            User::where('id', $getUser->id)->update([
                'name' => $request->name,
                'birthday' => $request->birthday,
                'profession' => $request->profession,
                'username' => $request->username,
                'gender' => $request->gender,
                'bio' => $request->bio,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'website' => $request->website,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'github' => $request->github,
                'country_id' => $request->country_id,
                'location' => $request->location,
            ]);
            return response('Profile Updated Successfully');
        }
        $getCountries = Country::all();
        return view('auth/user_profile_setting', compact('getUser', 'getCountries'));
    }

    public function userImageUpload(Request $request)
    {
        $getUser = Auth::user();
        if ($request->isMethod('post')) {
            if ($request->hasFile('image')) {
                if ($getUser->image == 'default.jpg') {
                    $image = $request->image;
                    $ext = $image->getClientOriginalExtension();
                    $filename = $getUser->id.'. '.$getUser->name.'-'.date('Y-m-d-H-i-s').'.'.$ext;
                    $image->move(public_path('uploads/users/images/'), $filename);
                    User::where('id', $getUser->id)->update([
                        'image' => $filename,
                    ]);
                }
                else {
                    //delete old image
                    $delete_image = $getUser->image;
                    unlink('uploads/users/images/'.$delete_image);

                    //upload new image
                    $image = $request->image;
                    $ext = $image->getClientOriginalExtension();
                    $filename = $getUser->id.'. '.$getUser->name.'-'.date('Y-m-d-H-i-s').'.'.$ext;
                    $image->move(public_path('uploads/users/images/'), $filename);
                    User::where('id', $getUser->id)->update([
                        'image' => $filename,
                    ]);
                }
            }
        }
    }
}
