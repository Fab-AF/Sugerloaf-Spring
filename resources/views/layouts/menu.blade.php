<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link @if(in_array(Request::route()->getName(),['home','dashboard.list'])) active @endif">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
	<a href="{{ route('admin.profile') }}" class="nav-link @if(in_array(Request::route()->getName(),['admin.profile'])) active @endif">
        <i class="nav-icon fas fa-user"></i>
        <p>My Profile</p>
    </a>
</li>

<li class="nav-item">
	<a href="{{ route('cms.list') }}" class="nav-link @if(in_array(Request::route()->getName(),['cms.list','cms.create','cms.edit'])) active @endif">
        <i class="nav-icon fas fa-book"></i>
        <p>Pages</p>
    </a>
</li>

<li class="nav-item">
	<a href="{{ route('store.list') }}" class="nav-link @if(in_array(Request::route()->getName(),['store.list','store.create','store.edit'])) active @endif">
        <i class="nav-icon fas fa-store"></i>
        <p>Stores</p>
    </a>
</li>
