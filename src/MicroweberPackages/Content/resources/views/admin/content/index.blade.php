@extends('admin::layouts.app')

@section('content')

    <div class="d-flex">
        @include('content::admin.content.index-page-category-tree')


        <div class="module-content col-xxl-10 col-lg-11 col-12 mx-auto">

            <livewire:admin-content-list />
            <livewire:admin-content-bulk-options />

        </div>
    </div>

    @include('content::admin.content.index-scripts')

@endsection
