<?php
    namespace App\Task;

    use App\Shared\Interfaces\OutputInterface;
    use App\Shared\Interfaces\StorageInterface;

final class Task implements OutputInterface
{
    private $output;
    private $storage;

    public function __construct(OutputInterface $output, StorageInterface $storage)
    {
        $this->output = $output;
        $this->storage = $storage;
    }

    public function delete(?array $args, ?array $input)
    {
        return $this->output
            ->send([
                'delete' => 'works!',
            ], 200);
    }
    
    public function get(?array $args, ?array $input)
    {
        return $this->output
            ->send([
                'get' => 'works!',
            ], 200);
    }

    public function patch(?array $args, ?array $input)
    {
        return $this->output
            ->send([
                'patch' => 'works!',
            ], 200);
    }

    public function post(?array $args, ?array $input)
    {
        if (!$this->isComplete($input)) {
            return $this->output->send(
                ['message' => 'Task not found.'],
                400
            );
        }
        $result = $this->storage->post($input);
        if (!$result['success']) {
            return $this->output->send(
                ['message' => $result['message']],
                500
            );
        }
        return $this->output->send(
            ['message' => $result['model']['task'] . ' created.'],
            200
        );
    }

    private function isComplete(?array $input) : bool
    {
        if ($input === null
            || !isset($input['task'])
        ) {
            return false;
        }
        return true;
    }
}
