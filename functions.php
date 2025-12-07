<?php
// Fungsi Helper

function checkNickname($gameId, $userId, $zoneId = '')
{
    if (empty(API_KEY)) {
        return ['error' => 'API Key tidak ditemukan'];
    }

    $url = 'https://' . API_HOST . '/' . $gameId . '?userId=' . urlencode($userId);
    if ($zoneId) {
        $url .= '&zoneId=' . urlencode($zoneId);
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'x-rapidapi-host: ' . API_HOST,
            'x-rapidapi-key: ' . API_KEY
        ],
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200) {
        return ['error' => 'API Error: ' . $httpCode];
    }

    $data = json_decode($response, true);
    return $data ?: ['error' => 'Invalid response'];
}

function getNickname($data)
{
    if (isset($data['error'])) {
        return null;
    }

    $fields = ['nickname', 'result', 'userName', 'username', 'name'];
    foreach ($fields as $field) {
        if (!empty($data[$field])) {
            return $data[$field];
        }
        if (!empty($data['data'][$field])) {
            return $data['data'][$field];
        }
    }
    if (is_string($data['data'] ?? null)) {
        return $data['data'];
    }

    return null;
}

function formatRupiah($number)
{
    return 'Rp ' . number_format($number, 0, ',', '.');
}
