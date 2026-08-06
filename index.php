<?php
$pageTitle = "Bhavika Welfare Foundation | Premium NGO Restoring Hope";
$pageDescription = "A premium registered public charitable trust dedicated to rural education, woman empowerment, clean healthcare, and ecological sustainability. Registered under Section 80G & 12A.";
$activePage = "home";
include 'includes/header.php';
?>

    <!-- Hero Banner Slider Section -->
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            
            <!-- Slide 1: Mission & Education -->
            <div class="carousel-item active">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.65), rgba(15, 23, 42, 0.75)), url('images/banner_shg_mission.png');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-8 text-center" data-aos="fade-up" data-aos-duration="1000">
                            <span class="badge bg-primary text-white rounded-pill px-4 py-2 mb-3 fw-bold text-uppercase fs-7 tracking-wider shadow"><i class="fa-solid fa-graduation-cap me-2"></i> Education & Mission</span>
                            <h1 class="display-4 text-white fw-extrabold mb-4 font-heading text-gradient-light">Empowered Society, Brighter Future</h1>
                            <p class="lead text-light-50 mb-5 text-shadow-sm fs-5">Building a prosperous community by linking rural children and women with quality education and skill development.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="donate.php" class="btn btn-pill btn-pill-accent btn-lg shadow-lg"><i class="fa-solid fa-heart me-2"></i> Donate Now</a>
                                <a href="programs.php" class="btn btn-pill btn-pill-outline-light btn-lg"><i class="fa-solid fa-list me-2"></i> Our Programs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Women Empowerment -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.65), rgba(15, 23, 42, 0.75)), url('images/banner_shg_empowerment.png');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-8 text-center">
                            <span class="badge bg-success text-white rounded-pill px-4 py-2 mb-3 fw-bold text-uppercase fs-7 tracking-wider shadow"><i class="fa-solid fa-venus me-2"></i> Women Empowerment</span>
                            <h1 class="display-4 text-white fw-extrabold mb-4 font-heading text-gradient-light">Women Self-Reliance & Dignity</h1>
                            <p class="lead text-light-50 mb-5 text-shadow-sm fs-5">Striving continuously to empower rural women educationally, socially, and economically for self-reliance.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="donate.php" class="btn btn-pill btn-pill-accent btn-lg shadow-lg"><i class="fa-solid fa-heart me-2"></i> Donate Now</a>
                                <a href="contact.php" class="btn btn-pill btn-pill-outline-light btn-lg"><i class="fa-solid fa-phone me-2"></i> Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Healthcare & Welfare -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.65), rgba(15, 23, 42, 0.75)), url('images/banner_shg_support.png');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-8 text-center">
                            <span class="badge bg-danger text-white rounded-pill px-4 py-2 mb-3 fw-bold text-uppercase fs-7 tracking-wider shadow"><i class="fa-solid fa-shield-heart me-2"></i> Healthcare & Welfare</span>
                            <h1 class="display-4 text-white fw-extrabold mb-4 font-heading text-gradient-light">Quality Healthcare & Community Welfare</h1>
                            <p class="lead text-light-50 mb-5 text-shadow-sm fs-5">Organizing rural medical camps and providing essential healthcare assistance to underprivileged communities.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="donate.php" class="btn btn-pill btn-pill-accent btn-lg shadow-lg"><i class="fa-solid fa-heart me-2"></i> Donate Now</a>
                                <a href="about.php" class="btn btn-pill btn-pill-outline-light btn-lg"><i class="fa-solid fa-circle-info me-2"></i> About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Environment Protection -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.65), rgba(15, 23, 42, 0.75)), url('images/banner_shg_training.png');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-8 text-center">
                            <span class="badge bg-warning text-dark rounded-pill px-4 py-2 mb-3 fw-bold text-uppercase fs-7 tracking-wider shadow"><i class="fa-solid fa-leaf me-2"></i> Environment Protection</span>
                            <h1 class="display-4 text-white fw-extrabold mb-4 font-heading text-gradient-light">Environmental Protection & Green Initiative</h1>
                            <p class="lead text-light-50 mb-5 text-shadow-sm fs-5">Protecting nature and building a clean environment through tree plantation drives and ecological awareness.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="volunteer.php" class="btn btn-pill btn-pill-accent btn-lg shadow-lg"><i class="fa-solid fa-hands-holding-child me-2"></i> Become a Volunteer</a>
                                <a href="donate.php" class="btn btn-pill btn-pill-outline-light btn-lg"><i class="fa-solid fa-heart me-2"></i> Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 5: Youth & Relief Services -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.65), rgba(15, 23, 42, 0.75)), url('images/banner_shg_employment.png');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-8 text-center">
                            <span class="badge bg-info text-white rounded-pill px-4 py-2 mb-3 fw-bold text-uppercase fs-7 tracking-wider shadow"><i class="fa-solid fa-handshake-angle me-2"></i> Youth & Relief Services</span>
                            <h1 class="display-4 text-white fw-extrabold mb-4 font-heading text-gradient-light">Youth Development & Relief Services</h1>
                            <p class="lead text-light-50 mb-5 text-shadow-sm fs-5">Guiding the youth while delivering rapid humanitarian relief during natural disasters and emergencies.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="donate.php" class="btn btn-pill btn-pill-accent btn-lg shadow-lg"><i class="fa-solid fa-heart me-2"></i> Donate Now</a>
                                <a href="contact.php" class="btn btn-pill btn-pill-outline-light btn-lg"><i class="fa-solid fa-phone me-2"></i> Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Prev & Next Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Quick Credentials Strip Below Banner -->
    <div class="bg-dark text-white py-3 border-top border-bottom border-light border-opacity-10 shadow-sm">
        <div class="container">
            <div class="row g-3 justify-content-center text-center align-items-center">
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <i class="fa-solid fa-award text-success fs-5"></i>
                        <span class="small fw-bold">80G & 12A Certified</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <i class="fa-solid fa-layer-group text-primary fs-5"></i>
                        <span class="small fw-bold">8 Core Focus Areas</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <i class="fa-solid fa-building-flag text-warning fs-5"></i>
                        <span class="small fw-bold">Uttarakhand Gov Approved</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <i class="fa-solid fa-shield-halved text-danger fs-5"></i>
                        <span class="small fw-bold">100% Direct Impact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trusted By / Credibility Badges -->
    <section class="py-5 bg-white border-top border-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center g-4 text-center">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-3 rounded-4 bg-canvas border shadow-sm h-100 d-flex align-items-center justify-content-center gap-3">
                        <i class="fa-solid fa-certificate text-primary fs-3"></i>
                        <div class="text-start">
                            <h4 class="fw-extrabold text-dark mb-0 h5">80G Certified</h4>
                            <small class="text-muted" style="font-size:11px;">50% Tax Exemption</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-3 rounded-4 bg-canvas border shadow-sm h-100 d-flex align-items-center justify-content-center gap-3">
                        <i class="fa-solid fa-shield-halved text-success fs-3"></i>
                        <div class="text-start">
                            <h4 class="fw-extrabold text-dark mb-0 h5">12A Registered</h4>
                            <small class="text-muted" style="font-size:11px;">Tax Exempt Trust</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-3 rounded-4 bg-canvas border shadow-sm h-100 d-flex align-items-center justify-content-center gap-3">
                        <i class="fa-solid fa-hand-holding-hand text-danger fs-3"></i>
                        <div class="text-start">
                            <h4 class="fw-extrabold text-dark mb-0 h5">NITI Aayog</h4>
                            <small class="text-muted" style="font-size:11px;">Darpan ID Registered</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-3 rounded-4 bg-canvas border shadow-sm h-100 d-flex align-items-center justify-content-center gap-3">
                        <i class="fa-solid fa-building text-warning fs-3"></i>
                        <div class="text-start">
                            <h4 class="fw-extrabold text-dark mb-0 h5">MCA Approved</h4>
                            <small class="text-muted" style="font-size:11px;">Ref: CSR0004512</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="section-padding bg-canvas position-relative overflow-hidden">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 pe-lg-5 text-center text-lg-start" data-aos="fade-right">
                    <span class="eyebrow-tag mx-auto mx-lg-0 d-table d-lg-inline-block mb-3">About Us</span>
                    <h2 class="mb-4 text-dark lh-sm" style="font-family: var(--font-heading); font-weight: 800;">Bhavika Welfare Foundation <br> <span class="text-primary fs-4" style="font-weight: 600;">(Recognized by Govt of Uttarakhand)</span></h2>
                    
                    <div class="p-3 bg-white rounded-4 border-start border-primary border-4 shadow-sm mb-4 text-start">
                        <p class="lead mb-0 text-dark fw-semibold" style="line-height: 1.8; font-size: 1.05rem;">
                            “An earnest initiative dedicated to women upliftment, empowerment, and holistic community development.”
                        </p>
                    </div>
                    
                    <p class="text-muted mb-4 lh-lg text-start" style="font-size: 1.05rem;">
                        Our organization inspires women and families in rural communities towards self-employment while facilitating access to government welfare schemes. We provide free vocational training and drive sustainable rural development across Uttarakhand.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <div class="d-flex align-items-center gap-3 bg-white py-2.5 px-4 rounded-pill border shadow-sm transition-transform hover-translate-up">
                            <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; flex-shrink: 0;">
                                <i class="fa-solid fa-shield-halved text-success fs-5"></i>
                            </div>
                            <span class="fw-bold text-dark" style="font-size: 0.9rem;">Gov Recognized</span>
                        </div>
                        <div class="d-flex align-items-center gap-3 bg-white py-2.5 px-4 rounded-pill border shadow-sm transition-transform hover-translate-up">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; flex-shrink: 0;">
                                <i class="fa-solid fa-graduation-cap text-primary fs-5"></i>
                            </div>
                            <span class="fw-bold text-dark" style="font-size: 0.9rem;">Free Training</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="position-relative px-2">
                        <div class="image-offset-wrapper">
                            <img src="images/Bhavika_office.jpg" class="img-fluid w-100 rounded-4 shadow-lg" style="height: 440px; object-fit: cover;" alt="Bhavika Welfare Foundation Office">
                            <!-- Floating Card -->
                            <div class="glass-badge position-absolute bottom-0 start-0 m-4 p-3 d-flex align-items-center gap-3 border-radius-md" style="border-radius: var(--radius-md);">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 44px; height: 44px;">
                                    <i class="fa-solid fa-star fs-5"></i>
                                </div>
                                <div>
                                    <h4 class="fw-extrabold text-primary mb-0 h4">100% Free</h4>
                                    <p class="small text-muted mb-0 fw-bold text-uppercase" style="letter-spacing: 0.5px; font-size: 0.7rem;">Practical Vocational Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team Section -->
    <section class="section-padding bg-white position-relative border-top">
        <div class="container position-relative z-1">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table mb-3">Our Leadership</span>
                <h2 class="fw-bold">Dedicated Executive Leadership</h2>
                <div class="mx-auto" style="width: 50px; height: 3px; background: var(--primary); border-radius: var(--radius-pill); margin-top: 15px; margin-bottom: 15px;"></div>
                <p class="text-muted mx-auto" style="max-width: 600px;">The driving force behind Bhavika Welfare Foundation, leading our mission toward women empowerment and rural self-reliance.</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Director & Head of Department: Mrs. Babita -->
                <div class="col-12 col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 rounded-4 shadow-sm overflow-hidden transition-all hover-translate-up bg-canvas">
                        <div class="position-relative overflow-hidden">
                            <img src="images/director_babita.jpg" class="card-img-top object-fit-cover" style="height: 340px; object-position: top center;" alt="Mrs. Babita - Director & Head of Department">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill fw-bold shadow-sm" style="font-size: 0.78rem; letter-spacing: 0.5px;">DIRECTOR</span>
                        </div>
                        <div class="card-body p-4 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-bold h4 text-dark mb-1">Mrs. Babita</h3>
                                <p class="text-primary small fw-bold text-uppercase mb-3" style="letter-spacing: 0.8px; font-size: 0.8rem;">Director & Head of Department</p>
                                <div class="mx-auto mb-3" style="width: 36px; height: 3px; background: var(--accent); border-radius: var(--radius-pill);"></div>
                                <p class="text-muted small lh-relaxed mb-0">
                                    Guiding organizational strategy, department operations, and free vocational training centers across Uttarakhand.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Joint Director: Mr. Brij Mohan -->
                <div class="col-12 col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 rounded-4 shadow-sm overflow-hidden transition-all hover-translate-up bg-canvas">
                        <div class="position-relative overflow-hidden">
                            <img src="images/director_brij_mohan.jpg" class="card-img-top object-fit-cover" style="height: 340px; object-position: top center;" alt="Mr. Brij Mohan - Joint Director">
                            <span class="badge bg-dark position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill fw-bold shadow-sm" style="font-size: 0.78rem; letter-spacing: 0.5px;">JOINT DIRECTOR</span>
                        </div>
                        <div class="card-body p-4 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-bold h4 text-dark mb-1">Mr. Brij Mohan</h3>
                                <p class="text-primary small fw-bold text-uppercase mb-3" style="letter-spacing: 0.8px; font-size: 0.8rem;">Joint Director</p>
                                <div class="mx-auto mb-3" style="width: 36px; height: 3px; background: var(--accent); border-radius: var(--radius-pill);"></div>
                                <p class="text-muted small lh-relaxed mb-0">
                                    Directing field execution, village community outreach, and ensuring welfare schemes reach every deserving family.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="team.php" class="btn btn-pill btn-pill-accent btn-md px-4 shadow-sm"><i class="fa-solid fa-users me-2"></i> Meet Our Leadership Team</a>
            </div>
        </div>
    </section>

    <!-- Our Focus Areas Section -->
    <section class="section-padding bg-canvas position-relative">
        <div class="container">
            <div class="text-center mb-5 pb-4" data-aos="fade-up">
                <span class="eyebrow-tag">Our Focus Areas</span>
                <h2>Our Core Focus Areas</h2>
                <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary), var(--secondary)); border-radius: var(--radius-pill); margin-top: 15px;"></div>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Education -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 bg-white rounded-4 border-top border-primary border-4 shadow-sm h-100 transition-all hover-translate-up text-center">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-book-open fs-3"></i>
                        </div>
                        <h4 class="fw-bold h5 mb-3 text-dark">Education</h4>
                        <p class="text-muted small mb-0 lh-relaxed">Quality schooling & scholarships</p>
                    </div>
                </div>
                <!-- Healthcare -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 bg-white rounded-4 border-top border-danger border-4 shadow-sm h-100 transition-all hover-translate-up text-center">
                        <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-shield-heart fs-3"></i>
                        </div>
                        <h4 class="fw-bold h5 mb-3 text-dark">Healthcare</h4>
                        <p class="text-muted small mb-0 lh-relaxed">Free medical camps & health aid</p>
                    </div>
                </div>
                <!-- Women Empowerment -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 bg-white rounded-4 border-top border-success border-4 shadow-sm h-100 transition-all hover-translate-up text-center">
                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-venus fs-3"></i>
                        </div>
                        <h4 class="fw-bold h5 mb-3 text-dark">Women Empowerment</h4>
                        <p class="text-muted small mb-0 lh-relaxed">Self-reliance & leadership</p>
                    </div>
                </div>
                <!-- Skill Development -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-4 bg-white rounded-4 border-top border-warning border-4 shadow-sm h-100 transition-all hover-translate-up text-center">
                        <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-gears fs-3"></i>
                        </div>
                        <h4 class="fw-bold h5 mb-3 text-dark">Skill Development</h4>
                        <p class="text-muted small mb-0 lh-relaxed">Vocational & digital courses</p>
                    </div>
                </div>
                <!-- Environment Protection -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 bg-white rounded-4 border-top border-success border-4 shadow-sm h-100 transition-all hover-translate-up text-center">
                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-leaf fs-3"></i>
                        </div>
                        <h4 class="fw-bold h5 mb-3 text-dark">Environment Protection</h4>
                        <p class="text-muted small mb-0 lh-relaxed">Tree plantation & sustainability</p>
                    </div>
                </div>
                <!-- Youth Development -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 bg-white rounded-4 border-top border-primary border-4 shadow-sm h-100 transition-all hover-translate-up text-center">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-users fs-3"></i>
                        </div>
                        <h4 class="fw-bold h5 mb-3 text-dark">Youth Development</h4>
                        <p class="text-muted small mb-0 lh-relaxed">Guidance & youth empowerment</p>
                    </div>
                </div>
                <!-- Community Welfare -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 bg-white rounded-4 border-top border-info border-4 shadow-sm h-100 transition-all hover-translate-up text-center">
                        <div class="bg-info bg-opacity-10 text-info rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-people-roof fs-3"></i>
                        </div>
                        <h4 class="fw-bold h5 mb-3 text-dark">Community Welfare</h4>
                        <p class="text-muted small mb-0 lh-relaxed">Rural development & assistance</p>
                    </div>
                </div>
                <!-- Relief Services -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-4 bg-white rounded-4 border-top border-secondary border-4 shadow-sm h-100 transition-all hover-translate-up text-center">
                        <div class="bg-secondary bg-opacity-10 text-secondary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-handshake-angle fs-3"></i>
                        </div>
                        <h4 class="fw-bold h5 mb-3 text-dark">Relief Services</h4>
                        <p class="text-muted small mb-0 lh-relaxed">Emergency & disaster relief</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="programs.php" class="btn btn-pill btn-pill-primary btn-lg"><i class="fa-solid fa-list me-2"></i> View All Programs</a>
            </div>
        </div>
    </section>
    <!-- Mangalam Yojana Section -->
    <!-- <section class="section-padding bg-white position-relative overflow-hidden border-top">
        <div class="container">
            <div class="row align-items-center g-5 flex-lg-row-reverse">
                <div class="col-lg-6 ps-lg-5 text-center text-lg-start" data-aos="fade-left">
                    <span class="eyebrow-tag mx-auto mx-lg-0 d-table d-lg-inline-block mb-3">Special Initiative</span>
                    <h2 class="mb-4 text-dark lh-sm" style="font-family: var(--font-heading); font-weight: 800;">Mangalam Scheme</h2>
                    
                    <div class="p-3 bg-canvas rounded-4 border-start border-danger border-4 shadow-sm mb-4 text-start">
                        <p class="lead mb-0 text-dark fw-semibold" style="line-height: 1.8; font-size: 1.1rem;">
                            Our organization's Mangalam Scheme provides financial gift assistance to rural families for daughter marriages.
                        </p>
                    </div>
                    
                    <p class="text-muted mb-4 lh-lg text-start" style="font-size: 1.05rem;">
                        This scheme is designed to support eligible families and ease marriage financial burdens.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-lg-start">
                        <div class="d-flex align-items-center gap-3 bg-canvas py-2.5 px-4 rounded-pill border shadow-sm transition-transform hover-translate-up">
                            <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; flex-shrink: 0;">
                                <i class="fa-solid fa-gift text-danger fs-5"></i>
                            </div>
                            <span class="fw-bold text-dark" style="font-size: 0.9rem;">Marriage Gift Assistance</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="position-relative px-2">
                        <div class="image-offset-wrapper">
                            <img src="images/mangalam_yojana.png" class="img-fluid w-100 rounded-4 shadow-lg border border-4 border-white" style="height: 440px; object-fit: cover;" alt="Mangalam Yojana">
                            <div class="glass-badge position-absolute top-0 start-0 m-4 p-3 d-flex align-items-center gap-3 border-radius-md shadow-lg" style="border-radius: var(--radius-md); background: rgba(255,255,255,0.9); backdrop-filter: blur(10px);">
                                <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 44px; height: 44px;">
                                    <i class="fa-solid fa-hands-holding-child fs-5"></i>
                                </div>
                                <div>
                                    <h4 class="fw-extrabold text-danger mb-0 h5">Mangalam Gift</h4>
                                    <p class="small text-muted mb-0 fw-bold text-uppercase" style="letter-spacing: 0.5px; font-size: 0.7rem;">Marriage Aid Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Why Choose Us Section -->
    <section class="section-padding position-relative overflow-hidden">
        <div class="container position-relative z-1">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 pe-lg-5 text-center text-lg-start" data-aos="fade-right">
                    <span class="eyebrow-tag mx-auto mx-lg-0 d-table d-lg-inline-block">Core Value Pillars</span>
                    <h2 class="mb-4">Why Donors Trust Our Mission</h2>
                    <p class="text-muted mb-5" style="font-size: 1.1rem;">We bridge the gap between resources and grassroots implementation. By establishing local operations and maintaining third-party auditing systems, we secure complete transparency.</p>
                    <div class="value-pillars-list d-flex flex-column gap-4">
                        <div class="value-pillar-item d-flex gap-4 p-4 rounded-4 transition-all">
                            <div class="value-pillar-icon d-flex align-items-center justify-content-center flex-shrink-0">
                                <i class="fa-solid fa-users text-primary fs-4"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h5 mb-2">Direct Delivery Channel</h4>
                                <p class="text-muted mb-0" style="font-size: 0.95rem;">We eliminate middle-agents, ensuring resources directly fuel field training, local workshops, and micro-business setups.</p>
                            </div>
                        </div>
                        <div class="value-pillar-item d-flex gap-4 p-4 rounded-4 transition-all">
                            <div class="value-pillar-icon d-flex align-items-center justify-content-center flex-shrink-0">
                                <i class="fa-solid fa-chart-line text-primary fs-4"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h5 mb-2">Continuous Impact Tracking</h4>
                                <p class="text-muted mb-0" style="font-size: 0.95rem;">We compile quarterly visual progress reports and clear financial breakdowns for absolute transparency and audit-level compliance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="position-relative">
                        <div class="image-offset-wrapper">
                            <img src="images/hero_education.png" class="img-fluid rounded-4 shadow-lg w-100" style="border-radius: var(--radius-lg) !important;" alt="Sponsor class smart learning">
                            <!-- Floating Card -->
                            <div class="position-absolute bottom-0 start-0 translate-middle-y ms-n4 d-none d-md-block">
                                <div class="glass-panel p-4 text-center d-flex flex-column align-items-center justify-content-center shadow-lg border border-white border-opacity-30" style="border-radius: var(--radius-md); min-width: 160px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px);">
                                    <div class="pulse-dot mb-2"></div>
                                    <h4 class="fw-bold text-primary mb-1 h2">95%</h4>
                                    <p class="small text-muted mb-0 fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.7rem;">Direct Delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Numbers Section -->
    <section class="impact-hero-dark text-center">
        <div class="container position-relative z-1">
            <div class="row g-5 justify-content-center">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="stat-counter-large stat-number" data-target="15000" data-suffix="+">0</h2>
                    <p class="text-white opacity-75 fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.85rem;">Lives Touched</p>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="stat-counter-large stat-number" data-target="50" data-suffix="+">0</h2>
                    <p class="text-white opacity-75 fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.85rem;">Active Hubs</p>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="stat-counter-large stat-number" data-target="100" data-suffix="+">0</h2>
                    <p class="text-white opacity-75 fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.85rem;">Local Mentors</p>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="stat-counter-large stat-number" data-target="95" data-suffix="%">0</h2>
                    <p class="text-white opacity-75 fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.85rem;">Fund Delivery</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Programs Grid (Filterable) -->
    <!-- Moments of Impact (Gallery Preview) -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5 pb-2" data-aos="fade-up">
                <span class="eyebrow-tag">Moments of Impact</span>
                <h2>Moments of Impact (Gallery)</h2>
                <p class="text-muted mx-auto mt-2" style="max-width: 600px;">A glimpse into the daily operations and active training batches across our rural empowerment centers.</p>
            </div>
            
            <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
                <!-- Gallery Item 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="gallery-item-home rounded-4 overflow-hidden position-relative shadow-sm">
                        <img src="images/training_tailoring_1781940867813.png" class="w-100 h-100 object-fit-cover" style="min-height: 280px;" alt="Tailoring Classes">
                        <div class="gallery-item-home-overlay d-flex flex-column justify-content-end p-4">
                            <h5 class="text-white fw-bold mb-1" style="font-size: 1.1rem;">Tailoring Batch</h5>
                            <p class="text-white-50 small mb-0">Self-employment preparation</p>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="gallery-item-home rounded-4 overflow-hidden position-relative shadow-sm">
                        <img src="images/training_computer_1781940894876.png" class="w-100 h-100 object-fit-cover" style="min-height: 280px;" alt="Computer Lab">
                        <div class="gallery-item-home-overlay d-flex flex-column justify-content-end p-4">
                            <h5 class="text-white fw-bold mb-1" style="font-size: 1.1rem;">Digital Smart Lab</h5>
                            <p class="text-white-50 small mb-0">Computer literacy program</p>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="gallery-item-home rounded-4 overflow-hidden position-relative shadow-sm">
                        <img src="images/employment_pickle_1781940982237.png" class="w-100 h-100 object-fit-cover" style="min-height: 280px;" alt="Pickle Making">
                        <div class="gallery-item-home-overlay d-flex flex-column justify-content-end p-4">
                            <h5 class="text-white fw-bold mb-1" style="font-size: 1.1rem;">Pickle Production</h5>
                            <p class="text-white-50 small mb-0">Micro-livelihood training</p>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="gallery-item-home rounded-4 overflow-hidden position-relative shadow-sm">
                        <img src="images/loan_group_1781940949765.png" class="w-100 h-100 object-fit-cover" style="min-height: 280px;" alt="Group Meeting">
                        <div class="gallery-item-home-overlay d-flex flex-column justify-content-end p-4">
                            <h5 class="text-white fw-bold mb-1" style="font-size: 1.1rem;">Group Loans</h5>
                            <p class="text-white-50 small mb-0">Self-help group support</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="200">
                <a href="gallery.php" class="btn btn-pill btn-pill-outline px-5">
                    View Full Photo Gallery <i class="fa-solid fa-images ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Partner Organizations -->
    <!-- <section class="py-5 border-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center g-5 text-center opacity-75">
                <div class="col-4 col-md-2" data-aos="zoom-in" data-aos-delay="100">
                    <span class="fw-bold text-uppercase text-muted" style="font-size:1.2rem; letter-spacing: 2px;">TATA CSR</span>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in" data-aos-delay="200">
                    <span class="fw-bold text-uppercase text-muted" style="font-size:1.2rem; letter-spacing: 2px;">INFOSYS</span>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in" data-aos-delay="300">
                    <span class="fw-bold text-uppercase text-muted" style="font-size:1.2rem; letter-spacing: 2px;">RELIANCE</span>
                </div>
                <div class="col-4 col-md-2" data-aos="zoom-in" data-aos-delay="400">
                    <span class="fw-bold text-uppercase text-muted" style="font-size:1.2rem; letter-spacing: 2px;">HDFC</span>
                </div>
            </div>
        </div>
    </section> -->

<?php include 'includes/footer.php'; ?>
