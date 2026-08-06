<?php
$pageTitle = "Contact Us | Bhavika Welfare Foundation";
$pageDescription = "Get in touch with Bhavika Welfare Foundation. Visit our office in Uttarakhand, call us, or send an email.";
$activePage = "contact";
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white position-relative overflow-hidden py-5">
        <div class="hero-shape hero-shape-1" style="background: var(--primary-light); opacity: 0.15; top: -50%; right: -20%; width: 400px; height: 400px;"></div>
        <div class="container position-relative z-1" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-3">Reach Out</span>
            <h1 class="page-header-title mb-3">Contact <span class="text-gradient">Us</span></h1>
            <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary), var(--secondary)); border-radius: var(--radius-pill); margin-bottom: 20px;"></div>
            <p class="lead text-muted mx-auto" style="max-width: 600px; font-size: 1.1rem; line-height: 1.6;">Have questions about our programs, volunteering, or corporate partnerships? We're here to help.</p>
        </div>
    </header>

    <!-- Contact Split Section -->
    <section class="section-padding bg-canvas position-relative overflow-hidden">
        <div class="hero-shape hero-shape-1" style="background: var(--primary-light); opacity: 0.05; top: 10%; right: -10%;"></div>
        
        <div class="container position-relative z-1">
            <div class="row g-5">
                
                <!-- Contact Info & Map -->
                <div class="col-lg-5 pe-lg-5 text-center text-lg-start" data-aos="fade-right">
                    <span class="eyebrow-tag mx-auto mx-lg-0 d-table d-lg-inline-block mb-3">Get in Touch</span>
                    <h2 class="mb-4 text-dark font-heading">Find Our Offices</h2>
                    <p class="text-muted mb-4 lh-lg" style="font-size: 1.05rem;">We coordinate our operations from our office in Haldwani, Uttarakhand. Feel free to reach out to us.</p>

                    <div class="d-flex flex-column gap-4 mb-4 text-start">
                        <div class="d-flex align-items-center gap-4 p-4 bg-white rounded-4 shadow-sm border-start border-primary border-4 hover-translate-up transition-transform">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <i class="fa-solid fa-location-dot fs-5"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h6 mb-1 text-dark">Registered Office</h4>
                                <p class="text-muted small mb-0">Sultanpur, Golapar, Haldwani, Uttarakhand</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4 p-4 bg-white rounded-4 shadow-sm border-start border-primary border-4 hover-translate-up transition-transform">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <i class="fa-solid fa-location-dot fs-5"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h6 mb-1 text-dark">Office Address</h4>
                                <p class="text-muted small mb-0">Sultanpur, Golapar, Haldwani, Uttarakhand</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4 p-4 bg-white rounded-4 shadow-sm border-start border-secondary border-4 hover-translate-up transition-transform">
                            <div class="bg-secondary bg-opacity-10 text-secondary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <i class="fa-solid fa-phone fs-5"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h6 mb-1 text-dark">Phone</h4>
                                <p class="text-muted small mb-0">+91 8865944833 (Mon - Sat, 9am - 6pm)</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4 p-4 bg-white rounded-4 shadow-sm border-start border-accent border-4 hover-translate-up transition-transform">
                            <div class="bg-accent bg-opacity-10 text-accent rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <i class="fa-solid fa-envelope fs-5"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h6 mb-1 text-dark">Email</h4>
                                <p class="text-muted small mb-0">bhavikawelfarefoundation@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                    <div class="glass-panel bg-white border shadow-lg p-4 p-md-5">
                        <h3 class="fw-bold mb-4 text-center text-dark">Send Us a Message</h3>
                        
                        <div id="formFeedback" class="alert alert-success d-none text-center py-3 rounded-4 mb-4" role="alert">
                            <i class="fa-solid fa-circle-check fs-4 text-success mb-2 d-block"></i>
                            <h5 class="fw-bold mb-1">Message Sent!</h5>
                            <p class="small mb-0">Thank you. Our representatives will get back to you shortly.</p>
                        </div>

                        <form id="contactForm" onsubmit="submitContactForm(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small">First Name</label>
                                    <input type="text" class="form-control form-control-custom" placeholder="John" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small">Last Name</label>
                                    <input type="text" class="form-control form-control-custom" placeholder="Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small">Email Address</label>
                                    <input type="email" class="form-control form-control-custom" placeholder="john@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small">Phone Number</label>
                                    <input type="tel" class="form-control form-control-custom" placeholder="+91 8865944833" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small">Subject</label>
                                    <select class="form-select form-control-custom" required>
                                        <option value="" selected disabled>Select subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="volunteering">Volunteering</option>
                                        <option value="partnership">Corporate CSR Partnership</option>
                                        <option value="donation">Donation Question</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small">Message</label>
                                    <textarea class="form-control form-control-custom" rows="4" placeholder="How can we help you?" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-pill-primary w-100 py-3 mt-3 fs-6 shadow">
                                        Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <!-- Location Map Embed -->
    <section class="section-padding bg-white border-top">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table mb-2">Visit Our Office</span>
                <h3 class="fw-bold">Find Us on Google Maps</h3>
                <p class="text-muted small">Sultanpur, Golapar, Haldwani, Uttarakhand</p>
            </div>
            <div class="rounded-4 overflow-hidden shadow-lg border" data-aos="zoom-in" style="height: 450px;">
                <iframe src="https://maps.google.com/maps?q=Sultanpur%2C%20Golapar%2C%20Haldwani%2C%20Uttarakhand&t=&z=14&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <script>
        function submitContactForm(event) {
            event.preventDefault();
            const form = document.getElementById('contactForm');
            const feedback = document.getElementById('formFeedback');
            form.classList.add('d-none');
            feedback.classList.remove('d-none');
            feedback.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    </script>

<?php include 'includes/footer.php'; ?>

