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

        defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
        $accessToken = radic()->config->get('google.token');

        $client = new \Google_Client();
        $client->setClientId('');
        $client->setClientSecret('');
        $client->setRedirectUri('urn:ietf:wg:oauth:2.0:oob');
        #$client->set
        $client->setScopes(array(
            'https://www.google.com/m8/feeds',
        ));

        $client->setAccessType('offline');

        $authUrl = $client->createAuthUrl();

        if(!$accessToken)
        {
            print "Please visit:\n$authUrl\n\n";
            print "Please enter the auth code:\n";
            $authCode = trim(fgets(STDIN));

            #$_GET['code'] = $authCode;
            $accessToken = $client->authenticate($authCode);
            radic()->config->set('google.token', $accessToken)->save();
        }

        $client->setAccessToken($accessToken);

        $request = new \Google_Http_Request('https://www.google.com/m8/feeds/contacts/default/full');
        $request->setQueryParam('max-results', '200');
        $response = $client->getAuth()->authenticatedRequest($request);

        $responseBody = $response->getResponseBody();
        $this->dump($responseBody);

        $feed = simplexml_load_string($responseBody);
        $feed->registerXPathNamespace('gd', 'http://schemas.google.com/g/2005');
        #$arr = json_decode(json_encode((array) $feed), 1);

        foreach($feed->entry as $entry){
            $this->info($entry->title);
            $phoneNrs = $entry->xpath('gd:phoneNumber');
            #$this->line($entry->xpath('gd:phoneNumber')[0]->);
            foreach($phoneNrs as $phoneNr){
                $this->line($phoneNr->__toString());
            }
            #$this->dump($entry->children('gd:phoneNumber')->);
        }
       # $feed->

    }
}
