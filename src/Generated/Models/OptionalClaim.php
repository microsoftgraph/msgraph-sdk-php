<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OptionalClaim implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $additionalProperties Additional properties of the claim. If a property exists in this collection, it modifies the behavior of the optional claim specified in the name property.
    */
    private ?array $additionalProperties = null;
    
    /**
     * @var bool|null $essential If the value is true, the claim specified by the client is necessary to ensure a smooth authorization experience for the specific task requested by the end user. The default value is false.
    */
    private ?bool $essential = null;
    
    /**
     * @var string|null $name The name of the optional claim.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $source The source (directory object) of the claim. There are predefined claims and user-defined claims from extension properties. If the source value is null, the claim is a predefined optional claim. If the source value is user, the value in the name property is the extension property from the user object.
    */
    private ?string $source = null;
    
    /**
     * Instantiates a new optionalClaim and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OptionalClaim
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OptionalClaim {
        return new OptionalClaim();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalProperties property value. Additional properties of the claim. If a property exists in this collection, it modifies the behavior of the optional claim specified in the name property.
     * @return array<string>|null
    */
    public function getAdditionalProperties(): ?array {
        return $this->additionalProperties;
    }

    /**
     * Gets the essential property value. If the value is true, the claim specified by the client is necessary to ensure a smooth authorization experience for the specific task requested by the end user. The default value is false.
     * @return bool|null
    */
    public function getEssential(): ?bool {
        return $this->essential;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalProperties' => function (ParseNode $n) use ($o) { $o->setAdditionalProperties($n->getCollectionOfPrimitiveValues()); },
            'essential' => function (ParseNode $n) use ($o) { $o->setEssential($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getStringValue()); },
        ];
    }

    /**
     * Gets the name property value. The name of the optional claim.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the source property value. The source (directory object) of the claim. There are predefined claims and user-defined claims from extension properties. If the source value is null, the claim is a predefined optional claim. If the source value is user, the value in the name property is the extension property from the user object.
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('additionalProperties', $this->additionalProperties);
        $writer->writeBooleanValue('essential', $this->essential);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('source', $this->source);
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
     * Sets the additionalProperties property value. Additional properties of the claim. If a property exists in this collection, it modifies the behavior of the optional claim specified in the name property.
     *  @param array<string>|null $value Value to set for the additionalProperties property.
    */
    public function setAdditionalProperties(?array $value ): void {
        $this->additionalProperties = $value;
    }

    /**
     * Sets the essential property value. If the value is true, the claim specified by the client is necessary to ensure a smooth authorization experience for the specific task requested by the end user. The default value is false.
     *  @param bool|null $value Value to set for the essential property.
    */
    public function setEssential(?bool $value ): void {
        $this->essential = $value;
    }

    /**
     * Sets the name property value. The name of the optional claim.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the source property value. The source (directory object) of the claim. There are predefined claims and user-defined claims from extension properties. If the source value is null, the claim is a predefined optional claim. If the source value is user, the value in the name property is the extension property from the user object.
     *  @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value ): void {
        $this->source = $value;
    }

}
