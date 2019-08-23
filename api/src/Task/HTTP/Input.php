<?php
    namespace App\Task\HTTP;

    use App\Shared\Base\HTTPInput;
    use App\Task\HTTP\Output;
    use App\Task\HTTP\Storage;
    use App\Task\Task;

final class Input extends HTTPInput
{
    public function __invoke(
        \Slim\Http\Request $request,
        \Slim\Http\Response $response,
        array $args
    ) : \Slim\Http\Response {
        $request_method = $request->getMethod();
        if ($request_method === 'GET') {
            $input = (array) $request->getQueryParams() ?? [];
        } else {
            $input = (array) $request->getParsedBody() ?? [];
        }
        $output = new Output($response);
        $storage = new Storage();
        $task = new Task($output, $storage);
        switch ($request_method) {
            case 'DELETE':
                return $task->delete($args, $input);
                break;
            case 'GET':
                return $task->get($args, $input);
                break;
            case 'PATCH':
                return $task->patch($args, $input);
                break;
            case 'POST':
                return $task->post($args, $input);
                break;
        }
    }
}
