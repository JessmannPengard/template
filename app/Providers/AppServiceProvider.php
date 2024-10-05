<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Directiva para usar SVGs
        // @author: @jessmann
        Blade::directive('svg', function ($expression) {
            // Separar los parámetros
            $params = explode(',', $expression);
            $icon = trim($params[0], "'\" ");
            $class = isset($params[1]) ? trim($params[1], "'\" ") : ''; // Clases opcionales
            $id = isset($params[2]) ? trim($params[2], "'\" ") : ''; // ID opcional

            // Ruta al archivo SVG
            $path = resource_path("svg/{$icon}.svg");

            if (File::exists($path)) {
                $svgContent = File::get($path);

                // Si se pasaron clases, añadirlas al <svg>
                if (!empty($class)) {
                    $svgContent = preg_replace('/<svg/', '<svg class="' . $class . '"', $svgContent);
                }

                // Si se pasó un ID, añadirla al <svg>
                if (!empty($id)) {
                    $svgContent = preg_replace('/<svg/', '<svg id="' . $id . '"', $svgContent);
                }

                return $svgContent;
            }

            return '';
        });
    }
}
