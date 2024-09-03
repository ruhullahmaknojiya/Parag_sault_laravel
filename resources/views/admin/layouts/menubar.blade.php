<style>
    .custom-size {
        width: 17px;

    }
</style>
@php
    $user = \Illuminate\Support\Facades\Auth::user();
@endphp


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        @php
            $setting = \App\Models\Generalsetting::first();
        @endphp
        @if($setting)
        <img src="{{asset('storage/'.$setting->bazar_logo_site)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        @else
            <span>No image</span>
        @endif
        <span class="brand-text font-weight-light">Parag-Sault</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('storage/profile_images/' . $user->profile_image) }}" class="img-circle elevation-2" alt="User Image">

            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name }}
                </a>
            </div>
        </div>


        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" id="search_field" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2" id="demonames">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item demoname">
                    <a href="{{ route('category.index') }}" class="nav-link {{ Request::routeIs('category.index') ? 'active' : '' }} demoname">
                       &nbsp; <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="grid-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="padding-y-3xs svg-inline--fa fa-grid-2 fa-fw fa-2x custom-size">
                            <path fill="currentColor" d="M224 80c0-26.5-21.5-48-48-48H80C53.5 32 32 53.5 32 80v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V80zm0 256c0-26.5-21.5-48-48-48H80c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V336zM288 80v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H336c-26.5 0-48 21.5-48 48zM480 336c0-26.5-21.5-48-48-48H336c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V336z"></path>
                        </svg>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link {{ Request::routeIs('products.index', 'products.create', 'products.edit') ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    @php

                        $edit_general_Setting = \App\Models\GeneralSetting::first();
                    @endphp
                    <a href="{{route('general-settings.edit',$edit_general_Setting->id)}}" class="nav-link {{ Request::routeIs('general-settings.index', 'general-settings.create', 'general-settings.edit') ? 'active' : '' }}">
                        <ion-icon name="settings-outline"></ion-icon>&emsp13;
                        <p>General-Settings</p>
                    </a>
                </li>
                <li class="nav-item">

                    <a href="{{route('contactus.index')}}" class="nav-link {{Request::routeIs('contactus.index') ? 'active':''}}">
                        <ion-icon name="settings-outline"></ion-icon>&emsp13;
                        <p>Contact Us</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

@push('scripts')
<script>
    // SEARCH FUNCTION
    var btsearch = {
        init: function (search_field, searchable_elements, searchable_text_class) {
            $(search_field).keyup(function (e) {
                e.preventDefault();
                var query = $(this).val().toLowerCase();

                if (query) {
                    // loop through all elements to find match
                    $.each($(searchable_elements), function () {
                        var title = $(this).find(searchable_text_class).text().toLowerCase();
                        if (title.indexOf(query) == -1) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                } else {
                    // empty query so show everything
                    $(searchable_elements).show();
                }
            });
        }
    }

    // INIT
    $(function () {
        // USAGE: btsearch.init(('search field element', 'searchable children elements', 'searchable text class');
        btsearch.init('#search_field', '#demonames li', '.demoname');
    });
</script>

@endpush
