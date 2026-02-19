<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExchangeMessageTrace extends Entity implements Parsable 
{
    /**
     * Instantiates a new ExchangeMessageTrace and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExchangeMessageTrace
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExchangeMessageTrace {
        return new ExchangeMessageTrace();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fromIP' => fn(ParseNode $n) => $o->setFromIP($n->getStringValue()),
            'messageId' => fn(ParseNode $n) => $o->setMessageId($n->getStringValue()),
            'receivedDateTime' => fn(ParseNode $n) => $o->setReceivedDateTime($n->getDateTimeValue()),
            'recipientAddress' => fn(ParseNode $n) => $o->setRecipientAddress($n->getStringValue()),
            'senderAddress' => fn(ParseNode $n) => $o->setSenderAddress($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ExchangeMessageTraceStatus::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'toIP' => fn(ParseNode $n) => $o->setToIP($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fromIP property value. The source IP address. For incoming messages, this value is the public IP address of the SMTP email server that sent the message. Supports $filter (eq).
     * @return string|null
    */
    public function getFromIP(): ?string {
        $val = $this->getBackingStore()->get('fromIP');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fromIP'");
    }

    /**
     * Gets the messageId property value. The Message-ID header field of the message. The format of the Message-ID depends on the messaging server that sent the message. Supports $filter (eq).
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
     * Gets the receivedDateTime property value. The date and time when the message was received by Exchange Online. The timestamp is in UTC format. Supports $filter (ge, le).
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
     * Gets the recipientAddress property value. The SMTP email address of the user that the message was addressed to. Supports $filter (eq).
     * @return string|null
    */
    public function getRecipientAddress(): ?string {
        $val = $this->getBackingStore()->get('recipientAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientAddress'");
    }

    /**
     * Gets the senderAddress property value. The SMTP email address of the user the message was purportedly from. Supports $filter (eq).
     * @return string|null
    */
    public function getSenderAddress(): ?string {
        $val = $this->getBackingStore()->get('senderAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderAddress'");
    }

    /**
     * Gets the size property value. The size of the message in bytes.
     * @return int|null
    */
    public function getSize(): ?int {
        $val = $this->getBackingStore()->get('size');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'size'");
    }

    /**
     * Gets the status property value. The status property
     * @return ExchangeMessageTraceStatus|null
    */
    public function getStatus(): ?ExchangeMessageTraceStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ExchangeMessageTraceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the subject property value. The subject line of the message. Supports $filter (contains, startsWith, endsWith).
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
     * Gets the toIP property value. The destination IP address. For outgoing messages, this value is the public IP address in the resolved MX record for the destination domain. For incoming messages to Exchange Online, this value is blank. Supports $filter (eq).
     * @return string|null
    */
    public function getToIP(): ?string {
        $val = $this->getBackingStore()->get('toIP');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'toIP'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fromIP', $this->getFromIP());
        $writer->writeStringValue('messageId', $this->getMessageId());
        $writer->writeDateTimeValue('receivedDateTime', $this->getReceivedDateTime());
        $writer->writeStringValue('recipientAddress', $this->getRecipientAddress());
        $writer->writeStringValue('senderAddress', $this->getSenderAddress());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('toIP', $this->getToIP());
    }

    /**
     * Sets the fromIP property value. The source IP address. For incoming messages, this value is the public IP address of the SMTP email server that sent the message. Supports $filter (eq).
     * @param string|null $value Value to set for the fromIP property.
    */
    public function setFromIP(?string $value): void {
        $this->getBackingStore()->set('fromIP', $value);
    }

    /**
     * Sets the messageId property value. The Message-ID header field of the message. The format of the Message-ID depends on the messaging server that sent the message. Supports $filter (eq).
     * @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value): void {
        $this->getBackingStore()->set('messageId', $value);
    }

    /**
     * Sets the receivedDateTime property value. The date and time when the message was received by Exchange Online. The timestamp is in UTC format. Supports $filter (ge, le).
     * @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTime', $value);
    }

    /**
     * Sets the recipientAddress property value. The SMTP email address of the user that the message was addressed to. Supports $filter (eq).
     * @param string|null $value Value to set for the recipientAddress property.
    */
    public function setRecipientAddress(?string $value): void {
        $this->getBackingStore()->set('recipientAddress', $value);
    }

    /**
     * Sets the senderAddress property value. The SMTP email address of the user the message was purportedly from. Supports $filter (eq).
     * @param string|null $value Value to set for the senderAddress property.
    */
    public function setSenderAddress(?string $value): void {
        $this->getBackingStore()->set('senderAddress', $value);
    }

    /**
     * Sets the size property value. The size of the message in bytes.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ExchangeMessageTraceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ExchangeMessageTraceStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the subject property value. The subject line of the message. Supports $filter (contains, startsWith, endsWith).
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the toIP property value. The destination IP address. For outgoing messages, this value is the public IP address in the resolved MX record for the destination domain. For incoming messages to Exchange Online, this value is blank. Supports $filter (eq).
     * @param string|null $value Value to set for the toIP property.
    */
    public function setToIP(?string $value): void {
        $this->getBackingStore()->set('toIP', $value);
    }

}
