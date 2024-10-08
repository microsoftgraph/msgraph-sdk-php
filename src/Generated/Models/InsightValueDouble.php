<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The value in an user experience analytics insight.
*/
class InsightValueDouble extends UserExperienceAnalyticsInsightValue implements Parsable 
{
    /**
     * Instantiates a new InsightValueDouble and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.insightValueDouble');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InsightValueDouble
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InsightValueDouble {
        return new InsightValueDouble();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getObjectValue([InsightValueDouble_value::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the value property value. The double value of the user experience analytics insight.
     * @return InsightValueDouble_value|null
    */
    public function getValue(): ?InsightValueDouble_value {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || $val instanceof InsightValueDouble_value) {
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
        $writer->writeObjectValue('value', $this->getValue());
    }

    /**
     * Sets the value property value. The double value of the user experience analytics insight.
     * @param InsightValueDouble_value|null $value Value to set for the value property.
    */
    public function setValue(?InsightValueDouble_value $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
