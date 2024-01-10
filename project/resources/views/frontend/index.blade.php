@extends('layouts.front')



@section('content')

<body id='homepage-index' onload='$(&#39;body&#39;).trigger(&#39;loaded&#39;);'>
    <div class='page-background'>

        <div class='no-print' id='header-spacer'></div>
    {{-- navigation Menu  --}}
    @include('partials.navbar')

    {{-- content  --}}

    <div class='max-page-width' id='frontpage'>
        <div id='our-mission'>
            <div class='cover'>
                <img alt="" unselectable="on" onselectstart="return false;" onmousedown="return false;" src="https://ArmstrongInstitute.org/assets/static/our-mission-1f9ba62cd8812822f8f1a931f262467026e07d84e86b7fac7f8c131034d600de.jpg" />
            </div>
            <div class='dark-overlay'></div>
            <img class="wave-pattern" src="https://ArmstrongInstitute.org/assets/our-mission-wave-7799b28d474ad16954d4e2bad145c9bd801823bfd813ed18604e5917ae9328aa.svg" />
            <div class='text-overlay'>
                <div class='title'>
                    Our Mission
                </div>
                <div class='blurb'>
                    YPW-YahPowerWorks
                </div>
                <div class='button-wrapper'>
                    <a class="btn btn-blue" href="/our-mission">LEARN MORE</a>
                </div>
            </div>
        </div>
        <div id='latest'>
            <div class='inner-max-width-small'>
                <div class='latest-title'>
                    Articles
                </div>
                <div class='latest-columns'>
                    <div class='left-column'>
                        <div class='latest-item feature'>
                            <a href="/962-infographic-the-hittite-empire">
                                <div class='cover'>
                                    <img alt="INFOGRAPHIC: The Hittite Empire" width="570" height="320" style="width: 100%; min-width: auto; max-width: none; height: auto; min-height: auto; max-height: none;" src=""
                                    />
                                    <div class='title-overlay'>
                                        <div class='title-overlay-text'>
                                            INFOGRAPHIC: The Hittite Empire
                                        </div>
                                    </div>
                                </div>
                                <div class='title'>
                                    INFOGRAPHIC: The Hittite Empire
                                </div>
                                <div class='quip'>
    
                                </div>
                            </a>
                        </div>
    
                        <div class='tablet-and-smaller'>
                            <div class='latest-item article'>
                                <a href="/970-revealing-king-davids-edomite-garrisons">
                                    <div class='cover'>
                                        <img alt="Revealing King David&rsquo;s Edomite Garrisons" width="570" height="320" style="width: 100%; min-width: auto; max-width: none; height: auto; min-height: auto; max-height: none;" src=""
                                        />
                                        <div class='title-overlay'>
                                            <div class='title-overlay-text'>
                                                Revealing King David&rsquo;s Edomite Garrisons
                                            </div>
                                        </div>
                                    </div>
                                    <div class='title'>
                                        Revealing King David&rsquo;s Edomite Garrisons
                                    </div>
                                    <div class='quip'>
                                        New research corroborates the biblical account of King David&rsquo;s chain of outposts within Edom.
                                    </div>
                                </a>
                            </div>
    
                            <div class='latest-item article'>
                                <a href="/969-outposts-built-by-king-david-discovered-in-southern-israel">
                                    <div class='cover'>
                                        <img alt="Outposts Built by King David Discovered in Southern Israel" width="570" height="320" style="width: 100%; min-width: auto; max-width: none; height: auto; min-height: auto; max-height: none;" src=""
                                        />
                                        <div class='title-overlay'>
                                            <div class='title-overlay-text'>
                                                Outposts Built by King David Discovered in Southern Israel
                                            </div>
                                        </div>
                                    </div>
                                    <div class='title'>
                                        Outposts Built by King David Discovered in Southern Israel
                                    </div>
                                    <div class='quip'>
    
                                    </div>
                                </a>
                            </div>
    
                        </div>
                    </div>
                    <div class='divider-column'></div>
                    <div class='right-column'>
                        <div class='fade-out-bottom'></div>
                        <div class='scroll-pane-wrapper'>
                            <div class='scroll-pane'>
                                @foreach ($articles as $blog)
                                <div class='latest-item article'>
                                    <a href="{{ route('blog.details',$blog->slug) }}">
                                        <div class='cover'>
                                            <img alt="{{ $blog->title }}" width="270" height="155" style="width: 100%; min-width: auto; max-width: none; height: auto; min-height: auto; max-height: none;" src="{{ asset('assets/images/'.$blog->photo) }}"
                                            />
                                            <div class='title-overlay'>
                                                <div class='title-overlay-text'>
                                                    {{ $blog->title }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class='title'>
                                            {{ $blog->title }}
                                        </div>
                                        <div class='quip'>
                                           
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class='dividing-line'>
                    <a class="more-link" href="{{ route('blog') }}"><span>More Articles</span><i prefix="fa" fixed_width="true" class="fa fa-angle-double-right icon_after with_caption"></i></a>
                </div>
            </div>
        </div>


        partners
       
    
        <img src="https://ArmstrongInstitute.org/assets/eilat-mazar-top-wave-c9eda82917aad13df36851874ea427c5dcc0d9642bba34e7a34491088f043628.svg" />
        <div id='eilat-mazar'>
            <div class='inner-max-width-large'>
                <div class='eilat-mazar-columns'>
                    <div class='eilat-mazar-column left-column'>
                        <img alt="" unselectable="on" onselectstart="return false;" onmousedown="return false;" src="{{ getPhoto($partners->photo) }}" />
                    </div>
                    <div class='eilat-mazar-column right-column'>
                        <div class='eilat-mazar-title'>
                            {{ $partners->name }}
                        </div>
                        <div class='eilat-mazar-blurb'>
                            {{ $partners->bio }}
                        </div>
                        <a class="more-link" href="{{ route('partners') }}"><span>Learn More</span><i prefix="fa" fixed_width="true" class="fa fa-angle-double-right icon_after with_caption"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <img src="https://ArmstrongInstitute.org/assets/eilat-mazar-bottom-wave-b284564d406138dccaa41a192136abb5fa3be0d19249431fb0c74e7817c8c864.svg" />
    
        <div id='videos'>
            <div class='inner-max-width-small'>
                <div class='videos-title'>
                    <a href="/videos">Videos And Documentaries</a>
                </div>
                <div class='videos-carousel'>
                    @foreach ($videos as $video)
                    <div class='video'>
                        <a href="{{ route('video.details',$video->slug) }}">
                            <div class='cover'>
                                <iframe class="youtube-player" width="270" height="150" src="{{ $video->video }}" allowfullscreen="" data-gtm-yt-inspected-57067575_17="true" id="409379965" style="width: 270px; min-width: 270px; max-width: 270px; height: 150px; min-height: 150px; max-height: 150px;"></iframe>
                               
                                />
                            </div>
                            <div class='title'>
                                {{ $video->title }}
                            </div>
                            <div class='quip'>
    
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class='text-center'>
                    <a class="btn btn-blue wide-button" href="{{ route('video') }}">MORE VIDEOS</a>
                </div>
            </div>
        </div>

    </div>
    
      

    {{-- footer  --}}

    @include('partials.footer')


    </div>

    @stack('js')
</body>

  
@endsection




