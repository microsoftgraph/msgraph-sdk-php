<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserTrainingContentEventInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $browser The browser property
    */
    private ?string $browser = null;
    
    /**
     * @var DateTime|null $contentDateTime The contentDateTime property
    */
    private ?DateTime $contentDateTime = null;
    
    /**
     * @var string|null $ipAddress The ipAddress property
    */
    private ?string $ipAddress = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $osPlatformDeviceDetails The osPlatformDeviceDetails property
    */
    private ?string $osPlatformDeviceDetails = null;
    
    /**
     * @var float|null $potentialScoreImpact The potentialScoreImpact property
    */
    private ?float $potentialScoreImpact = null;
    
    /**
     * Instantiates a new userTrainingContentEventInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userTrainingContentEventInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserTrainingContentEventInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserTrainingContentEventInfo {
        return new UserTrainingContentEventInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the browser property value. The browser property
     * @return string|null
    */
    public function getBrowser(): ?string {
        return $this->browser;
    }

    /**
     * Gets the contentDateTime property value. The contentDateTime property
     * @return DateTime|null
    */
    public function getContentDateTime(): ?DateTime {
        return $this->contentDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browser' => function (ParseNode $n) use ($o) { $o->setBrowser($n->getStringValue()); },
            'contentDateTime' => function (ParseNode $n) use ($o) { $o->setContentDateTime($n->getDateTimeValue()); },
            'ipAddress' => function (ParseNode $n) use ($o) { $o->setIpAddress($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'osPlatformDeviceDetails' => function (ParseNode $n) use ($o) { $o->setOsPlatformDeviceDetails($n->getStringValue()); },
            'potentialScoreImpact' => function (ParseNode $n) use ($o) { $o->setPotentialScoreImpact($n->getFloatValue()); },
        ];
    }

    /**
     * Gets the ipAddress property value. The ipAddress property
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the osPlatformDeviceDetails property value. The osPlatformDeviceDetails property
     * @return string|null
    */
    public function getOsPlatformDeviceDetails(): ?string {
        return $this->osPlatformDeviceDetails;
    }

    /**
     * Gets the potentialScoreImpact property value. The potentialScoreImpact property
     * @return float|null
    */
    public function getPotentialScoreImpact(): ?float {
        return $this->potentialScoreImpact;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('browser', $this->browser);
        $writer->writeDateTimeValue('contentDateTime', $this->contentDateTime);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('osPlatformDeviceDetails', $this->osPlatformDeviceDetails);
        $writer->writeFloatValue('potentialScoreImpact', $this->potentialScoreImpact);
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
     * Sets the browser property value. The browser property
     *  @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value ): void {
        $this->browser = $value;
    }

    /**
     * Sets the contentDateTime property value. The contentDateTime property
     *  @param DateTime|null $value Value to set for the contentDateTime property.
    */
    public function setContentDateTime(?DateTime $value ): void {
        $this->contentDateTime = $value;
    }

    /**
     * Sets the ipAddress property value. The ipAddress property
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the osPlatformDeviceDetails property value. The osPlatformDeviceDetails property
     *  @param string|null $value Value to set for the osPlatformDeviceDetails property.
    */
    public function setOsPlatformDeviceDetails(?string $value ): void {
        $this->osPlatformDeviceDetails = $value;
    }

    /**
     * Sets the potentialScoreImpact property value. The potentialScoreImpact property
     *  @param float|null $value Value to set for the potentialScoreImpact property.
    */
    public function setPotentialScoreImpact(?float $value ): void {
        $this->potentialScoreImpact = $value;
    }

}
