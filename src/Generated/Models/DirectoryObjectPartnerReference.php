<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectoryObjectPartnerReference extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new DirectoryObjectPartnerReference and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.directoryObjectPartnerReference');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryObjectPartnerReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryObjectPartnerReference {
        return new DirectoryObjectPartnerReference();
    }

    /**
     * Gets the description property value. Description of the object returned. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Name of directory object being returned, like group or application. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the externalPartnerTenantId property value. The tenant identifier for the partner tenant. Read-only.
     * @return string|null
    */
    public function getExternalPartnerTenantId(): ?string {
        return $this->getBackingStore()->get('externalPartnerTenantId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalPartnerTenantId' => fn(ParseNode $n) => $o->setExternalPartnerTenantId($n->getStringValue()),
            'objectType' => fn(ParseNode $n) => $o->setObjectType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the objectType property value. The type of the referenced object in the partner tenant. Read-only.
     * @return string|null
    */
    public function getObjectType(): ?string {
        return $this->getBackingStore()->get('objectType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalPartnerTenantId', $this->getExternalPartnerTenantId());
        $writer->writeStringValue('objectType', $this->getObjectType());
    }

    /**
     * Sets the description property value. Description of the object returned. Read-only.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Name of directory object being returned, like group or application. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalPartnerTenantId property value. The tenant identifier for the partner tenant. Read-only.
     * @param string|null $value Value to set for the externalPartnerTenantId property.
    */
    public function setExternalPartnerTenantId(?string $value): void {
        $this->getBackingStore()->set('externalPartnerTenantId', $value);
    }

    /**
     * Sets the objectType property value. The type of the referenced object in the partner tenant. Read-only.
     * @param string|null $value Value to set for the objectType property.
    */
    public function setObjectType(?string $value): void {
        $this->getBackingStore()->set('objectType', $value);
    }

}
