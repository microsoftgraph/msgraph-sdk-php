<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Device location
*/
class DeviceGeoLocation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceGeoLocation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceGeoLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceGeoLocation {
        return new DeviceGeoLocation();
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
     * Gets the altitude property value. Altitude, given in meters above sea level
     * @return float|null
    */
    public function getAltitude(): ?float {
        $val = $this->getBackingStore()->get('altitude');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'altitude'");
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
            'altitude' => fn(ParseNode $n) => $o->setAltitude($n->getFloatValue()),
            'heading' => fn(ParseNode $n) => $o->setHeading($n->getFloatValue()),
            'horizontalAccuracy' => fn(ParseNode $n) => $o->setHorizontalAccuracy($n->getFloatValue()),
            'lastCollectedDateTime' => fn(ParseNode $n) => $o->setLastCollectedDateTime($n->getDateTimeValue()),
            'latitude' => fn(ParseNode $n) => $o->setLatitude($n->getFloatValue()),
            'longitude' => fn(ParseNode $n) => $o->setLongitude($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'speed' => fn(ParseNode $n) => $o->setSpeed($n->getFloatValue()),
            'verticalAccuracy' => fn(ParseNode $n) => $o->setVerticalAccuracy($n->getFloatValue()),
        ];
    }

    /**
     * Gets the heading property value. Heading in degrees from true north
     * @return float|null
    */
    public function getHeading(): ?float {
        $val = $this->getBackingStore()->get('heading');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'heading'");
    }

    /**
     * Gets the horizontalAccuracy property value. Accuracy of longitude and latitude in meters
     * @return float|null
    */
    public function getHorizontalAccuracy(): ?float {
        $val = $this->getBackingStore()->get('horizontalAccuracy');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'horizontalAccuracy'");
    }

    /**
     * Gets the lastCollectedDateTime property value. Time at which location was recorded, relative to UTC
     * @return DateTime|null
    */
    public function getLastCollectedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastCollectedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastCollectedDateTime'");
    }

    /**
     * Gets the latitude property value. Latitude coordinate of the device's location
     * @return float|null
    */
    public function getLatitude(): ?float {
        $val = $this->getBackingStore()->get('latitude');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latitude'");
    }

    /**
     * Gets the longitude property value. Longitude coordinate of the device's location
     * @return float|null
    */
    public function getLongitude(): ?float {
        $val = $this->getBackingStore()->get('longitude');
        if (is_null($val) || is_float($val)) {
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
     * Gets the speed property value. Speed the device is traveling in meters per second
     * @return float|null
    */
    public function getSpeed(): ?float {
        $val = $this->getBackingStore()->get('speed');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'speed'");
    }

    /**
     * Gets the verticalAccuracy property value. Accuracy of altitude in meters
     * @return float|null
    */
    public function getVerticalAccuracy(): ?float {
        $val = $this->getBackingStore()->get('verticalAccuracy');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verticalAccuracy'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('altitude', $this->getAltitude());
        $writer->writeFloatValue('heading', $this->getHeading());
        $writer->writeFloatValue('horizontalAccuracy', $this->getHorizontalAccuracy());
        $writer->writeDateTimeValue('lastCollectedDateTime', $this->getLastCollectedDateTime());
        $writer->writeFloatValue('latitude', $this->getLatitude());
        $writer->writeFloatValue('longitude', $this->getLongitude());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('speed', $this->getSpeed());
        $writer->writeFloatValue('verticalAccuracy', $this->getVerticalAccuracy());
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
     * Sets the altitude property value. Altitude, given in meters above sea level
     * @param float|null $value Value to set for the altitude property.
    */
    public function setAltitude(?float $value): void {
        $this->getBackingStore()->set('altitude', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the heading property value. Heading in degrees from true north
     * @param float|null $value Value to set for the heading property.
    */
    public function setHeading(?float $value): void {
        $this->getBackingStore()->set('heading', $value);
    }

    /**
     * Sets the horizontalAccuracy property value. Accuracy of longitude and latitude in meters
     * @param float|null $value Value to set for the horizontalAccuracy property.
    */
    public function setHorizontalAccuracy(?float $value): void {
        $this->getBackingStore()->set('horizontalAccuracy', $value);
    }

    /**
     * Sets the lastCollectedDateTime property value. Time at which location was recorded, relative to UTC
     * @param DateTime|null $value Value to set for the lastCollectedDateTime property.
    */
    public function setLastCollectedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCollectedDateTime', $value);
    }

    /**
     * Sets the latitude property value. Latitude coordinate of the device's location
     * @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value): void {
        $this->getBackingStore()->set('latitude', $value);
    }

    /**
     * Sets the longitude property value. Longitude coordinate of the device's location
     * @param float|null $value Value to set for the longitude property.
    */
    public function setLongitude(?float $value): void {
        $this->getBackingStore()->set('longitude', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the speed property value. Speed the device is traveling in meters per second
     * @param float|null $value Value to set for the speed property.
    */
    public function setSpeed(?float $value): void {
        $this->getBackingStore()->set('speed', $value);
    }

    /**
     * Sets the verticalAccuracy property value. Accuracy of altitude in meters
     * @param float|null $value Value to set for the verticalAccuracy property.
    */
    public function setVerticalAccuracy(?float $value): void {
        $this->getBackingStore()->set('verticalAccuracy', $value);
    }

}
