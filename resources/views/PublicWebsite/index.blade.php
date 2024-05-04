@include('PublicWebsite.headers.header')

<div class="container">

    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="8000">
        @if ($slider_relation)
            @foreach ($slider_relation as $item)
                <div class="nk-image-slider-item">
                    <img src="{{asset("images$item->photo")}}" alt="" class="nk-image-slider-img" data-thumb="{{asset("images$item->photo")}}">
                    <div class="nk-image-slider-content">
                            <h3 class="h4">{{ $item->title }}</h3>
                            <p class="text-white">
                                {{ $item->desc }}
                            </p>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
                    </div>
                </div>            
            @endforeach
        @endif
    </div>

    <!-- END: Image Slider -->

    <!-- START: Categories -->
    <div class="nk-gap-2"></div>

    <!-- END: Categories -->
    
    
    
    <!-- START: Latest News -->
    <div class="nk-gap-2"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">:) </span> {{ __('messages.Schedule') }}</span></h3>
    <div class="nk-gap"></div>
    <h5>{{ __('messages.SelectMonth')}}</h5>
    <br>
<!-- Tabs navs -->
  <ul class="nav nav-tabs mx-4 px-3 p-2" style="box-shadow:1px 1px 10px red;">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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
                        <div class="col-lg-4 col-sm-6 col-md-6 my-2">
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

  <!-- Tabs navs -->

    <!-- START: Latest News -->
    <div class="nk-gap-2"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">{{ __('messages.Latest') }}</span> {{ __('messages.News') }}</span></h3>
    <div class="nk-gap"></div>

    <div class="nk-news-box">
        <div class="nk-news-box-list">
            <div class="nano">
                <div class="nano-content">
                    
                @foreach ($news_relation as $item)
                    <div class="nk-news-box-item nk-news-box-item-active">
                        <div class="nk-news-box-item-img">
                            <img src="{{asset("images$item->photo")}}">
                        </div>
                        <img src="{{asset("images$item->photo")}}" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">{{ $item->sub_title }}</h3>
                        
                        <div class="nk-news-box-item-text">
                            <p> {{ $item->desc }} </p>
                        </div>
                        <a href="{{ Route('public.news.id',$item->id) }}" class="nk-news-box-item-url">Read More</a>
                        <!-- <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 18, 2024</div> -->
                    </div>
                @endforeach            
                    
                    
                </div>
            </div>
        </div>

        @foreach ($news_relation as $item)            
            <div class="nk-news-box-each-info">
                <div class="nano">
                    <div class="nano-content">
                        <!-- There will be inserted info about selected news-->
                        <div class="nk-news-box-item-image">
                            <img src="{{asset("images$item->photo")}}" alt="">
                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-4">News</span>
                            </span>
                        </div>
                        <h3 class="nk-news-box-item-title">{{ $item->title }}</p>
                        </h3>
                        <div class="nk-news-box-item-text">
                            <p>{{ $item->desc }}</p>
                        </div>
                        <a href="blog-article.html" class="nk-news-box-item-more">{{ __('messages.Read More') }}</a>
                        <!-- <div class="nk-news-box-item-date">
                            <span class="fa fa-calendar"></span> Sep 18, 2018
                        </div> -->
                    </div>
                </div>
            </div>
        @endforeach    
        
    </div>

    <!-- END: Latest News -->

    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <!-- START: Latest Matches -->
            <div class="nk-gap-2"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">{{ __('messages.Latest') }}</span> {{ __('messages.Matches') }}</span></h3>
            <div class="nk-gap"></div>


            <div class="row">
                @foreach ($lives as $item)
                    <div class="col-md-4">
                        <div class="nk-match-score bg-dark-3">
                        {{ __('messages.Now Playing') }}
                        </div>
                        <div class="nk-gap-2"></div>
                        <div class="nk-widget-match p-0">
                            <div class="nk-widget-match-teams">
                                <div class="nk-widget-match-team-logo">
                                    <?php 
                                        $one_lives = $item->teams1->logo;
                                        $two_lives = $item->teams2->logo;
                                    ?>
                                    <img src="{{asset("images$one_lives")}}" alt="">
                                </div>
                                <div class="nk-widget-match-vs">{{ __('messages.vs') }}</div>
                                <div class="nk-widget-match-team-logo">
                                    <img src="{{asset("images$two_lives")}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-2"></div>
                        <p>{{ $item->desc }}</p>
                    </div>
                    <div class="col-md-8">
                        <div class="responsive-embed responsive-embed-16x9">
                            <iframe height="378" width="620" 
                                src="https://www.youtube.com/embed/{{ $item->youtube }}">
                            </iframe>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="nk-gap"></div>
            @foreach ($schedule as $item)                
                <div class="nk-match">
                    <div class="nk-match-team-left">
                        <a href="#">
                            <?php 
                                $one_schedule = $item->teams1->logo;
                                $two_schedule = $item->teams2->logo;
                            ?>
                            <span class="nk-match-team-logo">
                                <img src="{{ asset("images$one_schedule") }}" width="80px" height="80px" alt="">
                            </span>
                            <span class="nk-match-team-name">
                                {{ $item->teams1->team_name }}
                            </span>
                        </a>
                    </div>
                    <div class="nk-match-status">
                        <a>
                            <span class="nk-match-status-vs">{{ __('messages.vs') }}</span>
                            <span class="nk-match-status-date">{{ $item->date_match }}</span>
                            <span class="nk-match-score bg-danger">
                                {{ $item->time }}
                            </span>
                        </a>
                    </div>
                    <div class="nk-match-team-right">
                        <a href="#">
                            <span class="nk-match-team-name">
                                {{ $item->teams2->team_name }}
                            </span>
                            <span class="nk-match-team-logo">
                                <img src="{{ asset("images$two_schedule") }}" width="80px" height="80px" alt="">
                            </span>
                        </a>
                    </div>
                </div>
            @endforeach
            {{ $schedule->links() }}
       
            <!-- END: Latest Matches -->
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
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1"></span> Matches Records</span></h4>
    <div class="nk-widget-content">

        @foreach ($matched_recoreded as $item)            
            <div class="nk-widget-match">
                <a href="#">
                    <span class="nk-widget-match-left">
                        <span class="nk-widget-match-teams">
                            <?php 
                                $one_lives_1 = $item->teams1->logo;
                                $two_lives_2 = $item->teams2->logo;
                            ?>
                            <span class="nk-widget-match-team-logo bg-white">
                                <img src="{{ asset("images$one_lives_1") }}" alt="">
                            </span>
                            <span class="nk-widget-match-vs">{{ __('messages.vs') }}</span>
                            <span class="nk-widget-match-team-logo bg-white">
                                <img src="{{ asset("images$two_lives_2") }}" alt="">
                            </span>
                        </span>
                        <span class="nk-widget-match-date">{{ $item->desc }}</span>
                    </span>
                    <span class="nk-widget-match-right">
                        <span class="nk-match-score">
                            Watch
                        </span>
                    </span>
                </a>
            </div>
        @endforeach

    </div>
</div>


            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>
</div>

@include('PublicWebsite.headers.footer')