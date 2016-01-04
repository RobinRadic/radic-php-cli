<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.2.6 on 2016-01-04.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {
    exit("This file should not be included, only analyzed by your IDE");

    class App extends \Illuminate\Support\Facades\App{
        
        /**
         * 
         *
         * @static 
         */
        public static function dumpSelf(){
            return \Radic\Foundation\Application::dumpSelf();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dump($var){
            return \Radic\Foundation\Application::dump($var);
        }
        
        /**
         * Execute a shell command
         *
         * @param $commands
         * @param bool $path
         * @static 
         */
        public static function shell($commands, $path = false){
            return \Radic\Foundation\Application::shell($commands, $path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getName(){
            return \Radic\Foundation\Application::getName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getVersion(){
            return \Radic\Foundation\Application::getVersion();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasRootAccess(){
            return \Radic\Foundation\Application::hasRootAccess();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function encrypt($str){
            return \Radic\Foundation\Application::encrypt($str);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decrypt($str){
            return \Radic\Foundation\Application::decrypt($str);
        }
        
        /**
         * Get the version number of the application.
         *
         * @return string 
         * @static 
         */
        public static function version(){
            return \Radic\Foundation\Application::version();
        }
        
        /**
         * Run the given array of bootstrap classes.
         *
         * @param array $bootstrappers
         * @return void 
         * @static 
         */
        public static function bootstrapWith($bootstrappers){
            \Radic\Foundation\Application::bootstrapWith($bootstrappers);
        }
        
        /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function afterLoadingEnvironment($callback){
            \Radic\Foundation\Application::afterLoadingEnvironment($callback);
        }
        
        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function beforeBootstrapping($bootstrapper, $callback){
            \Radic\Foundation\Application::beforeBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function afterBootstrapping($bootstrapper, $callback){
            \Radic\Foundation\Application::afterBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool 
         * @static 
         */
        public static function hasBeenBootstrapped(){
            return \Radic\Foundation\Application::hasBeenBootstrapped();
        }
        
        /**
         * Get the path to the environment file directory.
         *
         * @return string 
         * @static 
         */
        public static function environmentPath(){
            return \Radic\Foundation\Application::environmentPath();
        }
        
        /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return $this 
         * @static 
         */
        public static function useEnvironmentPath($path){
            return \Radic\Foundation\Application::useEnvironmentPath($path);
        }
        
        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return $this 
         * @static 
         */
        public static function loadEnvironmentFrom($file){
            return \Radic\Foundation\Application::loadEnvironmentFrom($file);
        }
        
        /**
         * Get the environment file the application is using.
         *
         * @return string 
         * @static 
         */
        public static function environmentFile(){
            return \Radic\Foundation\Application::environmentFile();
        }
        
        /**
         * Get or check the current application environment.
         *
         * @param mixed
         * @return string 
         * @static 
         */
        public static function environment(){
            return \Radic\Foundation\Application::environment();
        }
        
        /**
         * Determine if application is in local environment.
         *
         * @return bool 
         * @static 
         */
        public static function isLocal(){
            return \Radic\Foundation\Application::isLocal();
        }
        
        /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         * @return string 
         * @static 
         */
        public static function detectEnvironment($callback){
            return \Radic\Foundation\Application::detectEnvironment($callback);
        }
        
        /**
         * Determine if we are running in the console.
         *
         * @return bool 
         * @static 
         */
        public static function runningInConsole(){
            return \Radic\Foundation\Application::runningInConsole();
        }
        
        /**
         * Determine if we are running unit tests.
         *
         * @return bool 
         * @static 
         */
        public static function runningUnitTests(){
            return \Radic\Foundation\Application::runningUnitTests();
        }
        
        /**
         * Register all of the configured providers.
         *
         * @return void 
         * @static 
         */
        public static function registerConfiguredProviders(){
            \Radic\Foundation\Application::registerConfiguredProviders();
        }
        
        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param array $options
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */
        public static function register($provider, $options = array(), $force = false){
            return \Radic\Foundation\Application::register($provider, $options, $force);
        }
        
        /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return \Illuminate\Support\ServiceProvider|null 
         * @static 
         */
        public static function getProvider($provider){
            return \Radic\Foundation\Application::getProvider($provider);
        }
        
        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */
        public static function resolveProviderClass($provider){
            return \Radic\Foundation\Application::resolveProviderClass($provider);
        }
        
        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void 
         * @static 
         */
        public static function loadDeferredProviders(){
            \Radic\Foundation\Application::loadDeferredProviders();
        }
        
        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void 
         * @static 
         */
        public static function loadDeferredProvider($service){
            \Radic\Foundation\Application::loadDeferredProvider($service);
        }
        
        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string $service
         * @return void 
         * @static 
         */
        public static function registerDeferredProvider($provider, $service = null){
            \Radic\Foundation\Application::registerDeferredProvider($provider, $service);
        }
        
        /**
         * Resolve the given type from the container.
         * 
         * (Overriding Container::make)
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */
        public static function make($abstract, $parameters = array()){
            return \Radic\Foundation\Application::make($abstract, $parameters);
        }
        
        /**
         * Determine if the given abstract type has been bound.
         * 
         * (Overriding Container::bound)
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */
        public static function bound($abstract){
            return \Radic\Foundation\Application::bound($abstract);
        }
        
        /**
         * Determine if the application has booted.
         *
         * @return bool 
         * @static 
         */
        public static function isBooted(){
            return \Radic\Foundation\Application::isBooted();
        }
        
        /**
         * Boot the application's service providers.
         *
         * @return void 
         * @static 
         */
        public static function boot(){
            \Radic\Foundation\Application::boot();
        }
        
        /**
         * Register a new boot listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function booting($callback){
            \Radic\Foundation\Application::booting($callback);
        }
        
        /**
         * Register a new "booted" listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function booted($callback){
            \Radic\Foundation\Application::booted($callback);
        }
        
        /**
         * {@inheritdoc}
         *
         * @static 
         */
        public static function handle($request, $type = 1, $catch = true){
            return \Radic\Foundation\Application::handle($request, $type, $catch);
        }
        
        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool 
         * @static 
         */
        public static function shouldSkipMiddleware(){
            return \Radic\Foundation\Application::shouldSkipMiddleware();
        }
        
        /**
         * Determine if the application configuration is cached.
         *
         * @return bool 
         * @static 
         */
        public static function configurationIsCached(){
            return \Radic\Foundation\Application::configurationIsCached();
        }
        
        /**
         * Get the path to the configuration cache file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedConfigPath(){
            return \Radic\Foundation\Application::getCachedConfigPath();
        }
        
        /**
         * Determine if the application routes are cached.
         *
         * @return bool 
         * @static 
         */
        public static function routesAreCached(){
            return \Radic\Foundation\Application::routesAreCached();
        }
        
        /**
         * Get the path to the routes cache file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedRoutesPath(){
            return \Radic\Foundation\Application::getCachedRoutesPath();
        }
        
        /**
         * Get the path to the cached "compiled.php" file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedCompilePath(){
            return \Radic\Foundation\Application::getCachedCompilePath();
        }
        
        /**
         * Get the path to the cached services.php file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedServicesPath(){
            return \Radic\Foundation\Application::getCachedServicesPath();
        }
        
        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool 
         * @static 
         */
        public static function isDownForMaintenance(){
            return \Radic\Foundation\Application::isDownForMaintenance();
        }
        
        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @static 
         */
        public static function abort($code, $message = '', $headers = array()){
            \Radic\Foundation\Application::abort($code, $message, $headers);
        }
        
        /**
         * Register a terminating callback with the application.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function terminating($callback){
            return \Radic\Foundation\Application::terminating($callback);
        }
        
        /**
         * Terminate the application.
         *
         * @return void 
         * @static 
         */
        public static function terminate(){
            \Radic\Foundation\Application::terminate();
        }
        
        /**
         * Get the service providers that have been loaded.
         *
         * @return array 
         * @static 
         */
        public static function getLoadedProviders(){
            return \Radic\Foundation\Application::getLoadedProviders();
        }
        
        /**
         * Get the application's deferred services.
         *
         * @return array 
         * @static 
         */
        public static function getDeferredServices(){
            return \Radic\Foundation\Application::getDeferredServices();
        }
        
        /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */
        public static function setDeferredServices($services){
            \Radic\Foundation\Application::setDeferredServices($services);
        }
        
        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */
        public static function addDeferredServices($services){
            \Radic\Foundation\Application::addDeferredServices($services);
        }
        
        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool 
         * @static 
         */
        public static function isDeferredService($service){
            return \Radic\Foundation\Application::isDeferredService($service);
        }
        
        /**
         * Define a callback to be used to configure Monolog.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */
        public static function configureMonologUsing($callback){
            return \Radic\Foundation\Application::configureMonologUsing($callback);
        }
        
        /**
         * Determine if the application has a custom Monolog configurator.
         *
         * @return bool 
         * @static 
         */
        public static function hasMonologConfigurator(){
            return \Radic\Foundation\Application::hasMonologConfigurator();
        }
        
        /**
         * Get the custom Monolog configurator for the application.
         *
         * @return callable 
         * @static 
         */
        public static function getMonologConfigurator(){
            return \Radic\Foundation\Application::getMonologConfigurator();
        }
        
        /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            return \Radic\Foundation\Application::getLocale();
        }
        
        /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */
        public static function setLocale($locale){
            \Radic\Foundation\Application::setLocale($locale);
        }
        
        /**
         * Register the core class aliases in the container.
         *
         * @return void 
         * @static 
         */
        public static function registerCoreContainerAliases(){
            \Radic\Foundation\Application::registerCoreContainerAliases();
        }
        
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Radic\Foundation\Application::flush();
        }
        
        /**
         * Get the application namespace.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */
        public static function getNamespace(){
            return \Radic\Foundation\Application::getNamespace();
        }
        
        /**
         * Define a contextual binding.
         *
         * @param string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder 
         * @static 
         */
        public static function when($concrete){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::when($concrete);
        }
        
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */
        public static function resolved($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::resolved($abstract);
        }
        
        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function isAlias($name){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::isAlias($name);
        }
        
        /**
         * Register a binding with the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */
        public static function bind($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::bind($abstract, $concrete, $shared);
        }
        
        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @return void 
         * @static 
         */
        public static function addContextualBinding($concrete, $abstract, $implementation){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */
        public static function bindIf($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * Register a shared binding in the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */
        public static function singleton($abstract, $concrete = null){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::singleton($abstract, $concrete);
        }
        
        /**
         * Wrap a Closure such that it is shared.
         *
         * @param \Closure $closure
         * @return \Closure 
         * @static 
         */
        public static function share($closure){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::share($closure);
        }
        
        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function extend($abstract, $closure){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::extend($abstract, $closure);
        }
        
        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return void 
         * @static 
         */
        public static function instance($abstract, $instance){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::instance($abstract, $instance);
        }
        
        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void 
         * @static 
         */
        public static function tag($abstracts, $tags){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::tag($abstracts, $tags);
        }
        
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return array 
         * @static 
         */
        public static function tagged($tag){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::tagged($tag);
        }
        
        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void 
         * @static 
         */
        public static function alias($abstract, $alias){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::alias($abstract, $alias);
        }
        
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function rebinding($abstract, $callback){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::rebinding($abstract, $callback);
        }
        
        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed 
         * @static 
         */
        public static function refresh($abstract, $target, $method){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::refresh($abstract, $target, $method);
        }
        
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         * @return \Closure 
         * @static 
         */
        public static function wrap($callback, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::wrap($callback, $parameters);
        }
        
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array $parameters
         * @param string|null $defaultMethod
         * @return mixed 
         * @static 
         */
        public static function call($callback, $parameters = array(), $defaultMethod = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }
        
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param string $concrete
         * @param array $parameters
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */
        public static function build($concrete, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::build($concrete, $parameters);
        }
        
        /**
         * Register a new resolving callback.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */
        public static function resolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::resolving($abstract, $callback);
        }
        
        /**
         * Register a new after resolving callback for all types.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */
        public static function afterResolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::afterResolving($abstract, $callback);
        }
        
        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */
        public static function isShared($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::isShared($abstract);
        }
        
        /**
         * Get the container's bindings.
         *
         * @return array 
         * @static 
         */
        public static function getBindings(){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::getBindings();
        }
        
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */
        public static function forgetInstance($abstract){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::forgetInstance($abstract);
        }
        
        /**
         * Clear all of the instances from the container.
         *
         * @return void 
         * @static 
         */
        public static function forgetInstances(){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::forgetInstances();
        }
        
        /**
         * Set the globally available instance of the container.
         *
         * @return static 
         * @static 
         */
        public static function getInstance(){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::getInstance();
        }
        
        /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setInstance($container){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::setInstance($container);
        }
        
        /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function offsetExists($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::offsetExists($key);
        }
        
        /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function offsetGet($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Radic\Foundation\Application::offsetGet($key);
        }
        
        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($key, $value){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::offsetSet($key, $value);
        }
        
        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void 
         * @static 
         */
        public static function offsetUnset($key){
            //Method inherited from \Illuminate\Container\Container            
            \Radic\Foundation\Application::offsetUnset($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function basePath(){
            return \Radic\Foundation\Application::basePath();
        }
        
        /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return $this 
         * @static 
         */
        public static function setBasePath($basePath){
            return \Radic\Foundation\Application::setBasePath($basePath);
        }
        
        /**
         * Get the path to the application "app" directory.
         *
         * @return string 
         * @static 
         */
        public static function path(){
            return \Radic\Foundation\Application::path();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function configPath(){
            return \Radic\Foundation\Application::configPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function langPath(){
            return \Radic\Foundation\Application::langPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function publicPath(){
            return \Radic\Foundation\Application::publicPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function homePath(){
            return \Radic\Foundation\Application::homePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exportPath(){
            return \Radic\Foundation\Application::exportPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function databasePath(){
            return \Radic\Foundation\Application::databasePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function storagePath(){
            return \Radic\Foundation\Application::storagePath();
        }
        
        /**
         * Set the storage directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */
        public static function useStoragePath($path){
            return \Radic\Foundation\Application::useStoragePath($path);
        }
        
        /**
         * Set the database directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */
        public static function useDatabasePath($path){
            return \Radic\Foundation\Application::useDatabasePath($path);
        }
        
    }


    class Auth extends \Illuminate\Support\Facades\Auth{
        
        /**
         * Attempt to get the guard from the local cache.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard 
         * @static 
         */
        public static function guard($name = null){
            return \Illuminate\Auth\AuthManager::guard($name);
        }
        
        /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */
        public static function createSessionDriver($name, $config){
            return \Illuminate\Auth\AuthManager::createSessionDriver($name, $config);
        }
        
        /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\TokenGuard 
         * @static 
         */
        public static function createTokenDriver($name, $config){
            return \Illuminate\Auth\AuthManager::createTokenDriver($name, $config);
        }
        
        /**
         * Get the default authentication driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }
        
        /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function shouldUse($name){
            \Illuminate\Auth\AuthManager::shouldUse($name);
        }
        
        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }
        
        /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return $this 
         * @static 
         */
        public static function viaRequest($driver, $callback){
            return \Illuminate\Auth\AuthManager::viaRequest($driver, $callback);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }
        
        /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function provider($name, $callback){
            return \Illuminate\Auth\AuthManager::provider($name, $callback);
        }
        
        /**
         * Create the user provider implementation for the driver.
         *
         * @param string $provider
         * @return \Illuminate\Contracts\Auth\UserProvider 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function createUserProvider($provider){
            return \Illuminate\Auth\AuthManager::createUserProvider($provider);
        }
        
    }


    class DB extends \Illuminate\Support\Facades\DB{
        
        /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function purge($name = null){
            \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function disconnect($name = null){
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function reconnect($name = null){
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultConnection(){
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultConnection($name){
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */
        public static function supportedDrivers(){
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
        
        /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */
        public static function availableDrivers(){
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
        
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */
        public static function extend($name, $resolver){
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */
        public static function getConnections(){
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
    }


    class Cache extends \Illuminate\Support\Facades\Cache{
        
        /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
         * @return mixed 
         * @static 
         */
        public static function store($name = null){
            return \Illuminate\Cache\CacheManager::store($name);
        }
        
        /**
         * Get a cache driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */
        public static function driver($driver = null){
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
        
        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository 
         * @static 
         */
        public static function repository($store){
            return \Illuminate\Cache\CacheManager::repository($store);
        }
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
        
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
        
    }


    class Event extends \Illuminate\Support\Facades\Event{
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param string|array $events
         * @param mixed $listener
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function listen($events, $listener, $priority = 0){
            \Illuminate\Events\Dispatcher::listen($events, $listener, $priority);
        }
        
        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */
        public static function hasListeners($eventName){
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param array $payload
         * @return void 
         * @static 
         */
        public static function push($event, $payload = array()){
            \Illuminate\Events\Dispatcher::push($event, $payload);
        }
        
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void 
         * @static 
         */
        public static function subscribe($subscriber){
            \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param array $payload
         * @return mixed 
         * @static 
         */
        public static function until($event, $payload = array()){
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void 
         * @static 
         */
        public static function flush($event){
            \Illuminate\Events\Dispatcher::flush($event);
        }
        
        /**
         * Get the event that is currently firing.
         *
         * @return string 
         * @static 
         */
        public static function firing(){
            return \Illuminate\Events\Dispatcher::firing();
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */
        public static function fire($event, $payload = array(), $halt = false){
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array 
         * @static 
         */
        public static function getListeners($eventName){
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param mixed $listener
         * @return mixed 
         * @static 
         */
        public static function makeListener($listener){
            return \Illuminate\Events\Dispatcher::makeListener($listener);
        }
        
        /**
         * Create a class based listener using the IoC container.
         *
         * @param mixed $listener
         * @return \Closure 
         * @static 
         */
        public static function createClassListener($listener){
            return \Illuminate\Events\Dispatcher::createClassListener($listener);
        }
        
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void 
         * @static 
         */
        public static function forget($event){
            \Illuminate\Events\Dispatcher::forget($event);
        }
        
        /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */
        public static function forgetPushed(){
            \Illuminate\Events\Dispatcher::forgetPushed();
        }
        
        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return $this 
         * @static 
         */
        public static function setQueueResolver($resolver){
            return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
        }
        
    }


    class Log extends \Illuminate\Support\Facades\Log{
        
        /**
         * Adds a log record at the DEBUG level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function debug($message, $context = array()){
            return \Monolog\Logger::debug($message, $context);
        }
        
        /**
         * Adds a log record at the INFO level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function info($message, $context = array()){
            return \Monolog\Logger::info($message, $context);
        }
        
        /**
         * Adds a log record at the NOTICE level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function notice($message, $context = array()){
            return \Monolog\Logger::notice($message, $context);
        }
        
        /**
         * Adds a log record at the WARNING level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function warning($message, $context = array()){
            return \Monolog\Logger::warning($message, $context);
        }
        
        /**
         * Adds a log record at the ERROR level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function error($message, $context = array()){
            return \Monolog\Logger::error($message, $context);
        }
        
        /**
         * Adds a log record at the CRITICAL level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function critical($message, $context = array()){
            return \Monolog\Logger::critical($message, $context);
        }
        
        /**
         * Adds a log record at the ALERT level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function alert($message, $context = array()){
            return \Monolog\Logger::alert($message, $context);
        }
        
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function emergency($message, $context = array()){
            return \Monolog\Logger::emergency($message, $context);
        }
        
        /**
         * Log a message to the logs.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */
        public static function log($level, $message, $context = array()){
            \Illuminate\Log\Writer::log($level, $message, $context);
        }
        
        /**
         * Dynamically pass log calls into the writer.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */
        public static function write($level, $message, $context = array()){
            \Illuminate\Log\Writer::write($level, $message, $context);
        }
        
        /**
         * Register a file log handler.
         *
         * @param string $path
         * @param string $level
         * @return void 
         * @static 
         */
        public static function useFiles($path, $level = 'debug'){
            \Illuminate\Log\Writer::useFiles($path, $level);
        }
        
        /**
         * Register a daily file log handler.
         *
         * @param string $path
         * @param int $days
         * @param string $level
         * @return void 
         * @static 
         */
        public static function useDailyFiles($path, $days = 0, $level = 'debug'){
            \Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
        }
        
        /**
         * Register a Syslog handler.
         *
         * @param string $name
         * @param string $level
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */
        public static function useSyslog($name = 'laravel', $level = 'debug'){
            return \Illuminate\Log\Writer::useSyslog($name, $level);
        }
        
        /**
         * Register an error_log handler.
         *
         * @param string $level
         * @param int $messageType
         * @return void 
         * @static 
         */
        public static function useErrorLog($level = 'debug', $messageType = 0){
            \Illuminate\Log\Writer::useErrorLog($level, $messageType);
        }
        
        /**
         * Register a new callback handler for when a log event is triggered.
         *
         * @param \Closure $callback
         * @return void 
         * @throws \RuntimeException
         * @static 
         */
        public static function listen($callback){
            \Illuminate\Log\Writer::listen($callback);
        }
        
        /**
         * Get the underlying Monolog instance.
         *
         * @return \Monolog\Logger 
         * @static 
         */
        public static function getMonolog(){
            return \Illuminate\Log\Writer::getMonolog();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            return \Illuminate\Log\Writer::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            \Illuminate\Log\Writer::setEventDispatcher($dispatcher);
        }
        
    }


    class Request extends \Illuminate\Support\Facades\Request{
        
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */
        public static function capture(){
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * Return the Request instance.
         *
         * @return $this 
         * @static 
         */
        public static function instance(){
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */
        public static function method(){
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */
        public static function root(){
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */
        public static function url(){
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */
        public static function fullUrl(){
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */
        public static function path(){
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * Get the current encoded path info for the request.
         *
         * @return string 
         * @static 
         */
        public static function decodedPath(){
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */
        public static function segment($index, $default = null){
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */
        public static function segments(){
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed  string
         * @return bool 
         * @static 
         */
        public static function is(){
            return \Illuminate\Http\Request::is();
        }
        
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */
        public static function ajax(){
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */
        public static function pjax(){
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */
        public static function secure(){
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * Returns the client IP address.
         *
         * @return string 
         * @static 
         */
        public static function ip(){
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * Returns the client IP addresses.
         *
         * @return array 
         * @static 
         */
        public static function ips(){
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */
        public static function exists($key){
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */
        public static function all(){
            return \Illuminate\Http\Request::all();
        }
        
        /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function input($key = null, $default = null){
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * Get a subset of the items from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */
        public static function only($keys){
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */
        public static function except($keys){
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function query($key = null, $default = null){
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasCookie($key){
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function cookie($key = null, $default = null){
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * Retrieve a file from the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\File\UploadedFile|array|null 
         * @static 
         */
        public static function file($key = null, $default = null){
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasFile($key){
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function header($key = null, $default = null){
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function server($key = null, $default = null){
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function old($key = null, $default = null){
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * Flash the input for the current request to the session.
         *
         * @param string $filter
         * @param array $keys
         * @return void 
         * @static 
         */
        public static function flash($filter = null, $keys = array()){
            \Illuminate\Http\Request::flash($filter, $keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function flashOnly($keys){
            \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function flashExcept($keys){
            \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Http\Request::flush();
        }
        
        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return void 
         * @static 
         */
        public static function merge($input){
            \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return void 
         * @static 
         */
        public static function replace($input){
            \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * Get the JSON payload for the request.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function json($key = null, $default = null){
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */
        public static function matchesType($actual, $type){
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */
        public static function isJson(){
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */
        public static function wantsJson(){
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */
        public static function accepts($contentTypes){
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
        
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */
        public static function prefers($contentTypes){
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
        
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */
        public static function acceptsJson(){
            return \Illuminate\Http\Request::acceptsJson();
        }
        
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */
        public static function acceptsHtml(){
            return \Illuminate\Http\Request::acceptsHtml();
        }
        
        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */
        public static function format($default = 'html'){
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */
        public static function bearerToken(){
            return \Illuminate\Http\Request::bearerToken();
        }
        
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Http\Request 
         * @static 
         */
        public static function createFromBase($request){
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return \Symfony\Component\HttpFoundation\Request The duplicated request
         * @static 
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */
        public static function session(){
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * Get the user making the request.
         *
         * @return mixed 
         * @static 
         */
        public static function user(){
            return \Illuminate\Http\Request::user();
        }
        
        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */
        public static function route($param = null){
            return \Illuminate\Http\Request::route($param);
        }
        
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @static 
         */
        public static function fingerprint(){
            return \Illuminate\Http\Request::fingerprint();
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */
        public static function getUserResolver(){
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function setUserResolver($callback){
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */
        public static function getRouteResolver(){
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function setRouteResolver($callback){
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */
        public static function toArray(){
            return \Illuminate\Http\Request::toArray();
        }
        
        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */
        public static function offsetExists($offset){
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */
        public static function offsetGet($offset){
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($offset, $value){
            \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */
        public static function offsetUnset($offset){
            \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource $content The raw body data
         * @static 
         */
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return \Symfony\Component\HttpFoundation\Request A new request
         * @static 
         */
        public static function createFromGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string $content The raw body data
         * @return \Symfony\Component\HttpFoundation\Request A Request instance
         * @static 
         */
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
         * @static 
         */
        public static function setFactory($callable){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */
        public static function overrideGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @static 
         */
        public static function setTrustedProxies($proxies){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies.
         * @static 
         */
        public static function getTrustedProxies(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */
        public static function setTrustedHosts($hostPatterns){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns.
         * @static 
         */
        public static function getTrustedHosts(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function setTrustedHeaderName($key, $value){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
         * @return string The header name
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function getTrustedHeaderName($key){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
         * @return string A normalized query string for the Request
         * @static 
         */
        public static function normalizeQueryString($qs){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */
        public static function enableHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static 
         */
        public static function getHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key the key
         * @param mixed $default the default value
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default);
        }
        
        /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
         * @static 
         */
        public static function getSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool 
         * @static 
         */
        public static function hasPreviousSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static 
         */
        public static function hasSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
         * @static 
         */
        public static function setSession($session){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */
        public static function getClientIps(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
         * the "client-ip" key.
         *
         * @return string The client IP address
         * @see getClientIps()
         * @see http://en.wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */
        public static function getClientIp(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */
        public static function getScriptName(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */
        public static function getPathInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */
        public static function getBasePath(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */
        public static function getBaseUrl(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */
        public static function getScheme(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via "setTrustedHeaderName()" with the "client-port" key.
         *
         * @return string 
         * @static 
         */
        public static function getPort(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */
        public static function getUser(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */
        public static function getPassword(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */
        public static function getUserInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */
        public static function getHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */
        public static function getRequestUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static 
         */
        public static function getSchemeAndHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static 
         */
        public static function getUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static 
         */
        public static function getUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
         * @return string The relative target path
         * @static 
         */
        public static function getRelativeUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static 
         */
        public static function getQueryString(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
         * the "client-proto" key.
         *
         * @return bool 
         * @static 
         */
        public static function isSecure(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via "setTrustedHeaderName()" with the "client-host" key.
         *
         * @return string 
         * @throws \UnexpectedValueException when the host name is invalid
         * @static 
         */
        public static function getHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * Sets the request method.
         *
         * @param string $method
         * @static 
         */
        public static function setMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */
        public static function getMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static 
         */
        public static function getRealMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
         * @return string The associated mime type (null if not found)
         * @static 
         */
        public static function getMimeType($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
         * @return string|null The format (null if not found)
         * @static 
         */
        public static function getFormat($mimeType){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */
        public static function setFormat($format, $mimeTypes){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request parameter
         *  * $default
         *
         * @param string $default The default format
         * @return string The request format
         * @static 
         */
        public static function getRequestFormat($default = 'html'){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * Sets the request format.
         *
         * @param string $format The request format.
         * @static 
         */
        public static function setRequestFormat($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static 
         */
        public static function getContentType(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * Sets the default locale.
         *
         * @param string $locale
         * @static 
         */
        public static function setDefaultLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * Sets the locale.
         *
         * @param string $locale
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc).
         * @return bool 
         * @static 
         */
        public static function isMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * Checks whether the method is safe or not.
         *
         * @return bool 
         * @static 
         */
        public static function isMethodSafe(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream.
         * @throws \LogicException
         * @static 
         */
        public static function getContent($asResource = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static 
         */
        public static function getETags(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @return bool 
         * @static 
         */
        public static function isNoCache(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static 
         */
        public static function getPreferredLanguage($locales = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static 
         */
        public static function getLanguages(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static 
         */
        public static function getCharsets(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static 
         */
        public static function getEncodings(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static 
         */
        public static function getAcceptableContentTypes(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * Returns true if the request is a XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */
        public static function isXmlHttpRequest(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
    }


    class Schema extends \Illuminate\Support\Facades\Schema{
        
        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool 
         * @static 
         */
        public static function hasTable($table){
            return \Illuminate\Database\Schema\Builder::hasTable($table);
        }
        
        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool 
         * @static 
         */
        public static function hasColumn($table, $column){
            return \Illuminate\Database\Schema\Builder::hasColumn($table, $column);
        }
        
        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool 
         * @static 
         */
        public static function hasColumns($table, $columns){
            return \Illuminate\Database\Schema\Builder::hasColumns($table, $columns);
        }
        
        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array 
         * @static 
         */
        public static function getColumnListing($table){
            return \Illuminate\Database\Schema\Builder::getColumnListing($table);
        }
        
        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function table($table, $callback){
            return \Illuminate\Database\Schema\Builder::table($table, $callback);
        }
        
        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function create($table, $callback){
            return \Illuminate\Database\Schema\Builder::create($table, $callback);
        }
        
        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function drop($table){
            return \Illuminate\Database\Schema\Builder::drop($table);
        }
        
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function dropIfExists($table){
            return \Illuminate\Database\Schema\Builder::dropIfExists($table);
        }
        
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function rename($from, $to){
            return \Illuminate\Database\Schema\Builder::rename($from, $to);
        }
        
        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function getConnection(){
            return \Illuminate\Database\Schema\Builder::getConnection();
        }
        
        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         * @return $this 
         * @static 
         */
        public static function setConnection($connection){
            return \Illuminate\Database\Schema\Builder::setConnection($connection);
        }
        
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function blueprintResolver($resolver){
            \Illuminate\Database\Schema\Builder::blueprintResolver($resolver);
        }
        
    }


    class Session extends \Illuminate\Support\Facades\Session{
        
        /**
         * Get the session configuration.
         *
         * @return array 
         * @static 
         */
        public static function getSessionConfig(){
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
        
        /**
         * Get the default session driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
        
        /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * Starts the session storage.
         *
         * @return bool True if session started.
         * @throws \RuntimeException If session fails to start.
         * @static 
         */
        public static function start(){
            return \Illuminate\Session\Store::start();
        }
        
        /**
         * Returns the session ID.
         *
         * @return string The session ID.
         * @static 
         */
        public static function getId(){
            return \Illuminate\Session\Store::getId();
        }
        
        /**
         * Sets the session ID.
         *
         * @param string $id
         * @static 
         */
        public static function setId($id){
            return \Illuminate\Session\Store::setId($id);
        }
        
        /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
         * @return bool 
         * @static 
         */
        public static function isValidId($id){
            return \Illuminate\Session\Store::isValidId($id);
        }
        
        /**
         * Returns the session name.
         *
         * @return mixed The session name.
         * @static 
         */
        public static function getName(){
            return \Illuminate\Session\Store::getName();
        }
        
        /**
         * Sets the session name.
         *
         * @param string $name
         * @static 
         */
        public static function setName($name){
            return \Illuminate\Session\Store::setName($name);
        }
        
        /**
         * Invalidates the current session.
         * 
         * Clears all session attributes and flashes and regenerates the
         * session and deletes the old session from persistence.
         *
         * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
         *                      will leave the system settings unchanged, 0 sets the cookie
         *                      to expire with browser session. Time is in seconds, and is
         *                      not a Unix timestamp.
         * @return bool True if session invalidated, false if error.
         * @static 
         */
        public static function invalidate($lifetime = null){
            return \Illuminate\Session\Store::invalidate($lifetime);
        }
        
        /**
         * Migrates the current session to a new session id while maintaining all
         * session attributes.
         *
         * @param bool $destroy Whether to delete the old session or leave it to garbage collection.
         * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
         *                       will leave the system settings unchanged, 0 sets the cookie
         *                       to expire with browser session. Time is in seconds, and is
         *                       not a Unix timestamp.
         * @return bool True if session migrated, false if error.
         * @static 
         */
        public static function migrate($destroy = false, $lifetime = null){
            return \Illuminate\Session\Store::migrate($destroy, $lifetime);
        }
        
        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */
        public static function regenerate($destroy = false){
            return \Illuminate\Session\Store::regenerate($destroy);
        }
        
        /**
         * Force the session to be saved and closed.
         * 
         * This method is generally not required for real sessions as
         * the session will be automatically saved at the end of
         * code execution.
         *
         * @static 
         */
        public static function save(){
            return \Illuminate\Session\Store::save();
        }
        
        /**
         * Age the flash data for the session.
         *
         * @return void 
         * @static 
         */
        public static function ageFlashData(){
            \Illuminate\Session\Store::ageFlashData();
        }
        
        /**
         * Checks if an attribute is defined.
         *
         * @param string $name The attribute name
         * @return bool true if the attribute is defined, false otherwise
         * @static 
         */
        public static function has($name){
            return \Illuminate\Session\Store::has($name);
        }
        
        /**
         * Returns an attribute.
         *
         * @param string $name The attribute name
         * @param mixed $default The default value if not found.
         * @return mixed 
         * @static 
         */
        public static function get($name, $default = null){
            return \Illuminate\Session\Store::get($name, $default);
        }
        
        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Session\Store::pull($key, $default);
        }
        
        /**
         * Determine if the session contains old input.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasOldInput($key = null){
            return \Illuminate\Session\Store::hasOldInput($key);
        }
        
        /**
         * Get the requested item from the flashed input array.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function getOldInput($key = null, $default = null){
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
        
        /**
         * Sets an attribute.
         *
         * @param string $name
         * @param mixed $value
         * @static 
         */
        public static function set($name, $value){
            return \Illuminate\Session\Store::set($name, $value);
        }
        
        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function put($key, $value = null){
            \Illuminate\Session\Store::put($key, $value);
        }
        
        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function push($key, $value){
            \Illuminate\Session\Store::push($key, $value);
        }
        
        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function flash($key, $value){
            \Illuminate\Session\Store::flash($key, $value);
        }
        
        /**
         * Flash a key / value pair to the session
         * for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function now($key, $value){
            \Illuminate\Session\Store::now($key, $value);
        }
        
        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void 
         * @static 
         */
        public static function flashInput($value){
            \Illuminate\Session\Store::flashInput($value);
        }
        
        /**
         * Reflash all of the session flash data.
         *
         * @return void 
         * @static 
         */
        public static function reflash(){
            \Illuminate\Session\Store::reflash();
        }
        
        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function keep($keys = null){
            \Illuminate\Session\Store::keep($keys);
        }
        
        /**
         * Returns attributes.
         *
         * @return array Attributes
         * @static 
         */
        public static function all(){
            return \Illuminate\Session\Store::all();
        }
        
        /**
         * Sets attributes.
         *
         * @param array $attributes Attributes
         * @static 
         */
        public static function replace($attributes){
            return \Illuminate\Session\Store::replace($attributes);
        }
        
        /**
         * Removes an attribute.
         *
         * @param string $name
         * @return mixed The removed value or null when it does not exist
         * @static 
         */
        public static function remove($name){
            return \Illuminate\Session\Store::remove($name);
        }
        
        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void 
         * @static 
         */
        public static function forget($keys){
            \Illuminate\Session\Store::forget($keys);
        }
        
        /**
         * Clears all attributes.
         *
         * @static 
         */
        public static function clear(){
            return \Illuminate\Session\Store::clear();
        }
        
        /**
         * Remove all of the items from the session.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Session\Store::flush();
        }
        
        /**
         * Checks if the session was started.
         *
         * @return bool 
         * @static 
         */
        public static function isStarted(){
            return \Illuminate\Session\Store::isStarted();
        }
        
        /**
         * Registers a SessionBagInterface with the session.
         *
         * @param \Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag
         * @static 
         */
        public static function registerBag($bag){
            return \Illuminate\Session\Store::registerBag($bag);
        }
        
        /**
         * Gets a bag instance by name.
         *
         * @param string $name
         * @return \Symfony\Component\HttpFoundation\Session\SessionBagInterface 
         * @static 
         */
        public static function getBag($name){
            return \Illuminate\Session\Store::getBag($name);
        }
        
        /**
         * Gets session meta.
         *
         * @return \Symfony\Component\HttpFoundation\Session\MetadataBag 
         * @static 
         */
        public static function getMetadataBag(){
            return \Illuminate\Session\Store::getMetadataBag();
        }
        
        /**
         * Get the raw bag data array for a given bag.
         *
         * @param string $name
         * @return array 
         * @static 
         */
        public static function getBagData($name){
            return \Illuminate\Session\Store::getBagData($name);
        }
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */
        public static function token(){
            return \Illuminate\Session\Store::token();
        }
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */
        public static function getToken(){
            return \Illuminate\Session\Store::getToken();
        }
        
        /**
         * Regenerate the CSRF token value.
         *
         * @return void 
         * @static 
         */
        public static function regenerateToken(){
            \Illuminate\Session\Store::regenerateToken();
        }
        
        /**
         * Get the previous URL from the session.
         *
         * @return string|null 
         * @static 
         */
        public static function previousUrl(){
            return \Illuminate\Session\Store::previousUrl();
        }
        
        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void 
         * @static 
         */
        public static function setPreviousUrl($url){
            \Illuminate\Session\Store::setPreviousUrl($url);
        }
        
        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void 
         * @static 
         */
        public static function setExists($value){
            \Illuminate\Session\Store::setExists($value);
        }
        
        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface 
         * @static 
         */
        public static function getHandler(){
            return \Illuminate\Session\Store::getHandler();
        }
        
        /**
         * Determine if the session handler needs a request.
         *
         * @return bool 
         * @static 
         */
        public static function handlerNeedsRequest(){
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
        
        /**
         * Set the request on the handler instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return void 
         * @static 
         */
        public static function setRequestOnHandler($request){
            \Illuminate\Session\Store::setRequestOnHandler($request);
        }
        
    }


    class Storage extends \Illuminate\Support\Facades\Storage{
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function drive($name = null){
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function disk($name = null){
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
        
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function createLocalDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
        
        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function createFtpDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createFtpDriver($config);
        }
        
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */
        public static function createS3Driver($config){
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
        
        /**
         * Create an instance of the Rackspace driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */
        public static function createRackspaceDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver($config);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
        
    }


}

