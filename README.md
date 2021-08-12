#### Запуск:


```docker-compose up -d``` 


#### Роут для компрессии ссылки:


```http://127.0.0.1:8080/compressor.php```

Данные отправлять в формате JSON `{"url":"http://yandex.ru"}`, ответ в формате JSON `{"url":"ваша ссылка"}`


Отправить можно при помощи сервиса [`https://reqbin.com/req/4rwevrqh/post-json-example`](https://reqbin.com/req/4rwevrqh/post-json-example)


#### Роут для декомпрессии ссылки:


```http://127.0.0.1:8080/(ваша ссылка)```




