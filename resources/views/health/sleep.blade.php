@extends('health/common')
@section('title')
    健康 - 睡眠数据 - 知康
@stop
@section('css_js_extra_file')
    <script src="{{ URL::asset('/assets/plugins/chartjs/Chart.min.js') }}"></script>
@stop
@section('main-content')
    <div class="panel">
        <div class="panel-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#brief" data-toggle="tab" aria-expanded="true"  id="js-brief">简要</a></li>
                <li class=""><a href="#detail" data-toggle="tab" aria-expanded="false" id="js-detail">详细</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="brief">
                    <div class="sub-content">
                        @if ($flag == 1)
                        <h4 style="margin-bottom: 20px;">无睡眠数据</h4>
                        @else
                        <h4 style="margin-bottom: 20px;">最近一次睡眠</h4>
                        <p>开始睡眠时间：{{ $data->start_time }}</p>
                        <p>结束睡眠时间：{{ $data->end_time }}</p>
                        <p>睡眠时长：{{ $data->sleeping_time }}</p>
                        <p>深度睡眠时长：{{ $data->deep_sleeping_time }}</p>
                        <p>唤醒次数：{{ $data->wake_up_times }}</p>
                        <p>睡眠质量评分：<b>{{ $data->sleep_points }}</b></p>
                        <hr/>
                        <h4 style="margin-bottom: 20px;">最近睡眠质量评分</h4>
                        <canvas id="Chart" width="800" height="400"></canvas>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade active in" id="detail">
                    <div class="sub-content">
                        <h4>历史睡眠数据</h4>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>开始睡眠时间</th>
                                <th>结束睡眠时间</th>
                                <th>睡眠时长</th>
                                <th>深度睡眠时长</th>
                                <th>唤醒次数</th>
                                <th>睡眠质量评分</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css_js_extra_text')
    <style>
        .sub-content {
            padding: 10px 0px 0px 10px;
        }

    </style>
    <script>
        $(document).ready(function() {
            loadChart();
            loadData();
            $('#detail').hide();
            $('#js-brief').click(function() {
                $('#detail').hide();
            });
            $('#js-detail').click(function() {
                $('#detail').show();
            });
        });
        function loadChart() {
            temp1 = new Array();
            temp2 = new Array();
            $.ajax({
                url:"/health/getSleepChartData/",
                type:"get",
                success:function(data){
                    $.each(data, function(i, n) {
                        var t = data.length-i-1;
                        temp1[t] = n['start_time'].substring(0, 10);
                        temp2[t] = n['sleep_points'];
                    });
                    var data = {
                        labels: temp1,
                        datasets: [
                            {
                                label: "dataset",
                                fillColor: "rgba(151,187,205,0.5)",
                                strokeColor: "rgba(151,187,205,0.8)",
                                highlightFill: "rgba(151,187,205,0.75)",
                                highlightStroke: "rgba(151,187,205,1)",
                                data: temp2
                            }
                        ]
                    };
                    var canvas = $("#Chart").get(0).getContext("2d");
                    var myBarChart = new Chart(canvas).Bar(data);
                }
            });
        };
        function loadData() {
            $.ajax({
                url:"/health/getSleepData/",
                type:"get",
                success:function(data){
                    var temp = '';
                    $.each(data, function(i, n) {
                        temp +="<tr><td>"+n['start_time']+"</td><td>"+n['end_time']+"</td><td>"+n['sleeping_time']
                                +"</td><td>"+n['deep_sleeping_time']+"</td><td>"+n['wake_up_times']
                                +"</td><td>"+n['sleep_points']+"</td></tr>";
                    });
                    $('tbody').append(temp);
                }
            });
        }
    </script>
@stop