<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityUserFlowAttribute extends Entity implements Parsable 
{
    /**
     * @var IdentityUserFlowAttributeDataType|null $dataType The data type of the user flow attribute. This cannot be modified after the custom user flow attribute is created. The supported values for dataType are: string , boolean , int64 , stringCollection , dateTime.
    */
    private ?IdentityUserFlowAttributeDataType $dataType = null;
    
    /**
     * @var string|null $description The description of the user flow attribute that's shown to the user at the time of sign-up.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the user flow attribute.
    */
    private ?string $displayName = null;
    
    /**
     * @var IdentityUserFlowAttributeType|null $userFlowAttributeType The type of the user flow attribute. This is a read-only attribute that is automatically set. Depending on the type of attribute, the values for this property will be builtIn, custom, or required.
    */
    private ?IdentityUserFlowAttributeType $userFlowAttributeType = null;
    
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
     * Gets the dataType property value. The data type of the user flow attribute. This cannot be modified after the custom user flow attribute is created. The supported values for dataType are: string , boolean , int64 , stringCollection , dateTime.
     * @return IdentityUserFlowAttributeDataType|null
    */
    public function getDataType(): ?IdentityUserFlowAttributeDataType {
        return $this->dataType;
    }

    /**
     * Gets the description property value. The description of the user flow attribute that's shown to the user at the time of sign-up.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the user flow attribute.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dataType' => function (ParseNode $n) use ($o) { $o->setDataType($n->getEnumValue(IdentityUserFlowAttributeDataType::class)); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'userFlowAttributeType' => function (ParseNode $n) use ($o) { $o->setUserFlowAttributeType($n->getEnumValue(IdentityUserFlowAttributeType::class)); },
        ]);
    }

    /**
     * Gets the userFlowAttributeType property value. The type of the user flow attribute. This is a read-only attribute that is automatically set. Depending on the type of attribute, the values for this property will be builtIn, custom, or required.
     * @return IdentityUserFlowAttributeType|null
    */
    public function getUserFlowAttributeType(): ?IdentityUserFlowAttributeType {
        return $this->userFlowAttributeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('dataType', $this->dataType);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('userFlowAttributeType', $this->userFlowAttributeType);
    }

    /**
     * Sets the dataType property value. The data type of the user flow attribute. This cannot be modified after the custom user flow attribute is created. The supported values for dataType are: string , boolean , int64 , stringCollection , dateTime.
     *  @param IdentityUserFlowAttributeDataType|null $value Value to set for the dataType property.
    */
    public function setDataType(?IdentityUserFlowAttributeDataType $value ): void {
        $this->dataType = $value;
    }

    /**
     * Sets the description property value. The description of the user flow attribute that's shown to the user at the time of sign-up.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the user flow attribute.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the userFlowAttributeType property value. The type of the user flow attribute. This is a read-only attribute that is automatically set. Depending on the type of attribute, the values for this property will be builtIn, custom, or required.
     *  @param IdentityUserFlowAttributeType|null $value Value to set for the userFlowAttributeType property.
    */
    public function setUserFlowAttributeType(?IdentityUserFlowAttributeType $value ): void {
        $this->userFlowAttributeType = $value;
    }

}
