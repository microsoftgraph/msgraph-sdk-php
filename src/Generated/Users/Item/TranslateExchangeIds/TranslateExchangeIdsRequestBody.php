<?php

namespace Microsoft\Graph\Generated\Users\Item\TranslateExchangeIds;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\ExchangeIdFormat;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TranslateExchangeIdsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $InputIds  */
    private ?array $inputIds = null;
    
    /** @var ExchangeIdFormat|null $SourceIdType  */
    private ?ExchangeIdFormat $sourceIdType = null;
    
    /** @var ExchangeIdFormat|null $TargetIdType  */
    private ?ExchangeIdFormat $targetIdType = null;
    
    /**
     * Instantiates a new translateExchangeIdsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TranslateExchangeIdsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TranslateExchangeIdsRequestBody {
        return new TranslateExchangeIdsRequestBody();
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
            'inputIds' => function (self $o, ParseNode $n) { $o->setInputIds($n->getCollectionOfPrimitiveValues()); },
            'sourceIdType' => function (self $o, ParseNode $n) { $o->setSourceIdType($n->getEnumValue(ExchangeIdFormat::class)); },
            'targetIdType' => function (self $o, ParseNode $n) { $o->setTargetIdType($n->getEnumValue(ExchangeIdFormat::class)); },
        ];
    }

    /**
     * Gets the inputIds property value. 
     * @return array<string>|null
    */
    public function getInputIds(): ?array {
        return $this->inputIds;
    }

    /**
     * Gets the sourceIdType property value. 
     * @return ExchangeIdFormat|null
    */
    public function getSourceIdType(): ?ExchangeIdFormat {
        return $this->sourceIdType;
    }

    /**
     * Gets the targetIdType property value. 
     * @return ExchangeIdFormat|null
    */
    public function getTargetIdType(): ?ExchangeIdFormat {
        return $this->targetIdType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('inputIds', $this->inputIds);
        $writer->writeEnumValue('sourceIdType', $this->sourceIdType);
        $writer->writeEnumValue('targetIdType', $this->targetIdType);
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
     * Sets the inputIds property value. 
     *  @param array<string>|null $value Value to set for the InputIds property.
    */
    public function setInputIds(?array $value ): void {
        $this->inputIds = $value;
    }

    /**
     * Sets the sourceIdType property value. 
     *  @param ExchangeIdFormat|null $value Value to set for the SourceIdType property.
    */
    public function setSourceIdType(?ExchangeIdFormat $value ): void {
        $this->sourceIdType = $value;
    }

    /**
     * Sets the targetIdType property value. 
     *  @param ExchangeIdFormat|null $value Value to set for the TargetIdType property.
    */
    public function setTargetIdType(?ExchangeIdFormat $value ): void {
        $this->targetIdType = $value;
    }

}
