<?php
    namespace App\Shared\Base;
    
    use App\Shared\Interfaces\OutputInterface;

/**
 * Base class for sending HTTP responses from the app
 * @author Marvin Isaac <misaac@pushnami.com>
 */
abstract class HTTPOutput implements OutputInterface
{
    /**
     * Instance of Slim\Http\Response
     * @access protected
     * @var \Slim\Http\Response
     */
    protected $response;

    /**
     * Child class requires a copy of the Response so far. Middlewares might have modified the Response and those
     * modifications must be passed on
     * @access public
     * @param \Slim\Http\Response $response
     */
    public function __construct(\Slim\Http\Response $response)
    {
        $this->response = $response;
    }
}
