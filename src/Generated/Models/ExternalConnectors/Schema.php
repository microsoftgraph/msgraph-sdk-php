<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Schema extends Entity 
{
    /** @var string|null $baseType Must be set to microsoft.graph.externalConnector.externalItem. Required. */
    private ?string $baseType = null;
    
    /** @var array<Property>|null $properties The properties defined for the items in the connection. The minimum number of properties is one, the maximum is 128. */
    private ?array $properties = null;
    
    /**
     * Instantiates a new schema and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Schema
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Schema {
        return new Schema();
    }

    /**
     * Gets the baseType property value. Must be set to microsoft.graph.externalConnector.externalItem. Required.
     * @return string|null
    */
    public function getBaseType(): ?string {
        return $this->baseType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'baseType' => function (self $o, ParseNode $n) { $o->setBaseType($n->getStringValue()); },
            'properties' => function (self $o, ParseNode $n) { $o->setProperties($n->getCollectionOfObjectValues(Property::class)); },
        ]);
    }

    /**
     * Gets the properties property value. The properties defined for the items in the connection. The minimum number of properties is one, the maximum is 128.
     * @return array<Property>|null
    */
    public function getProperties(): ?array {
        return $this->properties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('baseType', $this->baseType);
        $writer->writeCollectionOfObjectValues('properties', $this->properties);
    }

    /**
     * Sets the baseType property value. Must be set to microsoft.graph.externalConnector.externalItem. Required.
     *  @param string|null $value Value to set for the baseType property.
    */
    public function setBaseType(?string $value ): void {
        $this->baseType = $value;
    }

    /**
     * Sets the properties property value. The properties defined for the items in the connection. The minimum number of properties is one, the maximum is 128.
     *  @param array<Property>|null $value Value to set for the properties property.
    */
    public function setProperties(?array $value ): void {
        $this->properties = $value;
    }

}
