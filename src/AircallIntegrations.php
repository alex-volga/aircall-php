<?php

namespace Aircall;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Class AircallIntegrations.
 */
class AircallIntegrations
{
    const BASE_ENDPOINT = 'integrations';

    /** @var AircallClient */
    private $client;

    public function __construct(AircallClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieve Integration information
     *
     * @return mixed
     * @throws GuzzleException
     *
     */
    public function get()
    {
        return $this->client->get(self::BASE_ENDPOINT . '/me');
    }

    /**
     * Enable Integration
     *
     * @return mixed
     * @throws GuzzleException
     *
     */
    public function enable(bool $install = false)
    {
        return $this->client->post(self::BASE_ENDPOINT . '/enable', ['install' => $install]);
    }

    /**
     * Disable Integration
     *
     * @return mixed
     * @throws GuzzleException
     *
     */
    public function disable()
    {
        return $this->client->post(self::BASE_ENDPOINT . '/disable');
    }
}
