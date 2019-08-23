<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use Slim\App;
    use App\DefaultForbidden\DefaultForbidden;
    use App\DefaultOkay\DefaultOkay;
    
final class DependencyInjector
{
    public function inject(App $app) : App
    {
        $container = $app->getContainer();

        $container['DefaultForbidden'] = function ($container) {
            return new DefaultForbidden($container);
        };

        $container['DefaultOkay'] = function ($container) {
            return new DefaultOkay($container);
        };
        
        return $app;
    }
}
