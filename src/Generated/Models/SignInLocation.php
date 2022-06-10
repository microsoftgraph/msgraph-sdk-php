<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignInLocation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $city Provides the city where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $countryOrRegion Provides the country code info (2 letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity.
    */
    private ?string $countryOrRegion = null;
    
    /**
     * @var GeoCoordinates|null $geoCoordinates Provides the latitude, longitude and altitude where the sign-in originated.
    */
    private ?GeoCoordinates $geoCoordinates = null;
    
    /**
     * @var string|null $state Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
    */
    private ?string $state = null;
    
    /**
     * Instantiates a new signInLocation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the city property value. Provides the city where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the countryOrRegion property value. Provides the country code info (2 letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity.
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
            'city' => function (ParseNode $n) use ($o) { $o->setCity($n->getStringValue()); },
            'countryOrRegion' => function (ParseNode $n) use ($o) { $o->setCountryOrRegion($n->getStringValue()); },
            'geoCoordinates' => function (ParseNode $n) use ($o) { $o->setGeoCoordinates($n->getObjectValue(array(GeoCoordinates::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getStringValue()); },
        ];
    }

    /**
     * Gets the geoCoordinates property value. Provides the latitude, longitude and altitude where the sign-in originated.
     * @return GeoCoordinates|null
    */
    public function getGeoCoordinates(): ?GeoCoordinates {
        return $this->geoCoordinates;
    }

    /**
     * Gets the state property value. Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('city', $this->city);
        $writer->writeStringValue('countryOrRegion', $this->countryOrRegion);
        $writer->writeObjectValue('geoCoordinates', $this->geoCoordinates);
        $writer->writeStringValue('state', $this->state);
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
     * Sets the city property value. Provides the city where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
     *  @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value ): void {
        $this->city = $value;
    }

    /**
     * Sets the countryOrRegion property value. Provides the country code info (2 letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity.
     *  @param string|null $value Value to set for the countryOrRegion property.
    */
    public function setCountryOrRegion(?string $value ): void {
        $this->countryOrRegion = $value;
    }

    /**
     * Sets the geoCoordinates property value. Provides the latitude, longitude and altitude where the sign-in originated.
     *  @param GeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?GeoCoordinates $value ): void {
        $this->geoCoordinates = $value;
    }

    /**
     * Sets the state property value. Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

}
