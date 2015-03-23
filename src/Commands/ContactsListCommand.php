<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Radic\Commands\Traits\GoogleClientTrait;
use Radic\Google\Contacts;
use Symfony\Component\Console\Input\InputArgument;

class ContactsListCommand extends Command
{
    use GoogleClientTrait;

    protected $name = 'contacts:list';

    protected $description = 'List Google Contacts';

    protected $help = "Yo mama";

    public function fire()
    {
        $client   = $this->getGoogleClient();
        $contacts = new Contacts($client);
        $this->dump($list = $contacts->getList($this->argument('search_string')));
        $rows = [];
        foreach ($list as $contact)
        {
            foreach ($contact['numbers'] as $i => $number)
            {
                $rows[] = [
                    $i === 0 ? $contact['_id'] : '',
                    $i === 0 ? $contact['name'] : '',
                    $number['type'],
                    $number['pretty']
                ];
            }
        }
        $this->table(['ID', 'Name', 'Type', 'Numbers'], $rows);
    }


    protected function getArguments()
    {
        return [
            ['search_string', InputArgument::OPTIONAL, 'The search string', null],
        ];
    }
}
