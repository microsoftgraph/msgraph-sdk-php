<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateWindowsDeviceAccountActionParameter implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $calendarSyncEnabled Not yet documented */
    private ?bool $calendarSyncEnabled = null;
    
    /** @var WindowsDeviceAccount|null $deviceAccount Not yet documented */
    private ?WindowsDeviceAccount $deviceAccount = null;
    
    /** @var string|null $deviceAccountEmail Not yet documented */
    private ?string $deviceAccountEmail = null;
    
    /** @var string|null $exchangeServer Not yet documented */
    private ?string $exchangeServer = null;
    
    /** @var bool|null $passwordRotationEnabled Not yet documented */
    private ?bool $passwordRotationEnabled = null;
    
    /** @var string|null $sessionInitiationProtocalAddress Not yet documented */
    private ?string $sessionInitiationProtocalAddress = null;
    
    /**
     * Instantiates a new updateWindowsDeviceAccountActionParameter and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateWindowsDeviceAccountActionParameter
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UpdateWindowsDeviceAccountActionParameter {
        return new UpdateWindowsDeviceAccountActionParameter();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the calendarSyncEnabled property value. Not yet documented
     * @return bool|null
    */
    public function getCalendarSyncEnabled(): ?bool {
        return $this->calendarSyncEnabled;
    }

    /**
     * Gets the deviceAccount property value. Not yet documented
     * @return WindowsDeviceAccount|null
    */
    public function getDeviceAccount(): ?WindowsDeviceAccount {
        return $this->deviceAccount;
    }

    /**
     * Gets the deviceAccountEmail property value. Not yet documented
     * @return string|null
    */
    public function getDeviceAccountEmail(): ?string {
        return $this->deviceAccountEmail;
    }

    /**
     * Gets the exchangeServer property value. Not yet documented
     * @return string|null
    */
    public function getExchangeServer(): ?string {
        return $this->exchangeServer;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'calendarSyncEnabled' => function (self $o, ParseNode $n) { $o->setCalendarSyncEnabled($n->getBooleanValue()); },
            'deviceAccount' => function (self $o, ParseNode $n) { $o->setDeviceAccount($n->getObjectValue(WindowsDeviceAccount::class)); },
            'deviceAccountEmail' => function (self $o, ParseNode $n) { $o->setDeviceAccountEmail($n->getStringValue()); },
            'exchangeServer' => function (self $o, ParseNode $n) { $o->setExchangeServer($n->getStringValue()); },
            'passwordRotationEnabled' => function (self $o, ParseNode $n) { $o->setPasswordRotationEnabled($n->getBooleanValue()); },
            'sessionInitiationProtocalAddress' => function (self $o, ParseNode $n) { $o->setSessionInitiationProtocalAddress($n->getStringValue()); },
        ];
    }

    /**
     * Gets the passwordRotationEnabled property value. Not yet documented
     * @return bool|null
    */
    public function getPasswordRotationEnabled(): ?bool {
        return $this->passwordRotationEnabled;
    }

    /**
     * Gets the sessionInitiationProtocalAddress property value. Not yet documented
     * @return string|null
    */
    public function getSessionInitiationProtocalAddress(): ?string {
        return $this->sessionInitiationProtocalAddress;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('calendarSyncEnabled', $this->calendarSyncEnabled);
        $writer->writeObjectValue('deviceAccount', $this->deviceAccount);
        $writer->writeStringValue('deviceAccountEmail', $this->deviceAccountEmail);
        $writer->writeStringValue('exchangeServer', $this->exchangeServer);
        $writer->writeBooleanValue('passwordRotationEnabled', $this->passwordRotationEnabled);
        $writer->writeStringValue('sessionInitiationProtocalAddress', $this->sessionInitiationProtocalAddress);
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
     * Sets the calendarSyncEnabled property value. Not yet documented
     *  @param bool|null $value Value to set for the calendarSyncEnabled property.
    */
    public function setCalendarSyncEnabled(?bool $value ): void {
        $this->calendarSyncEnabled = $value;
    }

    /**
     * Sets the deviceAccount property value. Not yet documented
     *  @param WindowsDeviceAccount|null $value Value to set for the deviceAccount property.
    */
    public function setDeviceAccount(?WindowsDeviceAccount $value ): void {
        $this->deviceAccount = $value;
    }

    /**
     * Sets the deviceAccountEmail property value. Not yet documented
     *  @param string|null $value Value to set for the deviceAccountEmail property.
    */
    public function setDeviceAccountEmail(?string $value ): void {
        $this->deviceAccountEmail = $value;
    }

    /**
     * Sets the exchangeServer property value. Not yet documented
     *  @param string|null $value Value to set for the exchangeServer property.
    */
    public function setExchangeServer(?string $value ): void {
        $this->exchangeServer = $value;
    }

    /**
     * Sets the passwordRotationEnabled property value. Not yet documented
     *  @param bool|null $value Value to set for the passwordRotationEnabled property.
    */
    public function setPasswordRotationEnabled(?bool $value ): void {
        $this->passwordRotationEnabled = $value;
    }

    /**
     * Sets the sessionInitiationProtocalAddress property value. Not yet documented
     *  @param string|null $value Value to set for the sessionInitiationProtocalAddress property.
    */
    public function setSessionInitiationProtocalAddress(?string $value ): void {
        $this->sessionInitiationProtocalAddress = $value;
    }

}
