@extends('admin.admin_master')
@section('admin')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">ПодКатегории</h3>

            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-8">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Подкатегории Верес</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Родительская категория</th>
                                    <th>Название подкатегории ua</th>
                                    <th>Название подкатегории ru</th>
                                    <th>Изменить</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($subcategory as $item)
                                        <td>{{$item['category']['category_name_ua']}}</td>
                                        <td>{{$item->subcategory_name_ua}}</td>
                                        <td>{{$item->subcategory_name_ru}}</td>

                                        <td>
                                            <a href="{{route('subcategory.edit',$item->id )}}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                            <a href="{{route('subcategory.delete', $item->id)}}" class="btn btn-danger" title="Delete Data" id="delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>

                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Родительская категория</th>
                                    <th>Название подкатегории ua</th>
                                    <th>Название подкатегории ru</th>
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
                        <h3 class="box-title">Добавить Подкатегорию</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <form method="post" action="{{route('subcategory.store')}}" enctype="multipart/form-data" >
                                @csrf

                                <div class="form-group">
                                    <h5>Вабрать родительскую категорию<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="category_id" id="select" class="form-control">
                                            <option value="" selected="" disabled="">Выбрать категорию</option>
                                            @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->category_name_ua}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Подкатегория ua <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="subcategory_name_ua" class="form-control" >
                                        @error('subcategory_name_ua')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Подкатегория ru <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="subcategory_name_ru" class="form-control" >
                                        @error('subcategory_name_ru')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-info mb-5 mt-5" value="Сохранить" >
                                </div>

                                <!-- /.box-body -->

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
