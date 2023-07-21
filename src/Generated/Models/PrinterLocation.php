<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrinterLocation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new printerLocation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterLocation {
        return new PrinterLocation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the altitudeInMeters property value. The altitude, in meters, that the printer is located at.
     * @return int|null
    */
    public function getAltitudeInMeters(): ?int {
        $val = $this->getBackingStore()->get('altitudeInMeters');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'altitudeInMeters'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the building property value. The building that the printer is located in.
     * @return string|null
    */
    public function getBuilding(): ?string {
        $val = $this->getBackingStore()->get('building');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'building'");
    }

    /**
     * Gets the city property value. The city that the printer is located in.
     * @return string|null
    */
    public function getCity(): ?string {
        $val = $this->getBackingStore()->get('city');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'city'");
    }

    /**
     * Gets the countryOrRegion property value. The country or region that the printer is located in.
     * @return string|null
    */
    public function getCountryOrRegion(): ?string {
        $val = $this->getBackingStore()->get('countryOrRegion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countryOrRegion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'altitudeInMeters' => fn(ParseNode $n) => $o->setAltitudeInMeters($n->getIntegerValue()),
            'building' => fn(ParseNode $n) => $o->setBuilding($n->getStringValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'countryOrRegion' => fn(ParseNode $n) => $o->setCountryOrRegion($n->getStringValue()),
            'floor' => fn(ParseNode $n) => $o->setFloor($n->getStringValue()),
            'floorDescription' => fn(ParseNode $n) => $o->setFloorDescription($n->getStringValue()),
            'latitude' => fn(ParseNode $n) => $o->setLatitude($n->getFloatValue()),
            'longitude' => fn(ParseNode $n) => $o->setLongitude($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organization' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOrganization($val);
            },
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'roomDescription' => fn(ParseNode $n) => $o->setRoomDescription($n->getStringValue()),
            'roomName' => fn(ParseNode $n) => $o->setRoomName($n->getStringValue()),
            'site' => fn(ParseNode $n) => $o->setSite($n->getStringValue()),
            'stateOrProvince' => fn(ParseNode $n) => $o->setStateOrProvince($n->getStringValue()),
            'streetAddress' => fn(ParseNode $n) => $o->setStreetAddress($n->getStringValue()),
            'subdivision' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSubdivision($val);
            },
            'subunit' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSubunit($val);
            },
        ];
    }

    /**
     * Gets the floor property value. The floor that the printer is located on. Only numerical values are supported right now.
     * @return string|null
    */
    public function getFloor(): ?string {
        $val = $this->getBackingStore()->get('floor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'floor'");
    }

    /**
     * Gets the floorDescription property value. The description of the floor that the printer is located on.
     * @return string|null
    */
    public function getFloorDescription(): ?string {
        $val = $this->getBackingStore()->get('floorDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'floorDescription'");
    }

    /**
     * Gets the latitude property value. The latitude that the printer is located at.
     * @return float|null
    */
    public function getLatitude(): ?float {
        $val = $this->getBackingStore()->get('latitude');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latitude'");
    }

    /**
     * Gets the longitude property value. The longitude that the printer is located at.
     * @return float|null
    */
    public function getLongitude(): ?float {
        $val = $this->getBackingStore()->get('longitude');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'longitude'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the organization property value. The organizational hierarchy that the printer belongs to. The elements should be in hierarchical order.
     * @return array<string>|null
    */
    public function getOrganization(): ?array {
        $val = $this->getBackingStore()->get('organization');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organization'");
    }

    /**
     * Gets the postalCode property value. The postal code that the printer is located in.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        $val = $this->getBackingStore()->get('postalCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postalCode'");
    }

    /**
     * Gets the roomDescription property value. The description of the room that the printer is located in.
     * @return string|null
    */
    public function getRoomDescription(): ?string {
        $val = $this->getBackingStore()->get('roomDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roomDescription'");
    }

    /**
     * Gets the roomName property value. The room that the printer is located in. Only numerical values are supported right now.
     * @return string|null
    */
    public function getRoomName(): ?string {
        $val = $this->getBackingStore()->get('roomName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roomName'");
    }

    /**
     * Gets the site property value. The site that the printer is located in.
     * @return string|null
    */
    public function getSite(): ?string {
        $val = $this->getBackingStore()->get('site');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'site'");
    }

    /**
     * Gets the stateOrProvince property value. The state or province that the printer is located in.
     * @return string|null
    */
    public function getStateOrProvince(): ?string {
        $val = $this->getBackingStore()->get('stateOrProvince');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stateOrProvince'");
    }

    /**
     * Gets the streetAddress property value. The street address where the printer is located.
     * @return string|null
    */
    public function getStreetAddress(): ?string {
        $val = $this->getBackingStore()->get('streetAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'streetAddress'");
    }

    /**
     * Gets the subdivision property value. The subdivision that the printer is located in. The elements should be in hierarchical order.
     * @return array<string>|null
    */
    public function getSubdivision(): ?array {
        $val = $this->getBackingStore()->get('subdivision');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subdivision'");
    }

    /**
     * Gets the subunit property value. The subunit property
     * @return array<string>|null
    */
    public function getSubunit(): ?array {
        $val = $this->getBackingStore()->get('subunit');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subunit'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('altitudeInMeters', $this->getAltitudeInMeters());
        $writer->writeStringValue('building', $this->getBuilding());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('countryOrRegion', $this->getCountryOrRegion());
        $writer->writeStringValue('floor', $this->getFloor());
        $writer->writeStringValue('floorDescription', $this->getFloorDescription());
        $writer->writeFloatValue('latitude', $this->getLatitude());
        $writer->writeFloatValue('longitude', $this->getLongitude());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('organization', $this->getOrganization());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('roomDescription', $this->getRoomDescription());
        $writer->writeStringValue('roomName', $this->getRoomName());
        $writer->writeStringValue('site', $this->getSite());
        $writer->writeStringValue('stateOrProvince', $this->getStateOrProvince());
        $writer->writeStringValue('streetAddress', $this->getStreetAddress());
        $writer->writeCollectionOfPrimitiveValues('subdivision', $this->getSubdivision());
        $writer->writeCollectionOfPrimitiveValues('subunit', $this->getSubunit());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the altitudeInMeters property value. The altitude, in meters, that the printer is located at.
     * @param int|null $value Value to set for the altitudeInMeters property.
    */
    public function setAltitudeInMeters(?int $value): void {
        $this->getBackingStore()->set('altitudeInMeters', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the building property value. The building that the printer is located in.
     * @param string|null $value Value to set for the building property.
    */
    public function setBuilding(?string $value): void {
        $this->getBackingStore()->set('building', $value);
    }

    /**
     * Sets the city property value. The city that the printer is located in.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->getBackingStore()->set('city', $value);
    }

    /**
     * Sets the countryOrRegion property value. The country or region that the printer is located in.
     * @param string|null $value Value to set for the countryOrRegion property.
    */
    public function setCountryOrRegion(?string $value): void {
        $this->getBackingStore()->set('countryOrRegion', $value);
    }

    /**
     * Sets the floor property value. The floor that the printer is located on. Only numerical values are supported right now.
     * @param string|null $value Value to set for the floor property.
    */
    public function setFloor(?string $value): void {
        $this->getBackingStore()->set('floor', $value);
    }

    /**
     * Sets the floorDescription property value. The description of the floor that the printer is located on.
     * @param string|null $value Value to set for the floorDescription property.
    */
    public function setFloorDescription(?string $value): void {
        $this->getBackingStore()->set('floorDescription', $value);
    }

    /**
     * Sets the latitude property value. The latitude that the printer is located at.
     * @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value): void {
        $this->getBackingStore()->set('latitude', $value);
    }

    /**
     * Sets the longitude property value. The longitude that the printer is located at.
     * @param float|null $value Value to set for the longitude property.
    */
    public function setLongitude(?float $value): void {
        $this->getBackingStore()->set('longitude', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the organization property value. The organizational hierarchy that the printer belongs to. The elements should be in hierarchical order.
     * @param array<string>|null $value Value to set for the organization property.
    */
    public function setOrganization(?array $value): void {
        $this->getBackingStore()->set('organization', $value);
    }

    /**
     * Sets the postalCode property value. The postal code that the printer is located in.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->getBackingStore()->set('postalCode', $value);
    }

    /**
     * Sets the roomDescription property value. The description of the room that the printer is located in.
     * @param string|null $value Value to set for the roomDescription property.
    */
    public function setRoomDescription(?string $value): void {
        $this->getBackingStore()->set('roomDescription', $value);
    }

    /**
     * Sets the roomName property value. The room that the printer is located in. Only numerical values are supported right now.
     * @param string|null $value Value to set for the roomName property.
    */
    public function setRoomName(?string $value): void {
        $this->getBackingStore()->set('roomName', $value);
    }

    /**
     * Sets the site property value. The site that the printer is located in.
     * @param string|null $value Value to set for the site property.
    */
    public function setSite(?string $value): void {
        $this->getBackingStore()->set('site', $value);
    }

    /**
     * Sets the stateOrProvince property value. The state or province that the printer is located in.
     * @param string|null $value Value to set for the stateOrProvince property.
    */
    public function setStateOrProvince(?string $value): void {
        $this->getBackingStore()->set('stateOrProvince', $value);
    }

    /**
     * Sets the streetAddress property value. The street address where the printer is located.
     * @param string|null $value Value to set for the streetAddress property.
    */
    public function setStreetAddress(?string $value): void {
        $this->getBackingStore()->set('streetAddress', $value);
    }

    /**
     * Sets the subdivision property value. The subdivision that the printer is located in. The elements should be in hierarchical order.
     * @param array<string>|null $value Value to set for the subdivision property.
    */
    public function setSubdivision(?array $value): void {
        $this->getBackingStore()->set('subdivision', $value);
    }

    /**
     * Sets the subunit property value. The subunit property
     * @param array<string>|null $value Value to set for the subunit property.
    */
    public function setSubunit(?array $value): void {
        $this->getBackingStore()->set('subunit', $value);
    }

}
