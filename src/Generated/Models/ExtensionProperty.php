<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
        return $this->getBackingStore()->get('appDisplayName');
    }

    /**
     * Gets the dataType property value. Specifies the data type of the value the extension property can hold. Following values are supported. Not nullable. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximum
     * @return string|null
    */
    public function getDataType(): ?string {
        return $this->getBackingStore()->get('dataType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getStringValue()),
            'isSyncedFromOnPremises' => fn(ParseNode $n) => $o->setIsSyncedFromOnPremises($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'targetObjects' => fn(ParseNode $n) => $o->setTargetObjects($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the isSyncedFromOnPremises property value. Indicates if this extension property was synced from on-premises active directory using Azure AD Connect. Read-only.
     * @return bool|null
    */
    public function getIsSyncedFromOnPremises(): ?bool {
        return $this->getBackingStore()->get('isSyncedFromOnPremises');
    }

    /**
     * Gets the name property value. Name of the extension property. Not nullable. Supports $filter (eq).
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the targetObjects property value. Following values are supported. Not nullable. UserGroupAdministrativeUnitApplicationDeviceOrganization
     * @return array<string>|null
    */
    public function getTargetObjects(): ?array {
        return $this->getBackingStore()->get('targetObjects');
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
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the dataType property value. Specifies the data type of the value the extension property can hold. Following values are supported. Not nullable. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximum
     *  @param string|null $value Value to set for the dataType property.
    */
    public function setDataType(?string $value): void {
        $this->getBackingStore()->set('dataType', $value);
    }

    /**
     * Sets the isSyncedFromOnPremises property value. Indicates if this extension property was synced from on-premises active directory using Azure AD Connect. Read-only.
     *  @param bool|null $value Value to set for the isSyncedFromOnPremises property.
    */
    public function setIsSyncedFromOnPremises(?bool $value): void {
        $this->getBackingStore()->set('isSyncedFromOnPremises', $value);
    }

    /**
     * Sets the name property value. Name of the extension property. Not nullable. Supports $filter (eq).
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the targetObjects property value. Following values are supported. Not nullable. UserGroupAdministrativeUnitApplicationDeviceOrganization
     *  @param array<string>|null $value Value to set for the targetObjects property.
    */
    public function setTargetObjects(?array $value): void {
        $this->getBackingStore()->set('targetObjects', $value);
    }

}
