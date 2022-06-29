@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Дочерние категории</h3>

            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-8">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Дочернии категории Верес</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Родительская категория</th>
                                    <th>Подкатегория</th>
                                    <th>Дочерняя подкатегория ua</th>
                                    <th>Дочерняя подкатегория ru</th>
                                    <th>Изменить</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($subsubcategory as $item)
                                        <td>{{$item['category']['category_name_ua']}}</td>
                                        <td>{{$item['subcategory']['subcategory_name_ua']}}</td>
                                        <td>{{$item->subsubcategory_name_ua}}</td>
                                        <td>{{$item->subsubcategory_name_ru}}</td>

                                        <td>
                                            <a href="{{route('subsubcategory.edit',$item->id )}}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                            <a href="{{route('subsubcategory.delete', $item->id)}}" class="btn btn-danger" title="Delete Data" id="delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>

                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Родительская категория</th>
                                    <th>Подкатегория</th>
                                    <th>Дочерняя подкатегория ua</th>
                                    <th>Дочерняя подкатегория ru</th>
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
                        <h3 class="box-title">Добавить дочернюю категорию</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <form method="post" action="{{route('subsubcategory.store')}}"  >
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
                                    <h5>Вабрать родительскую категорию<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="subcategory_id" id="select" class="form-control">
                                            <option value="" selected="" disabled="">Выбрать подкатегорию</option>

                                        </select>
                                        @error('subcategory_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Подкатегория ua <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="subsubcategory_name_ua" class="form-control" >
                                        @error('subsubcategory_name_ua')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Подкатегория ru <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="subsubcategory_name_ru" class="form-control" >
                                        @error('subsubcategory_name_ru')
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
    <script type="text/javascript">
        $(document).ready(function (){
            $('select[name="category_id"]').on('change', function (){
                var category_id = $(this).val();
                if(category_id){
                    $.ajax({
                        url: "{{ url('/category/subcategory/ajax') }}/"+category_id,
                        type: "GET",
                        dataType: "json",
                        success:function (data){
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function (key, value){
                               $('select[name="subcategory_id').append('<option value="'+ value.id +'">' + value.subcategory_name_ua + '</option>');
                            });
                        },
                    });
                }else {
                    alert('danger');
                }
            });
        });

    </script>

@endsection
