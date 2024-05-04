
@include('PublicWebsite.headers.header')
        
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">

        @foreach($teams_relation as $item)
            <!-- START: Teams -->
            <div class="nk-team">
                <div class="nk-team-logo">
                    <img src="{{asset("images$item->logo")}}"  alt="">
                </div>
                <div class="nk-team-cont">
                    <h3 class="h5 mb-20"><span class="text-main-1">{{__('messages.Team')}}:</span> {{ $item->team_name }}</h3>
                    <h4 class="h6 mb-5">{{ __('messages.Members') }}:</h4>
                    <a> {{$item->members}} </a>
                    <br>
                    <!--<img src="assets/MPL/team.png" width="500px" alt="">-->
                </div>
            </div>

            <div style="padding:120px;background-image: url({{asset("images$item->photo")}});background-size: 100%;background-repeat: no-repeat;"></div>
            <!-- End: Teams -->
        @endforeach
            
        </div>
        <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget">
    <div class="nk-widget-content">
        <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type something...">
                <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
            </div>
        </form>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span></h4>
    <div class="nk-widget-content">
        <!--
            Social Links 3

            Additional Classes:
                .nk-social-links-cols-5
                .nk-social-links-cols-4
                .nk-social-links-cols-3
                .nk-social-links-cols-2
        -->
        <ul class="nk-social-links-3 nk-social-links-cols-4">
            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
            <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
            <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>

        </ul>
    </div>
</div>
            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>
</div>
@include('PublicWebsite.headers.footer')
