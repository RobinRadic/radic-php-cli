<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Cli\Console\Config;

use Radic\Cli\Console\Command;

class ConfigInitCommand extends Command
{

    protected $name = 'config:init';

    protected $description = 'Create a new config file and interactively set the minimal required values';

    protected $requiredConfig = [
        'github.token'    => 'Github oauth token',
        'github.username' => 'Github username',
        'user.name' => 'Your name',
        'user.last_name' => 'Your last name',
        'user.email' => 'Your email',
        'user.url' => 'Your website',
        'license.url' => 'Url to license (MIT)'
    ];

    public function fire()
    {

        $isConfigured = app()->config->get('configured', false);
        $config       = [];
        foreach ($this->requiredConfig as $key => $desc) {
            $default = null;
            if ($isConfigured) {
                $default = app()->config->get($key, null);
            }
            #$this->dump(['default' => $default, 'co' => $isConfigured]);
            $config[$key] = $this->ask(
                $this->style(['bg_black', 'green'], $key) .
                $this->style('bg_black', ' (' . $desc . '):') .
                (is_null($default) ? '' : " [$default]"),
                $default
            );
        }


        app()->config
            ->set(app()->config->getDefaults())
            ->set($config)
            ->set('configured', true)
            ->save();

        $this->info('All set and done sire!');
    }
}
