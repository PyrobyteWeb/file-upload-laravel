1. В app.php ``\PyrobyteWeb\FileUpload\FileUploadServiceProvider::class`` 
2. Публикуем миграцию ``php artisan vendor:publish --provider="PyrobyteWeb\FileUpload\FileUploadServiceProvider"``
3. Вызываем для использования ``(new FileUpload())->uploadFile($file, 1, 1, 'test', 'test')``
