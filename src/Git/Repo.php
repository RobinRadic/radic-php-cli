<?php
 /**
 * Part of the Radic packages.
 */
namespace Radic\Git;

use Github\Client;
/**
 * Class Repo
 *
 * @package     Radic\Git
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class Repo
{

    protected $username;

    protected $repository;

    protected $gh;

    /**
     * Instanciates the class
     */
    public function __construct($username, $repository, Client $gh)
    {
        $this->username   = $username;
        $this->repository = $repository;
        $this->gh         = $gh;
    }

    function __call($name, $arguments)
    {
        return call_user_func_array([$this->gh->repo()->contents(), $name], array_merge([$this->username, $this->repository], $arguments));
    }
}
