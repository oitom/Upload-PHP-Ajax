# Upload PHP + Ajax
Upload com php de um arquivo enviado via ajax

Arquivos muito grandes é necessário alterar o tamanho máximo permitido no [php.ini](https://secure.php.net/manual/pt_BR/configuration.file.php)
```php
upload_max_filesize = 50M
post_max_size = 50M
