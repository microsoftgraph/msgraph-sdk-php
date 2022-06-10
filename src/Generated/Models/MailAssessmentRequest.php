<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailAssessmentRequest extends ThreatAssessmentRequest implements Parsable 
{
    /**
     * @var MailDestinationRoutingReason|null $destinationRoutingReason The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
    */
    private ?MailDestinationRoutingReason $destinationRoutingReason = null;
    
    /**
     * @var string|null $messageUri The resource URI of the mail message for assessment.
    */
    private ?string $messageUri = null;
    
    /**
     * @var string|null $recipientEmail The mail recipient whose policies are used to assess the mail.
    */
    private ?string $recipientEmail = null;
    
    /**
     * Instantiates a new MailAssessmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->destinationRoutingReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'destinationRoutingReason' => function (ParseNode $n) use ($o) { $o->setDestinationRoutingReason($n->getEnumValue(MailDestinationRoutingReason::class)); },
            'messageUri' => function (ParseNode $n) use ($o) { $o->setMessageUri($n->getStringValue()); },
            'recipientEmail' => function (ParseNode $n) use ($o) { $o->setRecipientEmail($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the messageUri property value. The resource URI of the mail message for assessment.
     * @return string|null
    */
    public function getMessageUri(): ?string {
        return $this->messageUri;
    }

    /**
     * Gets the recipientEmail property value. The mail recipient whose policies are used to assess the mail.
     * @return string|null
    */
    public function getRecipientEmail(): ?string {
        return $this->recipientEmail;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('destinationRoutingReason', $this->destinationRoutingReason);
        $writer->writeStringValue('messageUri', $this->messageUri);
        $writer->writeStringValue('recipientEmail', $this->recipientEmail);
    }

    /**
     * Sets the destinationRoutingReason property value. The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
     *  @param MailDestinationRoutingReason|null $value Value to set for the destinationRoutingReason property.
    */
    public function setDestinationRoutingReason(?MailDestinationRoutingReason $value ): void {
        $this->destinationRoutingReason = $value;
    }

    /**
     * Sets the messageUri property value. The resource URI of the mail message for assessment.
     *  @param string|null $value Value to set for the messageUri property.
    */
    public function setMessageUri(?string $value ): void {
        $this->messageUri = $value;
    }

    /**
     * Sets the recipientEmail property value. The mail recipient whose policies are used to assess the mail.
     *  @param string|null $value Value to set for the recipientEmail property.
    */
    public function setRecipientEmail(?string $value ): void {
        $this->recipientEmail = $value;
    }

}
