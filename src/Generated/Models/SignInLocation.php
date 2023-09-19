<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SignInLocation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new signInLocation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignInLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignInLocation {
        return new SignInLocation();
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the city property value. Provides the city where the sign-in originated and is determined using latitude/longitude information from the sign-in activity.
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
     * Gets the countryOrRegion property value. Provides the country code info (two letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity.
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
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'countryOrRegion' => fn(ParseNode $n) => $o->setCountryOrRegion($n->getStringValue()),
            'geoCoordinates' => fn(ParseNode $n) => $o->setGeoCoordinates($n->getObjectValue([GeoCoordinates::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ];
    }

    /**
     * Gets the geoCoordinates property value. Provides the latitude, longitude and altitude where the sign-in originated.
     * @return GeoCoordinates|null
    */
    public function getGeoCoordinates(): ?GeoCoordinates {
        $val = $this->getBackingStore()->get('geoCoordinates');
        if (is_null($val) || $val instanceof GeoCoordinates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'geoCoordinates'");
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
     * Gets the state property value. Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('countryOrRegion', $this->getCountryOrRegion());
        $writer->writeObjectValue('geoCoordinates', $this->getGeoCoordinates());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('state', $this->getState());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the city property value. Provides the city where the sign-in originated and is determined using latitude/longitude information from the sign-in activity.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->getBackingStore()->set('city', $value);
    }

    /**
     * Sets the countryOrRegion property value. Provides the country code info (two letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity.
     * @param string|null $value Value to set for the countryOrRegion property.
    */
    public function setCountryOrRegion(?string $value): void {
        $this->getBackingStore()->set('countryOrRegion', $value);
    }

    /**
     * Sets the geoCoordinates property value. Provides the latitude, longitude and altitude where the sign-in originated.
     * @param GeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?GeoCoordinates $value): void {
        $this->getBackingStore()->set('geoCoordinates', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the state property value. Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
