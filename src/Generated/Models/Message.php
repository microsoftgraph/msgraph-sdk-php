<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Message extends OutlookItem implements Parsable 
{
    /**
     * Instantiates a new Message and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.message');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Message
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Message {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.calendarSharingMessage': return new CalendarSharingMessage();
                case '#microsoft.graph.eventMessage': return new EventMessage();
                case '#microsoft.graph.eventMessageRequest': return new EventMessageRequest();
                case '#microsoft.graph.eventMessageResponse': return new EventMessageResponse();
            }
        }
        return new Message();
    }

    /**
     * Gets the attachments property value. The fileAttachment and itemAttachment attachments for the message.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        return $this->getBackingStore()->get('attachments');
    }

    /**
     * Gets the bccRecipients property value. The Bcc: recipients for the message.
     * @return array<Recipient>|null
    */
    public function getBccRecipients(): ?array {
        return $this->getBackingStore()->get('bccRecipients');
    }

    /**
     * Gets the body property value. The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->getBackingStore()->get('body');
    }

    /**
     * Gets the bodyPreview property value. The first 255 characters of the message body. It is in text format.
     * @return string|null
    */
    public function getBodyPreview(): ?string {
        return $this->getBackingStore()->get('bodyPreview');
    }

    /**
     * Gets the ccRecipients property value. The Cc: recipients for the message.
     * @return array<Recipient>|null
    */
    public function getCcRecipients(): ?array {
        return $this->getBackingStore()->get('ccRecipients');
    }

    /**
     * Gets the conversationId property value. The ID of the conversation the email belongs to.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->getBackingStore()->get('conversationId');
    }

    /**
     * Gets the conversationIndex property value. Indicates the position of the message within the conversation.
     * @return StreamInterface|null
    */
    public function getConversationIndex(): ?StreamInterface {
        return $this->getBackingStore()->get('conversationIndex');
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the message. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->getBackingStore()->get('extensions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([Attachment::class, 'createFromDiscriminatorValue'])),
            'bccRecipients' => fn(ParseNode $n) => $o->setBccRecipients($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'bodyPreview' => fn(ParseNode $n) => $o->setBodyPreview($n->getStringValue()),
            'ccRecipients' => fn(ParseNode $n) => $o->setCcRecipients($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'conversationIndex' => fn(ParseNode $n) => $o->setConversationIndex($n->getBinaryContent()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'flag' => fn(ParseNode $n) => $o->setFlag($n->getObjectValue([FollowupFlag::class, 'createFromDiscriminatorValue'])),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getObjectValue([Recipient::class, 'createFromDiscriminatorValue'])),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(Importance::class)),
            'inferenceClassification' => fn(ParseNode $n) => $o->setInferenceClassification($n->getEnumValue(InferenceClassificationType::class)),
            'internetMessageHeaders' => fn(ParseNode $n) => $o->setInternetMessageHeaders($n->getCollectionOfObjectValues([InternetMessageHeader::class, 'createFromDiscriminatorValue'])),
            'internetMessageId' => fn(ParseNode $n) => $o->setInternetMessageId($n->getStringValue()),
            'isDeliveryReceiptRequested' => fn(ParseNode $n) => $o->setIsDeliveryReceiptRequested($n->getBooleanValue()),
            'isDraft' => fn(ParseNode $n) => $o->setIsDraft($n->getBooleanValue()),
            'isRead' => fn(ParseNode $n) => $o->setIsRead($n->getBooleanValue()),
            'isReadReceiptRequested' => fn(ParseNode $n) => $o->setIsReadReceiptRequested($n->getBooleanValue()),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'parentFolderId' => fn(ParseNode $n) => $o->setParentFolderId($n->getStringValue()),
            'receivedDateTime' => fn(ParseNode $n) => $o->setReceivedDateTime($n->getDateTimeValue()),
            'replyTo' => fn(ParseNode $n) => $o->setReplyTo($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'sender' => fn(ParseNode $n) => $o->setSender($n->getObjectValue([Recipient::class, 'createFromDiscriminatorValue'])),
            'sentDateTime' => fn(ParseNode $n) => $o->setSentDateTime($n->getDateTimeValue()),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'toRecipients' => fn(ParseNode $n) => $o->setToRecipients($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'uniqueBody' => fn(ParseNode $n) => $o->setUniqueBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'webLink' => fn(ParseNode $n) => $o->setWebLink($n->getStringValue()),
        ]);
    }

    /**
     * Gets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the message.
     * @return FollowupFlag|null
    */
    public function getFlag(): ?FollowupFlag {
        return $this->getBackingStore()->get('flag');
    }

    /**
     * Gets the from property value. The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
     * @return Recipient|null
    */
    public function getFrom(): ?Recipient {
        return $this->getBackingStore()->get('from');
    }

    /**
     * Gets the hasAttachments property value. Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src='cid:image001.jpg@01D26CD8.6C05F070'>.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->getBackingStore()->get('hasAttachments');
    }

    /**
     * Gets the importance property value. 
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->getBackingStore()->get('importance');
    }

    /**
     * Gets the inferenceClassification property value. 
     * @return InferenceClassificationType|null
    */
    public function getInferenceClassification(): ?InferenceClassificationType {
        return $this->getBackingStore()->get('inferenceClassification');
    }

    /**
     * Gets the internetMessageHeaders property value. 
     * @return array<InternetMessageHeader>|null
    */
    public function getInternetMessageHeaders(): ?array {
        return $this->getBackingStore()->get('internetMessageHeaders');
    }

    /**
     * Gets the internetMessageId property value. 
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        return $this->getBackingStore()->get('internetMessageId');
    }

    /**
     * Gets the isDeliveryReceiptRequested property value. 
     * @return bool|null
    */
    public function getIsDeliveryReceiptRequested(): ?bool {
        return $this->getBackingStore()->get('isDeliveryReceiptRequested');
    }

    /**
     * Gets the isDraft property value. 
     * @return bool|null
    */
    public function getIsDraft(): ?bool {
        return $this->getBackingStore()->get('isDraft');
    }

    /**
     * Gets the isRead property value. 
     * @return bool|null
    */
    public function getIsRead(): ?bool {
        return $this->getBackingStore()->get('isRead');
    }

    /**
     * Gets the isReadReceiptRequested property value. 
     * @return bool|null
    */
    public function getIsReadReceiptRequested(): ?bool {
        return $this->getBackingStore()->get('isReadReceiptRequested');
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the message. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->getBackingStore()->get('multiValueExtendedProperties');
    }

    /**
     * Gets the parentFolderId property value. 
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->getBackingStore()->get('parentFolderId');
    }

    /**
     * Gets the receivedDateTime property value. 
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('receivedDateTime');
    }

    /**
     * Gets the replyTo property value. 
     * @return array<Recipient>|null
    */
    public function getReplyTo(): ?array {
        return $this->getBackingStore()->get('replyTo');
    }

    /**
     * Gets the sender property value. 
     * @return Recipient|null
    */
    public function getSender(): ?Recipient {
        return $this->getBackingStore()->get('sender');
    }

    /**
     * Gets the sentDateTime property value. 
     * @return DateTime|null
    */
    public function getSentDateTime(): ?DateTime {
        return $this->getBackingStore()->get('sentDateTime');
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the message. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->getBackingStore()->get('singleValueExtendedProperties');
    }

    /**
     * Gets the subject property value. 
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->getBackingStore()->get('subject');
    }

    /**
     * Gets the toRecipients property value. 
     * @return array<Recipient>|null
    */
    public function getToRecipients(): ?array {
        return $this->getBackingStore()->get('toRecipients');
    }

    /**
     * Gets the uniqueBody property value. 
     * @return ItemBody|null
    */
    public function getUniqueBody(): ?ItemBody {
        return $this->getBackingStore()->get('uniqueBody');
    }

    /**
     * Gets the webLink property value. 
     * @return string|null
    */
    public function getWebLink(): ?string {
        return $this->getBackingStore()->get('webLink');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeCollectionOfObjectValues('bccRecipients', $this->getBccRecipients());
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeStringValue('bodyPreview', $this->getBodyPreview());
        $writer->writeCollectionOfObjectValues('ccRecipients', $this->getCcRecipients());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeBinaryContent('conversationIndex', $this->getConversationIndex());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeObjectValue('flag', $this->getFlag());
        $writer->writeObjectValue('from', $this->getFrom());
        $writer->writeBooleanValue('hasAttachments', $this->getHasAttachments());
        $writer->writeEnumValue('importance', $this->getImportance());
        $writer->writeEnumValue('inferenceClassification', $this->getInferenceClassification());
        $writer->writeCollectionOfObjectValues('internetMessageHeaders', $this->getInternetMessageHeaders());
        $writer->writeStringValue('internetMessageId', $this->getInternetMessageId());
        $writer->writeBooleanValue('isDeliveryReceiptRequested', $this->getIsDeliveryReceiptRequested());
        $writer->writeBooleanValue('isDraft', $this->getIsDraft());
        $writer->writeBooleanValue('isRead', $this->getIsRead());
        $writer->writeBooleanValue('isReadReceiptRequested', $this->getIsReadReceiptRequested());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeStringValue('parentFolderId', $this->getParentFolderId());
        $writer->writeDateTimeValue('receivedDateTime', $this->getReceivedDateTime());
        $writer->writeCollectionOfObjectValues('replyTo', $this->getReplyTo());
        $writer->writeObjectValue('sender', $this->getSender());
        $writer->writeDateTimeValue('sentDateTime', $this->getSentDateTime());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeCollectionOfObjectValues('toRecipients', $this->getToRecipients());
        $writer->writeObjectValue('uniqueBody', $this->getUniqueBody());
        $writer->writeStringValue('webLink', $this->getWebLink());
    }

    /**
     * Sets the attachments property value. The fileAttachment and itemAttachment attachments for the message.
     * @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the bccRecipients property value. The Bcc: recipients for the message.
     * @param array<Recipient>|null $value Value to set for the bccRecipients property.
    */
    public function setBccRecipients(?array $value): void {
        $this->getBackingStore()->set('bccRecipients', $value);
    }

    /**
     * Sets the body property value. The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the bodyPreview property value. The first 255 characters of the message body. It is in text format.
     * @param string|null $value Value to set for the bodyPreview property.
    */
    public function setBodyPreview(?string $value): void {
        $this->getBackingStore()->set('bodyPreview', $value);
    }

    /**
     * Sets the ccRecipients property value. The Cc: recipients for the message.
     * @param array<Recipient>|null $value Value to set for the ccRecipients property.
    */
    public function setCcRecipients(?array $value): void {
        $this->getBackingStore()->set('ccRecipients', $value);
    }

    /**
     * Sets the conversationId property value. The ID of the conversation the email belongs to.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->getBackingStore()->set('conversationId', $value);
    }

    /**
     * Sets the conversationIndex property value. Indicates the position of the message within the conversation.
     * @param StreamInterface|null $value Value to set for the conversationIndex property.
    */
    public function setConversationIndex(?StreamInterface $value): void {
        $this->getBackingStore()->set('conversationIndex', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the message. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the message.
     * @param FollowupFlag|null $value Value to set for the flag property.
    */
    public function setFlag(?FollowupFlag $value): void {
        $this->getBackingStore()->set('flag', $value);
    }

    /**
     * Sets the from property value. The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
     * @param Recipient|null $value Value to set for the from property.
    */
    public function setFrom(?Recipient $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the hasAttachments property value. Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src='cid:image001.jpg@01D26CD8.6C05F070'>.
     * @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the importance property value. 
     * @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the inferenceClassification property value. 
     * @param InferenceClassificationType|null $value Value to set for the inferenceClassification property.
    */
    public function setInferenceClassification(?InferenceClassificationType $value): void {
        $this->getBackingStore()->set('inferenceClassification', $value);
    }

    /**
     * Sets the internetMessageHeaders property value. 
     * @param array<InternetMessageHeader>|null $value Value to set for the internetMessageHeaders property.
    */
    public function setInternetMessageHeaders(?array $value): void {
        $this->getBackingStore()->set('internetMessageHeaders', $value);
    }

    /**
     * Sets the internetMessageId property value. 
     * @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value): void {
        $this->getBackingStore()->set('internetMessageId', $value);
    }

    /**
     * Sets the isDeliveryReceiptRequested property value. 
     * @param bool|null $value Value to set for the isDeliveryReceiptRequested property.
    */
    public function setIsDeliveryReceiptRequested(?bool $value): void {
        $this->getBackingStore()->set('isDeliveryReceiptRequested', $value);
    }

    /**
     * Sets the isDraft property value. 
     * @param bool|null $value Value to set for the isDraft property.
    */
    public function setIsDraft(?bool $value): void {
        $this->getBackingStore()->set('isDraft', $value);
    }

    /**
     * Sets the isRead property value. 
     * @param bool|null $value Value to set for the isRead property.
    */
    public function setIsRead(?bool $value): void {
        $this->getBackingStore()->set('isRead', $value);
    }

    /**
     * Sets the isReadReceiptRequested property value. 
     * @param bool|null $value Value to set for the isReadReceiptRequested property.
    */
    public function setIsReadReceiptRequested(?bool $value): void {
        $this->getBackingStore()->set('isReadReceiptRequested', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the message. Nullable.
     * @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the parentFolderId property value. 
     * @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value): void {
        $this->getBackingStore()->set('parentFolderId', $value);
    }

    /**
     * Sets the receivedDateTime property value. 
     * @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTime', $value);
    }

    /**
     * Sets the replyTo property value. 
     * @param array<Recipient>|null $value Value to set for the replyTo property.
    */
    public function setReplyTo(?array $value): void {
        $this->getBackingStore()->set('replyTo', $value);
    }

    /**
     * Sets the sender property value. 
     * @param Recipient|null $value Value to set for the sender property.
    */
    public function setSender(?Recipient $value): void {
        $this->getBackingStore()->set('sender', $value);
    }

    /**
     * Sets the sentDateTime property value. 
     * @param DateTime|null $value Value to set for the sentDateTime property.
    */
    public function setSentDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('sentDateTime', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the message. Nullable.
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

    /**
     * Sets the subject property value. 
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the toRecipients property value. 
     * @param array<Recipient>|null $value Value to set for the toRecipients property.
    */
    public function setToRecipients(?array $value): void {
        $this->getBackingStore()->set('toRecipients', $value);
    }

    /**
     * Sets the uniqueBody property value. 
     * @param ItemBody|null $value Value to set for the uniqueBody property.
    */
    public function setUniqueBody(?ItemBody $value): void {
        $this->getBackingStore()->set('uniqueBody', $value);
    }

    /**
     * Sets the webLink property value. 
     * @param string|null $value Value to set for the webLink property.
    */
    public function setWebLink(?string $value): void {
        $this->getBackingStore()->set('webLink', $value);
    }

}
