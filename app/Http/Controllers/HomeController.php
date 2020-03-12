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

    public function userProfileSetting(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            User::where('id', $id)->update([
                'name' => $request->name,
                'birthday' => $request->birthday,
                'profession' => $request->profession,
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
        $getUser = Auth::user();
        $getCountries = Country::all();
        return view('auth/user_profile_setting', compact('getUser', 'getCountries'));
    }
}
