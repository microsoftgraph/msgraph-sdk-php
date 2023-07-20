<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The windowsAutopilotDeviceIdentity resource represents a Windows Autopilot Device.
*/
class WindowsAutopilotDeviceIdentity extends Entity implements Parsable 
{
    /**
     * Instantiates a new windowsAutopilotDeviceIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAutopilotDeviceIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAutopilotDeviceIdentity {
        return new WindowsAutopilotDeviceIdentity();
    }

    /**
     * Gets the addressableUserName property value. Addressable user name.
     * @return string|null
    */
    public function getAddressableUserName(): ?string {
        $val = $this->getBackingStore()->get('addressableUserName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addressableUserName'");
    }

    /**
     * Gets the azureActiveDirectoryDeviceId property value. AAD Device ID - to be deprecated
     * @return string|null
    */
    public function getAzureActiveDirectoryDeviceId(): ?string {
        $val = $this->getBackingStore()->get('azureActiveDirectoryDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureActiveDirectoryDeviceId'");
    }

    /**
     * Gets the displayName property value. Display Name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the enrollmentState property value. The enrollmentState property
     * @return EnrollmentState|null
    */
    public function getEnrollmentState(): ?EnrollmentState {
        $val = $this->getBackingStore()->get('enrollmentState');
        if (is_null($val) || $val instanceof EnrollmentState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentState'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addressableUserName' => fn(ParseNode $n) => $o->setAddressableUserName($n->getStringValue()),
            'azureActiveDirectoryDeviceId' => fn(ParseNode $n) => $o->setAzureActiveDirectoryDeviceId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enrollmentState' => fn(ParseNode $n) => $o->setEnrollmentState($n->getEnumValue(EnrollmentState::class)),
            'groupTag' => fn(ParseNode $n) => $o->setGroupTag($n->getStringValue()),
            'lastContactedDateTime' => fn(ParseNode $n) => $o->setLastContactedDateTime($n->getDateTimeValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'productKey' => fn(ParseNode $n) => $o->setProductKey($n->getStringValue()),
            'purchaseOrderIdentifier' => fn(ParseNode $n) => $o->setPurchaseOrderIdentifier($n->getStringValue()),
            'resourceName' => fn(ParseNode $n) => $o->setResourceName($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'skuNumber' => fn(ParseNode $n) => $o->setSkuNumber($n->getStringValue()),
            'systemFamily' => fn(ParseNode $n) => $o->setSystemFamily($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupTag property value. Group Tag of the Windows autopilot device.
     * @return string|null
    */
    public function getGroupTag(): ?string {
        $val = $this->getBackingStore()->get('groupTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupTag'");
    }

    /**
     * Gets the lastContactedDateTime property value. Intune Last Contacted Date Time of the Windows autopilot device.
     * @return DateTime|null
    */
    public function getLastContactedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastContactedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastContactedDateTime'");
    }

    /**
     * Gets the managedDeviceId property value. Managed Device ID
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceId'");
    }

    /**
     * Gets the manufacturer property value. Oem manufacturer of the Windows autopilot device.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the model property value. Model name of the Windows autopilot device.
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
    }

    /**
     * Gets the productKey property value. Product Key of the Windows autopilot device.
     * @return string|null
    */
    public function getProductKey(): ?string {
        $val = $this->getBackingStore()->get('productKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productKey'");
    }

    /**
     * Gets the purchaseOrderIdentifier property value. Purchase Order Identifier of the Windows autopilot device.
     * @return string|null
    */
    public function getPurchaseOrderIdentifier(): ?string {
        $val = $this->getBackingStore()->get('purchaseOrderIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'purchaseOrderIdentifier'");
    }

    /**
     * Gets the resourceName property value. Resource Name.
     * @return string|null
    */
    public function getResourceName(): ?string {
        $val = $this->getBackingStore()->get('resourceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceName'");
    }

    /**
     * Gets the serialNumber property value. Serial number of the Windows autopilot device.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Gets the skuNumber property value. SKU Number
     * @return string|null
    */
    public function getSkuNumber(): ?string {
        $val = $this->getBackingStore()->get('skuNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuNumber'");
    }

    /**
     * Gets the systemFamily property value. System Family
     * @return string|null
    */
    public function getSystemFamily(): ?string {
        $val = $this->getBackingStore()->get('systemFamily');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemFamily'");
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('addressableUserName', $this->getAddressableUserName());
        $writer->writeStringValue('azureActiveDirectoryDeviceId', $this->getAzureActiveDirectoryDeviceId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('enrollmentState', $this->getEnrollmentState());
        $writer->writeStringValue('groupTag', $this->getGroupTag());
        $writer->writeDateTimeValue('lastContactedDateTime', $this->getLastContactedDateTime());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('productKey', $this->getProductKey());
        $writer->writeStringValue('purchaseOrderIdentifier', $this->getPurchaseOrderIdentifier());
        $writer->writeStringValue('resourceName', $this->getResourceName());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeStringValue('skuNumber', $this->getSkuNumber());
        $writer->writeStringValue('systemFamily', $this->getSystemFamily());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the addressableUserName property value. Addressable user name.
     * @param string|null $value Value to set for the addressableUserName property.
    */
    public function setAddressableUserName(?string $value): void {
        $this->getBackingStore()->set('addressableUserName', $value);
    }

    /**
     * Sets the azureActiveDirectoryDeviceId property value. AAD Device ID - to be deprecated
     * @param string|null $value Value to set for the azureActiveDirectoryDeviceId property.
    */
    public function setAzureActiveDirectoryDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureActiveDirectoryDeviceId', $value);
    }

    /**
     * Sets the displayName property value. Display Name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enrollmentState property value. The enrollmentState property
     * @param EnrollmentState|null $value Value to set for the enrollmentState property.
    */
    public function setEnrollmentState(?EnrollmentState $value): void {
        $this->getBackingStore()->set('enrollmentState', $value);
    }

    /**
     * Sets the groupTag property value. Group Tag of the Windows autopilot device.
     * @param string|null $value Value to set for the groupTag property.
    */
    public function setGroupTag(?string $value): void {
        $this->getBackingStore()->set('groupTag', $value);
    }

    /**
     * Sets the lastContactedDateTime property value. Intune Last Contacted Date Time of the Windows autopilot device.
     * @param DateTime|null $value Value to set for the lastContactedDateTime property.
    */
    public function setLastContactedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastContactedDateTime', $value);
    }

    /**
     * Sets the managedDeviceId property value. Managed Device ID
     * @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the manufacturer property value. Oem manufacturer of the Windows autopilot device.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. Model name of the Windows autopilot device.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the productKey property value. Product Key of the Windows autopilot device.
     * @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value): void {
        $this->getBackingStore()->set('productKey', $value);
    }

    /**
     * Sets the purchaseOrderIdentifier property value. Purchase Order Identifier of the Windows autopilot device.
     * @param string|null $value Value to set for the purchaseOrderIdentifier property.
    */
    public function setPurchaseOrderIdentifier(?string $value): void {
        $this->getBackingStore()->set('purchaseOrderIdentifier', $value);
    }

    /**
     * Sets the resourceName property value. Resource Name.
     * @param string|null $value Value to set for the resourceName property.
    */
    public function setResourceName(?string $value): void {
        $this->getBackingStore()->set('resourceName', $value);
    }

    /**
     * Sets the serialNumber property value. Serial number of the Windows autopilot device.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the skuNumber property value. SKU Number
     * @param string|null $value Value to set for the skuNumber property.
    */
    public function setSkuNumber(?string $value): void {
        $this->getBackingStore()->set('skuNumber', $value);
    }

    /**
     * Sets the systemFamily property value. System Family
     * @param string|null $value Value to set for the systemFamily property.
    */
    public function setSystemFamily(?string $value): void {
        $this->getBackingStore()->set('systemFamily', $value);
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
