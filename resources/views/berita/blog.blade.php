@extends('berita.master')
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
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                @foreach ($blog as $item)
                    <article class="entry">

                        <div class="entry-img">
                            <img src="/images/dokumentasi/{{ $item->foto_kegiatan }}"
                                alt="{{ $item->foto_kegiatan }}" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog-single.html">{{ $item->nama_kegiatan }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog-single.html">John Doe</a></li> --}}
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-single.html"><time
                                            datetime="2020-01-01">{{ \Carbon\Carbon::parse($item->tanggal_kegiatan)->format('d-m-Y') }}</time></a>
                                </li>
                                {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-single.html">12 Comments</a></li> --}}
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {!!Str::words($item->deskripsi_kegiatan, 30, '...') !!}
                            </p>
                            <div class="read-more">
                                <a href="/berita/{{$item->id}}">Read More</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->
                @endforeach

            </div><!-- End blog entries list -->


            @include('berita.profil')<!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Section -->

@endsection
