<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PhysicalOfficeAddress implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $city The city. */
    private ?string $city = null;
    
    /** @var string|null $countryOrRegion The country or region. It's a free-format string value, for example, 'United States'. */
    private ?string $countryOrRegion = null;
    
    /** @var string|null $officeLocation Office location such as building and office number for an organizational contact. */
    private ?string $officeLocation = null;
    
    /** @var string|null $postalCode The postal code. */
    private ?string $postalCode = null;
    
    /** @var string|null $state The state. */
    private ?string $state = null;
    
    /** @var string|null $street The street. */
    private ?string $street = null;
    
    /**
     * Instantiates a new physicalOfficeAddress and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhysicalOfficeAddress
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PhysicalOfficeAddress {
        return new PhysicalOfficeAddress();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the city property value. The city.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the countryOrRegion property value. The country or region. It's a free-format string value, for example, 'United States'.
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
        return  [
            'city' => function (self $o, ParseNode $n) { $o->setCity($n->getStringValue()); },
            'countryOrRegion' => function (self $o, ParseNode $n) { $o->setCountryOrRegion($n->getStringValue()); },
            'officeLocation' => function (self $o, ParseNode $n) { $o->setOfficeLocation($n->getStringValue()); },
            'postalCode' => function (self $o, ParseNode $n) { $o->setPostalCode($n->getStringValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getStringValue()); },
            'street' => function (self $o, ParseNode $n) { $o->setStreet($n->getStringValue()); },
        ];
    }

    /**
     * Gets the officeLocation property value. Office location such as building and office number for an organizational contact.
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->officeLocation;
    }

    /**
     * Gets the postalCode property value. The postal code.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the state property value. The state.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the street property value. The street.
     * @return string|null
    */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('city', $this->city);
        $writer->writeStringValue('countryOrRegion', $this->countryOrRegion);
        $writer->writeStringValue('officeLocation', $this->officeLocation);
        $writer->writeStringValue('postalCode', $this->postalCode);
        $writer->writeStringValue('state', $this->state);
        $writer->writeStringValue('street', $this->street);
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
     * Sets the city property value. The city.
     *  @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value ): void {
        $this->city = $value;
    }

    /**
     * Sets the countryOrRegion property value. The country or region. It's a free-format string value, for example, 'United States'.
     *  @param string|null $value Value to set for the countryOrRegion property.
    */
    public function setCountryOrRegion(?string $value ): void {
        $this->countryOrRegion = $value;
    }

    /**
     * Sets the officeLocation property value. Office location such as building and office number for an organizational contact.
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value ): void {
        $this->officeLocation = $value;
    }

    /**
     * Sets the postalCode property value. The postal code.
     *  @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value ): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the state property value. The state.
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the street property value. The street.
     *  @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value ): void {
        $this->street = $value;
    }

}
