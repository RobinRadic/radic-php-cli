<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Google;

use Google_Client;
use Google_Http_Request;
use SimpleXMLElement;

/**
 * Class Contacts
 *
 * @package     Radic\Google
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class Contacts
{

    /**
     * @var \Google_Client
     */
    protected $client;

    /** @var array */
    protected $queryParams = [
        'max-results' => '200'
    ];

    /** @var \Google_Http_Request */
    protected $response;

    /** @var array */
    protected $contacts;


    /**
     * Instanciates the class
     */
    public function __construct(Google_Client $client)
    {
        $this->client = $client;
    }

    /**
     * makeRequest
     *
     * @return \Google_Http_Request
     */
    protected function makeRequest()
    {
        $request = new Google_Http_Request('https://www.google.com/m8/feeds/contacts/default/full');
        foreach ($this->queryParams as $k => $v)
        {
            $request->setQueryParam($k, $v);
        }

        return $request;
    }

    protected function send(Google_Http_Request $request)
    {
        $this->response = $this->client->getAuth()->authenticatedRequest($request);
        $feed           = simplexml_load_string($this->response->getResponseBody());
        $feed->registerXPathNamespace('gd', 'http://schemas.google.com/g/2005');

        return $feed;
    }

    protected function getPhoneNumberType(SimpleXMLElement $number)
    {
        $type = str_replace('http://schemas.google.com/g/2005#', '', $number->rel);
        if ( strlen($type) === 0 )
        {
            $type = 'other';
        }

        return $type;
    }

    protected function prettifyPhoneNumber($number)
    {
        $pretty = str_replace('tel:+31-', '0', $number->uri);

        return $pretty;
    }

    protected function search($array, $key, $value)
    {
        $results = array();

        if ( is_array($array) )
        {
            if ( isset($array[$key]) && $array[$key] == $value )
            {
                $results[] = $array;
            }

            foreach ($array as $subarray)
            {
                $results = array_merge($results, $this->search($subarray, $key, $value));
            }
        }

        return $results;
    }

    public function getList($searchString = null)
    {
        if ( ! isset($this->contacts) )
        {
            $request        = $this->makeRequest();
            $feed           = $this->send($request);
            $this->contacts = [];

            for($i = 0; $i < count($feed->entry); $i++)
            {
                $entry = $feed->entry[$i];
                $contact      = [
                    '_id' => $i,
                    'id'      => (string)$entry->id,
                    'name'    => (string)$entry->title,
                    'numbers' => []
                ];
                $phoneNumbers = $entry->xpath('gd:phoneNumber');
                foreach ($phoneNumbers as $number)
                {
                    $nr                   = $number->attributes();
                    $contact['numbers'][] = [
                        'type'   => $this->getPhoneNumberType($nr),
                        'full'   => (string)$nr->uri,
                        'pretty' => $this->prettifyPhoneNumber($nr)
                    ];
                }
                $this->contacts[] = $contact;
            }
        }

        if ( ! is_null($searchString) )
        {
            return $this->search($this->contacts, 'name', $searchString);
        }
        else
        {
            return $this->contacts;
        }
    }
}
