<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EducationSpeakerCoachDeliverySettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EducationSpeakerCoachDeliverySettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSpeakerCoachDeliverySettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSpeakerCoachDeliverySettings {
        return new EducationSpeakerCoachDeliverySettings();
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
     * Gets the areFillerWordsEnabled property value. Indicates whether the student should receive feedback on their filler words from the Speaker Coach.
     * @return bool|null
    */
    public function getAreFillerWordsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('areFillerWordsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'areFillerWordsEnabled'");
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
            'areFillerWordsEnabled' => fn(ParseNode $n) => $o->setAreFillerWordsEnabled($n->getBooleanValue()),
            'isPaceEnabled' => fn(ParseNode $n) => $o->setIsPaceEnabled($n->getBooleanValue()),
            'isPitchEnabled' => fn(ParseNode $n) => $o->setIsPitchEnabled($n->getBooleanValue()),
            'isPronunciationEnabled' => fn(ParseNode $n) => $o->setIsPronunciationEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isPaceEnabled property value. Indicates whether the student should receive feedback on their pace from the Speaker Coach.
     * @return bool|null
    */
    public function getIsPaceEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isPaceEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPaceEnabled'");
    }

    /**
     * Gets the isPitchEnabled property value. Indicates whether the student should receive feedback on their pitch from the Speaker Coach.
     * @return bool|null
    */
    public function getIsPitchEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isPitchEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPitchEnabled'");
    }

    /**
     * Gets the isPronunciationEnabled property value. Indicates whether the student should receive feedback on their pronunciation from the Speaker Coach. This is automatically enabled if isAiFeedbackEnabled is set to true on the educationSpeakerProgressResource, or if spokenLanguageLocale is set to a value besides en-US on the educationSpeakerProgressResource.
     * @return bool|null
    */
    public function getIsPronunciationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isPronunciationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPronunciationEnabled'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('areFillerWordsEnabled', $this->getAreFillerWordsEnabled());
        $writer->writeBooleanValue('isPaceEnabled', $this->getIsPaceEnabled());
        $writer->writeBooleanValue('isPitchEnabled', $this->getIsPitchEnabled());
        $writer->writeBooleanValue('isPronunciationEnabled', $this->getIsPronunciationEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the areFillerWordsEnabled property value. Indicates whether the student should receive feedback on their filler words from the Speaker Coach.
     * @param bool|null $value Value to set for the areFillerWordsEnabled property.
    */
    public function setAreFillerWordsEnabled(?bool $value): void {
        $this->getBackingStore()->set('areFillerWordsEnabled', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isPaceEnabled property value. Indicates whether the student should receive feedback on their pace from the Speaker Coach.
     * @param bool|null $value Value to set for the isPaceEnabled property.
    */
    public function setIsPaceEnabled(?bool $value): void {
        $this->getBackingStore()->set('isPaceEnabled', $value);
    }

    /**
     * Sets the isPitchEnabled property value. Indicates whether the student should receive feedback on their pitch from the Speaker Coach.
     * @param bool|null $value Value to set for the isPitchEnabled property.
    */
    public function setIsPitchEnabled(?bool $value): void {
        $this->getBackingStore()->set('isPitchEnabled', $value);
    }

    /**
     * Sets the isPronunciationEnabled property value. Indicates whether the student should receive feedback on their pronunciation from the Speaker Coach. This is automatically enabled if isAiFeedbackEnabled is set to true on the educationSpeakerProgressResource, or if spokenLanguageLocale is set to a value besides en-US on the educationSpeakerProgressResource.
     * @param bool|null $value Value to set for the isPronunciationEnabled property.
    */
    public function setIsPronunciationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isPronunciationEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
