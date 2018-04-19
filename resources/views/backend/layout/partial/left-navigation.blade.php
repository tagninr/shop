<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/backend/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            @auth
                <div class="pull-left info">
                    <p>{{ Auth::user()->username }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            @endauth
        </div>
        <!-- search form -->
        {{--<form action="" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
                {{--<span class="input-group-btn">--}}
              {{--<button type="button" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
              {{--</button>--}}
            {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview {{ active_class(if_route('backend.dashboard')) }}">
                <a href="" onclick="window.location.replace('{{ route('backend.dashboard') }}')">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            </span>
                </a>
            </li>

            <li class="treeview {{ active_class(if_route(['backend.category.index', 'backend.category.edit', 'backend.product.index', 'backend.product.create', 'backend.product.edit', 'backend.execel.get_import'])) }}">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span>Products</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ active_class(if_route('backend.product.index')) }}">
                        <a href="{{ route('backend.product.index') }}"><i
                                    class="fa fa-circle-o"></i>All products</a>
                    </li>

                    <li class="{{ active_class(if_route('backend.product.create')) }}">
                        <a href="{{ route('backend.product.create') }}"><i
                                    class="fa fa-circle-o"></i>Create product</a>
                    </li>

                    {{--<li class="{{ active_class(if_route('backend.execel.get_import')) }}">--}}
                        {{--<a href="{{ route('backend.execel.get_import') }}"><i--}}
                                    {{--class="fa fa-circle-o"></i>Import Excel</a>--}}
                    {{--</li>--}}

                    <li class="{{ active_class(if_route('backend.category.index') || if_route('backend.category.edit')) }}">
                        <a href="{{ route('backend.category.index') }}"><i
                                    class="fa fa-circle-o"></i>Categories</a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ active_class(if_route(['backend.page.index', 'backend.page.create', 'backend.page.edit'])) }}">
                <a href="" onclick="window.location.replace('{{ route('backend.page.index') }}')">
                    <i class="fa fa-folder"></i> <span>Page Setting</span>
                    <span class="pull-right-container">
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            </span>
                </a>
            </li>

            <li class="treeview {{ active_class(if_route('backend.log.search_log')) }}">
                <a href="" onclick="window.location.replace('{{ route('backend.log.search_log') }}')">
                    <i class="fa fa-search"></i> <span>Search Logs</span>
                    <span class="pull-right-container">
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            </span>
                </a>
            </li>

            <li class="treeview {{ active_class(Active::checkUriPattern('admin/log-viewer*')) }}">
                <a href="#">
                    <i class="fa fa-history"></i>
                    <span>System Logs</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer')) }}">
                        <a href="{{ route('log-viewer::dashboard') }}"><i class="fa fa-circle-o"></i>Dashboard</a>
                    </li>

                    <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}">
                        <a href="{{ route('log-viewer::logs.list') }}"><i class="fa fa-circle-o"></i>Logs</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
