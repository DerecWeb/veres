
@extends('frontend.main_master')
@section('content')

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ (!empty($editData->profile_photo_path)) ? url('upload/admin_images/'.$editData->profile_photo_path) :url('upload/admin.jpg') }}" style="border-radius: 50%" alt="" class="card-img-top">
                    <ul class="list-group list-group-flush">
                        <a href="" class="btn btn-primary btn-sm btn-block">Главная</a>
                        <a href="" class="btn btn-primary btn-sm btn-block">Изменить профиль</a>
                        <a href="" class="btn btn-primary btn-sm btn-block">Изменить пароль</a>
                        <a href="" class="btn btn-primary btn-sm btn-block">Выйти</a>
                    </ul>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Привет..</span><strong> Вы в кабинете</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
