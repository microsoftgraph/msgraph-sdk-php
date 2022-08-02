<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallRoute implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var IdentitySet|null $escapedFinal The final property
    */
    private ?IdentitySet $escapedFinal = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var IdentitySet|null $original The original property
    */
    private ?IdentitySet $original = null;
    
    /**
     * @var RoutingType|null $routingType The routingType property
    */
    private ?RoutingType $routingType = null;
    
    /**
     * Instantiates a new callRoute and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.callRoute');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallRoute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallRoute {
        return new CallRoute();
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
        $o = $this;
        return  [
            'final' => function (ParseNode $n) use ($o) { $o->setFinal($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'original' => function (ParseNode $n) use ($o) { $o->setOriginal($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'routingType' => function (ParseNode $n) use ($o) { $o->setRoutingType($n->getEnumValue(RoutingType::class)); },
        ];
    }

    /**
     * Gets the final property value. The final property
     * @return IdentitySet|null
    */
    public function getFinal(): ?IdentitySet {
        return $this->escapedFinal;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the original property value. The original property
     * @return IdentitySet|null
    */
    public function getOriginal(): ?IdentitySet {
        return $this->original;
    }

    /**
     * Gets the routingType property value. The routingType property
     * @return RoutingType|null
    */
    public function getRoutingType(): ?RoutingType {
        return $this->routingType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('final', $this->escapedFinal);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('original', $this->original);
        $writer->writeEnumValue('routingType', $this->routingType);
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
     * Sets the final property value. The final property
     *  @param IdentitySet|null $value Value to set for the EscapedFinal property.
    */
    public function setFinal(?IdentitySet $value ): void {
        $this->escapedFinal = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the original property value. The original property
     *  @param IdentitySet|null $value Value to set for the original property.
    */
    public function setOriginal(?IdentitySet $value ): void {
        $this->original = $value;
    }

    /**
     * Sets the routingType property value. The routingType property
     *  @param RoutingType|null $value Value to set for the routingType property.
    */
    public function setRoutingType(?RoutingType $value ): void {
        $this->routingType = $value;
    }

}
