<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityGroupEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new securityGroupEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'securityGroupId' => fn(ParseNode $n) => $o->setSecurityGroupId($n->getStringValue()),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('securityGroupId', $this->getSecurityGroupId());
    }

    /**
     * Sets the displayName property value. The name of the security group.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the securityGroupId property value. Unique identifier of the security group.
     * @param string|null $value Value to set for the securityGroupId property.
    */
    public function setSecurityGroupId(?string $value): void {
        $this->getBackingStore()->set('securityGroupId', $value);
    }

}
