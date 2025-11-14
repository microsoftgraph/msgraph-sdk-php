<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A reaction to a conversation message.
*/
class EngagementConversationMessageReaction extends Entity implements Parsable 
{
    /**
     * Instantiates a new EngagementConversationMessageReaction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EngagementConversationMessageReaction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EngagementConversationMessageReaction {
        return new EngagementConversationMessageReaction();
    }

    /**
     * Gets the createdDateTime property value. Date and time when the reaction was added. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'reactionBy' => fn(ParseNode $n) => $o->setReactionBy($n->getObjectValue([EngagementIdentitySet::class, 'createFromDiscriminatorValue'])),
            'reactionType' => fn(ParseNode $n) => $o->setReactionType($n->getEnumValue(EngagementConversationMessageReactionType::class)),
        ]);
    }

    /**
     * Gets the reactionBy property value. The reactionBy property
     * @return EngagementIdentitySet|null
    */
    public function getReactionBy(): ?EngagementIdentitySet {
        $val = $this->getBackingStore()->get('reactionBy');
        if (is_null($val) || $val instanceof EngagementIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reactionBy'");
    }

    /**
     * Gets the reactionType property value. Types of reactions to conversation messages.
     * @return EngagementConversationMessageReactionType|null
    */
    public function getReactionType(): ?EngagementConversationMessageReactionType {
        $val = $this->getBackingStore()->get('reactionType');
        if (is_null($val) || $val instanceof EngagementConversationMessageReactionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reactionType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('reactionBy', $this->getReactionBy());
        $writer->writeEnumValue('reactionType', $this->getReactionType());
    }

    /**
     * Sets the createdDateTime property value. Date and time when the reaction was added. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the reactionBy property value. The reactionBy property
     * @param EngagementIdentitySet|null $value Value to set for the reactionBy property.
    */
    public function setReactionBy(?EngagementIdentitySet $value): void {
        $this->getBackingStore()->set('reactionBy', $value);
    }

    /**
     * Sets the reactionType property value. Types of reactions to conversation messages.
     * @param EngagementConversationMessageReactionType|null $value Value to set for the reactionType property.
    */
    public function setReactionType(?EngagementConversationMessageReactionType $value): void {
        $this->getBackingStore()->set('reactionType', $value);
    }

}
