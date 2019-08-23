<?php
    namespace App\DefaultOkay;

    use App\Shared\Base\HTTPInput as BaseClass;

/**
 * Class to handle routes/requests that are under development or just a passthrough (i.e. for checking sessions)
 * @author Marvin Isaac <misaac@pushnami.com>
 */
final class DefaultOkay extends BaseClass
{
    /**
     * Overrides abstract method from base class. Returns a blank response with 200 HTTP status
     * @access public
     * @param \Slim\Http\Request $request
     * @param \Slim\Http\Response $response
     * @param array $args
     * @return \Slim\Http\Response
     */
    public function __invoke(
        \Slim\Http\Request $request,
        \Slim\Http\Response $response,
        array $args
    ) : \Slim\Http\Response {
        return $response->withStatus(200)
            ->withJson([
                'okay',
            ]);
    }
}
