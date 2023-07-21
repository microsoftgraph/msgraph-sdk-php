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
 * Device operating system summary.
*/
class DeviceOperatingSystemSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceOperatingSystemSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceOperatingSystemSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceOperatingSystemSummary {
        return new DeviceOperatingSystemSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the androidCorporateWorkProfileCount property value. The count of Corporate work profile Android devices. Also known as Corporate Owned Personally Enabled (COPE). Valid values -1 to 2147483647
     * @return int|null
    */
    public function getAndroidCorporateWorkProfileCount(): ?int {
        $val = $this->getBackingStore()->get('androidCorporateWorkProfileCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidCorporateWorkProfileCount'");
    }

    /**
     * Gets the androidCount property value. Number of android device count.
     * @return int|null
    */
    public function getAndroidCount(): ?int {
        $val = $this->getBackingStore()->get('androidCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidCount'");
    }

    /**
     * Gets the androidDedicatedCount property value. Number of dedicated Android devices.
     * @return int|null
    */
    public function getAndroidDedicatedCount(): ?int {
        $val = $this->getBackingStore()->get('androidDedicatedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidDedicatedCount'");
    }

    /**
     * Gets the androidDeviceAdminCount property value. Number of device admin Android devices.
     * @return int|null
    */
    public function getAndroidDeviceAdminCount(): ?int {
        $val = $this->getBackingStore()->get('androidDeviceAdminCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidDeviceAdminCount'");
    }

    /**
     * Gets the androidFullyManagedCount property value. Number of fully managed Android devices.
     * @return int|null
    */
    public function getAndroidFullyManagedCount(): ?int {
        $val = $this->getBackingStore()->get('androidFullyManagedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidFullyManagedCount'");
    }

    /**
     * Gets the androidWorkProfileCount property value. Number of work profile Android devices.
     * @return int|null
    */
    public function getAndroidWorkProfileCount(): ?int {
        $val = $this->getBackingStore()->get('androidWorkProfileCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidWorkProfileCount'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the configMgrDeviceCount property value. Number of ConfigMgr managed devices.
     * @return int|null
    */
    public function getConfigMgrDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('configMgrDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configMgrDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'androidCorporateWorkProfileCount' => fn(ParseNode $n) => $o->setAndroidCorporateWorkProfileCount($n->getIntegerValue()),
            'androidCount' => fn(ParseNode $n) => $o->setAndroidCount($n->getIntegerValue()),
            'androidDedicatedCount' => fn(ParseNode $n) => $o->setAndroidDedicatedCount($n->getIntegerValue()),
            'androidDeviceAdminCount' => fn(ParseNode $n) => $o->setAndroidDeviceAdminCount($n->getIntegerValue()),
            'androidFullyManagedCount' => fn(ParseNode $n) => $o->setAndroidFullyManagedCount($n->getIntegerValue()),
            'androidWorkProfileCount' => fn(ParseNode $n) => $o->setAndroidWorkProfileCount($n->getIntegerValue()),
            'configMgrDeviceCount' => fn(ParseNode $n) => $o->setConfigMgrDeviceCount($n->getIntegerValue()),
            'iosCount' => fn(ParseNode $n) => $o->setIosCount($n->getIntegerValue()),
            'macOSCount' => fn(ParseNode $n) => $o->setMacOSCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'unknownCount' => fn(ParseNode $n) => $o->setUnknownCount($n->getIntegerValue()),
            'windowsCount' => fn(ParseNode $n) => $o->setWindowsCount($n->getIntegerValue()),
            'windowsMobileCount' => fn(ParseNode $n) => $o->setWindowsMobileCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the iosCount property value. Number of iOS device count.
     * @return int|null
    */
    public function getIosCount(): ?int {
        $val = $this->getBackingStore()->get('iosCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosCount'");
    }

    /**
     * Gets the macOSCount property value. Number of Mac OS X device count.
     * @return int|null
    */
    public function getMacOSCount(): ?int {
        $val = $this->getBackingStore()->get('macOSCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macOSCount'");
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
     * Gets the unknownCount property value. Number of unknown device count.
     * @return int|null
    */
    public function getUnknownCount(): ?int {
        $val = $this->getBackingStore()->get('unknownCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownCount'");
    }

    /**
     * Gets the windowsCount property value. Number of Windows device count.
     * @return int|null
    */
    public function getWindowsCount(): ?int {
        $val = $this->getBackingStore()->get('windowsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsCount'");
    }

    /**
     * Gets the windowsMobileCount property value. Number of Windows mobile device count.
     * @return int|null
    */
    public function getWindowsMobileCount(): ?int {
        $val = $this->getBackingStore()->get('windowsMobileCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsMobileCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('androidCorporateWorkProfileCount', $this->getAndroidCorporateWorkProfileCount());
        $writer->writeIntegerValue('androidCount', $this->getAndroidCount());
        $writer->writeIntegerValue('androidDedicatedCount', $this->getAndroidDedicatedCount());
        $writer->writeIntegerValue('androidDeviceAdminCount', $this->getAndroidDeviceAdminCount());
        $writer->writeIntegerValue('androidFullyManagedCount', $this->getAndroidFullyManagedCount());
        $writer->writeIntegerValue('androidWorkProfileCount', $this->getAndroidWorkProfileCount());
        $writer->writeIntegerValue('configMgrDeviceCount', $this->getConfigMgrDeviceCount());
        $writer->writeIntegerValue('iosCount', $this->getIosCount());
        $writer->writeIntegerValue('macOSCount', $this->getMacOSCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('unknownCount', $this->getUnknownCount());
        $writer->writeIntegerValue('windowsCount', $this->getWindowsCount());
        $writer->writeIntegerValue('windowsMobileCount', $this->getWindowsMobileCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the androidCorporateWorkProfileCount property value. The count of Corporate work profile Android devices. Also known as Corporate Owned Personally Enabled (COPE). Valid values -1 to 2147483647
     * @param int|null $value Value to set for the androidCorporateWorkProfileCount property.
    */
    public function setAndroidCorporateWorkProfileCount(?int $value): void {
        $this->getBackingStore()->set('androidCorporateWorkProfileCount', $value);
    }

    /**
     * Sets the androidCount property value. Number of android device count.
     * @param int|null $value Value to set for the androidCount property.
    */
    public function setAndroidCount(?int $value): void {
        $this->getBackingStore()->set('androidCount', $value);
    }

    /**
     * Sets the androidDedicatedCount property value. Number of dedicated Android devices.
     * @param int|null $value Value to set for the androidDedicatedCount property.
    */
    public function setAndroidDedicatedCount(?int $value): void {
        $this->getBackingStore()->set('androidDedicatedCount', $value);
    }

    /**
     * Sets the androidDeviceAdminCount property value. Number of device admin Android devices.
     * @param int|null $value Value to set for the androidDeviceAdminCount property.
    */
    public function setAndroidDeviceAdminCount(?int $value): void {
        $this->getBackingStore()->set('androidDeviceAdminCount', $value);
    }

    /**
     * Sets the androidFullyManagedCount property value. Number of fully managed Android devices.
     * @param int|null $value Value to set for the androidFullyManagedCount property.
    */
    public function setAndroidFullyManagedCount(?int $value): void {
        $this->getBackingStore()->set('androidFullyManagedCount', $value);
    }

    /**
     * Sets the androidWorkProfileCount property value. Number of work profile Android devices.
     * @param int|null $value Value to set for the androidWorkProfileCount property.
    */
    public function setAndroidWorkProfileCount(?int $value): void {
        $this->getBackingStore()->set('androidWorkProfileCount', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the configMgrDeviceCount property value. Number of ConfigMgr managed devices.
     * @param int|null $value Value to set for the configMgrDeviceCount property.
    */
    public function setConfigMgrDeviceCount(?int $value): void {
        $this->getBackingStore()->set('configMgrDeviceCount', $value);
    }

    /**
     * Sets the iosCount property value. Number of iOS device count.
     * @param int|null $value Value to set for the iosCount property.
    */
    public function setIosCount(?int $value): void {
        $this->getBackingStore()->set('iosCount', $value);
    }

    /**
     * Sets the macOSCount property value. Number of Mac OS X device count.
     * @param int|null $value Value to set for the macOSCount property.
    */
    public function setMacOSCount(?int $value): void {
        $this->getBackingStore()->set('macOSCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the unknownCount property value. Number of unknown device count.
     * @param int|null $value Value to set for the unknownCount property.
    */
    public function setUnknownCount(?int $value): void {
        $this->getBackingStore()->set('unknownCount', $value);
    }

    /**
     * Sets the windowsCount property value. Number of Windows device count.
     * @param int|null $value Value to set for the windowsCount property.
    */
    public function setWindowsCount(?int $value): void {
        $this->getBackingStore()->set('windowsCount', $value);
    }

    /**
     * Sets the windowsMobileCount property value. Number of Windows mobile device count.
     * @param int|null $value Value to set for the windowsMobileCount property.
    */
    public function setWindowsMobileCount(?int $value): void {
        $this->getBackingStore()->set('windowsMobileCount', $value);
    }

}
