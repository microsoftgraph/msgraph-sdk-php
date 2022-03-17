<?php

namespace Microsoft\Graph\Generated\Groups\Item\CalendarView\Item\Instances\Item\Decline;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\TimeSlot;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeclineRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $Comment  */
    private ?string $comment = null;
    
    /** @var TimeSlot|null $ProposedNewTime  */
    private ?TimeSlot $proposedNewTime = null;
    
    /** @var bool|null $SendResponse  */
    private ?bool $sendResponse = null;
    
    /**
     * Instantiates a new declineRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeclineRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeclineRequestBody {
        return new DeclineRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the comment property value. 
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'comment' => function (self $o, ParseNode $n) { $o->setComment($n->getStringValue()); },
            'proposedNewTime' => function (self $o, ParseNode $n) { $o->setProposedNewTime($n->getObjectValue(TimeSlot::class)); },
            'sendResponse' => function (self $o, ParseNode $n) { $o->setSendResponse($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the proposedNewTime property value. 
     * @return TimeSlot|null
    */
    public function getProposedNewTime(): ?TimeSlot {
        return $this->proposedNewTime;
    }

    /**
     * Gets the sendResponse property value. 
     * @return bool|null
    */
    public function getSendResponse(): ?bool {
        return $this->sendResponse;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeObjectValue('proposedNewTime', $this->proposedNewTime);
        $writer->writeBooleanValue('sendResponse', $this->sendResponse);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the comment property value. 
     *  @param string|null $value Value to set for the Comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the proposedNewTime property value. 
     *  @param TimeSlot|null $value Value to set for the ProposedNewTime property.
    */
    public function setProposedNewTime(?TimeSlot $value ): void {
        $this->proposedNewTime = $value;
    }

    /**
     * Sets the sendResponse property value. 
     *  @param bool|null $value Value to set for the SendResponse property.
    */
    public function setSendResponse(?bool $value ): void {
        $this->sendResponse = $value;
    }

}
