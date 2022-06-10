<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlertDetection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $detectionType The detectionType property
    */
    private ?string $detectionType = null;
    
    /**
     * @var string|null $method The method property
    */
    private ?string $method = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new alertDetection and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertDetection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertDetection {
        return new AlertDetection();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the detectionType property value. The detectionType property
     * @return string|null
    */
    public function getDetectionType(): ?string {
        return $this->detectionType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'detectionType' => function (ParseNode $n) use ($o) { $o->setDetectionType($n->getStringValue()); },
            'method' => function (ParseNode $n) use ($o) { $o->setMethod($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the method property value. The method property
     * @return string|null
    */
    public function getMethod(): ?string {
        return $this->method;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('detectionType', $this->detectionType);
        $writer->writeStringValue('method', $this->method);
        $writer->writeStringValue('name', $this->name);
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
     * Sets the detectionType property value. The detectionType property
     *  @param string|null $value Value to set for the detectionType property.
    */
    public function setDetectionType(?string $value ): void {
        $this->detectionType = $value;
    }

    /**
     * Sets the method property value. The method property
     *  @param string|null $value Value to set for the method property.
    */
    public function setMethod(?string $value ): void {
        $this->method = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
