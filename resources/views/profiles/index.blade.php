@extends ('layouts.app')

@section ('content')

    <div class="panel_body">

        @include('common.errors')

        <div>
            <h3>Заявка на участие в соревнованиях</h3>

        </div>

        <form action="{{ url('profile') }}" method="POST" class="form-horizontal">

            {{ csrf_field() }}

                    <!-- profile data  -->
            <div class="form-group">

                <label for="profile" class="col-sm-2 control-label">Заполните данные спортсмена:</label>

                <div class="col-sm-6">

                    <input type="text" name="name" id="profile-name" placeholder="Имя" class="form-control">

                    <input type="text" name="surname" id="profile-surname" placeholder="Фамилия" class="form-control">

                    <input type="text" name="last_name" id="profile-last_name" placeholder="Отчество" class="form-control">

                    <input type="text" name="birth_date" id="profile-birth_date" placeholder="Дата рождения (гггг-мм-дд)" class="form-control">

                    <label>Разряд спортсмена:</label><select name="sport_level" id="profile-sport_level">

                        <option>МС</option>
                        <option>МСМК</option>
                        <option>ЗМС</option>
                        <option>КМС</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>

                    </select>
                    <!-- <input type="text" name="sport_level" id="profile-sport_level" placeholder="Sport Level" class="form-control"> -->

                    <label>Пол спортсмена:</label><select type="text" name="sex" id="profile-sex">

                        <option>мужчина</option>

                        <option>женщина</option>

                    </select>
                    <!-- <input type="text" name="sex" id="profile-sex" placeholder="Gender" class="form-control"> -->

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

    <!-- ����������� ����� ����������� -->

    @if (count($profiles)>0)

        <div class="panel panel-default">
            <div class="panel-heading">
                Текущий лист спортсменов:
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table" border="1">

                    <!-- Table Headings -->
                    <thead>

                    <th>№</th>

                    <th>Имя</th>

                    <th>Фамилия</th>

                    <th>Очество</th>

                    <th>Дата рождения</th>

                    <th>Спорт. разряд</th>

                    <th>Пол</th>

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

                            <!-- Profile Name -->
                            <td class="table-text">
                                <div>{{ $profile->name }}</div>
                            </td>

                            <!-- Profile SurName -->
                            <td class="table-text">
                                <div>{{ $profile->surname }}</div>
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