<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="#">
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
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Ibu Hamil</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Timbangan</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Tables Nav -->
        <li class="nav-heading">Pages</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li>
        <!-- End F.A.Q Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li>
        <!-- End Login Page Nav -->
    </ul>
</aside>
<!-- End Sidebar-->