# 2024-2025 BAHAR DÖNEMİ WEB TEKNOLOJİLERİ DERSİ PROJE ÖDEVİ

## Proje Amacı
- Derste öğrenilen bilgiler (HTML, CSS, Javascript vb.) kullanılarak bir web sitesi geliştirilmesi.

## Proje Detayları

-   **Genel Kapsam**: Öğrenciler **bireysel** olarak kendilerini ve memleketlerini tanıtan kişisel bir web sitesi uygulaması geliştireceklerdir.

-   **Tasarım ve Teknoloji**:
    -   Site tasarımı olarak **Bootstrap** içeren **responsive** (çözünürlüğe göre değişen tasarım) bir yapı kullanılmalıdır.
    -   **Hazır tema kullanılamaz**.

-   **Sayfalar ve İçerikleri**:

    1.  **Hakkında Sayfası**:
        -   Giriş sayfası niteliğinde olmalı.
        -   Sayfa sahibinin kendini tanıtan bilgiler (Hobiler, Etkinlikler vb.), sevdiği spor, etkinlik vb. ait resimler, linkler vb. içermelidir.

    2.  **Eğitim Bilgileri (CV) Sayfası**:
        -   CV niteliğinde olmalı.
        -   **Semantic tagların** kullanıldığı bir özgeçmiş sayfası olmalıdır.

    3.  **Şehrim Sayfası**:
        -   Memleketinize ya da sevdiğiniz şehre ait bilgiler yer almalıdır (Şehrin nüfusu, gezilecek yerler vb.).
        -   Sayfanın başında ya da sonunda en az 4 resimden oluşan bir **slider** yer almalıdır.
        -   Slider'da yer alan resimlere tıklandığında ilgili resimlere ait içeriklere (ayrıntılı olmadan site içerisinde yer almalı) link olmalıdır.

    4.  **Mirasımız / Takımımız Sayfası**:
        -   Şehre ait kültürel miras niteliğindeki önemli bir eser (Mirasımız) VEYA
        -   Şehrin takımı (Futbol, Basketbol vb. branş fark etmez) (Takımımız) HTML elemanları kullanılarak tanıtılmalıdır.
        -   Bu içerik linkli ayrı bir sayfa şeklinde olabilir.

    5.  **İlgi Alanlarım Sayfası**:
        -   İlgi alanlarınız çerçevesinde (film, spor vb.) internetten bulduğunuz ücretsiz bir **API** servisinden veri alınıp gösterilmelidir.
        -   (Döviz API'leri geçerli değildir).

    6.  **Login Sayfası**:
        -   Öğrenci numaranıza ait kullanıcı adı (örneğin `b1812100001@sakarya.edu.tr`) ve şifre (şifre “`b2412100001`” gibi herkesin domain içermeyen numarası olmalı) alanları bulunmalıdır.
        -   Form bilgileri bir **PHP** sayfasına `POST` edilmelidir.
        -   PHP sayfasında, gönderilen kullanıcı bilgileri, tanımlanan değişkenler ile kontrol edilmelidir.
        -   **Başarılı login**: "Hoşgeldiniz `b2412100001`" gibi bir mesajla login işleminin başarılı olduğu bildirilmelidir.
        -   **Başarısız login**: Kullanıcı login sayfasına geri yönlendirilmelidir.
        -   **Login sayfası validasyonları**:
            -   Kullanıcı adı ve şifre alanının boş geçilmemesi kontrol edilmelidir.
            -   Kullanıcı adının mail adresi formatında olup olmadığı kontrol edilmelidir.

    7.  **İletişim Sayfası**:
        -   Form elemanları içeren bir sayfa olmalıdır.
        -   Tüm form elemanlarını içermeli, elemanın özelliğine göre seçim ya da veri girişi yapılacak şekilde gönderilmesi sağlanmalıdır.
        -   **Form Validasyonu**:
            -   Gerekli kontrol işlemleri (boş mu, e-mail formatında mı, telefon için sadece rakamlar mı girilmiş vb.) **Javascript** VE popüler bir **JS Framework** (Vue.js, Angular.js, Express.js vb.) kullanılarak **iki farklı butonda ayrı ayrı** denetlenmelidir.
            -   HTML elemanlarına ait dahili denetimler kabul edilmeyecektir.
        -   Form, "Temizle" ve "Gönder" butonları içermelidir.
        -   Gönderilen form elemanlarına ait tüm bilgiler **başka bir sayfada görüntülenmelidir**.

-   **Kodlama Standartları**:
    -   Projenin içindeki stiller (renk, yazı tipi, vs.) **ayrı bir stil dosyasında** (CSS dosyası) tutulmalıdır.

-   **Versiyon Kontrolü ve Hosting**:
    -   **GitHub**:
        -   Üzerinde bir proje oluşturulup (**proje herkese açık olmalı**).
        -   İlk etapta proje hakkında kısa bir bilgi dökümanı (README.md) GitHub'a yüklenmelidir.
        -   Proje ilerledikçe, gelişmeler GitHub'a yüklenmeye devam edilmelidir.
        -   Proje teslim edilmeden GitHub'da farklı günlerde **minimum 10 commit olmalıdır**. Daha az commit olması durumunda bu bölümden kesinlikle puan verilmeyecektir.
        -   GitHub üzerinde bir projenin erkenden oluşturulması önemlidir.
    -   **Hosting**:
        -   Proje, hosting hizmeti veren bir sitede yer almalıdır.
        -   İnternette pek çok ücretsiz (tercihinize göre ücretli de olabilir) host hizmeti veren site mevcuttur. (Örneğin `https://tr.000webhost.com/`, `https://profreehost.com/`, `https://www.infinityfree.net/` ya da başka bir site).
       

