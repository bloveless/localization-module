<?php namespace Anomaly\LocalizationModule\Zone;

use Anomaly\LocalizationModule\Zone\Contract\ZoneInterface;
use Anomaly\Streams\Platform\Model\Localization\LocalizationZonesEntryModel;

/**
 * Class ZoneModel
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Zone
 */
class ZoneModel extends LocalizationZonesEntryModel implements ZoneInterface
{

    /**
     * The cache minutes.
     *
     * @var int
     */
    protected $cacheMinutes = 9999;

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}