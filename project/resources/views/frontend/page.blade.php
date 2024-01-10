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
              {{ $page->title }}
           </h1>
           
        </div>
        
        <div class="article-content-width">
           
           <div class="article-content-spacer"></div>
           <div class="article-content">
              
              {!! $page->details !!}
             
           </div>
          
           <div class="article-related-content"></div>
        </div>
     </div>

    
    @include('partials.footer')


</div>

@stack('js')
</body>


@endsection     
       
      
