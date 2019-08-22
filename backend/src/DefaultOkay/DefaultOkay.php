<?php
    namespace App\DefaultOkay;

    use App\Shared\Base\HTTPInput as BaseClass;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class DefaultOkay extends BaseClass
{
    public function __invoke(Request $request, Response $response, array $args) : Response
    {
        return $response->withStatus(200)
            ->withJson([
                'okay',
            ]);
    }
}
