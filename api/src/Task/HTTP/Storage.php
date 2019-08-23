<?php
    namespace App\Task\HTTP;

    use App\Shared\Interfaces\StorageInterface;
    use App\Task\HTTP\Models\Task as Model;

final class Storage implements StorageInterface
{
    public function post(array $input) : ?array
    {
        try {
            $model =  Model::create($input);
            return [
                'success' => true,
                'model' => $model,
            ];
        } catch (\Illuminate\Database\QueryException $e) {
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }
}
