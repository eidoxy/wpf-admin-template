{{-- SIDEBAR --}}
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Starter</li>
        <li class="{{ Request::is('mahasiswa') ? 'active' : '' }}">
          <a class="nav-link" href="blank.html"><i class="far fa-square"></i>
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