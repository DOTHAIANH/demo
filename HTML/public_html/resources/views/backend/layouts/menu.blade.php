<li class="header">TRANG QUẢN TRỊ</li>
@if (!\Auth::user()->isDaiLy())
<li class="{{ Request::segment(2) == 'home' ? 'active' : null  }}">
    <a href="{{ route('backend.home') }}">
        <i class="fa fa-home"></i> <span>Trang chủ</span>
    </a>
</li>
@endif
@if (\Auth::user()->can('users.index') || \Auth::user()->isSuperAdmin())
<li class="treeview {{ Request::segment(2) === 'users' || Request::segment(2) === 'role'  ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-user" aria-hidden="true"></i> <span>Tài khoản</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        @if (\Auth::user()->can('users.index'))
        <li class="{{ Request::segment(2) === 'users' ? 'active' : null }}">
            <a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> User</a>
        </li>
        @endif
        @if (\Auth::user()->isSuperAdmin())
        <li class="{{ Request::segment(2) === 'role' ? 'active' : null }}">
            <a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i> Quyền</a>
        </li>
        @endif
    </ul>
</li>
@endif

@if (\Auth::user()->can('contact.index'))
<li class="{{ Request::segment(2) == 'contact' ? 'active' : null  }}">
    <a href="{{ route('get.list.contact') }}">
        <i class="fa fa-comments" aria-hidden="true"></i> <span>Khách hàng tra cứu</span>
    </a>
</li>
@endif

@if (\Auth::user()->can('daily.index'))
<li class="{{ Request::segment(2) == 'daily' ? 'active' : null  }}">
    <a href="{{ route('daily.index') }}">
        <i class="fa fa-users"></i> <span> @if (\Auth::user()->isDaiLy()) Khách hàng @else KH của ĐLy @endif</span>
    </a>
</li>
@endif

@if (\Auth::user()->can('number.index'))
<li class="{{ Request::segment(2) === 'number' ? 'active' : null }}">
    <a href="{{ route('number.index') }}"><i class="fa fa-circle-o"></i> Con số</a>
</li>
<li class="{{ Request::segment(2) == 'media' ? 'active' : null  }}">
    <a href="{{ route('media') }}">
        <i class="fa fa-file" aria-hidden="true"></i> <span>Media</span>
    </a>
</li>
@endif

@if (\Auth::user()->can('posts.index') || \Auth::user()->can('category.index'))
<li class="treeview {{ Request::segment(2) === 'post' && request('type') == 'blog' || Request::segment(2) === 'categories' && request('type') == 'blog' ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-tags" aria-hidden="true"></i> <span>Bài viết</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        @if (\Auth::user()->can('posts.index'))
        <li class="{{ Request::segment(2) === 'post' && request('type') == 'blog' ? 'active' : null }}">
            <a href="{{ route('post.index',['type'=> 'blog']) }}"><i class="fa fa-circle-o"></i> Danh sách bài viết</a>
        </li>
        @endif

        @if (\Auth::user()->can('category.index'))
        <li class="{{ Request::segment(2) === 'categories' && request('type') == 'blog' ? 'active' : null }}">
            <a href="{{ route('categories.index',['type'=> 'blog']) }}"><i class="fa fa-circle-o"></i> Danh mục bài viết</a>
        </li>
        @endif

    </ul>
</li>
@endif

@if (\Auth::user()->can('post.index'))
<li class="{{ Request::segment(2) === 'post' && request('type') == 'private' ? 'active' : null }}">
    <a href="{{ route('post.index',['type'=> 'private']) }}"><i class="fa fa-circle-o"></i> Bài viết hệ thống</a>
</li>
@endif

@if (\Auth::user()->can('pages.index'))
<li class="{{ Request::segment(2) == 'pages' ? 'active' : null  }}">
    <a href="{{ route('pages.list') }}">
        <i class="fa fa-paper-plane" aria-hidden="true"></i> <span>Cài đặt trang</span>
    </a>
</li>
@endif

@if (\Auth::user()->can('setting.general') || \Auth::user()->can('menu') || \Auth::user()->can('email'))
<li class="header">Cấu hình hệ thống</li>
<li class="treeview {{ Request::segment(2) === 'options' || Request::segment(2) === 'branchs' || Request::segment(2) === 'menu-category' ||  Request::segment(2) === 'menu' || Request::segment(2) === 'banks' ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-cog" aria-hidden="true"></i> <span>Cấu hình</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        @if (\Auth::user()->can('setting.general'))
        <li class="{{ Request::segment(3) === 'general' ? 'active' : null }}">
            <a href="{{ route('backend.options.general') }}"><i class="fa fa-circle-o"></i> Cấu hình chung</a>
        </li>
        @endif

        @if (\Auth::user()->can('menu'))
        <li class="{{ Request::segment(2) === 'menu' ? 'active' : null }}">
            <a href="{{ route('setting.menu') }}"><i class="fa fa-circle-o"></i> Menu</a>
        </li>
        @endif

        @if (\Auth::user()->can('email'))
        <li class="{{ Request::segment(3) === 'smtp' ? 'active' : null }}">
            <a href="{{ route('backend.options.smtp-config') }}"><i class="fa fa-circle-o"></i>  Cấu hình Email</a>
        </li>
        @endif
    </ul>
</li>
@endif
