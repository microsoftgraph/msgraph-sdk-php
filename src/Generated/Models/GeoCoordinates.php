<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GeoCoordinates implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var float|null $altitude Optional. The altitude (height), in feet,  above sea level for the item. Read-only.
    */
    private ?float $altitude = null;
    
    /**
     * @var float|null $latitude Optional. The latitude, in decimal, for the item. Writable on OneDrive Personal.
    */
    private ?float $latitude = null;
    
    /**
     * @var float|null $longitude Optional. The longitude, in decimal, for the item. Writable on OneDrive Personal.
    */
    private ?float $longitude = null;
    
    /**
     * Instantiates a new geoCoordinates and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GeoCoordinates
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GeoCoordinates {
        return new GeoCoordinates();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the altitude property value. Optional. The altitude (height), in feet,  above sea level for the item. Read-only.
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
            'altitude' => function (ParseNode $n) use ($o) { $o->setAltitude($n->getFloatValue()); },
            'latitude' => function (ParseNode $n) use ($o) { $o->setLatitude($n->getFloatValue()); },
            'longitude' => function (ParseNode $n) use ($o) { $o->setLongitude($n->getFloatValue()); },
        ];
    }

    /**
     * Gets the latitude property value. Optional. The latitude, in decimal, for the item. Writable on OneDrive Personal.
     * @return float|null
    */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Gets the longitude property value. Optional. The longitude, in decimal, for the item. Writable on OneDrive Personal.
     * @return float|null
    */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('altitude', $this->altitude);
        $writer->writeFloatValue('latitude', $this->latitude);
        $writer->writeFloatValue('longitude', $this->longitude);
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
     * Sets the altitude property value. Optional. The altitude (height), in feet,  above sea level for the item. Read-only.
     *  @param float|null $value Value to set for the altitude property.
    */
    public function setAltitude(?float $value ): void {
        $this->altitude = $value;
    }

    /**
     * Sets the latitude property value. Optional. The latitude, in decimal, for the item. Writable on OneDrive Personal.
     *  @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value ): void {
        $this->latitude = $value;
    }

    /**
     * Sets the longitude property value. Optional. The longitude, in decimal, for the item. Writable on OneDrive Personal.
     *  @param float|null $value Value to set for the longitude property.
    */
    public function setLongitude(?float $value ): void {
        $this->longitude = $value;
    }

}
