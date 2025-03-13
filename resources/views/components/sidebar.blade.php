{{-- SIDEBAR --}}
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">WPF</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Umum</li>
        <li class="{{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/"><i class="fas fa-fire"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="{{ Request::is('mahasiswa') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('mahasiswa.index') }}"><i class="fas fa-users"></i>
            <span>Mahasiswa</span>
          </a>
        </li>
      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Login 
        </a>
      </div>
  </aside>
</div>