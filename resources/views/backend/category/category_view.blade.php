@extends('admin.admin_master')
@section('admin')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Категории</h3>

                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-8">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Категории </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Название украинский</th>
                                        <th>Название русский</th>
                                        <th>Изображение</th>
                                        <th>Изменить</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($categories as $item)
                                            <td>{{$item->category_name_ua}}</td>
                                            <td>{{$item->category_name_ru}}</td>
                                            <td><img src="{{asset($item->category_icon)}}" style="width: 100px; height: 100px; border-radius: 30px;" alt=""</td>
                                            <td>
                                                <a href="{{ route('category.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                                <a href="{{ route('category.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
                                                    <i class="fa fa-trash"></i></a>
                                            </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Название украинский</th>
                                        <th>Название русский</th>
                                        <th>Изображение</th>
                                        <th>Изменить</th>

                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!-- /.col -->

                <!--Add Brand -->
                <div class="col-4">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Добавить категорию</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="form-group">
                                        <h5>Название Категории(укр)<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_name_ua"  class="form-control" >
                                            @error('category_name_ua')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Название Категории(рус) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="category_name_ru" class="form-control" >
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
