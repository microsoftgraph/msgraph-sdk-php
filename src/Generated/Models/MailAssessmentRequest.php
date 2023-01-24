<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailAssessmentRequest extends ThreatAssessmentRequest implements Parsable 
{
    /**
     * Instantiates a new MailAssessmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mailAssessmentRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailAssessmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailAssessmentRequest {
        return new MailAssessmentRequest();
    }

    /**
     * Gets the destinationRoutingReason property value. The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
     * @return MailDestinationRoutingReason|null
    */
    public function getDestinationRoutingReason(): ?MailDestinationRoutingReason {
        return $this->getBackingStore()->get('destinationRoutingReason');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'destinationRoutingReason' => fn(ParseNode $n) => $o->setDestinationRoutingReason($n->getEnumValue(MailDestinationRoutingReason::class)),
            'messageUri' => fn(ParseNode $n) => $o->setMessageUri($n->getStringValue()),
            'recipientEmail' => fn(ParseNode $n) => $o->setRecipientEmail($n->getStringValue()),
        ]);
    }

    /**
     * Gets the messageUri property value. The resource URI of the mail message for assessment.
     * @return string|null
    */
    public function getMessageUri(): ?string {
        return $this->getBackingStore()->get('messageUri');
    }

    /**
     * Gets the recipientEmail property value. The mail recipient whose policies are used to assess the mail.
     * @return string|null
    */
    public function getRecipientEmail(): ?string {
        return $this->getBackingStore()->get('recipientEmail');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('destinationRoutingReason', $this->getDestinationRoutingReason());
        $writer->writeStringValue('messageUri', $this->getMessageUri());
        $writer->writeStringValue('recipientEmail', $this->getRecipientEmail());
    }

    /**
     * Sets the destinationRoutingReason property value. The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
     * @param MailDestinationRoutingReason|null $value Value to set for the destinationRoutingReason property.
    */
    public function setDestinationRoutingReason(?MailDestinationRoutingReason $value): void {
        $this->getBackingStore()->set('destinationRoutingReason', $value);
    }

    /**
     * Sets the messageUri property value. The resource URI of the mail message for assessment.
     * @param string|null $value Value to set for the messageUri property.
    */
    public function setMessageUri(?string $value): void {
        $this->getBackingStore()->set('messageUri', $value);
    }

    /**
     * Sets the recipientEmail property value. The mail recipient whose policies are used to assess the mail.
     * @param string|null $value Value to set for the recipientEmail property.
    */
    public function setRecipientEmail(?string $value): void {
        $this->getBackingStore()->set('recipientEmail', $value);
    }

}
