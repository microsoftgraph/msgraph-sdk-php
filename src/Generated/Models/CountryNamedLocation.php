<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CountryNamedLocation extends NamedLocation implements Parsable 
{
    /**
     * @var array<string>|null $countriesAndRegions List of countries and/or regions in two-letter format specified by ISO 3166-2.
    */
    private ?array $countriesAndRegions = null;
    
    /**
     * @var CountryLookupMethodType|null $countryLookupMethod Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress (default) and authenticatorAppGps.
    */
    private ?CountryLookupMethodType $countryLookupMethod = null;
    
    /**
     * @var bool|null $includeUnknownCountriesAndRegions true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false.
    */
    private ?bool $includeUnknownCountriesAndRegions = null;
    
    /**
     * Instantiates a new CountryNamedLocation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CountryNamedLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CountryNamedLocation {
        return new CountryNamedLocation();
    }

    /**
     * Gets the countriesAndRegions property value. List of countries and/or regions in two-letter format specified by ISO 3166-2.
     * @return array<string>|null
    */
    public function getCountriesAndRegions(): ?array {
        return $this->countriesAndRegions;
    }

    /**
     * Gets the countryLookupMethod property value. Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress (default) and authenticatorAppGps.
     * @return CountryLookupMethodType|null
    */
    public function getCountryLookupMethod(): ?CountryLookupMethodType {
        return $this->countryLookupMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'countriesAndRegions' => function (ParseNode $n) use ($o) { $o->setCountriesAndRegions($n->getCollectionOfPrimitiveValues()); },
            'countryLookupMethod' => function (ParseNode $n) use ($o) { $o->setCountryLookupMethod($n->getEnumValue(CountryLookupMethodType::class)); },
            'includeUnknownCountriesAndRegions' => function (ParseNode $n) use ($o) { $o->setIncludeUnknownCountriesAndRegions($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the includeUnknownCountriesAndRegions property value. true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false.
     * @return bool|null
    */
    public function getIncludeUnknownCountriesAndRegions(): ?bool {
        return $this->includeUnknownCountriesAndRegions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('countriesAndRegions', $this->countriesAndRegions);
        $writer->writeEnumValue('countryLookupMethod', $this->countryLookupMethod);
        $writer->writeBooleanValue('includeUnknownCountriesAndRegions', $this->includeUnknownCountriesAndRegions);
    }

    /**
     * Sets the countriesAndRegions property value. List of countries and/or regions in two-letter format specified by ISO 3166-2.
     *  @param array<string>|null $value Value to set for the countriesAndRegions property.
    */
    public function setCountriesAndRegions(?array $value ): void {
        $this->countriesAndRegions = $value;
    }

    /**
     * Sets the countryLookupMethod property value. Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress (default) and authenticatorAppGps.
     *  @param CountryLookupMethodType|null $value Value to set for the countryLookupMethod property.
    */
    public function setCountryLookupMethod(?CountryLookupMethodType $value ): void {
        $this->countryLookupMethod = $value;
    }

    /**
     * Sets the includeUnknownCountriesAndRegions property value. true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false.
     *  @param bool|null $value Value to set for the includeUnknownCountriesAndRegions property.
    */
    public function setIncludeUnknownCountriesAndRegions(?bool $value ): void {
        $this->includeUnknownCountriesAndRegions = $value;
    }

}
