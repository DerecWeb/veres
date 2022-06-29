@extends('admin.admin_master')
@section('admin')
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">

                    <h4>Добавить товар</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form novalidate>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row"> <!--start 1st row -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Вабрать родительскую категорию<span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <select name="category_id" id="select" class="form-control">
                                                            <option value="category_id" selected="" disabled="">Выбрать категорию</option>
                                                            @foreach($category as $categories)
                                                                <option value="{{$categories->id}}" >{{$categories->category_name_ua}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!--end col-md-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Вабрать подкатегорию<span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <select name="subcategory_id" id="select" class="form-control">
                                                            <option value="category_id" selected="" disabled="">Выбрать подкатегорию</option>
                                                            @foreach($subcategory as $subcategories)
                                                                <option value="{{$subcategories->id}}" >{{$subcategories->subcategory_name_ua}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('subcategory_id')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!--end col-md-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Вабрать дочернюю категорию<span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <select name="subsubcategory_id" id="select" class="form-control">
                                                            <option value="subsubcategory_id" selected="" disabled="">Выбрать категорию</option>
                                                            @foreach($subsubcategory as $subsubcategories)
                                                                <option value="{{$subsubcategories->id}}" >{{$subsubcategories->subsubcategory_name_ua}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('subsubcategory_id')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!--end col-md-3 -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Выбрать бренд<span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <select name="category_id" id="select" class="form-control">
                                                            <option value="category_id" selected="" disabled="">Выбрать бренд</option>
                                                            @foreach($brands as $brand)
                                                                <option value="{{$brand->id}}" >{{$brand->brand_name_ua}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('brand_id')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!--end col-md-3 -->
                                        </div><!--End 1 row -->
                                        <div class="row"><!--second row -->
                                            <div class="col-md-3"><!-- Second Col-->
                                                <div class="form-group">
                                                    <h5>Название товара (укр) <span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_name_ua" class="form-control" > </div>
                                                    @error('product_name_ua')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><!-- END Second Col-->
                                            <div class="col-md-3"><!-- Second Col-->
                                                <div class="form-group">
                                                    <h5>Название товара (rus) <span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_name_ru" class="form-control" > </div>
                                                    @error('product_name_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><!-- END Second Col-->
                                            <div class="col-md-3"><!-- Second Col-->
                                                <div class="form-group">
                                                    <h5>Ключевое слово (укр) <span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ua" class="form-control" > </div>
                                                    @error('product_tag_ua')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><!-- END Second Col-->
                                            <div class="col-md-3"><!-- Second Col-->
                                                <div class="form-group">
                                                    <h5>Ключевое слово (рус) <span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ru" class="form-control" > </div>
                                                    @error('product_tag_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><!-- END Second Col-->


                                        </div><!-- END second row -->

                                        <div class="row"><!--3 row -->
                                            <div class="col-md-3"><!-- 3 Col-->
                                                <div class="form-group">
                                                    <h5>Артикул <span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_name_ua" class="form-control" > </div>
                                                    @error('product_name_ua')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><!-- END 3 Col-->
                                            <div class="col-md-3"><!-- Second Col-->
                                                <div class="form-group">
                                                    <h5>Количество<span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_name_ru" class="form-control" > </div>
                                                    @error('product_name_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><!-- END Second Col-->
                                            <div class="col-md-3"><!-- Second Col-->
                                                <div class="form-group">
                                                    <h5>Ширина <span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ua" class="form-control" > </div>
                                                    @error('product_qty')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><!-- END Second Col-->
                                            <div class="col-md-3"><!-- Second Col-->
                                                <div class="form-group">
                                                    <h5>Длина<span class="text-success">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ru" class="form-control" > </div>
                                                    @error('product_tag_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><!-- END Second Col-->


                                        </div><!-- END 3 row -->

                                        <div class="row"><!-- Row 4-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Добавить теги (укр)</h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ua" class="form-control" value="Кроватки, Комоды, Шкафы" data-role="tagsinput"> </div>
                                                    @error('product_tag_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                </div>
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Добавить теги (рус)</h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ua" class="form-control" value="Кроватки, Комоды, Шкафы" data-role="tagsinput"> </div>
                                                    @error('product_tag_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                        </div><!-- END Row 4-->

                                        <div class="row"><!-- Row 5-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Добавить цвет</h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ua" class="form-control" value="Кроватки, Комоды, Шкафы" data-role="tagsinput"> </div>
                                                    @error('product_tag_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Добавить размер</h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ua" class="form-control" value="Кроватки, Комоды, Шкафы" data-role="tagsinput"> </div>
                                                    @error('product_tag_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Опции</h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ua" class="form-control" value="Кроватки, Комоды, Шкафы" data-role="tagsinput"> </div>
                                                    @error('product_tag_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                        </div><!-- END Row 4-->

                                        <div class="row"> <!-- 5 Row -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Цена</h5>
                                                <div class="controls">
                                                    <input type="text" name="product_tag_ua" class="form-control" > </div>
                                                @error('product_tag_ru')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>


                                        </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Цена со скидкой</h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ua" class="form-control"  > </div>
                                                    @error('product_tag_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>


                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Бонус клиенту</h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tag_ua" class="form-control"  > </div>
                                                    @error('product_tag_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>


                                            </div>

                                        </div>
                                        <div class="row"> <!-- 5 Row -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Главное изображение <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="file" class="form-control" required> </div>
                                                    @error('product_tumb')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>


                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Главное изображение <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="file" class="form-control" required> </div>
                                                    @error('product_tumb')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>


                                            </div>


                                        </div>

                                        <div class="row"> <!-- Start Row-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Описание Снипет(укр) <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="textarea" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                                </div>
                                            </div>

                                        </div> <!-- End col-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Описание Снипет(рус) <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="textarea" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                                    </div>
                                                </div>

                                            </div> <!-- End col-->

                                        </div><!--END Start Row-->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <div class="box">

                                                        <!-- /.box-header -->
                                                        <div class="box-body">
                                                            <h4 class="box-title">Полное описание(укр)</h4><br>
                                                            <form>
                                                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                                                    </textarea>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- End col-->
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <div class="box">

                                                        <!-- /.box-header -->
                                                        <div class="box-body">
                                                            <h4 class="box-title">Полное описание(укр)</h4><br>
                                                            <form>
                                                    <textarea id="editor2" name="editor2" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                                                    </textarea>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- End col-->
                                        </div> <!-- End row -->

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Акции<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="checkbox" id="checkbox_1" required value="single">
                                                        <label for="checkbox_1">Участвует товар в распродаже</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Блоки <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <fieldset>
                                                            <input type="checkbox" id="checkbox_2" required value="x">
                                                            <label for="checkbox_2">Новинки</label>
                                                        </fieldset>
                                                        <fieldset>
                                                            <input type="checkbox" id="checkbox_3" value="y">
                                                            <label for="checkbox_3">Рекомендованный</label>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5 mt-5" value="Сохранить" >
                                        </div>

                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>


@endsection
