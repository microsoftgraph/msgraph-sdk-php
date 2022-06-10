<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConversationThread extends Entity implements Parsable 
{
    /**
     * @var array<Recipient>|null $ccRecipients The Cc: recipients for the thread. Returned only on $select.
    */
    private ?array $ccRecipients = null;
    
    /**
     * @var bool|null $hasAttachments Indicates whether any of the posts within this thread has at least one attachment. Returned by default.
    */
    private ?bool $hasAttachments = null;
    
    /**
     * @var bool|null $isLocked Indicates if the thread is locked. Returned by default.
    */
    private ?bool $isLocked = null;
    
    /**
     * @var DateTime|null $lastDeliveredDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default.
    */
    private ?DateTime $lastDeliveredDateTime = null;
    
    /**
     * @var array<Post>|null $posts The posts property
    */
    private ?array $posts = null;
    
    /**
     * @var string|null $preview A short summary from the body of the latest post in this conversation. Returned by default.
    */
    private ?string $preview = null;
    
    /**
     * @var string|null $topic The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default.
    */
    private ?string $topic = null;
    
    /**
     * @var array<Recipient>|null $toRecipients The To: recipients for the thread. Returned only on $select.
    */
    private ?array $toRecipients = null;
    
    /**
     * @var array<string>|null $uniqueSenders All the users that sent a message to this thread. Returned by default.
    */
    private ?array $uniqueSenders = null;
    
    /**
     * Instantiates a new conversationThread and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConversationThread
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConversationThread {
        return new ConversationThread();
    }

    /**
     * Gets the ccRecipients property value. The Cc: recipients for the thread. Returned only on $select.
     * @return array<Recipient>|null
    */
    public function getCcRecipients(): ?array {
        return $this->ccRecipients;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ccRecipients' => function (ParseNode $n) use ($o) { $o->setCcRecipients($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'hasAttachments' => function (ParseNode $n) use ($o) { $o->setHasAttachments($n->getBooleanValue()); },
            'isLocked' => function (ParseNode $n) use ($o) { $o->setIsLocked($n->getBooleanValue()); },
            'lastDeliveredDateTime' => function (ParseNode $n) use ($o) { $o->setLastDeliveredDateTime($n->getDateTimeValue()); },
            'posts' => function (ParseNode $n) use ($o) { $o->setPosts($n->getCollectionOfObjectValues(array(Post::class, 'createFromDiscriminatorValue'))); },
            'preview' => function (ParseNode $n) use ($o) { $o->setPreview($n->getStringValue()); },
            'topic' => function (ParseNode $n) use ($o) { $o->setTopic($n->getStringValue()); },
            'toRecipients' => function (ParseNode $n) use ($o) { $o->setToRecipients($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'uniqueSenders' => function (ParseNode $n) use ($o) { $o->setUniqueSenders($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the hasAttachments property value. Indicates whether any of the posts within this thread has at least one attachment. Returned by default.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the isLocked property value. Indicates if the thread is locked. Returned by default.
     * @return bool|null
    */
    public function getIsLocked(): ?bool {
        return $this->isLocked;
    }

    /**
     * Gets the lastDeliveredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default.
     * @return DateTime|null
    */
    public function getLastDeliveredDateTime(): ?DateTime {
        return $this->lastDeliveredDateTime;
    }

    /**
     * Gets the posts property value. The posts property
     * @return array<Post>|null
    */
    public function getPosts(): ?array {
        return $this->posts;
    }

    /**
     * Gets the preview property value. A short summary from the body of the latest post in this conversation. Returned by default.
     * @return string|null
    */
    public function getPreview(): ?string {
        return $this->preview;
    }

    /**
     * Gets the topic property value. The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default.
     * @return string|null
    */
    public function getTopic(): ?string {
        return $this->topic;
    }

    /**
     * Gets the toRecipients property value. The To: recipients for the thread. Returned only on $select.
     * @return array<Recipient>|null
    */
    public function getToRecipients(): ?array {
        return $this->toRecipients;
    }

    /**
     * Gets the uniqueSenders property value. All the users that sent a message to this thread. Returned by default.
     * @return array<string>|null
    */
    public function getUniqueSenders(): ?array {
        return $this->uniqueSenders;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('ccRecipients', $this->ccRecipients);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeBooleanValue('isLocked', $this->isLocked);
        $writer->writeDateTimeValue('lastDeliveredDateTime', $this->lastDeliveredDateTime);
        $writer->writeCollectionOfObjectValues('posts', $this->posts);
        $writer->writeStringValue('preview', $this->preview);
        $writer->writeStringValue('topic', $this->topic);
        $writer->writeCollectionOfObjectValues('toRecipients', $this->toRecipients);
        $writer->writeCollectionOfPrimitiveValues('uniqueSenders', $this->uniqueSenders);
    }

    /**
     * Sets the ccRecipients property value. The Cc: recipients for the thread. Returned only on $select.
     *  @param array<Recipient>|null $value Value to set for the ccRecipients property.
    */
    public function setCcRecipients(?array $value ): void {
        $this->ccRecipients = $value;
    }

    /**
     * Sets the hasAttachments property value. Indicates whether any of the posts within this thread has at least one attachment. Returned by default.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value ): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the isLocked property value. Indicates if the thread is locked. Returned by default.
     *  @param bool|null $value Value to set for the isLocked property.
    */
    public function setIsLocked(?bool $value ): void {
        $this->isLocked = $value;
    }

    /**
     * Sets the lastDeliveredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Returned by default.
     *  @param DateTime|null $value Value to set for the lastDeliveredDateTime property.
    */
    public function setLastDeliveredDateTime(?DateTime $value ): void {
        $this->lastDeliveredDateTime = $value;
    }

    /**
     * Sets the posts property value. The posts property
     *  @param array<Post>|null $value Value to set for the posts property.
    */
    public function setPosts(?array $value ): void {
        $this->posts = $value;
    }

    /**
     * Sets the preview property value. A short summary from the body of the latest post in this conversation. Returned by default.
     *  @param string|null $value Value to set for the preview property.
    */
    public function setPreview(?string $value ): void {
        $this->preview = $value;
    }

    /**
     * Sets the topic property value. The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default.
     *  @param string|null $value Value to set for the topic property.
    */
    public function setTopic(?string $value ): void {
        $this->topic = $value;
    }

    /**
     * Sets the toRecipients property value. The To: recipients for the thread. Returned only on $select.
     *  @param array<Recipient>|null $value Value to set for the toRecipients property.
    */
    public function setToRecipients(?array $value ): void {
        $this->toRecipients = $value;
    }

    /**
     * Sets the uniqueSenders property value. All the users that sent a message to this thread. Returned by default.
     *  @param array<string>|null $value Value to set for the uniqueSenders property.
    */
    public function setUniqueSenders(?array $value ): void {
        $this->uniqueSenders = $value;
    }

}
