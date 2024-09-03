@extends('admin.layouts.app')



@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ route('category.create') }}" class="btn btn-primary float-end">
                                <i class="fas fa-plus"></i>
                                Add</a>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <div class="card-title">
                                    Add Category Records
                                </div>
                                <div class="card-tools">
                                    <a href="{{ route('category.index') }}"
                                        class="btn btn-secondary d-flex float-right">Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('category.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="">Category Name</label>
                                        <input type="text" name="category_name" class="form-control"
                                            value="{{ old('category_name') }}">
                                        @error('category_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Short Description</label>
                                        <textarea name="short_description" class="form-control" style="text-align: start;padding: 0;">
                                </textarea>
                                        @error('short_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="1">active</option>
                                            <option value="0">inactive</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
