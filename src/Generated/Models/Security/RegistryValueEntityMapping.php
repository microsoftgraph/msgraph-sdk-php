<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegistryValueEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new RegistryValueEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.registryValueEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegistryValueEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegistryValueEntityMapping {
        return new RegistryValueEntityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'keyColumn' => fn(ParseNode $n) => $o->setKeyColumn($n->getStringValue()),
            'valueNameColumn' => fn(ParseNode $n) => $o->setValueNameColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the keyColumn property value. Name of the detection query column that maps to the registry key of the alert entity.
     * @return string|null
    */
    public function getKeyColumn(): ?string {
        $val = $this->getBackingStore()->get('keyColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyColumn'");
    }

    /**
     * Gets the valueNameColumn property value. Name of the detection query column that maps to the value name of the alert entity.
     * @return string|null
    */
    public function getValueNameColumn(): ?string {
        $val = $this->getBackingStore()->get('valueNameColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueNameColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('keyColumn', $this->getKeyColumn());
        $writer->writeStringValue('valueNameColumn', $this->getValueNameColumn());
    }

    /**
     * Sets the keyColumn property value. Name of the detection query column that maps to the registry key of the alert entity.
     * @param string|null $value Value to set for the keyColumn property.
    */
    public function setKeyColumn(?string $value): void {
        $this->getBackingStore()->set('keyColumn', $value);
    }

    /**
     * Sets the valueNameColumn property value. Name of the detection query column that maps to the value name of the alert entity.
     * @param string|null $value Value to set for the valueNameColumn property.
    */
    public function setValueNameColumn(?string $value): void {
        $this->getBackingStore()->set('valueNameColumn', $value);
    }

}
