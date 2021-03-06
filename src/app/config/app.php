<?php

return [
    'env' => env('APP_ENV', 'production'),
    'debug' => env('APP_DEBUG', false),
    'url' => env('APP_URL', 'http://localhost'),

    'timezone'        => 'UTC',
    'locale'          => 'en',
    'fallback_locale' => 'en',
    'key'             => env('APP_KEY', 'SomeRandomString'),

    'cipher' => 'AES-256-CBC',

    'log' => 'single',

    'providers' => [
        Radic\Foundation\Providers\ArtisanServiceProvider::class,
        Illuminate\Auth\AuthServiceProvider::class,
        #Illuminate\Broadcasting\BroadcastServiceProvider::class,
        #Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Radic\Foundation\Providers\ConsoleSupportServiceProvider::class,
        #Illuminate\Routing\ControllerServiceProvider::class,
        #Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        #Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Radic\Foundation\Providers\FoundationServiceProvider::class,
        #Illuminate\Hashing\HashServiceProvider::class,
        #Illuminate\Mail\MailServiceProvider::class,
        #Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        #Illuminate\Queue\QueueServiceProvider::class,
        #Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        #Illuminate\Translation\TranslationServiceProvider::class,
        #Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,


        Radic\Providers\ConsoleServiceProvider::class,
        Radic\Config\ConfigServiceProvider::class,
        Radic\Providers\FirstRunServiceProvider::class,

        Radic\BladeExtensions\BladeExtensionsServiceProvider::class,
        Sebwite\Git\GitServiceProvider::class,
        Sebwite\Support\SupportServiceProvider::class,
    ],
    'providers-dev' => [
        Sebwite\Phpstorm\PhpstormServiceProvider::class,
        Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class
    ],
    'aliases'   => [
        'Schema' => Illuminate\Support\Facades\Schema::class
    ],

];
