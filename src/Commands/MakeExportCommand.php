<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


class MakeExportCommand extends Command
{

    protected $name = 'make:export';

    protected $description = 'Exports all stub template files to enable modifying them';

    public function fire()
    {
        $this->comment('Exporting stubs..');
        $stubPath        = __DIR__ . '/../stubs';
        $files           = scandir($stubPath);
        $destinationPath = path_join(storage_path(), 'stubs');

        if ( ! radic()->fs->exists($destinationPath) )
        {
            radic()->fs->makeDirectory($destinationPath, 0755, true);
        }

        foreach ( $files as $file )
        {
            if ( $file === '.' or $file === '..' )
            {
                continue;
            }

            $fileContent = file_get_contents(path_join($stubPath, $file));

            radic()->fs->put(
                path_join($destinationPath, $file),
                $fileContent
            );
        }

        $this->info('All done sire!');
    }
}
