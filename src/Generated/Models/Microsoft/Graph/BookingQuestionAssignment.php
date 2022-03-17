<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingQuestionAssignment implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $isRequired The ID of the custom question. */
    private ?bool $isRequired = null;
    
    /** @var string|null $questionId Indicates whether it is mandatory to answer the custom question. */
    private ?string $questionId = null;
    
    /**
     * Instantiates a new bookingQuestionAssignment and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingQuestionAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BookingQuestionAssignment {
        return new BookingQuestionAssignment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'isRequired' => function (self $o, ParseNode $n) { $o->setIsRequired($n->getBooleanValue()); },
            'questionId' => function (self $o, ParseNode $n) { $o->setQuestionId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isRequired property value. The ID of the custom question.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->isRequired;
    }

    /**
     * Gets the questionId property value. Indicates whether it is mandatory to answer the custom question.
     * @return string|null
    */
    public function getQuestionId(): ?string {
        return $this->questionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isRequired', $this->isRequired);
        $writer->writeStringValue('questionId', $this->questionId);
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
     * Sets the isRequired property value. The ID of the custom question.
     *  @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value ): void {
        $this->isRequired = $value;
    }

    /**
     * Sets the questionId property value. Indicates whether it is mandatory to answer the custom question.
     *  @param string|null $value Value to set for the questionId property.
    */
    public function setQuestionId(?string $value ): void {
        $this->questionId = $value;
    }

}
