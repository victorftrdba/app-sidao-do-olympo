<section class="--navbar">
    <div class="container-fluid shadow pt-3 pb-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand" href="{{ route('site.home.index') }}">
                            @desktop
                                <h1 class="text-uppercase --navbar_title fw-bold">Welcome to Sidao do Olympo</h1>
                            @enddesktop
                            @mobile
                                <h1 class="text-uppercase --navbar_title fw-bold">Sidao do Olympo</h1>
                                <div class="--navbar_bar"></div>
                            @endmobile
                        </a>
                    </nav>
                </div>
                @desktop
                <div class="col-4 d-flex justify-content-around align-items-center" style="color:white;">
                    <a href="#" class="text-reset"></a>
                    <a href="#" class="text-reset"></a>
                    <a href="#" class="text-reset"></a>
                    <a href="#" class="text-reset"></a>
                    <a href="https://www.youtube.com/channel/UCtlxTaU36_RoCnMJcne5GPg" target="_blank" class="text-reset"><i class="fab fa-lg fa-youtube"></i></a>
                </div>
                @enddesktop
                @mobile
                    @include('site.partials._offcanvas_navbar')
                @endmobile
            </div>
        </div>
    </div>
</section>
