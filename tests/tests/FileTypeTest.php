<?php

use PHPUnit\Framework\TestCase;

class FileTypeTest extends TestCase
{
    private $projectFiles = [
        'index.php',
        'prices.php',
        'check.php',
        'reviews.php',
        'config.php',
        'functions.php'
    ];

    public function test_files_exist()
    {
        foreach ($this->projectFiles as $file) {
            $this->assertFileExists($file, "File $file tidak ditemukan");
        }
    }

    public function test_php_files_contain_php_code()
    {
        foreach ($this->projectFiles as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                $content = file_get_contents($file);
                $this->assertMatchesRegularExpression(
                    '/<\?php|<\?=/',
                    $content,
                    "File $file tidak mengandung kode PHP"
                );
            }
        }
    }

    public function test_html_files_contain_html_tags()
    {
        $htmlFiles = ['index.php', 'prices.php', 'check.php', 'reviews.php'];
        
        foreach ($htmlFiles as $file) {
            if (file_exists($file)) {
                $content = file_get_contents($file);
                $this->assertMatchesRegularExpression(
                    '/<html|<head|<body|<div|<span|<nav|<footer/',
                    $content,
                    "File $file harus HTML yang valid"
                );
            }
        }
    }
}
