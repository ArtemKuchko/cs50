@extends('layouts.head_coach')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Заполнените данные о предстоящих соревнованиях:</div>

                    <div class="panel-body">

                        <form action="{{ route('addfile', []) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                            {{ csrf_field() }}

                            <!-- данные о соревнованиях  -->
                            <div class="form-group">

                                <div class="col-sm-6">

                                    <label>Название соревнований:</label>
                                    <input type="text" name="name" id="competition-name" placeholder="Например, Чемпионат украины по ушу-саньда" class="form-control">

                                    <label>Дата начала соревнований:</label>
                                    <input type="date" name="date_start" id="competition-date_start" placeholder="Дата начала соревнований" class="form-control">

                                    <label>Дата окончания соревнований:</label>
                                    <input type="date" name="date_end" id="competition-date_end" placeholder="Дата окончания соревнований" class="form-control">

                                    <label>Выберите уровень соревнований: </label>
                                    <select name="level" id="competition-level" class="form-control">

                                        <option>Национальный уровень</option>
                                        <option>Областной уровень</option>
                                        <option>Городской уровень</option>

                                    </select>

                                    <label>Место проведения соревнования: </label>
                                    <input type="text" name="place" id="competition-place" placeholder="Например, г. Винница" class="form-control">

                                    <label>Срок подачи заявок: </label>
                                    <input type="date" name="dead_line" id="competition-dead_line" placeholder="Срок подачи заявок" class="form-control">

                                    <label>Зарузить положения о проведении соревнований: </label>
                                    <input type="file" name="thesis_file" class="form-control">

                                </div>

                            </div>

                            <div class="form-group">

                                <!-- кнопка добавления соревнований -->

                                <div class="col-sm-offset-3 col-sm-2">
                                    <button type="submit" name="competition" class="btn btn-default">
                                        <i class="fa fa-plus"></i> Добавить соревнование
                                    </button>
                                </div>

                            </div>

                            <!--<label>Добавление представителей команд:</label>

                            <div class="form-group">

                                <div class="col-sm-offset-3 col-sm-2">
                                    <button type="submit" name="competition" class="btn btn-default">
                                        <i class="fa fa-plus"></i> Добавить команду
                                    </button>
                                </div>

                            </div>-->

                        </form>


                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
