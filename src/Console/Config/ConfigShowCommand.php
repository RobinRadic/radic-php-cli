<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Cli\Console\Config;

use Illuminate\Support\Arr;
use Radic\Cli\Console\Command;

class ConfigShowCommand extends Command
{
    protected $name = 'config:show';
    protected $description = 'Show all config values';

    public function fire()
    {
       # $this->dump($config);

        $rows = [];
        foreach (Arr::dot(app()->config->all()) as $key => $val) {
            if (is_bool($val)) {
                $val = $val === true ? $this->style('green', 'true') : $this->style('red', 'false');
            }
            $rows[] = [$key, $val];
        }
        $this->table(['Key/Path', 'Value'], $rows);
    }
}
