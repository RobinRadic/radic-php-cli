<?php

namespace Radic\Foundation\Bootstrap;

use Illuminate\Contracts\Foundation\Application;
use Sebwite\Support\Filesystem;
use Sebwite\Support\Path;

class ExportAppFolder
{
    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    public function bootstrap(Application $app)
    {
        $fs = new Filesystem;
        $appPath = Path::join(__DIR__, '..', '..', 'app');
        $fs->copyDirectory($appPath, export_path());
    }


}
