<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FixtureMap extends BaseMapFeature implements Parsable 
{
    /**
     * Instantiates a new FixtureMap and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.fixtureMap');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FixtureMap
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FixtureMap {
        return new FixtureMap();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'placeId' => fn(ParseNode $n) => $o->setPlaceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the placeId property value. The placeId property
     * @return string|null
    */
    public function getPlaceId(): ?string {
        $val = $this->getBackingStore()->get('placeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'placeId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('placeId', $this->getPlaceId());
    }

    /**
     * Sets the placeId property value. The placeId property
     * @param string|null $value Value to set for the placeId property.
    */
    public function setPlaceId(?string $value): void {
        $this->getBackingStore()->set('placeId', $value);
    }

}
