@extends('admin.admin_master')
@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Дочерняя категория </h3>

            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <!-- /.col -->

            <!--Add Brand -->
            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Редактировать дочернюю категорию</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <form method="post" action="{{route('subsubcategory.update')}}"  >
                                @csrf
                                <input type="hidden" name="id" value="{{ $subsubcategory->id }}">

                                <div class="form-group">
                                    <h5>Вабрать родительскую категорию<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="category_id" id="select" class="form-control">
                                            <option value="" selected="" disabled="">Выбрать категорию</option>
                                            @foreach($category as $categories)
                                                <option value="{{$categories->id}}" {{$categories->id == $subsubcategory->category_id ? 'selected' : ''}}>{{$categories->category_name_ua}}</option>
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
                                            @foreach($subcategory as $subcategories)
                                                <option value="{{$subcategories->id}}" {{$subcategories->id == $subsubcategory->subcategory_id ? 'selected' : ''}}>{{$subcategories->subcategory_name_ua}}</option>
                                            @endforeach

                                        </select>
                                        @error('subcategory_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Подкатегория ua <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="subsubcategory_name_ua" class="form-control" value="{{$subsubcategory->subsubcategory_name_ru}}" >
                                        @error('subsubcategory_name_ua')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Подкатегория ru <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="subsubcategory_name_ru" class="form-control" value="{{$subsubcategory->subsubcategory_name_ru}}" >
                                        @error('subsubcategory_name_ru')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-info mb-5 mt-5" value="Сохранить">
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
