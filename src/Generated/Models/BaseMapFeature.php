<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BaseMapFeature extends Entity implements Parsable 
{
    /**
     * Instantiates a new BaseMapFeature and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseMapFeature
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseMapFeature {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.buildingMap': return new BuildingMap();
                case '#microsoft.graph.fixtureMap': return new FixtureMap();
                case '#microsoft.graph.footprintMap': return new FootprintMap();
                case '#microsoft.graph.levelMap': return new LevelMap();
                case '#microsoft.graph.sectionMap': return new SectionMap();
                case '#microsoft.graph.unitMap': return new UnitMap();
            }
        }
        return new BaseMapFeature();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getStringValue()),
        ]);
    }

    /**
     * Gets the properties property value. Concatenated key-value pair of all properties of a GeoJSON file for this baseMapFeature.
     * @return string|null
    */
    public function getProperties(): ?string {
        $val = $this->getBackingStore()->get('properties');
        if (is_null($val) || is_string($val)) {
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
        $writer->writeStringValue('properties', $this->getProperties());
    }

    /**
     * Sets the properties property value. Concatenated key-value pair of all properties of a GeoJSON file for this baseMapFeature.
     * @param string|null $value Value to set for the properties property.
    */
    public function setProperties(?string $value): void {
        $this->getBackingStore()->set('properties', $value);
    }

}
