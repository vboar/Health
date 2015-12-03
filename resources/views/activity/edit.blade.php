@extends('common/app')
@section('title')
    编辑活动 - 知康
@stop
@section('css_js_extra_file')
    <script src="{{ URL::asset('/assets/js/moment-with-locales.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/DateTimePicker/css/bootstrap-datetimepicker.min.css') }}">
    <script src="{{ URL::asset('/assets/plugins/DateTimePicker/js/bootstrap-datetimepicker.min.js') }}"></script>
@stop
@section('content')
    <div class="create-panel panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">编辑活动</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="/activity/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $activity->id }}">
                <div class="form-group">
                    <label for="topic" class="col-lg-3 control-label">主题</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="topic" name="topic" value=" {{ $activity->topic }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="js-start_time" class="col-lg-3 control-label">开始时间</label>
                    <div class="col-lg-9">
                        <div class='input-group date' id='js-start_time'>
                            <input type='text' class="form-control" name="start_time" value=" {{ $activity->start_time }}"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="js-end_time" class="col-lg-3 control-label">结束时间</label>
                    <div class="col-lg-9">
                        <div class='input-group date' id='js-end_time'>
                            <input type='text' class="form-control" name="end_time" value=" {{ $activity->end_time }}"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-lg-3 control-label">地点</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="address" name="address" value=" {{ $activity->address }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-lg-3 control-label">内容</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="4" id="content" name="content">{{ $activity->content }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remark" class="col-lg-3 control-label">备注</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="4" id="remark" name="remark">{{ $activity->remark }}</textarea>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="/activity" class="btn btn-default">返回</a>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .create-panel {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        form {
            width: 90%;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#js-start_time').datetimepicker({
                locale: 'zh-CN',
                format: 'YYYY-MM-DD hh:mm:ss'
            });
            $('#js-end_time').datetimepicker({
                locale: 'zh-CN',
                format: 'YYYY-MM-DD hh:mm:ss'
            });
        });
    </script>
@stop