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
     * @var array<Attachment>|null $attachments The fileAttachment and itemAttachment attachments for the message.
    */
    private ?array $attachments = null;
    
    /**
     * @var array<Recipient>|null $bccRecipients The Bcc: recipients for the message.
    */
    private ?array $bccRecipients = null;
    
    /**
     * @var ItemBody|null $body The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
    */
    private ?ItemBody $body = null;
    
    /**
     * @var string|null $bodyPreview The first 255 characters of the message body. It is in text format.
    */
    private ?string $bodyPreview = null;
    
    /**
     * @var array<Recipient>|null $ccRecipients The Cc: recipients for the message.
    */
    private ?array $ccRecipients = null;
    
    /**
     * @var string|null $conversationId The ID of the conversation the email belongs to.
    */
    private ?string $conversationId = null;
    
    /**
     * @var StreamInterface|null $conversationIndex Indicates the position of the message within the conversation.
    */
    private ?StreamInterface $conversationIndex = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for the message. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var FollowupFlag|null $flag The flag value that indicates the status, start date, due date, or completion date for the message.
    */
    private ?FollowupFlag $flag = null;
    
    /**
     * @var Recipient|null $from The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
    */
    private ?Recipient $from = null;
    
    /**
     * @var bool|null $hasAttachments Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src='cid:image001.jpg@01D26CD8.6C05F070'>.
    */
    private ?bool $hasAttachments = null;
    
    /**
     * @var Importance|null $importance The importance property
    */
    private ?Importance $importance = null;
    
    /**
     * @var InferenceClassificationType|null $inferenceClassification The inferenceClassification property
    */
    private ?InferenceClassificationType $inferenceClassification = null;
    
    /**
     * @var array<InternetMessageHeader>|null $internetMessageHeaders The internetMessageHeaders property
    */
    private ?array $internetMessageHeaders = null;
    
    /**
     * @var string|null $internetMessageId The internetMessageId property
    */
    private ?string $internetMessageId = null;
    
    /**
     * @var bool|null $isDeliveryReceiptRequested The isDeliveryReceiptRequested property
    */
    private ?bool $isDeliveryReceiptRequested = null;
    
    /**
     * @var bool|null $isDraft The isDraft property
    */
    private ?bool $isDraft = null;
    
    /**
     * @var bool|null $isRead The isRead property
    */
    private ?bool $isRead = null;
    
    /**
     * @var bool|null $isReadReceiptRequested The isReadReceiptRequested property
    */
    private ?bool $isReadReceiptRequested = null;
    
    /**
     * @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the message. Nullable.
    */
    private ?array $multiValueExtendedProperties = null;
    
    /**
     * @var string|null $parentFolderId The parentFolderId property
    */
    private ?string $parentFolderId = null;
    
    /**
     * @var DateTime|null $receivedDateTime The receivedDateTime property
    */
    private ?DateTime $receivedDateTime = null;
    
    /**
     * @var array<Recipient>|null $replyTo The replyTo property
    */
    private ?array $replyTo = null;
    
    /**
     * @var Recipient|null $sender The sender property
    */
    private ?Recipient $sender = null;
    
    /**
     * @var DateTime|null $sentDateTime The sentDateTime property
    */
    private ?DateTime $sentDateTime = null;
    
    /**
     * @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the message. Nullable.
    */
    private ?array $singleValueExtendedProperties = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * @var array<Recipient>|null $toRecipients The toRecipients property
    */
    private ?array $toRecipients = null;
    
    /**
     * @var ItemBody|null $uniqueBody The uniqueBody property
    */
    private ?ItemBody $uniqueBody = null;
    
    /**
     * @var string|null $webLink The webLink property
    */
    private ?string $webLink = null;
    
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
        return $this->attachments;
    }

    /**
     * Gets the bccRecipients property value. The Bcc: recipients for the message.
     * @return array<Recipient>|null
    */
    public function getBccRecipients(): ?array {
        return $this->bccRecipients;
    }

    /**
     * Gets the body property value. The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the bodyPreview property value. The first 255 characters of the message body. It is in text format.
     * @return string|null
    */
    public function getBodyPreview(): ?string {
        return $this->bodyPreview;
    }

    /**
     * Gets the ccRecipients property value. The Cc: recipients for the message.
     * @return array<Recipient>|null
    */
    public function getCcRecipients(): ?array {
        return $this->ccRecipients;
    }

    /**
     * Gets the conversationId property value. The ID of the conversation the email belongs to.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the conversationIndex property value. Indicates the position of the message within the conversation.
     * @return StreamInterface
    */
    public function getConversationIndex(): StreamInterface {
        return $this->conversationIndex;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the message. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attachments' => function (ParseNode $n) use ($o) { $o->setAttachments($n->getCollectionOfObjectValues(array(Attachment::class, 'createFromDiscriminatorValue'))); },
            'bccRecipients' => function (ParseNode $n) use ($o) { $o->setBccRecipients($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'body' => function (ParseNode $n) use ($o) { $o->setBody($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            'bodyPreview' => function (ParseNode $n) use ($o) { $o->setBodyPreview($n->getStringValue()); },
            'ccRecipients' => function (ParseNode $n) use ($o) { $o->setCcRecipients($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'conversationId' => function (ParseNode $n) use ($o) { $o->setConversationId($n->getStringValue()); },
            'conversationIndex' => function (ParseNode $n) use ($o) { $o->setConversationIndex($n->getBinaryContent()); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'flag' => function (ParseNode $n) use ($o) { $o->setFlag($n->getObjectValue(array(FollowupFlag::class, 'createFromDiscriminatorValue'))); },
            'from' => function (ParseNode $n) use ($o) { $o->setFrom($n->getObjectValue(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'hasAttachments' => function (ParseNode $n) use ($o) { $o->setHasAttachments($n->getBooleanValue()); },
            'importance' => function (ParseNode $n) use ($o) { $o->setImportance($n->getEnumValue(Importance::class)); },
            'inferenceClassification' => function (ParseNode $n) use ($o) { $o->setInferenceClassification($n->getEnumValue(InferenceClassificationType::class)); },
            'internetMessageHeaders' => function (ParseNode $n) use ($o) { $o->setInternetMessageHeaders($n->getCollectionOfObjectValues(array(InternetMessageHeader::class, 'createFromDiscriminatorValue'))); },
            'internetMessageId' => function (ParseNode $n) use ($o) { $o->setInternetMessageId($n->getStringValue()); },
            'isDeliveryReceiptRequested' => function (ParseNode $n) use ($o) { $o->setIsDeliveryReceiptRequested($n->getBooleanValue()); },
            'isDraft' => function (ParseNode $n) use ($o) { $o->setIsDraft($n->getBooleanValue()); },
            'isRead' => function (ParseNode $n) use ($o) { $o->setIsRead($n->getBooleanValue()); },
            'isReadReceiptRequested' => function (ParseNode $n) use ($o) { $o->setIsReadReceiptRequested($n->getBooleanValue()); },
            'multiValueExtendedProperties' => function (ParseNode $n) use ($o) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(array(MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'))); },
            'parentFolderId' => function (ParseNode $n) use ($o) { $o->setParentFolderId($n->getStringValue()); },
            'receivedDateTime' => function (ParseNode $n) use ($o) { $o->setReceivedDateTime($n->getDateTimeValue()); },
            'replyTo' => function (ParseNode $n) use ($o) { $o->setReplyTo($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'sender' => function (ParseNode $n) use ($o) { $o->setSender($n->getObjectValue(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'sentDateTime' => function (ParseNode $n) use ($o) { $o->setSentDateTime($n->getDateTimeValue()); },
            'singleValueExtendedProperties' => function (ParseNode $n) use ($o) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(array(SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'))); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
            'toRecipients' => function (ParseNode $n) use ($o) { $o->setToRecipients($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'uniqueBody' => function (ParseNode $n) use ($o) { $o->setUniqueBody($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            'webLink' => function (ParseNode $n) use ($o) { $o->setWebLink($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the message.
     * @return FollowupFlag|null
    */
    public function getFlag(): ?FollowupFlag {
        return $this->flag;
    }

    /**
     * Gets the from property value. The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
     * @return Recipient|null
    */
    public function getFrom(): ?Recipient {
        return $this->from;
    }

    /**
     * Gets the hasAttachments property value. Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src='cid:image001.jpg@01D26CD8.6C05F070'>.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the importance property value. The importance property
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->importance;
    }

    /**
     * Gets the inferenceClassification property value. The inferenceClassification property
     * @return InferenceClassificationType|null
    */
    public function getInferenceClassification(): ?InferenceClassificationType {
        return $this->inferenceClassification;
    }

    /**
     * Gets the internetMessageHeaders property value. The internetMessageHeaders property
     * @return array<InternetMessageHeader>|null
    */
    public function getInternetMessageHeaders(): ?array {
        return $this->internetMessageHeaders;
    }

    /**
     * Gets the internetMessageId property value. The internetMessageId property
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        return $this->internetMessageId;
    }

    /**
     * Gets the isDeliveryReceiptRequested property value. The isDeliveryReceiptRequested property
     * @return bool|null
    */
    public function getIsDeliveryReceiptRequested(): ?bool {
        return $this->isDeliveryReceiptRequested;
    }

    /**
     * Gets the isDraft property value. The isDraft property
     * @return bool|null
    */
    public function getIsDraft(): ?bool {
        return $this->isDraft;
    }

    /**
     * Gets the isRead property value. The isRead property
     * @return bool|null
    */
    public function getIsRead(): ?bool {
        return $this->isRead;
    }

    /**
     * Gets the isReadReceiptRequested property value. The isReadReceiptRequested property
     * @return bool|null
    */
    public function getIsReadReceiptRequested(): ?bool {
        return $this->isReadReceiptRequested;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the message. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the parentFolderId property value. The parentFolderId property
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->parentFolderId;
    }

    /**
     * Gets the receivedDateTime property value. The receivedDateTime property
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        return $this->receivedDateTime;
    }

    /**
     * Gets the replyTo property value. The replyTo property
     * @return array<Recipient>|null
    */
    public function getReplyTo(): ?array {
        return $this->replyTo;
    }

    /**
     * Gets the sender property value. The sender property
     * @return Recipient|null
    */
    public function getSender(): ?Recipient {
        return $this->sender;
    }

    /**
     * Gets the sentDateTime property value. The sentDateTime property
     * @return DateTime|null
    */
    public function getSentDateTime(): ?DateTime {
        return $this->sentDateTime;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the message. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the toRecipients property value. The toRecipients property
     * @return array<Recipient>|null
    */
    public function getToRecipients(): ?array {
        return $this->toRecipients;
    }

    /**
     * Gets the uniqueBody property value. The uniqueBody property
     * @return ItemBody|null
    */
    public function getUniqueBody(): ?ItemBody {
        return $this->uniqueBody;
    }

    /**
     * Gets the webLink property value. The webLink property
     * @return string|null
    */
    public function getWebLink(): ?string {
        return $this->webLink;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attachments', $this->attachments);
        $writer->writeCollectionOfObjectValues('bccRecipients', $this->bccRecipients);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeStringValue('bodyPreview', $this->bodyPreview);
        $writer->writeCollectionOfObjectValues('ccRecipients', $this->ccRecipients);
        $writer->writeStringValue('conversationId', $this->conversationId);
        $writer->writeBinaryContent('conversationIndex', $this->conversationIndex);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeObjectValue('flag', $this->flag);
        $writer->writeObjectValue('from', $this->from);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeEnumValue('inferenceClassification', $this->inferenceClassification);
        $writer->writeCollectionOfObjectValues('internetMessageHeaders', $this->internetMessageHeaders);
        $writer->writeStringValue('internetMessageId', $this->internetMessageId);
        $writer->writeBooleanValue('isDeliveryReceiptRequested', $this->isDeliveryReceiptRequested);
        $writer->writeBooleanValue('isDraft', $this->isDraft);
        $writer->writeBooleanValue('isRead', $this->isRead);
        $writer->writeBooleanValue('isReadReceiptRequested', $this->isReadReceiptRequested);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('parentFolderId', $this->parentFolderId);
        $writer->writeDateTimeValue('receivedDateTime', $this->receivedDateTime);
        $writer->writeCollectionOfObjectValues('replyTo', $this->replyTo);
        $writer->writeObjectValue('sender', $this->sender);
        $writer->writeDateTimeValue('sentDateTime', $this->sentDateTime);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeCollectionOfObjectValues('toRecipients', $this->toRecipients);
        $writer->writeObjectValue('uniqueBody', $this->uniqueBody);
        $writer->writeStringValue('webLink', $this->webLink);
    }

    /**
     * Sets the attachments property value. The fileAttachment and itemAttachment attachments for the message.
     *  @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value ): void {
        $this->attachments = $value;
    }

    /**
     * Sets the bccRecipients property value. The Bcc: recipients for the message.
     *  @param array<Recipient>|null $value Value to set for the bccRecipients property.
    */
    public function setBccRecipients(?array $value ): void {
        $this->bccRecipients = $value;
    }

    /**
     * Sets the body property value. The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the bodyPreview property value. The first 255 characters of the message body. It is in text format.
     *  @param string|null $value Value to set for the bodyPreview property.
    */
    public function setBodyPreview(?string $value ): void {
        $this->bodyPreview = $value;
    }

    /**
     * Sets the ccRecipients property value. The Cc: recipients for the message.
     *  @param array<Recipient>|null $value Value to set for the ccRecipients property.
    */
    public function setCcRecipients(?array $value ): void {
        $this->ccRecipients = $value;
    }

    /**
     * Sets the conversationId property value. The ID of the conversation the email belongs to.
     *  @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value ): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the conversationIndex property value. Indicates the position of the message within the conversation.
     *  @param StreamInterface|null $value Value to set for the conversationIndex property.
    */
    public function setConversationIndex(?StreamInterface $value ): void {
        $this->conversationIndex = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the message. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the message.
     *  @param FollowupFlag|null $value Value to set for the flag property.
    */
    public function setFlag(?FollowupFlag $value ): void {
        $this->flag = $value;
    }

    /**
     * Sets the from property value. The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
     *  @param Recipient|null $value Value to set for the from property.
    */
    public function setFrom(?Recipient $value ): void {
        $this->from = $value;
    }

    /**
     * Sets the hasAttachments property value. Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src='cid:image001.jpg@01D26CD8.6C05F070'>.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value ): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the importance property value. The importance property
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the inferenceClassification property value. The inferenceClassification property
     *  @param InferenceClassificationType|null $value Value to set for the inferenceClassification property.
    */
    public function setInferenceClassification(?InferenceClassificationType $value ): void {
        $this->inferenceClassification = $value;
    }

    /**
     * Sets the internetMessageHeaders property value. The internetMessageHeaders property
     *  @param array<InternetMessageHeader>|null $value Value to set for the internetMessageHeaders property.
    */
    public function setInternetMessageHeaders(?array $value ): void {
        $this->internetMessageHeaders = $value;
    }

    /**
     * Sets the internetMessageId property value. The internetMessageId property
     *  @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value ): void {
        $this->internetMessageId = $value;
    }

    /**
     * Sets the isDeliveryReceiptRequested property value. The isDeliveryReceiptRequested property
     *  @param bool|null $value Value to set for the isDeliveryReceiptRequested property.
    */
    public function setIsDeliveryReceiptRequested(?bool $value ): void {
        $this->isDeliveryReceiptRequested = $value;
    }

    /**
     * Sets the isDraft property value. The isDraft property
     *  @param bool|null $value Value to set for the isDraft property.
    */
    public function setIsDraft(?bool $value ): void {
        $this->isDraft = $value;
    }

    /**
     * Sets the isRead property value. The isRead property
     *  @param bool|null $value Value to set for the isRead property.
    */
    public function setIsRead(?bool $value ): void {
        $this->isRead = $value;
    }

    /**
     * Sets the isReadReceiptRequested property value. The isReadReceiptRequested property
     *  @param bool|null $value Value to set for the isReadReceiptRequested property.
    */
    public function setIsReadReceiptRequested(?bool $value ): void {
        $this->isReadReceiptRequested = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the message. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the parentFolderId property value. The parentFolderId property
     *  @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value ): void {
        $this->parentFolderId = $value;
    }

    /**
     * Sets the receivedDateTime property value. The receivedDateTime property
     *  @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value ): void {
        $this->receivedDateTime = $value;
    }

    /**
     * Sets the replyTo property value. The replyTo property
     *  @param array<Recipient>|null $value Value to set for the replyTo property.
    */
    public function setReplyTo(?array $value ): void {
        $this->replyTo = $value;
    }

    /**
     * Sets the sender property value. The sender property
     *  @param Recipient|null $value Value to set for the sender property.
    */
    public function setSender(?Recipient $value ): void {
        $this->sender = $value;
    }

    /**
     * Sets the sentDateTime property value. The sentDateTime property
     *  @param DateTime|null $value Value to set for the sentDateTime property.
    */
    public function setSentDateTime(?DateTime $value ): void {
        $this->sentDateTime = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the message. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the toRecipients property value. The toRecipients property
     *  @param array<Recipient>|null $value Value to set for the toRecipients property.
    */
    public function setToRecipients(?array $value ): void {
        $this->toRecipients = $value;
    }

    /**
     * Sets the uniqueBody property value. The uniqueBody property
     *  @param ItemBody|null $value Value to set for the uniqueBody property.
    */
    public function setUniqueBody(?ItemBody $value ): void {
        $this->uniqueBody = $value;
    }

    /**
     * Sets the webLink property value. The webLink property
     *  @param string|null $value Value to set for the webLink property.
    */
    public function setWebLink(?string $value ): void {
        $this->webLink = $value;
    }

}
