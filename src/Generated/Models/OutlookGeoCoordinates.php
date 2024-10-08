<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OutlookGeoCoordinates implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OutlookGeoCoordinates and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutlookGeoCoordinates
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutlookGeoCoordinates {
        return new OutlookGeoCoordinates();
    }

    /**
     * Gets the accuracy property value. The accuracy of the latitude and longitude. As an example, the accuracy can be measured in meters, such as the latitude and longitude are accurate to within 50 meters.
     * @return OutlookGeoCoordinates_accuracy|null
    */
    public function getAccuracy(): ?OutlookGeoCoordinates_accuracy {
        $val = $this->getBackingStore()->get('accuracy');
        if (is_null($val) || $val instanceof OutlookGeoCoordinates_accuracy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accuracy'");
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
     * Gets the altitude property value. The altitude of the location.
     * @return OutlookGeoCoordinates_altitude|null
    */
    public function getAltitude(): ?OutlookGeoCoordinates_altitude {
        $val = $this->getBackingStore()->get('altitude');
        if (is_null($val) || $val instanceof OutlookGeoCoordinates_altitude) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'altitude'");
    }

    /**
     * Gets the altitudeAccuracy property value. The accuracy of the altitude.
     * @return OutlookGeoCoordinates_altitudeAccuracy|null
    */
    public function getAltitudeAccuracy(): ?OutlookGeoCoordinates_altitudeAccuracy {
        $val = $this->getBackingStore()->get('altitudeAccuracy');
        if (is_null($val) || $val instanceof OutlookGeoCoordinates_altitudeAccuracy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'altitudeAccuracy'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accuracy' => fn(ParseNode $n) => $o->setAccuracy($n->getObjectValue([OutlookGeoCoordinates_accuracy::class, 'createFromDiscriminatorValue'])),
            'altitude' => fn(ParseNode $n) => $o->setAltitude($n->getObjectValue([OutlookGeoCoordinates_altitude::class, 'createFromDiscriminatorValue'])),
            'altitudeAccuracy' => fn(ParseNode $n) => $o->setAltitudeAccuracy($n->getObjectValue([OutlookGeoCoordinates_altitudeAccuracy::class, 'createFromDiscriminatorValue'])),
            'latitude' => fn(ParseNode $n) => $o->setLatitude($n->getObjectValue([OutlookGeoCoordinates_latitude::class, 'createFromDiscriminatorValue'])),
            'longitude' => fn(ParseNode $n) => $o->setLongitude($n->getObjectValue([OutlookGeoCoordinates_longitude::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the latitude property value. The latitude of the location.
     * @return OutlookGeoCoordinates_latitude|null
    */
    public function getLatitude(): ?OutlookGeoCoordinates_latitude {
        $val = $this->getBackingStore()->get('latitude');
        if (is_null($val) || $val instanceof OutlookGeoCoordinates_latitude) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latitude'");
    }

    /**
     * Gets the longitude property value. The longitude of the location.
     * @return OutlookGeoCoordinates_longitude|null
    */
    public function getLongitude(): ?OutlookGeoCoordinates_longitude {
        $val = $this->getBackingStore()->get('longitude');
        if (is_null($val) || $val instanceof OutlookGeoCoordinates_longitude) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'longitude'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accuracy', $this->getAccuracy());
        $writer->writeObjectValue('altitude', $this->getAltitude());
        $writer->writeObjectValue('altitudeAccuracy', $this->getAltitudeAccuracy());
        $writer->writeObjectValue('latitude', $this->getLatitude());
        $writer->writeObjectValue('longitude', $this->getLongitude());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accuracy property value. The accuracy of the latitude and longitude. As an example, the accuracy can be measured in meters, such as the latitude and longitude are accurate to within 50 meters.
     * @param OutlookGeoCoordinates_accuracy|null $value Value to set for the accuracy property.
    */
    public function setAccuracy(?OutlookGeoCoordinates_accuracy $value): void {
        $this->getBackingStore()->set('accuracy', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the altitude property value. The altitude of the location.
     * @param OutlookGeoCoordinates_altitude|null $value Value to set for the altitude property.
    */
    public function setAltitude(?OutlookGeoCoordinates_altitude $value): void {
        $this->getBackingStore()->set('altitude', $value);
    }

    /**
     * Sets the altitudeAccuracy property value. The accuracy of the altitude.
     * @param OutlookGeoCoordinates_altitudeAccuracy|null $value Value to set for the altitudeAccuracy property.
    */
    public function setAltitudeAccuracy(?OutlookGeoCoordinates_altitudeAccuracy $value): void {
        $this->getBackingStore()->set('altitudeAccuracy', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the latitude property value. The latitude of the location.
     * @param OutlookGeoCoordinates_latitude|null $value Value to set for the latitude property.
    */
    public function setLatitude(?OutlookGeoCoordinates_latitude $value): void {
        $this->getBackingStore()->set('latitude', $value);
    }

    /**
     * Sets the longitude property value. The longitude of the location.
     * @param OutlookGeoCoordinates_longitude|null $value Value to set for the longitude property.
    */
    public function setLongitude(?OutlookGeoCoordinates_longitude $value): void {
        $this->getBackingStore()->set('longitude', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
