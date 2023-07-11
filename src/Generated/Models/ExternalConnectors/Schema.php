<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Schema extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Schema {
        return new Schema();
    }

    /**
     * Gets the baseType property value. Must be set to microsoft.graph.externalConnector.externalItem. Required.
     * @return string|null
    */
    public function getBaseType(): ?string {
        $val = $this->getBackingStore()->get('baseType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'baseType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'baseType' => fn(ParseNode $n) => $o->setBaseType($n->getStringValue()),
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getCollectionOfObjectValues([Property::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the properties property value. The properties defined for the items in the connection. The minimum number of properties is one, the maximum is 128.
     * @return array<Property>|null
    */
    public function getProperties(): ?array {
        $val = $this->getBackingStore()->get('properties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Property::class);
            /** @var array<Property>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'properties'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('baseType', $this->getBaseType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('properties', $this->getProperties());
    }

    /**
     * Sets the baseType property value. Must be set to microsoft.graph.externalConnector.externalItem. Required.
     * @param string|null $value Value to set for the baseType property.
    */
    public function setBaseType(?string $value): void {
        $this->getBackingStore()->set('baseType', $value);
    }

    /**
     * Sets the properties property value. The properties defined for the items in the connection. The minimum number of properties is one, the maximum is 128.
     * @param array<Property>|null $value Value to set for the properties property.
    */
    public function setProperties(?array $value): void {
        $this->getBackingStore()->set('properties', $value);
    }

}
