<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleLocalization_100_alpha_CreateLanguagesStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleLocalization_100_alpha_CreateLanguagesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'languages',
        'title_column' => 'name',
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'            => ['required' => true, 'unique' => true],
        'iso'             => ['required' => true, 'unique' => true],
        'datetime_format' => ['required' => true],
        'date_format'     => ['required' => true],
        'enabled'         => [],
        'flag'            => [],
        'rtl'             => []
    ];

}
