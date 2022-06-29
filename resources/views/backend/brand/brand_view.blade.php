@extends('admin.admin_master')
@section('admin')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Бренды</h3>

                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-8">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Бренды Верес</h3>
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
                                        @foreach($brands as $item)
                                        <td>{{$item->brand_name_ua}}</td>
                                        <td>{{$item->brand_name_ru}}</td>
                                        <td><img src="{{asset($item->brand_image)}}" style="width: 70px; height: 40px;" alt=""></td>
                                        <td>
                                            <a href="{{ route('brand.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                            <a href="{{ route('brand.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
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
                            <h3 class="box-title">Добавить новый Бренд</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{route('brand.store')}}" enctype="multipart/form-data" >
                                    @csrf

                                                    <div class="form-group">
                                                        <h5>Название Бренда(укр)<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="brand_name_ua"  class="form-control" >
                                                              @error('brand_name_ua')
                                                            <span class="text-danger">{{$message}}</span>
                                                              @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Название Бренда(рус) <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="brand_name_ru" class="form-control" >
                                                            @error('brand_name_ru')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Изображение <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="brand_image"  class="form-control" >
                                                            @error('brand_image')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>


                                                        <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info mb-5 mt-5" >
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
