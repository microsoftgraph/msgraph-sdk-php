<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BuildingMap extends BaseMapFeature implements Parsable 
{
    /**
     * Instantiates a new BuildingMap and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.buildingMap');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BuildingMap
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BuildingMap {
        return new BuildingMap();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'footprints' => fn(ParseNode $n) => $o->setFootprints($n->getCollectionOfObjectValues([FootprintMap::class, 'createFromDiscriminatorValue'])),
            'levels' => fn(ParseNode $n) => $o->setLevels($n->getCollectionOfObjectValues([LevelMap::class, 'createFromDiscriminatorValue'])),
            'placeId' => fn(ParseNode $n) => $o->setPlaceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the footprints property value. Represents the approximate physical extent of a referenced building. It corresponds to footprint.geojson in IMDF format.
     * @return array<FootprintMap>|null
    */
    public function getFootprints(): ?array {
        $val = $this->getBackingStore()->get('footprints');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FootprintMap::class);
            /** @var array<FootprintMap>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'footprints'");
    }

    /**
     * Gets the levels property value. Represents a physical floor structure within a building. It corresponds to level.geojson in IMDF format.
     * @return array<LevelMap>|null
    */
    public function getLevels(): ?array {
        $val = $this->getBackingStore()->get('levels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LevelMap::class);
            /** @var array<LevelMap>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'levels'");
    }

    /**
     * Gets the placeId property value. Identifier for the building to which this buildingMap belongs.
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
        $writer->writeCollectionOfObjectValues('footprints', $this->getFootprints());
        $writer->writeCollectionOfObjectValues('levels', $this->getLevels());
        $writer->writeStringValue('placeId', $this->getPlaceId());
    }

    /**
     * Sets the footprints property value. Represents the approximate physical extent of a referenced building. It corresponds to footprint.geojson in IMDF format.
     * @param array<FootprintMap>|null $value Value to set for the footprints property.
    */
    public function setFootprints(?array $value): void {
        $this->getBackingStore()->set('footprints', $value);
    }

    /**
     * Sets the levels property value. Represents a physical floor structure within a building. It corresponds to level.geojson in IMDF format.
     * @param array<LevelMap>|null $value Value to set for the levels property.
    */
    public function setLevels(?array $value): void {
        $this->getBackingStore()->set('levels', $value);
    }

    /**
     * Sets the placeId property value. Identifier for the building to which this buildingMap belongs.
     * @param string|null $value Value to set for the placeId property.
    */
    public function setPlaceId(?string $value): void {
        $this->getBackingStore()->set('placeId', $value);
    }

}
