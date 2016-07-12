@extends('admin.layouts.app')

@section('content')
    <script src="{{ URL::asset('/js/bootstrap-collapse.js') }}"></script>

    <style>
        .topic, .list-group{
            margin-bottom: 0;
        }
        .accordion-toggle{
            text-decoration: none;
        }
        .accordion-toggle:hover{
            text-decoration: none;
            cursor: pointer;
        }
        a:hover{
            text-decoration: none;
            cursor: pointer;
        }
        .detail-button{
            float: right;
        }

    </style>



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">欢迎进入后台管理系统</div>

                <div class="panel-body">
                    <p>
                        Welcome!
                    </p>








                </div>
            </div>

                <div class="accordion" id="accordion2">
                    <div class="accordion-group panel panel-default topic">
                        <div class="accordion-heading panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                Topic I.
                        </div>
                        <ul class="list-group accordion-body collapse"  id="collapseOne">
                            <li class="list-group-item"><a>免费域名注册</a><div class="detail-button">10 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>免费 Window 空间托管</a><div class="detail-button">345 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>图像的数量</a><div class="detail-button">345 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>24*7 支持</a><div class="detail-button">170 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>每年更新成本</a><div class="detail-button">610 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                        </ul>
                    </div>
                    <div class="accordion-group panel panel-default topic">
                        <div class="accordion-heading panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                Topic II.
                        </div>
                        <ul class="list-group accordion-body collapse" id="collapseTwo" >
                            <li class="list-group-item"><a>免费域名注册</a><div class="detail-button">10 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>免费 Window 空间托管</a><div class="detail-button">345 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>图像的数量</a><div class="detail-button">345 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>24*7 支持</a><div class="detail-button">170 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>每年更新成本</a><div class="detail-button">610 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                        </ul>

                    </div>
                    <div class="accordion-group panel panel-default topic">
                        <div class="accordion-heading panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                Topic III.
                        </div>
                        <ul class="list-group accordion-body collapse" id="collapseThree" >
                            <li class="list-group-item"><a>免费域名注册</a><div class="detail-button">10 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>免费 Window 空间托管</a><div class="detail-button">345 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>图像的数量</a><div class="detail-button">345 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>24*7 支持</a><div class="detail-button">170 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                            <li class="list-group-item"><a>每年更新成本</a><div class="detail-button">610 submissions.<button class="btn-xs btn btn-primary">detail</button></div></li>
                        </ul>
                    </div>
                </div>




        </div>
    </div>
</div>
@endsection