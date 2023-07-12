<div class="side-nav">
    <div class="side-nav-inner">
        <br>
        <br>
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown">
                <a href="{{ url('admin/beranda') }}">
                    <span class="icon-holder">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="title">Beranda</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ url('admin/mahasiswa') }}">
                    <span class="icon-holder">
                        <i class="fa fa-users"></i>
                    </span>
                    <span class="title">Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item dropdown request()->is('admin/nilai') ? 'active' : ''">
                <a href="{{ url('admin/nilai') }}">
                    <span class="icon-holder">
                        <i class="fa fa-book"></i>
                    </span>
                    <span class="title">Nilai</span>
                </a>
            </li>
        </ul>
    </div>
</div>