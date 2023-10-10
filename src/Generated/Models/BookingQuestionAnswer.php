<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BookingQuestionAnswer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new bookingQuestionAnswer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingQuestionAnswer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingQuestionAnswer {
        return new BookingQuestionAnswer();
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
     * Gets the answer property value. The answer given by the user in case the answerInputType is text.
     * @return string|null
    */
    public function getAnswer(): ?string {
        $val = $this->getBackingStore()->get('answer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'answer'");
    }

    /**
     * Gets the answerInputType property value. The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     * @return AnswerInputType|null
    */
    public function getAnswerInputType(): ?AnswerInputType {
        $val = $this->getBackingStore()->get('answerInputType');
        if (is_null($val) || $val instanceof AnswerInputType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'answerInputType'");
    }

    /**
     * Gets the answerOptions property value. In case the answerInputType is radioButton, this will consists of a list of possible answer values.
     * @return array<string>|null
    */
    public function getAnswerOptions(): ?array {
        $val = $this->getBackingStore()->get('answerOptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'answerOptions'");
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
            'answer' => fn(ParseNode $n) => $o->setAnswer($n->getStringValue()),
            'answerInputType' => fn(ParseNode $n) => $o->setAnswerInputType($n->getEnumValue(AnswerInputType::class)),
            'answerOptions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAnswerOptions($val);
            },
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'question' => fn(ParseNode $n) => $o->setQuestion($n->getStringValue()),
            'questionId' => fn(ParseNode $n) => $o->setQuestionId($n->getStringValue()),
            'selectedOptions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSelectedOptions($val);
            },
        ];
    }

    /**
     * Gets the isRequired property value. Indicates whether it is mandatory to answer the custom question.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        $val = $this->getBackingStore()->get('isRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequired'");
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
     * Gets the question property value. The question.
     * @return string|null
    */
    public function getQuestion(): ?string {
        $val = $this->getBackingStore()->get('question');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'question'");
    }

    /**
     * Gets the questionId property value. The ID of the custom question.
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
     * Gets the selectedOptions property value. The answers selected by the user.
     * @return array<string>|null
    */
    public function getSelectedOptions(): ?array {
        $val = $this->getBackingStore()->get('selectedOptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'selectedOptions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('answer', $this->getAnswer());
        $writer->writeEnumValue('answerInputType', $this->getAnswerInputType());
        $writer->writeCollectionOfPrimitiveValues('answerOptions', $this->getAnswerOptions());
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('question', $this->getQuestion());
        $writer->writeStringValue('questionId', $this->getQuestionId());
        $writer->writeCollectionOfPrimitiveValues('selectedOptions', $this->getSelectedOptions());
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
     * Sets the answer property value. The answer given by the user in case the answerInputType is text.
     * @param string|null $value Value to set for the answer property.
    */
    public function setAnswer(?string $value): void {
        $this->getBackingStore()->set('answer', $value);
    }

    /**
     * Sets the answerInputType property value. The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     * @param AnswerInputType|null $value Value to set for the answerInputType property.
    */
    public function setAnswerInputType(?AnswerInputType $value): void {
        $this->getBackingStore()->set('answerInputType', $value);
    }

    /**
     * Sets the answerOptions property value. In case the answerInputType is radioButton, this will consists of a list of possible answer values.
     * @param array<string>|null $value Value to set for the answerOptions property.
    */
    public function setAnswerOptions(?array $value): void {
        $this->getBackingStore()->set('answerOptions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isRequired property value. Indicates whether it is mandatory to answer the custom question.
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the question property value. The question.
     * @param string|null $value Value to set for the question property.
    */
    public function setQuestion(?string $value): void {
        $this->getBackingStore()->set('question', $value);
    }

    /**
     * Sets the questionId property value. The ID of the custom question.
     * @param string|null $value Value to set for the questionId property.
    */
    public function setQuestionId(?string $value): void {
        $this->getBackingStore()->set('questionId', $value);
    }

    /**
     * Sets the selectedOptions property value. The answers selected by the user.
     * @param array<string>|null $value Value to set for the selectedOptions property.
    */
    public function setSelectedOptions(?array $value): void {
        $this->getBackingStore()->set('selectedOptions', $value);
    }

}
