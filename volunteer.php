<?php
$pageTitle = "Volunteer With Us | Bhavika Welfare Foundation";
$pageDescription = "Join our mission as a volunteer. Contribute to education, healthcare, environmental protection, or community welfare.";
$activePage = "volunteer";
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white position-relative overflow-hidden py-5">
        <div class="hero-shape hero-shape-1" style="background: var(--primary-light); opacity: 0.15; top: -50%; right: -20%; width: 400px; height: 400px;"></div>
        <div class="container position-relative z-1" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-3">Join Our Mission</span>
            <h1 class="page-header-title mb-3">Become a <span class="text-gradient">Volunteer</span></h1>
            <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary), var(--secondary)); border-radius: var(--radius-pill); margin-bottom: 20px;"></div>
            <p class="lead text-muted mx-auto" style="max-width: 650px; font-size: 1.1rem; line-height: 1.6;">Use your skills to support education, organize healthcare camps, or mentor youth in our community welfare initiatives.</p>
        </div>
    </header>

    <!-- Volunteer Section -->
    <section class="section-padding bg-canvas position-relative overflow-hidden">
        <div class="hero-shape hero-shape-1" style="background: var(--primary-light); opacity: 0.05; top: 10%; right: -10%;"></div>
        
        <div class="container position-relative z-1">
            <div class="row g-5">
                
                <!-- Info Column -->
                <div class="col-lg-5 pe-lg-5 text-center text-lg-start" data-aos="fade-right">
                    <span class="eyebrow-tag mx-auto mx-lg-0 d-table d-lg-inline-block mb-3">Why Volunteer?</span>
                    <h2 class="mb-4 text-dark font-heading">Make a Real Difference</h2>
                    <p class="text-muted mb-4 lh-lg" style="font-size: 1.05rem;">Our free training centers rely on the expertise of dedicated volunteers. By dedicating just a few hours a week, you can help someone build a livelihood and break the cycle of poverty.</p>
 
                    <div class="d-flex flex-column gap-4 mb-4 text-start">
                        <div class="d-flex align-items-start gap-4 p-4 bg-white rounded-4 shadow-sm border-start border-primary border-4 hover-translate-up transition-transform">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <i class="fa-solid fa-chalkboard-user fs-5"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h6 mb-1 text-dark">Teaching & Mentorship</h4>
                                <p class="text-muted small mb-0" style="line-height: 1.5;">Teach basic literacy, environmental awareness, or skill development courses to youth and rural women.</p>
                            </div>
                        </div>
 
                        <div class="d-flex align-items-start gap-4 p-4 bg-white rounded-4 shadow-sm border-start border-accent border-4 hover-translate-up transition-transform">
                            <div class="bg-accent bg-opacity-10 text-accent rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <i class="fa-solid fa-people-group fs-5"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h6 mb-1 text-dark">Field Operations</h4>
                                <p class="text-muted small mb-0" style="line-height: 1.5;">Assist in managing healthcare camps, relief services, or helping during community welfare events.</p>
                            </div>
                        </div>
                    </div>
                </div>
 
                <!-- Volunteer Form Column -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                    <div class="glass-panel bg-white border shadow-lg p-4 p-md-5">
                        <h3 class="fw-bold mb-4 text-center text-dark">Volunteer Application</h3>
                        
                        <div id="formFeedback" class="alert alert-success d-none text-center py-3 rounded-4 mb-4" role="alert">
                            <i class="fa-solid fa-circle-check fs-4 text-success mb-2 d-block"></i>
                            <h5 class="fw-bold mb-1">Application Submitted!</h5>
                            <p class="small mb-0">Thank you for registering. Our operational coordinators will contact you within 48 hours.</p>
                        </div>

                        <form id="volunteerForm" onsubmit="submitVolunteerForm(event)">
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
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small">Area of Interest</label>
                                    <select class="form-select form-control-custom" required>
                                        <option value="" selected disabled>Select an area</option>
                                        <option value="teaching">Education & Training</option>
                                        <option value="healthcare">Healthcare & Relief</option>
                                        <option value="environment">Environmental Protection</option>
                                        <option value="community">Community Welfare</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small">Availability</label>
                                    <select class="form-select form-control-custom" required>
                                        <option value="" selected disabled>Select availability</option>
                                        <option value="weekdays-morning">Weekdays (Morning)</option>
                                        <option value="weekdays-evening">Weekdays (Evening)</option>
                                        <option value="weekends">Weekends</option>
                                        <option value="flexible">Flexible</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small">Tell us about your experience</label>
                                    <textarea class="form-control form-control-custom" rows="4" placeholder="Briefly describe why you want to volunteer and any relevant skills you have..." required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-pill-primary w-100 py-3 mt-3 fs-6 shadow">
                                        Submit Application <i class="fa-solid fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
 
            </div>
        </div>
    </section>

    <script>
        function submitVolunteerForm(event) {
            event.preventDefault();
            
            // Collect Form elements
            const form = document.getElementById('volunteerForm');
            const feedback = document.getElementById('formFeedback');
            
            // Show successful response simulation
            form.classList.add('d-none');
            feedback.classList.remove('d-none');
            feedback.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    </script>

<?php include 'includes/footer.php'; ?>

