<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingCustomQuestion extends Entity 
{
    /** @var AnswerInputType|null $answerInputType The expected answer type. The possible values are: text, radioButton, unknownFutureValue. */
    private ?AnswerInputType $answerInputType = null;
    
    /** @var array<string>|null $answerOptions List of possible answer values. */
    private ?array $answerOptions = null;
    
    /** @var string|null $displayName Display name of this entity. */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new bookingCustomQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingCustomQuestion
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BookingCustomQuestion {
        return new BookingCustomQuestion();
    }

    /**
     * Gets the answerInputType property value. The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     * @return AnswerInputType|null
    */
    public function getAnswerInputType(): ?AnswerInputType {
        return $this->answerInputType;
    }

    /**
     * Gets the answerOptions property value. List of possible answer values.
     * @return array<string>|null
    */
    public function getAnswerOptions(): ?array {
        return $this->answerOptions;
    }

    /**
     * Gets the displayName property value. Display name of this entity.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'answerInputType' => function (self $o, ParseNode $n) { $o->setAnswerInputType($n->getEnumValue(AnswerInputType::class)); },
            'answerOptions' => function (self $o, ParseNode $n) { $o->setAnswerOptions($n->getCollectionOfPrimitiveValues()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('answerInputType', $this->answerInputType);
        $writer->writeCollectionOfPrimitiveValues('answerOptions', $this->answerOptions);
        $writer->writeStringValue('displayName', $this->displayName);
    }

    /**
     * Sets the answerInputType property value. The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     *  @param AnswerInputType|null $value Value to set for the answerInputType property.
    */
    public function setAnswerInputType(?AnswerInputType $value ): void {
        $this->answerInputType = $value;
    }

    /**
     * Sets the answerOptions property value. List of possible answer values.
     *  @param array<string>|null $value Value to set for the answerOptions property.
    */
    public function setAnswerOptions(?array $value ): void {
        $this->answerOptions = $value;
    }

    /**
     * Sets the displayName property value. Display name of this entity.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
