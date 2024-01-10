<aside id="sidebar-wrapper">
        <ul class="sidebar-menu mb-5">
            <li class="menu-header">@lang('Dashboard')</li>
            <li class="nav-item {{ menu('admin.dashboard') }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>@lang('Dashboard')</span></a>
            </li>
    
    
            
    
    
           

            <li class="nav-item {{ menu(['admin.contact.setting.index']) }}">
                <a href="{{ route('admin.contact.setting.index') }}" class="nav-link"><i class="fas fa-envelope-open-text"></i>
                    <span>@lang('Manage Contact')</span></a>
            </li>
    
            <li class="nav-item dropdown {{ menu(['admin.bcategory*','admin.blog*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-blogger-b"></i>
                    <span>@lang('Blogs')</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ menu('admin.bcategory.index') }}"><a class="nav-link"
                            href="{{ route('admin.bcategory.index') }}">@lang('Category')</a></li>
                    <li class="{{ menu('admin.blog.index') }}"><a class="nav-link"
                            href="{{ route('admin.blog.index') }}">@lang('Blogs')</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ menu(['admin.project.index']) }}">
                <a href="{{ route('admin.project.index') }}" class="nav-link"><i class="fas fa-envelope-open-text"></i>
                    <span>@lang('Projects')</span></a>
            </li>

            <li class="nav-item {{ menu(['admin.service.index']) }}">
                <a href="{{ route('admin.service.index') }}" class="nav-link"><i class="fas fa-envelope-open-text"></i>
                    <span>@lang('Connect')</span></a>
            </li>

           
    
           
    
            <li class="nav-item {{ menu('admin.page.index*') }}">
                <a href="{{ route('admin.page.index') }}" class="nav-link"><i class="fas fa-file-alt"></i><span>@lang('Services')</span></a>
            </li>
    
    
            <li class="nav-item {{ menu('admin.team.index') }}">
                <a href="{{ route('admin.team.index') }}" class="nav-link"><i class="fas fa-users-cog"></i>
                    <span>@lang('Partner Ministries')</span></a>
            </li>
    
    
    
    
            <li class="menu-header">@lang('General')</li>
    
            <li class="nav-item dropdown {{ menu(['admin.gs*','admin.social.manage*','admin.language*', 'admin.cookie']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-cog"></i><span>@lang('General Settings')</span></a>
                <ul class="dropdown-menu">
    
                    <li class="{{ menu('admin.gs.site.settings') }}"><a class="nav-link"
                            href="{{ route('admin.gs.site.settings') }}">@lang('Site Settings')</a></li>
                    
                    <li class="{{ menu('admin.gs.logo') }}"><a class="nav-link"
                            href="{{ route('admin.gs.logo') }}">@lang('Logo & Favicon')</a></li>
                    <li class="{{ menu('admin.gs.breadcumb') }}"><a class="nav-link"
                            href="{{ route('admin.gs.breadcumb') }}">@lang('Banner')</a></li>
                    <li class="{{ menu('admin.social.manage') }}"><a class="nav-link"
                            href="{{ route('admin.social.manage') }}">@lang('Social Links')</a></li>
                    <li class="{{ menu('admin.cookie') }}"><a class="nav-link"
                            href="{{ route('admin.cookie') }}">@lang('Cookie Concent')</a></li>
                    <li class="{{ menu('admin.language') }}"><a class="nav-link"
                            href="{{ route('admin.language') }}">@lang('Language')</a></li>
                    <li class="{{ menu('admin.gs.plugin.settings') }}"><a class="nav-link"
                            href="{{ route('admin.gs.plugin.settings') }}">@lang('Plugins')</a></li>
                    <li class="{{ menu('admin.gs.maintainance.settings') }}"><a class="nav-link"
                            href="{{ route('admin.gs.maintainance.settings') }}">@lang('Maintenance')</a></li>
                </ul>
            </li>
    
    
    
            <li
                class="nav-item dropdown {{ menu(['admin.front*','admin.faq*','admin.testimonial*','admin.brand*','admin.contact.section','admin.about*','admin.slider*','admin.counter*', 'admin.frontend*']) }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>@lang('Frontend Setting')</span></a>
                <ul class="dropdown-menu">
                        <li class="{{ menu('admin.hero.page') }}"><a class="nav-link"
                                href="{{ route('admin.hero.page') }}">@lang('Hero Section')</a></li>
                    <li class="{{ menu('admin.about.index') }}"><a class="nav-link"
                            href="{{ route('admin.about.index') }}">@lang('About')</a></li>
                    
                   
                    <li class="{{ menu('admin.contact.section') }}"><a class="nav-link"
                            href="{{ route('admin.contact.section') }}">@lang('Contact Section')</a></li>
                    <li class="{{ menu('admin.testimonial.index') }}"><a class="nav-link"
                            href="{{ route('admin.testimonial.index') }}">@lang('Testimonials')</a></li>
                  
                </ul>
            </li>
    
           
    
           
    
            <li class="nav-item {{ menu('admin.clear.cache') }}">
                <a href="{{ route('admin.clear.cache') }}" class="nav-link"><i class="fas fa-broom"></i>
                    <span>@lang('Clear Cache')</span></a>
            </li>
        
    
        </ul>
    </aside>
    