<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">QUẢN LÝ</li>
            <li class="{{--active--}} treeview">
                <a href="index" onclick="loadPageIndex()">
                    <i class="fa fa-dashboard"></i>
                    <span>Tổng quan</span>
                </a>
                <script language="javascript">
                    function loadPageIndex()
                    {
                        window.location.href = "{{route('index')}}"
                    }
                </script>
            </li>
            <li class="treeview">
                <a href="product" onclick="loadPageProduct()">
                    <i class="fa fa-laptop"></i>
                    <span>Sản phẩm</span>
                </a>
                <script language="javascript">
                    function loadPageProduct()
                    {
                        window.location.href = "{{route('indexPro')}}"
                    }
                </script>
            </li>
            <li class="treeview">
                <a href="category" onclick="loadPageCategory()">
                    <i class="fa fa-th-large"></i>
                    <span>Danh mục</span>
                </a>
                <script language="javascript">
                    function loadPageCategory()
                    {
                        window.location.href = "{{route('indexCat')}}"
                    }
                </script>
            </li>
            <li class="treeview">
                <a href="brand" onclick="loadPageBrand()">
                    <i class="fa fa-bold"></i>
                    <span>Thương hiệu</span>
                </a>
                <script language="javascript">
                    function loadPageBrand()
                    {
                        window.location.href = "{{route('indexBra')}}"
                    }
                </script>
            </li>
            <li class="treeview">
                <a href="user" onclick="loadPageUser()">
                    <i class="fa fa-users"></i>
                    <span>Tài khoản</span>
                </a>
                <script language="javascript">
                    function loadPageUser()
                    {
                        window.location.href = "{{route('indexUser')}}"
                    }
                </script>
            </li>
            <li class="treeview">
                <a href="customer" onclick="loadPageCustomer()">
                    <i class="fa fa-user-md"></i>
                    <span>Khách hàng</span>
                </a>
                <script language="javascript">
                    function loadPageCustomer()
                    {
                        window.location.href = "{{route('indexCus')}}"
                    }
                </script>
            </li>
            <li class="treeview">
                <a href="bill" onclick="loadPageBill()">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Hóa đơn</span>
                </a>
                <script language="javascript">
                    function loadPageBill()
                    {
                        window.location.href = "{{route('indexBill')}}"
                    }
                </script>
            </li>
            <li class="treeview">
                <a href="billdetail" onclick="loadPageBillDetail()">
                    <i class="fa  fa-opencart"></i>
                    <span>Chi tiết hóa đơn</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
                <script language="javascript">
                    function loadPageBillDetail()
                    {
                        window.location.href = "{{route('indexBillDetail')}}"
                    }
                </script>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>