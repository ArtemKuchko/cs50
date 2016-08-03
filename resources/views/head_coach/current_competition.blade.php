@extends('layouts.head_coach')

@section('content')
    <div class="container">

        <h4>Список текущих соревнований:</h4>

        @foreach ($competitions as $competition)

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"> {{ $competition->name }} </div>

                        <div class="panel-body">

                            <p>Место проведения: {{ $competition -> place }} </p>

                            <p>Дата проведения: c {{$competition -> date_start}} по {{$competition->date_end}} </p>

                            <p>Срок подачи заявок: до {{$competition -> dead_line}} </p>

                            <br>

                            <p><a href="">Подробнее о соревнованиях </a></p>

                            <p> <a href="{{route('filedownload', $competition->file_id)}}">Скачать положение о проведении соревнований </a></p>
                            
                        </div>
                    </div>
                </div>
            </div>

        @endforeach


    </div>
@endsection
