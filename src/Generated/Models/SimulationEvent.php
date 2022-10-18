<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationEvent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $count Count of the simulation event occurrence in an attack simulation and training campaign.
    */
    private ?int $count = null;
    
    /**
     * @var string|null $eventName Name of the simulation event in an attack simulation and training campaign.
    */
    private ?string $eventName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new simulationEvent and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.simulationEvent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SimulationEvent {
        return new SimulationEvent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the count property value. Count of the simulation event occurrence in an attack simulation and training campaign.
     * @return int|null
    */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * Gets the eventName property value. Name of the simulation event in an attack simulation and training campaign.
     * @return string|null
    */
    public function getEventName(): ?string {
        return $this->eventName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'count' => fn(ParseNode $n) => $o->setCount($n->getIntegerValue()),
            'eventName' => fn(ParseNode $n) => $o->setEventName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('count', $this->count);
        $writer->writeStringValue('eventName', $this->eventName);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the count property value. Count of the simulation event occurrence in an attack simulation and training campaign.
     *  @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value ): void {
        $this->count = $value;
    }

    /**
     * Sets the eventName property value. Name of the simulation event in an attack simulation and training campaign.
     *  @param string|null $value Value to set for the eventName property.
    */
    public function setEventName(?string $value ): void {
        $this->eventName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
