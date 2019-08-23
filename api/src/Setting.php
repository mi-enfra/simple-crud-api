<?php
    // @codeCoverageIgnoreStart
    namespace App;
    
/**
 * Returns array of options to be used by Slim
 * @author Marvin Isaac <misaac@pushnami.com>
 */
final class Setting
{
    /**
     * @access  public
     * @return  array
     */
    public static function get() : Array
    {
        return [
            'settings' => [
                'addContentLengthHeader' => false,
                'database' => [
                    'driver' => 'sqlite',
                    'database' => __DIR__ . '/../database/database.sqlite',
                ],
                'determineRouteBeforeAppMiddleware' => true,
                'displayErrorDetails' => true,
            ],
        ];
    }
}
