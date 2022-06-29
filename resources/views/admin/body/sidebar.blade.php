<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{url('admin/dashboard')}}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
                        <h3><b>Veres</b> Dashboard</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="{{url('admin/dashboard ')}}">
                    <i data-feather="pie-chart"></i>
                    <span>Админ Панель</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Онлайн Чаты</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="chat.html"><i class="ti-more"></i>Чаты</a></li>
                    <li><a href="calendar.html"><i class="ti-more"></i>Календарь</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="mail"></i> <span>Email рассылки</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Входящие</a></li>
                    <li><a href="mailbox_compose.html"><i class="ti-more"></i>Отправленные</a></li>
                    <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Прочитанные</a></li>
                </ul>
            </li>



            <li class="header nav-small-cap">Категории и товары</li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="grid"></i>
                    <span>Категории</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('all.category')}}"><i class="ti-more"></i>Родительские категории</a></li>
                    <li><a href="{{route('all.subcategory')}}"><i class="ti-more"></i>Подкатегрии</a></li>
                    <li><a href="{{route('all.subsubcategory')}}"><i class="ti-more"></i>Под Подкатегории</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="credit-card"></i>
                    <span>Товары</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('add.product')}}"><i class="ti-more"></i>Добавить товар</a></li>
                    <li><a href="card_basic.html"><i class="ti-more"></i>Редактировать товары</a></li>
                    <li><a href="card_color.html"><i class="ti-more"></i>Импорт товаров по API</a></li>
                    <li><a href="card_color.html"><i class="ti-more"></i>Импорт товаров XML Exel</a></li>
                    <li><a href="card_color.html"><i class="ti-more"></i>Экспорт товаров по API</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i data-feather="credit-card"></i>
                    <span>Бренды</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('all.brand')}}"><i class="ti-more"></i>Все Бренды</a></li>
                    <li><a href="#"><i class="ti-more"></i>История</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="hard-drive"></i>
                    <span>Заказы</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="content_typography.html"><i class="ti-more"></i>Новые заказы</a></li>
                    <li><a href="content_media.html"><i class="ti-more"></i>Оплаченые</a></li>
                    <li><a href="content_grid.html"><i class="ti-more"></i>Завершенные заказы</a></li>
                </ul>
            </li>
            <li class="header nav-small-cap">Управление складом</li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="edit-2"></i>
                    <span>CRM</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="icons_fontawesome.html"><i class="ti-more"></i>Доходы</a></li>
                    <li><a href="icons_glyphicons.html"><i class="ti-more"></i>Расходы</a></li>
                    <li><a href="icons_material.html"><i class="ti-more"></i>Скалад</a></li>
                    <li><a href="icons_themify.html"><i class="ti-more"></i>Статус заказов</a></li>
                </ul>
            </li>

            <li class="header nav-small-cap">Дизайн сайта</li>
            <li class="treeview">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Страницы</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="profile.html"><i class="ti-more"></i>Все страницы</a></li>
                    <li><a href="invoice.html"><i class="ti-more"></i>Инвойсы</a></li>
                    <li><a href="gallery.html"><i class="ti-more"></i>Галерея</a></li>
                    <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
                    <li><a href="timeline.html"><i class="ti-more"></i>Блог</a></li>
                </ul>
            </li>

            <li class="header nav-small-cap">Редактировать внешний вид</li>
            <li class="treeview">
                <a href="#">
                    <i data-feather="edit-2"></i>
                    <span>Редактор</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
            <ul class="treeview-menu">
                <li><a href="profile.html"><i class="ti-more"></i>Слайдер</a></li>
                <li><a href="invoice.html"><i class="ti-more"></i>Банеры</a></li>
                <li><a href="gallery.html"><i class="ti-more"></i>Меню</a></li>
                <li><a href="faq.html"><i class="ti-more"></i>Футер</a></li>
                <li><a href="timeline.html"><i class="ti-more"></i>Графики</a></li>
            </ul>
            </li>
            <li class="header nav-small-cap">Аналитика</li>
            <li class="treeview">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Аналитика</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="profile.html"><i class="ti-more"></i>Путь Клиента</a></li>
                    <li><a href="invoice.html"><i class="ti-more"></i>Брошенная корзина</a></li>
                    <li><a href="gallery.html"><i class="ti-more"></i>Данные о клиентах</a></li>
                    <li><a href="faq.html"><i class="ti-more"></i>Опросы</a></li>
                    <li><a href="timeline.html"><i class="ti-more"></i>Создать новый опрос</a></li>
                </ul>
            </li>

            <li class="header nav-small-cap">Конкуренты</li>
            <li class="treeview">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Конкуренты</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="profile.html"><i class="ti-more"></i>Цены конкурентов</a></li>
                    <li><a href="invoice.html"><i class="ti-more"></i>Отслеживать нового конкурента</a></li>

                </ul>
            </li>




        </ul>
    </section>


</aside>
