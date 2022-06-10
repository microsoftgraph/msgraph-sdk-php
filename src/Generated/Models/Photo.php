<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Photo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $cameraMake Camera manufacturer. Read-only.
    */
    private ?string $cameraMake = null;
    
    /**
     * @var string|null $cameraModel Camera model. Read-only.
    */
    private ?string $cameraModel = null;
    
    /**
     * @var float|null $exposureDenominator The denominator for the exposure time fraction from the camera. Read-only.
    */
    private ?float $exposureDenominator = null;
    
    /**
     * @var float|null $exposureNumerator The numerator for the exposure time fraction from the camera. Read-only.
    */
    private ?float $exposureNumerator = null;
    
    /**
     * @var float|null $fNumber The F-stop value from the camera. Read-only.
    */
    private ?float $fNumber = null;
    
    /**
     * @var float|null $focalLength The focal length from the camera. Read-only.
    */
    private ?float $focalLength = null;
    
    /**
     * @var int|null $iso The ISO value from the camera. Read-only.
    */
    private ?int $iso = null;
    
    /**
     * @var int|null $orientation The orientation value from the camera. Writable on OneDrive Personal.
    */
    private ?int $orientation = null;
    
    /**
     * @var DateTime|null $takenDateTime The date and time the photo was taken in UTC time. Read-only.
    */
    private ?DateTime $takenDateTime = null;
    
    /**
     * Instantiates a new photo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cameraMake property value. Camera manufacturer. Read-only.
     * @return string|null
    */
    public function getCameraMake(): ?string {
        return $this->cameraMake;
    }

    /**
     * Gets the cameraModel property value. Camera model. Read-only.
     * @return string|null
    */
    public function getCameraModel(): ?string {
        return $this->cameraModel;
    }

    /**
     * Gets the exposureDenominator property value. The denominator for the exposure time fraction from the camera. Read-only.
     * @return float|null
    */
    public function getExposureDenominator(): ?float {
        return $this->exposureDenominator;
    }

    /**
     * Gets the exposureNumerator property value. The numerator for the exposure time fraction from the camera. Read-only.
     * @return float|null
    */
    public function getExposureNumerator(): ?float {
        return $this->exposureNumerator;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cameraMake' => function (ParseNode $n) use ($o) { $o->setCameraMake($n->getStringValue()); },
            'cameraModel' => function (ParseNode $n) use ($o) { $o->setCameraModel($n->getStringValue()); },
            'exposureDenominator' => function (ParseNode $n) use ($o) { $o->setExposureDenominator($n->getFloatValue()); },
            'exposureNumerator' => function (ParseNode $n) use ($o) { $o->setExposureNumerator($n->getFloatValue()); },
            'fNumber' => function (ParseNode $n) use ($o) { $o->setFNumber($n->getFloatValue()); },
            'focalLength' => function (ParseNode $n) use ($o) { $o->setFocalLength($n->getFloatValue()); },
            'iso' => function (ParseNode $n) use ($o) { $o->setIso($n->getIntegerValue()); },
            'orientation' => function (ParseNode $n) use ($o) { $o->setOrientation($n->getIntegerValue()); },
            'takenDateTime' => function (ParseNode $n) use ($o) { $o->setTakenDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the fNumber property value. The F-stop value from the camera. Read-only.
     * @return float|null
    */
    public function getFNumber(): ?float {
        return $this->fNumber;
    }

    /**
     * Gets the focalLength property value. The focal length from the camera. Read-only.
     * @return float|null
    */
    public function getFocalLength(): ?float {
        return $this->focalLength;
    }

    /**
     * Gets the iso property value. The ISO value from the camera. Read-only.
     * @return int|null
    */
    public function getIso(): ?int {
        return $this->iso;
    }

    /**
     * Gets the orientation property value. The orientation value from the camera. Writable on OneDrive Personal.
     * @return int|null
    */
    public function getOrientation(): ?int {
        return $this->orientation;
    }

    /**
     * Gets the takenDateTime property value. The date and time the photo was taken in UTC time. Read-only.
     * @return DateTime|null
    */
    public function getTakenDateTime(): ?DateTime {
        return $this->takenDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cameraMake', $this->cameraMake);
        $writer->writeStringValue('cameraModel', $this->cameraModel);
        $writer->writeFloatValue('exposureDenominator', $this->exposureDenominator);
        $writer->writeFloatValue('exposureNumerator', $this->exposureNumerator);
        $writer->writeFloatValue('fNumber', $this->fNumber);
        $writer->writeFloatValue('focalLength', $this->focalLength);
        $writer->writeIntegerValue('iso', $this->iso);
        $writer->writeIntegerValue('orientation', $this->orientation);
        $writer->writeDateTimeValue('takenDateTime', $this->takenDateTime);
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
     * Sets the cameraMake property value. Camera manufacturer. Read-only.
     *  @param string|null $value Value to set for the cameraMake property.
    */
    public function setCameraMake(?string $value ): void {
        $this->cameraMake = $value;
    }

    /**
     * Sets the cameraModel property value. Camera model. Read-only.
     *  @param string|null $value Value to set for the cameraModel property.
    */
    public function setCameraModel(?string $value ): void {
        $this->cameraModel = $value;
    }

    /**
     * Sets the exposureDenominator property value. The denominator for the exposure time fraction from the camera. Read-only.
     *  @param float|null $value Value to set for the exposureDenominator property.
    */
    public function setExposureDenominator(?float $value ): void {
        $this->exposureDenominator = $value;
    }

    /**
     * Sets the exposureNumerator property value. The numerator for the exposure time fraction from the camera. Read-only.
     *  @param float|null $value Value to set for the exposureNumerator property.
    */
    public function setExposureNumerator(?float $value ): void {
        $this->exposureNumerator = $value;
    }

    /**
     * Sets the fNumber property value. The F-stop value from the camera. Read-only.
     *  @param float|null $value Value to set for the fNumber property.
    */
    public function setFNumber(?float $value ): void {
        $this->fNumber = $value;
    }

    /**
     * Sets the focalLength property value. The focal length from the camera. Read-only.
     *  @param float|null $value Value to set for the focalLength property.
    */
    public function setFocalLength(?float $value ): void {
        $this->focalLength = $value;
    }

    /**
     * Sets the iso property value. The ISO value from the camera. Read-only.
     *  @param int|null $value Value to set for the iso property.
    */
    public function setIso(?int $value ): void {
        $this->iso = $value;
    }

    /**
     * Sets the orientation property value. The orientation value from the camera. Writable on OneDrive Personal.
     *  @param int|null $value Value to set for the orientation property.
    */
    public function setOrientation(?int $value ): void {
        $this->orientation = $value;
    }

    /**
     * Sets the takenDateTime property value. The date and time the photo was taken in UTC time. Read-only.
     *  @param DateTime|null $value Value to set for the takenDateTime property.
    */
    public function setTakenDateTime(?DateTime $value ): void {
        $this->takenDateTime = $value;
    }

}
