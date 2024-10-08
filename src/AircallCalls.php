<?php

namespace Aircall;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Class AircallCalls.
 *
 * @see http://developer.aircall.io/#call
 */
class AircallCalls
{
    const BASE_ENDPOINT = 'calls';

    /** @var AircallClient */
    private $client;

    public function __construct(AircallClient $client)
    {
        $this->client = $client;
    }

    /**
     * Lists Calls.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function list(array $options = [])
    {
        return $this->client->get(self::BASE_ENDPOINT, $options);
    }

    /**
     * Retrieve a single Call.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function get(int $id)
    {
        $path = $this->callPath($id);

        return $this->client->get($path);
    }

    /**
     * Search Calls.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function search(array $options = [])
    {
        return $this->client->get(self::BASE_ENDPOINT.'/search', $options);
    }

    /**
     * Display a link in-app to the User who answered a specific Call.
     *
     * @deprecated since 2019-11-21 available on the Call object
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function link(int $id, array $options = [])
    {
        $path = $this->callPath($id);

        return $this->client->post($path.'/link', $options);
    }

    /**
     * Transfer the Call to another user.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function transfers(int $id, array $options = [])
    {
        $path = $this->callPath($id);

        return $this->client->post($path.'/transfers', $options);
    }

    /**
     * Comment the Call.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function comment(int $id, array $options = [])
    {
        $path = $this->callPath($id);

        return $this->client->post($path.'/comments', $options);
    }

    /**
     * Pause recording on a live Call.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function pauseRecording(int $id, array $options = [])
    {
        $path = $this->callPath($id);

        return $this->client->post($path.'/pause_recording', $options);
    }

    /**
     * Resume recording on a live Call.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function resumeRecording(int $id, array $options = [])
    {
        $path = $this->callPath($id);

        return $this->client->post($path.'/resume_recording', $options);
    }

    /**
     * Display custom informations during a Call in the Phone app.
     *
     * @deprecated since 2019-11-21 available on the Call object
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function getMetadata(int $id, array $options = [])
    {
        $path = $this->callPath($id);

        return $this->client->post($path.'/metadata', $options);
    }

    /**
     * Set the Tags for a specific Call.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function setTags(int $id, array $options = [])
    {
        $path = $this->callPath($id);

        return $this->client->post($path.'/tags', $options);
    }

    /**
     * Delete the recording of a specific Call.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function deleteRecording(int $id)
    {
        $path = $this->callPath($id);

        return $this->client->delete($path.'/recording');
    }

    /**
     * Delete the voicemail of a specific Call.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function deleteVoicemail(int $id, array $options = [])
    {
        $path = $this->callPath($id);

        return $this->client->delete($path.'/voicemail', $options);
    }

    /**
     * Add Insight Cards display custom data to Agents in their Phone apps during ongoing Calls.
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function addInsightCards(int $id, array $options = [])
    {
        $path = $this->callPath($id);

        return $this->client->post($path.'/insight_cards', $options);
    }

    /**
     * Archive a Call
     * @see https://developer.aircall.io/api-references/#archive-a-call
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function archive(int $id)
    {
        $path = $this->callPath($id);

        return $this->client->put($path.'/archive');
    }

    /**
     * Unarchive a Call
     * @see https://developer.aircall.io/api-references/#unarchive-a-call
     *
     * @throws GuzzleException
     *
     * @return mixed
     */
    public function unarchive(int $id)
    {
        $path = $this->callPath($id);

        return $this->client->put($path.'/unarchive');
    }

    /**
     * Retrieve a transcription
     *
     * @param int|string $callId
     * @return mixed
     */
    public function transcription(int|string $callId)
    {
        $path = $this->callPath($callId);

        return $this->client->get($path.'/transcription');
    }

    /**
     * Retrieve sentiments
     *
     * @param int|string $callId
     * @return mixed
     */
    public function sentiments(int|string $callId)
    {
        $path = $this->callPath($callId);

        return $this->client->get($path.'/sentiments');
    }

    /**
     * Retrieve topics
     *
     * @param int|string $callId
     * @return mixed
     */
    public function topics(int|string $callId)
    {
        $path = $this->callPath($callId);

        return $this->client->get($path.'/topics');
    }

    /**
     * Retrieve a summary
     *
     * @param int|string $callId
     * @return mixed
     */
    public function summary(int|string $callId)
    {
        $path = $this->callPath($callId);

        return $this->client->get($path.'/summary');
    }


    public function callPath(int $id): string
    {
        return self::BASE_ENDPOINT.'/'.$id;
    }
}
