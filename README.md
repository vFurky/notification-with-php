# notification-with-php
PHP ve Javascript kullanılarak yapılan, bildirim sisteminin mantığını öğretmeye çalışan basit bir sistem.

# Notlar

1 -> Veritabanı, "notification.sql" dosyasıdır. PHPMyAdmin sunucunuza yüklemeniz gerek.<br>
2 -> Dosyalar içerisindeki "connection.php" dosyasındaki "$db_name" bölümünü kendi veritabanı adınızla güncellemeniz gerek.<br>
<del>3 -> Bildirimler otomatik okunur, sayfada görünür hale gelmesi için F5 atmanız gerek.</del><br>
<strong>1.2x sürümünde düzeltildi, F5 atmaya gerek yok. Otomatik olarak görünür halde güncelleniyor.</strong>

# 1.2x

AJAX ile bildirim güncelleme eklendi.<br>
"script" kodları anasayfadan main.js dosyasına taşındı.<br>
Buton ile bildirim okuma eklendi.
Butona SweetAlert eklendi, 3 saniye sonra otomatik olarak kendisi kapanıyor.
Basit görünüm düzeltmeleri uygulandı.
Sayfa yüklendiğinde ve her 10 saniyede bir bildirim sayısının güncellenmesi sağlandı.
Anasayfadaki bildirim sayısı çekme kaldırıldı, otomatik çekiliyor.