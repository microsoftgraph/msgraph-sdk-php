<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnonymousGuestConversationMember extends ConversationMember implements Parsable 
{
    /**
     * Instantiates a new AnonymousGuestConversationMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.anonymousGuestConversationMember');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnonymousGuestConversationMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnonymousGuestConversationMember {
        return new AnonymousGuestConversationMember();
    }

    /**
     * Gets the anonymousGuestId property value. Unique ID that represents the user. Note: This ID can change if the user leaves and rejoins the meeting, or joins from a different device.
     * @return string|null
    */
    public function getAnonymousGuestId(): ?string {
        return $this->getBackingStore()->get('anonymousGuestId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'anonymousGuestId' => fn(ParseNode $n) => $o->setAnonymousGuestId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('anonymousGuestId', $this->getAnonymousGuestId());
    }

    /**
     * Sets the anonymousGuestId property value. Unique ID that represents the user. Note: This ID can change if the user leaves and rejoins the meeting, or joins from a different device.
     * @param string|null $value Value to set for the anonymousGuestId property.
    */
    public function setAnonymousGuestId(?string $value): void {
        $this->getBackingStore()->set('anonymousGuestId', $value);
    }

}
