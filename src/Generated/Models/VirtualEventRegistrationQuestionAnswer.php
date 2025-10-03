<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventRegistrationQuestionAnswer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new VirtualEventRegistrationQuestionAnswer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventRegistrationQuestionAnswer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventRegistrationQuestionAnswer {
        return new VirtualEventRegistrationQuestionAnswer();
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
     * Gets the booleanValue property value. Boolean answer of the virtual event registration question. Only appears when answerInputType is boolean.
     * @return bool|null
    */
    public function getBooleanValue(): ?bool {
        $val = $this->getBackingStore()->get('booleanValue');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'booleanValue'");
    }

    /**
     * Gets the displayName property value. Display name of the registration question.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'booleanValue' => fn(ParseNode $n) => $o->setBooleanValue($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'multiChoiceValues' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMultiChoiceValues($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'questionId' => fn(ParseNode $n) => $o->setQuestionId($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the multiChoiceValues property value. Collection of text answer of the virtual event registration question. Only appears when answerInputType is multiChoice.
     * @return array<string>|null
    */
    public function getMultiChoiceValues(): ?array {
        $val = $this->getBackingStore()->get('multiChoiceValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiChoiceValues'");
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
     * Gets the questionId property value. id of the virtual event registration question.
     * @return string|null
    */
    public function getQuestionId(): ?string {
        $val = $this->getBackingStore()->get('questionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'questionId'");
    }

    /**
     * Gets the value property value. Text answer of the virtual event registration question. Appears when answerInputType is text, multilineText or singleChoice.
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('booleanValue', $this->getBooleanValue());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('multiChoiceValues', $this->getMultiChoiceValues());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('questionId', $this->getQuestionId());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the booleanValue property value. Boolean answer of the virtual event registration question. Only appears when answerInputType is boolean.
     * @param bool|null $value Value to set for the booleanValue property.
    */
    public function setBooleanValue(?bool $value): void {
        $this->getBackingStore()->set('booleanValue', $value);
    }

    /**
     * Sets the displayName property value. Display name of the registration question.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the multiChoiceValues property value. Collection of text answer of the virtual event registration question. Only appears when answerInputType is multiChoice.
     * @param array<string>|null $value Value to set for the multiChoiceValues property.
    */
    public function setMultiChoiceValues(?array $value): void {
        $this->getBackingStore()->set('multiChoiceValues', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the questionId property value. id of the virtual event registration question.
     * @param string|null $value Value to set for the questionId property.
    */
    public function setQuestionId(?string $value): void {
        $this->getBackingStore()->set('questionId', $value);
    }

    /**
     * Sets the value property value. Text answer of the virtual event registration question. Appears when answerInputType is text, multilineText or singleChoice.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
