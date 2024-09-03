@extends('admin.layouts.app')



@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ route('products.index') }}" class="btn btn-secondary float-end">
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
                                <h4>Add Products</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="category">Select Category</label>

                                        <select class="form-control" name="category_id" id="category">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Product Name</label>
                                        <input type="text" name="product_name" class="form-control"
                                            value="{{ old('product_name') }}">
                                        @error('product_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="">SKU</label>
                                        <input type="number" name="SKU" class="form-control"
                                            value="{{ old('SKU') }}">
                                        @error('SKU')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Product Quantity</label>
                                        <input type="text" name="product_quantity" class="form-control"
                                            value="{{ old('product_quantity') }}">
                                        @error('product_quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Product Description</label>
                                        <textarea name="product_description" id="" value="{{ old('product_quantity') }}" class="form-control">
                                </textarea>
                                        @error('product_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Price</label>
                                        <input type="number" name="price" class="form-control"
                                            value="{{ old('price') }}">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">InActive</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Image</label>
                                        <input type="file" name="images[]" multiple class="form-control">
                                        @error('images')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if ($errors->has('images.*'))
                                            @foreach ($errors->get('images.*') as $messages)
                                                @foreach ($messages as $message)
                                                    <span class="text-danger">{{ $message }}</span><br>
                                                @endforeach
                                            @endforeach
                                        @endif
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
