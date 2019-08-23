<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use Slim\App;
    
final class Router
{
    public function set(App $app) : App
    {
        $app->get('/health[/]', 'DefaultOkay');

        $app->any('/[{path:.*}]', 'DefaultForbidden');
        
        return $app;
    }
}
