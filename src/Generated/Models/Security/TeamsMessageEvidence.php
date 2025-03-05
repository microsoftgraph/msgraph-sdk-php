<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeamsMessageEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new TeamsMessageEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.teamsMessageEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsMessageEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsMessageEvidence {
        return new TeamsMessageEvidence();
    }

    /**
     * Gets the campaignId property value. The identifier of the campaign that this Teams message is part of.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        $val = $this->getBackingStore()->get('campaignId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'campaignId'");
    }

    /**
     * Gets the channelId property value. The channel ID associated with this Teams message.
     * @return string|null
    */
    public function getChannelId(): ?string {
        $val = $this->getBackingStore()->get('channelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'channelId'");
    }

    /**
     * Gets the deliveryAction property value. The delivery action of this Teams message. Possible values are: unknown, deliveredAsSpam, delivered, blocked, replaced, unknownFutureValue.
     * @return TeamsMessageDeliveryAction|null
    */
    public function getDeliveryAction(): ?TeamsMessageDeliveryAction {
        $val = $this->getBackingStore()->get('deliveryAction');
        if (is_null($val) || $val instanceof TeamsMessageDeliveryAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryAction'");
    }

    /**
     * Gets the deliveryLocation property value. The delivery location of this Teams message. Possible values are: unknown, teams, quarantine, failed, unknownFutureValue.
     * @return TeamsDeliveryLocation|null
    */
    public function getDeliveryLocation(): ?TeamsDeliveryLocation {
        $val = $this->getBackingStore()->get('deliveryLocation');
        if (is_null($val) || $val instanceof TeamsDeliveryLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryLocation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'channelId' => fn(ParseNode $n) => $o->setChannelId($n->getStringValue()),
            'deliveryAction' => fn(ParseNode $n) => $o->setDeliveryAction($n->getEnumValue(TeamsMessageDeliveryAction::class)),
            'deliveryLocation' => fn(ParseNode $n) => $o->setDeliveryLocation($n->getEnumValue(TeamsDeliveryLocation::class)),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([FileEvidence::class, 'createFromDiscriminatorValue'])),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'isExternal' => fn(ParseNode $n) => $o->setIsExternal($n->getBooleanValue()),
            'isOwned' => fn(ParseNode $n) => $o->setIsOwned($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'messageDirection' => fn(ParseNode $n) => $o->setMessageDirection($n->getEnumValue(AntispamTeamsDirection::class)),
            'messageId' => fn(ParseNode $n) => $o->setMessageId($n->getStringValue()),
            'owningTenantId' => fn(ParseNode $n) => $o->setOwningTenantId($n->getStringValue()),
            'parentMessageId' => fn(ParseNode $n) => $o->setParentMessageId($n->getStringValue()),
            'receivedDateTime' => fn(ParseNode $n) => $o->setReceivedDateTime($n->getDateTimeValue()),
            'recipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRecipients($val);
            },
            'senderFromAddress' => fn(ParseNode $n) => $o->setSenderFromAddress($n->getStringValue()),
            'senderIP' => fn(ParseNode $n) => $o->setSenderIP($n->getStringValue()),
            'sourceAppName' => fn(ParseNode $n) => $o->setSourceAppName($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'suspiciousRecipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSuspiciousRecipients($val);
            },
            'threadId' => fn(ParseNode $n) => $o->setThreadId($n->getStringValue()),
            'threadType' => fn(ParseNode $n) => $o->setThreadType($n->getStringValue()),
            'urls' => fn(ParseNode $n) => $o->setUrls($n->getCollectionOfObjectValues([UrlEvidence::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the files property value. The list of file entities that are attached to this Teams message.
     * @return array<FileEvidence>|null
    */
    public function getFiles(): ?array {
        $val = $this->getBackingStore()->get('files');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileEvidence::class);
            /** @var array<FileEvidence>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'files'");
    }

    /**
     * Gets the groupId property value. The identifier of the team or group that this message is part of.
     * @return string|null
    */
    public function getGroupId(): ?string {
        $val = $this->getBackingStore()->get('groupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupId'");
    }

    /**
     * Gets the isExternal property value. Indicates whether the message is owned by the organization that reported the security detection alert.
     * @return bool|null
    */
    public function getIsExternal(): ?bool {
        $val = $this->getBackingStore()->get('isExternal');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExternal'");
    }

    /**
     * Gets the isOwned property value. Indicates whether the message is owned by your organization.
     * @return bool|null
    */
    public function getIsOwned(): ?bool {
        $val = $this->getBackingStore()->get('isOwned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOwned'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time when the message was last edited. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the messageDirection property value. The direction of the Teams message. The possible values are: unknown, inbound, outbound, intraorg, unknownFutureValue.
     * @return AntispamTeamsDirection|null
    */
    public function getMessageDirection(): ?AntispamTeamsDirection {
        $val = $this->getBackingStore()->get('messageDirection');
        if (is_null($val) || $val instanceof AntispamTeamsDirection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageDirection'");
    }

    /**
     * Gets the messageId property value. Message identifier unique within the thread.
     * @return string|null
    */
    public function getMessageId(): ?string {
        $val = $this->getBackingStore()->get('messageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageId'");
    }

    /**
     * Gets the owningTenantId property value. Tenant ID (GUID) of the owner of the message.
     * @return string|null
    */
    public function getOwningTenantId(): ?string {
        $val = $this->getBackingStore()->get('owningTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owningTenantId'");
    }

    /**
     * Gets the parentMessageId property value. Identifier of the message to which the current message is a reply; otherwise, it's the same as the messageId.
     * @return string|null
    */
    public function getParentMessageId(): ?string {
        $val = $this->getBackingStore()->get('parentMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentMessageId'");
    }

    /**
     * Gets the receivedDateTime property value. The received date of this message. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('receivedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivedDateTime'");
    }

    /**
     * Gets the recipients property value. The recipients of this Teams message.
     * @return array<string>|null
    */
    public function getRecipients(): ?array {
        $val = $this->getBackingStore()->get('recipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipients'");
    }

    /**
     * Gets the senderFromAddress property value. The SMTP format address of the sender.
     * @return string|null
    */
    public function getSenderFromAddress(): ?string {
        $val = $this->getBackingStore()->get('senderFromAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderFromAddress'");
    }

    /**
     * Gets the senderIP property value. The IP address of the sender.
     * @return string|null
    */
    public function getSenderIP(): ?string {
        $val = $this->getBackingStore()->get('senderIP');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderIP'");
    }

    /**
     * Gets the sourceAppName property value. Source of the message; for example, desktop and mobile.
     * @return string|null
    */
    public function getSourceAppName(): ?string {
        $val = $this->getBackingStore()->get('sourceAppName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceAppName'");
    }

    /**
     * Gets the sourceId property value. The source ID of this Teams message.
     * @return string|null
    */
    public function getSourceId(): ?string {
        $val = $this->getBackingStore()->get('sourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceId'");
    }

    /**
     * Gets the subject property value. The subject of this Teams message.
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the suspiciousRecipients property value. The list of recipients who were detected as suspicious.
     * @return array<string>|null
    */
    public function getSuspiciousRecipients(): ?array {
        $val = $this->getBackingStore()->get('suspiciousRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'suspiciousRecipients'");
    }

    /**
     * Gets the threadId property value. Identifier of the channel or chat that this message is part of.
     * @return string|null
    */
    public function getThreadId(): ?string {
        $val = $this->getBackingStore()->get('threadId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threadId'");
    }

    /**
     * Gets the threadType property value. The Teams message type. Supported values are: Chat, Topic, Space, and Meeting.
     * @return string|null
    */
    public function getThreadType(): ?string {
        $val = $this->getBackingStore()->get('threadType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threadType'");
    }

    /**
     * Gets the urls property value. The URLs contained in this Teams message.
     * @return array<UrlEvidence>|null
    */
    public function getUrls(): ?array {
        $val = $this->getBackingStore()->get('urls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UrlEvidence::class);
            /** @var array<UrlEvidence>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urls'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeStringValue('channelId', $this->getChannelId());
        $writer->writeEnumValue('deliveryAction', $this->getDeliveryAction());
        $writer->writeEnumValue('deliveryLocation', $this->getDeliveryLocation());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeBooleanValue('isExternal', $this->getIsExternal());
        $writer->writeBooleanValue('isOwned', $this->getIsOwned());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('messageDirection', $this->getMessageDirection());
        $writer->writeStringValue('messageId', $this->getMessageId());
        $writer->writeStringValue('owningTenantId', $this->getOwningTenantId());
        $writer->writeStringValue('parentMessageId', $this->getParentMessageId());
        $writer->writeDateTimeValue('receivedDateTime', $this->getReceivedDateTime());
        $writer->writeCollectionOfPrimitiveValues('recipients', $this->getRecipients());
        $writer->writeStringValue('senderFromAddress', $this->getSenderFromAddress());
        $writer->writeStringValue('senderIP', $this->getSenderIP());
        $writer->writeStringValue('sourceAppName', $this->getSourceAppName());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeCollectionOfPrimitiveValues('suspiciousRecipients', $this->getSuspiciousRecipients());
        $writer->writeStringValue('threadId', $this->getThreadId());
        $writer->writeStringValue('threadType', $this->getThreadType());
        $writer->writeCollectionOfObjectValues('urls', $this->getUrls());
    }

    /**
     * Sets the campaignId property value. The identifier of the campaign that this Teams message is part of.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->getBackingStore()->set('campaignId', $value);
    }

    /**
     * Sets the channelId property value. The channel ID associated with this Teams message.
     * @param string|null $value Value to set for the channelId property.
    */
    public function setChannelId(?string $value): void {
        $this->getBackingStore()->set('channelId', $value);
    }

    /**
     * Sets the deliveryAction property value. The delivery action of this Teams message. Possible values are: unknown, deliveredAsSpam, delivered, blocked, replaced, unknownFutureValue.
     * @param TeamsMessageDeliveryAction|null $value Value to set for the deliveryAction property.
    */
    public function setDeliveryAction(?TeamsMessageDeliveryAction $value): void {
        $this->getBackingStore()->set('deliveryAction', $value);
    }

    /**
     * Sets the deliveryLocation property value. The delivery location of this Teams message. Possible values are: unknown, teams, quarantine, failed, unknownFutureValue.
     * @param TeamsDeliveryLocation|null $value Value to set for the deliveryLocation property.
    */
    public function setDeliveryLocation(?TeamsDeliveryLocation $value): void {
        $this->getBackingStore()->set('deliveryLocation', $value);
    }

    /**
     * Sets the files property value. The list of file entities that are attached to this Teams message.
     * @param array<FileEvidence>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->getBackingStore()->set('files', $value);
    }

    /**
     * Sets the groupId property value. The identifier of the team or group that this message is part of.
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the isExternal property value. Indicates whether the message is owned by the organization that reported the security detection alert.
     * @param bool|null $value Value to set for the isExternal property.
    */
    public function setIsExternal(?bool $value): void {
        $this->getBackingStore()->set('isExternal', $value);
    }

    /**
     * Sets the isOwned property value. Indicates whether the message is owned by your organization.
     * @param bool|null $value Value to set for the isOwned property.
    */
    public function setIsOwned(?bool $value): void {
        $this->getBackingStore()->set('isOwned', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time when the message was last edited. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the messageDirection property value. The direction of the Teams message. The possible values are: unknown, inbound, outbound, intraorg, unknownFutureValue.
     * @param AntispamTeamsDirection|null $value Value to set for the messageDirection property.
    */
    public function setMessageDirection(?AntispamTeamsDirection $value): void {
        $this->getBackingStore()->set('messageDirection', $value);
    }

    /**
     * Sets the messageId property value. Message identifier unique within the thread.
     * @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value): void {
        $this->getBackingStore()->set('messageId', $value);
    }

    /**
     * Sets the owningTenantId property value. Tenant ID (GUID) of the owner of the message.
     * @param string|null $value Value to set for the owningTenantId property.
    */
    public function setOwningTenantId(?string $value): void {
        $this->getBackingStore()->set('owningTenantId', $value);
    }

    /**
     * Sets the parentMessageId property value. Identifier of the message to which the current message is a reply; otherwise, it's the same as the messageId.
     * @param string|null $value Value to set for the parentMessageId property.
    */
    public function setParentMessageId(?string $value): void {
        $this->getBackingStore()->set('parentMessageId', $value);
    }

    /**
     * Sets the receivedDateTime property value. The received date of this message. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTime', $value);
    }

    /**
     * Sets the recipients property value. The recipients of this Teams message.
     * @param array<string>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value): void {
        $this->getBackingStore()->set('recipients', $value);
    }

    /**
     * Sets the senderFromAddress property value. The SMTP format address of the sender.
     * @param string|null $value Value to set for the senderFromAddress property.
    */
    public function setSenderFromAddress(?string $value): void {
        $this->getBackingStore()->set('senderFromAddress', $value);
    }

    /**
     * Sets the senderIP property value. The IP address of the sender.
     * @param string|null $value Value to set for the senderIP property.
    */
    public function setSenderIP(?string $value): void {
        $this->getBackingStore()->set('senderIP', $value);
    }

    /**
     * Sets the sourceAppName property value. Source of the message; for example, desktop and mobile.
     * @param string|null $value Value to set for the sourceAppName property.
    */
    public function setSourceAppName(?string $value): void {
        $this->getBackingStore()->set('sourceAppName', $value);
    }

    /**
     * Sets the sourceId property value. The source ID of this Teams message.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->getBackingStore()->set('sourceId', $value);
    }

    /**
     * Sets the subject property value. The subject of this Teams message.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the suspiciousRecipients property value. The list of recipients who were detected as suspicious.
     * @param array<string>|null $value Value to set for the suspiciousRecipients property.
    */
    public function setSuspiciousRecipients(?array $value): void {
        $this->getBackingStore()->set('suspiciousRecipients', $value);
    }

    /**
     * Sets the threadId property value. Identifier of the channel or chat that this message is part of.
     * @param string|null $value Value to set for the threadId property.
    */
    public function setThreadId(?string $value): void {
        $this->getBackingStore()->set('threadId', $value);
    }

    /**
     * Sets the threadType property value. The Teams message type. Supported values are: Chat, Topic, Space, and Meeting.
     * @param string|null $value Value to set for the threadType property.
    */
    public function setThreadType(?string $value): void {
        $this->getBackingStore()->set('threadType', $value);
    }

    /**
     * Sets the urls property value. The URLs contained in this Teams message.
     * @param array<UrlEvidence>|null $value Value to set for the urls property.
    */
    public function setUrls(?array $value): void {
        $this->getBackingStore()->set('urls', $value);
    }

}
