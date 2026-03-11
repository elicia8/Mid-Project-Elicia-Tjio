<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('listkaryawan') ? 'active' : '' }}" href="/listkaryawan">Lihat Daftar Karyawan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>