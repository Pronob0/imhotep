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
            Articles
        </div>
    </div>
    <div id='latest-target-articles'>
        <div class='latest-target-articles-title'>
            Latest
        </div>
        <div class='latest-target-articles-items'>
            @foreach ($blogs as $blog)
            <div class='latest-target-articles-item'>
                <a class="cover" href="{{ route('blog.details',$blog->slug) }}"><img alt="{{ $blog->title }}" width="270" height="170" style="width: 100%; min-width: auto; max-width: none; height: auto; min-height: auto; max-height: none;" src="{{ asset('assets/images/'.$blog->photo) }}"
                    />
                </a>
                <div class='meta'>
                    <a href="{{ route('blog.details',$blog->slug) }}">
                        <div class='title'>
                           {{ $blog->title }}
                        </div>
                        <div class='quip'>

                        </div>
                    </a>
                    <div class='byline'>
                        By <a class="no-link-style author" href="">Yah Power Staff</a>
                    </div>
                </div>
            </div>
            @endforeach
            
           
        </div>
       
        {{ $blogs->links()  }}

    </div>
    <div id='article-categories'>
        <a name='category-articles'></a>
        <div class='article-categories-title hide-on-mobile'>
            Categories
        </div>
        <div class='article-categories-title with-toggle'>
            Categories
            <i class="hide-above-mobile show-by-default-on-mobile fa fa-caret-down fa-fw icon"></i>
            <i class="hide-above-mobile hide-by-default-on-mobile fa fa-caret-up fa-fw icon"></i>
        </div>
        <div class='article-categories-items hide-by-default-on-mobile'>
            <a class="btn btn-white article-category selected" href="{{ route('blog') }}">All</a>
            @foreach ($bcategory as $category)
            <a class="btn btn-white article-category " href="{{ route('blog',['category' => $category->slug]) }}">{{ $category->name }}</a>
            @endforeach
            
            
        </div>
    </div>
    <div id='category-title'>

    </div>
   
</div>


@include('partials.footer')


</div>

@stack('js')
</body>


@endsection