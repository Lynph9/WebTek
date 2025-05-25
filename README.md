# Web Teknolojileri Dersi Projesi

Bu proje, 2024-2025 Bahar Dönemi Web Teknolojileri dersi kapsamında geliştirilmiştir.

## Proje Amacı
Kendimi ve memleketimi tanıtan kişisel bir web sitesi geliştirmek.

## Kullanılan Teknolojiler
- HTML5
- CSS3
- JavaScript
- Bootstrap 5
- PHP
- JSON ve Harici API
- Vue.js

## Proje Geliştirme Süreci

### **Başlangıç Aşaması (Gün 1-3)**

**Gün 1: Temel Yapı Kurulumu**
- Bootstrap 5 framework'ü ile responsive navbar tasarımı
- Ana sayfa (index.html) oluşturuldu - "Hakkında" sayfası olarak düzenlendi
- Kişisel bilgiler, hobiler ve öne çıkanlar bölümleri eklendi
- Footer ve temel CSS stillerinin hazırlanması

**Gün 2: İçerik Sayfalarının Geliştirilmesi**
- CV sayfası (cv.html) - eğitim bilgileri, kişisel gelişim ve hedefler
- Şehrim sayfası (sehrim.html) - Eskişehir hakkında detaylı bilgiler
- Mirasımız sayfası (mirasimiz.html) - Eskişehir Odunpazarı kültürel mirası
- Bootstrap carousel ve card componentleri kullanıldı

**Gün 3: Form Geliştirme**
- Kapsamlı iletişim formu (iletisim.html) tasarlandı
- Çeşitli form elementleri: input, select, radio, checkbox, range, file upload
- JavaScript ve Vue.js ile çift doğrulama sistemi
- Bootstrap validation stilleri entegrasyonu

### **İlgi Alanları ve API Entegrasyonu (Gün 3-7)**

**Gün 4: API Keşifleri Başlangıcı**
- İlgi alanları sayfası (ilgi-alanlari.html) oluşturuldu
- Dog API entegrasyonu - sevimli köpek fotoğrafları
- NASA APOD API - günün astronomi fotoğrafı
- Dinamik içerik yükleme sistemleri kuruldu

**Gün 5: Oyun ve Eğlence API'leri**
- Free Games API - ücretsiz oyun keşifleri
- TheCocktailDB API - içecek tarifleri ve malzemeleri
- Kartlar halinde responsive tasarım
- Loading animasyonları ve hata yönetimi

**Gün 6: Müzik ve Spor API'leri**
- Last.fm API - müzik keşifleri ve sanatçı bilgileri
- Football API - canlı futbol maç sonuçları
- API çağrıları için async/await yapısı
- Kullanıcı dostu hata mesajları

**Gün 7: API Optimizasyonu**
- Tüm API çağrılarının performans optimizasyonu
- Rate limiting ve caching stratejileri
- Responsive tasarım iyileştirmeleri
- Cross-origin sorunlarının çözümü

### **Son Rötuşlar ve Güvenlik (Gün 7-10)**

**Gün 8: Login Sistemi Geliştirme**
- PHP tabanlı login sistemi (login.php, logout.php)
- Session yönetimi ve güvenlik kontrolleri
- Sakarya Üniversitesi e-posta doğrulaması (@sakarya.edu.tr)
- Öğrenci numarası ile şifre sistemi

**Gün 9: Hosting ve Güvenlik İyileştirmeleri**
- InfinityFree hosting platformuna deployment
- Hosting uyumlu PHP versiyonları (login_infinity.php, logout_infinity.php)
- Güvenlik açıklarının giderilmesi (error_reporting, session handling)
- Kişisel bilgilerin gizlenmesi (telefon numarası temizliği)

**Gün 10: Final Düzenlemeler**
- Form placeholder'larında kişisel bilgi güvenliği
- Gerçek öğrenci numarası yerine örnek numara kullanımı
- Görsel varlıkların (Photos klasörü) yerel entegrasyonu
- .git klasörü gibi hassas dosyaların hosting'den çıkarılması
- README dokümantasyonu ve proje teslimi

## Hosting Bilgileri
Proje InfinityFree ücretsiz hosting servisi üzerinde yayınlanmıştır. Hosting sınırlamaları nedeniyle PHP kodları optimize edilmiş ve basitleştirilmiştir.

## Sayfalar ve Özellikler
- **Hakkında (index.html)**: Kişisel tanıtım ve hobiler
- **Eğitim Bilgileri (cv.html)**: Akademik geçmiş ve hedefler
- **Şehrim (sehrim.html)**: Eskişehir tanıtımı
- **Mirasımız (mirasimiz.html)**: Kültürel miras (yerel fotoğraflarla)
- **İlgi Alanları (ilgi-alanlari.html)**: 6 farklı API entegrasyonu
- **Giriş (login.html)**: PHP tabanlı authentication sistemi
- **İletişim (iletisim.html)**: Kapsamlı form ve çift doğrulama

## Teknik Özellikler
- Tam responsive tasarım (mobil uyumlu)
- Progressive Web App özellikleri
- API rate limiting ve error handling
- Form validation (JavaScript + Vue.js)
- Session management ve güvenlik
- SEO optimizasyonu
- Accessibility standartları

## Güvenlik Önlemleri
- Kişisel bilgilerin korunması
- XSS ve CSRF koruması
- Input sanitization
- Secure session handling
- Environment variables kullanımı 
