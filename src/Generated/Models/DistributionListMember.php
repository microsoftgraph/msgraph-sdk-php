<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DistributionListMember extends Entity implements Parsable 
{
    /**
     * Instantiates a new DistributionListMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DistributionListMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DistributionListMember {
        return new DistributionListMember();
    }

    /**
     * Gets the contact property value. The contact associated with the distribution list member. Read-only.
     * @return Contact|null
    */
    public function getContact(): ?Contact {
        $val = $this->getBackingStore()->get('contact');
        if (is_null($val) || $val instanceof Contact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contact'");
    }

    /**
     * Gets the displayName property value. The display name of the member. Read-only.
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
            'contact' => fn(ParseNode $n) => $o->setContact($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'memberId' => fn(ParseNode $n) => $o->setMemberId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(RecipientType::class)),
        ]);
    }

    /**
     * Gets the memberId property value. A system-generated unique identifier. Nonempty for contact, privateDL, and mailbox members. Read-only.
     * @return string|null
    */
    public function getMemberId(): ?string {
        $val = $this->getBackingStore()->get('memberId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberId'");
    }

    /**
     * Gets the type property value. The type property
     * @return RecipientType|null
    */
    public function getType(): ?RecipientType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof RecipientType) {
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
        $writer->writeObjectValue('contact', $this->getContact());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('memberId', $this->getMemberId());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the contact property value. The contact associated with the distribution list member. Read-only.
     * @param Contact|null $value Value to set for the contact property.
    */
    public function setContact(?Contact $value): void {
        $this->getBackingStore()->set('contact', $value);
    }

    /**
     * Sets the displayName property value. The display name of the member. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the memberId property value. A system-generated unique identifier. Nonempty for contact, privateDL, and mailbox members. Read-only.
     * @param string|null $value Value to set for the memberId property.
    */
    public function setMemberId(?string $value): void {
        $this->getBackingStore()->set('memberId', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param RecipientType|null $value Value to set for the type property.
    */
    public function setType(?RecipientType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
