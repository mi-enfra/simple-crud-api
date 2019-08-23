<?php
    namespace App\Task\HTTP\Models;

    use Illuminate\Database\Eloquent\Model;

/**
 * @method static Model create(array $input)
 */
class Task extends Model
{
    protected $fillable = [
        'task',
    ];
    protected $table = 'task';
}
