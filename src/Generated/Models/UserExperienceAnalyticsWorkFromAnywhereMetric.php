<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The user experience analytics metric for work from anywhere report.
*/
class UserExperienceAnalyticsWorkFromAnywhereMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsWorkFromAnywhereMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsWorkFromAnywhereMetric {
        return new UserExperienceAnalyticsWorkFromAnywhereMetric();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'metricDevices' => fn(ParseNode $n) => $o->setMetricDevices($n->getCollectionOfObjectValues([UserExperienceAnalyticsWorkFromAnywhereDevice::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the metricDevices property value. The work from anywhere metric devices. Read-only.
     * @return array<UserExperienceAnalyticsWorkFromAnywhereDevice>|null
    */
    public function getMetricDevices(): ?array {
        $val = $this->getBackingStore()->get('metricDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsWorkFromAnywhereDevice::class);
            /** @var array<UserExperienceAnalyticsWorkFromAnywhereDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metricDevices'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('metricDevices', $this->getMetricDevices());
    }

    /**
     * Sets the metricDevices property value. The work from anywhere metric devices. Read-only.
     * @param array<UserExperienceAnalyticsWorkFromAnywhereDevice>|null $value Value to set for the metricDevices property.
    */
    public function setMetricDevices(?array $value): void {
        $this->getBackingStore()->set('metricDevices', $value);
    }

}
