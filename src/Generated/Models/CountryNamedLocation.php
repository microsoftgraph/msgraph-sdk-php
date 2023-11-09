<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CountryNamedLocation extends NamedLocation implements Parsable 
{
    /**
     * Instantiates a new countryNamedLocation and sets the default values.
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
     * Gets the countriesAndRegions property value. List of countries and/or regions in two-letter format specified by ISO 3166-2. Required.
     * @return array<string>|null
    */
    public function getCountriesAndRegions(): ?array {
        $val = $this->getBackingStore()->get('countriesAndRegions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countriesAndRegions'");
    }

    /**
     * Gets the countryLookupMethod property value. Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress(default) and authenticatorAppGps. Note: authenticatorAppGps is not yet supported in the Microsoft Cloud for US Government.
     * @return CountryLookupMethodType|null
    */
    public function getCountryLookupMethod(): ?CountryLookupMethodType {
        $val = $this->getBackingStore()->get('countryLookupMethod');
        if (is_null($val) || $val instanceof CountryLookupMethodType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countryLookupMethod'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'countriesAndRegions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCountriesAndRegions($val);
            },
            'countryLookupMethod' => fn(ParseNode $n) => $o->setCountryLookupMethod($n->getEnumValue(CountryLookupMethodType::class)),
            'includeUnknownCountriesAndRegions' => fn(ParseNode $n) => $o->setIncludeUnknownCountriesAndRegions($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the includeUnknownCountriesAndRegions property value. true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false.
     * @return bool|null
    */
    public function getIncludeUnknownCountriesAndRegions(): ?bool {
        $val = $this->getBackingStore()->get('includeUnknownCountriesAndRegions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeUnknownCountriesAndRegions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('countriesAndRegions', $this->getCountriesAndRegions());
        $writer->writeEnumValue('countryLookupMethod', $this->getCountryLookupMethod());
        $writer->writeBooleanValue('includeUnknownCountriesAndRegions', $this->getIncludeUnknownCountriesAndRegions());
    }

    /**
     * Sets the countriesAndRegions property value. List of countries and/or regions in two-letter format specified by ISO 3166-2. Required.
     * @param array<string>|null $value Value to set for the countriesAndRegions property.
    */
    public function setCountriesAndRegions(?array $value): void {
        $this->getBackingStore()->set('countriesAndRegions', $value);
    }

    /**
     * Sets the countryLookupMethod property value. Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress(default) and authenticatorAppGps. Note: authenticatorAppGps is not yet supported in the Microsoft Cloud for US Government.
     * @param CountryLookupMethodType|null $value Value to set for the countryLookupMethod property.
    */
    public function setCountryLookupMethod(?CountryLookupMethodType $value): void {
        $this->getBackingStore()->set('countryLookupMethod', $value);
    }

    /**
     * Sets the includeUnknownCountriesAndRegions property value. true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false.
     * @param bool|null $value Value to set for the includeUnknownCountriesAndRegions property.
    */
    public function setIncludeUnknownCountriesAndRegions(?bool $value): void {
        $this->getBackingStore()->set('includeUnknownCountriesAndRegions', $value);
    }

}
