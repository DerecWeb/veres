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
                            <h3 class="box-title">Редактировать подкатегорию</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{route('subcategory.update')}}" >
                                    @csrf
                                    <input type="hidden"  name="id" value="{{$subcategory->id}}">

                                    <div class="form-group">
                                        <h5>Вабрать родительскую категорию<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="category_id" id="select" class="form-control">
                                                <option value="category_id" selected="" disabled="">Выбрать категорию</option>
                                                @foreach($category as $categories)
                                                    <option value="{{$categories->id}}" {{$categories->id === $subcategory->category_id ? 'selected' : ''}}>{{$categories->category_name_ua}}</option>
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
                                            <input type="text" name="subcategory_name_ua" class="form-control" value="{{$subcategory->subcategory_name_ua}}">
                                            @error('subcategory_name_ua')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Подкатегория ru <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="subcategory_name_ru" class="form-control" value="{{$subcategory->subcategory_name_ru}}" >
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


