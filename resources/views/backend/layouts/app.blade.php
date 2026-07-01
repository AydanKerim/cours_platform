<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('backend.partials.navbar')

<div style="display:flex">

    @include('backend.partials.sidebar')

    <div style="padding:20px;flex:1">
        @yield('content')
    </div>

</div>

</body>
</html>