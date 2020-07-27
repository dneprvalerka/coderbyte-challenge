<?php

class RequestClient extends Request
{
    /**
     * RequestClient constructor
     */
    public function __construct()
    {
    }

    /**
     * Send a HEAD request
     *
     * @param string $url
     * @param array $headers
     * @return string
     * @throws Exception
     */
    public function head(string $url, array $headers = []): string
    {
        return $this->sendRequest($url, 'HEAD', $headers);
    }

    /**
     * Send a GET request
     *
     * @param string $url
     * @param array $headers
     * @return string
     * @throws Exception
     */
    public function get(string $url, array $headers = []): string
    {
        return $this->sendRequest($url, 'GET', $headers);
    }

    /**
     * Send an OPTIONS request
     *
     * @param string $url
     * @param array $headers
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function options(string $url, array $headers = [], array $data = []): string
    {
        return $this->sendRequest($url, 'OPTIONS', $headers, $data);
    }

    /**
     * Send a POST request
     *
     * @param string $url
     * @param array $headers
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function post(string $url, array $headers = [], array $data = []): string
    {
        return $this->sendRequest($url, 'POST', $headers, $data);
    }

    /**
     * Send a PUT request
     *
     * @param string $url
     * @param array $headers
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function put(string $url, array $headers = [], array $data = []): string
    {
        return $this->sendRequest($url, 'PUT', $headers, $data);
    }

    /**
     * Send a PATCH request
     *
     * @param string $url
     * @param array $headers
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function patch(string $url, array $headers = [], array $data = []): string
    {
        return $this->sendRequest($url, 'PATCH', $headers, $data);
    }

    /**
     * Send a DELETE request
     *
     * @param string $url
     * @param array $headers
     * @return string
     * @throws Exception
     */
    public function delete(string $url, array $headers = []): string
    {
        return $this->sendRequest($url, 'DELETE', $headers);
    }
}
