@extends('berita.master')
@section('title', 'Blog - Detail Kegiatan Organisasi')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ol>
            <h2>Blog</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" blog-aos="fade-up">

            <div class="row">

                <div class="row">

                    <div class="col-lg-12 entries">

                        <article class="entry entry-single">
                            <h2 class="entry-title text-center">
                                <a href="blog-single.html">{{ $blog->nama_kegiatan }}</a>
                            </h2>

                            <div class="entry-img text-center m-4">
                                <img src="/images/dokumentasi/{{ $blog->foto_kegiatan }}" alt="{{ $blog->foto_kegiatan }}"
                                    alt="" class="img-fluid ">
                            </div>

                            <div class="entry-meta">
                                <ul>
                                    {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li> --}}
                                    {{-- <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ \Carbon\Carbon::parse($blog->tanggal_kegiatan)->format('d-m-Y') }}</time></a></li> --}}
                                    {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> --}}
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p style="text-align: justify">
                                    {!! $blog->deskripsi_kegiatan !!}
                                </p>

                                <blockquote>
                                    <p>
                                        Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut
                                        eos aliquam doloribus minus autem quos.
                                    </p>
                                </blockquote>
                            </div>
                        </article><!-- End blog entry -->
                    </div><!-- End blog entries list -->



                </div>
            </div>

        </div>
    </section><!-- End Blog Section -->
@endsection
