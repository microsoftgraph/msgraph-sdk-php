<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description A human-readable description of the printer's current processing state. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var array<string>|null $details The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
    */
    private ?array $details = null;
    
    /**
     * @var PrinterProcessingState|null $state The current processing state. Valid values are described in the following table. Read-only.
    */
    private ?PrinterProcessingState $state = null;
    
    /**
     * Instantiates a new printerStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterStatus {
        return new PrinterStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. A human-readable description of the printer's current processing state. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the details property value. The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
     * @return array<string>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'details' => function (ParseNode $n) use ($o) { $o->setDetails($n->getCollectionOfPrimitiveValues()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(PrinterProcessingState::class)); },
        ];
    }

    /**
     * Gets the state property value. The current processing state. Valid values are described in the following table. Read-only.
     * @return PrinterProcessingState|null
    */
    public function getState(): ?PrinterProcessingState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfPrimitiveValues('details', $this->details);
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
     * Sets the description property value. A human-readable description of the printer's current processing state. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the details property value. The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
     *  @param array<string>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the state property value. The current processing state. Valid values are described in the following table. Read-only.
     *  @param PrinterProcessingState|null $value Value to set for the state property.
    */
    public function setState(?PrinterProcessingState $value ): void {
        $this->state = $value;
    }

}
