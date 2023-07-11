<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics metric contains the score and units of a metric of a user experience anlaytics category.
*/
class UserExperienceAnalyticsMetric extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsMetric {
        return new UserExperienceAnalyticsMetric();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the unit property value. The unit of the user experience analytics metric. Examples: none, percentage, count, seconds, score.
     * @return string|null
    */
    public function getUnit(): ?string {
        $val = $this->getBackingStore()->get('unit');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unit'");
    }

    /**
     * Gets the value property value. The value of the user experience analytics metric.
     * @return float|null
    */
    public function getValue(): ?float {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeFloatValue('value', $this->getValue());
    }

    /**
     * Sets the unit property value. The unit of the user experience analytics metric. Examples: none, percentage, count, seconds, score.
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->getBackingStore()->set('unit', $value);
    }

    /**
     * Sets the value property value. The value of the user experience analytics metric.
     * @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
