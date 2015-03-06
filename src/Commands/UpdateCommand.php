<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;

use Herrera\Phar\Update\Manager;
use Herrera\Phar\Update\Manifest;
use Illuminate\Support\Arr;
class UpdateCommand extends Command
{
    protected $name = 'update';
    protected $description = 'Update Radic CLI to the latest version';
    const MANIFEST_FILE = 'http://robinradic.github.io/radic-php-cli/manifest.json';

    public function fire()
    {
        $manager = new Manager(Manifest::loadFile(self::MANIFEST_FILE));
        $manager->update($this->getApplication()->getVersion(), true);
    }
}
