@extends('admin.layouts.app')



@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ route('category.index') }}" class="btn btn-secondary float-end">
                                <i class="fas fa-eye"></i>
                                Back</a>
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
                                <h4>Edit Category</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('category.update', $category->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-3">
                                        <label for="">Category Name</label>
                                        <input type="text" name="category_name" class="form-control"
                                            value="{{ $category->category_name }}" style="text-align: start;padding: 0;">

                                        @error('category_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Short Description</label>
                                        <textarea name="short_description" class="form-control">
                                {{ $category->short_description }}
                                </textarea>
                                        @error('short_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="1" {{ $category->status == '1' ? 'selected' : '' }}>active
                                            </option>
                                            <option value="0" {{ $category->status == '0' ? 'selected' : '' }}>inactive
                                            </option>
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
