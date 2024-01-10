@extends('layouts.admin')
@section('title')
    @lang('Admin Dashboard')
@endsection
@section('breadcrumb')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Dashboard')</h1>
        </div>
    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>@lang('Total Get In Touch')</h4>
                    </div>
                    <div class="card-body">
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>@lang('Total Subscribers')</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_subscribers }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>@lang('Total Services')</h4>
                    </div>
                    <div class="card-body">
                   
                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>@lang('Total Team Members')</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_teams }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>@lang('Total Blogs')</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_blogs }}
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
