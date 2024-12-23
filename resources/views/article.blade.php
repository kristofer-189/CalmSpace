@extends('layouts.app')

@section('head')
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@400;600&display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="/css/article.css">
@endsection

@section('content')
<!-- Video Content -->
<div class="container my-5">
  <!-- YouTube Video Section -->
  <div class="ratio ratio-16x9 video-container">
    <iframe src="https://www.youtube.com/embed/pcmoQinDhJ4?si=91NyjxlhGF7-Uagd" title="YouTube video" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>

  <!-- Description Section -->
  <div class="mt-3 text-center">
    <p class="video-description">
      This YouTube video explores the topic of mental well-being. Take a moment to watch and reflect on its insights.
    </p>
  </div>
</div>

<!-- Article Content -->
<h2 style="padding-left: 160px;">Mental Health News</h2>
<div class="card-container">
  <div class="card1 card" style="width: 18rem;">
    <img src="/images/Article1.jpg" class="card-img-top" alt="Kesehatan Mental pada Remaja">
    <div class="card-body">
      <h5 class="card-title">Mengenal Pentingnya Kesehatan Mental pada Remaja</h5>
      <p class="card-text">Kesehatan mental remaja adalah hal penting yang mendukung perkembangan fisik, intelektual,
        emosional, dan spiritual secara optimal.</p>
      <a href="https://yankes.kemkes.go.id/view_artikel/362/mengenal-pentingnya-kesehatan-mental-pada-remaja"
        class="btn btn-primary">Read More</a>
    </div>
  </div>

  <div class="card2 card" style="width: 18rem;">
    <img src="/images/Article2.jpg" class="card-img-top" alt="Pentingnya Menjaga Kesehatan Mental">
    <div class="card-body">
      <h5 class="card-title">Apa Pentingnya Menjaga Kesehatan Mental?</h5>
      <p class="card-text">Menjaga kesehatan mental penting untuk mendukung keseimbangan emosi, kemampuan menghadapi
        stres, dan kualitas hidup secara keseluruhan. Mental yang sehat membantu seseorang berpikir jernih, menjalin
        hubungan baik, serta meningkatkan produktivitas.</p>
      <a href="https://health.kompas.com/read/2022/06/18/170000368/apa-pentingnya-menjaga-kesehatan-mental-?page=all"
        class="btn btn-primary">Read More</a>
    </div>
  </div>

  <div class="card3 card" style="width: 18rem;">
    <img src="/images/Article3.jpg" class="card-img-top" alt="Benarkah Generasi Z Memiliki Mental yang Lemah?">
    <div class="card-body">
      <h5 class="card-title">Benarkah Generasi Z Memiliki Mental yang Lemah?</h5>
      <p class="card-text">Data yang dihimpun oleh Jakpat pada 2022 menunjukkan bahwa Generasi Z (lahir 1997-2012)
        adalah generasi dengan persentase tertinggi yang melaporkan masalah kesehatan mental.</p>
      <a href="https://kumparan.com/elsaajupitaelsaaa/benarkah-generasi-z-memiliki-mental-yang-lemah-23zmWtcgc1M/1"
        class="btn btn-primary">Read More</a>
    </div>
  </div>
</div>

<div class="card-container">
  <div class="card4 card" style="width: 18rem;">
    <img src="/images/Article4.jpeg" class="card-img-top" alt="Hari Kesehatan Mental Sedunia 2024">
    <div class="card-body">
      <h5 class="card-title">Hari Kesehatan Mental Sedunia 2024</h5>
      <p class="card-text">Hari Kesehatan Mental Sedunia atau World Mental Health Day diperingati setiap tanggal 10
        Oktober setiap tahunnya. Tema yang diusung tahun ini adalah ”It is Time to Prioritize Mental Health in the
        Workplace” atau ”Saatnya Mengutamakan Kesehatan Mental di Tempat Kerja”.</p>
      <a href="https://dinkes.kulonprogokab.go.id/detil/1423/hari-kesehatan-mental-sedunia-2024"
        class="btn btn-primary">Read More</a>
    </div>
  </div>

  <div class="card5 card" style="width: 18rem;">
    <img src="/images/Article5.jpeg" class="card-img-top"
      alt="Kebiasaan No.1 di Pagi Hari yang Bermanfaat untuk Kesehatan Fisik dan Mental">
    <div class="card-body">
      <h5 class="card-title">Kebiasaan No.1 di Pagi Hari yang Bermanfaat untuk Kesehatan Fisik dan Mental, Menurut
        Penelitian!</h5>
      <p class="card-text">Kesehatan fisik dan mental merupakan dua hal penting yang harus sangat dijaga dengan sangat
        seimbang.</p>
      <a href="https://www.beautynesia.id/wellness/kebiasaan-no1-di-pagi-hari-yang-bermanfaat-untuk-kesehatan-fisik-dan-mental-menurut-penelitian/b-298044/2"
        class="btn btn-primary">Read More</a>
    </div>
  </div>

  <div class="card6 card" style="width: 18rem;">
    <img src="/images/Article6.jpg" class="card-img-top" alt="Program YMHC">
    <div class="card-body">
      <h5 class="card-title">Kemenpora Nilai Program YMHC untuk Tingkatkan Kesehatan Mental Generasi Muda Indonesia</h5>
      <p class="card-text">Plt. Deputi Pemberdayaan Pemuda Kemenpora Yohan mengatakan bahwa, acara Launching program
        Youth Mental Health Center (YMHC) untuk meningkatkan perhatian terhadap kesehatan mental generasi muda
        Indonesia.</p>
      <a href="https://www.kemenpora.go.id/detail/3985/kemenpora-nilai-program-ymhc-untuk-tingkatkan-kesehatan-mental-generasi-muda-indonesia"
        class="btn btn-primary">Read More</a>
    </div>
  </div>
</div>
@endsection