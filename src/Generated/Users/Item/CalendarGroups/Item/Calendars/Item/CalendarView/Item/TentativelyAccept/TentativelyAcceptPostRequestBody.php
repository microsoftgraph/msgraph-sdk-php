<?php

namespace Microsoft\Graph\Generated\Users\Item\CalendarGroups\Item\Calendars\Item\CalendarView\Item\TentativelyAccept;

use Microsoft\Graph\Generated\Models\TimeSlot;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TentativelyAcceptPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new tentativelyAcceptPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the Comment property value. The Comment property
     * @return string|null
    */
    public function getComment(): ?string {
        $val = $this->getBackingStore()->get('comment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comment'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'ProposedNewTime' => fn(ParseNode $n) => $o->setProposedNewTime($n->getObjectValue([TimeSlot::class, 'createFromDiscriminatorValue'])),
            'SendResponse' => fn(ParseNode $n) => $o->setSendResponse($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the ProposedNewTime property value. The ProposedNewTime property
     * @return TimeSlot|null
    */
    public function getProposedNewTime(): ?TimeSlot {
        $val = $this->getBackingStore()->get('proposedNewTime');
        if (is_null($val) || $val instanceof TimeSlot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proposedNewTime'");
    }

    /**
     * Gets the SendResponse property value. The SendResponse property
     * @return bool|null
    */
    public function getSendResponse(): ?bool {
        $val = $this->getBackingStore()->get('sendResponse');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sendResponse'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('Comment', $this->getComment());
        $writer->writeObjectValue('ProposedNewTime', $this->getProposedNewTime());
        $writer->writeBooleanValue('SendResponse', $this->getSendResponse());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the Comment property value. The Comment property
     * @param string|null $value Value to set for the Comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the ProposedNewTime property value. The ProposedNewTime property
     * @param TimeSlot|null $value Value to set for the ProposedNewTime property.
    */
    public function setProposedNewTime(?TimeSlot $value): void {
        $this->getBackingStore()->set('proposedNewTime', $value);
    }

    /**
     * Sets the SendResponse property value. The SendResponse property
     * @param bool|null $value Value to set for the SendResponse property.
    */
    public function setSendResponse(?bool $value): void {
        $this->getBackingStore()->set('sendResponse', $value);
    }

}
