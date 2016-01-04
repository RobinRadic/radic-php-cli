<?php namespace Radic\Console\Traits;

/**
 * Part of the Radic packages.
 */

trait GoogleClientTrait
{

    protected $googleClientScopes = [
        'https://www.google.com/m8/feeds',
    ];

    /** @var \Google_Client */
    protected $googleClient;

    public function getGoogleClient()
    {
        if (isset($this->googleClient) and $this->googleClient instanceof \Google_Client) {
            return $this->googleClient;
        }

        defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
        $accessToken = app()->config->get('google.token');

        $client = new \Google_Client();
        $client->setClientId(app()->config->get('google.client_id'));
        $client->setClientSecret(app()->config->get('google.client_secret'));
        $client->setRedirectUri('urn:ietf:wg:oauth:2.0:oob');
        #$client->set
        $client->setScopes($this->googleClientScopes);

        $client->setAccessType('offline');

        $authUrl = $client->createAuthUrl();

        if (! $accessToken) {
            print "Please visit:\n$authUrl\n\n";
            print "Please enter the auth code:\n";
            $authCode = trim(fgets(STDIN));

            #$_GET['code'] = $authCode;
            $accessToken = $client->authenticate($authCode);
            app()->config->set('google.token', $accessToken)->save();
        }

        $client->setAccessToken($accessToken);

        $this->googleClient = $client;
        return $this->googleClient;
    }
}
