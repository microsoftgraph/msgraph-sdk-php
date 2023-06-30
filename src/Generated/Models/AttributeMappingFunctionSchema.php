<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AttributeMappingFunctionSchema extends Entity implements Parsable 
{
    /**
     * Instantiates a new attributeMappingFunctionSchema and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeMappingFunctionSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeMappingFunctionSchema {
        return new AttributeMappingFunctionSchema();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getCollectionOfObjectValues([AttributeMappingParameterSchema::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the parameters property value. The parameters property
     * @return array<AttributeMappingParameterSchema>|null
    */
    public function getParameters(): ?array {
        $val = $this->getBackingStore()->get('parameters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttributeMappingParameterSchema::class);
            /** @var array<AttributeMappingParameterSchema>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parameters'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('parameters', $this->getParameters());
    }

    /**
     * Sets the parameters property value. The parameters property
     * @param array<AttributeMappingParameterSchema>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->getBackingStore()->set('parameters', $value);
    }

}
