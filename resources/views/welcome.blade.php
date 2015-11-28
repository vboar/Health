@extends('common/blank')
@section('title')
    知康 - 您的个人健康助理
@stop
@section('body')
    @include('common/header')

    <div class="content container text-center">
        <h1>知康</h1>
        <h1>您的个人健康助理</h1>
        <a href="/auth/register" class="btn btn-default btn-lg">马上加入</a>
    </div>
    <div class="footer navbar-fixed-bottom">
        <div class="container">
            <p>Copyright © 2015 知康 南京大学软件学院 Vboar </p>
        </div>
    </div>

    <style>
        body {
            background-color: #1FA67A;
        }

        .navbar {
            border-bottom: 1px solid #199375;
        }

        h1 {
            color: #ffffff;
            font-size: 80px;
            font-weight: bold;
            margin-bottom: 50px;
        }

        .footer {
            color: #116957;
            font-size: small;
            margin-bottom: 10px;
        }

    </style>
@stop
