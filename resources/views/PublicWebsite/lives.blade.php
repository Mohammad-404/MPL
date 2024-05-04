
@include('PublicWebsite.headers.header')
        
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">

        @foreach($lives as $item)
            <!-- START: Now Playing -->
            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                    <?php 
                        $one_lives = $item->teams1->logo;
                        $two_lives = $item->teams2->logo;
                    ?>
                        <span class="nk-match-team-logo">
                            <img src="{{asset("images$one_lives")}}" height="80px" width="80px" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            {{ $item->teams1->team_name }}
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                        <span class="nk-match-score bg-dark-1">{{ __('messages.Now Playing') }}</span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            {{ $item->teams2->team_name }}
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="{{asset("images$two_lives")}}" height="80px" width="80px" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <div class="responsive-embed responsive-embed-16x9">
                <!--<iframe height="378" width="620" src="http://www.youtube.com/embed/649S5M6tIso" frameborder="0" allowfullscreen></iframe>                -->
                
                        <iframe height="378" width="620" 
                                src="https://www.youtube.com/embed/{{ $item->youtube }}">
                        </iframe>
            </div>
            <br>
            <h6> <strong>{{ __('messages.description') }} : </strong> {{ $item->desc }} </h6>
            @endforeach
            <!-- END: Now Playing -->
<br>
<ul class="nk-breadcrumbs">
        
        
    
    <li><span class="fa-angle-right"></span></li>
    
    <li><span>{{ __('messages.matched_recoreded') }}</span></li>
    
</ul>

                    @foreach($matched_recoreded as $item)
                        <!-- START: Now Playing -->
                        <?php 
                            $one_lives_new = $item->teams1->logo;
                            $two_lives_new = $item->teams2->logo;
                        ?>
                        <div class="nk-match">
                            <div class="nk-match-team-left">
                                <a href="#">
                                    <span class="nk-match-team-logo">
                                        <img src="{{asset("images$one_lives_new")}}" height="80px" width="80px" alt="">
                                    </span>
                                    <span class="nk-match-team-name">
                                        {{ $item->teams1->team_name }}
                                    </span>
                                </a>
                            </div>
                            <div class="nk-match-status">
                                <a href="#">
                                    <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                    <span class="nk-match-score bg-dark-1">{{ __('messages.Recoreded') }}</span>
                                </a>
                            </div>
                            <div class="nk-match-team-right">
                                <a href="#">
                                    <span class="nk-match-team-name">
                                        {{ $item->teams2->team_name }}
                                    </span>
                                    <span class="nk-match-team-logo">
                                        <img src="{{asset("images$two_lives_new")}}" height="80px" width="80px" alt="">
                                    </span>
                                </a>
                            </div>
                        </div>
            
                        <div class="responsive-embed responsive-embed-16x9">
                            <iframe height="378" width="620" src="http://www.youtube.com/embed/{{ $item->youtube }}" frameborder="0" allowfullscreen></iframe>                
                        </div>
                        <br>
                        <h6>{{ __('messages.description') }} : {{ $item->desc }}</h6>
                        @endforeach
                        <!-- END: Now Playing -->
                        <br>
                        <hr>
                        {{ $matched_recoreded->links() }}
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
