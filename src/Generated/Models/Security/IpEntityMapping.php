<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new IpEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ipEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpEntityMapping {
        return new IpEntityMapping();
    }

    /**
     * Gets the addressColumn property value. Name of the detection query column that maps to the IP address of the alert entity.
     * @return string|null
    */
    public function getAddressColumn(): ?string {
        $val = $this->getBackingStore()->get('addressColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addressColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addressColumn' => fn(ParseNode $n) => $o->setAddressColumn($n->getStringValue()),
            'scopeColumn' => fn(ParseNode $n) => $o->setScopeColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the scopeColumn property value. Name of the detection query column that maps to the scope of the alert entity.
     * @return string|null
    */
    public function getScopeColumn(): ?string {
        $val = $this->getBackingStore()->get('scopeColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('addressColumn', $this->getAddressColumn());
        $writer->writeStringValue('scopeColumn', $this->getScopeColumn());
    }

    /**
     * Sets the addressColumn property value. Name of the detection query column that maps to the IP address of the alert entity.
     * @param string|null $value Value to set for the addressColumn property.
    */
    public function setAddressColumn(?string $value): void {
        $this->getBackingStore()->set('addressColumn', $value);
    }

    /**
     * Sets the scopeColumn property value. Name of the detection query column that maps to the scope of the alert entity.
     * @param string|null $value Value to set for the scopeColumn property.
    */
    public function setScopeColumn(?string $value): void {
        $this->getBackingStore()->set('scopeColumn', $value);
    }

}
