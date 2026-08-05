<?php
$pageTitle = "Secure Donation | Bhavika Welfare Foundation";
$pageDescription = "Make a secure donation to Bhavika Welfare Foundation via Razorpay (UPI, Credit/Debit Cards, NetBanking). 50% Tax Exempt under Section 80G.";
$activePage = "donate";
include 'includes/header.php';

// Razorpay Key Configuration (Replace with your live key 'rzp_live_xxxxxxxx')
$razorpayKeyId = "rzp_test_BhavikaWelfareKey"; 
?>

    <!-- Page Header -->
    <header class="page-header bg-white position-relative overflow-hidden py-5">
        <div class="hero-shape hero-shape-1" style="background: var(--primary-light); opacity: 0.15; top: -50%; right: -20%; width: 400px; height: 400px;"></div>
        <div class="container position-relative z-1" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-3">Secure Giving (सुरक्षित दान)</span>
            <h1 class="page-header-title mb-3">Make a <span class="text-gradient">Donation</span></h1>
            <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary), var(--secondary)); border-radius: var(--radius-pill); margin-bottom: 20px;"></div>
            <p class="lead text-muted mx-auto" style="max-width: 650px; font-size: 1.1rem; line-height: 1.6;">Your support changes lives. Every contribution directly funds free education, healthcare camps, environment protection, and women empowerment initiatives.</p>
        </div>
    </header>

    <!-- Donation Section -->
    <section class="section-padding bg-canvas position-relative overflow-hidden">
        <div class="hero-shape hero-shape-1" style="background: var(--primary-light); opacity: 0.05; top: 10%; right: -10%;"></div>
        
        <div class="container position-relative z-1">
            <div class="row g-5">
                
                <!-- Trust & Info Column -->
                <div class="col-lg-5 pe-lg-5 text-center text-lg-start" data-aos="fade-right">
                    <span class="eyebrow-tag mx-auto mx-lg-0 d-table d-lg-inline-block mb-3">Support Our Cause</span>
                    <h2 class="mb-4 text-dark font-heading">Why Your Gift Matters</h2>
                    <p class="text-muted mb-4 lh-lg" style="font-size: 1.05rem;">We ensure maximum transparency and efficiency. 92% of all received donations go directly into program operations on the ground.</p>
                    
                    <div class="d-flex flex-column gap-3 text-start">
                        <div class="d-flex align-items-center gap-4 p-4 bg-white rounded-4 shadow-sm border-start border-secondary border-4 hover-translate-up transition-transform">
                            <div class="bg-secondary bg-opacity-10 text-secondary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <i class="fa-solid fa-percent fs-5"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h6 mb-1 text-dark">Tax Exempt (80G)</h4>
                                <p class="text-muted small mb-0" style="line-height: 1.5;">Donations are eligible for 50% tax deduction under Section 80G. Receipt sent instantly.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-4 p-4 bg-white rounded-4 shadow-sm border-start border-primary border-4 hover-translate-up transition-transform">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <i class="fa-solid fa-lock fs-5"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h6 mb-1 text-dark">Razorpay Secure Payment</h4>
                                <p class="text-muted small mb-0" style="line-height: 1.5;">UPI, GPay, PhonePe, Cards, NetBanking & Wallets supported via 256-bit SSL encryption.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-4 p-4 bg-white rounded-4 shadow-sm border-start border-success border-4 hover-translate-up transition-transform">
                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                                <i class="fa-solid fa-file-invoice fs-5"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold h6 mb-1 text-dark">Instant E-Receipt</h4>
                                <p class="text-muted small mb-0" style="line-height: 1.5;">Receive an automated donation receipt directly to your email address.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Form Column -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                    <div class="glass-panel bg-white border shadow-lg p-4 p-md-5 rounded-4">
                        
                        <!-- Nav Tabs -->
                        <ul class="nav nav-pills nav-justified mb-4 p-1 bg-light rounded-pill border" id="donationTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active rounded-pill fw-bold" id="razorpay-tab" data-bs-toggle="tab" data-bs-target="#razorpay-panel" type="button" role="tab">
                                    <i class="fa-solid fa-credit-card me-2"></i> Online Payment (Razorpay)
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill fw-bold" id="bank-tab" data-bs-toggle="tab" data-bs-target="#bank-panel" type="button" role="tab">
                                    <i class="fa-solid fa-building-columns me-2"></i> Bank & UPI QR
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="donationTabContent">
                            
                            <!-- TAB 1: Razorpay Online Form -->
                            <div class="tab-pane fade show active" id="razorpay-panel" role="tabpanel">
                                <form id="razorpayDonationForm" onsubmit="handleRazorpayPayment(event)">
                                    
                                    <!-- Amount Selection -->
                                    <label class="form-label fw-bold text-dark mb-2">Select Donation Amount (रुपये)</label>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <button type="button" class="btn btn-outline-primary btn-amount-preset rounded-pill px-3 py-2 fw-bold active" onclick="setDonationAmount(500, this)">₹500</button>
                                        <button type="button" class="btn btn-outline-primary btn-amount-preset rounded-pill px-3 py-2 fw-bold" onclick="setDonationAmount(1000, this)">₹1,000</button>
                                        <button type="button" class="btn btn-outline-primary btn-amount-preset rounded-pill px-3 py-2 fw-bold" onclick="setDonationAmount(2500, this)">₹2,500</button>
                                        <button type="button" class="btn btn-outline-primary btn-amount-preset rounded-pill px-3 py-2 fw-bold" onclick="setDonationAmount(5000, this)">₹5,000</button>
                                        <button type="button" class="btn btn-outline-secondary rounded-pill px-3 py-2 fw-bold" onclick="enableCustomAmount(this)">Custom Amount</button>
                                    </div>

                                    <div class="input-group mb-4">
                                        <span class="input-group-text bg-light fw-bold text-primary fs-5">₹</span>
                                        <input type="number" id="donationAmount" class="form-control form-control-lg fs-5 fw-bold" value="500" min="10" required placeholder="Enter amount">
                                    </div>

                                    <!-- Donor Details -->
                                    <h5 class="fw-bold text-dark mb-3 border-bottom pb-2">Donor Information</h5>
                                    
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label small fw-bold text-muted">Full Name *</label>
                                            <input type="text" id="donorName" class="form-control" placeholder="e.g. Rahul Sharma" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label small fw-bold text-muted">Phone Number *</label>
                                            <input type="tel" id="donorPhone" class="form-control" placeholder="10-digit Mobile No." pattern="[0-9]{10}" required>
                                        </div>
                                    </div>

                                    <div class="row g-3 mb-4">
                                        <div class="col-md-6">
                                            <label class="form-label small fw-bold text-muted">Email Address *</label>
                                            <input type="email" id="donorEmail" class="form-control" placeholder="name@example.com" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label small fw-bold text-muted">PAN Number <span class="fw-normal text-muted">(Optional for 80G Tax Exemption)</span></label>
                                            <input type="text" id="donorPan" class="form-control text-uppercase" placeholder="ABCDE1234F" maxlength="10">
                                        </div>
                                    </div>

                                    <!-- Pay Button -->
                                    <button type="submit" class="btn btn-pill-accent btn-lg w-100 py-3 fw-bold shadow-lg d-flex align-items-center justify-content-center gap-2" style="font-size: 1.15rem;">
                                        <i class="fa-solid fa-shield-heart fs-4"></i> Pay Securely via Razorpay
                                    </button>

                                    <div class="text-center mt-3">
                                        <small class="text-muted"><i class="fa-solid fa-lock text-success me-1"></i> Supports UPI (GPay, PhonePe, Paytm), Debit/Credit Cards, NetBanking & Wallets</small>
                                    </div>
                                </form>
                            </div>

                            <!-- TAB 2: Direct Bank & UPI QR -->
                            <div class="tab-pane fade" id="bank-panel" role="tabpanel">
                                <div class="p-4 rounded-4 mb-4" style="background: rgba(18, 161, 80, 0.03); border: 1px solid rgba(18, 161, 80, 0.08);">
                                    <h5 class="fw-bold text-primary mb-4 d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-building-columns"></i> State Bank of India
                                    </h5>
                                    <div class="d-flex flex-column gap-3" style="font-size: 0.95rem;">
                                        <div class="d-flex justify-content-between border-bottom pb-2">
                                            <span class="text-muted">Account Name</span>
                                            <strong class="text-dark">Bhavika Welfare Foundation</strong>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom pb-2">
                                            <span class="text-muted">Bank Name</span>
                                            <strong class="text-dark">State Bank of India</strong>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom pb-2">
                                            <span class="text-muted">Account Number</span>
                                            <strong class="text-dark" style="letter-spacing: 1px;">45678901234</strong>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom pb-2">
                                            <span class="text-muted">IFSC Code</span>
                                            <strong class="text-dark" style="letter-spacing: 1px;">SBIN0001234</strong>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted">Account Type</span>
                                            <strong class="text-dark">Current Account</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-4 rounded-4" style="background: rgba(255, 90, 95, 0.03); border: 1px solid rgba(255, 90, 95, 0.08);">
                                    <h5 class="fw-bold text-accent mb-3 d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-qrcode"></i> UPI Scan & Pay
                                    </h5>
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <p class="text-muted small mb-3">Scan this QR code using GPay, PhonePe, Paytm, or BHIM.</p>
                                            <div class="d-flex align-items-center gap-2 border p-2 rounded bg-white">
                                                <span class="text-muted small">UPI ID:</span>
                                                <strong class="text-dark small" style="user-select: all;">bhavikawelfarefoundation@upi</strong>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-center mt-3 mt-md-0">
                                            <div class="d-inline-block p-2 bg-white rounded shadow-sm border">
                                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=upi://pay?pa=bhavikawelfarefoundation@upi%26pn=Bhavika%20Welfare%20Foundation%26cu=INR" alt="UPI QR Code" style="width: 130px; height: 130px;" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Payment Success Modal -->
    <div class="modal fade" id="paymentSuccessModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow-lg">
                <div class="modal-header bg-success text-white border-0 py-4 rounded-top-4">
                    <div class="text-center w-100">
                        <div class="bg-white text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-2" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-circle-check fs-1"></i>
                        </div>
                        <h4 class="modal-title fw-bold mb-0 text-white">Donation Successful!</h4>
                        <p class="small mb-0 text-white-50">Thank you for your generous support!</p>
                    </div>
                </div>
                <div class="modal-body p-4 text-center">
                    <p class="text-muted mb-4">Your payment has been successfully processed through Razorpay. A formal 80G tax exemption receipt has been sent to your email.</p>
                    
                    <div class="bg-light p-3 rounded-3 text-start small mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Payment ID:</span>
                            <strong id="receiptPaymentId" class="text-dark">pay_N9Xk82hLp</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Donor Name:</span>
                            <strong id="receiptName" class="text-dark">Donor</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Amount Paid:</span>
                            <strong id="receiptAmount" class="text-success fs-6">₹500</strong>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Date & Time:</span>
                            <strong id="receiptDate" class="text-dark">Just Now</strong>
                        </div>
                    </div>

                    <button type="button" class="btn btn-pill-primary px-5 py-2 fw-bold" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Razorpay Checkout Script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        function setDonationAmount(val, btn) {
            document.getElementById('donationAmount').value = val;
            document.querySelectorAll('.btn-amount-preset').forEach(b => b.classList.remove('active', 'btn-primary'));
            document.querySelectorAll('.btn-amount-preset').forEach(b => b.classList.add('btn-outline-primary'));
            btn.classList.remove('btn-outline-primary');
            btn.classList.add('active', 'btn-primary');
        }

        function enableCustomAmount(btn) {
            const input = document.getElementById('donationAmount');
            input.focus();
            input.select();
            document.querySelectorAll('.btn-amount-preset').forEach(b => b.classList.remove('active', 'btn-primary'));
            document.querySelectorAll('.btn-amount-preset').forEach(b => b.classList.add('btn-outline-primary'));
        }

        async function handleRazorpayPayment(e) {
            e.preventDefault();

            const amount = document.getElementById('donationAmount').value;
            const name = document.getElementById('donorName').value;
            const email = document.getElementById('donorEmail').value;
            const phone = document.getElementById('donorPhone').value;
            const pan = document.getElementById('donorPan').value;
            const submitBtn = e.target.querySelector('button[type="submit"]');

            if (!amount || amount < 10) {
                alert('Please enter a valid donation amount (minimum ₹10).');
                return;
            }

            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Initializing Secure Gateway...';

            try {
                // Step 1: Secure Order Creation via Backend Server API
                const orderResponse = await fetch('create-order.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ amount, name, email, phone, pan })
                });

                const orderData = await orderResponse.json();

                if (!orderData.success) {
                    alert('Error creating order: ' + (orderData.message || 'Server error'));
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                    return;
                }

                // Step 2: Initialize Razorpay Checkout Modal
                const options = {
                    "key": orderData.key_id,
                    "amount": orderData.amount,
                    "currency": orderData.currency || "INR",
                    "name": "Bhavika Welfare Foundation",
                    "description": "Donation for Social & Community Welfare",
                    "image": "images/logo.jpg",
                    "order_id": orderData.order_id && !orderData.is_fallback ? orderData.order_id : undefined,
                    "handler": async function (response) {
                        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Verifying Payment Signature...';
                        
                        // Step 3: Secure Payment Signature Verification via Server API
                        try {
                            const verifyResponse = await fetch('verify-payment.php', {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json' },
                                body: JSON.stringify({
                                    razorpay_payment_id: response.razorpay_payment_id,
                                    razorpay_order_id: response.razorpay_order_id,
                                    razorpay_signature: response.razorpay_signature,
                                    donor_name: name,
                                    amount: amount
                                })
                            });

                            const verifyData = await verifyResponse.json();

                            if (verifyData.success) {
                                document.getElementById('receiptPaymentId').innerText = verifyData.payment_id || response.razorpay_payment_id;
                                document.getElementById('receiptName').innerText = name;
                                document.getElementById('receiptAmount').innerText = '₹' + parseInt(amount).toLocaleString('en-IN');
                                document.getElementById('receiptDate').innerText = verifyData.date || new Date().toLocaleString('en-IN');
                                
                                const successModal = new bootstrap.Modal(document.getElementById('paymentSuccessModal'));
                                successModal.show();

                                document.getElementById('razorpayDonationForm').reset();
                                document.getElementById('donationAmount').value = 500;
                            } else {
                                alert('Payment verification failed: ' + verifyData.message);
                            }
                        } catch (err) {
                            alert('Verification network error. Please contact us with your payment ID.');
                        } finally {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalBtnText;
                        }
                    },
                    "prefill": {
                        "name": name,
                        "email": email,
                        "contact": phone
                    },
                    "notes": {
                        "pan": pan || "N/A",
                        "organization": "Bhavika Welfare Foundation"
                    },
                    "theme": {
                        "color": "#00a859"
                    },
                    "modal": {
                        "ondismiss": function() {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalBtnText;
                        }
                    }
                };

                const rzp = new Razorpay(options);
                rzp.on('payment.failed', function (response){
                    alert("Payment Failed: " + (response.error.description || "Transaction cancelled"));
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
                rzp.open();

            } catch (error) {
                alert('Could not connect to payment server. Please try again.');
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        }
    </script>

<?php include 'includes/footer.php'; ?>

