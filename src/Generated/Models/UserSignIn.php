<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSignIn extends SignInIdentity implements Parsable 
{
    /**
     * Instantiates a new UserSignIn and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userSignIn');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSignIn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSignIn {
        return new UserSignIn();
    }

    /**
     * Gets the externalTenantId property value. TenantId of the guest user as applies to Microsoft Entra B2B scenarios.
     * @return string|null
    */
    public function getExternalTenantId(): ?string {
        $val = $this->getBackingStore()->get('externalTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalTenantId'");
    }

    /**
     * Gets the externalUserType property value. The externalUserType property
     * @return ConditionalAccessGuestOrExternalUserTypes|null
    */
    public function getExternalUserType(): ?ConditionalAccessGuestOrExternalUserTypes {
        $val = $this->getBackingStore()->get('externalUserType');
        if (is_null($val) || $val instanceof ConditionalAccessGuestOrExternalUserTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalUserType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'externalTenantId' => fn(ParseNode $n) => $o->setExternalTenantId($n->getStringValue()),
            'externalUserType' => fn(ParseNode $n) => $o->setExternalUserType($n->getEnumValue(ConditionalAccessGuestOrExternalUserTypes::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the userId property value. Object ID of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('externalTenantId', $this->getExternalTenantId());
        $writer->writeEnumValue('externalUserType', $this->getExternalUserType());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the externalTenantId property value. TenantId of the guest user as applies to Microsoft Entra B2B scenarios.
     * @param string|null $value Value to set for the externalTenantId property.
    */
    public function setExternalTenantId(?string $value): void {
        $this->getBackingStore()->set('externalTenantId', $value);
    }

    /**
     * Sets the externalUserType property value. The externalUserType property
     * @param ConditionalAccessGuestOrExternalUserTypes|null $value Value to set for the externalUserType property.
    */
    public function setExternalUserType(?ConditionalAccessGuestOrExternalUserTypes $value): void {
        $this->getBackingStore()->set('externalUserType', $value);
    }

    /**
     * Sets the userId property value. Object ID of the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
