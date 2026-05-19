<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomSecurityAttributeExemption extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomSecurityAttributeExemption and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomSecurityAttributeExemption
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomSecurityAttributeExemption {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.customSecurityAttributeStringValueExemption': return new CustomSecurityAttributeStringValueExemption();
            }
        }
        return new CustomSecurityAttributeExemption();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(CustomSecurityAttributeComparisonOperator::class)),
        ]);
    }

    /**
     * Gets the operator property value. The operator property
     * @return CustomSecurityAttributeComparisonOperator|null
    */
    public function getOperator(): ?CustomSecurityAttributeComparisonOperator {
        $val = $this->getBackingStore()->get('operator');
        if (is_null($val) || $val instanceof CustomSecurityAttributeComparisonOperator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operator'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('operator', $this->getOperator());
    }

    /**
     * Sets the operator property value. The operator property
     * @param CustomSecurityAttributeComparisonOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?CustomSecurityAttributeComparisonOperator $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

}
