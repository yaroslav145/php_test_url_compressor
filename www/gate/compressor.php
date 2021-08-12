<?php
    error_reporting(0);

    use MiniUrl\Repository\PdoRepository;
    use MiniUrl\Service\ShortUrlService;

    require_once __DIR__.'/vendor/autoload.php';
    require_once __DIR__.'/functions.php';

    $input = file_get_contents("php://input");
    $data = json_decode($input, true);

    if(isset($data['url']))
    {
        $pdo = new PDO($dsn, $username, $password);
        $service = new ShortUrlService($domain, new PdoRepository($pdo));

        $url = $service->shorten($data['url']);
        echo json_encode(['url' => $url->getShortUrl()]);
    }
    else
        echo json_encode(['error' => 'Bad URL']);

