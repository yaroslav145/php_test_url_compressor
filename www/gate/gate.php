<?php
    use MiniUrl\Repository\PdoRepository;
    use MiniUrl\Service\ShortUrlService;

    require_once __DIR__.'/vendor/autoload.php';
    require_once __DIR__.'/functions.php';

    $redis = new Predis\Client([
        'scheme' => 'tcp',
        'host'   => 'redis',
        'port'   => 6379,
    ]);

    $cached = $redis->get($domain.$_SERVER['REQUEST_URI']);
    if($cached)
        header('Location: ' . $cached);
    else
    {
        $pdo = new PDO($dsn, $username, $password);
        $service = new ShortUrlService($domain, new PdoRepository($pdo));

        $url = $service->expand($_SERVER['REQUEST_URI']);
        if($url) {
            $long = $url->getLongUrl();
            $short = $url->getShortUrl();
            $redis->set($short, $long, 'EX', 3600);
            header('Location: ' . $long);
        }
        else
            echo 'URL '.$_SERVER['REQUEST_URI'].' not found';
    }




