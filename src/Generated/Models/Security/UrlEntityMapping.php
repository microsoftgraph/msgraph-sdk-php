<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UrlEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new UrlEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.urlEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UrlEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UrlEntityMapping {
        return new UrlEntityMapping();
    }

    /**
     * Gets the addressColumn property value. Name of the detection query column that maps to the URL address of the alert entity.
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
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('addressColumn', $this->getAddressColumn());
    }

    /**
     * Sets the addressColumn property value. Name of the detection query column that maps to the URL address of the alert entity.
     * @param string|null $value Value to set for the addressColumn property.
    */
    public function setAddressColumn(?string $value): void {
        $this->getBackingStore()->set('addressColumn', $value);
    }

}
