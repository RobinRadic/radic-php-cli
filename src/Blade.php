<?php
/**
 * Part of the Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.com
 */
namespace Radic;

use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;

/**
 * This is the Blade class.
 *
 * @package        Radic\Blade
 * @version        1.0.0
 * @author         Robin Radic
 * @license        MIT License
 * @copyright      2015, Robin Radic
 * @link           https://github.com/robinradic
 */
class Blade
{

    /**
     * Array containg paths where to look for blade files
     *
     * @var array
     */
    public $viewPaths;

    /**
     * Location where to store cached views
     *
     * @var string
     */
    public $cachePath;

    /**
     * @var \Radic\App
     */
    protected $app;

    /**
     * @var Illuminate\View\Factory
     */
    protected $instance;

    /**
     * Initialize class
     *
     * @param \Radic\App $app
     * @param array      $viewPaths
     * @param string     $cachePath
     */
    public function __construct(App $app, $viewPaths = array())
    {

        $this->app = $app;

        $this->viewPaths = (array)$viewPaths;

        $this->cachePath = $app->config->get('cache.stores.file.path');


        $this->registerEngineResolver();

        $this->registerViewFinder();

        $this->instance = $this->registerFactory();
    }

    public function view()
    {
        return $this->instance;
    }


    /**
     * Register the engine resolver instance.
     *
     * @return void
     */
    public function registerEngineResolver()
    {
        $me = $this;

        $this->app->bindShared('view.engine.resolver', function ($app) use ($me)
        {
            $resolver = new EngineResolver;

            // Next we will register the various engines with the resolver so that the
            // environment can resolve the engines it needs for various views based
            // on the extension of view files. We call a method for each engines.
            foreach ( array( 'php', 'blade' ) as $engine )
            {
                $me->{'register' . ucfirst($engine) . 'Engine'}($resolver);
            }

            return $resolver;
        });
    }

    /**
     * Register the PHP engine implementation.
     *
     * @param  \Illuminate\View\Engines\EngineResolver $resolver
     * @return void
     */
    public function registerPhpEngine($resolver)
    {
        $resolver->register('php', function ()
        {
            return new PhpEngine;
        });
    }

    /**
     * Register the Blade engine implementation.
     *
     * @param  \Illuminate\View\Engines\EngineResolver $resolver
     * @return void
     */
    public function registerBladeEngine($resolver)
    {
        $me  = $this;
        $app = $this->app;

        // The Compiler engine requires an instance of the CompilerInterface, which in
        // this case will be the Blade compiler, so we'll first create the compiler
        // instance to pass into the engine so it can compile the views properly.
        $this->app->bindShared('blade.compiler', function ($app) use ($me)
        {
            $cache = $me->cachePath;

            return new BladeCompiler($app[ 'files' ], $cache);
        });

        $resolver->register('blade', function () use ($app)
        {
            return new CompilerEngine($app[ 'blade.compiler' ], $app[ 'files' ]);
        });
    }

    /**
     * Register the view finder implementation.
     *
     * @return void
     */
    public function registerViewFinder()
    {
        $me = $this;
        $this->app->bindShared('view.finder', function ($app) use ($me)
        {
            $paths = $me->viewPaths;

            return new FileViewFinder($app[ 'files' ], $paths);
        });
    }

    /**
     * Register the view environment.
     *
     * @return Factory
     */
    public function registerFactory()
    {
        // Next we need to grab the engine resolver instance that will be used by the
        // environment. The resolver will be used by an environment to get each of
        // the various engine implementations such as plain PHP or Blade engine.
        $resolver = $this->app[ 'view.engine.resolver' ];

        $finder = $this->app[ 'view.finder' ];

        $env = new Factory($resolver, $finder, $this->app[ 'events' ]);

        // We will also set the container instance on this view environment since the
        // view composers may be classes registered in the container, which allows
        // for great testable, flexible composers for the application developer.
        $env->setContainer($this->app);

        $env->addExtension('stub', 'blade');

        return $env;
    }

    public function getCompiler()
    {
        return $this->app[ 'blade.compiler' ];
    }
}
