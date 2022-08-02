<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Place extends Entity implements Parsable 
{
    /**
     * @var PhysicalAddress|null $address The street address of the place.
    */
    private ?PhysicalAddress $address = null;
    
    /**
     * @var string|null $displayName The name associated with the place.
    */
    private ?string $displayName = null;
    
    /**
     * @var OutlookGeoCoordinates|null $geoCoordinates Specifies the place location in latitude, longitude and (optionally) altitude coordinates.
    */
    private ?OutlookGeoCoordinates $geoCoordinates = null;
    
    /**
     * @var string|null $phone The phone number of the place.
    */
    private ?string $phone = null;
    
    /**
     * Instantiates a new Place and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.place');
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
        return $this->address;
    }

    /**
     * Gets the displayName property value. The name associated with the place.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => function (ParseNode $n) use ($o) { $o->setAddress($n->getObjectValue(array(PhysicalAddress::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'geoCoordinates' => function (ParseNode $n) use ($o) { $o->setGeoCoordinates($n->getObjectValue(array(OutlookGeoCoordinates::class, 'createFromDiscriminatorValue'))); },
            'phone' => function (ParseNode $n) use ($o) { $o->setPhone($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the geoCoordinates property value. Specifies the place location in latitude, longitude and (optionally) altitude coordinates.
     * @return OutlookGeoCoordinates|null
    */
    public function getGeoCoordinates(): ?OutlookGeoCoordinates {
        return $this->geoCoordinates;
    }

    /**
     * Gets the phone property value. The phone number of the place.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->address);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('geoCoordinates', $this->geoCoordinates);
        $writer->writeStringValue('phone', $this->phone);
    }

    /**
     * Sets the address property value. The street address of the place.
     *  @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the displayName property value. The name associated with the place.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the geoCoordinates property value. Specifies the place location in latitude, longitude and (optionally) altitude coordinates.
     *  @param OutlookGeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?OutlookGeoCoordinates $value ): void {
        $this->geoCoordinates = $value;
    }

    /**
     * Sets the phone property value. The phone number of the place.
     *  @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value ): void {
        $this->phone = $value;
    }

}
