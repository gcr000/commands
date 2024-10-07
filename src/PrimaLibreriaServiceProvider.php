<?php

namespace Gcr000\Commands;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class PrimaLibreriaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Esempi di risorse da caricare:
        // Caricare le rotte
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        
        // Caricare le viste
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'mylibrary');
        
        // Caricare le migration
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        
        // Caricare i file di configurazione
        // $this->publishes([
        //     __DIR__.'/../config/mylibrary.php' => config_path('mylibrary.php'),
        // ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Registrare le binding nel container, se necessario
    }

    public function logMessage($message)
    {
        Log::info("Messaggio dal package PrimaLibreria: " . $message);
    }
}