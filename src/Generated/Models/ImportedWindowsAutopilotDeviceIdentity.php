<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * Imported windows autopilot devices.
*/
class ImportedWindowsAutopilotDeviceIdentity extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new importedWindowsAutopilotDeviceIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportedWindowsAutopilotDeviceIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportedWindowsAutopilotDeviceIdentity {
        return new ImportedWindowsAutopilotDeviceIdentity();
    }

    /**
     * Gets the assignedUserPrincipalName property value. UPN of the user the device will be assigned
     * @return string|null
    */
    public function getAssignedUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('assignedUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedUserPrincipalName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedUserPrincipalName' => fn(ParseNode $n) => $o->setAssignedUserPrincipalName($n->getStringValue()),
            'groupTag' => fn(ParseNode $n) => $o->setGroupTag($n->getStringValue()),
            'hardwareIdentifier' => fn(ParseNode $n) => $o->setHardwareIdentifier($n->getBinaryContent()),
            'importId' => fn(ParseNode $n) => $o->setImportId($n->getStringValue()),
            'productKey' => fn(ParseNode $n) => $o->setProductKey($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getObjectValue([ImportedWindowsAutopilotDeviceIdentityState::class, 'createFromDiscriminatorValue'])),
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
     * Gets the hardwareIdentifier property value. Hardware Blob of the Windows autopilot device.
     * @return StreamInterface|null
    */
    public function getHardwareIdentifier(): ?StreamInterface {
        $val = $this->getBackingStore()->get('hardwareIdentifier');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardwareIdentifier'");
    }

    /**
     * Gets the importId property value. The Import Id of the Windows autopilot device.
     * @return string|null
    */
    public function getImportId(): ?string {
        $val = $this->getBackingStore()->get('importId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importId'");
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
     * Gets the state property value. Current state of the imported device.
     * @return ImportedWindowsAutopilotDeviceIdentityState|null
    */
    public function getState(): ?ImportedWindowsAutopilotDeviceIdentityState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof ImportedWindowsAutopilotDeviceIdentityState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedUserPrincipalName', $this->getAssignedUserPrincipalName());
        $writer->writeStringValue('groupTag', $this->getGroupTag());
        $writer->writeBinaryContent('hardwareIdentifier', $this->getHardwareIdentifier());
        $writer->writeStringValue('importId', $this->getImportId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('productKey', $this->getProductKey());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeObjectValue('state', $this->getState());
    }

    /**
     * Sets the assignedUserPrincipalName property value. UPN of the user the device will be assigned
     * @param string|null $value Value to set for the assignedUserPrincipalName property.
    */
    public function setAssignedUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('assignedUserPrincipalName', $value);
    }

    /**
     * Sets the groupTag property value. Group Tag of the Windows autopilot device.
     * @param string|null $value Value to set for the groupTag property.
    */
    public function setGroupTag(?string $value): void {
        $this->getBackingStore()->set('groupTag', $value);
    }

    /**
     * Sets the hardwareIdentifier property value. Hardware Blob of the Windows autopilot device.
     * @param StreamInterface|null $value Value to set for the hardwareIdentifier property.
    */
    public function setHardwareIdentifier(?StreamInterface $value): void {
        $this->getBackingStore()->set('hardwareIdentifier', $value);
    }

    /**
     * Sets the importId property value. The Import Id of the Windows autopilot device.
     * @param string|null $value Value to set for the importId property.
    */
    public function setImportId(?string $value): void {
        $this->getBackingStore()->set('importId', $value);
    }

    /**
     * Sets the productKey property value. Product Key of the Windows autopilot device.
     * @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value): void {
        $this->getBackingStore()->set('productKey', $value);
    }

    /**
     * Sets the serialNumber property value. Serial number of the Windows autopilot device.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the state property value. Current state of the imported device.
     * @param ImportedWindowsAutopilotDeviceIdentityState|null $value Value to set for the state property.
    */
    public function setState(?ImportedWindowsAutopilotDeviceIdentityState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
