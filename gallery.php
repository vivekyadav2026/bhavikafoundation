<?php
$pageTitle = "Photo Gallery | Bhavika Welfare Foundation";
$pageDescription = "View the impact of our fieldwork through our photo gallery.";
$activePage = "gallery";
$extraHead = '
    <style>
        .gallery-grid {
            column-count: 1;
            column-gap: 1.5rem;
        }
        @media (min-width: 768px) {
            .gallery-grid { column-count: 2; }
        }
        @media (min-width: 992px) {
            .gallery-grid { column-count: 3; }
        }
        .gallery-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
            border-radius: var(--radius-sm);
            overflow: hidden;
            position: relative;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            cursor: pointer;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        .gallery-overlay {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 2rem 1.5rem 1.5rem;
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        @media (max-width: 768px) {
            .gallery-overlay {
                opacity: 1 !important;
                background: linear-gradient(to top, rgba(15,23,42,0.95) 0%, rgba(15,23,42,0.5) 70%, transparent 100%) !important;
                padding: 1.2rem 1rem 0.8rem !important;
            }
        }
    </style>
';
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white">
        <div class="container" data-aos="fade-up">
            <span class="eyebrow-tag">Our Impact in Pictures</span>
            <h1 class="page-header-title">Photo <span class="text-gradient">Gallery</span></h1>
            <p class="lead text-muted mx-auto" style="max-width: 650px; font-size: 1.05rem;">A visual journey through our training centers, loan distributions, and employment workshops across rural communities.</p>
        </div>
    </header>

    <!-- Gallery Section -->
    <section class="section-padding bg-canvas position-relative">
        <div class="container">
            <div class="gallery-grid">
                
                <!-- Gallery Item 7 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/Bhavika_office.jpg" alt="Bhavika Welfare Foundation Office">
                    <div class="gallery-overlay">
                        <h5 class="fw-bold mb-1">Our Office</h5>
                        <p class="small mb-0 text-white-50">Mahila Vikash Kendra Headquarters.</p>
                    </div>
                </div>

                <!-- Gallery Item 1 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/hero_education.png" alt="Free Skill Training">
                    <div class="gallery-overlay">
                        <h5 class="fw-bold mb-1">Women Empowerment Workshop</h5>
                        <p class="small mb-0 text-white-50">Free training for women.</p>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/hero_empowerment.png" alt="Micro Employment">
                    <div class="gallery-overlay">
                        <h5 class="fw-bold mb-1">Skill Development Session</h5>
                        <p class="small mb-0 text-white-50">Employment generation initiative.</p>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="images/program_healthcare.png" alt="Financial Loan Scheme">
                    <div class="gallery-overlay">
                        <h5 class="fw-bold mb-1">Group Loan Distribution</h5>
                        <p class="small mb-0 text-white-50">Supporting rural self-help groups.</p>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/program_environment.png" alt="Beauty Parlor Training">
                    <div class="gallery-overlay">
                        <h5 class="fw-bold mb-1">Beauty Parlor Course</h5>
                        <p class="small mb-0 text-white-50">Empowering young entrepreneurs.</p>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/hero_education.png" alt="Computer Training">
                    <div class="gallery-overlay">
                        <h5 class="fw-bold mb-1">Computer Basics</h5>
                        <p class="small mb-0 text-white-50">Bridging the digital divide.</p>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="images/hero_empowerment.png" alt="Pickle Making">
                    <div class="gallery-overlay">
                        <h5 class="fw-bold mb-1">Pickle Production Line</h5>
                        <p class="small mb-0 text-white-50">Creating local products for local markets.</p>
                    </div>
                </div>


            </div>
            
            <div class="text-center mt-5 pt-4">
                <p class="text-muted mb-4">Would you like to visit our centers and see the impact firsthand?</p>
                <a href="contact.php" class="btn btn-pill-primary px-5">Contact to Visit</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
