<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingQuestionAnswer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $answer The answer given by the user in case the answerInputType is text.
    */
    private ?string $answer = null;
    
    /**
     * @var AnswerInputType|null $answerInputType The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
    */
    private ?AnswerInputType $answerInputType = null;
    
    /**
     * @var array<string>|null $answerOptions In case the answerInputType is radioButton, this will consists of a list of possible answer values.
    */
    private ?array $answerOptions = null;
    
    /**
     * @var bool|null $isRequired Indicates whether it is mandatory to answer the custom question.
    */
    private ?bool $isRequired = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $question The question.
    */
    private ?string $question = null;
    
    /**
     * @var string|null $questionId The ID of the custom question.
    */
    private ?string $questionId = null;
    
    /**
     * @var array<string>|null $selectedOptions The answers selected by the user.
    */
    private ?array $selectedOptions = null;
    
    /**
     * Instantiates a new bookingQuestionAnswer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.bookingQuestionAnswer');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the answer property value. The answer given by the user in case the answerInputType is text.
     * @return string|null
    */
    public function getAnswer(): ?string {
        return $this->answer;
    }

    /**
     * Gets the answerInputType property value. The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     * @return AnswerInputType|null
    */
    public function getAnswerInputType(): ?AnswerInputType {
        return $this->answerInputType;
    }

    /**
     * Gets the answerOptions property value. In case the answerInputType is radioButton, this will consists of a list of possible answer values.
     * @return array<string>|null
    */
    public function getAnswerOptions(): ?array {
        return $this->answerOptions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'answer' => fn(ParseNode $n) => $o->setAnswer($n->getStringValue()),
            'answerInputType' => fn(ParseNode $n) => $o->setAnswerInputType($n->getEnumValue(AnswerInputType::class)),
            'answerOptions' => fn(ParseNode $n) => $o->setAnswerOptions($n->getCollectionOfPrimitiveValues()),
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'question' => fn(ParseNode $n) => $o->setQuestion($n->getStringValue()),
            'questionId' => fn(ParseNode $n) => $o->setQuestionId($n->getStringValue()),
            'selectedOptions' => fn(ParseNode $n) => $o->setSelectedOptions($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the isRequired property value. Indicates whether it is mandatory to answer the custom question.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->isRequired;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the question property value. The question.
     * @return string|null
    */
    public function getQuestion(): ?string {
        return $this->question;
    }

    /**
     * Gets the questionId property value. The ID of the custom question.
     * @return string|null
    */
    public function getQuestionId(): ?string {
        return $this->questionId;
    }

    /**
     * Gets the selectedOptions property value. The answers selected by the user.
     * @return array<string>|null
    */
    public function getSelectedOptions(): ?array {
        return $this->selectedOptions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('answer', $this->answer);
        $writer->writeEnumValue('answerInputType', $this->answerInputType);
        $writer->writeCollectionOfPrimitiveValues('answerOptions', $this->answerOptions);
        $writer->writeBooleanValue('isRequired', $this->isRequired);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('question', $this->question);
        $writer->writeStringValue('questionId', $this->questionId);
        $writer->writeCollectionOfPrimitiveValues('selectedOptions', $this->selectedOptions);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the answer property value. The answer given by the user in case the answerInputType is text.
     *  @param string|null $value Value to set for the answer property.
    */
    public function setAnswer(?string $value ): void {
        $this->answer = $value;
    }

    /**
     * Sets the answerInputType property value. The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     *  @param AnswerInputType|null $value Value to set for the answerInputType property.
    */
    public function setAnswerInputType(?AnswerInputType $value ): void {
        $this->answerInputType = $value;
    }

    /**
     * Sets the answerOptions property value. In case the answerInputType is radioButton, this will consists of a list of possible answer values.
     *  @param array<string>|null $value Value to set for the answerOptions property.
    */
    public function setAnswerOptions(?array $value ): void {
        $this->answerOptions = $value;
    }

    /**
     * Sets the isRequired property value. Indicates whether it is mandatory to answer the custom question.
     *  @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value ): void {
        $this->isRequired = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the question property value. The question.
     *  @param string|null $value Value to set for the question property.
    */
    public function setQuestion(?string $value ): void {
        $this->question = $value;
    }

    /**
     * Sets the questionId property value. The ID of the custom question.
     *  @param string|null $value Value to set for the questionId property.
    */
    public function setQuestionId(?string $value ): void {
        $this->questionId = $value;
    }

    /**
     * Sets the selectedOptions property value. The answers selected by the user.
     *  @param array<string>|null $value Value to set for the selectedOptions property.
    */
    public function setSelectedOptions(?array $value ): void {
        $this->selectedOptions = $value;
    }

}
