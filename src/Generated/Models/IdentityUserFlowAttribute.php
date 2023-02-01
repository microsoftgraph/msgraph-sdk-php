<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityUserFlowAttribute extends Entity implements Parsable 
{
    /**
     * Instantiates a new identityUserFlowAttribute and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityUserFlowAttribute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityUserFlowAttribute {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.identityBuiltInUserFlowAttribute': return new IdentityBuiltInUserFlowAttribute();
                case '#microsoft.graph.identityCustomUserFlowAttribute': return new IdentityCustomUserFlowAttribute();
            }
        }
        return new IdentityUserFlowAttribute();
    }

    /**
     * Gets the dataType property value. 
     * @return IdentityUserFlowAttributeDataType|null
    */
    public function getDataType(): ?IdentityUserFlowAttributeDataType {
        return $this->getBackingStore()->get('dataType');
    }

    /**
     * Gets the description property value. The description of the user flow attribute that's shown to the user at the time of sign-up.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name of the user flow attribute.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getEnumValue(IdentityUserFlowAttributeDataType::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'userFlowAttributeType' => fn(ParseNode $n) => $o->setUserFlowAttributeType($n->getEnumValue(IdentityUserFlowAttributeType::class)),
        ]);
    }

    /**
     * Gets the userFlowAttributeType property value. 
     * @return IdentityUserFlowAttributeType|null
    */
    public function getUserFlowAttributeType(): ?IdentityUserFlowAttributeType {
        return $this->getBackingStore()->get('userFlowAttributeType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('dataType', $this->getDataType());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('userFlowAttributeType', $this->getUserFlowAttributeType());
    }

    /**
     * Sets the dataType property value. 
     * @param IdentityUserFlowAttributeDataType|null $value Value to set for the dataType property.
    */
    public function setDataType(?IdentityUserFlowAttributeDataType $value): void {
        $this->getBackingStore()->set('dataType', $value);
    }

    /**
     * Sets the description property value. The description of the user flow attribute that's shown to the user at the time of sign-up.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the user flow attribute.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the userFlowAttributeType property value. 
     * @param IdentityUserFlowAttributeType|null $value Value to set for the userFlowAttributeType property.
    */
    public function setUserFlowAttributeType(?IdentityUserFlowAttributeType $value): void {
        $this->getBackingStore()->set('userFlowAttributeType', $value);
    }

}
