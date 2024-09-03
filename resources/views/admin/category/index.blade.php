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
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <div class="card-title d-flex w-100 justify-content-between">
                                    <h4>Category Page</h4>
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
                                            <th>Short Description</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->category_name }}</td>
                                                <td>{{ $category->short_description }}</td>
                                                <td>
                                                    @if ($category->status == '1')
                                                        <a class="badge badge-primary update-status-link"
                                                            href="{{ route('category-status', $category->id) }}"
                                                            onclick="changeStatus({{ $category->id }})">Active</a>
                                                    @else
                                                        <a class="badge badge-danger update-status-link"
                                                            href="{{ route('category-status', $category->id) }}"
                                                            onclick="changeStatus({{ $category->id }})">InActive</a>
                                                    @endif

                                                </td>

                                                <td class="d-flex">
                                                    <a href="{{ route('category.edit', $category->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>&emsp13;
                                                    <form id="delete-form-{{ $category->id }}"
                                                        action="{{ route('category.destroy', $category->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div onclick="confirmDelete({{ $category->id }})">
                                                            <i class="fas fa-trash-alt"></i>

                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="float-end mt-2">
                                    {{ $categories->links() }}
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
        function confirmDelete(categoryId) {
            Swal.fire({
                title: "Are you sure?",
                text: "Are you sure Want to Delete This Records.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + categoryId).submit();
                    Swal.fire({
                        title: "Deleted!",
                        text: "Category Records deleted successfully.",
                        icon: "success"
                    });
                }
            });
        }
    </script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.update-status-link', function(event) {
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
                            title: "Category status successfully changed.",
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
