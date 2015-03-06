<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


class ConfigInitCommand extends Command
{
    protected $name = 'config:init';
    protected $description = 'Initialize a new config file and start a wizard to set the minimal required values';

    protected $requiredConfig = [
        'github.token' => 'Github oauth token',
        'github.username' => 'Github username'
    ];

    public function fire()
    {
        $config = [];
        foreach($this->requiredConfig as $key => $desc){
            $config[$key] = $this->ask($this->style(['bg_black', 'green'], $key) . ' (' . $desc . '):');
        }

        radic()->config()->set($config)->set('configured', true)->save();

        $this->info('All set and done sire!');
    }
}
