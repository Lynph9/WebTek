# WEB TEKNOLOJİLERİ DERSİ PROJESİ RAPORU

**Öğrenci:** Erkin Erdoğan  
**Öğrenci No:** b241210385  
**Ders:** Web Teknolojileri  
**Akademik Yıl:** 2024-2025 Bahar Dönemi  
**Tarih:** Aralık 2024

---

## 1. GİRİŞ

Bu rapor, Web Teknolojileri dersi kapsamında geliştirilen kişisel web sitesi projesinin detaylı bir analizini sunmaktadır. Proje, modern web teknolojilerini kullanarak kendimi ve memleketimi tanıtan kapsamlı bir web sitesi oluşturmayı amaçlamıştır. Geliştirme sürecinde HTML5, CSS3, JavaScript, Bootstrap 5, PHP ve çeşitli harici API'ler kullanılmıştır. Proje, responsive tasarım prensipleri gözetilerek geliştirilmiş ve InfinityFree hosting platformunda yayınlanmıştır.

## 2. PROJE KAPSAMI VE AMAÇLARI

Projenin temel amacı, web teknolojilerinin pratik uygulamasını göstererek hem kişisel hem de akademik gelişime katkı sağlamaktır. Site, ziyaretçilere kişisel bilgilerimi, eğitim geçmişimi, memleketim Eskişehir'i ve ilgi alanlarımı dinamik bir şekilde sunar. Ayrıca, kullanıcı etkileşimi için login sistemi ve kapsamlı bir iletişim formu içermektedir.

## 3. SAYFA ANALIZLERI

### 3.1 Ana Sayfa (index.html) - Hakkında
Ana sayfa, sitenin giriş kapısı olarak tasarlanmış ve "Hakkında" sayfası işlevi görmektedir. Bootstrap hero section ile etkileyici bir karşılama sunar ve kişisel tanıtımımı içerir. Sayfada, Sakarya Üniversitesi Bilgisayar Mühendisliği öğrencisi olduğum, oyun geliştirme tutkum ve sporcu geçmişim hakkında bilgiler yer almaktadır. Card komponentleri kullanılarak hobiler ve öne çıkan özellikler düzenli bir şekilde sunulmuş, sosyal medya bağlantıları da eklenmiştir.

### 3.2 Eğitim Bilgileri Sayfası (cv.html)
CV sayfası, akademik geçmişimi ve kişisel gelişim hedeflerimi detaylı olarak sunar. Bootstrap timeline komponenti kullanılarak eğitim sürecim kronolojik bir düzende gösterilmiştir. Sayfada lise dönemi, üniversite yaşamı ve gelecek planlarım başlıkları altında organize edilmiş içerik bulunur. Profesyonel bir CV formatında hazırlanan bu sayfa, potansiyel işverenler veya işbirliği fırsatları için önemli bir referans kaynağı işlevi görür.

### 3.3 Şehrim Sayfası (sehrim.html)
Eskişehir'i tanıtan bu sayfa, memleketimin tarihi, kültürel ve sosyal özelliklerini kapsamlı bir şekilde ele alır. Bootstrap grid sistemi kullanılarak düzenlenmiş içerik, şehrin üniversite hayatı, tarihi mekanları, yemek kültürü ve modern yaşam alanlarını detaylandırır. Görsel çekiciliği artırmak için responsive image galeri ve interaktif harita entegrasyonu eklenmiştir. Bu sayfa, ziyaretçilere Eskişehir'in çok yönlü yapısını tanıtma amacı taşır.

### 3.4 Mirasımız Sayfası (mirasimiz.html)
Eskişehir Odunpazarı'nın kültürel mirasını sergileyen bu sayfa, yerel fotoğraflar ve detaylı açıklamalarla zenginleştirilmiştir. Bootstrap carousel komponenti kullanılarak interaktif bir fotoğraf galerisi oluşturulmuş, tarihi evler, el sanatları ve çağdaş cam sanatları müzesi gibi önemli kültürel öğeler sunulmuştur. Photos klasöründeki yerel görseller kullanılarak otantik bir deneyim sağlanmış, UNESCO Dünya Mirası adayı olan bölgenin önemi vurgulanmıştır.

### 3.5 İlgi Alanları Sayfası (ilgi-alanlari.html)
Bu sayfa, projenin en dinamik ve teknik açıdan en zorlu bölümünü oluşturur. Altı farklı harici API entegrasyonu ile gerçek zamanlı içerik sunulur: Dog API ile sevimli köpek fotoğrafları, NASA APOD ile astronomi görselleri, Free Games API ile ücretsiz oyun keşifleri, TheCocktailDB ile içecek tarifleri, Last.fm ile müzik keşifleri ve Football API ile canlı spor sonuçları. Her API için ayrı loading animasyonları, hata yönetimi ve kullanıcı dostu arayüzler geliştirilmiştir. Async/await yapısı kullanılarak performans optimize edilmiştir.

### 3.6 Giriş Sayfası (login.html)
PHP tabanlı authentication sistemi ile güvenli kullanıcı girişi sağlayan bu sayfa, Sakarya Üniversitesi öğrencileri için özel olarak tasarlanmıştır. Sadece @sakarya.edu.tr uzantılı e-posta adresleri kabul edilir ve şifre olarak öğrenci numarası kullanılır. Session yönetimi ile güvenli oturum kontrolü sağlanır. InfinityFree hosting sınırlamaları nedeniyle optimize edilmiş PHP versiyonları (login_infinity.php) geliştirilmiştir. Client-side ve server-side doğrulama mekanizmaları bir arada kullanılarak güvenlik artırılmıştır.

### 3.7 İletişim Sayfası (iletisim.html)
Kapsamlı bir iletişim formu ve kişisel iletişim bilgilerini içeren bu sayfa, ziyaretçilerle etkileşim kurmak için tasarlanmıştır. Form, çeşitli input türlerini (text, email, tel, select, radio, checkbox, range, file) içererek modern web form standartlarını sergiler. JavaScript ve Vue.js ile çift doğrulama sistemi geliştirilmiş, real-time validation feedback sağlanmıştır. Bootstrap modal ile KVKK uyumlu gizlilik bilgilendirmesi eklenmiş, dosya yükleme ve tercih seçenekleri ile kullanıcı deneyimi zenginleştirilmiştir.

## 4. TEKNİK UYGULAMA VE ÖZELLİKLER

### 4.1 Frontend Teknolojileri
Bootstrap 5 framework'ü ile responsive tasarım sağlanmış, mobil cihazlardan masaüstü bilgisayarlara kadar tüm ekran boyutlarında optimal görüntüleme garanti edilmiştir. CSS3 animations ve transitions ile kullanıcı deneyimi artırılmış, modern web standartlarına uygun semantic HTML5 yapısı kullanılmıştır.

### 4.2 JavaScript ve API Entegrasyonu
Vanilla JavaScript ve Vue.js framework'ü ile dinamik içerik yönetimi sağlanmıştır. Fetch API kullanılarak RESTful servislerle iletişim kurulmuş, Promise-based asenkron programlama teknikleri uygulanmıştır. Error handling ve loading states ile kullanıcı deneyimi optimize edilmiştir.

### 4.3 Backend ve Güvenlik
PHP ile session tabanlı authentication sistemi geliştirilmiş, SQL injection ve XSS saldırılarına karşı güvenlik önlemleri alınmıştır. Input sanitization ve server-side validation ile veri güvenliği sağlanmıştır.

## 5. KARŞILAŞILAN ZORLUKLAR VE ÇÖZÜMLER

### 5.1 Hosting Uyumluluğu
InfinityFree ücretsiz hosting platformunun PHP sürüm sınırlamaları nedeniyle kod optimizasyonu gerekmiştir. Error reporting ve complex session handling özelliklerinin kaldırılmasıyla hosting uyumluluğu sağlanmıştır.

### 5.2 API CORS Sorunları
Çeşitli API'lerin cross-origin politikaları nedeniyle erişim sorunları yaşanmış, proxy kullanımı ve alternatif endpoint'ler ile çözülmüştür.

### 5.3 Güvenlik ve Gizlilik
Kişisel bilgilerin korunması amacıyla placeholder değerleri güncellenmiş, gerçek telefon numaraları ve öğrenci bilgileri gizlenmiştir.

## 6. SONUÇ

Bu proje, modern web teknolojilerinin kapsamlı bir uygulamasını temsil etmektedir. HTML5, CSS3, JavaScript, PHP ve çeşitli API'lerin entegrasyonu ile dinamik, responsive ve güvenli bir web sitesi geliştirilmiştir. Proje sürecinde karşılaşılan teknik zorluklar, problem çözme becerileri ve web geliştirme konusundaki teorik bilgilerin pratiğe dönüştürülmesine katkı sağlamıştır.

Geliştirilen site, sadece bir ders projesi olmaktan öte, gerçek dünyada kullanılabilir bir kişisel portfolyo niteliği taşımaktadır. Bootstrap framework'ü ile sağlanan responsive tasarım, çeşitli API entegrasyonları ile dinamik içerik sunumu ve PHP tabanlı güvenli authentication sistemi, projenin teknik değerini artıran önemli özelliklerdir.

Bu çalışma, web teknolojileri alanındaki bilgi ve becerilerimin gelişimine önemli katkı sağlamış, aynı zamanda gerçek bir hosting ortamında deployment deneyimi kazandırmıştır. Gelecekteki projeler için sağlam bir temel oluşturan bu deneyim, hem akademik hem de profesyonel gelişimim açısından değerli bir kazanım olmuştur.

---

**Rapor Tarihi:** Aralık 2024  
**Toplam Sayfa Sayısı:** 7 HTML sayfası, 2 PHP dosyası  
**Kullanılan API Sayısı:** 6 harici API  
**Hosting Platform:** InfinityFree 