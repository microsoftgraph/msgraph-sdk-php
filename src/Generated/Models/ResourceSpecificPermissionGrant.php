<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResourceSpecificPermissionGrant extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new ResourceSpecificPermissionGrant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.resourceSpecificPermissionGrant');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourceSpecificPermissionGrant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourceSpecificPermissionGrant {
        return new ResourceSpecificPermissionGrant();
    }

    /**
     * Gets the clientAppId property value. ID of the service principal of the Microsoft Entra app that has been granted access. Read-only.
     * @return string|null
    */
    public function getClientAppId(): ?string {
        $val = $this->getBackingStore()->get('clientAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientAppId'");
    }

    /**
     * Gets the clientId property value. ID of the Microsoft Entra app that has been granted access. Read-only.
     * @return string|null
    */
    public function getClientId(): ?string {
        $val = $this->getBackingStore()->get('clientId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientAppId' => fn(ParseNode $n) => $o->setClientAppId($n->getStringValue()),
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'permission' => fn(ParseNode $n) => $o->setPermission($n->getStringValue()),
            'permissionType' => fn(ParseNode $n) => $o->setPermissionType($n->getStringValue()),
            'resourceAppId' => fn(ParseNode $n) => $o->setResourceAppId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the permission property value. The name of the resource-specific permission. Read-only.
     * @return string|null
    */
    public function getPermission(): ?string {
        $val = $this->getBackingStore()->get('permission');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permission'");
    }

    /**
     * Gets the permissionType property value. The type of permission. Possible values are: Application, Delegated. Read-only.
     * @return string|null
    */
    public function getPermissionType(): ?string {
        $val = $this->getBackingStore()->get('permissionType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionType'");
    }

    /**
     * Gets the resourceAppId property value. ID of the Microsoft Entra app that is hosting the resource. Read-only.
     * @return string|null
    */
    public function getResourceAppId(): ?string {
        $val = $this->getBackingStore()->get('resourceAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceAppId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientAppId', $this->getClientAppId());
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('permission', $this->getPermission());
        $writer->writeStringValue('permissionType', $this->getPermissionType());
        $writer->writeStringValue('resourceAppId', $this->getResourceAppId());
    }

    /**
     * Sets the clientAppId property value. ID of the service principal of the Microsoft Entra app that has been granted access. Read-only.
     * @param string|null $value Value to set for the clientAppId property.
    */
    public function setClientAppId(?string $value): void {
        $this->getBackingStore()->set('clientAppId', $value);
    }

    /**
     * Sets the clientId property value. ID of the Microsoft Entra app that has been granted access. Read-only.
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the permission property value. The name of the resource-specific permission. Read-only.
     * @param string|null $value Value to set for the permission property.
    */
    public function setPermission(?string $value): void {
        $this->getBackingStore()->set('permission', $value);
    }

    /**
     * Sets the permissionType property value. The type of permission. Possible values are: Application, Delegated. Read-only.
     * @param string|null $value Value to set for the permissionType property.
    */
    public function setPermissionType(?string $value): void {
        $this->getBackingStore()->set('permissionType', $value);
    }

    /**
     * Sets the resourceAppId property value. ID of the Microsoft Entra app that is hosting the resource. Read-only.
     * @param string|null $value Value to set for the resourceAppId property.
    */
    public function setResourceAppId(?string $value): void {
        $this->getBackingStore()->set('resourceAppId', $value);
    }

}
