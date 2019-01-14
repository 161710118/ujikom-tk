 <nav class="navbar navbar-custom navbar-fixed-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
               <i class="fa fa-bars"></i>
               </button>
               <div class="navbar-brand-centered page-scroll">
                  <a href="/"><img src="{{asset('assets/user/img/logo.png')}}"  alt=""></a>
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
               <div class="container">
                  <ul class="nav navbar-nav page-scroll navbar-left">
                     <li><a href="/">Home</a></li>
                     <li><a href="#services">Profil</a></li>
                     <li><a href="{{Route('guru')}}">Guru</a></li>
                     <li><a href="#team">Fasilitas</a></li>
                     <li><a href="/">Prestasi</a></li>
                  </ul>
                  <ul class="nav navbar-nav page-scroll navbar-right">
                     <li><a href="/galeri">Gallery</a></li>
                     <!-- Dropdown -->
                     <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="/berita">Blog Home</a></li>
                           <li><a href="/berita">Blog Post</a></li>
                           <li class="divider"></li>
                           <li class="active"><a href="#latestblog">Latest Posts</a></li>
                        </ul>
                     </li>
                     <li><a href="/contact">Contact</a></li>
                     <!-- Dropdown -->
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="elements.html">Elements</a></li>
                           <li><a href="index_video.html">Video Header</a></li>
                           <li><a href="sidebar-page.html">Sidebar Page</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- /.navbar-collapse -->
         </nav>