@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <style>
        textarea{
            resize: none;
        }
        .alert-success{
            display: none;
        }
    </style>


    <div class="question col-md-10 col-md-offset-1">
        <h2>
            Sample Question
        </h2>
        <p>
            Sample Question Description
        </p>






    </div>
    <div class="code-input col-md-10 col-md-offset-1">
        <form>
            <div class="form-group">
                <label for="name">Please input or paste your code here</label>
                <textarea class="form-control" rows="10" required ></textarea>
            </div>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong> Your code has been submitted successfully.
            </div>
            <div class="form-group">
                <button onclick="submitCode()" class="btn btn-primary">
                    <i class="fa fa-btn fa-send"></i> Submit
                </button>
            </div>
        </form>
    </div>

    <script>
        function submitCode(){
            //upload


            $(".alert-success").show();
        }


    </script>
    <!-- TODO: Current Tasks -->
@endsection