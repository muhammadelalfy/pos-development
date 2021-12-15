<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">لوحة التحكم</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">اسم الادمن</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الصفحة الرئيسية
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('admins.view') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                        الموظفين 
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('fatoraAdd') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                       فاتورة مبسطة جديدة
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('purshase.view') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                       فاتورة ضريبية جديدة
                        </p>
                    </a>
                </li>
            </ul>
        </nav>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('ordersViewAdmin') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                          كل الفواتير المبسطة 
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('allPurshase') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                         كل الفواتير الضريبية
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('allBounce') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                         الفواتير المرتجعة المبسطة  
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('allBouncePurshase') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                         الفواتير المرتجعة الضريبية  
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('setting') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                         الاعدادات 
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

   


    </div>
</aside>