<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use App\DefaultForbidden\DefaultForbidden;
    use App\DefaultOkay\DefaultOkay;

/**
 * Add all dependencies required by the app
 * @author Marvin Isaac <misaac@pushnami.com>
 */
final class DependencyInjector
{
    /**
     * Inject listed dependencies to the app container which will then make it available throughout the whole app.
     * These could be route handlers, database managers, etc.
     * @access public
     * @param \Slim\App $app
     * @return \Slim\App
     */
    public function inject(\Slim\App $app) : \Slim\App
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
