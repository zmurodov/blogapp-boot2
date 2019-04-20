@extends('layouts.admin')

@section('content')
     @if(Session::has('success'))
        <div class="alert alert-primary" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ Session::get('success') }}
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">library_books</i>
                </div>
                <p class="card-category"><a href={{route('post.index')}}>Posts</a></p>
            <h3 class="card-title">{{$p_count}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons text-warning">warning</i>
                <a href="#pablo" class="warning-link">Get More Space...</a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">grain</i>
                </div>
                <p class="card-category"><a href={{route('category.index')}}>Categories</a></p>
            <h3 class="card-title">{{$c_count}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                <i class="material-icons">delete_sweep</i>
                </div>
                <p class="card-category"><a href={{route('post.trashed')}}>Trashed posts</a></p>
                <h3 class="card-title">{{$d_count}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">book</i>
                </div>
                <p class="card-category"><a href={{route('tag.index')}}>Tags</a></p>
            <h3 class="card-title">{{$t_count}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">update</i> Just Updated
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="card card-chart">
            <div class="card-header card-header-success">
                <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Daily Sales</h4>
                <p class="card-category">
                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card card-chart">
            <div class="card-header card-header-warning">
                <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Email Subscriptions</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card card-chart">
            <div class="card-header card-header-danger">
                <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Completed Tasks</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
