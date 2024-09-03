@extends('admin.layouts.app')

@section('content')
@php
$user = \Illuminate\Support\Facades\Auth::user();
@endphp

<section class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="row">
            <div class="col-xxl-4 col-xl-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="d-sm-flex align-items-top p-4 border-bottom-0 main-profile-cover">
                            <div>
                                <span class="avatar avatar-xxl avatar-rounded online me-3">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('storage/profile_images/' . $user->profile_image) }}"
                                        alt="User profile picture" style="width:110px; height: 110px">
                                </span>
                            </div>
                            <div class="flex-fill main-profile-info mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold mb-1 text-fixed-white">
                                        &emsp13; {{$user->name}}
                                    </h6>
                                </div>
                                <p class="mb-1 text-muted text-fixed-white op-7">
                                    &emsp13;{{$user->email}}
                                </p>
                                <p class="fs-12 text-fixed-white mb-4 op-5">
                                </p>
                            </div>
                        </div>


                        <div class="p-4 border-bottom border-block-end-dashed">
                            <p class="fs-15 mb-2 me-4 fw-semibold"><b>Contact Information:</b></p>
                            <div class="text-muted">
                                <p class="mb-2">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                        <i class="ri-mail-line align-middle fs-14"></i>
                                    </span>
                                    <b>Email:</b> {{$user->email}}
                                </p>
                                <p class="mb-2">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                        <i class="ri-phone-line align-middle fs-14"></i>
                                    </span>
                                    <b>Contact No:</b>{{$user->contact_no}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    <b>Update Profile</b>
                                </div>
                            </div>
                            <div class="card-body">
                                <form novalidate="novalidate" action="{{route('user_update_profile')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-3">
                                        <div class="col-xl-6 mb-2">
                                            <label for="input-label" class="form-label">Name<span style="color: red">
                                                    *</span></label>
                                            <div class="col-sm-12">
                                                <div class="input-group text">
                                                    <input type="text" name="name" class="form-control" id="inputEmail1"
                                                        placeholder="Enter Name" value="{{$user->name}}">
                                                    <span class="input-group-text">@</span>
                                                </div>
                                                @error('name')
                                                <span class="text-danger">
                                                    {{$message}}
                                                </span>
                                                @enderror
                                            </div>

                                            <span style="color:red;"></span>
                                        </div>


                                        <div class="col-xl-6 mb-2">
                                            <label for="input-label1" class="form-label">Email<span style="color: red">
                                                    *</span></label>
                                            <div class="col-sm-12">
                                                <div class="input-group-prepend">
                                                    <input type="email" name="email" class="form-control"
                                                        id="input-label1" placeholder="Enter Email"
                                                        value="{{$user->email}}">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-envelope"></i></span>
                                                </div>
                                            </div>
                                            <span style="color:red;"></span>
                                        </div>
                                        <div class="col-xl-6 mb-2">
                                            <label for="input-label1" class="form-label">Contact No<span
                                                    style="color: red"> *</span></label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <input type="text" name="contact_no" class="form-control"
                                                        id="input-label1" placeholder="Enter Contact No"
                                                        value="{{$user->contact_no}}">
                                                    <div class="input-group-text"><i class="fas fa-ambulance"></i>
                                                    </div>
                                                </div>
                                                <span style="color:red;"></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-2">
                                            <label class="form-label">Profile Image</label>
                                            <div class="input-group">
                                                <input type="file" name="profile_image" class="form-control">

                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            @if($user->profile_image)
                                            <img src="{{ asset('storage/profile_images/' . $user->profile_image) }}"
                                                alt="Profile Image" class="mt-2"
                                                style="width: 110px !important; height: 110px !important; ">
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit"
                                    class="btn btn-success btn-wave ms-auto waves-effect waves-light">Update
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection