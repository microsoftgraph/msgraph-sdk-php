<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CoachmarkLocation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new coachmarkLocation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CoachmarkLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CoachmarkLocation {
        return new CoachmarkLocation();
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
            'length' => fn(ParseNode $n) => $o->setLength($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(CoachmarkLocationType::class)),
        ];
    }

    /**
     * Gets the length property value. Length of coachmark.
     * @return int|null
    */
    public function getLength(): ?int {
        $val = $this->getBackingStore()->get('length');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'length'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the offset property value. Offset of coachmark.
     * @return int|null
    */
    public function getOffset(): ?int {
        $val = $this->getBackingStore()->get('offset');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offset'");
    }

    /**
     * Gets the type property value. Type of coachmark location. The possible values are: unknown, fromEmail, subject, externalTag, displayName, messageBody, unknownFutureValue.
     * @return CoachmarkLocationType|null
    */
    public function getType(): ?CoachmarkLocationType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof CoachmarkLocationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('length', $this->getLength());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the length property value. Length of coachmark.
     * @param int|null $value Value to set for the length property.
    */
    public function setLength(?int $value): void {
        $this->getBackingStore()->set('length', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offset property value. Offset of coachmark.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->getBackingStore()->set('offset', $value);
    }

    /**
     * Sets the type property value. Type of coachmark location. The possible values are: unknown, fromEmail, subject, externalTag, displayName, messageBody, unknownFutureValue.
     * @param CoachmarkLocationType|null $value Value to set for the type property.
    */
    public function setType(?CoachmarkLocationType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
