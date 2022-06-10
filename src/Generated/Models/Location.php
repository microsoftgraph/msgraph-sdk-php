<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Location implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PhysicalAddress|null $address The street address of the location.
    */
    private ?PhysicalAddress $address = null;
    
    /**
     * @var OutlookGeoCoordinates|null $coordinates The geographic coordinates and elevation of the location.
    */
    private ?OutlookGeoCoordinates $coordinates = null;
    
    /**
     * @var string|null $displayName The name associated with the location.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $locationEmailAddress Optional email address of the location.
    */
    private ?string $locationEmailAddress = null;
    
    /**
     * @var LocationType|null $locationType The type of location. Possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only.
    */
    private ?LocationType $locationType = null;
    
    /**
     * @var string|null $locationUri Optional URI representing the location.
    */
    private ?string $locationUri = null;
    
    /**
     * @var string|null $uniqueId For internal use only.
    */
    private ?string $uniqueId = null;
    
    /**
     * @var LocationUniqueIdType|null $uniqueIdType For internal use only.
    */
    private ?LocationUniqueIdType $uniqueIdType = null;
    
    /**
     * Instantiates a new location and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Location
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Location {
        return new Location();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. The street address of the location.
     * @return PhysicalAddress|null
    */
    public function getAddress(): ?PhysicalAddress {
        return $this->address;
    }

    /**
     * Gets the coordinates property value. The geographic coordinates and elevation of the location.
     * @return OutlookGeoCoordinates|null
    */
    public function getCoordinates(): ?OutlookGeoCoordinates {
        return $this->coordinates;
    }

    /**
     * Gets the displayName property value. The name associated with the location.
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
        return  [
            'address' => function (ParseNode $n) use ($o) { $o->setAddress($n->getObjectValue(array(PhysicalAddress::class, 'createFromDiscriminatorValue'))); },
            'coordinates' => function (ParseNode $n) use ($o) { $o->setCoordinates($n->getObjectValue(array(OutlookGeoCoordinates::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'locationEmailAddress' => function (ParseNode $n) use ($o) { $o->setLocationEmailAddress($n->getStringValue()); },
            'locationType' => function (ParseNode $n) use ($o) { $o->setLocationType($n->getEnumValue(LocationType::class)); },
            'locationUri' => function (ParseNode $n) use ($o) { $o->setLocationUri($n->getStringValue()); },
            'uniqueId' => function (ParseNode $n) use ($o) { $o->setUniqueId($n->getStringValue()); },
            'uniqueIdType' => function (ParseNode $n) use ($o) { $o->setUniqueIdType($n->getEnumValue(LocationUniqueIdType::class)); },
        ];
    }

    /**
     * Gets the locationEmailAddress property value. Optional email address of the location.
     * @return string|null
    */
    public function getLocationEmailAddress(): ?string {
        return $this->locationEmailAddress;
    }

    /**
     * Gets the locationType property value. The type of location. Possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only.
     * @return LocationType|null
    */
    public function getLocationType(): ?LocationType {
        return $this->locationType;
    }

    /**
     * Gets the locationUri property value. Optional URI representing the location.
     * @return string|null
    */
    public function getLocationUri(): ?string {
        return $this->locationUri;
    }

    /**
     * Gets the uniqueId property value. For internal use only.
     * @return string|null
    */
    public function getUniqueId(): ?string {
        return $this->uniqueId;
    }

    /**
     * Gets the uniqueIdType property value. For internal use only.
     * @return LocationUniqueIdType|null
    */
    public function getUniqueIdType(): ?LocationUniqueIdType {
        return $this->uniqueIdType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->address);
        $writer->writeObjectValue('coordinates', $this->coordinates);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('locationEmailAddress', $this->locationEmailAddress);
        $writer->writeEnumValue('locationType', $this->locationType);
        $writer->writeStringValue('locationUri', $this->locationUri);
        $writer->writeStringValue('uniqueId', $this->uniqueId);
        $writer->writeEnumValue('uniqueIdType', $this->uniqueIdType);
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
     * Sets the address property value. The street address of the location.
     *  @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the coordinates property value. The geographic coordinates and elevation of the location.
     *  @param OutlookGeoCoordinates|null $value Value to set for the coordinates property.
    */
    public function setCoordinates(?OutlookGeoCoordinates $value ): void {
        $this->coordinates = $value;
    }

    /**
     * Sets the displayName property value. The name associated with the location.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the locationEmailAddress property value. Optional email address of the location.
     *  @param string|null $value Value to set for the locationEmailAddress property.
    */
    public function setLocationEmailAddress(?string $value ): void {
        $this->locationEmailAddress = $value;
    }

    /**
     * Sets the locationType property value. The type of location. Possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only.
     *  @param LocationType|null $value Value to set for the locationType property.
    */
    public function setLocationType(?LocationType $value ): void {
        $this->locationType = $value;
    }

    /**
     * Sets the locationUri property value. Optional URI representing the location.
     *  @param string|null $value Value to set for the locationUri property.
    */
    public function setLocationUri(?string $value ): void {
        $this->locationUri = $value;
    }

    /**
     * Sets the uniqueId property value. For internal use only.
     *  @param string|null $value Value to set for the uniqueId property.
    */
    public function setUniqueId(?string $value ): void {
        $this->uniqueId = $value;
    }

    /**
     * Sets the uniqueIdType property value. For internal use only.
     *  @param LocationUniqueIdType|null $value Value to set for the uniqueIdType property.
    */
    public function setUniqueIdType(?LocationUniqueIdType $value ): void {
        $this->uniqueIdType = $value;
    }

}
