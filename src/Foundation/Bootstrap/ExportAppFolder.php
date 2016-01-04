<?php

namespace Radic\Cli\Foundation\Bootstrap;

use Illuminate\Contracts\Config\Repository as RepositoryContract;
use Illuminate\Contracts\Foundation\Application;
use Sebwite\Support\Filesystem;
use Sebwite\Support\Path;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

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
