<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExtensionProperty extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new extensionProperty and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.extensionProperty');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtensionProperty
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtensionProperty {
        return new ExtensionProperty();
    }

    /**
     * Gets the appDisplayName property value. Display name of the application object on which this extension property is defined. Read-only.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the dataType property value. Specifies the data type of the value the extension property can hold. Following values are supported. Not nullable. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximum
     * @return string|null
    */
    public function getDataType(): ?string {
        $val = $this->getBackingStore()->get('dataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getStringValue()),
            'isSyncedFromOnPremises' => fn(ParseNode $n) => $o->setIsSyncedFromOnPremises($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'targetObjects' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTargetObjects($val);
            },
        ]);
    }

    /**
     * Gets the isSyncedFromOnPremises property value. Indicates if this extension property was synced from on-premises active directory using Microsoft Entra Connect. Read-only.
     * @return bool|null
    */
    public function getIsSyncedFromOnPremises(): ?bool {
        $val = $this->getBackingStore()->get('isSyncedFromOnPremises');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSyncedFromOnPremises'");
    }

    /**
     * Gets the name property value. Name of the extension property. Not nullable. Supports $filter (eq).
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the targetObjects property value. Following values are supported. Not nullable. UserGroupAdministrativeUnitApplicationDeviceOrganization
     * @return array<string>|null
    */
    public function getTargetObjects(): ?array {
        $val = $this->getBackingStore()->get('targetObjects');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetObjects'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('dataType', $this->getDataType());
        $writer->writeBooleanValue('isSyncedFromOnPremises', $this->getIsSyncedFromOnPremises());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('targetObjects', $this->getTargetObjects());
    }

    /**
     * Sets the appDisplayName property value. Display name of the application object on which this extension property is defined. Read-only.
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the dataType property value. Specifies the data type of the value the extension property can hold. Following values are supported. Not nullable. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximum
     * @param string|null $value Value to set for the dataType property.
    */
    public function setDataType(?string $value): void {
        $this->getBackingStore()->set('dataType', $value);
    }

    /**
     * Sets the isSyncedFromOnPremises property value. Indicates if this extension property was synced from on-premises active directory using Microsoft Entra Connect. Read-only.
     * @param bool|null $value Value to set for the isSyncedFromOnPremises property.
    */
    public function setIsSyncedFromOnPremises(?bool $value): void {
        $this->getBackingStore()->set('isSyncedFromOnPremises', $value);
    }

    /**
     * Sets the name property value. Name of the extension property. Not nullable. Supports $filter (eq).
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the targetObjects property value. Following values are supported. Not nullable. UserGroupAdministrativeUnitApplicationDeviceOrganization
     * @param array<string>|null $value Value to set for the targetObjects property.
    */
    public function setTargetObjects(?array $value): void {
        $this->getBackingStore()->set('targetObjects', $value);
    }

}
