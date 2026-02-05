<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OidcAddressInboundClaims implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OidcAddressInboundClaims and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OidcAddressInboundClaims
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OidcAddressInboundClaims {
        return new OidcAddressInboundClaims();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        $val = $this->getBackingStore()->get('country');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'country'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'locality' => fn(ParseNode $n) => $o->setLocality($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'postal_code' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
            'street_address' => fn(ParseNode $n) => $o->setStreetAddress($n->getStringValue()),
        ];
    }

    /**
     * Gets the locality property value. The locality property
     * @return string|null
    */
    public function getLocality(): ?string {
        $val = $this->getBackingStore()->get('locality');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locality'");
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
     * Gets the postal_code property value. The postal_code property
     * @return string|null
    */
    public function getPostalCode(): ?string {
        $val = $this->getBackingStore()->get('postal_code');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postal_code'");
    }

    /**
     * Gets the region property value. The region property
     * @return string|null
    */
    public function getRegion(): ?string {
        $val = $this->getBackingStore()->get('region');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'region'");
    }

    /**
     * Gets the street_address property value. The street_address property
     * @return string|null
    */
    public function getStreetAddress(): ?string {
        $val = $this->getBackingStore()->get('street_address');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'street_address'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('locality', $this->getLocality());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('postal_code', $this->getPostalCode());
        $writer->writeStringValue('region', $this->getRegion());
        $writer->writeStringValue('street_address', $this->getStreetAddress());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->getBackingStore()->set('country', $value);
    }

    /**
     * Sets the locality property value. The locality property
     * @param string|null $value Value to set for the locality property.
    */
    public function setLocality(?string $value): void {
        $this->getBackingStore()->set('locality', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the postal_code property value. The postal_code property
     * @param string|null $value Value to set for the postal_code property.
    */
    public function setPostalCode(?string $value): void {
        $this->getBackingStore()->set('postal_code', $value);
    }

    /**
     * Sets the region property value. The region property
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->getBackingStore()->set('region', $value);
    }

    /**
     * Sets the street_address property value. The street_address property
     * @param string|null $value Value to set for the street_address property.
    */
    public function setStreetAddress(?string $value): void {
        $this->getBackingStore()->set('street_address', $value);
    }

}
