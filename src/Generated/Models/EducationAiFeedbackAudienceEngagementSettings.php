<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EducationAiFeedbackAudienceEngagementSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EducationAiFeedbackAudienceEngagementSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAiFeedbackAudienceEngagementSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAiFeedbackAudienceEngagementSettings {
        return new EducationAiFeedbackAudienceEngagementSettings();
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
     * Gets the areEngagementStrategiesEnabled property value. Indicates whether the student should receive feedback on their engagement strategies from the AI feedback.
     * @return bool|null
    */
    public function getAreEngagementStrategiesEnabled(): ?bool {
        $val = $this->getBackingStore()->get('areEngagementStrategiesEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'areEngagementStrategiesEnabled'");
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
            'areEngagementStrategiesEnabled' => fn(ParseNode $n) => $o->setAreEngagementStrategiesEnabled($n->getBooleanValue()),
            'isCallToActionEnabled' => fn(ParseNode $n) => $o->setIsCallToActionEnabled($n->getBooleanValue()),
            'isEmotionalAndIntellectualAppealEnabled' => fn(ParseNode $n) => $o->setIsEmotionalAndIntellectualAppealEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isCallToActionEnabled property value. Indicates whether the student should receive feedback on their call to action from the AI feedback.
     * @return bool|null
    */
    public function getIsCallToActionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isCallToActionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCallToActionEnabled'");
    }

    /**
     * Gets the isEmotionalAndIntellectualAppealEnabled property value. Indicates whether the student should receive feedback on their emotional and intellectual appeal from the AI feedback.
     * @return bool|null
    */
    public function getIsEmotionalAndIntellectualAppealEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEmotionalAndIntellectualAppealEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEmotionalAndIntellectualAppealEnabled'");
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
        $writer->writeBooleanValue('areEngagementStrategiesEnabled', $this->getAreEngagementStrategiesEnabled());
        $writer->writeBooleanValue('isCallToActionEnabled', $this->getIsCallToActionEnabled());
        $writer->writeBooleanValue('isEmotionalAndIntellectualAppealEnabled', $this->getIsEmotionalAndIntellectualAppealEnabled());
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
     * Sets the areEngagementStrategiesEnabled property value. Indicates whether the student should receive feedback on their engagement strategies from the AI feedback.
     * @param bool|null $value Value to set for the areEngagementStrategiesEnabled property.
    */
    public function setAreEngagementStrategiesEnabled(?bool $value): void {
        $this->getBackingStore()->set('areEngagementStrategiesEnabled', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isCallToActionEnabled property value. Indicates whether the student should receive feedback on their call to action from the AI feedback.
     * @param bool|null $value Value to set for the isCallToActionEnabled property.
    */
    public function setIsCallToActionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isCallToActionEnabled', $value);
    }

    /**
     * Sets the isEmotionalAndIntellectualAppealEnabled property value. Indicates whether the student should receive feedback on their emotional and intellectual appeal from the AI feedback.
     * @param bool|null $value Value to set for the isEmotionalAndIntellectualAppealEnabled property.
    */
    public function setIsEmotionalAndIntellectualAppealEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEmotionalAndIntellectualAppealEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
