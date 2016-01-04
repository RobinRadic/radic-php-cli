<?php
/**
 * Part of the Sebwite PHP packages.
 *
 * License and copyright information bundled with this package in the LICENSE file
 */


namespace Radic\Cli\Console\Config;


use Symfony\Component\Console\Output\OutputInterface;

class ConfigCommand extends \Radic\Cli\Console\Command
{

    protected $signature = 'config
                            {key? : Key}
                            {val? : Val}';

    public function handle()
    {
        $config = app()->config;
        $key    = $this->argument('key');
        $val    = $this->argument('val');

        if ( $val === null )
        {
            $this->listConfig($key);
        }
        else
        {
            $this->editConfig($key, $val);
        }
    }

    protected function editConfig($key, $val)
    {
        app()->config->persist($key, $val);
        $this->comment("Changed [{$key}] to [{$val}] and saved to database");
    }

    protected function listConfig($key)
    {
        $config = app()->config;

        if ( $key !== null )
        {
            if ( !$config->has($key) )
            {
                return $this->error("Config key [{$key}] does not exist");
            }

            $config = $config->get($key);
        }
        else
        {
            $config = $config->all();
        }
        if ( !is_array($config) )
        {
            $config = [ $key => $config ];
        }
        foreach ( array_dot($config) as $key => $value )
        {
            $this->output->writeln('[<comment>' . $key . '</comment>] <info>' . $value . '</info>');
        }
    }

    protected function key()
    {
        $key = $this->argument('key');
        if ( $key === null )
        {
            return '';
        }

        return $key;
    }

    protected function listConfiguration(array $contents, array $rawContents, OutputInterface $output, $k = null)
    {
        $origK = $k;
        foreach ( $contents as $key => $value )
        {
            if ( $k === null && !in_array($key, [ 'config', 'repositories' ]) )
            {
                continue;
            }
            $rawVal = isset($rawContents[ $key ]) ? $rawContents[ $key ] : null;
            if ( is_array($value) && (!is_numeric(key($value)) || ($key === 'repositories' && null === $k)) )
            {
                $k .= preg_replace('{^config\.}', '', $key . '.');
                $this->listConfiguration($value, $rawVal, $output, $k);
                $k = $origK;
                continue;
            }
            if ( is_array($value) )
            {
                $value = array_map(function ($val)
                {
                    return is_array($val) ? json_encode($val) : $val;
                }, $value);
                $value = '[' . implode(', ', $value) . ']';
            }
            if ( is_bool($value) )
            {
                $value = var_export($value, true);
            }
            if ( is_string($rawVal) && $rawVal != $value )
            {
                $output->writeln('[<comment>' . $k . $key . '</comment>] <info>' . $rawVal . ' (' . $value . ')</info>');
            }
            else
            {
                $output->writeln('[<comment>' . $k . $key . '</comment>] <info>' . $value . '</info>');
            }
        }
    }

}
