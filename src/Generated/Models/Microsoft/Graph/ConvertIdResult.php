<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConvertIdResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var GenericError|null $errorDetails An error object indicating the reason for the conversion failure. This value is not present if the conversion succeeded. */
    private ?GenericError $errorDetails = null;
    
    /** @var string|null $sourceId The identifier that was converted. This value is the original, un-converted identifier. */
    private ?string $sourceId = null;
    
    /** @var string|null $targetId The converted identifier. This value is not present if the conversion failed. */
    private ?string $targetId = null;
    
    /**
     * Instantiates a new convertIdResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConvertIdResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConvertIdResult {
        return new ConvertIdResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the errorDetails property value. An error object indicating the reason for the conversion failure. This value is not present if the conversion succeeded.
     * @return GenericError|null
    */
    public function getErrorDetails(): ?GenericError {
        return $this->errorDetails;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'errorDetails' => function (self $o, ParseNode $n) { $o->setErrorDetails($n->getObjectValue(GenericError::class)); },
            'sourceId' => function (self $o, ParseNode $n) { $o->setSourceId($n->getStringValue()); },
            'targetId' => function (self $o, ParseNode $n) { $o->setTargetId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the sourceId property value. The identifier that was converted. This value is the original, un-converted identifier.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the targetId property value. The converted identifier. This value is not present if the conversion failed.
     * @return string|null
    */
    public function getTargetId(): ?string {
        return $this->targetId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('errorDetails', $this->errorDetails);
        $writer->writeStringValue('sourceId', $this->sourceId);
        $writer->writeStringValue('targetId', $this->targetId);
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
     * Sets the errorDetails property value. An error object indicating the reason for the conversion failure. This value is not present if the conversion succeeded.
     *  @param GenericError|null $value Value to set for the errorDetails property.
    */
    public function setErrorDetails(?GenericError $value ): void {
        $this->errorDetails = $value;
    }

    /**
     * Sets the sourceId property value. The identifier that was converted. This value is the original, un-converted identifier.
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the targetId property value. The converted identifier. This value is not present if the conversion failed.
     *  @param string|null $value Value to set for the targetId property.
    */
    public function setTargetId(?string $value ): void {
        $this->targetId = $value;
    }

}
