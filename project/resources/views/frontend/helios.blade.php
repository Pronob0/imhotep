@extends('layouts.front')



@section('content')

<body id='videos-index' onload='$(&#39;body&#39;).trigger(&#39;loaded&#39;);'>
    <div class='page-background'>

        <div class='no-print' id='header-spacer'></div>
    {{-- navigation Menu  --}}
    @include('partials.navbar')

    <div class="videos-index">
        <div class="page-header">
           <div class="page-title">
              Hebrew Hesepher
           </div>
           <div class="page-wrapper">
              <div class="page-main-content">
                 
                 <div class="recent-videos">
                  
                    <div class="category">
                       <div class="category-title">
                          photos
                          <div class="controls">
                             <i class="prev-button fa fa-arrow-circle-left fa-fw icon slick-arrow slick-disabled" aria-disabled="true" style="display: inline-block;"></i>
                             <i class="next-button fa fa-arrow-circle-right fa-fw icon slick-arrow" style="display: inline-block;" aria-disabled="false"></i>
                          </div>
                       </div>
                       <div class="video-carousel-wrapper">
                          <div class="fade-bar-left"></div>
                          <div class="fade-bar-right"></div>
                          <div class="video-carousel slick-initialized slick-slider">
                             <div class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 6370px; transform: translate3d(0px, 0px, 0px);">

                                    @foreach ($photos as $fst)
                                    <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 245px;">
                                        <div>
                                           <div class="video-carousel-item" style="width: 100%; display: inline-block;">
                                              <a href="{{ route('helios.details',$fst->slug) }}" tabindex="0">
                                                  <img alt="{{ $fst->title }}" width="270" height="170" style="width: 100%; min-width: auto; max-width: none; height: auto; min-height: auto; max-height: none;" src="{{ asset('assets/images/'.$fst->photo) }}"
                    />
                
                                                 <div class="video-carousel-item-title">
                                                    {{ $fst->title  }}
                                                 </div>
                                              </a>
                                           </div>
                                        </div>
                                     </div>
                                    @endforeach
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                

                    

                    <div class="category">
                        <div class="category-title">
                            Videos
                           <div class="controls">
                              <i class="prev-button fa fa-arrow-circle-left fa-fw icon slick-arrow slick-disabled" aria-disabled="true" style="display: inline-block;"></i>
                              <i class="next-button fa fa-arrow-circle-right fa-fw icon slick-arrow" style="display: inline-block;" aria-disabled="false"></i>
                           </div>
                        </div>
                        <div class="video-carousel-wrapper">
                           <div class="fade-bar-left"></div>
                           <div class="fade-bar-right"></div>
                           <div class="video-carousel slick-initialized slick-slider">
                              <div class="slick-list draggable">
                                 <div class="slick-track" style="opacity: 1; width: 6370px; transform: translate3d(0px, 0px, 0px);">
                                    @foreach ($videos as $sec)
                                    <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 245px;">
                                       <div>
                                          <div class="video-carousel-item" style="width: 100%; display: inline-block;">
                                             <a href="{{ route('helios.details',$sec->slug) }}" tabindex="0">
                                                 <iframe class="youtube-player" width="230" height="auto" src="{{ $sec->video}}" allowfullscreen="" data-gtm-yt-inspected-57067575_17="true" id="409379965"></iframe>
                                                <div class="video-carousel-item-title">
                                                   {{ $sec->title  }}
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                    


                 </div>
              </div>
           </div>
        </div>
     </div>


@include('partials.footer')


</div>

@stack('js')
</body>


@endsection     
       
      
