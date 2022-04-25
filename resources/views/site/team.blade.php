@extends('layouts.site.master')
@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>فريق العمل</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('/')}}">الرئيسية</a></li>
                    <li class="active">فريق العمل</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- team start -->
    <div class="our-team content-area">
        <div class="container">
            <div class="row">
                @foreach($teams as $team)
                    <div class="col-lg-6">
                        <div class="team-3">
                            <div class="clearfix">
                                <div class="photo">
                                    <img src="{{asset($team->photo)}}" style="max-height: 150px" alt="Photo" class="img-fluid">
                                </div>
                                <div class="detail">
                                    <h3 class="title"><a href="#">{{$team->name}}</a></h3>
                                    <p>{{$team->job}}</p>
                                    <div class="member-socials">
                                        @if($team->facebook)
                                            <a href="{{$team->facebook}}" target="_blank"><i
                                                    class="fa fa-facebook facebook-color"></i></a>
                                        @endif
                                        @if($team->twitter)
                                            <a href="{{$team->twitter}}" target="_blank"><i
                                                    class="fa fa-twitter twitter-color"></i></a>
                                        @endif
                                        @if($team->gmail)
                                            <a href="mailto:{{$team->gmail}}" target="_blank"><i
                                                    class="fa fa-google-plus google-color"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- team end -->
@endsection
