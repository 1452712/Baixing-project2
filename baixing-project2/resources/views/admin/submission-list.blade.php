@extends('admin.layouts.app')

@section('content')
    <script src="{{ URL::asset('/js/bootstrap-collapse.js') }}"></script>

    <style>
        .list-group{
            margin-bottom: 0;
        }
        .list-group-item:hover{
            color: darkblue;
            cursor: pointer;
        }
        .submission-info{
            float: right;
        }
    </style>



    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Submission List
                        </h2>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item">User 1<div class="submission-info">submitted at 15:49 2016/7/12</div></li>
                        <li class="list-group-item">User 2<div class="submission-info">submitted at 15:48 2016/7/12</div></li>
                        <li class="list-group-item">User 3<div class="submission-info">submitted at 15:47 2016/7/12</div></li>
                        <li class="list-group-item">User 4<div class="submission-info">submitted at 15:45 2016/7/12</div></li>
                        <li class="list-group-item">User 5<div class="submission-info">submitted at 15:40 2016/7/12</div></li>
                    </ul>
                </div>






            </div>
        </div>
    </div>
@endsection