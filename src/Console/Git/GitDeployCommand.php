<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Cli\Console\Git;

use Radic\Cli\Console\Command;
use vierbergenlars\SemVer\version;

class GitDeployCommand extends Command
{

    protected $name = 'git:deploy';

    protected $description = 'Do a version bump and push it';


    /**
     * {@inheritdoc}
     */
    public function fire()
    {

        exec('git symbolic-ref -q HEAD', $ref);
        $branch = last(explode('/', head($ref)));

        $version    = $this->getVersion();
        $message    = $this->ask('Commit (not tag) message before tagging?', 'Commiting before tagging ' . $version->valid());
        $tagMessage = $this->ask('Tag message?', 'Tagging ' . $version->valid());

        $this->comment('Starting deployment');
        passthru('git add -A');
        passthru('git commit -m "' . $message . '"');
        passthru('git push -u origin ' . $branch);

        passthru('git tag -a ' . $version->valid() . ' -m "' . $tagMessage . '"');
        passthru('git push -u origin ' . $version->valid());

        $this->info('All done sire');
    }

    /**
     * getVersion
     *
     * @return version
     */
    protected function getVersion()
    {

        exec('git describe --abbrev=0 --tags', $lastTag);
        if (empty($lastTag)) {
            $version = $this->ask('Initial deployment version', '1.0.0');
        } else {
            $version = head($lastTag);
        }
        try {
            $semver = new version($version);
            if (! empty($lastTag)) {
                $bumpType = $this->select('Type of version bump?', [
                    'patch' => 'Patch to ' . $semver->inc('patch')->valid(),
                    'minor' => 'Minor to ' . $semver->inc('minor')->valid(),
                    'major' => 'Major to ' . $semver->inc('major')->valid(),
                ], 'patch');
                $semver   = new version($version);
                $semver->inc($bumpType);
            }
        } catch (\RuntimeException $e) {
            $this->error($e->getMessage());
            exit;
        }

        return $semver;
    }
}
