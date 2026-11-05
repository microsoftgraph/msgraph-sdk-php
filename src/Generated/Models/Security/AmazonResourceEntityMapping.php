<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AmazonResourceEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new AmazonResourceEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.amazonResourceEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AmazonResourceEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AmazonResourceEntityMapping {
        return new AmazonResourceEntityMapping();
    }

    /**
     * Gets the amazonResourceIdColumn property value. Name of the detection query column that maps to the Amazon resource ID of the alert entity.
     * @return string|null
    */
    public function getAmazonResourceIdColumn(): ?string {
        $val = $this->getBackingStore()->get('amazonResourceIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'amazonResourceIdColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'amazonResourceIdColumn' => fn(ParseNode $n) => $o->setAmazonResourceIdColumn($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('amazonResourceIdColumn', $this->getAmazonResourceIdColumn());
    }

    /**
     * Sets the amazonResourceIdColumn property value. Name of the detection query column that maps to the Amazon resource ID of the alert entity.
     * @param string|null $value Value to set for the amazonResourceIdColumn property.
    */
    public function setAmazonResourceIdColumn(?string $value): void {
        $this->getBackingStore()->set('amazonResourceIdColumn', $value);
    }

}
