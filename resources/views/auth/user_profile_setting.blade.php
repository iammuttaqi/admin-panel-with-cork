@extends('layouts/backend_master')

@section('title', 'Profile')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/plugins/dropify/dropify.min.css') }}">
    <link href="{{ asset('backend_assets/assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('backend_assets/plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('backend_assets/plugins/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">

@endsection


@section('content')

        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">General Information</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                    <div class="upload mt-4 pr-md-4">
                                                        <input type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ asset('uploads/users/images') }}/{{ $getUser->image }}" data-max-file-size="2M"/ name="image">
                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="name"> Name</label>
                                                                    <input type="text" class="form-control mb-4" id="name" name="name" placeholder="Name" value="{{ $getUser->name }}" name="name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Username</label>
                                                                    <input type="text" class="form-control mb-4" id="username" value="{{ $getUser->username }}" name="username">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="profession">Profession</label>
                                                                    <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="{{ $getUser->profession }}" name="professioin">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="dob-input">Date of Birth</label>
                                                                <div class="d-sm-flex d-block">
                                                                    <div class="form-group mr-1">
                                                                        <input id="basicFlatpickr" name="birthday" value="{{ $getUser->birthday }}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date.." name="birthday">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="gender">Gender</label>
                                                                    <select id="gender" class="form-control">
                                                                        <option disabled selected>--Select--</option>
                                                                        <option value="M" {{ $getUser->gender == 'M' ? 'selected' : '' }}>Male</option>
                                                                        <option value="F" {{ $getUser->gender == 'F' ? 'selected' : '' }}>Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="about" class="section about">
                                <div class="info">
                                    <h5 class="">About</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="form-group">
                                                <label for="aboutBio">Bio</label>
                                                <textarea class="form-control" id="aboutBio" placeholder="Tell something interesting about yourself" rows="10" name="bio">{{ $getUser->bio }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="work-platforms" class="section work-platforms">
                                <div class="info">
                                    <h5 class="">Work Platforms</h5>
                                    <div class="row">
                                        <div class="col-md-12 text-right mb-5">
                                            <button id="add-work-platforms" class="btn btn-primary">Add</button>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="platform-div">
                                                <div class="form-group">
                                                    <label for="platform-title">Platforms Title</label>
                                                    <input type="text" class="form-control mb-4" id="platform-title" placeholder="Platforms Title" value="Web Design" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="platform-description">Description</label>
                                                    <textarea class="form-control mb-4" id="platform-description" placeholder="Platforms Description" rows="10">Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="contact" class="section contact">
                                <div class="info">
                                    <h5 class="">Contact</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="country_id">Country</label>
                                                        <select class="form-control" id="country_id">
                                                            <option selected="" disabled="">--Select Your Country</option>
                                                            @foreach ($getCountries as $country)
                                                                <option value="{{ $country->id }}" {{ $country->id == $getUser->country_id ? 'selected' : '' }}>{{ $country->country_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control mb-4" id="address" placeholder="Address" value="{{ $getUser->address }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location">Location</label>
                                                        <input type="text" class="form-control mb-4" id="location" placeholder="Location" value="{{ $getUser->location }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control mb-4" id="phone" placeholder="Write your phone number here" value="{{ $getUser->phone }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control mb-4" id="email" placeholder="Write your email here" value="{{ $getUser->email }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="website1">Website</label>
                                                        <input type="text" class="form-control mb-4" id="website" placeholder="Write your website here" value="{{ $getUser->website }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="social" class="section social">
                                <div class="info">
                                    <h5 class="">Social</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group social-instagram mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="linkedin"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Instagram Username" aria-label="Username" aria-describedby="instagram" value="{{$getUser->instagram}}" name="instagram" id="instagram">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group social-tweet mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="tweet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Twitter Username" aria-label="Username" aria-describedby="tweet" value="{{ $getUser->twitter }}" name="twitter" id="twitter">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group social-fb mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb" value="{{ $getUser->facebook }}" name="facebook" id="facebook">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group social-github mb-3">
                                                        <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Github Username" aria-label="Username" aria-describedby="github" name="github" id="githubSocial" value="{{ $getUser->github }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="skill" class="section skill">
                                <div class="info">
                                    <h5 class="">Skills</h5>
                                    <div class="row progress-bar-section">
                                        <div class="col-md-12 mx-auto">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11 mx-auto">
                                                        <div class="input-form">
                                                            <input type="text" class="form-control" id="skills" placeholder="Add Your Skills Here" value="">
                                                            <button id="add-skills" class="btn btn-primary">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="custom-progress top-right progress-up" style="width: 100%">
                                                <p class="skill-name">PHP</p>
                                                <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="25">
                                                <div class="range-count"><span class="range-count-number" data-rangecountnumber="25">25</span> <span class="range-count-unit">%</span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="custom-progress top-right progress-up" style="width: 100%">
                                                <p class="skill-name">Wordpress</p>
                                                <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="50">
                                                <div class="range-count"><span class="range-count-number" data-rangecountnumber="50">50</span> <span class="range-count-unit">%</span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="custom-progress top-right progress-up" style="width: 100%">
                                                <p class="skill-name">Javascript</p>
                                                <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="70">
                                                <div class="range-count"><span class="range-count-number" data-rangecountnumber="70">70</span> <span class="range-count-unit">%</span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="custom-progress top-right progress-up" style="width: 100%">
                                                <p class="skill-name">jQuery</p>
                                                <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="60">
                                                <div class="range-count"><span class="range-count-number" data-rangecountnumber="60">60</span> <span class="range-count-unit">%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="edu-experience" class="section edu-experience">
                                <div class="info">
                                    <h5 class="">Education</h5>
                                    <div class="row">
                                        <div class="col-md-12 text-right mb-5">
                                            <button id="add-education" class="btn btn-primary">Add</button>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="edu-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="degree1">Enter Your Collage Name</label>
                                                            <input type="text" class="form-control mb-4" id="degree1" placeholder="Add your education here" value="Royal Collage of Art Designer Illustrator">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Starting From</label>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <select class="form-control mb-4" id="s-from1">
                                                                                <option>Month</option>
                                                                                <option>Jan</option>
                                                                                <option>Feb</option>
                                                                                <option>Mar</option>
                                                                                <option>Apr</option>
                                                                                <option selected="selected">May</option>
                                                                                <option>Jun</option>
                                                                                <option>Jul</option>
                                                                                <option>Aug</option>
                                                                                <option>Sep</option>
                                                                                <option>Oct</option>
                                                                                <option>Nov</option>
                                                                                <option>Dec</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <select class="form-control mb-4" id="s-from2">
                                                                                <option>Year</option>
                                                                                <option>2020</option>
                                                                                <option>2019</option>
                                                                                <option>2018</option>
                                                                                <option>2017</option>
                                                                                <option>2016</option>
                                                                                <option>2015</option>
                                                                                <option>2014</option>
                                                                                <option>2013</option>
                                                                                <option>2012</option>
                                                                                <option>2011</option>
                                                                                <option>2010</option>
                                                                                <option selected="selected">2009</option>
                                                                                <option>2008</option>
                                                                                <option>2007</option>
                                                                                <option>2006</option>
                                                                                <option>2005</option>
                                                                                <option>2004</option>
                                                                                <option>2003</option>
                                                                                <option>2002</option>
                                                                                <option>2001</option>
                                                                                <option>2000</option>
                                                                                <option>1999</option>
                                                                                <option>1998</option>
                                                                                <option>1997</option>
                                                                                <option>1996</option>
                                                                                <option>1995</option>
                                                                                <option>1994</option>
                                                                                <option>1993</option>
                                                                                <option>1992</option>
                                                                                <option>1991</option>
                                                                                <option>1990</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Ending In</label>
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-4">
                                                                            <select class="form-control" id="end-in1">
                                                                                <option>Month</option>
                                                                                <option>Jan</option>
                                                                                <option>Feb</option>
                                                                                <option>Mar</option>
                                                                                <option>Apr</option>
                                                                                <option>May</option>
                                                                                <option>Jun</option>
                                                                                <option>Jul</option>
                                                                                <option>Aug</option>
                                                                                <option>Sep</option>
                                                                                <option>Oct</option>
                                                                                <option>Nov</option>
                                                                                <option>Dec</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <select class="form-control input-sm" id="end-in2">
                                                                                <option>Year</option>
                                                                                <option>2020</option>
                                                                                <option>2019</option>
                                                                                <option>2018</option>
                                                                                <option>2017</option>
                                                                                <option>2016</option>
                                                                                <option>2015</option>
                                                                                <option>2014</option>
                                                                                <option>2013</option>
                                                                                <option>2012</option>
                                                                                <option>2011</option>
                                                                                <option>2010</option>
                                                                                <option>2009</option>
                                                                                <option>2008</option>
                                                                                <option>2007</option>
                                                                                <option>2006</option>
                                                                                <option>2005</option>
                                                                                <option>2004</option>
                                                                                <option>2003</option>
                                                                                <option>2002</option>
                                                                                <option>2001</option>
                                                                                <option>2000</option>
                                                                                <option>1999</option>
                                                                                <option>1998</option>
                                                                                <option>1997</option>
                                                                                <option>1996</option>
                                                                                <option>1995</option>
                                                                                <option>1994</option>
                                                                                <option>1993</option>
                                                                                <option>1992</option>
                                                                                <option>1991</option>
                                                                                <option>1990</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" placeholder="Description" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form id="work-experience" class="section work-experience">
                                <div class="info">
                                    <h5 class="">Work Experience</h5>
                                    <div class="row">
                                        <div class="col-md-12 text-right mb-5">
                                            <button id="add-work-exp" class="btn btn-primary">Add</button>
                                        </div>
                                        <div class="col-md-11 mx-auto">
                                            <div class="work-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="degree2">Company Name</label>
                                                            <input type="text" class="form-control mb-4" id="degree2" placeholder="Add your work here" value="Netfilx Inc.">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3">Job Tilte</label>
                                                                    <input type="text" class="form-control mb-4" id="degree3" placeholder="Add your work here" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree4">Location</label>
                                                                    <input type="text" class="form-control mb-4" id="degree4" placeholder="Add your work here" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Starting From</label>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <select class="form-control mb-4" id="wes-from1">
                                                                                <option>Month</option>
                                                                                <option>Jan</option>
                                                                                <option>Feb</option>
                                                                                <option>Mar</option>
                                                                                <option>Apr</option>
                                                                                <option>May</option>
                                                                                <option>Jun</option>
                                                                                <option>Jul</option>
                                                                                <option>Aug</option>
                                                                                <option>Sep</option>
                                                                                <option>Oct</option>
                                                                                <option>Nov</option>
                                                                                <option>Dec</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <select class="form-control mb-4" id="wes-from2">
                                                                                <option>Year</option>
                                                                                <option>2020</option>
                                                                                <option>2019</option>
                                                                                <option>2018</option>
                                                                                <option>2017</option>
                                                                                <option>2016</option>
                                                                                <option>2015</option>
                                                                                <option>2014</option>
                                                                                <option>2013</option>
                                                                                <option>2012</option>
                                                                                <option>2011</option>
                                                                                <option>2010</option>
                                                                                <option>2009</option>
                                                                                <option>2008</option>
                                                                                <option>2007</option>
                                                                                <option>2006</option>
                                                                                <option>2005</option>
                                                                                <option>2004</option>
                                                                                <option>2003</option>
                                                                                <option>2002</option>
                                                                                <option>2001</option>
                                                                                <option>2000</option>
                                                                                <option>1999</option>
                                                                                <option>1998</option>
                                                                                <option>1997</option>
                                                                                <option>1996</option>
                                                                                <option>1995</option>
                                                                                <option>1994</option>
                                                                                <option>1993</option>
                                                                                <option>1992</option>
                                                                                <option>1991</option>
                                                                                <option>1990</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Ending In</label>
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-4">
                                                                            <select class="form-control" id="eiend-in1">
                                                                                <option>Month</option>
                                                                                <option>Jan</option>
                                                                                <option>Feb</option>
                                                                                <option>Mar</option>
                                                                                <option>Apr</option>
                                                                                <option>May</option>
                                                                                <option>Jun</option>
                                                                                <option>Jul</option>
                                                                                <option>Aug</option>
                                                                                <option>Sep</option>
                                                                                <option>Oct</option>
                                                                                <option>Nov</option>
                                                                                <option>Dec</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <select class="form-control input-sm" id="eiend-in2">
                                                                                <option>Year</option>
                                                                                <option>2020</option>
                                                                                <option>2019</option>
                                                                                <option>2018</option>
                                                                                <option>2017</option>
                                                                                <option>2016</option>
                                                                                <option>2015</option>
                                                                                <option>2014</option>
                                                                                <option>2013</option>
                                                                                <option>2012</option>
                                                                                <option>2011</option>
                                                                                <option>2010</option>
                                                                                <option>2009</option>
                                                                                <option>2008</option>
                                                                                <option>2007</option>
                                                                                <option>2006</option>
                                                                                <option>2005</option>
                                                                                <option>2004</option>
                                                                                <option>2003</option>
                                                                                <option>2002</option>
                                                                                <option>2001</option>
                                                                                <option>2000</option>
                                                                                <option>1999</option>
                                                                                <option>1998</option>
                                                                                <option>1997</option>
                                                                                <option>1996</option>
                                                                                <option>1995</option>
                                                                                <option>1994</option>
                                                                                <option>1993</option>
                                                                                <option>1992</option>
                                                                                <option>1991</option>
                                                                                <option>1990</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" placeholder="Description" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="account-settings-footer">
                <div class="as-footer-container">
                    <button id="multiple-reset" class="btn btn-warning">Reset All</button>
                    <div class="blockui-growl-message">
                        <i class="flaticon-double-check"></i>&nbsp; <span id="successMessage"></span>
                    </div>
                    <button type="submit" id="multiple-messages" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>

@endsection


@section('scripts')
	<script src="{{ asset('backend_assets/plugins/dropify/dropify.min.js') }}"></script>
	<script src="{{ asset('backend_assets/plugins/blockui/jquery.blockUI.min.js') }}"></script>
	<!-- <script src="plugins/tagInput/tags-input.js"></script> -->
	<script src="{{ asset('backend_assets/assets/js/users/account-settings.js') }}"></script>
	<script src="{{ asset('backend_assets/plugins/flatpickr/flatpickr.js') }}"></script>
	<script src="{{ asset('backend_assets/plugins/flatpickr/custom-flatpickr.js') }}"></script>
	<script type="text/javascript">
		$('#multiple-messages').on('click', function(){
			var name = $('#name').val();
			var birthday = $('#basicFlatpickr').val();
			var profession = $('#profession').val();
            var username = $('#username').val();
            var gender = $('#gender').val();
			var bio = $('#aboutBio').val();
			var address = $('#address').val();
			var phone = $('#phone').val();
			var email = $('#email').val();
			var website = $('#website').val();
			var instagram = $('#instagram').val();
			var twitter = $('#twitter').val();
			var facebook = $('#facebook').val();
			var github = $('#githubSocial').val();
            var country_id = $('#country_id').val();
            var location = $('#location').val();
			$.ajax({
				headers: {
				    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  },
				type: 'post',
				url: '{{ route("user_profile_setting", $getUser->id) }}',
				data: {
					name: name,
					birthday: birthday,
					profession: profession,
					bio: bio,
                    username: username,
                    gender: gender,
					address: address,
					phone: phone,
					email: email,
					website: website,
					instagram: instagram,
					twitter: twitter,
					facebook: facebook,
					github: github,
                    country_id: country_id,
                    location: location,
				},
				success: function(data) {
					$('#successMessage').html(data);
				}
			});
		});
	</script>
@endsection