<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Google;

use Google_Client;

/**
 * Class Client
 *
 * @package     Radic\Google
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class Client
{

    /**
     * @var \Google_Client
     */
    protected $client;

    /**
     * Instanciates the class
     */
    public function __construct()
    {


    }

    /**
     * getClient
     *
     * @return \Google_Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
