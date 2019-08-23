<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use Slim\App;
    
final class MiddlewareInjector
{
    public function inject(App $app) : App
    {
        return $app;
    }
}
