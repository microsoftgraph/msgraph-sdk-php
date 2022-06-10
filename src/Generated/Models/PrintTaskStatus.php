<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintTaskStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description A human-readable description of the current processing state of the printTask.
    */
    private ?string $description = null;
    
    /**
     * @var PrintTaskProcessingState|null $state The current processing state of the printTask. Valid values are described in the following table.
    */
    private ?PrintTaskProcessingState $state = null;
    
    /**
     * Instantiates a new printTaskStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintTaskStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintTaskStatus {
        return new PrintTaskStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. A human-readable description of the current processing state of the printTask.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(PrintTaskProcessingState::class)); },
        ];
    }

    /**
     * Gets the state property value. The current processing state of the printTask. Valid values are described in the following table.
     * @return PrintTaskProcessingState|null
    */
    public function getState(): ?PrintTaskProcessingState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('state', $this->state);
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
     * Sets the description property value. A human-readable description of the current processing state of the printTask.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the state property value. The current processing state of the printTask. Valid values are described in the following table.
     *  @param PrintTaskProcessingState|null $value Value to set for the state property.
    */
    public function setState(?PrintTaskProcessingState $value ): void {
        $this->state = $value;
    }

}
