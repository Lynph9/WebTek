<?php
// Initialize session
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // If not logged in, redirect to login page
    header("Location: login.html");
    exit;
}

// Extract student number from email for welcome message
$email = $_SESSION['user_email'];
preg_match('/^(b[0-9]+)@/', $email, $matches);
$student_number = $matches[1];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoşgeldiniz - Kişisel Web Sitesi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">Kişisel Web Sitesi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Hakkında</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cv.html">Eğitim Bilgileri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgi-alanlari.html">İlgi Alanları</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Giriş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h1 class="h3 mb-0">Başarılı Giriş</h1>
                    </div>
                    <div class="card-body text-center">
                        <div class="alert alert-success mb-4">
                            <h2 class="h4">Hoşgeldiniz <?php echo htmlspecialchars($student_number); ?></h2>
                            <p>Başarıyla giriş yaptınız.</p>
                        </div>
                        <p>Artık sitenin tüm özelliklerine erişebilirsiniz.</p>
                        <div class="mt-4">
                            <a href="index.html" class="btn btn-primary">Ana Sayfaya Dön</a>
                            <a href="logout.php" class="btn btn-outline-danger ms-2">Çıkış Yap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 Kişisel Web Sitesi. Tüm hakları saklıdır.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 