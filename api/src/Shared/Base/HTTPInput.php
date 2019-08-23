<?php
    namespace App\Shared\Base;

/**
 * Base class for accepting HTTP requests to the app
 * @author Marvin Isaac <misaac@pushnami.com>
 */
abstract class HTTPInput
{
    /**
     * Instance of app container
     * @access protected
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    /**
     * Child class requires an instance of the app container for internal dependencies
     * @access public
     * @param \Psr\Container\ContainerInterface $container
     */
    public function __construct(\Psr\Container\ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Entry point after Slim resolves a route and calls the route handler
     * @access public
     * @param \Slim\Http\Request $request
     * @param \Slim\Http\Response $response
     * @param array $args
     * @return \Slim\Http\Response
     */
    abstract public function __invoke(
        \Slim\Http\Request $request,
        \Slim\Http\Response $response,
        array $args
    ) : \Slim\Http\Response;
}
