<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterLocation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $altitudeInMeters The altitude, in meters, that the printer is located at.
    */
    private ?int $altitudeInMeters = null;
    
    /**
     * @var string|null $building The building that the printer is located in.
    */
    private ?string $building = null;
    
    /**
     * @var string|null $city The city that the printer is located in.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $countryOrRegion The country or region that the printer is located in.
    */
    private ?string $countryOrRegion = null;
    
    /**
     * @var string|null $floor The floor that the printer is located on. Only numerical values are supported right now.
    */
    private ?string $floor = null;
    
    /**
     * @var string|null $floorDescription The description of the floor that the printer is located on.
    */
    private ?string $floorDescription = null;
    
    /**
     * @var float|null $latitude The latitude that the printer is located at.
    */
    private ?float $latitude = null;
    
    /**
     * @var float|null $longitude The longitude that the printer is located at.
    */
    private ?float $longitude = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $organization The organizational hierarchy that the printer belongs to. The elements should be in hierarchical order.
    */
    private ?array $organization = null;
    
    /**
     * @var string|null $postalCode The postal code that the printer is located in.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $roomDescription The description of the room that the printer is located in.
    */
    private ?string $roomDescription = null;
    
    /**
     * @var string|null $roomName The room that the printer is located in. Only numerical values are supported right now.
    */
    private ?string $roomName = null;
    
    /**
     * @var string|null $site The site that the printer is located in.
    */
    private ?string $site = null;
    
    /**
     * @var string|null $stateOrProvince The state or province that the printer is located in.
    */
    private ?string $stateOrProvince = null;
    
    /**
     * @var string|null $streetAddress The street address where the printer is located.
    */
    private ?string $streetAddress = null;
    
    /**
     * @var array<string>|null $subdivision The subdivision that the printer is located in. The elements should be in hierarchical order.
    */
    private ?array $subdivision = null;
    
    /**
     * @var array<string>|null $subunit The subunit property
    */
    private ?array $subunit = null;
    
    /**
     * Instantiates a new printerLocation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.printerLocation');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the altitudeInMeters property value. The altitude, in meters, that the printer is located at.
     * @return int|null
    */
    public function getAltitudeInMeters(): ?int {
        return $this->altitudeInMeters;
    }

    /**
     * Gets the building property value. The building that the printer is located in.
     * @return string|null
    */
    public function getBuilding(): ?string {
        return $this->building;
    }

    /**
     * Gets the city property value. The city that the printer is located in.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the countryOrRegion property value. The country or region that the printer is located in.
     * @return string|null
    */
    public function getCountryOrRegion(): ?string {
        return $this->countryOrRegion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'altitudeInMeters' => function (ParseNode $n) use ($o) { $o->setAltitudeInMeters($n->getIntegerValue()); },
            'building' => function (ParseNode $n) use ($o) { $o->setBuilding($n->getStringValue()); },
            'city' => function (ParseNode $n) use ($o) { $o->setCity($n->getStringValue()); },
            'countryOrRegion' => function (ParseNode $n) use ($o) { $o->setCountryOrRegion($n->getStringValue()); },
            'floor' => function (ParseNode $n) use ($o) { $o->setFloor($n->getStringValue()); },
            'floorDescription' => function (ParseNode $n) use ($o) { $o->setFloorDescription($n->getStringValue()); },
            'latitude' => function (ParseNode $n) use ($o) { $o->setLatitude($n->getFloatValue()); },
            'longitude' => function (ParseNode $n) use ($o) { $o->setLongitude($n->getFloatValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'organization' => function (ParseNode $n) use ($o) { $o->setOrganization($n->getCollectionOfPrimitiveValues()); },
            'postalCode' => function (ParseNode $n) use ($o) { $o->setPostalCode($n->getStringValue()); },
            'roomDescription' => function (ParseNode $n) use ($o) { $o->setRoomDescription($n->getStringValue()); },
            'roomName' => function (ParseNode $n) use ($o) { $o->setRoomName($n->getStringValue()); },
            'site' => function (ParseNode $n) use ($o) { $o->setSite($n->getStringValue()); },
            'stateOrProvince' => function (ParseNode $n) use ($o) { $o->setStateOrProvince($n->getStringValue()); },
            'streetAddress' => function (ParseNode $n) use ($o) { $o->setStreetAddress($n->getStringValue()); },
            'subdivision' => function (ParseNode $n) use ($o) { $o->setSubdivision($n->getCollectionOfPrimitiveValues()); },
            'subunit' => function (ParseNode $n) use ($o) { $o->setSubunit($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the floor property value. The floor that the printer is located on. Only numerical values are supported right now.
     * @return string|null
    */
    public function getFloor(): ?string {
        return $this->floor;
    }

    /**
     * Gets the floorDescription property value. The description of the floor that the printer is located on.
     * @return string|null
    */
    public function getFloorDescription(): ?string {
        return $this->floorDescription;
    }

    /**
     * Gets the latitude property value. The latitude that the printer is located at.
     * @return float|null
    */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Gets the longitude property value. The longitude that the printer is located at.
     * @return float|null
    */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the organization property value. The organizational hierarchy that the printer belongs to. The elements should be in hierarchical order.
     * @return array<string>|null
    */
    public function getOrganization(): ?array {
        return $this->organization;
    }

    /**
     * Gets the postalCode property value. The postal code that the printer is located in.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the roomDescription property value. The description of the room that the printer is located in.
     * @return string|null
    */
    public function getRoomDescription(): ?string {
        return $this->roomDescription;
    }

    /**
     * Gets the roomName property value. The room that the printer is located in. Only numerical values are supported right now.
     * @return string|null
    */
    public function getRoomName(): ?string {
        return $this->roomName;
    }

    /**
     * Gets the site property value. The site that the printer is located in.
     * @return string|null
    */
    public function getSite(): ?string {
        return $this->site;
    }

    /**
     * Gets the stateOrProvince property value. The state or province that the printer is located in.
     * @return string|null
    */
    public function getStateOrProvince(): ?string {
        return $this->stateOrProvince;
    }

    /**
     * Gets the streetAddress property value. The street address where the printer is located.
     * @return string|null
    */
    public function getStreetAddress(): ?string {
        return $this->streetAddress;
    }

    /**
     * Gets the subdivision property value. The subdivision that the printer is located in. The elements should be in hierarchical order.
     * @return array<string>|null
    */
    public function getSubdivision(): ?array {
        return $this->subdivision;
    }

    /**
     * Gets the subunit property value. The subunit property
     * @return array<string>|null
    */
    public function getSubunit(): ?array {
        return $this->subunit;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('altitudeInMeters', $this->altitudeInMeters);
        $writer->writeStringValue('building', $this->building);
        $writer->writeStringValue('city', $this->city);
        $writer->writeStringValue('countryOrRegion', $this->countryOrRegion);
        $writer->writeStringValue('floor', $this->floor);
        $writer->writeStringValue('floorDescription', $this->floorDescription);
        $writer->writeFloatValue('latitude', $this->latitude);
        $writer->writeFloatValue('longitude', $this->longitude);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfPrimitiveValues('organization', $this->organization);
        $writer->writeStringValue('postalCode', $this->postalCode);
        $writer->writeStringValue('roomDescription', $this->roomDescription);
        $writer->writeStringValue('roomName', $this->roomName);
        $writer->writeStringValue('site', $this->site);
        $writer->writeStringValue('stateOrProvince', $this->stateOrProvince);
        $writer->writeStringValue('streetAddress', $this->streetAddress);
        $writer->writeCollectionOfPrimitiveValues('subdivision', $this->subdivision);
        $writer->writeCollectionOfPrimitiveValues('subunit', $this->subunit);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the altitudeInMeters property value. The altitude, in meters, that the printer is located at.
     *  @param int|null $value Value to set for the altitudeInMeters property.
    */
    public function setAltitudeInMeters(?int $value ): void {
        $this->altitudeInMeters = $value;
    }

    /**
     * Sets the building property value. The building that the printer is located in.
     *  @param string|null $value Value to set for the building property.
    */
    public function setBuilding(?string $value ): void {
        $this->building = $value;
    }

    /**
     * Sets the city property value. The city that the printer is located in.
     *  @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value ): void {
        $this->city = $value;
    }

    /**
     * Sets the countryOrRegion property value. The country or region that the printer is located in.
     *  @param string|null $value Value to set for the countryOrRegion property.
    */
    public function setCountryOrRegion(?string $value ): void {
        $this->countryOrRegion = $value;
    }

    /**
     * Sets the floor property value. The floor that the printer is located on. Only numerical values are supported right now.
     *  @param string|null $value Value to set for the floor property.
    */
    public function setFloor(?string $value ): void {
        $this->floor = $value;
    }

    /**
     * Sets the floorDescription property value. The description of the floor that the printer is located on.
     *  @param string|null $value Value to set for the floorDescription property.
    */
    public function setFloorDescription(?string $value ): void {
        $this->floorDescription = $value;
    }

    /**
     * Sets the latitude property value. The latitude that the printer is located at.
     *  @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value ): void {
        $this->latitude = $value;
    }

    /**
     * Sets the longitude property value. The longitude that the printer is located at.
     *  @param float|null $value Value to set for the longitude property.
    */
    public function setLongitude(?float $value ): void {
        $this->longitude = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the organization property value. The organizational hierarchy that the printer belongs to. The elements should be in hierarchical order.
     *  @param array<string>|null $value Value to set for the organization property.
    */
    public function setOrganization(?array $value ): void {
        $this->organization = $value;
    }

    /**
     * Sets the postalCode property value. The postal code that the printer is located in.
     *  @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value ): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the roomDescription property value. The description of the room that the printer is located in.
     *  @param string|null $value Value to set for the roomDescription property.
    */
    public function setRoomDescription(?string $value ): void {
        $this->roomDescription = $value;
    }

    /**
     * Sets the roomName property value. The room that the printer is located in. Only numerical values are supported right now.
     *  @param string|null $value Value to set for the roomName property.
    */
    public function setRoomName(?string $value ): void {
        $this->roomName = $value;
    }

    /**
     * Sets the site property value. The site that the printer is located in.
     *  @param string|null $value Value to set for the site property.
    */
    public function setSite(?string $value ): void {
        $this->site = $value;
    }

    /**
     * Sets the stateOrProvince property value. The state or province that the printer is located in.
     *  @param string|null $value Value to set for the stateOrProvince property.
    */
    public function setStateOrProvince(?string $value ): void {
        $this->stateOrProvince = $value;
    }

    /**
     * Sets the streetAddress property value. The street address where the printer is located.
     *  @param string|null $value Value to set for the streetAddress property.
    */
    public function setStreetAddress(?string $value ): void {
        $this->streetAddress = $value;
    }

    /**
     * Sets the subdivision property value. The subdivision that the printer is located in. The elements should be in hierarchical order.
     *  @param array<string>|null $value Value to set for the subdivision property.
    */
    public function setSubdivision(?array $value ): void {
        $this->subdivision = $value;
    }

    /**
     * Sets the subunit property value. The subunit property
     *  @param array<string>|null $value Value to set for the subunit property.
    */
    public function setSubunit(?array $value ): void {
        $this->subunit = $value;
    }

}
