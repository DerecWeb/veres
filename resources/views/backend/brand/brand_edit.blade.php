@extends('admin.admin_master')
@section('admin')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Редактировать бренд</h3>

                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Добавить новый Бренд</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{route('brand.update', $brands->id)}}" enctype="multipart/form-data" >
                                    @csrf
                                        <input type="hidden" name="id" value="{{$brands->id}}">
                                    <input type="hidden" name="old_image" value="{{$brands->brand_image}}">
                                    <div class="form-group">
                                        <h5>Название Бренда(укр)<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="brand_name_ua"  class="form-control" value="{{$brands->brand_name_ua}}" >
                                            @error('brand_name_ua')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Название Бренда(рус) <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="brand_name_ru" class="form-control" value="{{$brands->brand_name_ru}}" >
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

