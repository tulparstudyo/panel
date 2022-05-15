<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ url('dashboard') }}">
            <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
<span class="ms-1 font-weight-bold text-white">{{ __('Dashboard') }}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Post</h6>
            </li>
            <x-item.aside title="New Post" icon="format_textdirection_r_to_l" route="post"  class="error" :value="$data['message']" />
            <x-item.aside title="Post List" icon="dashboard" route="post"  class="error" :value="$data['message']" />
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <form id="logout-form" action="{{ url('logout') }}" method="POST" >
                {{ csrf_field() }}
                <button type="submit" value="Çık" style="border: none" class="btn bg-gradient-primary mt-4 w-100">Logout</button>
            </form>
        </div>

    </div>
</aside>
