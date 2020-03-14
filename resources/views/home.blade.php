@extends('layouts.backend_master')

@section('title', 'Dashboard')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/assets/css/forms/theme-checkbox-radio.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/plugins/table/datatable/dt-global_style.css') }}">

@endsection

@section('content')
<div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl. No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Profession</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getUsers as $user)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                <a href="#" class="d-flex">
                                    <div class="usr-img-frame mr-2 rounded-circle">

                                        <img style="width: 100%; height: 100%; object-fit: cover" src="@if ($user->gender == 'M' && $user->image == 'default.jpg'){{ asset('uploads/users/images/male.png') }}@elseif($user->gender == 'F' && $user->image == 'default.jpg'){{ asset('uploads/users/images/female.png') }}@elseif(isset($user->image)){{ asset('uploads/users/images') }}/{{ $user->image }}@endif" class="img-fluid rounded-circle" alt="avatar">

                                        {{-- @if ($user->gender == 'M')
                                            <img alt="avatar" class="img-fluid rounded-circle" src="{{ asset('uploads/users/images/male.png') }}">
                                        @elseif ($user->gender == 'F')
                                            <img alt="avatar" class="img-fluid rounded-circle" src="{{ asset('uploads/users/images/female.png') }}">
                                        @else <img alt="avatar" class="img-fluid rounded-circle" src="{{ asset('uploads/users/images/default.jpg') }}">
                                        @endif --}}
                                        
                                    </div>
                                    <p class="align-self-center mb-0 admin-name"> {{ $user->name }} </p>
                                </a>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username ? $user->username : '--' }}</td>
                            <td>{{ $user->profession ? $user->profession : '--' }}</td>
                            <td>
                                @if ($user->role == 0)
                                <a href="#" class="btn btn-sm btn-info btn-rounded mb-2">User</a>
                                @endif
                                @if ($user->role == 1)
                                <a href="#" class="btn btn-sm btn-warning btn-rounded mb-2">Moderator</a>
                                @endif
                                @if ($user->role == 2)
                                <a class="btn btn-sm btn-success btn-rounded mb-2">Admin</a>
                                @endif
                            </td>
                            <td>
                                <div class="t-dot {{ $user->status == 1 ? 'bg-success' : 'bg-danger' }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $user->status == 1 ? 'Active' : 'Inactive' }}"></div>
                            </td>
                            <td>
                                
                                <a class="btn btn-sm btn-info mb-2 mr-2 btn-rounded bs-tooltip" title="View" data-placement="top" data-delay="300">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </a>

                                <a class="btn btn-sm btn-warning mb-2 mr-2 btn-rounded bs-tooltip" title="Edit" data-placement="top" data-delay="300">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                </a>

                                <a class="btn btn-sm btn-danger mb-2 mr-2 btn-rounded bs-tooltip" title="Delete" data-placement="top" data-delay="300">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Sl. No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Profession</th>
                        <th>Role</th>
                        <th>Status</th>
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
@endsection