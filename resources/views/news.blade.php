@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Чемпионат Украины по ушу-саньда</div>

                    <div class="panel-body">

                        <p>Место проведения: </p>

                        <p>Дата проведения: </p>

                        <p>Срок подачи заявок: </p>

                        <br>

                        <p><a href="">Подробнее о соревнованиях </a></p>

                        <p><a href="">Скачать положение о проведении соревнований </a></p>

                        <p><a href="{{ url('/profiles') }}">Подать заявку </a></p>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
