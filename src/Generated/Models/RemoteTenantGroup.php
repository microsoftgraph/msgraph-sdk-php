<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoteTenantGroup extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new RemoteTenantGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.remoteTenantGroup');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteTenantGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteTenantGroup {
        return new RemoteTenantGroup();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'remoteGroupDisplayName' => fn(ParseNode $n) => $o->setRemoteGroupDisplayName($n->getStringValue()),
            'remoteGroupId' => fn(ParseNode $n) => $o->setRemoteGroupId($n->getStringValue()),
            'remoteTenantDisplayName' => fn(ParseNode $n) => $o->setRemoteTenantDisplayName($n->getStringValue()),
            'remoteTenantId' => fn(ParseNode $n) => $o->setRemoteTenantId($n->getStringValue()),
            'remoteTenantPrimaryDomain' => fn(ParseNode $n) => $o->setRemoteTenantPrimaryDomain($n->getStringValue()),
        ]);
    }

    /**
     * Gets the remoteGroupDisplayName property value. Display name of the group in the remote tenant.
     * @return string|null
    */
    public function getRemoteGroupDisplayName(): ?string {
        $val = $this->getBackingStore()->get('remoteGroupDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteGroupDisplayName'");
    }

    /**
     * Gets the remoteGroupId property value. Unique identifier of the group in the remote tenant.
     * @return string|null
    */
    public function getRemoteGroupId(): ?string {
        $val = $this->getBackingStore()->get('remoteGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteGroupId'");
    }

    /**
     * Gets the remoteTenantDisplayName property value. Display name of the remote tenant.
     * @return string|null
    */
    public function getRemoteTenantDisplayName(): ?string {
        $val = $this->getBackingStore()->get('remoteTenantDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteTenantDisplayName'");
    }

    /**
     * Gets the remoteTenantId property value. Unique identifier of the remote tenant.
     * @return string|null
    */
    public function getRemoteTenantId(): ?string {
        $val = $this->getBackingStore()->get('remoteTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteTenantId'");
    }

    /**
     * Gets the remoteTenantPrimaryDomain property value. Primary domain name of the remote tenant.
     * @return string|null
    */
    public function getRemoteTenantPrimaryDomain(): ?string {
        $val = $this->getBackingStore()->get('remoteTenantPrimaryDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteTenantPrimaryDomain'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('remoteGroupDisplayName', $this->getRemoteGroupDisplayName());
        $writer->writeStringValue('remoteGroupId', $this->getRemoteGroupId());
        $writer->writeStringValue('remoteTenantDisplayName', $this->getRemoteTenantDisplayName());
        $writer->writeStringValue('remoteTenantId', $this->getRemoteTenantId());
        $writer->writeStringValue('remoteTenantPrimaryDomain', $this->getRemoteTenantPrimaryDomain());
    }

    /**
     * Sets the remoteGroupDisplayName property value. Display name of the group in the remote tenant.
     * @param string|null $value Value to set for the remoteGroupDisplayName property.
    */
    public function setRemoteGroupDisplayName(?string $value): void {
        $this->getBackingStore()->set('remoteGroupDisplayName', $value);
    }

    /**
     * Sets the remoteGroupId property value. Unique identifier of the group in the remote tenant.
     * @param string|null $value Value to set for the remoteGroupId property.
    */
    public function setRemoteGroupId(?string $value): void {
        $this->getBackingStore()->set('remoteGroupId', $value);
    }

    /**
     * Sets the remoteTenantDisplayName property value. Display name of the remote tenant.
     * @param string|null $value Value to set for the remoteTenantDisplayName property.
    */
    public function setRemoteTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('remoteTenantDisplayName', $value);
    }

    /**
     * Sets the remoteTenantId property value. Unique identifier of the remote tenant.
     * @param string|null $value Value to set for the remoteTenantId property.
    */
    public function setRemoteTenantId(?string $value): void {
        $this->getBackingStore()->set('remoteTenantId', $value);
    }

    /**
     * Sets the remoteTenantPrimaryDomain property value. Primary domain name of the remote tenant.
     * @param string|null $value Value to set for the remoteTenantPrimaryDomain property.
    */
    public function setRemoteTenantPrimaryDomain(?string $value): void {
        $this->getBackingStore()->set('remoteTenantPrimaryDomain', $value);
    }

}
