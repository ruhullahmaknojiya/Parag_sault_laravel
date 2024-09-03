@extends('admin.layouts.app')



@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Products</h1>
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
                                <div class="card-title d-flex w-100 justify-content-between">
                                    <h4>Edit Products</h4>
                                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back </a>
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('products.update', $products->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-3">
                                        <label for="category">Select Category</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($edit_categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $products->category_id ? 'selected' : '' }}>
                                                    {{ $category->category_name }}
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
                                            value="{{ $products->product_name }}">
                                        @error('product_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">SKU</label>
                                        <input type="text" name="SKU" class="form-control"
                                            value="{{ $products->SKU }}">
                                        @error('SKU')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Product Quantity</label>
                                        <input type="text" name="product_quantity" class="form-control"
                                            value="{{ $products->product_quantity }}">
                                        @error('product_quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Product Description</label>
                                        <textarea name="product_description" id="" value="" class="form-control">
                                        {{ $products->product_description }}
                                </textarea>
                                        @error('product_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Price</label>
                                        <input type="number" name="price" class="form-control"
                                            value="{{ $products->price }}">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="1" {{ $products->status == '1' ? 'selected' : '' }}>
                                                Active
                                            </option>
                                            <option value="0" {{ $products->status == '0' ? 'selected' : '' }}>
                                                Inactive
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Image</label>
                                        <input type="file" name="images[]" multiple class="form-control"><br>
                                        <div class="mb-2">
                                            @foreach ($products->images as $image)
                                                <img src="{{ asset('storage/' . $image) }}" alt="Product Image"
                                                    class="img-thumbnail" style="max-width: 150px;">
                                            @endforeach
                                        </div>
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
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
