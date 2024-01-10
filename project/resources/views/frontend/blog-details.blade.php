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
              {{ $blog->title }}
           </h1>
           <div class="article-byline">
              By <a class="no-link-style author" href="#">Yah Power Staff</a> • {{ $blog->created_at->diffForHumans() }}
           </div>
        </div>
        <div class="article-picture-width">
           <div class="article-cover">
              <div class="cover_image_wrapper cover-media">
                 <div class="cover_image cover-inner" style="padding-top: 56.25%">
                    <img alt="" src="{{ asset('assets/images/'.$blog->photo) }}" />

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
              
              {!! $blog->description !!}
             
           </div>
          
           <div class="article-related-content"></div>
        </div>
     </div>

    
    @include('partials.footer')


</div>

@stack('js')
</body>


@endsection     
       
      
