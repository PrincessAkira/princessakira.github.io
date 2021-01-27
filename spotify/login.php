<?php
require_once 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'b2a5cd1f2c634e88b89b6134e38c501b',
    '15d648af04eb4b68bd3955465be1d6a3',
    'https://sinonaim.de/spotify/token.php'
);

$options = [
    'scope' => [
        'user-read-currently-playing',
        'user-read-playback-state',
        'streaming'
    ],
];

header('Location: ' . $session->getAuthorizeUrl($options));
die();
?>
