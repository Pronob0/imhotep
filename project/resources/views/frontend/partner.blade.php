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
            Partner Ministries
        </div>
    </div>
    <div id='latest-target-articles'>
        
        <div class='latest-target-articles-items'>
            @foreach ($teams as $team)
            <div class='latest-target-articles-item'>
                <a class="cover" href="javascript:;"><img alt="{{ $team->name }}" width="270" height="170" style="width: 100%; min-width: auto; max-width: none; height: auto; min-height: auto; max-height: none;" src="{{ getPhoto($team->photo) }}"
                    />
                </a>
                <div class='meta'>
                    <a href="javascript:;">
                        <div class='title'>
                           {{ $team->name }}
                        </div>
                        <div class='quip'>

                        </div>
                    </a>
                    <div class='byline'>
                       <a class="no-link-style author" href="javascript:;">{{ $team->address }}</a>
                    </div>
                </div>
            </div>
            @endforeach
            
           
        </div>
       

    </div>

   
</div>


@include('partials.footer')


</div>

@stack('js')
</body>


@endsection