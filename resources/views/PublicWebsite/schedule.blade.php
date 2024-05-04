
@include('PublicWebsite.headers.header')

        
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <!-- START: Post -->
            <div class="nk-blog-post nk-blog-post-single">
                <!-- START: Post Text -->
                <div class="nk-post-text mt-0">
                    <div class="nk-gap"></div>
                    <!-- Tabs navs -->
  <ul class="nav nav-tabs">
    <li class="p-5 btn btn-dark active" style="font-size:20px; box-shadow:1px 1px 1px white;">
        <a class="mx-4 p-4 text-white" data-toggle="tab" href="#menu">Jan</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu1">Feb</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu2">Mar</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu3">Apr</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu4">May</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu5">Jun</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu6">July</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu7">Aug</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu8">Sep</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu9">Oct</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu10">Nov</a></li>
    <li class="p-5 btn btn-dark" style="box-shadow:1px 1px 1px white;font-size:20px;">
        <a class="mx-2 p-4 text-white" data-toggle="tab" href="#menu11">Dec</a></li>
  </ul>

  <div class="tab-content py-3">
        @foreach ($schedule as $item)
            <?php  
                $monthly = Carbon\Carbon::parse($item->date_match)->format('M');
            ?>
            <div id="menu" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "Jan")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif  
                </div>
            </div>
            <div id="menu1" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "Feb")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif              
                </div>
            </div>
            <div id="menu2" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "Mar")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif              
                </div>
            </div>
            <div id="menu3" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "Apr")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif   
                </div>
            </div>
            <div id="menu4" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "May")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif 
                </div>
            </div>
            <div id="menu5" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "Jun")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif              
                </div>
            </div>
            <div id="menu6" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "Jul")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif        
                </div>
            </div>  
            <div id="menu7" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "Aug")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif              
                </div>
            </div>
            <div id="menu8" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "Sep")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div> 
            <div id="menu9" class="tab-pane fade in">
                <div class="row">             
                    @if ($monthly == "Oct")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div id="menu10" class="tab-pane fade in">
                <div class="row">                    
                    @if ($monthly == "Nov")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif              
                </div>
            </div>
            <div id="menu11" class="tab-pane fade in">
                <div class="row">
                    @if ($monthly == "Dec")                    
                        <div class="col-lg-6 col-sm-6 col-md-6 my-2">
                            <div class="nk-match">
                                <div class="nk-match-team-left">
                                    <?php 
                                        $one_schedule_head = $item->teams1->logo;
                                        $two_schedule_head = $item->teams2->logo;
                                    ?>
                                    <a href="">
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$one_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                        <span class="nk-match-team-name">
                                            {{ $item->teams1->team_name }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-status">
                                    <a href="">
                                        <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                                        <span class="nk-match-status-date">{{ $item->date_match }}</span>
                                        <span class="nk-match-score bg-danger">
                                            {{ $item->time }}
                                        </span>
                                    </a>
                                </div>
                                <div class="nk-match-team-right">
                                    <a href="">
                                        <span class="nk-match-team-name">
                                            {{ $item->teams2->team_name }}
                                        </span>
                                        <span class="nk-match-team-logo">
                                            <img src="{{ asset("images$two_schedule_head") }}" width="80px" height="80px" alt="">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif              
                </div>
            </div>
        @endforeach
  </div>





<div class="nk-gap"></div>
<blockquote class="nk-blockquote">
    <div class="nk-blockquote-icon"><span>"</span></div>
</blockquote>

<div class="nk-gap"></div>


                    <div class="nk-gap"></div>
                </div>
                <!-- END: Post Text -->

            </div>
            <!-- END: Post -->
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