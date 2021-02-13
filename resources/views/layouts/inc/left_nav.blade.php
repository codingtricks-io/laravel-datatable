<div class="br-logo"><a href=""><span>[</span>CodingtrickS<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">User Management</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li @if (\Request::is('user')) class='active' @endif class="nav-item"><a href="{{ route('user.index') }}" class="nav-link">All Users</a></li>
            <li @if (\Request::is('user/create')) class='active' @endif class="nav-item"><a href="{{ route('user.create') }}" class="nav-link">Create User</a></li>
        </ul>
    </div>
</div>
