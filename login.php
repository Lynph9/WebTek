<?php
// PHP session başlat
session_start();

// Hata raporlamayı aç (development için)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Doğru kullanıcı bilgileri - gerçek uygulamada veritabanından gelir
$valid_credentials = [
    'b241210385@sakarya.edu.tr' => 'b241210385'
];

// POST isteği kontrolü
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Gelen verileri al ve temizle
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    // Boş alan kontrolü
    if (empty($email) || empty($password)) {
        // Boş alanlar varsa login sayfasına geri yönlendir
        header('Location: login.html?error=empty');
        exit();
    }
    
    // E-posta format kontrolü
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Geçersiz e-posta formatı
        header('Location: login.html?error=email');
        exit();
    }
    
    // Sakarya.edu.tr domain kontrolü
    if (!str_ends_with($email, '@sakarya.edu.tr')) {
        // Sakarya e-postası değil
        header('Location: login.html?error=email');
        exit();
    }
    
    // Kullanıcı adı ve şifre kontrolü
    if (isset($valid_credentials[$email]) && $valid_credentials[$email] === $password) {
        // Başarılı giriş
        $_SESSION['user_email'] = $email;
        $_SESSION['user_id'] = $password; // Öğrenci numarası
        $_SESSION['login_time'] = date('Y-m-d H:i:s');
        
        // Öğrenci numarasını al (şifre aslında öğrenci numarası)
        $student_number = $password;
        
        // Başarılı giriş sayfasını göster
        ?>
        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Başarılı Giriş - Kişisel Web Sitesi</title>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <!-- Custom CSS -->
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <i class="fas fa-code me-2"></i>Kişisel Portfolyo
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">
                                    <i class="fas fa-home me-1"></i>Hakkında
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cv.html">
                                    <i class="fas fa-graduation-cap me-1"></i>Eğitim
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sehrim.html">
                                    <i class="fas fa-map-marker-alt me-1"></i>Şehrim
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mirasimiz.html">
                                    <i class="fas fa-landmark me-1"></i>Mirasımız
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ilgi-alanlari.html">
                                    <i class="fas fa-heart me-1"></i>İlgi Alanları
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="login.html">
                                    <i class="fas fa-sign-in-alt me-1"></i>Giriş
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="iletisim.html">
                                    <i class="fas fa-envelope me-1"></i>İletişim
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-lg border-success">
                            <div class="card-header bg-success text-white text-center">
                                <h1 class="h3 mb-0">
                                    <i class="fas fa-check-circle me-2"></i>Giriş Başarılı!
                                </h1>
                            </div>
                            <div class="card-body text-center">
                                <div class="mb-4">
                                    <i class="fas fa-user-check text-success" style="font-size: 4rem;"></i>
                                </div>
                                
                                <h2 class="text-success mb-3">Hoşgeldiniz <?php echo htmlspecialchars($student_number); ?>!</h2>
                                
                                <div class="alert alert-success" role="alert">
                                    <h5 class="alert-heading">
                                        <i class="fas fa-info-circle me-2"></i>Giriş Bilgileri
                                    </h5>
                                    <hr>
                                    <p class="mb-2"><strong>E-posta:</strong> <?php echo htmlspecialchars($email); ?></p>
                                    <p class="mb-2"><strong>Öğrenci No:</strong> <?php echo htmlspecialchars($student_number); ?></p>
                                    <p class="mb-0"><strong>Giriş Zamanı:</strong> <?php echo $_SESSION['login_time']; ?></p>
                                </div>
                                
                                <div class="d-grid gap-2 d-md-flex justify-content-center">
                                    <a href="index.html" class="btn btn-primary btn-lg me-md-2">
                                        <i class="fas fa-home me-2"></i>Ana Sayfaya Git
                                    </a>
                                    <a href="cv.html" class="btn btn-outline-primary btn-lg">
                                        <i class="fas fa-user me-2"></i>Profilimi Görüntüle
                                    </a>
                                </div>
                                
                                <hr class="my-4">
                                
                                <div class="row text-start">
                                    <div class="col-md-6">
                                        <h6 class="text-primary">
                                            <i class="fas fa-globe me-2"></i>Site Bölümleri
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li><a href="index.html" class="text-decoration-none">📍 Hakkımda</a></li>
                                            <li><a href="cv.html" class="text-decoration-none">🎓 Eğitim Bilgileri</a></li>
                                            <li><a href="sehrim.html" class="text-decoration-none">🏙️ Şehrim (Eskişehir)</a></li>
                                            <li><a href="mirasimiz.html" class="text-decoration-none">🏛️ Kültürel Mirasımız</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-primary">
                                            <i class="fas fa-heart me-2"></i>İlgi Alanları & İletişim
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li><a href="ilgi-alanlari.html" class="text-decoration-none">🎮 İlgi Alanlarım</a></li>
                                            <li><a href="iletisim.html" class="text-decoration-none">📧 İletişim Formu</a></li>
                                            <li><a href="logout.php" class="text-decoration-none text-danger">🚪 Çıkış Yap</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light text-center">
                                <small class="text-muted">
                                    <i class="fas fa-shield-alt me-1"></i>
                                    Güvenli giriş gerçekleştirildi - Session ID: <?php echo substr(session_id(), 0, 8); ?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="text-white py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <h5>Kişisel Portfolyo</h5>
                            <p class="small">Web Teknolojileri dersi kapsamında hazırlanmış kişisel web sitesi projesi.</p>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <h5>Hızlı Bağlantılar</h5>
                            <div class="footer-links">
                                <a href="index.html">Hakkında</a>
                                <a href="cv.html">Eğitim</a>
                                <a href="sehrim.html">Şehrim</a>
                                <a href="mirasimiz.html">Mirasımız</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5>İletişim</h5>
                            <p class="small">
                                <i class="fas fa-envelope me-2"></i><a href="mailto:erkinerdogan.dev@gmail.com" class="text-white text-decoration-none">erkinerdogan.dev@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <hr class="my-3 bg-light opacity-25">
                    <div class="text-center">
                        <p class="small mb-0">&copy; 2024 Kişisel Web Sitesi. Tüm hakları saklıdır.</p>
                    </div>
                </div>
            </footer>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
        <?php
    } else {
        // Hatalı giriş
        header('Location: login.html?error=login');
        exit();
    }
} else {
    // GET istekleri için login sayfasına yönlendir
    header('Location: login.html');
    exit();
}
?> 