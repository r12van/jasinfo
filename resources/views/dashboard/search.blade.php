@extends('layout.canvas-dashboard')

@section('kontainer')

        <section class="page-title bg-transparent mt-6">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content"  id="pencarian">
						<h1>Hasil Pencarian</h1>
                        <span><i>"Pencarian"</i></span>
					</div>


				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">


                    <div class="grid-filter-wrap" id="filter-data-pencarian">
                        <ul class="grid-filter filter-pencarian">
							<li class="li-pencarian activeFilter"><a href="#pencarian" data-kolapse="div-berita" onclick="gantiFilter(this)">Berita</a></li>
							<li class="li-pencarian"><a href="#pencarian" data-kolapse="div-galeri" onclick="gantiFilter(this)">Galeri</a></li>
							<li class="li-pencarian"><a href="#pencarian" data-kolapse="div-pengumuman" onclick="gantiFilter(this)">Pengumuman</a></li>
						</ul>
                    </div>
                    
                    {{-- start bagian berita --}}
                    <div class="collapse div-collapse fade" id="div-berita">
                        <h3>Artikel Terkait</h3>
                        <div class="entry col-12" style="left: 0%; top: 0px;">
                            <div class="grid-inner row g-0">
                                <div class="col-md-4">
                                    <div class="entry-image">
                                        <a href="images/blog/full/17.jpg" data-lightbox="image"><img src="images/blog/small/17.jpg" alt="Standard Post with Image"></a>
                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                            <li><a href="#"><i class="uil uil-user"></i> admin</a></li>
                                            <li><i class="uil uil-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                                            <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li>
                                            <li><a href="#"><i class="uil uil-camera"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
                                        <a href="blog-single.html" class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end bagian berita --}}

                    {{-- start bagian galeri --}}
                    <div class="collapse div-collapse fade" id="div-galeri">
                        <div class="jumbotron text-center">
                            <strong><i>Tidak ditemukan galeri yang sesuai dengan kata pencarian.</i></strong>
                        </div>
                    </div>
                    {{-- end bagian galeri --}}


                    {{-- start bagian pengumuman --}}
                    <div class="collapse div-collapse fade" id="div-pengumuman">
                        <div class="jumbotron text-center">
                           <strong><i> Tidak ditemukan pengumuman yang sesuai dengan kata pencarian.</i></strong>
                        </div>
                    </div>
                    {{-- end bagian pengumuman --}}

				</div>
			</div>
		</section>
@endsection

@push('stack-body')
    <script>
        var divList =   document.querySelectorAll("div.div-collapse");

           window.onLoad = function(){
            divList.map(item => new bootstrap.collapse(item))

           }
        
       
        console.log(divList);

        function gantiFilter(el)
        {

            var links = document.querySelectorAll("li.li-pencarian");
           
            links.forEach(anchor => {
                anchor.classList.remove("activeFilter");
            })

            divList.forEach(node =>{
                // node.hide();
                // console.log(node);
                var item = bootstrap.Collapse.getInstance(node)
                if(item !== null)
                    item.hide();
            });

            var target = document.getElementById(el.dataset.kolapse);
            bootstrap.Collapse.getOrCreateInstance(target).show();

            el.parentElement.classList.add("activeFilter")
            // var li = el.classList.add("activeFilter")

            console.log(el);
            // target.show();
        }
    </script>
@endpush