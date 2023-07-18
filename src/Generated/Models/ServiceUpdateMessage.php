<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class ServiceUpdateMessage extends ServiceAnnouncementBase implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new serviceUpdateMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.serviceUpdateMessage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceUpdateMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceUpdateMessage {
        return new ServiceUpdateMessage();
    }

    /**
     * Gets the actionRequiredByDateTime property value. The expected deadline of the action for the message.
     * @return DateTime|null
    */
    public function getActionRequiredByDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('actionRequiredByDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionRequiredByDateTime'");
    }

    /**
     * Gets the attachments property value. A collection of serviceAnnouncementAttachments.
     * @return array<ServiceAnnouncementAttachment>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServiceAnnouncementAttachment::class);
            /** @var array<ServiceAnnouncementAttachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the attachmentsArchive property value. The zip file that contains all attachments for a message.
     * @return StreamInterface|null
    */
    public function getAttachmentsArchive(): ?StreamInterface {
        $val = $this->getBackingStore()->get('attachmentsArchive');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachmentsArchive'");
    }

    /**
     * Gets the body property value. The body property
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        $val = $this->getBackingStore()->get('body');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'body'");
    }

    /**
     * Gets the category property value. The category property
     * @return ServiceUpdateCategory|null
    */
    public function getCategory(): ?ServiceUpdateCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof ServiceUpdateCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionRequiredByDateTime' => fn(ParseNode $n) => $o->setActionRequiredByDateTime($n->getDateTimeValue()),
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([ServiceAnnouncementAttachment::class, 'createFromDiscriminatorValue'])),
            'attachmentsArchive' => fn(ParseNode $n) => $o->setAttachmentsArchive($n->getBinaryContent()),
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(ServiceUpdateCategory::class)),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'isMajorChange' => fn(ParseNode $n) => $o->setIsMajorChange($n->getBooleanValue()),
            'services' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setServices($val);
            },
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(ServiceUpdateSeverity::class)),
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
            'viewPoint' => fn(ParseNode $n) => $o->setViewPoint($n->getObjectValue([ServiceUpdateMessageViewpoint::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hasAttachments property value. Indicates whether the message has any attachment.
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
     * Gets the isMajorChange property value. Indicates whether the message describes a major update for the service.
     * @return bool|null
    */
    public function getIsMajorChange(): ?bool {
        $val = $this->getBackingStore()->get('isMajorChange');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMajorChange'");
    }

    /**
     * Gets the services property value. The affected services by the service message.
     * @return array<string>|null
    */
    public function getServices(): ?array {
        $val = $this->getBackingStore()->get('services');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'services'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return ServiceUpdateSeverity|null
    */
    public function getSeverity(): ?ServiceUpdateSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof ServiceUpdateSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the tags property value. A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Gets the viewPoint property value. Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
     * @return ServiceUpdateMessageViewpoint|null
    */
    public function getViewPoint(): ?ServiceUpdateMessageViewpoint {
        $val = $this->getBackingStore()->get('viewPoint');
        if (is_null($val) || $val instanceof ServiceUpdateMessageViewpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'viewPoint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('actionRequiredByDateTime', $this->getActionRequiredByDateTime());
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeBinaryContent('attachmentsArchive', $this->getAttachmentsArchive());
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeBooleanValue('hasAttachments', $this->getHasAttachments());
        $writer->writeBooleanValue('isMajorChange', $this->getIsMajorChange());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('services', $this->getServices());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeObjectValue('viewPoint', $this->getViewPoint());
    }

    /**
     * Sets the actionRequiredByDateTime property value. The expected deadline of the action for the message.
     * @param DateTime|null $value Value to set for the actionRequiredByDateTime property.
    */
    public function setActionRequiredByDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('actionRequiredByDateTime', $value);
    }

    /**
     * Sets the attachments property value. A collection of serviceAnnouncementAttachments.
     * @param array<ServiceAnnouncementAttachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the attachmentsArchive property value. The zip file that contains all attachments for a message.
     * @param StreamInterface|null $value Value to set for the attachmentsArchive property.
    */
    public function setAttachmentsArchive(?StreamInterface $value): void {
        $this->getBackingStore()->set('attachmentsArchive', $value);
    }

    /**
     * Sets the body property value. The body property
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param ServiceUpdateCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ServiceUpdateCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the hasAttachments property value. Indicates whether the message has any attachment.
     * @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the isMajorChange property value. Indicates whether the message describes a major update for the service.
     * @param bool|null $value Value to set for the isMajorChange property.
    */
    public function setIsMajorChange(?bool $value): void {
        $this->getBackingStore()->set('isMajorChange', $value);
    }

    /**
     * Sets the services property value. The affected services by the service message.
     * @param array<string>|null $value Value to set for the services property.
    */
    public function setServices(?array $value): void {
        $this->getBackingStore()->set('services', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param ServiceUpdateSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?ServiceUpdateSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the tags property value. A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on.
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the viewPoint property value. Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
     * @param ServiceUpdateMessageViewpoint|null $value Value to set for the viewPoint property.
    */
    public function setViewPoint(?ServiceUpdateMessageViewpoint $value): void {
        $this->getBackingStore()->set('viewPoint', $value);
    }

}
