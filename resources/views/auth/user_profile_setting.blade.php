@extends('layouts/backend_master')

@section('title', 'Edit Profile')

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/plugins/dropify/dropify.min.css') }}">
    <link href="{{ asset('backend_assets/assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend_assets/plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend_assets/plugins/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend_assets/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/plugins/bootstrap-select/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend_assets/plugins/editors/markdown/simplemde.min.css') }}">
    <link href="{{ asset('backend_assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('backend_assets/plugins/sweetalerts/promise-polyfill.js') }}"></script>
    <link href="{{ asset('backend_assets/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend_assets/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend_assets/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend_assets/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .dropify-render img {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        .modal-header {
            height: 56px;
        }

        .modal-title {
            text-transform: none !important;
        }
    </style>

@endsection

@section('content')

<div class="account-settings-container layout-top-spacing">
    <div class="account-content">
        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            @include('layouts/message')
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
                                                <input type="file" id="uploadImage" class="dropify" data-default-file="@if ($getUser->gender == 'M' && $getUser->image == 'default.jpg'){{ asset('uploads/users/images/male.png') }}@elseif($getUser->gender == 'F' && $getUser->image == 'default.jpg'){{ asset('uploads/users/images/female.png') }}@elseif(isset($getUser->image)){{ asset('uploads/users/images') }}/{{ $getUser->image }}@endif" data-max-file-size="2M"/ name="image">
                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>Upload Picture</p>
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
                                                            <select id="gender" class="selectpicker form-control">
                                                                <option disabled selected>--Select Gender--</option>
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
                    <div id="work-platforms" class="section work-platforms">
                        <div class="info">
                            <h5 class="">Work Platforms</h5>
                            <div class="row">
                                <div class="col-md-12 text-right mb-5">
                                    <a id="add-work-platforms" class="btn btn-primary" data-toggle="modal" data-target="#workPlatformAdd">Add</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="workPlatformAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Work Platform</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form class="simple-example" action="{{ route('work_platform_add') }}" method="post" novalidate>
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-4">
                                                            <label for="workPlatform">Work Platform</label>
                                                            <input type="text" class="form-control" name="work_platform" id="workPlatform" value="{{ old('work_platform') }}" required>
                                                        </div>
                                                        <div class="col-md-12 mb-4">
                                                            <label for="platformDescription">Platform Description</label>
                                                            <textarea class="form-control" name="platform_description" id="platformDescription" required>
                                                            {{ old('platform_description') }}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-11 mx-auto">
                                    @if (isset($getWorkPlatforms))
                                    <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sl. No</th>
                                                <th>Work Platform</th>
                                                <th>Platform Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getWorkPlatforms as $workPlatform)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $workPlatform->work_platform }}</td>
                                                <td>{{ Str::limit($workPlatform->platform_description, 20) }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-info mb-2 mr-2 btn-rounded bs-tooltip" title="View" data-placement="top" data-delay="300">
                                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                </a>
                                                
                                                <a class="btn btn-sm btn-warning mb-2 mr-2 btn-rounded bs-tooltip" title="Edit" data-placement="top" data-delay="300" data-toggle="modal" data-target="#platformEdit{{ $workPlatform->id }}">
                                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                            </a>
                                            
                                            <a class="btn btn-sm btn-danger mb-2 mr-2 btn-rounded bs-tooltip" title="Delete" data-placement="top" data-toggle="modal" data-target="#deleteConfirmation{{ $workPlatform->id }}">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="platformEdit{{ $workPlatform->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Platform - <strong>{{ $workPlatform->work_platform }}</strong></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form class="simple-example" action="{{ route('work_platform_update', $workPlatform->id) }}" method="post" novalidate>
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-4">
                                                            <label for="workPlatform">Work Platform</label>
                                                            <input type="text" class="form-control" name="work_platform" id="workPlatform" value="{{ $workPlatform->work_platform }}" required>
                                                        </div>
                                                        <div class="col-md-12 mb-4">
                                                            <label for="platformDescription">Platform Description</label>
                                                            <textarea class="form-control" name="platform_description" id="platformDescription" required>
                                                            {{ $workPlatform->platform_description }}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="deleteConfirmation{{ $workPlatform->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content" id="deleteConfirmationLabel">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete the platform?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="">If you delete the platform it will be gone forever. Are you sure you want to proceed?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                                                <a href="{{ route('work_platform_delete', $workPlatform->id) }}" type="button" class="btn btn-danger" data-remove="task">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sl. No</th>
                                <th>Work Platform</th>
                                <th>Platform Description</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
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
                                    <select class="form-control selectCountry" id="country_id">
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
                                    <input class="form-control mb-4" name="phone" id="phone" value="{{ $getUser->phone }}">
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
    {{-- Skills start --}}
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <div id="skill" class="section skill">
            <div class="info">
                <h5 class="">Skills</h5>
                <div class="row progress-bar-section" id="skillAppendHere">
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
                </div>
            </div>
        </div>
    </div>
    {{-- Skills end --}}
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <div id="edu-experience" class="section edu-experience">
            <div class="info">
                <h5 class="">Education</h5>
                <div class="row">
                    <div class="col-md-12 text-right mb-5">
                        <a id="add-education" class="btn btn-primary" data-toggle="modal" data-target="#educationAdd">Add</a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="educationAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="{{ route('education_add') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="col-md-11 mx-auto">
                                            <div class="edu-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="degree1">Enter Your Collage Name</label>
                                                            <input type="text" name="education_title" class="form-control mb-4" id="degree1" placeholder="Add your education here" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="department">Department</label>
                                                            <input type="text" name="education_department" class="form-control mb-4" id="department" placeholder="Enter department here" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Starting From</label>
                                                                    <input type="date" id="basicFlatpickr" name="education_start" class="form-control" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Ending In</label>
                                                                    <input type="date" id="basicFlatpickr" name="education_end" class="form-control" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-11 mx-auto">
                        @if (isset($getEducations))
                        <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Education</th>
                                    <th>Department</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getEducations as $education)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $education->education_title }}</td>
                                    <td>{{ $education->education_department }}</td>
                                    <td>{{ $education->education_start }}</td>
                                    <td>{{ $education->education_end }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info mb-2 mr-2 btn-rounded bs-tooltip" title="View" data-placement="top" data-delay="300">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </a>
                                    
                                    <a class="btn btn-sm btn-warning mb-2 mr-2 btn-rounded bs-tooltip" title="Edit" data-placement="top" data-delay="300" data-toggle="modal" data-target="#educationEdit{{ $education->id }}">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                </a>
                                
                                <a class="btn btn-sm btn-danger mb-2 mr-2 btn-rounded bs-tooltip" title="Delete" data-placement="top" data-toggle="modal" data-target="#educationDeleteConfirmation{{ $education->id }}">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </a>
                        </td>
                        <div class="modal fade" id="educationDeleteConfirmation{{ $education->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" id="deleteConfirmationLabel">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete the platform?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="">If you delete the education it will be gone forever. Are you sure you want to proceed?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                                        <a href="{{ route('education_delete', $education->id) }}" type="button" class="btn btn-danger" data-remove="task">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="educationEdit{{ $education->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Education - {{ $education->education_title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="{{ route('education_edit', $education->id) }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="col-md-11 mx-auto">
                                            <div class="edu-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="degree1">Enter Your Collage Name</label>
                                                            <input type="text" name="education_title" class="form-control mb-4" id="degree1" placeholder="Add your education here" required="" value="{{ $education->education_title }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="department">Department</label>
                                                            <input type="text" name="education_department" class="form-control mb-4" id="department" placeholder="Enter department here" required="" value="{{ $education->education_department }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Starting From</label>
                                                                    <input type="date" id="basicFlatpickr" name="education_start" class="form-control" required="" value="{{ $education->education_start }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Ending In</label>
                                                                    <input type="date" id="basicFlatpickr" name="education_end" class="form-control" required="" value="{{ $education->education_end }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Sl. No</th>
                    <th>Education</th>
                    <th>Department</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
            @endif
        </div>
    </div>
</div>
</div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
<div id="work-experience" class="section work-experience">
<div class="info">
    <h5 class="">Work Experience</h5>
    <div class="row">
        <div class="col-md-12 text-right mb-5">
            <button id="add-work-exp" class="btn btn-primary" data-toggle="modal" data-target="#workAdd">Add</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="workAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Work</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{ route('work_add') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="col-md-11 mx-auto">
                                <div class="work-section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="degree2">Company Name</label>
                                                <input type="text" name="company" class="form-control mb-4" id="degree2" placeholder="Enter Company Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="degree3">Job Title</label>
                                                        <input type="text" name="job_title" class="form-control mb-4" id="degree3" placeholder="Enter Job Title" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="degree4">Location</label>
                                                        <input type="text" name="job_location" class="form-control mb-4" id="degree4" placeholder="Job Location" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Starting From</label>
                                                        <input type="date" name="work_start" id="basicFlatpickr" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Ending In</label>
                                                        <input type="date" name="work_end" id="basicFlatpickr" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="work_description" placeholder="Description" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-11 mx-auto">
            @if (isset($getWorks))
            <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl. No</th>
                        <th>Company</th>
                        <th>Job Title</th>
                        <th>Job Location</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getWorks as $work)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $work->company }}</td>
                        <td>{{ $work->job_title }}</td>
                        <td>{{ $work->job_location }}</td>
                        <td>{{ $work->work_start }}</td>
                        <td>{{ $work->work_end }}</td>
                        <td>{{ $work->work_description }}</td>
                        <td>
                            <a class="btn btn-sm btn-info mb-2 mr-2 btn-rounded bs-tooltip" title="View" data-placement="top" data-delay="300">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </a>
                        
                        <a class="btn btn-sm btn-warning mb-2 mr-2 btn-rounded bs-tooltip" title="Edit" data-placement="top" data-delay="300" data-toggle="modal" data-target="#workEdit{{ $work->id }}">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                    </a>
                    
                    <a class="btn btn-sm btn-danger mb-2 mr-2 btn-rounded bs-tooltip" title="Delete" data-placement="top" data-toggle="modal" data-target="#workDeleteConfirmation{{ $work->id }}">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                </a>
            </td>
            <div class="modal fade" id="workDeleteConfirmation{{ $work->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" id="deleteConfirmationLabel">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete the work?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="">If you delete the work it will be gone forever. Are you sure you want to proceed?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                            <a href="{{ route('work_delete', $work->id) }}" type="button" class="btn btn-danger" data-remove="task">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="workEdit{{ $work->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Work - {{ $work->job_title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{ route('work_edit', $work->id) }}">
                        @csrf
                        <div class="modal-body">
                            <div class="col-md-11 mx-auto">
                                <div class="work-section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="degree2">Company Name</label>
                                                <input type="text" name="company" class="form-control mb-4" id="degree2" placeholder="Enter Company Name" value="{{ $work->company }}" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="degree3">Job Title</label>
                                                        <input type="text" name="job_title" class="form-control mb-4" id="degree3" placeholder="Enter Job Title" value="{{ $work->job_title }}" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="degree4">Location</label>
                                                        <input type="text" name="job_location" class="form-control mb-4" id="degree4" placeholder="Job Location" value="{{ $work->job_location }}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Starting From</label>
                                                        <input type="date" name="work_start" id="basicFlatpickr" class="form-control" value="{{ $work->work_start }}" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Ending In</label>
                                                        <input type="date" name="work_end" id="basicFlatpickr" class="form-control" value="{{ $work->work_end }}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="work_description" placeholder="Description" rows="10">{{ $work->work_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th>Sl. No</th>
        <th>Company</th>
        <th>Job Title</th>
        <th>Job Location</th>
        <th>From</th>
        <th>To</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </tfoot>
</table>
@endif
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="account-settings-footer">
    <div class="as-footer-container">
        <button id="multiple-reset" class="btn btn-warning">Reset All</button>
        <button type="submit" id="SaveChanges" class="btn btn-primary">Save Changes</button>
    </div>
</div>
</div>

@endsection

@section('scripts')

<script src="{{ asset('backend_assets/plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/blockui/jquery.blockUI.min.js') }}"></script>
<script src="{{ asset('backend_assets/assets/js/users/account-settings.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/flatpickr/custom-flatpickr.js') }}"></script>
<script src="{{ asset('backend_assets/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/select2/custom-select2.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/editors/markdown/simplemde.min.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/editors/markdown/custom-markdown.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('backend_assets/plugins/sweetalerts/custom-sweetalert.js') }}"></script>

<script type="text/javascript">

    $('#SaveChanges').on('click', function(){

        var formData = new FormData();
        var image = $('#uploadImage')[0].files[0];
        formData.append('image',image);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url: '{{ route("user_image_upload") }}',
            data:formData,
            contentType: false,
            processData: false,
        });

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
            url: '{{ route("user_profile_setting") }}',
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
                swal({
                  title: 'Success!',
                  text: data,
                  type: 'success',
                  padding: '2em'
                });
            }
        });

    });
    

    //select2
    var ss = $(".selectCountry").select2({
        tags: true,
    });

</script>

@endsection