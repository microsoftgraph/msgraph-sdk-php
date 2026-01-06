<?php

namespace Microsoft\Graph\Generated\Users\Item\Presence\SetManualLocation;

use Microsoft\Graph\Generated\Models\WorkLocationType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SetManualLocationPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SetManualLocationPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetManualLocationPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetManualLocationPostRequestBody {
        return new SetManualLocationPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'placeId' => fn(ParseNode $n) => $o->setPlaceId($n->getStringValue()),
            'workLocationType' => fn(ParseNode $n) => $o->setWorkLocationType($n->getEnumValue(WorkLocationType::class)),
        ];
    }

    /**
     * Gets the placeId property value. The placeId property
     * @return string|null
    */
    public function getPlaceId(): ?string {
        $val = $this->getBackingStore()->get('placeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'placeId'");
    }

    /**
     * Gets the workLocationType property value. The workLocationType property
     * @return WorkLocationType|null
    */
    public function getWorkLocationType(): ?WorkLocationType {
        $val = $this->getBackingStore()->get('workLocationType');
        if (is_null($val) || $val instanceof WorkLocationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workLocationType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('placeId', $this->getPlaceId());
        $writer->writeEnumValue('workLocationType', $this->getWorkLocationType());
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
     * Sets the placeId property value. The placeId property
     * @param string|null $value Value to set for the placeId property.
    */
    public function setPlaceId(?string $value): void {
        $this->getBackingStore()->set('placeId', $value);
    }

    /**
     * Sets the workLocationType property value. The workLocationType property
     * @param WorkLocationType|null $value Value to set for the workLocationType property.
    */
    public function setWorkLocationType(?WorkLocationType $value): void {
        $this->getBackingStore()->set('workLocationType', $value);
    }

}
