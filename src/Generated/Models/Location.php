<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Location implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new location and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Location
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Location {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.locationConstraintItem': return new LocationConstraintItem();
            }
        }
        return new Location();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the address property value. The street address of the location.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the coordinates property value. The geographic coordinates and elevation of the location.
     * @return OutlookGeoCoordinates|null
    */
    public function getCoordinates(): ?OutlookGeoCoordinates {
        $val = $this->getBackingStore()->get('coordinates');
        if (is_null($val) || $val instanceof OutlookGeoCoordinates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coordinates'");
    }

    /**
     * Gets the displayName property value. The name associated with the location.
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
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'coordinates' => fn(ParseNode $n) => $o->setCoordinates($n->getObjectValue([OutlookGeoCoordinates::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'locationEmailAddress' => fn(ParseNode $n) => $o->setLocationEmailAddress($n->getStringValue()),
            'locationType' => fn(ParseNode $n) => $o->setLocationType($n->getEnumValue(Location_locationType::class)),
            'locationUri' => fn(ParseNode $n) => $o->setLocationUri($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'uniqueId' => fn(ParseNode $n) => $o->setUniqueId($n->getStringValue()),
            'uniqueIdType' => fn(ParseNode $n) => $o->setUniqueIdType($n->getEnumValue(Location_uniqueIdType::class)),
        ];
    }

    /**
     * Gets the locationEmailAddress property value. Optional email address of the location.
     * @return string|null
    */
    public function getLocationEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('locationEmailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locationEmailAddress'");
    }

    /**
     * Gets the locationType property value. The type of location. The possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only.
     * @return Location_locationType|null
    */
    public function getLocationType(): ?Location_locationType {
        $val = $this->getBackingStore()->get('locationType');
        if (is_null($val) || $val instanceof Location_locationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locationType'");
    }

    /**
     * Gets the locationUri property value. Optional URI representing the location.
     * @return string|null
    */
    public function getLocationUri(): ?string {
        $val = $this->getBackingStore()->get('locationUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locationUri'");
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
     * Gets the uniqueId property value. For internal use only.
     * @return string|null
    */
    public function getUniqueId(): ?string {
        $val = $this->getBackingStore()->get('uniqueId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueId'");
    }

    /**
     * Gets the uniqueIdType property value. For internal use only.
     * @return Location_uniqueIdType|null
    */
    public function getUniqueIdType(): ?Location_uniqueIdType {
        $val = $this->getBackingStore()->get('uniqueIdType');
        if (is_null($val) || $val instanceof Location_uniqueIdType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueIdType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeObjectValue('coordinates', $this->getCoordinates());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('locationEmailAddress', $this->getLocationEmailAddress());
        $writer->writeEnumValue('locationType', $this->getLocationType());
        $writer->writeStringValue('locationUri', $this->getLocationUri());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('uniqueId', $this->getUniqueId());
        $writer->writeEnumValue('uniqueIdType', $this->getUniqueIdType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the address property value. The street address of the location.
     * @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the coordinates property value. The geographic coordinates and elevation of the location.
     * @param OutlookGeoCoordinates|null $value Value to set for the coordinates property.
    */
    public function setCoordinates(?OutlookGeoCoordinates $value): void {
        $this->getBackingStore()->set('coordinates', $value);
    }

    /**
     * Sets the displayName property value. The name associated with the location.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the locationEmailAddress property value. Optional email address of the location.
     * @param string|null $value Value to set for the locationEmailAddress property.
    */
    public function setLocationEmailAddress(?string $value): void {
        $this->getBackingStore()->set('locationEmailAddress', $value);
    }

    /**
     * Sets the locationType property value. The type of location. The possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only.
     * @param Location_locationType|null $value Value to set for the locationType property.
    */
    public function setLocationType(?Location_locationType $value): void {
        $this->getBackingStore()->set('locationType', $value);
    }

    /**
     * Sets the locationUri property value. Optional URI representing the location.
     * @param string|null $value Value to set for the locationUri property.
    */
    public function setLocationUri(?string $value): void {
        $this->getBackingStore()->set('locationUri', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the uniqueId property value. For internal use only.
     * @param string|null $value Value to set for the uniqueId property.
    */
    public function setUniqueId(?string $value): void {
        $this->getBackingStore()->set('uniqueId', $value);
    }

    /**
     * Sets the uniqueIdType property value. For internal use only.
     * @param Location_uniqueIdType|null $value Value to set for the uniqueIdType property.
    */
    public function setUniqueIdType(?Location_uniqueIdType $value): void {
        $this->getBackingStore()->set('uniqueIdType', $value);
    }

}
