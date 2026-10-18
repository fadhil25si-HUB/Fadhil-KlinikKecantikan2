<div class="sidebar-wrapper" id="sidebar">
    {{-- Brand --}}
    <a href="{{ url('/admin') }}" class="sidebar-brand">
        <img src="{{ asset('assets/assets-admin/images/LogoGriyaPuspita.png') }}" alt="Griya Puspita">
        <span>Griya Puspita</span>
    </a>

    {{-- Menu navigasi --}}
    <div class="flex-grow-1 overflow-y-auto">
        <div class="sidebar-menu-section">
            <div class="sidebar-menu-title">Menu</div>
            <ul class="sidebar-menu-list">
                <li class="sidebar-menu-item">
                    <a href="{{ url('/admin') }}" id="menu-overview" title="Dashboard"
                       class="sidebar-menu-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a href="{{ route('pelanggan.index') }}"
                       class="sidebar-menu-link {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                        <i class="bi bi-people-fill"></i>
                        <span>Customer</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a href="{{ route('treatment.index') }}"
                       class="sidebar-menu-link {{ request()->routeIs('treatment.*') ? 'active' : '' }}">
                        <i class="bi bi-scissors"></i>
                        <span>Treatment</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a href="{{ route('terapis.index') }}"
                       class="sidebar-menu-link {{ request()->routeIs('terapis.*') ? 'active' : '' }}">
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Terapis</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="{{ route('user.index') }}"
                       class="sidebar-menu-link {{ request()->routeIs('user.*') ? 'active' : '' }}">
                        <i class="bi bi-person-fill"></i>
                        <span>User</span>
                    </a>
            </ul>
        </div>
    </div>

    {{-- Kartu profil (footer sidebar) --}}
    <div class="sidebar-profile">
        <img src="{{ asset('assets/assets-admin/images/avatar.png') }}" alt="Administrator" class="sidebar-profile-img"
             onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&auto=format&fit=crop'">
        <div class="sidebar-profile-info">
            <div class="sidebar-profile-name">Administrator</div>
            <div class="sidebar-profile-email">admin@email.com</div>
        </div>
    </div>
</div>
