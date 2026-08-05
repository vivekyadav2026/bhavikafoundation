<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Bhavika Welfare Foundation'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'A registered public charitable trust dedicated to rural education, woman empowerment, clean healthcare, and ecological sustainability.'; ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS.js CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css?v=1.1.2">
    <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : 'bg-canvas'; ?>">

    <!-- Red Top Utility Bar -->
    <div class="top-utility-bar d-block">
        <div class="container-fluid px-3 px-lg-4">
            <!-- Desktop Layout (All side-by-side, visible on lg and above) -->
            <div class="d-none d-lg-flex justify-content-between align-items-center w-100">
                <div class="d-flex align-items-center gap-2 flex-shrink-0">
                    <a href="https://www.facebook.com/bhavikawelfarefoundation" target="_blank" class="top-social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/bhavikawelfarefoundation?igsh=ZWdtdTB1bXdlNjQz" target="_blank" class="top-social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.bhavikawelfarefoundation.org" target="_blank" class="top-social-icon" aria-label="Website"><i class="fas fa-globe"></i></a>
                </div>
                
                <!-- Middle Side: News & Updates Marquee -->
                <div class="news-ticker-container d-flex align-items-center mx-4 flex-grow-1">
                    <div class="news-ticker-badge">
                        <i class="fa-solid fa-bolt me-1"></i> समाचार एवं अपडेट
                    </div>
                    <div class="news-ticker-content">
                        <div class="news-ticker-scroll">
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side: Phone Contact -->
                <div class="top-contact-info d-flex align-items-center flex-shrink-0">
                    <a href="tel:+918865944833" class="text-white text-decoration-none fw-bold d-flex align-items-center gap-2 text-nowrap" style="font-size: 0.95rem; letter-spacing: 0.5px;">
                        <i class="fa-solid fa-phone"></i> +91 8865944833
                    </a>
                </div>
            </div>
            
            <!-- Mobile/Tablet Layout (Stacked, visible below lg) -->
            <div class="d-lg-none d-flex flex-column gap-2 py-1">
                <!-- Row 1: Social Icons & Phone Contact -->
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="d-flex align-items-center gap-2">
                        <a href="https://www.facebook.com/bhavikawelfarefoundation" target="_blank" class="top-social-icon" style="width: 26px; height: 26px; font-size: 0.8rem;"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/bhavikawelfarefoundation?igsh=ZWdtdTB1bXdlNjQz" target="_blank" class="top-social-icon" style="width: 26px; height: 26px; font-size: 0.8rem;"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.bhavikawelfarefoundation.org" target="_blank" class="top-social-icon" style="width: 26px; height: 26px; font-size: 0.8rem;"><i class="fas fa-globe"></i></a>
                    </div>
                    <div class="top-contact-info d-flex align-items-center">
                        <a href="tel:+918865944833" class="text-white text-decoration-none fw-bold d-flex align-items-center gap-2 text-nowrap" style="font-size: 0.85rem; letter-spacing: 0.3px;">
                            <i class="fa-solid fa-phone"></i> +91 8865944833
                        </a>
                    </div>
                </div>
                <!-- Row 2: News Updates Marquee -->
                <div class="news-ticker-container d-flex align-items-center w-100" style="height: 30px;">
                    <div class="news-ticker-badge px-2" style="font-size: 0.75rem; height: 100%;">
                        <i class="fa-solid fa-bolt me-1"></i> समाचार एवं अपडेट
                    </div>
                    <div class="news-ticker-content">
                        <div class="news-ticker-scroll" style="animation-duration: 25s;">
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                            <span class="ticker-separator"></span>
                            <span>“हमसे जुड़ें और सूचित रहें: जीवन को सशक्त बनाना, समुदायों को बदलना!”</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid px-3 px-lg-4">
            <a class="navbar-brand-custom" href="index.php">
                <img src="images/logo.jpg" alt="Bhavika Welfare Foundation Logo" style="height: 82px; border-radius: 8px; box-shadow: var(--shadow-sm); border: 1px solid var(--border); background: var(--white); padding: 4px;"> 
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'home') ? 'active' : ''; ?>" href="index.php">मुख्य पृष्ठ</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'about') ? 'active' : ''; ?>" href="about.php">हमारे बारे में</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'programs') ? 'active' : ''; ?>" href="programs.php">हमारे कार्यक्रम</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'gallery') ? 'active' : ''; ?>" href="gallery.php">गैलरी</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'volunteer') ? 'active' : ''; ?>" href="volunteer.php">स्वयंसेवक बनें</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'contact') ? 'active' : ''; ?>" href="contact.php">संपर्क करें</a></li>
                    <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                        <a href="donate.php" class="btn btn-pill btn-pill-accent btn-navbar">
                            <i class="fa-solid fa-heart me-2"></i> अभी दान करें
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
