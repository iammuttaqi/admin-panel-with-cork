@extends('layouts/backend_master')

@section('title', 'Profile')

@section('styles')
<link href="{{ asset('backend_assets/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row layout-spacing">
	<!-- Content -->
<div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
	<div class="user-profile layout-spacing">
		<div class="widget-content widget-content-area">
			<div class="d-flex justify-content-between">
				<h3 class="">Info</h3>
				<a href="{{ route('user_profile_setting') }}" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
			</div>
			<div class="text-center user-info">

				<img src="@if ($getUser->gender == 'M' && $getUser->image == 'default.jpg'){{ asset('uploads/users/images/male.png') }}@elseif($getUser->gender == 'F' && $getUser->image == 'default.jpg'){{ asset('uploads/users/images/female.png') }}@elseif(isset($getUser->image)){{ asset('uploads/users/images') }}/{{ $getUser->image }}@endif" alt="avatar" width="100px">
				
				{{-- @if ($getUser->gender == 'M')
					<img src="{{ asset('uploads/users/images/male.png') }}" alt="avatar" width="100px">
				@elseif($getUser->gender == 'F')
					<img src="{{ asset('uploads/users/images/female.png') }}" alt="avatar" width="100px">
				@else <img src="{{ asset('uploads/users/images/default.jpg') }}" alt="avatar" width="100px">
				@endif --}}
				
				<p class="">{{ $getUser->name }}</p>
			</div>
			<div class="user-info-list">
				<div class="">
					<ul class="contacts-block list-unstyled">
						@if ($getUser->profession)
						<li class="contacts-block__item">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>{{ $getUser->profession }}
						</li>
						@endif
						@if ($getUser->birthday)
						<li class="contacts-block__item">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>{{ $getUser->birthday }}
						</li>
						@endif
						@if ($getUser->address)
						<li class="contacts-block__item">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>{{ $getUser->address }}, {{ $getUser->location }}, {{ $getUser->getCountry->country_name }}
						</li>
						@endif
						@if ($getUser->email)
						<li class="contacts-block__item">
								<a href="mailto:{{ $getUser->email }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{ $getUser->email }}</a>
						</li>
						@endif
						@if ($getUser->phone)
						<li class="contacts-block__item">
							<a href="tel:{{$getUser->phone}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>{{ $getUser->phone }}</a>
						</li>
						@endif
						@if ($getUser->facebook)
						<li class="contacts-block__item">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a href="https://www.facebook.com/{{ $getUser->facebook }}">
										<div class="social-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
										</div>
								</a>
							</li>
						@endif
						@if ($getUser->twitter)
						<li class="list-inline-item">
							<a href="https://twitter.com/{{ $getUser->twitter }}">
								<div class="social-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
								</div>
							</a>
						</li>
						@endif
						@if ($getUser->instagram)
						<li class="list-inline-item">
							<a href="https://instagram.com/{{ $getUser->instagram }}">
								<div class="social-icon">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
								</div>
							</a>
						</li>
						@endif
						@if ($getUser->github)
						<li class="list-inline-item">
							<a href="https://github.com/{{ $getUser->github }}">
								<div class="social-icon">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
								</div>
							</a>
						</li>
						@endif
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
<div class="education layout-spacing ">
	<div class="widget-content widget-content-area">
		<h3 class="">Education</h3>
		<div class="timeline-alter">
			<div class="item-timeline">
				<div class="t-meta-date">
					<p class="">04 Mar 2009</p>
				</div>
				<div class="t-dot">
				</div>
				<div class="t-text">
					<p>Royal Collage of Art</p>
					<p>Designer Illustrator</p>
				</div>
			</div>
			<div class="item-timeline">
				<div class="t-meta-date">
					<p class="">25 Apr 2014</p>
				</div>
				<div class="t-dot">
				</div>
				<div class="t-text">
					<p>Massachusetts Institute of Technology (MIT)</p>
					<p>Designer Illustrator</p>
				</div>
			</div>
			<div class="item-timeline">
				<div class="t-meta-date">
					<p class="">04 Apr 2018</p>
				</div>
				<div class="t-dot">
				</div>
				<div class="t-text">
					<p>School of Art Institute of Chicago (SAIC)</p>
					<p>Designer Illustrator</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="work-experience layout-spacing ">
	<div class="widget-content widget-content-area">
		<h3 class="">Work Experience</h3>
		<div class="timeline-alter">
			<div class="item-timeline">
				<div class="t-meta-date">
					<p class="">04 Mar 2009</p>
				</div>
				<div class="t-dot">
				</div>
				<div class="t-text">
					<p>Netfilx Inc.</p>
					<p>Designer Illustrator</p>
				</div>
			</div>
			<div class="item-timeline">
				<div class="t-meta-date">
					<p class="">25 Apr 2014</p>
				</div>
				<div class="t-dot">
				</div>
				<div class="t-text">
					<p>Google Inc.</p>
					<p>Designer Illustrator</p>
				</div>
			</div>
			<div class="item-timeline">
				<div class="t-meta-date">
					<p class="">04 Apr 2018</p>
				</div>
				<div class="t-dot">
				</div>
				<div class="t-text">
					<p>Design Reset Inc.</p>
					<p>Designer Illustrator</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
<div class="skills layout-spacing ">
	<div class="widget-content widget-content-area">
		<h3 class="">Skills</h3>
		<div class="progress br-30">
			<div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>PHP</span> <span>25%</span> </div></div>
		</div>
		<div class="progress br-30">
			<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Wordpress</span> <span>50%</span> </div></div>
		</div>
		<div class="progress br-30">
			<div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Javascript</span> <span>70%</span> </div></div>
		</div>
		<div class="progress br-30">
			<div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>jQuery</span> <span>60%</span> </div></div>
		</div>
	</div>
</div>
<div class="bio layout-spacing ">
	<div class="widget-content widget-content-area">
		<h3 class="">Bio</h3>
		<p>{{ $getUser->bio }}</p>
<div class="bio-skill-box">
	<div class="row">
		<div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
			<div class="d-flex b-skills">
				<div>
				</div>
				<div class="">
					<h5>Sass Applications</h5>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur.</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">
			<div class="d-flex b-skills">
				<div>
				</div>
				<div class="">
					<h5>Github Countributer</h5>
					<p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">
			<div class="d-flex b-skills">
				<div>
				</div>
				<div class="">
					<h5>Photograhpy</h5>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia anim id est laborum.</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">
			<div class="d-flex b-skills">
				<div>
				</div>
				<div class="">
					<h5>Mobile Apps</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>

@endsection