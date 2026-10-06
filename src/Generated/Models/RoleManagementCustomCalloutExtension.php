<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RoleManagementCustomCalloutExtension extends CustomCalloutExtension implements Parsable 
{
    /**
     * Instantiates a new RoleManagementCustomCalloutExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.roleManagementCustomCalloutExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleManagementCustomCalloutExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleManagementCustomCalloutExtension {
        return new RoleManagementCustomCalloutExtension();
    }

    /**
     * Gets the customAttributes property value. The customAttributes property
     * @return array<string>|null
    */
    public function getCustomAttributes(): ?array {
        $val = $this->getBackingStore()->get('customAttributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customAttributes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customAttributes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCustomAttributes($val);
            },
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getEnumValue(CustomExtensionResourceType::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(CustomCalloutExtensionType::class)),
        ]);
    }

    /**
     * Gets the resourceType property value. The resourceType property
     * @return CustomExtensionResourceType|null
    */
    public function getResourceType(): ?CustomExtensionResourceType {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || $val instanceof CustomExtensionResourceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Gets the type property value. The type property
     * @return CustomCalloutExtensionType|null
    */
    public function getType(): ?CustomCalloutExtensionType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof CustomCalloutExtensionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('customAttributes', $this->getCustomAttributes());
        $writer->writeEnumValue('resourceType', $this->getResourceType());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the customAttributes property value. The customAttributes property
     * @param array<string>|null $value Value to set for the customAttributes property.
    */
    public function setCustomAttributes(?array $value): void {
        $this->getBackingStore()->set('customAttributes', $value);
    }

    /**
     * Sets the resourceType property value. The resourceType property
     * @param CustomExtensionResourceType|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?CustomExtensionResourceType $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param CustomCalloutExtensionType|null $value Value to set for the type property.
    */
    public function setType(?CustomCalloutExtensionType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
