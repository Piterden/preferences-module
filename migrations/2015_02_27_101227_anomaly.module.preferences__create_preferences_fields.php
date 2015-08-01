<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModulePreferencesCreatePreferencesFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModulePreferencesCreatePreferencesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'user'  => 'anomaly.field_type.user',
        'key'   => 'anomaly.field_type.text',
        'value' => 'anomaly.field_type.textarea'
    ];

}
