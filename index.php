<?php
// Gabia DirectoryIndex often prefers index.php over index.html.
header('Content-Type: text/html; charset=utf-8');
readfile(__DIR__ . '/index.html');
