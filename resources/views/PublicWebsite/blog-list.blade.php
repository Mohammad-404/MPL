@include('PublicWebsite.headers.header')

    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-8">

                <!-- START: Posts List -->
                <div class="nk-blog-list">

                    
                @foreach($news_relation as $item)
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <div class="row vertical-gap">
                                <div class="col-md-5 col-lg-6">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="{{asset("images$item->photo")}}">
                                    </a>
                                </div>
                                <div class="col-md-7 col-lg-6">
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">
                                        {{ $item->sub_title }}
                                    </a></h2>

                                    <div class="nk-post-text">
                                        <p> {{ $item->title }} </p>
                                    </div>

                                    <div class="nk-post-by">
                                        <a href="{{ Route('public.news.id',$item->id) }}"> {{ __('messages.Read More') }} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Post -->
                    @endforeach
          

                        {{ $news_relation->links() }}
                  
                </div>
                <!-- END: Posts List -->

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
    
    <div class="nk-gap-4"></div>
    
    
@include('PublicWebsite.headers.footer')