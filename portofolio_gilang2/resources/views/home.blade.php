@extends('layouts.app')

@section('title','Home')

@section('content')

<!-- ================= HERO ================= -->

<section class="hero" id="home">

    <div class="container">

        <div class="row align-items-center">

            <!-- Kiri -->
            <div class="col-lg-6" data-aos="fade-right">

                <h5>HELLO, I'M</h5>

                <h1>M. Gilang Seftian</h1>

                <h3>
                    <span id="typing"></span>
                </h3>

                <p style="text-align: justify">

                    Saya Merupakan Fresh Graduate lulusan Sistem Informasi Universitas Multi Data
                    Palembang dengan IPK <strong>3.81</strong>. Selain itu, saya memiliki <Strong>Sertifikasi Database administrator dari Badan Nasional Sertifikasi Profesi (BNSP)</strong>,
                    Memiliki ketertarikan di bidang Web Development, Database Administration, Berpengalaman mengembangkan aplikasi menggunakan Laravel, MySQL,
                    Bootstrap, Flutter, dan Mampu bekerja secara individu maupun tim, serta memiliki semangat belajar tinggi dan siap berkontribusi secara profesional.

                </p>

                <div class="hero-btn">

                    <a href="#projects" class="btn-red">

                        <i class="bi bi-folder-fill"></i>

                        View Projects

                    </a>

                    <a href="{{ asset('cv/CV_M_Gilang_Seftian.pdf') }}"
                        target="_blank"
                        class="btn-outline">

                        <i class="bi bi-download"></i>

                        Download CV

                    </a>

                </div>

            </div>

            <!-- Kanan -->

            <div class="col-lg-6 text-center"
                data-aos="fade-left">

                <div class="profile">

                    <div class="circle"></div>

                    <img src="{{ asset('images/profile.png') }}"
                        alt="Profile">

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= STATISTICS ================= -->

<section class="stats">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="stat-box">

                    <h2 class="counter" data-target="3.81">3.81</h2>

                    <p>GPA</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-box">

                    <h2 class="counter" data-target="6">5</h2>

                    <p>Projects</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-box">

                    <h2 class="counter" data-target="10">1</h2>

                    <p>Certificates</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-box">

                    <h2 class="counter" data-target="12">3</h2>

                    <p>Pelatihan</p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= ABOUT ================= -->

<section id="about" class="py-5">

    <div class="container">

        <div class="section-title text-center mb-5" data-aos="fade-up">

            <h2>About Me</h2>

            <p class="text-secondary">
                Get To Know Me Better
            </p>

        </div>

        <div class="row align-items-center">

            <!-- FOTO -->

            <div class="col-lg-5 mb-5 mb-lg-0"
                data-aos="fade-right">

                <div class="text-center">

                    <img src="{{ asset('images/profile.png') }}"
                        class="img-fluid rounded-4 shadow-lg"
                        style="max-width:350px;">

                </div>

            </div>

            <!-- DESKRIPSI -->

            <div class="col-lg-7"
                data-aos="fade-left">

                <h3 class="fw-bold mb-4">

                    Fresh Graduate Information Systems

                </h3>

                <p class="mb-3">

                    Halo! Saya <strong>M. Gilang Seftian</strong>,
                    lulusan Program Studi Sistem Informasi
                    Universitas Multi Data Palembang dengan
                    IPK <strong>3.81</strong>.

                </p>

                <p class="mb-3">

                    Saya memiliki ketertarikan pada bidang
                    <strong>Web Development</strong>,
                    <strong>Database Administrator</strong>,
                    serta
                    <strong>Jaringan Komputer</strong>.

                </p>

                <p class="mb-4">

                    Selama masa perkuliahan saya telah
                    mengembangkan berbagai project menggunakan
                    Laravel, MySQL, Flutter, Firebase, 
                    SQL Server serta Microsoft Excel dan Tableau.

                </p>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <h6 class="text-danger">

                            <i class="bi bi-person-fill"></i>

                            Nama

                        </h6>

                        <p>

                            M. Gilang Seftian

                        </p>

                    </div>

                  

                    <div class="col-md-6 mb-3">

                        <h6 class="text-danger">

                            <i class="bi bi-mortarboard-fill"></i>

                            Pendidikan

                        </h6>

                        <p>

                            S1 Sistem Informasi

                        </p>

                    </div>

                      <div class="col-md-6 mb-3">

                        <h6 class="text-danger">

                            <i class="bi bi-mortarboard-fill"></i>

                            Universitas 

                        </h6>

                        <p>

                            Multi Data Palembang

                        </p>

                    </div>

                    <div class="col-md-6 mb-3">

                        <h6 class="text-danger">

                            <i class="bi bi-star-fill"></i>

                            GPA

                        </h6>

                        <p>

                            3.81 / 4.00

                        </p>

                    </div>

                    <div class="col-md-6 mb-3">

                        <h6 class="text-danger">

                            <i class="bi bi-geo-alt-fill"></i>

                            Domisili

                        </h6>

                        <p>

                            Palembang, Indonesia

                        </p>

                    </div>

                </div>

                <div class="mt-4">

                    <a href="#projects"
                        class="btn-red">

                        View Projects

                    </a>

                    <a href="{{ asset('cv/CV_M_Gilang_Seftian.pdf') }}"
                        class="btn-outline ms-2"
                        target="_blank">

                        Download CV

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= EXPERIENCE ================= -->

<section id="experience" class="py-5">

    <div class="container">

        <div class="section-title text-center mb-5" data-aos="fade-up">

            <h2>Experience</h2>

            <p class="text-secondary">
                My professional experience and academic projects that have strengthened my technical and analytical skills.
            </p>

        </div>

        <div class="timeline">

            <!-- Experience 1 -->

            <div class="timeline-item" data-aos="fade-right">

                <div class="timeline-icon">

                    <i class="bi bi-briefcase-fill"></i>

                </div>

                <div class="timeline-content">

                    <span class="timeline-date">

                        21 Maret 2025 - 21 Mei 2025

                    </span>

                    <h4>

                        Department Business Growth and Analytics - Kerja Praktik

                    </h4>

                    <h6>

                        PT Telkomsel Regional Sumbagsel

                    </h6>

                    <p>

                        <br> Mengembangkan Sistem Dashboard Monitoring Sales untuk membantu tim Business Growth and Analytics (BGA) dalam memantau performa sales berdasarkan regional, branch, dan cluster.</br>
                        <br> Mengembangkan Sistem Pencatatan Event Sales Berbasis Mobile untuk mendukung proses pengajuan, monitoring, presensi, dan pelaporan kegiatan event sales secara terintegrasi. </br>


                    </p>

                </div>

            </div>
        </div>
    </div>
</section>


<!-- ================= SKILLS ================= -->

<section id="skills" class="py-5">

    <div class="container">

        <div class="section-title text-center mb-5" data-aos="fade-up">

            <h2>Skills & Technologies</h2>

            <p class="text-secondary">
                Technologies and tools I have used in academic projects and personal projects.
            </p>

        </div>

        <div class="row g-4">

            <!-- Web Development -->

            <div class="col-lg-4 col-md-6">

                <div class="skill-card">

                    <div class="skill-header">

                        <i class="bi bi-code-slash"></i>

                        <h4>Web Development</h4>

                    </div>

                    <div class="skill-list">

                        <span>Laravel</span>

                        <span>PHP</span>

                        <span>Bootstrap</span>

                        <span>HTML5</span>

                        <span>CSS3</span>

                    </div>

                </div>

            </div>

            <!-- Database -->

            <div class="col-lg-4 col-md-6">

                <div class="skill-card">

                    <div class="skill-header">

                        <i class="bi bi-database-fill"></i>

                        <h4>Database</h4>

                    </div>

                    <div class="skill-list">

                        <span>MySQL</span>

                        <span>SQL Server</span>

                        <span>Database Design</span>

                        <span>phpMyAdmin</span>

                        <span>Relasional Database</span>

                    </div>

                </div>

            </div>

            <!-- Microsoft office -->

            <div class="col-lg-4 col-md-6">

                <div class="skill-card">

                    <div class="skill-header">

                        <i class="bi bi-bar-chart-fill"></i>

                        <h4>Microsoft Office</h4>

                    </div>

                    <div class="skill-list">

                        <span>Microsoft Word</span>

                        <span>Microsoft excel</span>

                        <span>Microsoft Power Point</span>

                        
                    </div>

                </div>

            </div>

            <!-- Mobile -->

            <div class="col-lg-4 col-md-6">

                <div class="skill-card">

                    <div class="skill-header">

                        <i class="bi bi-phone-fill"></i>

                        <h4>Mobile Development</h4>

                    </div>

                    <div class="skill-list">

                        <span>Flutter</span>

                        <span>Firebase</span>

                    </div>

                </div>

            </div>

            <!-- Tools -->

            <div class="col-lg-4 col-md-6">

                <div class="skill-card">

                    <div class="skill-header">

                        <i class="bi bi-tools"></i>

                        <h4>Tools</h4>

                    </div>

                    <div class="skill-list">


                        <span>GitHub</span>

                        <span>VS Code</span>

                        <span>XAMPP</span>

                        <span>Tableau</span>

                    </div>

                </div>

            </div>

            <!-- Networking -->

            <div class="col-lg-4 col-md-6">

                <div class="skill-card">

                    <div class="skill-header">

                        <i class="bi bi-router-fill"></i>

                        <h4>Networking</h4>

                    </div>

                    <div class="skill-list">

                        <span>Cisco Packet Tracer</span>

                        <span>LAN Design</span>


                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PROJECT ================= -->

<section id="projects">

    <div class="container">

        <div class="section-title text-center mb-5" data-aos="fade-up">

            <h2>Featured Projects</h2>

            <p class="text-secondary">
                Some of the projects I have worked on.
            </p>

        </div>

        <div class="row g-4">

            <!-- Project 1 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">

                <div class="card-custom h-100">

                    <img src="{{ asset('images/projects/Dashboard_telkom.png') }}"
                        class="card-img-top"
                        alt="Dashboard Telkomsel">

                    <div class="card-body">

                        <h4>Dashboard Monitoring Sales</h4>

                        <p>

                            Mengembangkan Sistem Dashboard Monitoring Sales 
                            untuk membantu tim Business Growth and Analytics (BGA) 
                            dalam memantau performa sales berdasarkan regional, branch, dan cluster

                        </p>

                        <div class="mb-3">

                            <span class="badge bg-danger">Laravel</span>

                            <span class="badge bg-primary">Bootstrap</span>

                            <span class="badge bg-success">Chart.js</span>

                            <span class="badge bg-warning text-dark">MySQL</span>

                        </div>

                        {{-- <a href="#"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-github"></i>

                            GitHub

                        </a> --}}

                    </div>

                </div>

            </div>

            <!-- Project 2 -->

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                <div class="card-custom h-100">

                    <img src="{{ asset('images/projects/Aplikasi_novel.png') }}"
                        class="card-img-top"
                        alt="Dashboard CSV">

                    <div class="card-body">

                        <h4>Aplikasi Review and Recommendation Novel</h4>

                        <p>

                            Aplikasi review dan rekomendasi novel yang memudahkan pengguna
                            menemukan bacaan favorit serta berbagi ulasan dengan komunitas pembaca.

                        </p>

                        <div class="mb-3">

                            <span class="badge bg-danger">Flutter</span>

                            <span class="badge bg-primary">firebase</span>


                        </div>

                        {{-- <a href="#"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-github"></i>

                            GitHub

                        </a> --}}

                    </div>

                </div>

            </div>

            <!-- Project 3 -->

            <div class="col-lg-4 col-md-6"
                data-aos="zoom-in"
                data-aos-delay="200">

                <div class="card-custom h-100">

                    <img src="{{ asset('images/projects/Pencatatan_event_sales.png') }}"
                        class="card-img-top"
                        alt="Flutter">

                    <div class="card-body">

                        <h4>Aplikasi Pencatatan Event Sales</h4>

                        <p>

                            Mengembangkan Sistem Pencatatan Event Sales Berbasis Mobile 
                            untuk mendukung proses pengajuan, monitoring, presensi, 
                            dan pelaporan kegiatan event sales secara terintegrasi.

                        </p>

                        <div class="mb-3">

                            <span class="badge bg-info">Flutter</span>

                            <span class="badge bg-warning text-dark">Firebase</span>

                        </div>

                        {{-- <a href="#"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-github"></i>

                            GitHub

                        </a> --}}

                    </div>

                </div>

            </div>

            {{-- Project 4  --}}

            <div class="col-lg-4 col-md-6" data-aos="zoom-in">

                <div class="card-custom h-100">

                    <img src="{{ asset('images/projects/Foto_paper1.png') }}"
                        class="card-img-top"
                        alt="Dashboard Telkomsel">

                    <div class="card-body">

                        <h4>Perancangan Smart Home Dengan Internet Of Things (IoT) Menggunakan Cisco Packet Tracer</h4>

                        <p>

                            Penelitian yang mengimplementasikan konsep Internet of Things (IoT) 
                            pada sistem Smart Home menggunakan Cisco Packet Tracer 
                            untuk mensimulasikan otomatisasi dan monitoring perangkat rumah secara terintegrasi.

                        </p>

                        <div class="mb-3">

                            <span class="badge bg-danger">Sinta 5</span>

                            <a href="https://jurnal.dharmawangsa.ac.id/index.php/device/article/view/6447"
                                target="_blank"
                                class="badge bg-primary text-decoration-none">

                                    Jurnal Dharmawangsa

                                </a>


                        </div>

                        {{-- <a href="#"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-github"></i>

                            GitHub

                        </a> --}}

                    </div>

                </div>

            </div>

            {{-- project 5 --}}
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">

                <div class="card-custom h-100">

                    <img src="{{ asset('images/projects/foto_paper2.png') }}"
                        class="card-img-top"
                        alt="Dashboard Telkomsel">

                    <div class="card-body">

                        <h4>Perancangan Jaringan LAN dengan Server Cloud Storage: Studi Kasus Menggunakan Cisco Packet Tracer</h4>

                        <p>

                            Penelitian mengenai perancangan dan simulasi jaringan LAN 
                            yang terintegrasi dengan server cloud storage menggunakan Cisco Packet Tracer 
                            untuk meningkatkan efisiensi komunikasi data dan pengelolaan jaringan.

                        </p>

                        <div class="mb-3">

                            <span class="badge bg-danger">Garuda</span>

                            <a href="https://ojs.stmikplk.ac.id/index.php/simtek/article/view/804"
                                target="_blank"
                                class="badge bg-primary text-decoration-none">

                                    JSIMTEK

                                </a>


                        </div>

                        {{-- <a href="#"
                            class="btn btn-outline-danger btn-sm">

                            <i class="bi bi-github"></i>

                            GitHub

                        </a> --}}

                    </div>

                </div>

            </div>
        </div>

    </div>

</section>



<!-- ================= CERTIFICATES ================= -->

<section id="certificates">

    <div class="container">

        <div class="section-title text-center mb-5" data-aos="fade-up">

            <h2>Certificates</h2>

            <p class="text-secondary">
                Training & Professional Certifications
            </p>

        </div>

        <div class="row g-4">

            <!-- Certificate 1 -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in">

                <div class="certificate-card">

                    <div class="certificate-icon">

                        <i class="bi bi-award-fill"></i>

                    </div>

                    <h5>Badan Nasional Sertifikasi Profesi (BNSP)</h5>

                    <p>

                        Database Administrator

                    </p>

                    <a href="{{ asset('images/certificate/Sertifikasi_LSP.pdf') }}"
                        target="_blank"
                        class="btn btn-danger btn-sm">

                        View Certificate

                    </a>

                </div>

            </div>

            <!-- Certificate 2 -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">

                <div class="certificate-card">

                    <div class="certificate-icon">

                        <i class="bi bi-award-fill"></i>

                    </div>

                    <h5>Associate Data Scientist + Python - Nasional Digital Talent Academy</h5>

                    <p>

                        Digital Talent Scholarship 2026

                    </p>

                    <a href="{{ asset('images/certificate/Sertifikat_MGILANG_SEFTIAN_Associate_Data_Scientist_Python_Nasional.pdf') }}"
                        target="_blank"
                        class="btn btn-danger btn-sm">

                        View Certificate

                    </a>

                </div>

            </div>

            <!-- Certificate 3 -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">

                <div class="certificate-card">

                    <div class="certificate-icon">

                        <i class="bi bi-award-fill"></i>

                    </div>

                    <h5>Intermediate Project Management Fresh Graduate Academy</h5>

                    <p>

                        Digital Talent Scholarship 2025

                    </p>

                    <a href="{{ asset('images/certificate/Sertifikat_MGILANG_SEFTIAN_Intermediate_Project_Management.pdf') }}"
                        target="_blank"
                        class="btn btn-danger btn-sm">

                        View Certificate

                    </a>

                </div>

            </div>

            <!-- Certificate 4 -->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">

                <div class="certificate-card">

                    <div class="certificate-icon">

                        <i class="bi bi-award-fill"></i>

                    </div>

                    <h5> Data Scientist Supervisor - Nasional Digital Talent Academy</h5>

                    <p>

                        Digital Talent Scholarship 2026

                    </p>

                    <a href="{{ asset('images/certificate/Sertifikat_MGILANG SEFTIAN_Data_Scientist_Supervisor_Nasional.pdf') }}"
                        target="_blank"
                        class="btn btn-danger btn-sm">

                        View Certificate

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= CONTACT ================= -->

<section id="contact" class="py-5">

    <div class="container">

        <div class="section-title text-center mb-5" data-aos="fade-up">

            <h2>Let's Work Together</h2>

            <p class="text-secondary">
                Thank you for visiting my portfolio. Feel free to contact me for job opportunities.
            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="contact-card">

                    <div class="row align-items-center">

                        <!-- LEFT -->

                        <div class="col-lg-6 mb-4 mb-lg-0">

                            <h3 class="mb-4">

                                <i class="bi bi-person-circle text-danger"></i>

                                Contact Information

                            </h3>

                            <p class="mb-4">

                                Saya selalu terbuka untuk mendiskusikan peluang baru,
                                proyek menarik, dan kolaborasi.

                            </p>

                            <div class="contact-item">

                                <i class="bi bi-envelope-fill"></i>

                                <div>

                                    <h6>Email</h6>

                                    <p>gilangseftian90@gmail.com</p>

                                </div>

                            </div>


                            <div class="contact-item">

                                <i class="bi bi-geo-alt-fill"></i>

                                <div>

                                    <h6>Location</h6>

                                    <p>Ogan Ilir, Indonesia</p>

                                </div>

                            </div>

                        </div>

                        <!-- RIGHT -->

                        <div class="col-lg-6 text-center">

                            <h4 class="mb-4">

                                Connect With Me

                            </h4>

                            <div class="social-icon justify-content-center mb-4">

                                <a href="https://github.com/MGilangSeftian" target="_blank">

                                    <i class="bi bi-github"></i>

                                </a>

                                <a href="https://linkedin.com/in/m-gilang-seftian" target="_blank">

                                    <i class="bi bi-linkedin"></i>

                                </a>

                                <a href="mailto:gilangseftian90@gmail.com">

                                    <i class="bi bi-envelope-fill"></i>

                                </a>


                            </div>

                            <a href="mailto:gilangseftian90@gmail.com"
                                class="btn-red">

                                <i class="bi bi-envelope-paper-fill"></i>

                                Send Email

                            </a>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection