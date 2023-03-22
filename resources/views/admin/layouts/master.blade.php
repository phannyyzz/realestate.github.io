<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')

        <div class="page-wrapper">

            @yield('content')

        </div>
        
        
    </div>


    @include('admin.layouts.script')
</body>

</html>