<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityUserFlow extends Entity implements Parsable 
{
    /**
     * Instantiates a new identityUserFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityUserFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityUserFlow {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.b2xIdentityUserFlow': return new B2xIdentityUserFlow();
            }
        }
        return new IdentityUserFlow();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userFlowType' => fn(ParseNode $n) => $o->setUserFlowType($n->getEnumValue(UserFlowType::class)),
            'userFlowTypeVersion' => fn(ParseNode $n) => $o->setUserFlowTypeVersion($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the userFlowType property value. The userFlowType property
     * @return UserFlowType|null
    */
    public function getUserFlowType(): ?UserFlowType {
        return $this->getBackingStore()->get('userFlowType');
    }

    /**
     * Gets the userFlowTypeVersion property value. The userFlowTypeVersion property
     * @return float|null
    */
    public function getUserFlowTypeVersion(): ?float {
        return $this->getBackingStore()->get('userFlowTypeVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('userFlowType', $this->getUserFlowType());
        $writer->writeFloatValue('userFlowTypeVersion', $this->getUserFlowTypeVersion());
    }

    /**
     * Sets the userFlowType property value. The userFlowType property
     *  @param UserFlowType|null $value Value to set for the userFlowType property.
    */
    public function setUserFlowType(?UserFlowType $value): void {
        $this->getBackingStore()->set('userFlowType', $value);
    }

    /**
     * Sets the userFlowTypeVersion property value. The userFlowTypeVersion property
     *  @param float|null $value Value to set for the userFlowTypeVersion property.
    */
    public function setUserFlowTypeVersion(?float $value): void {
        $this->getBackingStore()->set('userFlowTypeVersion', $value);
    }

}
