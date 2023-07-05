<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">SPK</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">SPK</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Master</li>
            <li class="{{ Request::is('criteria') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('criteria.index') }}"><i class="far fa-square"></i> <span>Criteria</span></a>
            </li>
            <li class="{{ Request::is('alternative') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('alternative.index') }}"><i class="far fa-square"></i> <span>Alternative</span></a>
            </li>
        </ul>
    </aside>
</div>