<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailFileAssessmentRequest extends ThreatAssessmentRequest implements Parsable 
{
    /**
     * Instantiates a new emailFileAssessmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.emailFileAssessmentRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailFileAssessmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailFileAssessmentRequest {
        return new EmailFileAssessmentRequest();
    }

    /**
     * Gets the contentData property value. Base64 encoded .eml email file content. The file content can't fetch back because it isn't stored.
     * @return string|null
    */
    public function getContentData(): ?string {
        $val = $this->getBackingStore()->get('contentData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentData'");
    }

    /**
     * Gets the destinationRoutingReason property value. The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
     * @return EmailFileAssessmentRequest_destinationRoutingReason|null
    */
    public function getDestinationRoutingReason(): ?EmailFileAssessmentRequest_destinationRoutingReason {
        $val = $this->getBackingStore()->get('destinationRoutingReason');
        if (is_null($val) || $val instanceof EmailFileAssessmentRequest_destinationRoutingReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationRoutingReason'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentData' => fn(ParseNode $n) => $o->setContentData($n->getStringValue()),
            'destinationRoutingReason' => fn(ParseNode $n) => $o->setDestinationRoutingReason($n->getEnumValue(EmailFileAssessmentRequest_destinationRoutingReason::class)),
            'recipientEmail' => fn(ParseNode $n) => $o->setRecipientEmail($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recipientEmail property value. The mail recipient whose policies are used to assess the mail.
     * @return string|null
    */
    public function getRecipientEmail(): ?string {
        $val = $this->getBackingStore()->get('recipientEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientEmail'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contentData', $this->getContentData());
        $writer->writeEnumValue('destinationRoutingReason', $this->getDestinationRoutingReason());
        $writer->writeStringValue('recipientEmail', $this->getRecipientEmail());
    }

    /**
     * Sets the contentData property value. Base64 encoded .eml email file content. The file content can't fetch back because it isn't stored.
     * @param string|null $value Value to set for the contentData property.
    */
    public function setContentData(?string $value): void {
        $this->getBackingStore()->set('contentData', $value);
    }

    /**
     * Sets the destinationRoutingReason property value. The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
     * @param EmailFileAssessmentRequest_destinationRoutingReason|null $value Value to set for the destinationRoutingReason property.
    */
    public function setDestinationRoutingReason(?EmailFileAssessmentRequest_destinationRoutingReason $value): void {
        $this->getBackingStore()->set('destinationRoutingReason', $value);
    }

    /**
     * Sets the recipientEmail property value. The mail recipient whose policies are used to assess the mail.
     * @param string|null $value Value to set for the recipientEmail property.
    */
    public function setRecipientEmail(?string $value): void {
        $this->getBackingStore()->set('recipientEmail', $value);
    }

}
