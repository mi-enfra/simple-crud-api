<?php
    namespace App\Task\HTTP;

    use App\Shared\Base\HTTPOutput;

final class Output extends HTTPOutput
{
    public function send(array $payload, int $status_code)
    {
        return $this->response
            ->withJson($payload)
            ->withStatus($status_code);
    }
}
