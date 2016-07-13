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

    <script type="text/javascript" src="{{ URL::asset('/js/materialize.min.js') }}"></script>
    <script src="{{ URL::asset('/js/codemirror.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('/css/codemirror.css')}}">
    <!-- 可补充 -->
    <script src="{{ URL::asset('/js/mode/xml.js')}}"></script>
    <script src="{{ URL::asset('/js/mode/javascript.js')}}"></script>
    <script src="{{ URL::asset('/js/mode/php.js')}}"></script>

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
            <div class="btn-group">
                <a class="dropdown-toggle" data-toggle="dropdown" id="lang">Language<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li><a onclick="setDptm(0)" href="#">JavaScript</a></li>
                    <li><a onclick="setDptm(1)" href="#">HTML</a></li>
                    <li><a onclick="setDptm(2)" href="#">PHP</a></li>
                </ul>
            </div>
            </div>
            <div class="form-group">
                <label for="name">Please input or paste your code here</label><br>
                <textarea id="code" class="form-control" rows="80" cols="100" required ></textarea>
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

    <script type="text/javascript" src="{{ URL::asset('/js/jquery-3.0.0.min.js')}}"></script>

    <script>
        var myTextarea = document.getElementById('code');
        var editor = CodeMirror.fromTextArea(myTextarea, {
            //mode: "text/html"
            mode: "text/javascript",
            indentUnit: 4,
            lineNumbers:true,
            lineWrapping:true
        });

        var dpmt = ["JavaScript","HTML","PHP"];
        var lang = "";
        function setDptm(order) {
            lang = dpmt[order];
            $("#lang").text(dpmt[order]);
            if(order == 0) {
                editor.setOption('mode',"text/javascript");
            }
            else if(order == 1) {
                editor.setOption('mode',"text/html");
            }
            else if(order == 2) {
                editor.setOption('mode',"text/php");
            }
        }

        editor.off("change", function (editor, changes) {
            while (changes) {
                editor.replaceRange(changes.text.join("\n"), changes.from, changes.to);
                $("#content").text(editor.getValue());
                changes = changes.next;
            }
        });

        function submitCode(){
//            console.log('click');
            var code = editor.getValue();
            $.post(
                    //adjust
                    "http://localhost/baixing-project2/question",
                    {
                        code:code,
                        lang:lang
                    },
                    function(data) {
                        if(data) {
                            myTextarea.value = "";
                        }
                    }
            );
            $(".alert-success").show();
        }

    </script>
    <!-- TODO: Current Tasks -->
@endsection