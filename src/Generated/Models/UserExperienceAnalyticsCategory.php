<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The user experience analytics category entity contains the scores and insights for the various metrics of a category.
*/
class UserExperienceAnalyticsCategory extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsCategory {
        return new UserExperienceAnalyticsCategory();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'insights' => fn(ParseNode $n) => $o->setInsights($n->getCollectionOfObjectValues([UserExperienceAnalyticsInsight::class, 'createFromDiscriminatorValue'])),
            'metricValues' => fn(ParseNode $n) => $o->setMetricValues($n->getCollectionOfObjectValues([UserExperienceAnalyticsMetric::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the insights property value. The insights for the category. Read-only.
     * @return array<UserExperienceAnalyticsInsight>|null
    */
    public function getInsights(): ?array {
        $val = $this->getBackingStore()->get('insights');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsInsight::class);
            /** @var array<UserExperienceAnalyticsInsight>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insights'");
    }

    /**
     * Gets the metricValues property value. The metric values for the user experience analytics category. Read-only.
     * @return array<UserExperienceAnalyticsMetric>|null
    */
    public function getMetricValues(): ?array {
        $val = $this->getBackingStore()->get('metricValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsMetric::class);
            /** @var array<UserExperienceAnalyticsMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metricValues'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('insights', $this->getInsights());
        $writer->writeCollectionOfObjectValues('metricValues', $this->getMetricValues());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the insights property value. The insights for the category. Read-only.
     * @param array<UserExperienceAnalyticsInsight>|null $value Value to set for the insights property.
    */
    public function setInsights(?array $value): void {
        $this->getBackingStore()->set('insights', $value);
    }

    /**
     * Sets the metricValues property value. The metric values for the user experience analytics category. Read-only.
     * @param array<UserExperienceAnalyticsMetric>|null $value Value to set for the metricValues property.
    */
    public function setMetricValues(?array $value): void {
        $this->getBackingStore()->set('metricValues', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
