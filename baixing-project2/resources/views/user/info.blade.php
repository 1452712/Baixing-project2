@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <style>
        input {
        }
        .alert-success{
            display: none;
        }
    </style>
    <link href="{{ URL::asset('/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />
    <script src="{{ URL::asset('js/fileinput.min.js') }}"></script>
    <script src="{{ URL::asset('/js/locales/zh.js') }}"></script>
    <br>
    <div class="info col-md-10 col-md-offset-1">
        <h2>
            Upload Your Resume
        </h2>
    </div>
    <br><br><br><br><br><br><br>
    <div class="upload">
        <form class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <input id="ID" type="text" class="form-control" name="ID" required placeholder="please input your question ID">
            </div>
            <br>
            <div class="form-group">
                <input id="input-file" type="file" class="file" data-preview-file-type="text" required>
            </div>
            <br>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong> Your code has been submitted successfully.
            </div>
            <!--div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i> Enter
                </button>
            </div-->
       </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script>
        /*
        function initFileInput(ctrlName, uploadUrl) {
            var control = $('#' + ctrlName);
            control.fileinput({
                language: 'zh',
                //uploadUrl: uploadUrl,
                uploadUrl: "http://localhost/baixing-project2/info",
                allowedFileExtensions : ['pdf', 'doc','docx'],
                showUpload: false,
                showCaption: false,
                browseClass: "btn btn-primary",
                previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
            });
        }
         */
        initFileInput("input-file","/info");
        formValidate("input-file", function (form) {
            $("#add").modal("input-file");
            var id = $("#ID").val();
            var postData = $("#ffAdd").serializeArray();
            $.post(
                    "http://localhost/baixing-project2/info",
                    {
                        resume: postData,
                        uid: id
                    },
                    function(json) {
                     var data = $.parseJSON(json);
                         if (data.Success) {
                              initPortrait(data.Data1);//使用写入的ID进行更新
                              $('#file-Portrait').fileinput('upload');
                             //showTips("保存成功");
                             // $(".alert-success").show();
                              Refresh();
                }
                else {
                    showError("保存失败:" + data.ErrorMessage, 3000);
                }
            }).error(function () {
                showTips("您未被授权使用该功能，请联系管理员进行处理。");
            });
        });

//        var btn = document.getElementById("submit");
//        btn.onclick = function() {
//            var file = $("#input-file").val();
//            var uid = $("#ID").val();
//            console.log('click'+file+uid);
//            $.post(
//                    "http://localhost/baixing-project2/info",
//                    {
//                        uid:uid,
//                        resume:file
//                    },
//                    function(data) {
//                        if(data) {
//                            window.location.href="http://localhost/baixing-project2/info";
//                        }else{
//                            alert("上传失败！");
//                        }
//                    }
//            );
//            $(".alert-success").show();
//
//        }

    </script>
    <!-- TODO: Current Tasks -->
@endsection