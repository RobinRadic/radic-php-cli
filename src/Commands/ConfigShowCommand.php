<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;

use Illuminate\Support\Arr;
class ConfigShowCommand extends Command
{
    protected $name = 'config:show';
    protected $description = 'Show all config values';

    public function fire()
    {
       # $this->dump($config);

        $rows = [];
        foreach(Arr::dot(radic()->config->all()) as $key => $val){
            if(is_bool($val))
            {
                $val = $val === true ? $this->style('green', 'true') : $this->style('red', 'false');
            }
            $rows[] = [$key, $val];
        }
        $this->table(['Key/Path', 'Value'], $rows);
    }
}
