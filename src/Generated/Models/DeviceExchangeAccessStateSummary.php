<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Device Exchange Access State summary
*/
class DeviceExchangeAccessStateSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceExchangeAccessStateSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceExchangeAccessStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceExchangeAccessStateSummary {
        return new DeviceExchangeAccessStateSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowedDeviceCount property value. Total count of devices with Exchange Access State: Allowed.
     * @return int|null
    */
    public function getAllowedDeviceCount(): ?int {
        return $this->getBackingStore()->get('allowedDeviceCount');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the blockedDeviceCount property value. Total count of devices with Exchange Access State: Blocked.
     * @return int|null
    */
    public function getBlockedDeviceCount(): ?int {
        return $this->getBackingStore()->get('blockedDeviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedDeviceCount' => fn(ParseNode $n) => $o->setAllowedDeviceCount($n->getIntegerValue()),
            'blockedDeviceCount' => fn(ParseNode $n) => $o->setBlockedDeviceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'quarantinedDeviceCount' => fn(ParseNode $n) => $o->setQuarantinedDeviceCount($n->getIntegerValue()),
            'unavailableDeviceCount' => fn(ParseNode $n) => $o->setUnavailableDeviceCount($n->getIntegerValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the quarantinedDeviceCount property value. Total count of devices with Exchange Access State: Quarantined.
     * @return int|null
    */
    public function getQuarantinedDeviceCount(): ?int {
        return $this->getBackingStore()->get('quarantinedDeviceCount');
    }

    /**
     * Gets the unavailableDeviceCount property value. Total count of devices for which no Exchange Access State could be found.
     * @return int|null
    */
    public function getUnavailableDeviceCount(): ?int {
        return $this->getBackingStore()->get('unavailableDeviceCount');
    }

    /**
     * Gets the unknownDeviceCount property value. Total count of devices with Exchange Access State: Unknown.
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->getBackingStore()->get('unknownDeviceCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('allowedDeviceCount', $this->getAllowedDeviceCount());
        $writer->writeIntegerValue('blockedDeviceCount', $this->getBlockedDeviceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('quarantinedDeviceCount', $this->getQuarantinedDeviceCount());
        $writer->writeIntegerValue('unavailableDeviceCount', $this->getUnavailableDeviceCount());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowedDeviceCount property value. Total count of devices with Exchange Access State: Allowed.
     * @param int|null $value Value to set for the allowedDeviceCount property.
    */
    public function setAllowedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('allowedDeviceCount', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the blockedDeviceCount property value. Total count of devices with Exchange Access State: Blocked.
     * @param int|null $value Value to set for the blockedDeviceCount property.
    */
    public function setBlockedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('blockedDeviceCount', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the quarantinedDeviceCount property value. Total count of devices with Exchange Access State: Quarantined.
     * @param int|null $value Value to set for the quarantinedDeviceCount property.
    */
    public function setQuarantinedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('quarantinedDeviceCount', $value);
    }

    /**
     * Sets the unavailableDeviceCount property value. Total count of devices for which no Exchange Access State could be found.
     * @param int|null $value Value to set for the unavailableDeviceCount property.
    */
    public function setUnavailableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unavailableDeviceCount', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. Total count of devices with Exchange Access State: Unknown.
     * @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

}
