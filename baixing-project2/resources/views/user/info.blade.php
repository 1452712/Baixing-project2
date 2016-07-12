@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <style>

    </style>
    <link href="{{ URL::asset('/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />
    <script src="{{ URL::asset('js/fileinput.min.js') }}"></script>
    <script src="{{ URL::asset('/js/locales/zh.js') }}"></script>

    <div class="upload">
        <form class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <input id="input-file" type="file" class="file" data-preview-file-type="text">
            </div>
            <div class="form-group">
                <input id="ID" type="text" class="form-control" name="ID" required placeholder="please input your question ID">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i> Enter
                </button>
            </div>



        </form>






    </div>
    <script>



    </script>
    <!-- TODO: Current Tasks -->
@endsection