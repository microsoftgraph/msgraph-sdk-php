<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Conversation extends Entity implements Parsable 
{
    /**
     * Instantiates a new conversation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Conversation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Conversation {
        return new Conversation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'lastDeliveredDateTime' => fn(ParseNode $n) => $o->setLastDeliveredDateTime($n->getDateTimeValue()),
            'preview' => fn(ParseNode $n) => $o->setPreview($n->getStringValue()),
            'threads' => fn(ParseNode $n) => $o->setThreads($n->getCollectionOfObjectValues([ConversationThread::class, 'createFromDiscriminatorValue'])),
            'topic' => fn(ParseNode $n) => $o->setTopic($n->getStringValue()),
            'uniqueSenders' => fn(ParseNode $n) => $o->setUniqueSenders($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the hasAttachments property value. Indicates whether any of the posts within this Conversation has at least one attachment. Supports $filter (eq, ne) and $search.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->getBackingStore()->get('hasAttachments');
    }

    /**
     * Gets the lastDeliveredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getLastDeliveredDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastDeliveredDateTime');
    }

    /**
     * Gets the preview property value. A short summary from the body of the latest post in this conversation. Supports $filter (eq, ne, le, ge).
     * @return string|null
    */
    public function getPreview(): ?string {
        return $this->getBackingStore()->get('preview');
    }

    /**
     * Gets the threads property value. A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable.
     * @return array<ConversationThread>|null
    */
    public function getThreads(): ?array {
        return $this->getBackingStore()->get('threads');
    }

    /**
     * Gets the topic property value. The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated.
     * @return string|null
    */
    public function getTopic(): ?string {
        return $this->getBackingStore()->get('topic');
    }

    /**
     * Gets the uniqueSenders property value. All the users that sent a message to this Conversation.
     * @return array<string>|null
    */
    public function getUniqueSenders(): ?array {
        return $this->getBackingStore()->get('uniqueSenders');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('hasAttachments', $this->getHasAttachments());
        $writer->writeDateTimeValue('lastDeliveredDateTime', $this->getLastDeliveredDateTime());
        $writer->writeStringValue('preview', $this->getPreview());
        $writer->writeCollectionOfObjectValues('threads', $this->getThreads());
        $writer->writeStringValue('topic', $this->getTopic());
        $writer->writeCollectionOfPrimitiveValues('uniqueSenders', $this->getUniqueSenders());
    }

    /**
     * Sets the hasAttachments property value. Indicates whether any of the posts within this Conversation has at least one attachment. Supports $filter (eq, ne) and $search.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the lastDeliveredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the lastDeliveredDateTime property.
    */
    public function setLastDeliveredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastDeliveredDateTime', $value);
    }

    /**
     * Sets the preview property value. A short summary from the body of the latest post in this conversation. Supports $filter (eq, ne, le, ge).
     *  @param string|null $value Value to set for the preview property.
    */
    public function setPreview(?string $value): void {
        $this->getBackingStore()->set('preview', $value);
    }

    /**
     * Sets the threads property value. A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable.
     *  @param array<ConversationThread>|null $value Value to set for the threads property.
    */
    public function setThreads(?array $value): void {
        $this->getBackingStore()->set('threads', $value);
    }

    /**
     * Sets the topic property value. The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated.
     *  @param string|null $value Value to set for the topic property.
    */
    public function setTopic(?string $value): void {
        $this->getBackingStore()->set('topic', $value);
    }

    /**
     * Sets the uniqueSenders property value. All the users that sent a message to this Conversation.
     *  @param array<string>|null $value Value to set for the uniqueSenders property.
    */
    public function setUniqueSenders(?array $value): void {
        $this->getBackingStore()->set('uniqueSenders', $value);
    }

}
