<?php namespace Stevenmaguire\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class UberResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array  $response
     */
    public function __construct(array $response = array())
    {
        $this->response = $response;
    }

    /**
     * Get user email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->response['email'] ?: null;
    }

    /**
     * Get user firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->response['first_name'] ?: null;
    }

    /**
     * Get user imageurl
     *
     * @return string|null
     */
    public function getImageurl()
    {
        return $this->response['picture'] ?: null;
    }

    /**
     * Get user lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->response['last_name'] ?: null;
    }

    /**
     * Get user userId
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->response['uuid'] ?: null;
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
