<footer class="py-4 border-top"
        style="background: linear-gradient(to right, #ffffff, #e8f3ff); width:100%; overflow:hidden; position:relative; font-size:14px;">

    <!-- WAVE BACKGROUND -->
    <img src="{{ asset('images/hias.png') }}" alt="Wave"
         style="
            position:absolute;
            top:0;
            left:0;
            height:100%;
            width:auto;
            z-index:1;
         ">

    <div style="position:relative; z-index:2; padding-left:150px; padding-right:40px;">

        <div class="row g-4">

            <!-- BRAND + INFO (kiri) -->
            <div class="col-md-4">
                <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset('images/logoGe.png') }}" alt="Logo" style="height:45px;">
                    <h3 class="ms-2 mb-0 fw-bold text-primary" style="font-size:22px;">- EXIS</h3>
                </div>

                <h5 class="fw-bold text-dark" style="margin-top:-5px; font-size:16px;">SMKN 2 SUMEDANG</h5>

                <p class="mt-2 mb-1">
                    Jl. Prabu Gajah Agung No. 12 <br>
                    Kabupaten Sumedang, Jawa Barat 45111
                </p>

                <p class="mb-1"><i class="bi bi-telephone-fill text-danger me-2"></i> (0261) 123456</p>
                <p class="mb-3"><i class="bi bi-envelope-fill text-primary me-2"></i> info@smkn2sumedang.sch.id</p>
            </div>

            <!-- MENU (tengah, simetris) -->
            <div class="col-md-4">
                <h6 class="fw-bold mb-3">Menu</h6>
                <ul class="list-unstyled">
                    <li><a href="/" class="footer-link">• Beranda</a></li>
                    <li><a href="/ekskul" class="footer-link">• Ekstrakurikuler</a></li>
                    <li><a href="/kontak" class="footer-link">• Kontak</a></li>
                    <li><a href="/tambah-ekskul" class="footer-link">• Tambah Ekskul</a></li>
                    <li><a href="/terdaftar" class="footer-link">• Ekskul Terdaftar</a></li>
                    <li><a href="/notifikasi" class="footer-link">• Notifikasi</a></li>
                    <li><a href="/logout" class="footer-link text-danger">• Logout</a></li>
                </ul>
            </div>

            <!-- CONTACT + SOCIAL (kanan) -->
            <div class="col-md-3">
                <h6 class="fw-bold mb-3">Contact Us</h6>
                <p class="mb-1">Call :</p>
                <p class="fw-semibold" style="font-size:13px;">+0123 456 789 00</p>

                <p class="mb-1">Email :</p>
                <p class="fw-semibold text-primary" style="font-size:13px;">user@example.com</p>

                <h6 class="fw-bold mt-3 mb-2">Follow Us</h6>

                <div class="d-flex gap-2">
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                </div>
            </div>

        </div>

        <!-- BOTTOM BAR -->
        <div class="mt-4 pt-3 border-top d-flex justify-content-between flex-wrap text-secondary small">

            <div class="d-flex gap-3">
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Our History</a>
                <a href="#" class="footer-link">What We Do</a>
            </div>

            <div>
                © 2025 <strong>G-EXIS</strong> — All rights reserved.
            </div>

        </div>

    </div>
</footer>

<style>
/* Social icon */
.social-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: 2px solid #111;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #111;
    font-size: 16px;
    transition: 0.3s;
}
.social-icon:hover {
    background: #ff3b3b;
    color: white;
    border-color: #ff3b3b;
}

/* Footer small links */
.footer-link {
    color: #666;
    text-decoration: none;
}
.footer-link:hover {
    color: #000;
}
</style>
