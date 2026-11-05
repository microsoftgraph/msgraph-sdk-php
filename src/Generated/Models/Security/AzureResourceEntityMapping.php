<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureResourceEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new AzureResourceEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.azureResourceEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureResourceEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureResourceEntityMapping {
        return new AzureResourceEntityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceIdColumn' => fn(ParseNode $n) => $o->setResourceIdColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the resourceIdColumn property value. Name of the detection query column that maps to the resource ID of the alert entity.
     * @return string|null
    */
    public function getResourceIdColumn(): ?string {
        $val = $this->getBackingStore()->get('resourceIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceIdColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('resourceIdColumn', $this->getResourceIdColumn());
    }

    /**
     * Sets the resourceIdColumn property value. Name of the detection query column that maps to the resource ID of the alert entity.
     * @param string|null $value Value to set for the resourceIdColumn property.
    */
    public function setResourceIdColumn(?string $value): void {
        $this->getBackingStore()->set('resourceIdColumn', $value);
    }

}
