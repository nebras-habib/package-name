<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/vendor/package-name/img/favicon.png') }}">

    <title>Package{{ config('app.name') ? ' - ' . config('app.name') : '' }}</title>

    <!-- Style sheets-->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600" rel="stylesheet"/>
    <link href="{{ asset(mix('app.css', 'vendor/package-name')) }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                    Test Config
                </div>
                <div class="card-body">
                    <h5 class="card-title">some_value</h5>
                    <p class="card-text">Some value value is : {{ $someValue }}</p>
                    <a href="https://www.google.com" target="_blank" class="btn btn-primary">Go Google</a>
                </div>
                <div class="card-footer text-muted">
                    Allisa
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset(mix('app.js', 'vendor/package-name'))}}"></script>
</body>
</html>
