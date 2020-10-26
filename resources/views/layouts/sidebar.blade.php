 <?php 
  $dt = \App\User::where('id', \Auth::user()->id)->first();
?>
 
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
      <span class="brand-text font-weight-light"><b>ITGROUP</b>SMKN1Limboto</span>
      <div class="text-muted " style="font-size:10px"> <a class="text-gray" href="https://www.instagram.com/adi.lasoma/">by adilasoma</a> </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Selamat Pagi, {{ \Auth::user()->name }}</a>
        </div>
      </div>
      @if(\Auth::user()->id == 1)
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin')}}" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
               
              </p>
            </a>
           

          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Manage Siswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="{{url('siswa')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('siswa/add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Siswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Kandidat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('kandidat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Kandidat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('kandidat/add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kandidat</p>
                </a>
              </li>
            </ul>
          </li>
      @endif
      @if(\Auth::user()->id !== 1)
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin')}}" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
               
              </p>
            </a>
      @endif
          </li>
          <li class="nav-item">
            <a href="{{url('pemilihan')}}" class="nav-link">
            <i class="fas fa-list"></i>
              <p>
                Voting
              </p>
            </a>
          </li>
          @if(\Auth::user()->id == 1)
          <li class="nav-item">
            <a href="{{url('grafik')}}" class="nav-link">
            <i class="fa fa-chart-pie"></i>
              <p>
                Grafik
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{url('logout')}}" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>