<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UsageRightsIncluded extends Entity implements Parsable 
{
    /**
     * Instantiates a new UsageRightsIncluded and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageRightsIncluded
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageRightsIncluded {
        return new UsageRightsIncluded();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ownerEmail' => fn(ParseNode $n) => $o->setOwnerEmail($n->getStringValue()),
            'userEmail' => fn(ParseNode $n) => $o->setUserEmail($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getEnumValue(UsageRights::class)),
        ]);
    }

    /**
     * Gets the ownerEmail property value. The email of owner label rights.
     * @return string|null
    */
    public function getOwnerEmail(): ?string {
        $val = $this->getBackingStore()->get('ownerEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerEmail'");
    }

    /**
     * Gets the userEmail property value. The email of user with label user rights.
     * @return string|null
    */
    public function getUserEmail(): ?string {
        $val = $this->getBackingStore()->get('userEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userEmail'");
    }

    /**
     * Gets the value property value. The value property
     * @return UsageRights|null
    */
    public function getValue(): ?UsageRights {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || $val instanceof UsageRights) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('ownerEmail', $this->getOwnerEmail());
        $writer->writeStringValue('userEmail', $this->getUserEmail());
        $writer->writeEnumValue('value', $this->getValue());
    }

    /**
     * Sets the ownerEmail property value. The email of owner label rights.
     * @param string|null $value Value to set for the ownerEmail property.
    */
    public function setOwnerEmail(?string $value): void {
        $this->getBackingStore()->set('ownerEmail', $value);
    }

    /**
     * Sets the userEmail property value. The email of user with label user rights.
     * @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->getBackingStore()->set('userEmail', $value);
    }

    /**
     * Sets the value property value. The value property
     * @param UsageRights|null $value Value to set for the value property.
    */
    public function setValue(?UsageRights $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
