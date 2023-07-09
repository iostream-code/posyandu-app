<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin') ? '' : 'collapsed' }}" href="{{ route('admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->role == 'Super')
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/user*') ? '' : 'collapsed' }}" href="{{ route('super') }}">
                    <i class="bx bxs-group"></i>
                    <span>Kelola Admin</span>
                </a>
            </li>
        @endif
        <!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/data-periksa/*') ? '' : 'collapsed' }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Data Periksa</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content {{ request()->is('admin/data-periksa/*') ? '' : 'collapse' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('data_imunisasi') }}" class="{{ request()->is('admin/data-periksa/data-imunisasi*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Imunisasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data_ibu_hamil') }}" class="{{ request()->is('admin/data-periksa/data-ibu-hamil*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Ibu Hamil</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data_timbangan') }}" class="{{ request()->is('admin/data-periksa/data-timbangan*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Timbangan</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Tables Nav -->
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link collapsed" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                @csrf
            </form>
        </li>
        <!-- End Login Page Nav -->
    </ul>
</aside>
<!-- End Sidebar-->
