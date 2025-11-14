<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a conversation in Viva Engage.
*/
class EngagementConversation extends Entity implements Parsable 
{
    /**
     * Instantiates a new EngagementConversation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EngagementConversation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EngagementConversation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.onlineMeetingEngagementConversation': return new OnlineMeetingEngagementConversation();
            }
        }
        return new EngagementConversation();
    }

    /**
     * Gets the creationMode property value. Indicates that the resource is in migration state and is currently being used for migration purposes.
     * @return EngagementCreationMode|null
    */
    public function getCreationMode(): ?EngagementCreationMode {
        $val = $this->getBackingStore()->get('creationMode');
        if (is_null($val) || $val instanceof EngagementCreationMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationMode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'creationMode' => fn(ParseNode $n) => $o->setCreationMode($n->getEnumValue(EngagementCreationMode::class)),
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([EngagementConversationMessage::class, 'createFromDiscriminatorValue'])),
            'starter' => fn(ParseNode $n) => $o->setStarter($n->getObjectValue([EngagementConversationMessage::class, 'createFromDiscriminatorValue'])),
            'starterId' => fn(ParseNode $n) => $o->setStarterId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the messages property value. The messages in a Viva Engage conversation.
     * @return array<EngagementConversationMessage>|null
    */
    public function getMessages(): ?array {
        $val = $this->getBackingStore()->get('messages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EngagementConversationMessage::class);
            /** @var array<EngagementConversationMessage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messages'");
    }

    /**
     * Gets the starter property value. The starter property
     * @return EngagementConversationMessage|null
    */
    public function getStarter(): ?EngagementConversationMessage {
        $val = $this->getBackingStore()->get('starter');
        if (is_null($val) || $val instanceof EngagementConversationMessage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'starter'");
    }

    /**
     * Gets the starterId property value. The unique ID of the first message in a Viva Engage conversation.
     * @return string|null
    */
    public function getStarterId(): ?string {
        $val = $this->getBackingStore()->get('starterId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'starterId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('creationMode', $this->getCreationMode());
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeObjectValue('starter', $this->getStarter());
        $writer->writeStringValue('starterId', $this->getStarterId());
    }

    /**
     * Sets the creationMode property value. Indicates that the resource is in migration state and is currently being used for migration purposes.
     * @param EngagementCreationMode|null $value Value to set for the creationMode property.
    */
    public function setCreationMode(?EngagementCreationMode $value): void {
        $this->getBackingStore()->set('creationMode', $value);
    }

    /**
     * Sets the messages property value. The messages in a Viva Engage conversation.
     * @param array<EngagementConversationMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->getBackingStore()->set('messages', $value);
    }

    /**
     * Sets the starter property value. The starter property
     * @param EngagementConversationMessage|null $value Value to set for the starter property.
    */
    public function setStarter(?EngagementConversationMessage $value): void {
        $this->getBackingStore()->set('starter', $value);
    }

    /**
     * Sets the starterId property value. The unique ID of the first message in a Viva Engage conversation.
     * @param string|null $value Value to set for the starterId property.
    */
    public function setStarterId(?string $value): void {
        $this->getBackingStore()->set('starterId', $value);
    }

}
