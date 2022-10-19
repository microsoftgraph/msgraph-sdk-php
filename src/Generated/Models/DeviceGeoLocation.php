<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceGeoLocation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var float|null $altitude Altitude, given in meters above sea level
    */
    private ?float $altitude = null;
    
    /**
     * @var float|null $heading Heading in degrees from true north
    */
    private ?float $heading = null;
    
    /**
     * @var float|null $horizontalAccuracy Accuracy of longitude and latitude in meters
    */
    private ?float $horizontalAccuracy = null;
    
    /**
     * @var DateTime|null $lastCollectedDateTime Time at which location was recorded, relative to UTC
    */
    private ?DateTime $lastCollectedDateTime = null;
    
    /**
     * @var float|null $latitude Latitude coordinate of the device's location
    */
    private ?float $latitude = null;
    
    /**
     * @var float|null $longitude Longitude coordinate of the device's location
    */
    private ?float $longitude = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var float|null $speed Speed the device is traveling in meters per second
    */
    private ?float $speed = null;
    
    /**
     * @var float|null $verticalAccuracy Accuracy of altitude in meters
    */
    private ?float $verticalAccuracy = null;
    
    /**
     * Instantiates a new deviceGeoLocation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceGeoLocation');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the altitude property value. Altitude, given in meters above sea level
     * @return float|null
    */
    public function getAltitude(): ?float {
        return $this->altitude;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->heading;
    }

    /**
     * Gets the horizontalAccuracy property value. Accuracy of longitude and latitude in meters
     * @return float|null
    */
    public function getHorizontalAccuracy(): ?float {
        return $this->horizontalAccuracy;
    }

    /**
     * Gets the lastCollectedDateTime property value. Time at which location was recorded, relative to UTC
     * @return DateTime|null
    */
    public function getLastCollectedDateTime(): ?DateTime {
        return $this->lastCollectedDateTime;
    }

    /**
     * Gets the latitude property value. Latitude coordinate of the device's location
     * @return float|null
    */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Gets the longitude property value. Longitude coordinate of the device's location
     * @return float|null
    */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the speed property value. Speed the device is traveling in meters per second
     * @return float|null
    */
    public function getSpeed(): ?float {
        return $this->speed;
    }

    /**
     * Gets the verticalAccuracy property value. Accuracy of altitude in meters
     * @return float|null
    */
    public function getVerticalAccuracy(): ?float {
        return $this->verticalAccuracy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('altitude', $this->altitude);
        $writer->writeFloatValue('heading', $this->heading);
        $writer->writeFloatValue('horizontalAccuracy', $this->horizontalAccuracy);
        $writer->writeDateTimeValue('lastCollectedDateTime', $this->lastCollectedDateTime);
        $writer->writeFloatValue('latitude', $this->latitude);
        $writer->writeFloatValue('longitude', $this->longitude);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeFloatValue('speed', $this->speed);
        $writer->writeFloatValue('verticalAccuracy', $this->verticalAccuracy);
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
     * Sets the altitude property value. Altitude, given in meters above sea level
     *  @param float|null $value Value to set for the altitude property.
    */
    public function setAltitude(?float $value ): void {
        $this->altitude = $value;
    }

    /**
     * Sets the heading property value. Heading in degrees from true north
     *  @param float|null $value Value to set for the heading property.
    */
    public function setHeading(?float $value ): void {
        $this->heading = $value;
    }

    /**
     * Sets the horizontalAccuracy property value. Accuracy of longitude and latitude in meters
     *  @param float|null $value Value to set for the horizontalAccuracy property.
    */
    public function setHorizontalAccuracy(?float $value ): void {
        $this->horizontalAccuracy = $value;
    }

    /**
     * Sets the lastCollectedDateTime property value. Time at which location was recorded, relative to UTC
     *  @param DateTime|null $value Value to set for the lastCollectedDateTime property.
    */
    public function setLastCollectedDateTime(?DateTime $value ): void {
        $this->lastCollectedDateTime = $value;
    }

    /**
     * Sets the latitude property value. Latitude coordinate of the device's location
     *  @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value ): void {
        $this->latitude = $value;
    }

    /**
     * Sets the longitude property value. Longitude coordinate of the device's location
     *  @param float|null $value Value to set for the longitude property.
    */
    public function setLongitude(?float $value ): void {
        $this->longitude = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the speed property value. Speed the device is traveling in meters per second
     *  @param float|null $value Value to set for the speed property.
    */
    public function setSpeed(?float $value ): void {
        $this->speed = $value;
    }

    /**
     * Sets the verticalAccuracy property value. Accuracy of altitude in meters
     *  @param float|null $value Value to set for the verticalAccuracy property.
    */
    public function setVerticalAccuracy(?float $value ): void {
        $this->verticalAccuracy = $value;
    }

}
