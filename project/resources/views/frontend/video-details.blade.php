@extends('layouts.front')



@section('content')

<body id='documents-show' onload='$(&#39;body&#39;).trigger(&#39;loaded&#39;);'>
    <div class='page-background'>

        <div class='no-print' id='header-spacer'></div>
    {{-- navigation Menu  --}}
    @include('partials.navbar')\
    <div class="article has-content regular" id="article_966">
        <div class="article-preface-width">
           <h1 class="article-title">
              {{ $video->title }}
           </h1>
           <div class="article-byline">
              By <a class="no-link-style author" href="#">Yah Power Staff</a> • {{ $video->created_at->diffForHumans() }}
           </div>
        </div>
        <div class="article-picture-width">
           <div class="article-cover">
              <div class="cover_image_wrapper cover-media">
                 <div class="cover_image cover-inner" style="padding-top: 56.25%">
                    <iframe class="youtube-player" width="640" height="360" src="{{ $video->video }}" allowfullscreen="" data-gtm-yt-inspected-57067575_17="true" id="452501580" title="{{ $video->title }}"></iframe>
                 </div>
              </div>
           </div>
        </div>
        <div class="article-content-width">
           <div class="cover-image-caption-wrapper with-caption with-credit">
              <div class="cover-image-caption">Timna Valley</div>
              <div class="cover-image-credit">Eliran t Via Wikimedia Commons</div>
           </div>
           <div class="article-content-spacer"></div>
           <div class="article-content">
              
              {!! $video->description !!}
             
           </div>
          
           <div class="article-related-content"></div>
        </div>
     </div>

    
    @include('partials.footer')


</div>

@stack('js')
</body>


@endsection     
       
      
