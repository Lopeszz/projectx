<?php

namespace GuzzleHttp;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface MessageFormatterInterface
{
    /**
     * Returns a formatted message string.
     *
     * @param RequestInterface       $request  Request that was sent
     * @param ResponseInterface|null $response Response that was received
     * @param \Throwable|null        $error    Exception that was received
     */
<<<<<<< HEAD
    public function format(RequestInterface $request, ResponseInterface $response = null, \Throwable $error = null): string;
=======
    public function format(RequestInterface $request, ?ResponseInterface $response = null, ?\Throwable $error = null): string;
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
}
