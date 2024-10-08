<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityUserFlow extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityUserFlow and sets the default values.
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userFlowType' => fn(ParseNode $n) => $o->setUserFlowType($n->getEnumValue(UserFlowType::class)),
            'userFlowTypeVersion' => fn(ParseNode $n) => $o->setUserFlowTypeVersion($n->getObjectValue([IdentityUserFlow_userFlowTypeVersion::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the userFlowType property value. The userFlowType property
     * @return UserFlowType|null
    */
    public function getUserFlowType(): ?UserFlowType {
        $val = $this->getBackingStore()->get('userFlowType');
        if (is_null($val) || $val instanceof UserFlowType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userFlowType'");
    }

    /**
     * Gets the userFlowTypeVersion property value. The userFlowTypeVersion property
     * @return IdentityUserFlow_userFlowTypeVersion|null
    */
    public function getUserFlowTypeVersion(): ?IdentityUserFlow_userFlowTypeVersion {
        $val = $this->getBackingStore()->get('userFlowTypeVersion');
        if (is_null($val) || $val instanceof IdentityUserFlow_userFlowTypeVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userFlowTypeVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('userFlowType', $this->getUserFlowType());
        $writer->writeObjectValue('userFlowTypeVersion', $this->getUserFlowTypeVersion());
    }

    /**
     * Sets the userFlowType property value. The userFlowType property
     * @param UserFlowType|null $value Value to set for the userFlowType property.
    */
    public function setUserFlowType(?UserFlowType $value): void {
        $this->getBackingStore()->set('userFlowType', $value);
    }

    /**
     * Sets the userFlowTypeVersion property value. The userFlowTypeVersion property
     * @param IdentityUserFlow_userFlowTypeVersion|null $value Value to set for the userFlowTypeVersion property.
    */
    public function setUserFlowTypeVersion(?IdentityUserFlow_userFlowTypeVersion $value): void {
        $this->getBackingStore()->set('userFlowTypeVersion', $value);
    }

}
