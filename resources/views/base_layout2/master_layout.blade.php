<!DOCTYPE html>
<html lang="en">

<head>
    @include('base_layout2.header.meta_header')
</head>

<body>
    @include('base_layout2.header.header')
    @yield('body')

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->pull('success')}}
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">
        {{session()->pull('error')}}
    </div>
    @endif

    @include('base_layout2.bottom_section')
    @include('base_layout2.footer.footer')
    @include('base_layout2.footer.meta_footer')
</body>

</html>