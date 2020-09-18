<?php

namespace Carloosolrac\LaravelVTP\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

class PresetCommand extends Command
{
    public $signature = 'preset:vtp';

    public $description = 'A simple way to install Vue, Tailwind and PurgeCSS';

    public function handle()
    {
        $this->updatePackages();
        $this->updateWebpack();
        $this->removeStuffs();
        $this->updateCss();
        $this->updateJS();
        $this->createExampleComponent();
        $this->updateTemplates();

        $this->info('Laravel Tailwind Preset installed successfully.');
        $this->info('Please run "npm install && npx tailwind init && npm run dev" to install all stuffs.');
    }

    private function updatePackages($dev = true)
    {
        if (!file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $this->updatePackageArray(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . PHP_EOL
        );
    }


    private function updatePackageArray(array $packages)
    {
        return array_merge([
            'vue' => '^2.6.12',
            'tailwindcss' => '^1.8.10',
            'laravel-mix-purgecss' => '^5.0.0',
            'postcss-import' => '^12.0.1',
            'postcss-nesting' => '^7.0.1',
        ], $packages);
    }

    private function updateWebpack()
    {
        copy(__DIR__ . '/../stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    private function removeStuffs()
    {
        tap(new Filesystem, function ($files) {
            $files->deleteDirectory(resource_path('sass'));
            $files->delete(public_path('js/app.js'));
            $files->delete(public_path('css/app.css'));

            $files->delete(resource_path('views/welcome.blade.php'));

            $files->deleteDirectory(base_path('node_modules'));

            $files->delete(base_path('yarn.lock'));
        });
    }

    private function updateCss()
    {
        tap(new Filesystem, function ($files) {
            if (!$files->isDirectory($directory = resource_path('css'))) {
                $files->makeDirectory($directory, 0755, true);
            }
        });

        copy(__DIR__ . '/../stubs/resources/css/app.css', resource_path('css/app.css'));
        copy(__DIR__ . '/../stubs/resources/css/customComponents.css', resource_path('css/customComponents.css'));
        copy(__DIR__ . '/../stubs/resources/css/customUtilities.css', resource_path('css/customUtilities.css'));
    }

    private function updateJS()
    {
        copy(__DIR__ . '/../stubs/resources/js/app.js', resource_path('js/app.js'));
        copy(__DIR__ . '/../stubs/resources/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    private function createExampleComponent()
    {
        tap(new Filesystem, function ($files) {
            if (!$files->isDirectory($directory = resource_path('js/components'))) {
                $files->makeDirectory($directory, 0755, true);
            }
        });

        copy(__DIR__ . '/../stubs/resources/js/components/ExampleComponent.vue', resource_path('js/components/ExampleComponent.vue'));
    }

    private function updateTemplates()
    {
        tap(new Filesystem, function ($files) {
            $files->copyDirectory(__DIR__ . '/../stubs/resources/views', resource_path('views'));
        });
    }
}
