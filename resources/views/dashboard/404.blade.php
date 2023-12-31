@extends('layouts.layouts-dashboard')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">The url entered is invalid</p>
            <a href="/dashboard">&larr; Back to Dashboard</a>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection