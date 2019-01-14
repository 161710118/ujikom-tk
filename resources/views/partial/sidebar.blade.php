<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Tk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/m.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Laela Maharani</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Menu
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ Route('kontaks.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
               <li class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ Route('program.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Program</p>
                </a>
              </li>
               <li class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ Route('kategori.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Kategori program</p>
                </a>
              </li>
               <li class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{Route ('fasilitas.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Fasilitas</p>
                </a>
              </li>
              <li class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{Route ('kategorisfasilitas.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Kategori Fasilitas</p>
                </a>
              </li>
               <li class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ Route('galeri.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>
               <li class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ Route('kategoris.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Kategori Galeri</p>
                </a>
              </li>
               <li class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ Route('guru.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>guru</p>
                </a>
              </li>
              <li class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ Route('testimoni.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Testimoni</p>
                </a>
              </li>
              <li class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ Route('prestasi.index')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Prestasi</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>