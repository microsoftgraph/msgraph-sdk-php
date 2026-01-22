<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Building extends Place implements Parsable 
{
    /**
     * Instantiates a new Building and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.building');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Building
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Building {
        return new Building();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'map' => fn(ParseNode $n) => $o->setMap($n->getObjectValue([BuildingMap::class, 'createFromDiscriminatorValue'])),
            'resourceLinks' => fn(ParseNode $n) => $o->setResourceLinks($n->getCollectionOfObjectValues([ResourceLink::class, 'createFromDiscriminatorValue'])),
            'wifiState' => fn(ParseNode $n) => $o->setWifiState($n->getEnumValue(PlaceFeatureEnablement::class)),
        ]);
    }

    /**
     * Gets the map property value. Map file associated with a building in Places. This object is the IMDF-format representation of building.geojson.
     * @return BuildingMap|null
    */
    public function getMap(): ?BuildingMap {
        $val = $this->getBackingStore()->get('map');
        if (is_null($val) || $val instanceof BuildingMap) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'map'");
    }

    /**
     * Gets the resourceLinks property value. A set of links to external resources that are associated with the building. Inherited from place.
     * @return array<ResourceLink>|null
    */
    public function getResourceLinks(): ?array {
        $val = $this->getBackingStore()->get('resourceLinks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourceLink::class);
            /** @var array<ResourceLink>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceLinks'");
    }

    /**
     * Gets the wifiState property value. The wifiState property
     * @return PlaceFeatureEnablement|null
    */
    public function getWifiState(): ?PlaceFeatureEnablement {
        $val = $this->getBackingStore()->get('wifiState');
        if (is_null($val) || $val instanceof PlaceFeatureEnablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('map', $this->getMap());
        $writer->writeCollectionOfObjectValues('resourceLinks', $this->getResourceLinks());
        $writer->writeEnumValue('wifiState', $this->getWifiState());
    }

    /**
     * Sets the map property value. Map file associated with a building in Places. This object is the IMDF-format representation of building.geojson.
     * @param BuildingMap|null $value Value to set for the map property.
    */
    public function setMap(?BuildingMap $value): void {
        $this->getBackingStore()->set('map', $value);
    }

    /**
     * Sets the resourceLinks property value. A set of links to external resources that are associated with the building. Inherited from place.
     * @param array<ResourceLink>|null $value Value to set for the resourceLinks property.
    */
    public function setResourceLinks(?array $value): void {
        $this->getBackingStore()->set('resourceLinks', $value);
    }

    /**
     * Sets the wifiState property value. The wifiState property
     * @param PlaceFeatureEnablement|null $value Value to set for the wifiState property.
    */
    public function setWifiState(?PlaceFeatureEnablement $value): void {
        $this->getBackingStore()->set('wifiState', $value);
    }

}
