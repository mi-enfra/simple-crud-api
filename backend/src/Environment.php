<?php
    // @codeCoverageIgnoreStart
    namespace App;
    
final class Environment
{
    public static function setup()
    {
        try {
            $env = \Dotenv\Dotenv::create(__DIR__ . '/../../private/');
            $env->load();
            $env->required([
                'ENVIRONMENT',
            ]);
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
