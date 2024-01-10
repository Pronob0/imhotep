<div class='no-print' id='header'>
    <div class='page-width' id='header-page-width'>
        <div class='user-bar' data-async-path='/user_links'></div>
        <a id="header-logo-wrapper" href="/"><img alt="YahPower.org" src="{{asset('assets/images/'.$gs->header_logo)}}" />
        </a>
        <div id='menu-button-wrapper'>
            <button class='btn btn-primary' id='toggle-menu-items-vertical' type='button'>
                <i class="fa fa-bars fa-fw icon"></i>
            </button>
        </div>
        <div id='menu-bar-desktop'>
            <ul class='nav navbar-nav' id='menu-items'>

                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                
                
                       
                        
                        @foreach($pages as $page)
                        <li><a href="{{route('page',$page->slug)}}">{{$page->title}}</a></li>
                        @endforeach
                        
                   
                

                <li>
                    <a href="{{ route('video') }}">@lang('Yah TV')</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}">The Trib Times</a>
                </li>

                <li class='dropdown'>
                    <a class="no-link-style" data-toggle="dropdown" href="#"><span>Books</span><i prefix="fa" fixed_width="true" class="fa fa-caret-down icon_after with_caption"></i></a>
                    <ul class='dropdown-menu'>
                        <li><a href="https://www.amazon.com/Imhotep-Revealed-Sean-Christopher-ebook/dp/B0CN697G47?ref_=ast_author_dp">Imhotep Revealed</a></li>
                        <li><a href="https://www.amazon.com/Logical-Reasons-Quran-Uninspired-Christopher-ebook/dp/B09P33H74N/?_encoding=UTF8&pd_rd_w=SKvLu&content-id=amzn1.sym.cf86ec3a-68a6-43e9-8115-04171136930a&pf_rd_p=cf86ec3a-68a6-43e9-8115-04171136930a&pf_rd_r=135-0592863-3021658&pd_rd_wg=yRpPN&pd_rd_r=c886ea93-f1e0-4c6e-84dc-69722d27525c&ref_=aufs_ap_sc_dsk">Logical Reasons the Quran is Uninspired</a></li>
                        <li><a href="https://www.amazon.com/Eliphaz-Temanite-Sean-Christopher-ebook/dp/B09XS49TD4?ref_=ast_author_mpb">Eliphaz the Temanite</a></li>
                        
                    </ul>
                </li>
            
                

                <li>
                    <a href="{{ route('partners') }}">@lang('Partner Ministries')</a>
                </li>

                <li>
                    <a href="{{ route('bible',1) }}">@lang('Yah Bible')</a>
                </li>

                <li>
                    <a href="{{ route('heliopolis') }}">@lang('Heliopolis Hebrew Hesepher')</a>
                </li>
                

                
               

                <li><a id="menu-search-open" href="#"><i class="fa fa-search fa-fw icon"></i></a></li>
            </ul>
            <div id='menu-search-form' style='display: none'>
                <div class='column'>
                    <form class="" action="/search" accept-charset="UTF-8" method="get">
                        <div class='form-group'>
                            <input class='menu-search-query form-control' name='query' placeholder='Search...' type='text'>
                        </div>
                    </form>

                </div>
                <div class='column'>
                    <a id="menu-search-submit" href=""><i class='fa fa-arrow-circle-right'></i>
</a></div>
                <div class='column'>
                    <a id="menu-search-close" href=""><i class='fa fa-times-circle'></i>
</a></div>
            </div>
        </div>
        <ul class='nav navbar-nav tablet-only' id='menu-items-vertical' style='display: none;'>
            <li id='menu-vertical-search-form'>
                <form class="" action="/search" accept-charset="UTF-8" method="get">
                    <div class='form-group'>
                        <input class='menu-search-query form-control' name='query' placeholder='Search...' type='text'>
                    </div>
                </form>

            </li>
            <li>
                <a href="{{ route('about') }}">About</a>
            </li>
           

            <li>
                <a href="{{ route('video') }}">@lang('Yah TV')</a>
            </li>
            <li>
                <a href="{{ route('blog') }}">The Trib Times</a>
            </li>
             @foreach($pages as $page)
                        <li><a href="{{route('page',$page->slug)}}">{{$page->title}}</a></li>
                        @endforeach

            <li class='dropdown'>
                <a class="no-link-style" data-toggle="dropdown" href="#"><span>Books</span><i prefix="fa" fixed_width="true" class="fa fa-caret-down icon_after with_caption"></i></a>
                <ul class='dropdown-menu'>
                    <li><a href="https://www.amazon.com/Gaza-Prophecy-Sean-Christopher-ebook/dp/B0CLH368WG/?_encoding=UTF8&pd_rd_w=SKvLu&content-id=amzn1.sym.cf86ec3a-68a6-43e9-8115-04171136930a&pf_rd_p=cf86ec3a-68a6-43e9-8115-04171136930a&pf_rd_r=135-0592863-3021658&pd_rd_wg=yRpPN&pd_rd_r=c886ea93-f1e0-4c6e-84dc-69722d27525c&ref_=aufs_ap_sc_dsk">Imhotep Revealed</a></li>
                    <li><a href="https://www.amazon.com/Logical-Reasons-Quran-Uninspired-Christopher-ebook/dp/B09P33H74N/?_encoding=UTF8&pd_rd_w=SKvLu&content-id=amzn1.sym.cf86ec3a-68a6-43e9-8115-04171136930a&pf_rd_p=cf86ec3a-68a6-43e9-8115-04171136930a&pf_rd_r=135-0592863-3021658&pd_rd_wg=yRpPN&pd_rd_r=c886ea93-f1e0-4c6e-84dc-69722d27525c&ref_=aufs_ap_sc_dsk">Logical Reasons the Quran is Uninspired</a></li>
                    <li><a href="https://www.amazon.com/Eliphaz-Temanite-Sean-Christopher-ebook/dp/B09XS49TD4?ref_=ast_author_mpb">Eliphaz the Temanite</a></li>
                    
                </ul>
            </li>

            <li>
                <a href="{{ route('partners') }}">@lang('Partner Ministries')</a>
            </li>

            <li>
                <a href="{{ route('bible',1) }}">@lang('Yah Bible')</a>
            </li>

            <li>
                <a href="{{ route('heliopolis') }}">@lang('Heliopolis Hebrew Hesepher')</a>
            </li>

        </ul>
    </div>
</div>