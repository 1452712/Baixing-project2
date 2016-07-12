@extends('admin.layouts.app')

@section('content')
    <script src="{{ URL::asset('/js/bootstrap-collapse.js') }}"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js"></script>
    <style>
        .list-group{
            margin-bottom: 0;
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
                        <h4>
                            Submission Overview
                        </h4>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item">Question No.<div class="submission-info">32767</div></li>
                        <li class="list-group-item">User<div class="submission-info">User 1</div></li>
                        <li class="list-group-item">Language<div class="submission-info">php</div></li>

                    </ul>
                </div>






            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            Code
                        </h4>
                    </div>

                    <div>
                        <pre>
                            <code>
(function (factory) {
    "use strict";
    //noinspection JSUnresolvedVariable
    if (typeof define === 'function' && define.amd) { // jshint ignore:line
        // AMD. Register as an anonymous module.
        define(['jquery'], factory); // jshint ignore:line
    } else { // noinspection JSUnresolvedVariable
        if (typeof module === 'object' && module.exports) { // jshint ignore:line
            // Node/CommonJS
            // noinspection JSUnresolvedVariable
            module.exports = factory(require('jquery')); // jshint ignore:line
        } else {
            // Browser globals
            factory(window.jQuery);
        }
    }
}

                            </code>
                        </pre>
                    </div>
                </div>






            </div>
        </div>
    </div>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection