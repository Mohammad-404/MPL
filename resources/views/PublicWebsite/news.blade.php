@include('PublicWebsite.headers.header')


<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="index.html">Home</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="#">News</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        @foreach ($news_relation as $item)
            <li><span>{{ $item->sub_title }}</span></li>
        @endforeach
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">
        @foreach ($news_relation as $item)
            <!-- START: Post -->
            <div class="nk-blog-post nk-blog-post-single">
                <!-- START: Post Text -->
                <div class="nk-post-text mt-0">
                    <div class="nk-post-img">
                        <img src="{{asset("images$item->photo")}}">
                    </div>
                    <div class="nk-gap-1"></div>
                    <h1 class="nk-post-title h4">{{ $item->title }}</h1>
                    <!-- <div class="nk-post-by">
                        Sep 5, 2024
                    </div> -->
                    <div class="nk-gap"></div>
                    <p>
                        {{ $item->desc }}   
                    </p>

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
