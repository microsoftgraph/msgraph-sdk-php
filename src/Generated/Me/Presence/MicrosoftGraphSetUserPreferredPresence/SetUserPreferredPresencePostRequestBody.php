<?php

namespace Microsoft\Graph\Generated\Me\Presence\MicrosoftGraphSetUserPreferredPresence;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SetUserPreferredPresencePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new setUserPreferredPresencePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetUserPreferredPresencePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetUserPreferredPresencePostRequestBody {
        return new SetUserPreferredPresencePostRequestBody();
    }

    /**
     * Gets the activity property value. The activity property
     * @return string|null
    */
    public function getActivity(): ?string {
        return $this->getBackingStore()->get('activity');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the availability property value. The availability property
     * @return string|null
    */
    public function getAvailability(): ?string {
        return $this->getBackingStore()->get('availability');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the expirationDuration property value. The expirationDuration property
     * @return DateInterval|null
    */
    public function getExpirationDuration(): ?DateInterval {
        return $this->getBackingStore()->get('expirationDuration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getStringValue()),
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getStringValue()),
            'expirationDuration' => fn(ParseNode $n) => $o->setExpirationDuration($n->getDateIntervalValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('activity', $this->getActivity());
        $writer->writeStringValue('availability', $this->getAvailability());
        $writer->writeDateIntervalValue('expirationDuration', $this->getExpirationDuration());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activity property value. The activity property
     * @param string|null $value Value to set for the activity property.
    */
    public function setActivity(?string $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the availability property value. The availability property
     * @param string|null $value Value to set for the availability property.
    */
    public function setAvailability(?string $value): void {
        $this->getBackingStore()->set('availability', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the expirationDuration property value. The expirationDuration property
     * @param DateInterval|null $value Value to set for the expirationDuration property.
    */
    public function setExpirationDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('expirationDuration', $value);
    }

}
