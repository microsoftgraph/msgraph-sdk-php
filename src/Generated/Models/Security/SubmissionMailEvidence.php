<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubmissionMailEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new SubmissionMailEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.submissionMailEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubmissionMailEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubmissionMailEvidence {
        return new SubmissionMailEvidence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'networkMessageId' => fn(ParseNode $n) => $o->setNetworkMessageId($n->getStringValue()),
            'recipient' => fn(ParseNode $n) => $o->setRecipient($n->getStringValue()),
            'reportType' => fn(ParseNode $n) => $o->setReportType($n->getStringValue()),
            'sender' => fn(ParseNode $n) => $o->setSender($n->getStringValue()),
            'senderIp' => fn(ParseNode $n) => $o->setSenderIp($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'submissionDateTime' => fn(ParseNode $n) => $o->setSubmissionDateTime($n->getDateTimeValue()),
            'submissionId' => fn(ParseNode $n) => $o->setSubmissionId($n->getStringValue()),
            'submitter' => fn(ParseNode $n) => $o->setSubmitter($n->getStringValue()),
        ]);
    }

    /**
     * Gets the networkMessageId property value. The network message ID of the email to which the submission belongs.
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
     * Gets the recipient property value. The recipient of the email.
     * @return string|null
    */
    public function getRecipient(): ?string {
        $val = $this->getBackingStore()->get('recipient');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipient'");
    }

    /**
     * Gets the reportType property value. The submission type for the specified instance that maps to Junk, Phish, Malware, or NotJunk.
     * @return string|null
    */
    public function getReportType(): ?string {
        $val = $this->getBackingStore()->get('reportType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportType'");
    }

    /**
     * Gets the sender property value. The sender of the email.
     * @return string|null
    */
    public function getSender(): ?string {
        $val = $this->getBackingStore()->get('sender');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sender'");
    }

    /**
     * Gets the senderIp property value. The sender's IP.
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
     * Gets the subject property value. The subject of the submission mail.
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
     * Gets the submissionDateTime property value. The reported date and time of this submission. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024 is 2024-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getSubmissionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('submissionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submissionDateTime'");
    }

    /**
     * Gets the submissionId property value. The submission ID.
     * @return string|null
    */
    public function getSubmissionId(): ?string {
        $val = $this->getBackingStore()->get('submissionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submissionId'");
    }

    /**
     * Gets the submitter property value. The submitter's email address.
     * @return string|null
    */
    public function getSubmitter(): ?string {
        $val = $this->getBackingStore()->get('submitter');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submitter'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('networkMessageId', $this->getNetworkMessageId());
        $writer->writeStringValue('recipient', $this->getRecipient());
        $writer->writeStringValue('reportType', $this->getReportType());
        $writer->writeStringValue('sender', $this->getSender());
        $writer->writeStringValue('senderIp', $this->getSenderIp());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeDateTimeValue('submissionDateTime', $this->getSubmissionDateTime());
        $writer->writeStringValue('submissionId', $this->getSubmissionId());
        $writer->writeStringValue('submitter', $this->getSubmitter());
    }

    /**
     * Sets the networkMessageId property value. The network message ID of the email to which the submission belongs.
     * @param string|null $value Value to set for the networkMessageId property.
    */
    public function setNetworkMessageId(?string $value): void {
        $this->getBackingStore()->set('networkMessageId', $value);
    }

    /**
     * Sets the recipient property value. The recipient of the email.
     * @param string|null $value Value to set for the recipient property.
    */
    public function setRecipient(?string $value): void {
        $this->getBackingStore()->set('recipient', $value);
    }

    /**
     * Sets the reportType property value. The submission type for the specified instance that maps to Junk, Phish, Malware, or NotJunk.
     * @param string|null $value Value to set for the reportType property.
    */
    public function setReportType(?string $value): void {
        $this->getBackingStore()->set('reportType', $value);
    }

    /**
     * Sets the sender property value. The sender of the email.
     * @param string|null $value Value to set for the sender property.
    */
    public function setSender(?string $value): void {
        $this->getBackingStore()->set('sender', $value);
    }

    /**
     * Sets the senderIp property value. The sender's IP.
     * @param string|null $value Value to set for the senderIp property.
    */
    public function setSenderIp(?string $value): void {
        $this->getBackingStore()->set('senderIp', $value);
    }

    /**
     * Sets the subject property value. The subject of the submission mail.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the submissionDateTime property value. The reported date and time of this submission. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024 is 2024-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the submissionDateTime property.
    */
    public function setSubmissionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('submissionDateTime', $value);
    }

    /**
     * Sets the submissionId property value. The submission ID.
     * @param string|null $value Value to set for the submissionId property.
    */
    public function setSubmissionId(?string $value): void {
        $this->getBackingStore()->set('submissionId', $value);
    }

    /**
     * Sets the submitter property value. The submitter's email address.
     * @param string|null $value Value to set for the submitter property.
    */
    public function setSubmitter(?string $value): void {
        $this->getBackingStore()->set('submitter', $value);
    }

}
