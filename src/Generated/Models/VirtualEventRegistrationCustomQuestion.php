<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventRegistrationCustomQuestion extends VirtualEventRegistrationQuestionBase implements Parsable 
{
    /**
     * Instantiates a new VirtualEventRegistrationCustomQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.virtualEventRegistrationCustomQuestion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventRegistrationCustomQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventRegistrationCustomQuestion {
        return new VirtualEventRegistrationCustomQuestion();
    }

    /**
     * Gets the answerChoices property value. Answer choices when answerInputType is singleChoice or multiChoice.
     * @return array<string>|null
    */
    public function getAnswerChoices(): ?array {
        $val = $this->getBackingStore()->get('answerChoices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'answerChoices'");
    }

    /**
     * Gets the answerInputType property value. Input type of the registration question answer. Possible values are text, multilineText, singleChoice, multiChoice, boolean, and unknownFutureValue.
     * @return VirtualEventRegistrationQuestionAnswerInputType|null
    */
    public function getAnswerInputType(): ?VirtualEventRegistrationQuestionAnswerInputType {
        $val = $this->getBackingStore()->get('answerInputType');
        if (is_null($val) || $val instanceof VirtualEventRegistrationQuestionAnswerInputType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'answerInputType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'answerChoices' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAnswerChoices($val);
            },
            'answerInputType' => fn(ParseNode $n) => $o->setAnswerInputType($n->getEnumValue(VirtualEventRegistrationQuestionAnswerInputType::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('answerChoices', $this->getAnswerChoices());
        $writer->writeEnumValue('answerInputType', $this->getAnswerInputType());
    }

    /**
     * Sets the answerChoices property value. Answer choices when answerInputType is singleChoice or multiChoice.
     * @param array<string>|null $value Value to set for the answerChoices property.
    */
    public function setAnswerChoices(?array $value): void {
        $this->getBackingStore()->set('answerChoices', $value);
    }

    /**
     * Sets the answerInputType property value. Input type of the registration question answer. Possible values are text, multilineText, singleChoice, multiChoice, boolean, and unknownFutureValue.
     * @param VirtualEventRegistrationQuestionAnswerInputType|null $value Value to set for the answerInputType property.
    */
    public function setAnswerInputType(?VirtualEventRegistrationQuestionAnswerInputType $value): void {
        $this->getBackingStore()->set('answerInputType', $value);
    }

}
