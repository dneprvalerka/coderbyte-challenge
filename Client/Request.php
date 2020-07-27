<?php

class Request
{
    /**
     * Request constructor
     */
    public function __construct()
    {
    }

    /**
     * @param array $data
     * @return string
     */
    public function prepareData(array $data = []): string
    {
        return http_build_query($data);
    }

    /**
     * @param array $headers
     * @return string
     */
    public function prepareHeaders(array $headers = []): string
    {
        $headersString = '';

        if (!empty($headers)) {
            foreach ($headers as $key => $value) {
                $headersString .= "$key: $value\r\n";
            }
        }

        return $headersString;
    }

    /**
     * @param string $url
     * @param string $method
     * @param array $headers
     * @param array $data
     * @return string
     * @throws Exception
     */
    public function sendRequest(string $url, string $method = 'GET', array $headers = [], array $data = []): string
    {
        $urlEncoded = $this->prepareData($data);
        $headersEncoded = $this->prepareHeaders($headers);

        # Set response options
        $options = [
            'http' =>
                [
                    'method'  => $method,
                    'header'  => $headersEncoded,
                    'content' => $urlEncoded
                ]
        ];

        # Create stream context resource with options
        $streamContext  = stream_context_create($options);

        # Send request
        $response = file_get_contents($url, false, $streamContext);

        if ($response === false) {
            $error = error_get_last();

            throw new Exception('Request failed: ' . $error['message']);
        }

        return $response;
    }
}
