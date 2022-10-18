<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutlookGeoCoordinates implements AdditionalDataHolder, Parsable 
{
    /**
     * @var float|null $accuracy The accuracy of the latitude and longitude. As an example, the accuracy can be measured in meters, such as the latitude and longitude are accurate to within 50 meters.
    */
    private ?float $accuracy = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var float|null $altitude The altitude of the location.
    */
    private ?float $altitude = null;
    
    /**
     * @var float|null $altitudeAccuracy The accuracy of the altitude.
    */
    private ?float $altitudeAccuracy = null;
    
    /**
     * @var float|null $latitude The latitude of the location.
    */
    private ?float $latitude = null;
    
    /**
     * @var float|null $longitude The longitude of the location.
    */
    private ?float $longitude = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new outlookGeoCoordinates and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.outlookGeoCoordinates');
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
     * @return float|null
    */
    public function getAccuracy(): ?float {
        return $this->accuracy;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the altitude property value. The altitude of the location.
     * @return float|null
    */
    public function getAltitude(): ?float {
        return $this->altitude;
    }

    /**
     * Gets the altitudeAccuracy property value. The accuracy of the altitude.
     * @return float|null
    */
    public function getAltitudeAccuracy(): ?float {
        return $this->altitudeAccuracy;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accuracy' => fn(ParseNode $n) => $o->setAccuracy($n->getFloatValue()),
            'altitude' => fn(ParseNode $n) => $o->setAltitude($n->getFloatValue()),
            'altitudeAccuracy' => fn(ParseNode $n) => $o->setAltitudeAccuracy($n->getFloatValue()),
            'latitude' => fn(ParseNode $n) => $o->setLatitude($n->getFloatValue()),
            'longitude' => fn(ParseNode $n) => $o->setLongitude($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the latitude property value. The latitude of the location.
     * @return float|null
    */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Gets the longitude property value. The longitude of the location.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('accuracy', $this->accuracy);
        $writer->writeFloatValue('altitude', $this->altitude);
        $writer->writeFloatValue('altitudeAccuracy', $this->altitudeAccuracy);
        $writer->writeFloatValue('latitude', $this->latitude);
        $writer->writeFloatValue('longitude', $this->longitude);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accuracy property value. The accuracy of the latitude and longitude. As an example, the accuracy can be measured in meters, such as the latitude and longitude are accurate to within 50 meters.
     *  @param float|null $value Value to set for the accuracy property.
    */
    public function setAccuracy(?float $value ): void {
        $this->accuracy = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the altitude property value. The altitude of the location.
     *  @param float|null $value Value to set for the altitude property.
    */
    public function setAltitude(?float $value ): void {
        $this->altitude = $value;
    }

    /**
     * Sets the altitudeAccuracy property value. The accuracy of the altitude.
     *  @param float|null $value Value to set for the altitudeAccuracy property.
    */
    public function setAltitudeAccuracy(?float $value ): void {
        $this->altitudeAccuracy = $value;
    }

    /**
     * Sets the latitude property value. The latitude of the location.
     *  @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value ): void {
        $this->latitude = $value;
    }

    /**
     * Sets the longitude property value. The longitude of the location.
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

}
