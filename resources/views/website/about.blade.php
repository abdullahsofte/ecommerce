@extends('layouts.website')
@section('website-content')
<!-- Start of Main -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title mb-0">About Us</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav mb-10 pb-8">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->
    
    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <div>
                {!! $content->about_description !!}
            </div>
    </div>
</main>
<!-- End of Main -->


@endsection
