<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityGroupEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new SecurityGroupEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.securityGroupEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityGroupEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityGroupEvidence {
        return new SecurityGroupEvidence();
    }

    /**
     * Gets the activeDirectoryObjectGuid property value. The activeDirectoryObjectGuid property
     * @return string|null
    */
    public function getActiveDirectoryObjectGuid(): ?string {
        $val = $this->getBackingStore()->get('activeDirectoryObjectGuid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDirectoryObjectGuid'");
    }

    /**
     * Gets the displayName property value. The name of the security group.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the distinguishedName property value. The distinguishedName property
     * @return string|null
    */
    public function getDistinguishedName(): ?string {
        $val = $this->getBackingStore()->get('distinguishedName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'distinguishedName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDirectoryObjectGuid' => fn(ParseNode $n) => $o->setActiveDirectoryObjectGuid($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'distinguishedName' => fn(ParseNode $n) => $o->setDistinguishedName($n->getStringValue()),
            'friendlyName' => fn(ParseNode $n) => $o->setFriendlyName($n->getStringValue()),
            'securityGroupId' => fn(ParseNode $n) => $o->setSecurityGroupId($n->getStringValue()),
            'sid' => fn(ParseNode $n) => $o->setSid($n->getStringValue()),
        ]);
    }

    /**
     * Gets the friendlyName property value. The friendlyName property
     * @return string|null
    */
    public function getFriendlyName(): ?string {
        $val = $this->getBackingStore()->get('friendlyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'friendlyName'");
    }

    /**
     * Gets the securityGroupId property value. Unique identifier of the security group.
     * @return string|null
    */
    public function getSecurityGroupId(): ?string {
        $val = $this->getBackingStore()->get('securityGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityGroupId'");
    }

    /**
     * Gets the sid property value. The sid property
     * @return string|null
    */
    public function getSid(): ?string {
        $val = $this->getBackingStore()->get('sid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sid'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activeDirectoryObjectGuid', $this->getActiveDirectoryObjectGuid());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('distinguishedName', $this->getDistinguishedName());
        $writer->writeStringValue('friendlyName', $this->getFriendlyName());
        $writer->writeStringValue('securityGroupId', $this->getSecurityGroupId());
        $writer->writeStringValue('sid', $this->getSid());
    }

    /**
     * Sets the activeDirectoryObjectGuid property value. The activeDirectoryObjectGuid property
     * @param string|null $value Value to set for the activeDirectoryObjectGuid property.
    */
    public function setActiveDirectoryObjectGuid(?string $value): void {
        $this->getBackingStore()->set('activeDirectoryObjectGuid', $value);
    }

    /**
     * Sets the displayName property value. The name of the security group.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the distinguishedName property value. The distinguishedName property
     * @param string|null $value Value to set for the distinguishedName property.
    */
    public function setDistinguishedName(?string $value): void {
        $this->getBackingStore()->set('distinguishedName', $value);
    }

    /**
     * Sets the friendlyName property value. The friendlyName property
     * @param string|null $value Value to set for the friendlyName property.
    */
    public function setFriendlyName(?string $value): void {
        $this->getBackingStore()->set('friendlyName', $value);
    }

    /**
     * Sets the securityGroupId property value. Unique identifier of the security group.
     * @param string|null $value Value to set for the securityGroupId property.
    */
    public function setSecurityGroupId(?string $value): void {
        $this->getBackingStore()->set('securityGroupId', $value);
    }

    /**
     * Sets the sid property value. The sid property
     * @param string|null $value Value to set for the sid property.
    */
    public function setSid(?string $value): void {
        $this->getBackingStore()->set('sid', $value);
    }

}
