@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">General Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Edit</a></li>
                            <li class="breadcrumb-item active">General Settings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card custom-card mt-3">
                            <div class="card-header">
                                <div class="card-title d-flex w-100 justify-content-between">
                                    <h4 class="fw-semibold fa-w-10">Edit General Settings</h4>

                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('general-settings.update', $edit_general_Setting->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="">Contact Info</label>
                                                <input type="number" name="contact_info" class="form-control"
                                                    value="{{ $edit_general_Setting->contact_info }}">
                                                @error('contact_info')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ $edit_general_Setting->email }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="address">Address</label>
                                        <textarea name="address" class="form-control">{{ $edit_general_Setting->address }}</textarea>
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="bazar_logo_site">Site Logo</label>
                                        <input type="file" name="bazar_logo_site" class="form-control  mb-2">
                                        <img src="{{ asset('storage/' . $edit_general_Setting->bazar_logo_site) }}"
                                            style="width: 100px;height: 100px;border-radius: 67px; ">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="Home Page Banner">Home Page Banner</label>
                                        <input type="file" name="home_page_banner" class="form-control mb-2">
                                        <img src="{{ asset('storage/' . $edit_general_Setting->home_page_banner) }}"
                                            style="border-radius: 67px;width: 100px;height:100px;">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="social_media">Social Media</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mt-4">

                                                <p>Facebook</p>
                                                <input type="url" name="Facebook" class="form-control"
                                                    value="{{ $edit_general_Setting->Facebook }}">
                                                @error('Facebook')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mt-4">
                                                <p>Twitter</p>
                                                <input type="url" name="Twitter" class="form-control"
                                                    value="{{ $edit_general_Setting->Twitter }}">
                                                @error('Twitter')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mt-4">
                                                <p>Snapchat</p>
                                                <input type="url" name="Snapchat" class="form-control"
                                                    value="{{ $edit_general_Setting->Snapchat }}">
                                                @error('Snapchat')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mt-4">
                                                <p>Instagram</p>
                                                <input type="text" name="Instagram" class="form-control"
                                                    value="{{ $edit_general_Setting->Instagram }}">
                                                @error('Instagram')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit"
                                            class="btn btn-success btn-wave ms-auto waves-effect waves-light">
                                            Update
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Change Password
                                </div>
                            </div>
                            <div class="card-body">
                                @if (session('password'))
                                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                        {{ session('password') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"><i class="bi bi-x"></i></button>
                                    </div>
                                @endif
                                <form action="{{ route('user_change_password') }}" method="post">
                                    @csrf

                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-2 fw-semibold mb-3">
                                            <label>Old Password :</label>

                                            <input type="password" id="old_password" name="old_password"
                                                class="form-control" size="200">

                                            @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="me-2 fw-semibold mb-3">
                                                    <label>New Password :</label>
                                                    <input type="password" id="new_password" name="new_password"
                                                        class="form-control" size="100">
                                                    @error('new_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="me-2 fw-semibold mb-3">
                                                    <label>Confirm Password :</label>
                                                    <input type="password" id="confirm_password"
                                                        name="new_password_confirmation" class="form-control"
                                                        size="100">

                                                    @error('new_password_confirmation')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Update
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
