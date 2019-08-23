<?php
    namespace App\DefaultForbidden;

    use App\Shared\Base\HTTPInput as BaseClass;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class DefaultForbidden extends BaseClass
{
    public function __invoke(Request $request, Response $response, array $args) : Response
    {
        return $response->withStatus(403);
    }
}
