@extends ('layouts.app')

@section ('content')

    <div class="panel_body">

        @include('common.errors')

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Заполнените данные спортсмена:</div>

                    <div class="panel-body">


        <form action="{{ url('profile') }}" method="POST" class="form-horizontal">

            {{ csrf_field() }}


            <!-- profile data  -->

                <div class="form-group">

                <div class="col-sm-6">

                    <label>Фамилия: </label>
                    <input type="text" name="surname" id="profile-surname" placeholder="Например, Иванов" class="form-control">

                    <label>Имя: </label>
                    <input type="text" name="name" id="profile-name" placeholder="Например, Иван" class="form-control">

                    <label>Отчество: </label>
                    <input type="text" name="last_name" id="profile-last_name" placeholder="Например, Петрович" class="form-control">

                    <label>Выберите дату рождения: </label>
                    <input type="date" name="birth_date" id="profile-birth_date" placeholder="(гггг-мм-дд)" class="form-control">

                    <label>Разряд спортсмена: </label><select name="sport_level" id="profile-sport_level" class="form-control">

                        <option>МС</option>
                        <option>МСМК</option>
                        <option>ЗМС</option>
                        <option>КМС</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>

                    </select>

                    <label>Пол спортсмена: </label><select type="text" name="sex" id="profile-sex" class="form-control">

                        <option>муж</option>

                        <option>жен</option>

                    </select>

                    <label>Весовая категория: </label><select type="text" name="weight_category" id="" class="form-control">

                        <option>48</option>

                        <option>52</option>

                        <option>56</option>

                    </select>


                </div>

                </div>

            <!-- Add Profile Button -->

            <div class="form-group">

                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить спортсмена
                    </button>
                </div>

            </div>
        </form>

        </div>
    </div>
</div>
</div>

    <!-- ОТОБРАЖЕНИЕ ТЕКУЩЕГО ЛИСТА СПОРТСМЕНОВ -->

    @if (count($profiles)>0)

        <div class="panel panel-default">
            <div class="panel-heading">
                Текущий лист спортсменов:
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>

                    <th>№</th>

                    <th>Фамилия</th>

                    <th>Имя</th>

                    <th>Отчество</th>

                    <th>Дата рождения</th>

                    <th>Спорт. разряд</th>

                    <th>Пол</th>

                    <th>Весовая категория</th>

                    <th>Удалить</th>


                    </thead>

                    <?php $i=0; ?>
                            <!-- Table Body -->
                    <tbody>
                    @foreach ($profiles as $profile)
                        <tr>

                            <?php $i++;?>
                            <!-- Number order -->
                            <td class="table-text">
                                <div><?php echo $i; ?></div>
                            </td>

                            <!-- Profile SurName -->
                            <td class="table-text">
                                <div>{{ $profile->surname }}</div>
                            </td>

                            <!-- Profile Name -->
                            <td class="table-text">
                                <div>{{ $profile->name }}</div>
                            </td>

                            <!-- Profile Last Name -->
                            <td class="table-text">
                                <div>{{ $profile->last_name }}</div>
                            </td>

                            <!-- Profile Birthday -->
                            <td class="table-text">
                                <div>{{ $profile->birth_date }}</div>
                            </td>

                            <!-- Profile Sport Level -->
                            <td class="table-text">
                                <div>{{ $profile->sport_level }}</div>
                            </td>

                            <!-- Profile Gender -->
                            <td class="table-text">
                                <div>{{ $profile->sex }}</div>
                            </td>

                            <!-- Profile Weight Category -->
                            <td class="table-text">
                                <div> - </div>
                            </td>


                            <td>
                                <form action="{{url('profile/' .$profile->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-profile-{{ $profile->id }}" class="btn btn-danger">

                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif


@endsection