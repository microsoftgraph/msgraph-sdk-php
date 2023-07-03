<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AnalyzedMessageEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new AnalyzedMessageEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedMessageEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedMessageEvidence {
        return new AnalyzedMessageEvidence();
    }

    /**
     * Gets the antiSpamDirection property value. Direction of the email relative to your network. The possible values are: inbound, outbound or intraorg.
     * @return string|null
    */
    public function getAntiSpamDirection(): ?string {
        $val = $this->getBackingStore()->get('antiSpamDirection');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'antiSpamDirection'");
    }

    /**
     * Gets the attachmentsCount property value. Number of attachments in the email.
     * @return int|null
    */
    public function getAttachmentsCount(): ?int {
        $val = $this->getBackingStore()->get('attachmentsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachmentsCount'");
    }

    /**
     * Gets the deliveryAction property value. Delivery action of the email. The possible values are: delivered, deliveredAsSpam, junked, blocked, or replaced.
     * @return string|null
    */
    public function getDeliveryAction(): ?string {
        $val = $this->getBackingStore()->get('deliveryAction');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryAction'");
    }

    /**
     * Gets the deliveryLocation property value. Location where the email was delivered. The possible values are: inbox, external, junkFolder, quarantine, failed, dropped, deletedFolder or forwarded.
     * @return string|null
    */
    public function getDeliveryLocation(): ?string {
        $val = $this->getBackingStore()->get('deliveryLocation');
        if (is_null($val) || is_string($val)) {
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
            'antiSpamDirection' => fn(ParseNode $n) => $o->setAntiSpamDirection($n->getStringValue()),
            'attachmentsCount' => fn(ParseNode $n) => $o->setAttachmentsCount($n->getIntegerValue()),
            'deliveryAction' => fn(ParseNode $n) => $o->setDeliveryAction($n->getStringValue()),
            'deliveryLocation' => fn(ParseNode $n) => $o->setDeliveryLocation($n->getStringValue()),
            'internetMessageId' => fn(ParseNode $n) => $o->setInternetMessageId($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'networkMessageId' => fn(ParseNode $n) => $o->setNetworkMessageId($n->getStringValue()),
            'p1Sender' => fn(ParseNode $n) => $o->setP1Sender($n->getObjectValue([EmailSender::class, 'createFromDiscriminatorValue'])),
            'p2Sender' => fn(ParseNode $n) => $o->setP2Sender($n->getObjectValue([EmailSender::class, 'createFromDiscriminatorValue'])),
            'receivedDateTime' => fn(ParseNode $n) => $o->setReceivedDateTime($n->getDateTimeValue()),
            'recipientEmailAddress' => fn(ParseNode $n) => $o->setRecipientEmailAddress($n->getStringValue()),
            'senderIp' => fn(ParseNode $n) => $o->setSenderIp($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'threatDetectionMethods' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setThreatDetectionMethods($val);
            },
            'threats' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setThreats($val);
            },
            'urlCount' => fn(ParseNode $n) => $o->setUrlCount($n->getIntegerValue()),
            'urls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUrls($val);
            },
            'urn' => fn(ParseNode $n) => $o->setUrn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the internetMessageId property value. Public-facing identifier for the email that is set by the sending email system.
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        $val = $this->getBackingStore()->get('internetMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetMessageId'");
    }

    /**
     * Gets the language property value. Detected language of the email content.
     * @return string|null
    */
    public function getLanguage(): ?string {
        $val = $this->getBackingStore()->get('language');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'language'");
    }

    /**
     * Gets the networkMessageId property value. Unique identifier for the email, generated by Microsoft 365.
     * @return string|null
    */
    public function getNetworkMessageId(): ?string {
        $val = $this->getBackingStore()->get('networkMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkMessageId'");
    }

    /**
     * Gets the p1Sender property value. The P1 sender.
     * @return EmailSender|null
    */
    public function getP1Sender(): ?EmailSender {
        $val = $this->getBackingStore()->get('p1Sender');
        if (is_null($val) || $val instanceof EmailSender) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'p1Sender'");
    }

    /**
     * Gets the p2Sender property value. The P2 sender.
     * @return EmailSender|null
    */
    public function getP2Sender(): ?EmailSender {
        $val = $this->getBackingStore()->get('p2Sender');
        if (is_null($val) || $val instanceof EmailSender) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'p2Sender'");
    }

    /**
     * Gets the receivedDateTime property value. Date and time when the email was received.
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
     * Gets the recipientEmailAddress property value. Email address of the recipient, or email address of the recipient after distribution list expansion.
     * @return string|null
    */
    public function getRecipientEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('recipientEmailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientEmailAddress'");
    }

    /**
     * Gets the senderIp property value. IP address of the last detected mail server that relayed the message.
     * @return string|null
    */
    public function getSenderIp(): ?string {
        $val = $this->getBackingStore()->get('senderIp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderIp'");
    }

    /**
     * Gets the subject property value. Subject of the email.
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
     * Gets the threatDetectionMethods property value. Collection of methods used to detect malware, phishing, or other threats found in the email.
     * @return array<string>|null
    */
    public function getThreatDetectionMethods(): ?array {
        $val = $this->getBackingStore()->get('threatDetectionMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatDetectionMethods'");
    }

    /**
     * Gets the threats property value. Collection of detection names for malware or other threats found.
     * @return array<string>|null
    */
    public function getThreats(): ?array {
        $val = $this->getBackingStore()->get('threats');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threats'");
    }

    /**
     * Gets the urlCount property value. Number of embedded URLs in the email.
     * @return int|null
    */
    public function getUrlCount(): ?int {
        $val = $this->getBackingStore()->get('urlCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urlCount'");
    }

    /**
     * Gets the urls property value. Collection of the URLs contained in this email.
     * @return array<string>|null
    */
    public function getUrls(): ?array {
        $val = $this->getBackingStore()->get('urls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urls'");
    }

    /**
     * Gets the urn property value. Uniform resource name (URN) of the automated investigation where the cluster was identified.
     * @return string|null
    */
    public function getUrn(): ?string {
        $val = $this->getBackingStore()->get('urn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('antiSpamDirection', $this->getAntiSpamDirection());
        $writer->writeIntegerValue('attachmentsCount', $this->getAttachmentsCount());
        $writer->writeStringValue('deliveryAction', $this->getDeliveryAction());
        $writer->writeStringValue('deliveryLocation', $this->getDeliveryLocation());
        $writer->writeStringValue('internetMessageId', $this->getInternetMessageId());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('networkMessageId', $this->getNetworkMessageId());
        $writer->writeObjectValue('p1Sender', $this->getP1Sender());
        $writer->writeObjectValue('p2Sender', $this->getP2Sender());
        $writer->writeDateTimeValue('receivedDateTime', $this->getReceivedDateTime());
        $writer->writeStringValue('recipientEmailAddress', $this->getRecipientEmailAddress());
        $writer->writeStringValue('senderIp', $this->getSenderIp());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeCollectionOfPrimitiveValues('threatDetectionMethods', $this->getThreatDetectionMethods());
        $writer->writeCollectionOfPrimitiveValues('threats', $this->getThreats());
        $writer->writeIntegerValue('urlCount', $this->getUrlCount());
        $writer->writeCollectionOfPrimitiveValues('urls', $this->getUrls());
        $writer->writeStringValue('urn', $this->getUrn());
    }

    /**
     * Sets the antiSpamDirection property value. Direction of the email relative to your network. The possible values are: inbound, outbound or intraorg.
     * @param string|null $value Value to set for the antiSpamDirection property.
    */
    public function setAntiSpamDirection(?string $value): void {
        $this->getBackingStore()->set('antiSpamDirection', $value);
    }

    /**
     * Sets the attachmentsCount property value. Number of attachments in the email.
     * @param int|null $value Value to set for the attachmentsCount property.
    */
    public function setAttachmentsCount(?int $value): void {
        $this->getBackingStore()->set('attachmentsCount', $value);
    }

    /**
     * Sets the deliveryAction property value. Delivery action of the email. The possible values are: delivered, deliveredAsSpam, junked, blocked, or replaced.
     * @param string|null $value Value to set for the deliveryAction property.
    */
    public function setDeliveryAction(?string $value): void {
        $this->getBackingStore()->set('deliveryAction', $value);
    }

    /**
     * Sets the deliveryLocation property value. Location where the email was delivered. The possible values are: inbox, external, junkFolder, quarantine, failed, dropped, deletedFolder or forwarded.
     * @param string|null $value Value to set for the deliveryLocation property.
    */
    public function setDeliveryLocation(?string $value): void {
        $this->getBackingStore()->set('deliveryLocation', $value);
    }

    /**
     * Sets the internetMessageId property value. Public-facing identifier for the email that is set by the sending email system.
     * @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value): void {
        $this->getBackingStore()->set('internetMessageId', $value);
    }

    /**
     * Sets the language property value. Detected language of the email content.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the networkMessageId property value. Unique identifier for the email, generated by Microsoft 365.
     * @param string|null $value Value to set for the networkMessageId property.
    */
    public function setNetworkMessageId(?string $value): void {
        $this->getBackingStore()->set('networkMessageId', $value);
    }

    /**
     * Sets the p1Sender property value. The P1 sender.
     * @param EmailSender|null $value Value to set for the p1Sender property.
    */
    public function setP1Sender(?EmailSender $value): void {
        $this->getBackingStore()->set('p1Sender', $value);
    }

    /**
     * Sets the p2Sender property value. The P2 sender.
     * @param EmailSender|null $value Value to set for the p2Sender property.
    */
    public function setP2Sender(?EmailSender $value): void {
        $this->getBackingStore()->set('p2Sender', $value);
    }

    /**
     * Sets the receivedDateTime property value. Date and time when the email was received.
     * @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTime', $value);
    }

    /**
     * Sets the recipientEmailAddress property value. Email address of the recipient, or email address of the recipient after distribution list expansion.
     * @param string|null $value Value to set for the recipientEmailAddress property.
    */
    public function setRecipientEmailAddress(?string $value): void {
        $this->getBackingStore()->set('recipientEmailAddress', $value);
    }

    /**
     * Sets the senderIp property value. IP address of the last detected mail server that relayed the message.
     * @param string|null $value Value to set for the senderIp property.
    */
    public function setSenderIp(?string $value): void {
        $this->getBackingStore()->set('senderIp', $value);
    }

    /**
     * Sets the subject property value. Subject of the email.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the threatDetectionMethods property value. Collection of methods used to detect malware, phishing, or other threats found in the email.
     * @param array<string>|null $value Value to set for the threatDetectionMethods property.
    */
    public function setThreatDetectionMethods(?array $value): void {
        $this->getBackingStore()->set('threatDetectionMethods', $value);
    }

    /**
     * Sets the threats property value. Collection of detection names for malware or other threats found.
     * @param array<string>|null $value Value to set for the threats property.
    */
    public function setThreats(?array $value): void {
        $this->getBackingStore()->set('threats', $value);
    }

    /**
     * Sets the urlCount property value. Number of embedded URLs in the email.
     * @param int|null $value Value to set for the urlCount property.
    */
    public function setUrlCount(?int $value): void {
        $this->getBackingStore()->set('urlCount', $value);
    }

    /**
     * Sets the urls property value. Collection of the URLs contained in this email.
     * @param array<string>|null $value Value to set for the urls property.
    */
    public function setUrls(?array $value): void {
        $this->getBackingStore()->set('urls', $value);
    }

    /**
     * Sets the urn property value. Uniform resource name (URN) of the automated investigation where the cluster was identified.
     * @param string|null $value Value to set for the urn property.
    */
    public function setUrn(?string $value): void {
        $this->getBackingStore()->set('urn', $value);
    }

}
