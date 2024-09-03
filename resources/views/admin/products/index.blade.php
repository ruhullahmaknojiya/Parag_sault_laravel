@extends('admin.layouts.app')



@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">List Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ route('products.create') }}" class="btn btn-primary float-end">
                                <i class="fas fa-plus"></i>
                                Add</a>
                        </ol>
                    </div>
                </div>
            </div>
        </section>



        <section class="content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title d-flex w-100 justify-content-between">
                                    <h4>Products Page</h4>


                                    <form action="" method="get" style="display: flex;">
                                        <input type="search" name="search" class="form-control"
                                            placeholder="Search">&nbsp;&nbsp;
                                        <button type="submit" class="btn btn-primary">Search...</button>
                                    </form>



                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Product Name</th>
                                            <th>SKU</th>
                                            <th>Product Quantity</th>
                                            <th>Product Description</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->category ? $product->category->category_name : 'N/A' }}
                                                </td>

                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->SKU }}</td>
                                                <td>{{ $product->product_quantity }}</td>
                                                <td>{{ $product->product_description }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>
                                                    @if ($product->status == '1')
                                                        <a class="badge btn-primary update-status-product"
                                                            href="{{ route('product-status', $product->id) }}"
                                                            onclick="changeProductStatus({{ $product->id }})">Active</a>
                                                    @else
                                                        <a class="badge btn-danger update-status-product"
                                                            href="{{ route('product-status', $product->id) }}"
                                                            onclick="changeProductStatus({{ $product->id }})">Inactive</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="mb-2 d-flex">
                                                        @if (is_array($product->images))
                                                            <div class="row">
                                                                @foreach ($product->images as $image)
                                                                    <div class="col-md-4">
                                                                        <img src="{{ asset('storage/' . $image) }}"
                                                                            alt="Product Image" class="w-100">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @else
                                                            <span>No images available</span>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="d-flex">
                                                    <a href="{{ route('products.edit', $product->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>&emsp13;
                                                    <form id="delete-form-{{ $product->id }}"
                                                        action="{{ route('products.destroy', $product->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <div onclick="confirmDelete({{ $product->id }})">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="float-end mt-2">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@push('scripts')
    <script>
        function confirmDelete(product_id) {
            Swal.fire({
                title: "Are you sure?",
                text: "Are you sure you want to delete this record?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {

                    document.getElementById('delete-form-' + product_id).submit();
                    Swal.fire({
                        title: "Deleted!",
                        text: "Products Records deleted successfully.",
                        icon: "success"
                    });
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {

            $(document).on('click', '.update-status-product', function(event) {
                event.preventDefault();

                var url = $(this).attr('href');

                Swal.fire({
                    title: "Are you sure?",
                    text: "Do you want to update the status?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, update it!",
                    cancelButtonText: "No, cancel!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Status Changed.",
                            text: "{{ session('status') }}",
                            icon: "success"
                        });
                        window.location.href = url;
                    } else {

                        Swal.fire("Status update canceled!", "", "error");
                    }
                });
            });
        });
    </script>
@endpush
