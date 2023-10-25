@include('partials.header')

@include('partials.rightbar')

<div class="page">

    @include('partials.topbar')

    @include('partials.sidebar')

    @include('partials.loader')

    <div class="main-content app-content">

        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="notification" class="toast colored-toast " role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header text-fixed-white" id="notif-header">
                    <img class="bd-placeholder-img rounded me-2" src="../assets/images/brand-logos/toggle-dark.png"
                        alt="...">
                    <strong class="me-auto" id="notif-title">Notification</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="notif-body">
                    Your,toast message here.
                </div>
            </div>
        </div>

        <div class="container-fluid">

            @yield('content-body')

        </div>

    </div>

    @include('partials.primary_footer')
</div>


@include('partials.scrollTop')

@include('partials.footer')
<script>
    /** PARAMETRAGE DE NOTIFICATION **/
    $('#notification').on('hidden.bs.toast', function() {
        // console.log(types)
        _("notif-header").classList.remove("bg-" + typeNotification)
        _("notification").classList.remove("bg-" + typeNotification + "-transparent")
        $("#notif-title").text("")
        $("#notif-body").text("")
    })
    var typeNotification = ""

    function notif(type, title, message) {
        typeNotification = type

        _("notif-header").classList.add("bg-" + type)
        _("notification").classList.add("bg-" + type + "-transparent")
        $("#notif-title").text(title)
        $("#notif-body").text(message)
        const toast = new bootstrap.Toast(_("notification"))
        toast.show()
    }
</script>
@yield('script')
</body>

</html>
