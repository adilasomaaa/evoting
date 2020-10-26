<!-- Logo -->
<?php
  $dt = \App\User::where('id',\Auth::user()->id)->first();
?>
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light header">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('admin')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block bg-success">
        <a href="https://api.whatsapp.com/send?phone=6285311327490&text=Saya%20ingin%20bertanya%20mengenai%20pemilihan%20ketua%20osis." class="nav-link">Contact Person</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm ">
        <span class="mt-1.5">|| SUARAMU YANG SEKARANG MENENTUKAN SEKOLAH INI MENDATANG</span>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> <i class="fab fa-facebook"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> <i class="fab fa-instagram"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> <i class="fab fa-youtube"></i></a>
      </li>
      <span class="mt-2">
        Terhubung dengan Kami
      </span>
    </ul>
  </nav>
  <!-- /.navbar -->