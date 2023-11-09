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
 * Hardware information of a given device.
*/
class DeviceProtectionOverview implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceProtectionOverview and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceProtectionOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceProtectionOverview {
        return new DeviceProtectionOverview();
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
     * Gets the cleanDeviceCount property value. Indicates number of devices reporting as clean
     * @return int|null
    */
    public function getCleanDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('cleanDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cleanDeviceCount'");
    }

    /**
     * Gets the criticalFailuresDeviceCount property value. Indicates number of devices with critical failures
     * @return int|null
    */
    public function getCriticalFailuresDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('criticalFailuresDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'criticalFailuresDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cleanDeviceCount' => fn(ParseNode $n) => $o->setCleanDeviceCount($n->getIntegerValue()),
            'criticalFailuresDeviceCount' => fn(ParseNode $n) => $o->setCriticalFailuresDeviceCount($n->getIntegerValue()),
            'inactiveThreatAgentDeviceCount' => fn(ParseNode $n) => $o->setInactiveThreatAgentDeviceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pendingFullScanDeviceCount' => fn(ParseNode $n) => $o->setPendingFullScanDeviceCount($n->getIntegerValue()),
            'pendingManualStepsDeviceCount' => fn(ParseNode $n) => $o->setPendingManualStepsDeviceCount($n->getIntegerValue()),
            'pendingOfflineScanDeviceCount' => fn(ParseNode $n) => $o->setPendingOfflineScanDeviceCount($n->getIntegerValue()),
            'pendingQuickScanDeviceCount' => fn(ParseNode $n) => $o->setPendingQuickScanDeviceCount($n->getIntegerValue()),
            'pendingRestartDeviceCount' => fn(ParseNode $n) => $o->setPendingRestartDeviceCount($n->getIntegerValue()),
            'pendingSignatureUpdateDeviceCount' => fn(ParseNode $n) => $o->setPendingSignatureUpdateDeviceCount($n->getIntegerValue()),
            'totalReportedDeviceCount' => fn(ParseNode $n) => $o->setTotalReportedDeviceCount($n->getIntegerValue()),
            'unknownStateThreatAgentDeviceCount' => fn(ParseNode $n) => $o->setUnknownStateThreatAgentDeviceCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inactiveThreatAgentDeviceCount property value. Indicates number of devices with inactive threat agent
     * @return int|null
    */
    public function getInactiveThreatAgentDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('inactiveThreatAgentDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactiveThreatAgentDeviceCount'");
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
     * Gets the pendingFullScanDeviceCount property value. Indicates number of devices pending full scan
     * @return int|null
    */
    public function getPendingFullScanDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('pendingFullScanDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingFullScanDeviceCount'");
    }

    /**
     * Gets the pendingManualStepsDeviceCount property value. Indicates number of devices with pending manual steps
     * @return int|null
    */
    public function getPendingManualStepsDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('pendingManualStepsDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingManualStepsDeviceCount'");
    }

    /**
     * Gets the pendingOfflineScanDeviceCount property value. Indicates number of pending offline scan devices
     * @return int|null
    */
    public function getPendingOfflineScanDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('pendingOfflineScanDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingOfflineScanDeviceCount'");
    }

    /**
     * Gets the pendingQuickScanDeviceCount property value. Indicates the number of devices that have a pending full scan. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getPendingQuickScanDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('pendingQuickScanDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingQuickScanDeviceCount'");
    }

    /**
     * Gets the pendingRestartDeviceCount property value. Indicates number of devices pending restart
     * @return int|null
    */
    public function getPendingRestartDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('pendingRestartDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingRestartDeviceCount'");
    }

    /**
     * Gets the pendingSignatureUpdateDeviceCount property value. Indicates number of devices with an old signature
     * @return int|null
    */
    public function getPendingSignatureUpdateDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('pendingSignatureUpdateDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingSignatureUpdateDeviceCount'");
    }

    /**
     * Gets the totalReportedDeviceCount property value. Total device count.
     * @return int|null
    */
    public function getTotalReportedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('totalReportedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalReportedDeviceCount'");
    }

    /**
     * Gets the unknownStateThreatAgentDeviceCount property value. Indicates number of devices with threat agent state as unknown
     * @return int|null
    */
    public function getUnknownStateThreatAgentDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('unknownStateThreatAgentDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownStateThreatAgentDeviceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('cleanDeviceCount', $this->getCleanDeviceCount());
        $writer->writeIntegerValue('criticalFailuresDeviceCount', $this->getCriticalFailuresDeviceCount());
        $writer->writeIntegerValue('inactiveThreatAgentDeviceCount', $this->getInactiveThreatAgentDeviceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('pendingFullScanDeviceCount', $this->getPendingFullScanDeviceCount());
        $writer->writeIntegerValue('pendingManualStepsDeviceCount', $this->getPendingManualStepsDeviceCount());
        $writer->writeIntegerValue('pendingOfflineScanDeviceCount', $this->getPendingOfflineScanDeviceCount());
        $writer->writeIntegerValue('pendingQuickScanDeviceCount', $this->getPendingQuickScanDeviceCount());
        $writer->writeIntegerValue('pendingRestartDeviceCount', $this->getPendingRestartDeviceCount());
        $writer->writeIntegerValue('pendingSignatureUpdateDeviceCount', $this->getPendingSignatureUpdateDeviceCount());
        $writer->writeIntegerValue('totalReportedDeviceCount', $this->getTotalReportedDeviceCount());
        $writer->writeIntegerValue('unknownStateThreatAgentDeviceCount', $this->getUnknownStateThreatAgentDeviceCount());
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
     * Sets the cleanDeviceCount property value. Indicates number of devices reporting as clean
     * @param int|null $value Value to set for the cleanDeviceCount property.
    */
    public function setCleanDeviceCount(?int $value): void {
        $this->getBackingStore()->set('cleanDeviceCount', $value);
    }

    /**
     * Sets the criticalFailuresDeviceCount property value. Indicates number of devices with critical failures
     * @param int|null $value Value to set for the criticalFailuresDeviceCount property.
    */
    public function setCriticalFailuresDeviceCount(?int $value): void {
        $this->getBackingStore()->set('criticalFailuresDeviceCount', $value);
    }

    /**
     * Sets the inactiveThreatAgentDeviceCount property value. Indicates number of devices with inactive threat agent
     * @param int|null $value Value to set for the inactiveThreatAgentDeviceCount property.
    */
    public function setInactiveThreatAgentDeviceCount(?int $value): void {
        $this->getBackingStore()->set('inactiveThreatAgentDeviceCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pendingFullScanDeviceCount property value. Indicates number of devices pending full scan
     * @param int|null $value Value to set for the pendingFullScanDeviceCount property.
    */
    public function setPendingFullScanDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingFullScanDeviceCount', $value);
    }

    /**
     * Sets the pendingManualStepsDeviceCount property value. Indicates number of devices with pending manual steps
     * @param int|null $value Value to set for the pendingManualStepsDeviceCount property.
    */
    public function setPendingManualStepsDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingManualStepsDeviceCount', $value);
    }

    /**
     * Sets the pendingOfflineScanDeviceCount property value. Indicates number of pending offline scan devices
     * @param int|null $value Value to set for the pendingOfflineScanDeviceCount property.
    */
    public function setPendingOfflineScanDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingOfflineScanDeviceCount', $value);
    }

    /**
     * Sets the pendingQuickScanDeviceCount property value. Indicates the number of devices that have a pending full scan. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the pendingQuickScanDeviceCount property.
    */
    public function setPendingQuickScanDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingQuickScanDeviceCount', $value);
    }

    /**
     * Sets the pendingRestartDeviceCount property value. Indicates number of devices pending restart
     * @param int|null $value Value to set for the pendingRestartDeviceCount property.
    */
    public function setPendingRestartDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingRestartDeviceCount', $value);
    }

    /**
     * Sets the pendingSignatureUpdateDeviceCount property value. Indicates number of devices with an old signature
     * @param int|null $value Value to set for the pendingSignatureUpdateDeviceCount property.
    */
    public function setPendingSignatureUpdateDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingSignatureUpdateDeviceCount', $value);
    }

    /**
     * Sets the totalReportedDeviceCount property value. Total device count.
     * @param int|null $value Value to set for the totalReportedDeviceCount property.
    */
    public function setTotalReportedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('totalReportedDeviceCount', $value);
    }

    /**
     * Sets the unknownStateThreatAgentDeviceCount property value. Indicates number of devices with threat agent state as unknown
     * @param int|null $value Value to set for the unknownStateThreatAgentDeviceCount property.
    */
    public function setUnknownStateThreatAgentDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownStateThreatAgentDeviceCount', $value);
    }

}
