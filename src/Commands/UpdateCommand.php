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
    protected $requireSudo = true;
    protected $name = 'update';
    protected $description = 'Update Radic CLI to the latest version';
    const MANIFEST_FILE = 'http://robinradic.github.io/radic-php-cli/manifest.json';

    public function fire()
    {
        $mf = json_decode(file_get_contents(self::MANIFEST_FILE), true);

        $this->info('Attempting to update');
        $this->comment('Current version is: ' . $this->style('cyan', radic()->getVersion()));
        $this->comment('Newest version is: ' . $this->style('cyan', $mf[0]['version']));

        if( PHP_OS === 'Linux' and ! radic()->hasRootAccess() )
        {
            $this->error('Update requires super user permissions');
        }

        $manager = new Manager(Manifest::loadFile(self::MANIFEST_FILE));
        $manager->update($this->getApplication()->getVersion(), true);

        $this->info('All done sire!');
    }
}
