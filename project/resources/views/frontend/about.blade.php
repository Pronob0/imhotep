@extends('layouts.front')



@section('content')

<body id='targets-index' onload='$(&#39;body&#39;).trigger(&#39;loaded&#39;);'>
    <div class='page-background'>

        <div class='no-print' id='header-spacer'></div>
    {{-- navigation Menu  --}}
    @include('partials.navbar')

<div class='target' id='target-articles'>
    <div class='page-header'>
        <div class='page-title'>
            About Us
        </div>
    </div>
    <div class="article has-content regular" id="article_966">
        
       
        <div class="article-content-width">
           
           <div class="article-content-spacer"></div>
           <div class="article-content">
              
              {!! $about->description !!}
             
           </div>
          
           <div class="article-related-content"></div>
        </div>
     </div>
  
   
   
</div>


@include('partials.footer')


</div>

@stack('js')
</body>


@endsection