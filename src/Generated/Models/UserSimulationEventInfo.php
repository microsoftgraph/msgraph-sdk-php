<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSimulationEventInfo implements AdditionalDataHolder, Parsable 
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
     * @var DateTime|null $eventDateTime The eventDateTime property
    */
    private ?DateTime $eventDateTime = null;
    
    /**
     * @var string|null $eventName The eventName property
    */
    private ?string $eventName = null;
    
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
     * Instantiates a new userSimulationEventInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userSimulationEventInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSimulationEventInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSimulationEventInfo {
        return new UserSimulationEventInfo();
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
     * Gets the eventDateTime property value. The eventDateTime property
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        return $this->eventDateTime;
    }

    /**
     * Gets the eventName property value. The eventName property
     * @return string|null
    */
    public function getEventName(): ?string {
        return $this->eventName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browser' => function (ParseNode $n) use ($o) { $o->setBrowser($n->getStringValue()); },
            'eventDateTime' => function (ParseNode $n) use ($o) { $o->setEventDateTime($n->getDateTimeValue()); },
            'eventName' => function (ParseNode $n) use ($o) { $o->setEventName($n->getStringValue()); },
            'ipAddress' => function (ParseNode $n) use ($o) { $o->setIpAddress($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'osPlatformDeviceDetails' => function (ParseNode $n) use ($o) { $o->setOsPlatformDeviceDetails($n->getStringValue()); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('browser', $this->browser);
        $writer->writeDateTimeValue('eventDateTime', $this->eventDateTime);
        $writer->writeStringValue('eventName', $this->eventName);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('osPlatformDeviceDetails', $this->osPlatformDeviceDetails);
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
     * Sets the eventDateTime property value. The eventDateTime property
     *  @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value ): void {
        $this->eventDateTime = $value;
    }

    /**
     * Sets the eventName property value. The eventName property
     *  @param string|null $value Value to set for the eventName property.
    */
    public function setEventName(?string $value ): void {
        $this->eventName = $value;
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

}
