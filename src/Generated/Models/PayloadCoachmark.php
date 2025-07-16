<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PayloadCoachmark implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PayloadCoachmark and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PayloadCoachmark
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PayloadCoachmark {
        return new PayloadCoachmark();
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
     * Gets the coachmarkLocation property value. The coachmark location.
     * @return CoachmarkLocation|null
    */
    public function getCoachmarkLocation(): ?CoachmarkLocation {
        $val = $this->getBackingStore()->get('coachmarkLocation');
        if (is_null($val) || $val instanceof CoachmarkLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coachmarkLocation'");
    }

    /**
     * Gets the description property value. The description about the coachmark.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coachmarkLocation' => fn(ParseNode $n) => $o->setCoachmarkLocation($n->getObjectValue([CoachmarkLocation::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'indicator' => fn(ParseNode $n) => $o->setIndicator($n->getStringValue()),
            'isValid' => fn(ParseNode $n) => $o->setIsValid($n->getBooleanValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'order' => fn(ParseNode $n) => $o->setOrder($n->getStringValue()),
        ];
    }

    /**
     * Gets the indicator property value. The coachmark indicator.
     * @return string|null
    */
    public function getIndicator(): ?string {
        $val = $this->getBackingStore()->get('indicator');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'indicator'");
    }

    /**
     * Gets the isValid property value. Indicates whether the coachmark is valid or not.
     * @return bool|null
    */
    public function getIsValid(): ?bool {
        $val = $this->getBackingStore()->get('isValid');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isValid'");
    }

    /**
     * Gets the language property value. The coachmark language.
     * @return string|null
    */
    public function getLanguage(): ?string {
        $val = $this->getBackingStore()->get('language');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'language'");
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
     * Gets the order property value. The coachmark order.
     * @return string|null
    */
    public function getOrder(): ?string {
        $val = $this->getBackingStore()->get('order');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'order'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('coachmarkLocation', $this->getCoachmarkLocation());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('indicator', $this->getIndicator());
        $writer->writeBooleanValue('isValid', $this->getIsValid());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('order', $this->getOrder());
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
     * Sets the coachmarkLocation property value. The coachmark location.
     * @param CoachmarkLocation|null $value Value to set for the coachmarkLocation property.
    */
    public function setCoachmarkLocation(?CoachmarkLocation $value): void {
        $this->getBackingStore()->set('coachmarkLocation', $value);
    }

    /**
     * Sets the description property value. The description about the coachmark.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the indicator property value. The coachmark indicator.
     * @param string|null $value Value to set for the indicator property.
    */
    public function setIndicator(?string $value): void {
        $this->getBackingStore()->set('indicator', $value);
    }

    /**
     * Sets the isValid property value. Indicates whether the coachmark is valid or not.
     * @param bool|null $value Value to set for the isValid property.
    */
    public function setIsValid(?bool $value): void {
        $this->getBackingStore()->set('isValid', $value);
    }

    /**
     * Sets the language property value. The coachmark language.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the order property value. The coachmark order.
     * @param string|null $value Value to set for the order property.
    */
    public function setOrder(?string $value): void {
        $this->getBackingStore()->set('order', $value);
    }

}
