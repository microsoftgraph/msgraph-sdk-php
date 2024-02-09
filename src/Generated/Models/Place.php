<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Place extends Entity implements Parsable 
{
    /**
     * Instantiates a new Place and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Place
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Place {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.room': return new Room();
                case '#microsoft.graph.roomList': return new RoomList();
            }
        }
        return new Place();
    }

    /**
     * Gets the address property value. The street address of the place.
     * @return PhysicalAddress|null
    */
    public function getAddress(): ?PhysicalAddress {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || $val instanceof PhysicalAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the displayName property value. The name associated with the place.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'geoCoordinates' => fn(ParseNode $n) => $o->setGeoCoordinates($n->getObjectValue([OutlookGeoCoordinates::class, 'createFromDiscriminatorValue'])),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
        ]);
    }

    /**
     * Gets the geoCoordinates property value. Specifies the place location in latitude, longitude and (optionally) altitude coordinates.
     * @return OutlookGeoCoordinates|null
    */
    public function getGeoCoordinates(): ?OutlookGeoCoordinates {
        $val = $this->getBackingStore()->get('geoCoordinates');
        if (is_null($val) || $val instanceof OutlookGeoCoordinates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'geoCoordinates'");
    }

    /**
     * Gets the phone property value. The phone number of the place.
     * @return string|null
    */
    public function getPhone(): ?string {
        $val = $this->getBackingStore()->get('phone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phone'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('geoCoordinates', $this->getGeoCoordinates());
        $writer->writeStringValue('phone', $this->getPhone());
    }

    /**
     * Sets the address property value. The street address of the place.
     * @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the displayName property value. The name associated with the place.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the geoCoordinates property value. Specifies the place location in latitude, longitude and (optionally) altitude coordinates.
     * @param OutlookGeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?OutlookGeoCoordinates $value): void {
        $this->getBackingStore()->set('geoCoordinates', $value);
    }

    /**
     * Sets the phone property value. The phone number of the place.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->getBackingStore()->set('phone', $value);
    }

}
