<nav class="navbar navbar-expand-lg bg-light sticky-top ">
    <div class="container-fluid">
	    <a class="navbar-brand" href="/">
	    	<img src="{{ asset('image/logo.png') }}" width="30" height="30" alt="">
                    <span class="nav-pro-mopile nav-dark-text ">خدمه عمود الدين</span>
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars but-togger-bars"></i>
	    </button>
	    <div class="collapse navbar-collapse justify-content-md-between" id="navbarSupportedContent">
	            <ul class="nav navbar-nav  justify-content-end">
	    	        <li class="nav-item"><a class="nav-link nav-pro-mopile {{ $currentRouteName === 'index' ? 'active' : '' }}" href="/">
                        <i class="fa-solid fa-house"></i>
                        الصفحه الرئيسيه
                    </a></li>
                    @auth
                    <li class="nav-item"><li class="nav-link nav-pro-mopile mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <button class="border-0 bg-transparent text-light">
                            القائمه
                        </button>
                    </li></li>
                    @endauth
            </ul>

        <div class="form-check form-switch me-4 ms-auto">
            <input class="form-check-input rounded" type="checkbox" role="switch" id="dark-mode-switch">
            <label class="form-check-label" for="dark-mode-switch">الوضع المظلم</label>
        </div>
            @auth
            <ul class="nav navbar-nav  justify-content-end">
                <div class="dropdown">
                    <button style="display: flex;flex-direction: row-reverse; color: black; background-color: transparent; border: none;" class="btn btn-secondary   " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="auth-dark">
                            {{$Authname}}
                        </div>
                        <i class="fa-solid fa-sort-down i-dropdown-dark"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item nav-text-litter dropdown-item nav-pro-mopile {{ $currentRouteName === 'profile' ? 'active' : '' }}" href="{{ $profile }}">الملف الشخصي</a></li>
                        <li><a class="dropdown-item nav-text-litter dropdown-item nav-pro-mopile  " href="#">Another action</a></li>
                        <li><a class="dropdown-item nav-text-litter dropdown-item nav-pro-mopile  " href="{{ $logout }}"> تسجيل الخروج </a></li>
                    </ul>
                </div>
            </ul>
	    @else
            <ul class="nav navbar-nav  justify-content-end"><li class="nav-item"><a class="nav-link nav-pro-mopile {{ $currentRouteName === 'login.form' ? 'active' : '' }}" href="{{ $login }}"> تسجيل الدخول </a></li></ul>
        @endauth
    </div>
</nav>


@auth
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">القائمه</h5>
    <button type="button" class="border-0 bg-transparent text-white" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
  </div>
  <div class="offcanvas-body">
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


                        <   br>
                    </div>
</div>

@endauth