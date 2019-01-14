<div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
                        
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="http://t.commonsupport.com/prime-kidz/blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                       

                        <!-- Latest News -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title"><h3>Latest News</h3></div>
                            <div class="widget-content">
                                @foreach($recent as $data)
                                <article class="post">
                                    <a href="/berita/{{ $data->slug }}" class="thumb"><img src="{{asset('/assets/images/avatar/'.$data->gambar.'') }}" alt=""></a>
                                    <h3><a href="/berita/{{ $data->slug }}">{{$data->judul}}</a></h3>
                                    <div class="post-info">{{$data->nama_penulis}}  /  {{ date('M j, Y', strtotime($data->created_at)) }}</div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                         <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Categories</h3></div>
                            @foreach($kategoris as $data)
                            <ul class="category-list">
                                <li><a href="/berita/kategori/{{ $data->id}}">{{ $data->nama }}</a></li>
                               <!--  <p>{{ $data->Program->count() }}</p> -->
                            </ul>
                            @endforeach
                        </div>

                        <!-- Popular Courses -->
                        <div class="sidebar-widget popular-courses">
                            <div class="sidebar-title"><h3>Popular Courses</h3></div>
                            <div class="widget-content">
                                <div class="post">
                                    <a class="image"><img src="{{asset('assets/guest/images/resource/popular-course-1.jpg')}}" alt=""></a>
                                    <div class="caption-box">
                                        <h3><a href="#">Fun & Gaming</a></h3>
                                        <ul>
                                            <li>45 Kids</li>
                                            <li>12 Weeks</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post">
                                    <a class="image"><img src="{{asset('assets/guest/images/resource/popular-course-2.jpg')}}" alt=""></a>
                                    <div class="caption-box">
                                        <h3><a href="#">Painting Course</a></h3>
                                        <ul>
                                            <li>45 Kids</li>
                                            <li>12 Weeks</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social widget -->
                        <div class="sidebar-widget social-widget">
                            <div class="sidebar-title"><h3>Get Connected</h3></div>
                            <div class="social-icons">
                                <ul class="social-icon-two clearfix">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                                            
                    </aside>
                </div>