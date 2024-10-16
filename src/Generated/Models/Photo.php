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

class Photo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Photo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Photo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Photo {
        return new Photo();
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
     * Gets the cameraMake property value. Camera manufacturer. Read-only.
     * @return string|null
    */
    public function getCameraMake(): ?string {
        $val = $this->getBackingStore()->get('cameraMake');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cameraMake'");
    }

    /**
     * Gets the cameraModel property value. Camera model. Read-only.
     * @return string|null
    */
    public function getCameraModel(): ?string {
        $val = $this->getBackingStore()->get('cameraModel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cameraModel'");
    }

    /**
     * Gets the exposureDenominator property value. The denominator for the exposure time fraction from the camera. Read-only.
     * @return float|null
    */
    public function getExposureDenominator(): ?float {
        $val = $this->getBackingStore()->get('exposureDenominator');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exposureDenominator'");
    }

    /**
     * Gets the exposureNumerator property value. The numerator for the exposure time fraction from the camera. Read-only.
     * @return float|null
    */
    public function getExposureNumerator(): ?float {
        $val = $this->getBackingStore()->get('exposureNumerator');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exposureNumerator'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cameraMake' => fn(ParseNode $n) => $o->setCameraMake($n->getStringValue()),
            'cameraModel' => fn(ParseNode $n) => $o->setCameraModel($n->getStringValue()),
            'exposureDenominator' => fn(ParseNode $n) => $o->setExposureDenominator($n->getFloatValue()),
            'exposureNumerator' => fn(ParseNode $n) => $o->setExposureNumerator($n->getFloatValue()),
            'fNumber' => fn(ParseNode $n) => $o->setFNumber($n->getFloatValue()),
            'focalLength' => fn(ParseNode $n) => $o->setFocalLength($n->getFloatValue()),
            'iso' => fn(ParseNode $n) => $o->setIso($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'orientation' => fn(ParseNode $n) => $o->setOrientation($n->getFloatValue()),
            'takenDateTime' => fn(ParseNode $n) => $o->setTakenDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the fNumber property value. The F-stop value from the camera. Read-only.
     * @return float|null
    */
    public function getFNumber(): ?float {
        $val = $this->getBackingStore()->get('fNumber');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fNumber'");
    }

    /**
     * Gets the focalLength property value. The focal length from the camera. Read-only.
     * @return float|null
    */
    public function getFocalLength(): ?float {
        $val = $this->getBackingStore()->get('focalLength');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'focalLength'");
    }

    /**
     * Gets the iso property value. The ISO value from the camera. Read-only.
     * @return int|null
    */
    public function getIso(): ?int {
        $val = $this->getBackingStore()->get('iso');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iso'");
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
     * Gets the orientation property value. The orientation value from the camera. Writable on OneDrive Personal.
     * @return float|null
    */
    public function getOrientation(): ?float {
        $val = $this->getBackingStore()->get('orientation');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orientation'");
    }

    /**
     * Gets the takenDateTime property value. Represents the date and time the photo was taken. Read-only.
     * @return DateTime|null
    */
    public function getTakenDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('takenDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'takenDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cameraMake', $this->getCameraMake());
        $writer->writeStringValue('cameraModel', $this->getCameraModel());
        $writer->writeFloatValue('exposureDenominator', $this->getExposureDenominator());
        $writer->writeFloatValue('exposureNumerator', $this->getExposureNumerator());
        $writer->writeFloatValue('fNumber', $this->getFNumber());
        $writer->writeFloatValue('focalLength', $this->getFocalLength());
        $writer->writeIntegerValue('iso', $this->getIso());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('orientation', $this->getOrientation());
        $writer->writeDateTimeValue('takenDateTime', $this->getTakenDateTime());
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
     * Sets the cameraMake property value. Camera manufacturer. Read-only.
     * @param string|null $value Value to set for the cameraMake property.
    */
    public function setCameraMake(?string $value): void {
        $this->getBackingStore()->set('cameraMake', $value);
    }

    /**
     * Sets the cameraModel property value. Camera model. Read-only.
     * @param string|null $value Value to set for the cameraModel property.
    */
    public function setCameraModel(?string $value): void {
        $this->getBackingStore()->set('cameraModel', $value);
    }

    /**
     * Sets the exposureDenominator property value. The denominator for the exposure time fraction from the camera. Read-only.
     * @param float|null $value Value to set for the exposureDenominator property.
    */
    public function setExposureDenominator(?float $value): void {
        $this->getBackingStore()->set('exposureDenominator', $value);
    }

    /**
     * Sets the exposureNumerator property value. The numerator for the exposure time fraction from the camera. Read-only.
     * @param float|null $value Value to set for the exposureNumerator property.
    */
    public function setExposureNumerator(?float $value): void {
        $this->getBackingStore()->set('exposureNumerator', $value);
    }

    /**
     * Sets the fNumber property value. The F-stop value from the camera. Read-only.
     * @param float|null $value Value to set for the fNumber property.
    */
    public function setFNumber(?float $value): void {
        $this->getBackingStore()->set('fNumber', $value);
    }

    /**
     * Sets the focalLength property value. The focal length from the camera. Read-only.
     * @param float|null $value Value to set for the focalLength property.
    */
    public function setFocalLength(?float $value): void {
        $this->getBackingStore()->set('focalLength', $value);
    }

    /**
     * Sets the iso property value. The ISO value from the camera. Read-only.
     * @param int|null $value Value to set for the iso property.
    */
    public function setIso(?int $value): void {
        $this->getBackingStore()->set('iso', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the orientation property value. The orientation value from the camera. Writable on OneDrive Personal.
     * @param float|null $value Value to set for the orientation property.
    */
    public function setOrientation(?float $value): void {
        $this->getBackingStore()->set('orientation', $value);
    }

    /**
     * Sets the takenDateTime property value. Represents the date and time the photo was taken. Read-only.
     * @param DateTime|null $value Value to set for the takenDateTime property.
    */
    public function setTakenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('takenDateTime', $value);
    }

}
