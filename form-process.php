<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : 'Belirtilmedi';
    $subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
    $gender = isset($_POST['gender']) ? htmlspecialchars(trim($_POST['gender'])) : 'Belirtilmedi';
    $interests = isset($_POST['interests']) ? $_POST['interests'] : [];
    $agreement = isset($_POST['agreement']) ? true : false;
    
    // Format interests for display
    $interestsFormatted = !empty($interests) ? implode(', ', array_map('htmlspecialchars', $interests)) : 'Belirtilmedi';
    
    // Validate required fields
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Ad Soyad alanı zorunludur.";
    }
    
    if (empty($email)) {
        $errors[] = "E-posta alanı zorunludur.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Geçerli bir e-posta adresi girmelisiniz.";
    }
    
    if (empty($subject)) {
        $errors[] = "Konu seçimi zorunludur.";
    }
    
    if (empty($message)) {
        $errors[] = "Mesaj alanı zorunludur.";
    }
    
    if (!$agreement) {
        $errors[] = "Kullanım koşullarını kabul etmelisiniz.";
    }
    
    // If validation fails, redirect back with error
    if (!empty($errors)) {
        // In a real application, you would use sessions to pass errors back to the form
        // For simplicity, we'll just show errors here
        echo "<!DOCTYPE html>
              <html lang='tr'>
              <head>
                  <meta charset='UTF-8'>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <title>Form Hatası - Kişisel Web Sitesi</title>
                  <!-- Bootstrap CSS -->
                  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                  <!-- Custom CSS -->
                  <link rel='stylesheet' href='css/style.css'>
              </head>
              <body>
                  <div class='container my-5'>
                      <div class='row justify-content-center'>
                          <div class='col-md-8'>
                              <div class='card'>
                                  <div class='card-header bg-danger text-white'>
                                      <h1 class='h3 mb-0'>Form Hatası</h1>
                                  </div>
                                  <div class='card-body'>
                                      <div class='alert alert-danger'>
                                          <strong>Lütfen aşağıdaki hataları düzeltin:</strong>
                                          <ul>";
        
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        
        echo "                </ul>
                                      </div>
                                      <div class='text-center mt-4'>
                                          <a href='javascript:history.back()' class='btn btn-primary'>Geri Dön</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Bootstrap JS -->
                  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
              </body>
              </html>";
        exit;
    }
    
    // If validation passes, display a success message with form data
    echo "<!DOCTYPE html>
          <html lang='tr'>
          <head>
              <meta charset='UTF-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <title>Form Başarılı - Kişisel Web Sitesi</title>
              <!-- Bootstrap CSS -->
              <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
              <!-- Custom CSS -->
              <link rel='stylesheet' href='css/style.css'>
          </head>
          <body>
              <div class='container my-5'>
                  <div class='row justify-content-center'>
                      <div class='col-md-8'>
                          <div class='card'>
                              <div class='card-header bg-success text-white'>
                                  <h1 class='h3 mb-0'>Mesajınız Alındı</h1>
                              </div>
                              <div class='card-body'>
                                  <div class='alert alert-success mb-4'>
                                      <p>Sayın <strong>$name</strong>, mesajınız başarıyla alındı. En kısa sürede sizinle iletişime geçeceğiz.</p>
                                  </div>
                                  
                                  <h4>Gönderilen Bilgiler:</h4>
                                  <table class='table table-bordered'>
                                      <tr>
                                          <th>Ad Soyad:</th>
                                          <td>$name</td>
                                      </tr>
                                      <tr>
                                          <th>E-posta:</th>
                                          <td>$email</td>
                                      </tr>
                                      <tr>
                                          <th>Telefon:</th>
                                          <td>$phone</td>
                                      </tr>
                                      <tr>
                                          <th>Konu:</th>
                                          <td>$subject</td>
                                      </tr>
                                      <tr>
                                          <th>Mesaj:</th>
                                          <td>$message</td>
                                      </tr>
                                      <tr>
                                          <th>Cinsiyet:</th>
                                          <td>$gender</td>
                                      </tr>
                                      <tr>
                                          <th>İlgi Alanları:</th>
                                          <td>$interestsFormatted</td>
                                      </tr>
                                  </table>
                                  
                                  <div class='text-center mt-4'>
                                      <a href='index.html' class='btn btn-primary'>Ana Sayfaya Dön</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Bootstrap JS -->
              <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
          </body>
          </html>";
    exit;
} else {
    // If someone tries to access this page directly, redirect to the contact form
    header("Location: iletisim.html");
    exit;
}
?> 