@extends('layouts.backend_master')

@section('title', 'Categories')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/assets/css/forms/theme-checkbox-radio.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/plugins/table/datatable/dt-global_style.css') }}">
<link href="{{ asset('backend_assets/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend_assets/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/assets/css/elements/alert.css') }}">
    <style>
        .btn-light { border-color: transparent; }
    </style>

@endsection

@section('content')

    <div class="row layout-top-spacing" id="cancel-row">
    	
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
            @include('layouts/message')
            <a class="btn btn-lg btn-outline-primary" data-toggle="modal" data-target="#categoryAdd">Add Category</a>
            
			<!-- Modal -->
			<div class="modal fade" id="categoryAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			    <div class="modal-dialog modal-dialog-centered" role="document">
			        <div class="modal-content">
			            <div class="modal-header">
			                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                  <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
			                </button>
			            </div>
			            <form class="simple-example" action="{{ route('category_add') }}" method="post" novalidate>
			            	@csrf
				            <div class="modal-body">
			                    <div class="form-row">
			                        <div class="col-md-12 mb-4">
			                            <label for="categoryName">Category Name</label>
			                            <input type="text" class="form-control" name="category_name" id="categoryName" value="{{ old('category_name') }}" required>
			                            <div class="valid-feedback">
			                                Looks good!
			                            </div>
			                            <div class="invalid-feedback">
			                                Please fill the category name
			                            </div>
			                        </div>
			                        <div class="col-md-12 mb-4">
			                            <label for="categoryDescription">Category Description</label>
			                            <textarea class="form-control" name="category_description" id="categoryDescription" required>
			                            	{{ old('category_description') }}
			                            </textarea>
			                            <div class="valid-feedback">
			                                Looks good!
			                            </div>
			                            <div class="invalid-feedback">
			                                Please fill the category description
			                            </div>
			                        </div>
			                        <div class="col-md-12 mb-4">
			                        	<div class="n-chk">
				                            <label class="new-control new-checkbox checkbox-primary">
				                              <input type="checkbox" name="menu_status" class="new-control-input" value="1">
				                              &nbsp;
				                              <span class="new-control-indicator"></span>Use as Menu
				                            </label>
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

                <div class="table-responsive mb-4 mt-4">

                    <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl. No</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Menu Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getCategories as $category)
                            	<tr>
	                            	<td>{{ $loop->index+1 }}</td>
	                            	<td>{{ $category->category_name }}</td>
	                            	<td>{{ $category->category_slug }}</td>
	                            	<td>{{ Str::limit($category->category_description, 20) }}</td>
	                            	<td>
	                            		<a href="{{ route('category_status_change', $category->id) }}" class="btn btn-sm {{ $category->status == 1 ? 'btn-outline-success' : 'btn-outline-danger' }} btn-rounded mb-2 bs-tooltip" title="{{ $category->status == 1 ? 'Click to Deactivate' : 'Click to Activate' }}" data-placement="top" data-delay="300">{{ $category->status == 1 ? 'Active' : 'Deactive' }}</a></td>
	                            	<td>
                        		    	<a href="{{ route('cateogory_menu_status_change', $category->id) }}" class="btn btn-sm {{ $category->menu_status == 0 ? 'btn-outline-danger' : 'btn-outline-success' }} btn-rounded mb-2 bs-tooltip" title="{{ $category->menu_status == 0 ? 'Click to Activate' : 'Click to Deactivate' }}" data-placement="top" data-delay="300">{{ $category->menu_status == 0 ? 'Deactive' : 'Active' }}</a>
	                            	</td>
	                            	<td>
	                            		<a class="btn btn-sm btn-info mb-2 mr-2 btn-rounded bs-tooltip" title="View" data-placement="top" data-delay="300"> <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                                        
                                        <a class="btn btn-sm btn-warning mb-2 mr-2 btn-rounded bs-tooltip" title="Edit" data-placement="top" data-delay="300" data-toggle="modal" data-target="#categoryEdit{{ $category->id }}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                        
                                        <a href="{{ route('category_delete', $category->id) }}" class="btn btn-sm btn-danger mb-2 mr-2 btn-rounded bs-tooltip" title="Delete" data-placement="top" data-delay="300"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>

	                            	</td>
	                            </tr>
	                            <div class="modal fade" id="categoryEdit{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									    <div class="modal-dialog modal-dialog-centered" role="document">
									        <div class="modal-content">
									            <div class="modal-header">
									                <h5 class="modal-title" id="exampleModalLabel">Edit Category - <strong>{{ $category->category_name }}</strong></h5>
									                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									                  <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									                </button>
									            </div>
									            <form class="simple-example" action="{{ route('category_udpate', $category->id) }}" method="post" novalidate>
									            	@csrf
										            <div class="modal-body">
									                    <div class="form-row">
									                        <div class="col-md-12 mb-4">
									                            <label for="categoryName">Category Name</label>
									                            <input type="text" class="form-control" name="category_name" id="categoryName" value="{{ $category->category_name }}" required>
									                            <div class="valid-feedback">
									                                Looks good!
									                            </div>
									                            <div class="invalid-feedback">
									                                Please fill the category name
									                            </div>
									                        </div>
									                        <div class="col-md-12 mb-4">
									                            <label for="categoryDescription">Category Description</label>
									                            <textarea class="form-control" name="category_description" id="categoryDescription" required>
									                            	{{ $category->category_description }}
									                            </textarea>
									                            <div class="valid-feedback">
									                                Looks good!
									                            </div>
									                            <div class="invalid-feedback">
									                                Please fill the category description
									                            </div>
									                        </div>
									                        <div class="col-md-12 mb-4">
									                        	<div class="n-chk">
										                            <label class="new-control new-checkbox checkbox-primary">
										                              <input type="checkbox" name="menu_status" class="new-control-input" value="1" {{ $category->menu_status == 1 ? 'checked=""' : '' }}>
										                              &nbsp;
										                              <span class="new-control-indicator"></span>Use as Menu
										                            </label>
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
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Menu Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

<script src="{{ asset('backend_assets/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $('#multi-column-ordering').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            columnDefs: [ {
                targets: [ 0 ],
                orderData: [ 0, 1 ]
            }, {
                targets: [ 1 ],
                orderData: [ 1, 0 ]
            }, {
                targets: [ 4 ],
                orderData: [ 4, 0 ]
            } ]
        });
    </script>

    <script src="{{ asset('backend_assets/assets/js/scrollspyNav.js') }}"></script>
    <script>
        $('#yt-video-link').click(function () {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function () {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function () {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>

    <script type="text/javascript">
    	window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('simple-example');
		var invalid = $('.simple-example .invalid-feedback');

		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		  form.addEventListener('submit', function(event) {
		    if (form.checkValidity() === false) {
		      event.preventDefault();
		      event.stopPropagation();
		        invalid.css('display', 'block');
		    } else {

		        invalid.css('display', 'none');

		        form.classList.add('was-validated');
		    }
		  }, false);
		});

		}, false);

    </script>

@endsection