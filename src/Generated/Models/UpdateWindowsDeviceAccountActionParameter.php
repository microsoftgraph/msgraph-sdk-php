<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateWindowsDeviceAccountActionParameter implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateWindowsDeviceAccountActionParameter and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateWindowsDeviceAccountActionParameter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateWindowsDeviceAccountActionParameter {
        return new UpdateWindowsDeviceAccountActionParameter();
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
     * Gets the calendarSyncEnabled property value. Not yet documented
     * @return bool|null
    */
    public function getCalendarSyncEnabled(): ?bool {
        $val = $this->getBackingStore()->get('calendarSyncEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendarSyncEnabled'");
    }

    /**
     * Gets the deviceAccount property value. Not yet documented
     * @return WindowsDeviceAccount|null
    */
    public function getDeviceAccount(): ?WindowsDeviceAccount {
        $val = $this->getBackingStore()->get('deviceAccount');
        if (is_null($val) || $val instanceof WindowsDeviceAccount) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceAccount'");
    }

    /**
     * Gets the deviceAccountEmail property value. Not yet documented
     * @return string|null
    */
    public function getDeviceAccountEmail(): ?string {
        $val = $this->getBackingStore()->get('deviceAccountEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceAccountEmail'");
    }

    /**
     * Gets the exchangeServer property value. Not yet documented
     * @return string|null
    */
    public function getExchangeServer(): ?string {
        $val = $this->getBackingStore()->get('exchangeServer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeServer'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calendarSyncEnabled' => fn(ParseNode $n) => $o->setCalendarSyncEnabled($n->getBooleanValue()),
            'deviceAccount' => fn(ParseNode $n) => $o->setDeviceAccount($n->getObjectValue([WindowsDeviceAccount::class, 'createFromDiscriminatorValue'])),
            'deviceAccountEmail' => fn(ParseNode $n) => $o->setDeviceAccountEmail($n->getStringValue()),
            'exchangeServer' => fn(ParseNode $n) => $o->setExchangeServer($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'passwordRotationEnabled' => fn(ParseNode $n) => $o->setPasswordRotationEnabled($n->getBooleanValue()),
            'sessionInitiationProtocalAddress' => fn(ParseNode $n) => $o->setSessionInitiationProtocalAddress($n->getStringValue()),
        ];
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
     * Gets the passwordRotationEnabled property value. Not yet documented
     * @return bool|null
    */
    public function getPasswordRotationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('passwordRotationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRotationEnabled'");
    }

    /**
     * Gets the sessionInitiationProtocalAddress property value. Not yet documented
     * @return string|null
    */
    public function getSessionInitiationProtocalAddress(): ?string {
        $val = $this->getBackingStore()->get('sessionInitiationProtocalAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionInitiationProtocalAddress'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('calendarSyncEnabled', $this->getCalendarSyncEnabled());
        $writer->writeObjectValue('deviceAccount', $this->getDeviceAccount());
        $writer->writeStringValue('deviceAccountEmail', $this->getDeviceAccountEmail());
        $writer->writeStringValue('exchangeServer', $this->getExchangeServer());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('passwordRotationEnabled', $this->getPasswordRotationEnabled());
        $writer->writeStringValue('sessionInitiationProtocalAddress', $this->getSessionInitiationProtocalAddress());
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
     * Sets the calendarSyncEnabled property value. Not yet documented
     * @param bool|null $value Value to set for the calendarSyncEnabled property.
    */
    public function setCalendarSyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('calendarSyncEnabled', $value);
    }

    /**
     * Sets the deviceAccount property value. Not yet documented
     * @param WindowsDeviceAccount|null $value Value to set for the deviceAccount property.
    */
    public function setDeviceAccount(?WindowsDeviceAccount $value): void {
        $this->getBackingStore()->set('deviceAccount', $value);
    }

    /**
     * Sets the deviceAccountEmail property value. Not yet documented
     * @param string|null $value Value to set for the deviceAccountEmail property.
    */
    public function setDeviceAccountEmail(?string $value): void {
        $this->getBackingStore()->set('deviceAccountEmail', $value);
    }

    /**
     * Sets the exchangeServer property value. Not yet documented
     * @param string|null $value Value to set for the exchangeServer property.
    */
    public function setExchangeServer(?string $value): void {
        $this->getBackingStore()->set('exchangeServer', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the passwordRotationEnabled property value. Not yet documented
     * @param bool|null $value Value to set for the passwordRotationEnabled property.
    */
    public function setPasswordRotationEnabled(?bool $value): void {
        $this->getBackingStore()->set('passwordRotationEnabled', $value);
    }

    /**
     * Sets the sessionInitiationProtocalAddress property value. Not yet documented
     * @param string|null $value Value to set for the sessionInitiationProtocalAddress property.
    */
    public function setSessionInitiationProtocalAddress(?string $value): void {
        $this->getBackingStore()->set('sessionInitiationProtocalAddress', $value);
    }

}
