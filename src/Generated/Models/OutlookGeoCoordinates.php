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
     * Instantiates a new outlookGeoCoordinates and sets the default values.
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
     * @return float|null
    */
    public function getAccuracy(): ?float {
        return $this->getBackingStore()->get('accuracy');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the altitude property value. The altitude of the location.
     * @return float|null
    */
    public function getAltitude(): ?float {
        return $this->getBackingStore()->get('altitude');
    }

    /**
     * Gets the altitudeAccuracy property value. The accuracy of the altitude.
     * @return float|null
    */
    public function getAltitudeAccuracy(): ?float {
        return $this->getBackingStore()->get('altitudeAccuracy');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
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
        return $this->getBackingStore()->get('latitude');
    }

    /**
     * Gets the longitude property value. The longitude of the location.
     * @return float|null
    */
    public function getLongitude(): ?float {
        return $this->getBackingStore()->get('longitude');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('accuracy', $this->getAccuracy());
        $writer->writeFloatValue('altitude', $this->getAltitude());
        $writer->writeFloatValue('altitudeAccuracy', $this->getAltitudeAccuracy());
        $writer->writeFloatValue('latitude', $this->getLatitude());
        $writer->writeFloatValue('longitude', $this->getLongitude());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accuracy property value. The accuracy of the latitude and longitude. As an example, the accuracy can be measured in meters, such as the latitude and longitude are accurate to within 50 meters.
     * @param float|null $value Value to set for the accuracy property.
    */
    public function setAccuracy(?float $value): void {
        $this->getBackingStore()->set('accuracy', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the altitude property value. The altitude of the location.
     * @param float|null $value Value to set for the altitude property.
    */
    public function setAltitude(?float $value): void {
        $this->getBackingStore()->set('altitude', $value);
    }

    /**
     * Sets the altitudeAccuracy property value. The accuracy of the altitude.
     * @param float|null $value Value to set for the altitudeAccuracy property.
    */
    public function setAltitudeAccuracy(?float $value): void {
        $this->getBackingStore()->set('altitudeAccuracy', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the latitude property value. The latitude of the location.
     * @param float|null $value Value to set for the latitude property.
    */
    public function setLatitude(?float $value): void {
        $this->getBackingStore()->set('latitude', $value);
    }

    /**
     * Sets the longitude property value. The longitude of the location.
     * @param float|null $value Value to set for the longitude property.
    */
    public function setLongitude(?float $value): void {
        $this->getBackingStore()->set('longitude', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
