<?php

namespace PyrobyteWeb\FileUpload;

use Carbon\Laravel\ServiceProvider;

class FileUploadServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishFiles();
    }

    protected function publishFiles()
    {
        $this->publishes([
            __DIR__ . '/../config/file-upload.php' => $this->app->configPath() . '/file-upload.php',
        ], 'config');

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'migrations');
    }
}
