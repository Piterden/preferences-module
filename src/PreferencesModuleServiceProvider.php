<?php namespace Anomaly\PreferencesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class PreferencesModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\PreferencesModule
 */
class PreferencesModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon plugins.
     *
     * @var array
     */
    protected $plugins = [
        'Anomaly\PreferencesModule\Preference\Plugin\PreferencePlugin'
    ];

    /**
     * The addon listeners.
     *
     * @var array
     */
    protected $listeners = [
        'Anomaly\Streams\Platform\Event\Response' => [
            'Anomaly\PreferencesModule\Preference\Listener\ConfigureStreams'
        ]
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/preferences'                => 'Anomaly\PreferencesModule\Http\Controller\Admin\SystemController@edit',
        'admin/preferences/{type}'         => 'Anomaly\PreferencesModule\Http\Controller\Admin\AddonsController@index',
        'admin/preferences/{type}/{addon}' => 'Anomaly\PreferencesModule\Http\Controller\Admin\AddonsController@edit'
    ];

    /**
     * The singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\PreferencesModule\Preference\Contract\PreferenceRepositoryInterface' => 'Anomaly\PreferencesModule\Preference\PreferenceRepository'
    ];

}
