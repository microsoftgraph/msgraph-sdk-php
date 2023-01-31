<?php

namespace Microsoft\Graph\Generated\Me\Calendars\Item\CalendarView\Item\MicrosoftGraphDecline;

use Microsoft\Graph\Generated\Models\TimeSlot;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeclinePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new declinePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeclinePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeclinePostRequestBody {
        return new DeclinePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the comment property value. 
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->getBackingStore()->get('comment');
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
     * Gets the proposedNewTime property value. 
     * @return TimeSlot|null
    */
    public function getProposedNewTime(): ?TimeSlot {
        return $this->getBackingStore()->get('proposedNewTime');
    }

    /**
     * Gets the sendResponse property value. 
     * @return bool|null
    */
    public function getSendResponse(): ?bool {
        return $this->getBackingStore()->get('sendResponse');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeObjectValue('proposedNewTime', $this->getProposedNewTime());
        $writer->writeBooleanValue('sendResponse', $this->getSendResponse());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the comment property value. 
     * @param string|null $value Value to set for the Comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the proposedNewTime property value. 
     * @param TimeSlot|null $value Value to set for the ProposedNewTime property.
    */
    public function setProposedNewTime(?TimeSlot $value): void {
        $this->getBackingStore()->set('proposedNewTime', $value);
    }

    /**
     * Sets the sendResponse property value. 
     * @param bool|null $value Value to set for the SendResponse property.
    */
    public function setSendResponse(?bool $value): void {
        $this->getBackingStore()->set('sendResponse', $value);
    }

}
