<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Arr;
use Radic\Path;

class TestTwoCommand extends Command
{

    protected $name = 'test:two';

    protected $description = 'Test 2';

    protected $help = "Yo mama";

    public function fire()
    {
        $client = new \Google_Client();
        $client->setApplicationName('radic-cli-' . gethostname());

        $user_to_impersonate = 'robinradic30@gmail.com';
        $cred = new \Google_Auth_AssertionCredentials(
            '',
            'https://www.google.com/m8/feeds',
            radic()->fs->get(radic()->path('storage', 'p12')),
            'notasecret',                                 // Default P12 password
            'http://oauth.net/grant_type/jwt/1.0/bearer', // Default grant type
            $user_to_impersonate
        );

        $client->setAssertionCredentials($cred);
        if($client->getAuth()->isAccessTokenExpired())
        {
            $client->getAuth()->refreshTokenWithAssertion();
        }

        $result = $client->getAuth()->authenticatedRequest(new \Google_Http_Request('/m8/feeds/contacts/default/full'));

        $this->dump($result);

    }
}
