<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Device protection status entity.
*/
class WindowsProtectionState extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsProtectionState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsProtectionState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsProtectionState {
        return new WindowsProtectionState();
    }

    /**
     * Gets the antiMalwareVersion property value. Current anti malware version
     * @return string|null
    */
    public function getAntiMalwareVersion(): ?string {
        $val = $this->getBackingStore()->get('antiMalwareVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'antiMalwareVersion'");
    }

    /**
     * Gets the detectedMalwareState property value. Device malware list
     * @return array<WindowsDeviceMalwareState>|null
    */
    public function getDetectedMalwareState(): ?array {
        $val = $this->getBackingStore()->get('detectedMalwareState');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsDeviceMalwareState::class);
            /** @var array<WindowsDeviceMalwareState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectedMalwareState'");
    }

    /**
     * Gets the deviceState property value. Indicates device's health state. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical.
     * @return WindowsDeviceHealthState|null
    */
    public function getDeviceState(): ?WindowsDeviceHealthState {
        $val = $this->getBackingStore()->get('deviceState');
        if (is_null($val) || $val instanceof WindowsDeviceHealthState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceState'");
    }

    /**
     * Gets the engineVersion property value. Current endpoint protection engine's version
     * @return string|null
    */
    public function getEngineVersion(): ?string {
        $val = $this->getBackingStore()->get('engineVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'engineVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'antiMalwareVersion' => fn(ParseNode $n) => $o->setAntiMalwareVersion($n->getStringValue()),
            'detectedMalwareState' => fn(ParseNode $n) => $o->setDetectedMalwareState($n->getCollectionOfObjectValues([WindowsDeviceMalwareState::class, 'createFromDiscriminatorValue'])),
            'deviceState' => fn(ParseNode $n) => $o->setDeviceState($n->getEnumValue(WindowsDeviceHealthState::class)),
            'engineVersion' => fn(ParseNode $n) => $o->setEngineVersion($n->getStringValue()),
            'fullScanOverdue' => fn(ParseNode $n) => $o->setFullScanOverdue($n->getBooleanValue()),
            'fullScanRequired' => fn(ParseNode $n) => $o->setFullScanRequired($n->getBooleanValue()),
            'isVirtualMachine' => fn(ParseNode $n) => $o->setIsVirtualMachine($n->getBooleanValue()),
            'lastFullScanDateTime' => fn(ParseNode $n) => $o->setLastFullScanDateTime($n->getDateTimeValue()),
            'lastFullScanSignatureVersion' => fn(ParseNode $n) => $o->setLastFullScanSignatureVersion($n->getStringValue()),
            'lastQuickScanDateTime' => fn(ParseNode $n) => $o->setLastQuickScanDateTime($n->getDateTimeValue()),
            'lastQuickScanSignatureVersion' => fn(ParseNode $n) => $o->setLastQuickScanSignatureVersion($n->getStringValue()),
            'lastReportedDateTime' => fn(ParseNode $n) => $o->setLastReportedDateTime($n->getDateTimeValue()),
            'malwareProtectionEnabled' => fn(ParseNode $n) => $o->setMalwareProtectionEnabled($n->getBooleanValue()),
            'networkInspectionSystemEnabled' => fn(ParseNode $n) => $o->setNetworkInspectionSystemEnabled($n->getBooleanValue()),
            'productStatus' => fn(ParseNode $n) => $o->setProductStatus($n->getEnumValue(WindowsDefenderProductStatus::class)),
            'quickScanOverdue' => fn(ParseNode $n) => $o->setQuickScanOverdue($n->getBooleanValue()),
            'realTimeProtectionEnabled' => fn(ParseNode $n) => $o->setRealTimeProtectionEnabled($n->getBooleanValue()),
            'rebootRequired' => fn(ParseNode $n) => $o->setRebootRequired($n->getBooleanValue()),
            'signatureUpdateOverdue' => fn(ParseNode $n) => $o->setSignatureUpdateOverdue($n->getBooleanValue()),
            'signatureVersion' => fn(ParseNode $n) => $o->setSignatureVersion($n->getStringValue()),
            'tamperProtectionEnabled' => fn(ParseNode $n) => $o->setTamperProtectionEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the fullScanOverdue property value. When TRUE indicates full scan is overdue, when FALSE indicates full scan is not overdue. Defaults to setting on client device.
     * @return bool|null
    */
    public function getFullScanOverdue(): ?bool {
        $val = $this->getBackingStore()->get('fullScanOverdue');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fullScanOverdue'");
    }

    /**
     * Gets the fullScanRequired property value. When TRUE indicates full scan is required, when FALSE indicates full scan is not required. Defaults to setting on client device.
     * @return bool|null
    */
    public function getFullScanRequired(): ?bool {
        $val = $this->getBackingStore()->get('fullScanRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fullScanRequired'");
    }

    /**
     * Gets the isVirtualMachine property value. When TRUE indicates the device is a virtual machine, when FALSE indicates the device is not a virtual machine. Defaults to setting on client device.
     * @return bool|null
    */
    public function getIsVirtualMachine(): ?bool {
        $val = $this->getBackingStore()->get('isVirtualMachine');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isVirtualMachine'");
    }

    /**
     * Gets the lastFullScanDateTime property value. Last quick scan datetime
     * @return DateTime|null
    */
    public function getLastFullScanDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastFullScanDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastFullScanDateTime'");
    }

    /**
     * Gets the lastFullScanSignatureVersion property value. Last full scan signature version
     * @return string|null
    */
    public function getLastFullScanSignatureVersion(): ?string {
        $val = $this->getBackingStore()->get('lastFullScanSignatureVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastFullScanSignatureVersion'");
    }

    /**
     * Gets the lastQuickScanDateTime property value. Last quick scan datetime
     * @return DateTime|null
    */
    public function getLastQuickScanDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastQuickScanDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastQuickScanDateTime'");
    }

    /**
     * Gets the lastQuickScanSignatureVersion property value. Last quick scan signature version
     * @return string|null
    */
    public function getLastQuickScanSignatureVersion(): ?string {
        $val = $this->getBackingStore()->get('lastQuickScanSignatureVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastQuickScanSignatureVersion'");
    }

    /**
     * Gets the lastReportedDateTime property value. Last device health status reported time
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastReportedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastReportedDateTime'");
    }

    /**
     * Gets the malwareProtectionEnabled property value. When TRUE indicates anti malware is enabled when FALSE indicates anti malware is not enabled.
     * @return bool|null
    */
    public function getMalwareProtectionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('malwareProtectionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'malwareProtectionEnabled'");
    }

    /**
     * Gets the networkInspectionSystemEnabled property value. When TRUE indicates network inspection system enabled, when FALSE indicates network inspection system is not enabled. Defaults to setting on client device.
     * @return bool|null
    */
    public function getNetworkInspectionSystemEnabled(): ?bool {
        $val = $this->getBackingStore()->get('networkInspectionSystemEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkInspectionSystemEnabled'");
    }

    /**
     * Gets the productStatus property value. Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall.
     * @return WindowsDefenderProductStatus|null
    */
    public function getProductStatus(): ?WindowsDefenderProductStatus {
        $val = $this->getBackingStore()->get('productStatus');
        if (is_null($val) || $val instanceof WindowsDefenderProductStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productStatus'");
    }

    /**
     * Gets the quickScanOverdue property value. When TRUE indicates quick scan is overdue, when FALSE indicates quick scan is not overdue. Defaults to setting on client device.
     * @return bool|null
    */
    public function getQuickScanOverdue(): ?bool {
        $val = $this->getBackingStore()->get('quickScanOverdue');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quickScanOverdue'");
    }

    /**
     * Gets the realTimeProtectionEnabled property value. When TRUE indicates real time protection is enabled, when FALSE indicates real time protection is not enabled. Defaults to setting on client device.
     * @return bool|null
    */
    public function getRealTimeProtectionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('realTimeProtectionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'realTimeProtectionEnabled'");
    }

    /**
     * Gets the rebootRequired property value. When TRUE indicates reboot is required, when FALSE indicates when TRUE indicates reboot is not required. Defaults to setting on client device.
     * @return bool|null
    */
    public function getRebootRequired(): ?bool {
        $val = $this->getBackingStore()->get('rebootRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rebootRequired'");
    }

    /**
     * Gets the signatureUpdateOverdue property value. When TRUE indicates signature is out of date, when FALSE indicates signature is not out of date. Defaults to setting on client device.
     * @return bool|null
    */
    public function getSignatureUpdateOverdue(): ?bool {
        $val = $this->getBackingStore()->get('signatureUpdateOverdue');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signatureUpdateOverdue'");
    }

    /**
     * Gets the signatureVersion property value. Current malware definitions version
     * @return string|null
    */
    public function getSignatureVersion(): ?string {
        $val = $this->getBackingStore()->get('signatureVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signatureVersion'");
    }

    /**
     * Gets the tamperProtectionEnabled property value. When TRUE indicates the Windows Defender tamper protection feature is enabled, when FALSE indicates the Windows Defender tamper protection feature is not enabled. Defaults to setting on client device.
     * @return bool|null
    */
    public function getTamperProtectionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('tamperProtectionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tamperProtectionEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('antiMalwareVersion', $this->getAntiMalwareVersion());
        $writer->writeCollectionOfObjectValues('detectedMalwareState', $this->getDetectedMalwareState());
        $writer->writeEnumValue('deviceState', $this->getDeviceState());
        $writer->writeStringValue('engineVersion', $this->getEngineVersion());
        $writer->writeBooleanValue('fullScanOverdue', $this->getFullScanOverdue());
        $writer->writeBooleanValue('fullScanRequired', $this->getFullScanRequired());
        $writer->writeBooleanValue('isVirtualMachine', $this->getIsVirtualMachine());
        $writer->writeDateTimeValue('lastFullScanDateTime', $this->getLastFullScanDateTime());
        $writer->writeStringValue('lastFullScanSignatureVersion', $this->getLastFullScanSignatureVersion());
        $writer->writeDateTimeValue('lastQuickScanDateTime', $this->getLastQuickScanDateTime());
        $writer->writeStringValue('lastQuickScanSignatureVersion', $this->getLastQuickScanSignatureVersion());
        $writer->writeDateTimeValue('lastReportedDateTime', $this->getLastReportedDateTime());
        $writer->writeBooleanValue('malwareProtectionEnabled', $this->getMalwareProtectionEnabled());
        $writer->writeBooleanValue('networkInspectionSystemEnabled', $this->getNetworkInspectionSystemEnabled());
        $writer->writeEnumValue('productStatus', $this->getProductStatus());
        $writer->writeBooleanValue('quickScanOverdue', $this->getQuickScanOverdue());
        $writer->writeBooleanValue('realTimeProtectionEnabled', $this->getRealTimeProtectionEnabled());
        $writer->writeBooleanValue('rebootRequired', $this->getRebootRequired());
        $writer->writeBooleanValue('signatureUpdateOverdue', $this->getSignatureUpdateOverdue());
        $writer->writeStringValue('signatureVersion', $this->getSignatureVersion());
        $writer->writeBooleanValue('tamperProtectionEnabled', $this->getTamperProtectionEnabled());
    }

    /**
     * Sets the antiMalwareVersion property value. Current anti malware version
     * @param string|null $value Value to set for the antiMalwareVersion property.
    */
    public function setAntiMalwareVersion(?string $value): void {
        $this->getBackingStore()->set('antiMalwareVersion', $value);
    }

    /**
     * Sets the detectedMalwareState property value. Device malware list
     * @param array<WindowsDeviceMalwareState>|null $value Value to set for the detectedMalwareState property.
    */
    public function setDetectedMalwareState(?array $value): void {
        $this->getBackingStore()->set('detectedMalwareState', $value);
    }

    /**
     * Sets the deviceState property value. Indicates device's health state. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical.
     * @param WindowsDeviceHealthState|null $value Value to set for the deviceState property.
    */
    public function setDeviceState(?WindowsDeviceHealthState $value): void {
        $this->getBackingStore()->set('deviceState', $value);
    }

    /**
     * Sets the engineVersion property value. Current endpoint protection engine's version
     * @param string|null $value Value to set for the engineVersion property.
    */
    public function setEngineVersion(?string $value): void {
        $this->getBackingStore()->set('engineVersion', $value);
    }

    /**
     * Sets the fullScanOverdue property value. When TRUE indicates full scan is overdue, when FALSE indicates full scan is not overdue. Defaults to setting on client device.
     * @param bool|null $value Value to set for the fullScanOverdue property.
    */
    public function setFullScanOverdue(?bool $value): void {
        $this->getBackingStore()->set('fullScanOverdue', $value);
    }

    /**
     * Sets the fullScanRequired property value. When TRUE indicates full scan is required, when FALSE indicates full scan is not required. Defaults to setting on client device.
     * @param bool|null $value Value to set for the fullScanRequired property.
    */
    public function setFullScanRequired(?bool $value): void {
        $this->getBackingStore()->set('fullScanRequired', $value);
    }

    /**
     * Sets the isVirtualMachine property value. When TRUE indicates the device is a virtual machine, when FALSE indicates the device is not a virtual machine. Defaults to setting on client device.
     * @param bool|null $value Value to set for the isVirtualMachine property.
    */
    public function setIsVirtualMachine(?bool $value): void {
        $this->getBackingStore()->set('isVirtualMachine', $value);
    }

    /**
     * Sets the lastFullScanDateTime property value. Last quick scan datetime
     * @param DateTime|null $value Value to set for the lastFullScanDateTime property.
    */
    public function setLastFullScanDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastFullScanDateTime', $value);
    }

    /**
     * Sets the lastFullScanSignatureVersion property value. Last full scan signature version
     * @param string|null $value Value to set for the lastFullScanSignatureVersion property.
    */
    public function setLastFullScanSignatureVersion(?string $value): void {
        $this->getBackingStore()->set('lastFullScanSignatureVersion', $value);
    }

    /**
     * Sets the lastQuickScanDateTime property value. Last quick scan datetime
     * @param DateTime|null $value Value to set for the lastQuickScanDateTime property.
    */
    public function setLastQuickScanDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastQuickScanDateTime', $value);
    }

    /**
     * Sets the lastQuickScanSignatureVersion property value. Last quick scan signature version
     * @param string|null $value Value to set for the lastQuickScanSignatureVersion property.
    */
    public function setLastQuickScanSignatureVersion(?string $value): void {
        $this->getBackingStore()->set('lastQuickScanSignatureVersion', $value);
    }

    /**
     * Sets the lastReportedDateTime property value. Last device health status reported time
     * @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastReportedDateTime', $value);
    }

    /**
     * Sets the malwareProtectionEnabled property value. When TRUE indicates anti malware is enabled when FALSE indicates anti malware is not enabled.
     * @param bool|null $value Value to set for the malwareProtectionEnabled property.
    */
    public function setMalwareProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('malwareProtectionEnabled', $value);
    }

    /**
     * Sets the networkInspectionSystemEnabled property value. When TRUE indicates network inspection system enabled, when FALSE indicates network inspection system is not enabled. Defaults to setting on client device.
     * @param bool|null $value Value to set for the networkInspectionSystemEnabled property.
    */
    public function setNetworkInspectionSystemEnabled(?bool $value): void {
        $this->getBackingStore()->set('networkInspectionSystemEnabled', $value);
    }

    /**
     * Sets the productStatus property value. Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall.
     * @param WindowsDefenderProductStatus|null $value Value to set for the productStatus property.
    */
    public function setProductStatus(?WindowsDefenderProductStatus $value): void {
        $this->getBackingStore()->set('productStatus', $value);
    }

    /**
     * Sets the quickScanOverdue property value. When TRUE indicates quick scan is overdue, when FALSE indicates quick scan is not overdue. Defaults to setting on client device.
     * @param bool|null $value Value to set for the quickScanOverdue property.
    */
    public function setQuickScanOverdue(?bool $value): void {
        $this->getBackingStore()->set('quickScanOverdue', $value);
    }

    /**
     * Sets the realTimeProtectionEnabled property value. When TRUE indicates real time protection is enabled, when FALSE indicates real time protection is not enabled. Defaults to setting on client device.
     * @param bool|null $value Value to set for the realTimeProtectionEnabled property.
    */
    public function setRealTimeProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('realTimeProtectionEnabled', $value);
    }

    /**
     * Sets the rebootRequired property value. When TRUE indicates reboot is required, when FALSE indicates when TRUE indicates reboot is not required. Defaults to setting on client device.
     * @param bool|null $value Value to set for the rebootRequired property.
    */
    public function setRebootRequired(?bool $value): void {
        $this->getBackingStore()->set('rebootRequired', $value);
    }

    /**
     * Sets the signatureUpdateOverdue property value. When TRUE indicates signature is out of date, when FALSE indicates signature is not out of date. Defaults to setting on client device.
     * @param bool|null $value Value to set for the signatureUpdateOverdue property.
    */
    public function setSignatureUpdateOverdue(?bool $value): void {
        $this->getBackingStore()->set('signatureUpdateOverdue', $value);
    }

    /**
     * Sets the signatureVersion property value. Current malware definitions version
     * @param string|null $value Value to set for the signatureVersion property.
    */
    public function setSignatureVersion(?string $value): void {
        $this->getBackingStore()->set('signatureVersion', $value);
    }

    /**
     * Sets the tamperProtectionEnabled property value. When TRUE indicates the Windows Defender tamper protection feature is enabled, when FALSE indicates the Windows Defender tamper protection feature is not enabled. Defaults to setting on client device.
     * @param bool|null $value Value to set for the tamperProtectionEnabled property.
    */
    public function setTamperProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('tamperProtectionEnabled', $value);
    }

}
