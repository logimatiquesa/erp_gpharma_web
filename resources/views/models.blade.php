@include('partials.header')

@include('partials.rightbar')

 <div class="page">

    @include('partials.topbar')

    @include('partials.sidebar')

    <div class="main-content app-content">

        <div class="container-fluid">

        @yield('content-body')

        </div>

    </div>

    @include('partials.primary_footer')
 </div>


 @include('partials.scrollTop')

 @include('partials.footer')

@yield('script')
</body>

</html>
