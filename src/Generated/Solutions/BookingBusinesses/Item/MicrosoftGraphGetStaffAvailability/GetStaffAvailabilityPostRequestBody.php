<?php

namespace Microsoft\Graph\Generated\Solutions\BookingBusinesses\Item\MicrosoftGraphGetStaffAvailability;

use Microsoft\Graph\Generated\Models\DateTimeTimeZone;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class GetStaffAvailabilityPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new getStaffAvailabilityPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetStaffAvailabilityPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetStaffAvailabilityPostRequestBody {
        return new GetStaffAvailabilityPostRequestBody();
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
     * Gets the endDateTime property value. 
     * @return DateTimeTimeZone|null
    */
    public function getEndDateTime(): ?DateTimeTimeZone {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'staffIds' => fn(ParseNode $n) => $o->setStaffIds($n->getCollectionOfPrimitiveValues()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the staffIds property value. 
     * @return array<string>|null
    */
    public function getStaffIds(): ?array {
        return $this->getBackingStore()->get('staffIds');
    }

    /**
     * Gets the startDateTime property value. 
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('endDateTime', $this->getEndDateTime());
        $writer->writeCollectionOfPrimitiveValues('staffIds', $this->getStaffIds());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
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
     * Sets the endDateTime property value. 
     * @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the staffIds property value. 
     * @param array<string>|null $value Value to set for the staffIds property.
    */
    public function setStaffIds(?array $value): void {
        $this->getBackingStore()->set('staffIds', $value);
    }

    /**
     * Sets the startDateTime property value. 
     * @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
