<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">			
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		    <li>
          <a href="{{ route('dashboard') }}">
            <i class="mdi mdi-database"></i>
			      <span>Dashboard</span>
          </a>
        </li>		
        <li class="treeview">
              <a href="#">
                <i class="mdi mdi-bulletin-board"></i>
                <span>Berita</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                {{-- <li><a href="widgets_blog.html"><i class="ti-more"></i>Banner Berita</a></li> --}}
                <li><a href="{{ route('adminBerita') }}"><i class="ti-more"></i>Tabel Berita</a></li>
                <li><a href="{{ route('adminBuatBerita') }}"><i class="ti-more"></i>Buat Berita</a></li>
              </ul>
        </li> 
        {{-- <li class="treeview">
              <a href="#">
                <i class="mdi mdi-gift"></i>
                <span>Profile</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
          <li><a href="component_modals.html"><i class="ti-more"></i>Sejarah Pemadam</a></li>
                <li><a href="component_sweatalert.html"><i class="ti-more"></i>Tugas Pokok</a></li>
                <li><a href="component_notification.html"><i class="ti-more"></i>Struktur Organisasi</a></li>
          <li><a href="component_notification.html"><i class="ti-more"></i>Identitas Logo</a></li>
              </ul>
        </li>  --}}
      </ul>
    </section>
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="mdi mdi-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="mdi mdi-email-variant"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="mdi mdi-lock-plus"></i></a>
	</div>
</aside>