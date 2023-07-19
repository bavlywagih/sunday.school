
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">القائمه</h5>
        <button type="button" class="border-0 bg-transparent text-white" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body">
        @auth
	        <a class="nav-link nav-pro-mopile {{ $currentRouteName === '' ? 'active' : '' }}" href="{{route('library')}}">
                <i class="fa-solid fa-book-open"></i>
                المكتبه
            </a>
            <br>
        @auth
            <a class="nav-link nav-pro-mopile {{ $currentRouteName === 'load.post' ? 'active' : '' }}" href="{{ $loadPost }}">
                <i class="fa-solid fa-users"></i>
                الخدمه نيوز
            </a>
            <br>
        @endauth
	    <a class="nav-link nav-pro-mopile {{ $currentRouteName === 'attendance' ? 'active' : '' }} " href="{{route('attendance')}}">
            <i class="fa-solid fa-person-chalkboard"></i>
            الفصول
        </a>
        <br>
        @if ($adminRole)
	        <a class="nav-link nav-pro-mopile {{ $currentRouteName === 'users' ? 'active' : '' }} " href="{{route('users')}}">
                <i class="fa-solid fa-users-gear"></i>
                المستخدمين
            </a>
        @endif
        <br>
        @if ($adminRole)
	        <a class="nav-link nav-pro-mopile {{ $currentRouteName === 'kashkol' ? 'active' : '' }} " href="{{route('kashkol')}}">
                <i class="fa-solid fa-users-gear"></i>
                كشكول  التحضير
            </a>
        @endif
	    @endauth
        <br>
    </div>
</div>
