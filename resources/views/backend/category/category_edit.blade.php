@extends('admin.admin_master')
@section('admin')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Редактировать категорию</h3>

                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Добавить новую категорию</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{route('category.update', $category->id)}}" enctype="multipart/form-data" >
                                    @csrf
                                    <input type="hidden" name="id" value="{{$category->id}}">
                                    <input type="hidden" name="old_image" value="{{$category->category_icon}}">
                                    <div class="form-group">
                                        <h5>Название категории(укр)<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_name_ua"  class="form-control" value="{{$category->category_name_ua}}" >
                                            @error('category_name_ua')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Название Категории(рус) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_name_ru" class="form-control" value="{{$category->category_name_ru}}" >
                                            @error('category_name_ru')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Изображение <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="category_icon"  class="form-control" >
                                            @error('category_icon')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>


                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5 mt-5" value="Сохранить" >
                                        </div>

                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </form>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>


@endsection


