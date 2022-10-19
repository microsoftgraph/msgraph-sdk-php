<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendar\CalendarView\Item\Instances\Item\TentativelyAccept;

use Microsoft\Graph\Generated\Models\TimeSlot;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TentativelyAcceptPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $comment The Comment property
    */
    private ?string $comment = null;
    
    /**
     * @var TimeSlot|null $proposedNewTime The ProposedNewTime property
    */
    private ?TimeSlot $proposedNewTime = null;
    
    /**
     * @var bool|null $sendResponse The SendResponse property
    */
    private ?bool $sendResponse = null;
    
    /**
     * Instantiates a new tentativelyAcceptPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TentativelyAcceptPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TentativelyAcceptPostRequestBody {
        return new TentativelyAcceptPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the comment property value. The Comment property
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
        $o = $this;
        return  [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'proposedNewTime' => fn(ParseNode $n) => $o->setProposedNewTime($n->getObjectValue([TimeSlot::class, 'createFromDiscriminatorValue'])),
            'sendResponse' => fn(ParseNode $n) => $o->setSendResponse($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the proposedNewTime property value. The ProposedNewTime property
     * @return TimeSlot|null
    */
    public function getProposedNewTime(): ?TimeSlot {
        return $this->proposedNewTime;
    }

    /**
     * Gets the sendResponse property value. The SendResponse property
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
     * Sets the comment property value. The Comment property
     *  @param string|null $value Value to set for the Comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the proposedNewTime property value. The ProposedNewTime property
     *  @param TimeSlot|null $value Value to set for the ProposedNewTime property.
    */
    public function setProposedNewTime(?TimeSlot $value ): void {
        $this->proposedNewTime = $value;
    }

    /**
     * Sets the sendResponse property value. The SendResponse property
     *  @param bool|null $value Value to set for the SendResponse property.
    */
    public function setSendResponse(?bool $value ): void {
        $this->sendResponse = $value;
    }

}
