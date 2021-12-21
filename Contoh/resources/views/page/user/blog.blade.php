@extends("page.layouts.template_user")

@section("page_content")

<section id="portfolio" class="portfolio" style="margin-top: 30px;">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>BLOG</h2>
            <p>
                Berisikan tentang Galeri - Galeri dari Kegiatan <b>MPM POLINDRA</b>
            </p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach($data_berita as $berita)
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="{{ url('/storage/'.$berita->gambar) }}" width="400" height="300" alt=""></div>
                <div class="portfolio-info">
                    <h4>{{ $berita->judul }}</h4>
                    <!-- <p>Web</p> -->
                    <a href="{{ url('/search') }}" class="">
                        <i class="bx bx-search"></i> Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Portfolio Section -->

@endsection