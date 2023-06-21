<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Data Periksa</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('data_imunisasi') }}">
                        <i class="bi bi-circle"></i><span>Imunisasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data_ibu_hamil') }}">
                        <i class="bi bi-circle"></i><span>Ibu Hamil</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data_timbangan') }}">
                        <i class="bi bi-circle"></i><span>Timbangan</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Tables Nav -->
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link collapsed"
                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
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
