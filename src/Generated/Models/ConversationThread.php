<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConversationThread extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConversationThread and sets the default values.
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
        $val = $this->getBackingStore()->get('ccRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Recipient::class);
            /** @var array<Recipient>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ccRecipients'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ccRecipients' => fn(ParseNode $n) => $o->setCcRecipients($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'isLocked' => fn(ParseNode $n) => $o->setIsLocked($n->getBooleanValue()),
            'lastDeliveredDateTime' => fn(ParseNode $n) => $o->setLastDeliveredDateTime($n->getDateTimeValue()),
            'posts' => fn(ParseNode $n) => $o->setPosts($n->getCollectionOfObjectValues([Post::class, 'createFromDiscriminatorValue'])),
            'preview' => fn(ParseNode $n) => $o->setPreview($n->getStringValue()),
            'topic' => fn(ParseNode $n) => $o->setTopic($n->getStringValue()),
            'toRecipients' => fn(ParseNode $n) => $o->setToRecipients($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'uniqueSenders' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUniqueSenders($val);
            },
        ]);
    }

    /**
     * Gets the hasAttachments property value. Indicates whether any of the posts within this thread has at least one attachment. Returned by default.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        $val = $this->getBackingStore()->get('hasAttachments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasAttachments'");
    }

    /**
     * Gets the isLocked property value. Indicates if the thread is locked. Returned by default.
     * @return bool|null
    */
    public function getIsLocked(): ?bool {
        $val = $this->getBackingStore()->get('isLocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isLocked'");
    }

    /**
     * Gets the lastDeliveredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.Returned by default.
     * @return DateTime|null
    */
    public function getLastDeliveredDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastDeliveredDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastDeliveredDateTime'");
    }

    /**
     * Gets the posts property value. The posts property
     * @return array<Post>|null
    */
    public function getPosts(): ?array {
        $val = $this->getBackingStore()->get('posts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Post::class);
            /** @var array<Post>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'posts'");
    }

    /**
     * Gets the preview property value. A short summary from the body of the latest post in this conversation. Returned by default.
     * @return string|null
    */
    public function getPreview(): ?string {
        $val = $this->getBackingStore()->get('preview');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preview'");
    }

    /**
     * Gets the topic property value. The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default.
     * @return string|null
    */
    public function getTopic(): ?string {
        $val = $this->getBackingStore()->get('topic');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topic'");
    }

    /**
     * Gets the toRecipients property value. The To: recipients for the thread. Returned only on $select.
     * @return array<Recipient>|null
    */
    public function getToRecipients(): ?array {
        $val = $this->getBackingStore()->get('toRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Recipient::class);
            /** @var array<Recipient>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'toRecipients'");
    }

    /**
     * Gets the uniqueSenders property value. All the users that sent a message to this thread. Returned by default.
     * @return array<string>|null
    */
    public function getUniqueSenders(): ?array {
        $val = $this->getBackingStore()->get('uniqueSenders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueSenders'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('ccRecipients', $this->getCcRecipients());
        $writer->writeBooleanValue('hasAttachments', $this->getHasAttachments());
        $writer->writeBooleanValue('isLocked', $this->getIsLocked());
        $writer->writeDateTimeValue('lastDeliveredDateTime', $this->getLastDeliveredDateTime());
        $writer->writeCollectionOfObjectValues('posts', $this->getPosts());
        $writer->writeStringValue('preview', $this->getPreview());
        $writer->writeStringValue('topic', $this->getTopic());
        $writer->writeCollectionOfObjectValues('toRecipients', $this->getToRecipients());
        $writer->writeCollectionOfPrimitiveValues('uniqueSenders', $this->getUniqueSenders());
    }

    /**
     * Sets the ccRecipients property value. The Cc: recipients for the thread. Returned only on $select.
     * @param array<Recipient>|null $value Value to set for the ccRecipients property.
    */
    public function setCcRecipients(?array $value): void {
        $this->getBackingStore()->set('ccRecipients', $value);
    }

    /**
     * Sets the hasAttachments property value. Indicates whether any of the posts within this thread has at least one attachment. Returned by default.
     * @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the isLocked property value. Indicates if the thread is locked. Returned by default.
     * @param bool|null $value Value to set for the isLocked property.
    */
    public function setIsLocked(?bool $value): void {
        $this->getBackingStore()->set('isLocked', $value);
    }

    /**
     * Sets the lastDeliveredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.Returned by default.
     * @param DateTime|null $value Value to set for the lastDeliveredDateTime property.
    */
    public function setLastDeliveredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastDeliveredDateTime', $value);
    }

    /**
     * Sets the posts property value. The posts property
     * @param array<Post>|null $value Value to set for the posts property.
    */
    public function setPosts(?array $value): void {
        $this->getBackingStore()->set('posts', $value);
    }

    /**
     * Sets the preview property value. A short summary from the body of the latest post in this conversation. Returned by default.
     * @param string|null $value Value to set for the preview property.
    */
    public function setPreview(?string $value): void {
        $this->getBackingStore()->set('preview', $value);
    }

    /**
     * Sets the topic property value. The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default.
     * @param string|null $value Value to set for the topic property.
    */
    public function setTopic(?string $value): void {
        $this->getBackingStore()->set('topic', $value);
    }

    /**
     * Sets the toRecipients property value. The To: recipients for the thread. Returned only on $select.
     * @param array<Recipient>|null $value Value to set for the toRecipients property.
    */
    public function setToRecipients(?array $value): void {
        $this->getBackingStore()->set('toRecipients', $value);
    }

    /**
     * Sets the uniqueSenders property value. All the users that sent a message to this thread. Returned by default.
     * @param array<string>|null $value Value to set for the uniqueSenders property.
    */
    public function setUniqueSenders(?array $value): void {
        $this->getBackingStore()->set('uniqueSenders', $value);
    }

}
