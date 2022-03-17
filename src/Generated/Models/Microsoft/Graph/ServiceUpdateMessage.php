<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class ServiceUpdateMessage extends ServiceAnnouncementBase 
{
    /** @var DateTime|null $actionRequiredByDateTime The expected deadline of the action for the message. */
    private ?DateTime $actionRequiredByDateTime = null;
    
    /** @var array<ServiceAnnouncementAttachment>|null $attachments A collection of serviceAnnouncementAttachments. */
    private ?array $attachments = null;
    
    /** @var StreamInterface|null $attachmentsArchive The zip file that contains all attachments for a message. */
    private ?StreamInterface $attachmentsArchive = null;
    
    /** @var ItemBody|null $body  */
    private ?ItemBody $body = null;
    
    /** @var ServiceUpdateCategory|null $category The service message category. Possible values are: preventOrFixIssue, planForChange, stayInformed, unknownFutureValue. */
    private ?ServiceUpdateCategory $category = null;
    
    /** @var bool|null $hasAttachments Indicates whether the message has any attachment. */
    private ?bool $hasAttachments = null;
    
    /** @var bool|null $isMajorChange Indicates whether the message describes a major update for the service. */
    private ?bool $isMajorChange = null;
    
    /** @var array<string>|null $services The affected services by the service message. */
    private ?array $services = null;
    
    /** @var ServiceUpdateSeverity|null $severity The severity of the service message. Possible values are: normal, high, critical, unknownFutureValue. */
    private ?ServiceUpdateSeverity $severity = null;
    
    /** @var array<string>|null $tags A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on. */
    private ?array $tags = null;
    
    /** @var ServiceUpdateMessageViewpoint|null $viewPoint Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions. */
    private ?ServiceUpdateMessageViewpoint $viewPoint = null;
    
    /**
     * Instantiates a new serviceUpdateMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceUpdateMessage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ServiceUpdateMessage {
        return new ServiceUpdateMessage();
    }

    /**
     * Gets the actionRequiredByDateTime property value. The expected deadline of the action for the message.
     * @return DateTime|null
    */
    public function getActionRequiredByDateTime(): ?DateTime {
        return $this->actionRequiredByDateTime;
    }

    /**
     * Gets the attachments property value. A collection of serviceAnnouncementAttachments.
     * @return array<ServiceAnnouncementAttachment>|null
    */
    public function getAttachments(): ?array {
        return $this->attachments;
    }

    /**
     * Gets the attachmentsArchive property value. The zip file that contains all attachments for a message.
     * @return StreamInterface|null
    */
    public function getAttachmentsArchive(): ?StreamInterface {
        return $this->attachmentsArchive;
    }

    /**
     * Gets the body property value. 
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the category property value. The service message category. Possible values are: preventOrFixIssue, planForChange, stayInformed, unknownFutureValue.
     * @return ServiceUpdateCategory|null
    */
    public function getCategory(): ?ServiceUpdateCategory {
        return $this->category;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'actionRequiredByDateTime' => function (self $o, ParseNode $n) { $o->setActionRequiredByDateTime($n->getDateTimeValue()); },
            'attachments' => function (self $o, ParseNode $n) { $o->setAttachments($n->getCollectionOfObjectValues(ServiceAnnouncementAttachment::class)); },
            'attachmentsArchive' => function (self $o, ParseNode $n) { $o->setAttachmentsArchive($n->getBinaryContent()); },
            'body' => function (self $o, ParseNode $n) { $o->setBody($n->getObjectValue(ItemBody::class)); },
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getEnumValue(ServiceUpdateCategory::class)); },
            'hasAttachments' => function (self $o, ParseNode $n) { $o->setHasAttachments($n->getBooleanValue()); },
            'isMajorChange' => function (self $o, ParseNode $n) { $o->setIsMajorChange($n->getBooleanValue()); },
            'services' => function (self $o, ParseNode $n) { $o->setServices($n->getCollectionOfPrimitiveValues()); },
            'severity' => function (self $o, ParseNode $n) { $o->setSeverity($n->getEnumValue(ServiceUpdateSeverity::class)); },
            'tags' => function (self $o, ParseNode $n) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'viewPoint' => function (self $o, ParseNode $n) { $o->setViewPoint($n->getObjectValue(ServiceUpdateMessageViewpoint::class)); },
        ]);
    }

    /**
     * Gets the hasAttachments property value. Indicates whether the message has any attachment.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the isMajorChange property value. Indicates whether the message describes a major update for the service.
     * @return bool|null
    */
    public function getIsMajorChange(): ?bool {
        return $this->isMajorChange;
    }

    /**
     * Gets the services property value. The affected services by the service message.
     * @return array<string>|null
    */
    public function getServices(): ?array {
        return $this->services;
    }

    /**
     * Gets the severity property value. The severity of the service message. Possible values are: normal, high, critical, unknownFutureValue.
     * @return ServiceUpdateSeverity|null
    */
    public function getSeverity(): ?ServiceUpdateSeverity {
        return $this->severity;
    }

    /**
     * Gets the tags property value. A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the viewPoint property value. Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
     * @return ServiceUpdateMessageViewpoint|null
    */
    public function getViewPoint(): ?ServiceUpdateMessageViewpoint {
        return $this->viewPoint;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('actionRequiredByDateTime', $this->actionRequiredByDateTime);
        $writer->writeCollectionOfObjectValues('attachments', $this->attachments);
        $writer->writeBinaryContent('attachmentsArchive', $this->attachmentsArchive);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeBooleanValue('isMajorChange', $this->isMajorChange);
        $writer->writeCollectionOfPrimitiveValues('services', $this->services);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeObjectValue('viewPoint', $this->viewPoint);
    }

    /**
     * Sets the actionRequiredByDateTime property value. The expected deadline of the action for the message.
     *  @param DateTime|null $value Value to set for the actionRequiredByDateTime property.
    */
    public function setActionRequiredByDateTime(?DateTime $value ): void {
        $this->actionRequiredByDateTime = $value;
    }

    /**
     * Sets the attachments property value. A collection of serviceAnnouncementAttachments.
     *  @param array<ServiceAnnouncementAttachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value ): void {
        $this->attachments = $value;
    }

    /**
     * Sets the attachmentsArchive property value. The zip file that contains all attachments for a message.
     *  @param StreamInterface|null $value Value to set for the attachmentsArchive property.
    */
    public function setAttachmentsArchive(?StreamInterface $value ): void {
        $this->attachmentsArchive = $value;
    }

    /**
     * Sets the body property value. 
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the category property value. The service message category. Possible values are: preventOrFixIssue, planForChange, stayInformed, unknownFutureValue.
     *  @param ServiceUpdateCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ServiceUpdateCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the hasAttachments property value. Indicates whether the message has any attachment.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value ): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the isMajorChange property value. Indicates whether the message describes a major update for the service.
     *  @param bool|null $value Value to set for the isMajorChange property.
    */
    public function setIsMajorChange(?bool $value ): void {
        $this->isMajorChange = $value;
    }

    /**
     * Sets the services property value. The affected services by the service message.
     *  @param array<string>|null $value Value to set for the services property.
    */
    public function setServices(?array $value ): void {
        $this->services = $value;
    }

    /**
     * Sets the severity property value. The severity of the service message. Possible values are: normal, high, critical, unknownFutureValue.
     *  @param ServiceUpdateSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?ServiceUpdateSeverity $value ): void {
        $this->severity = $value;
    }

    /**
     * Sets the tags property value. A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on.
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the viewPoint property value. Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
     *  @param ServiceUpdateMessageViewpoint|null $value Value to set for the viewPoint property.
    */
    public function setViewPoint(?ServiceUpdateMessageViewpoint $value ): void {
        $this->viewPoint = $value;
    }

}
