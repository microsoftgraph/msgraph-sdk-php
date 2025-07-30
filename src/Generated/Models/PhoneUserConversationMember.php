<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PhoneUserConversationMember extends ConversationMember implements Parsable 
{
    /**
     * Instantiates a new PhoneUserConversationMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.phoneUserConversationMember');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneUserConversationMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneUserConversationMember {
        return new PhoneUserConversationMember();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
        ]);
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        $val = $this->getBackingStore()->get('phoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
    }

    /**
     * Sets the phoneNumber property value. The phoneNumber property
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phoneNumber', $value);
    }

}
