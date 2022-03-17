<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class ImportedWindowsAutopilotDeviceIdentity extends Entity 
{
    /** @var string|null $assignedUserPrincipalName UPN of the user the device will be assigned */
    private ?string $assignedUserPrincipalName = null;
    
    /** @var string|null $groupTag Group Tag of the Windows autopilot device. */
    private ?string $groupTag = null;
    
    /** @var StreamInterface|null $hardwareIdentifier Hardware Blob of the Windows autopilot device. */
    private ?StreamInterface $hardwareIdentifier = null;
    
    /** @var string|null $importId The Import Id of the Windows autopilot device. */
    private ?string $importId = null;
    
    /** @var string|null $productKey Product Key of the Windows autopilot device. */
    private ?string $productKey = null;
    
    /** @var string|null $serialNumber Serial number of the Windows autopilot device. */
    private ?string $serialNumber = null;
    
    /** @var ImportedWindowsAutopilotDeviceIdentityState|null $state Current state of the imported device. */
    private ?ImportedWindowsAutopilotDeviceIdentityState $state = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): ImportedWindowsAutopilotDeviceIdentity {
        return new ImportedWindowsAutopilotDeviceIdentity();
    }

    /**
     * Gets the assignedUserPrincipalName property value. UPN of the user the device will be assigned
     * @return string|null
    */
    public function getAssignedUserPrincipalName(): ?string {
        return $this->assignedUserPrincipalName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignedUserPrincipalName' => function (self $o, ParseNode $n) { $o->setAssignedUserPrincipalName($n->getStringValue()); },
            'groupTag' => function (self $o, ParseNode $n) { $o->setGroupTag($n->getStringValue()); },
            'hardwareIdentifier' => function (self $o, ParseNode $n) { $o->setHardwareIdentifier($n->getBinaryContent()); },
            'importId' => function (self $o, ParseNode $n) { $o->setImportId($n->getStringValue()); },
            'productKey' => function (self $o, ParseNode $n) { $o->setProductKey($n->getStringValue()); },
            'serialNumber' => function (self $o, ParseNode $n) { $o->setSerialNumber($n->getStringValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getObjectValue(ImportedWindowsAutopilotDeviceIdentityState::class)); },
        ]);
    }

    /**
     * Gets the groupTag property value. Group Tag of the Windows autopilot device.
     * @return string|null
    */
    public function getGroupTag(): ?string {
        return $this->groupTag;
    }

    /**
     * Gets the hardwareIdentifier property value. Hardware Blob of the Windows autopilot device.
     * @return StreamInterface|null
    */
    public function getHardwareIdentifier(): ?StreamInterface {
        return $this->hardwareIdentifier;
    }

    /**
     * Gets the importId property value. The Import Id of the Windows autopilot device.
     * @return string|null
    */
    public function getImportId(): ?string {
        return $this->importId;
    }

    /**
     * Gets the productKey property value. Product Key of the Windows autopilot device.
     * @return string|null
    */
    public function getProductKey(): ?string {
        return $this->productKey;
    }

    /**
     * Gets the serialNumber property value. Serial number of the Windows autopilot device.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Gets the state property value. Current state of the imported device.
     * @return ImportedWindowsAutopilotDeviceIdentityState|null
    */
    public function getState(): ?ImportedWindowsAutopilotDeviceIdentityState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedUserPrincipalName', $this->assignedUserPrincipalName);
        $writer->writeStringValue('groupTag', $this->groupTag);
        $writer->writeBinaryContent('hardwareIdentifier', $this->hardwareIdentifier);
        $writer->writeStringValue('importId', $this->importId);
        $writer->writeStringValue('productKey', $this->productKey);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
        $writer->writeObjectValue('state', $this->state);
    }

    /**
     * Sets the assignedUserPrincipalName property value. UPN of the user the device will be assigned
     *  @param string|null $value Value to set for the assignedUserPrincipalName property.
    */
    public function setAssignedUserPrincipalName(?string $value ): void {
        $this->assignedUserPrincipalName = $value;
    }

    /**
     * Sets the groupTag property value. Group Tag of the Windows autopilot device.
     *  @param string|null $value Value to set for the groupTag property.
    */
    public function setGroupTag(?string $value ): void {
        $this->groupTag = $value;
    }

    /**
     * Sets the hardwareIdentifier property value. Hardware Blob of the Windows autopilot device.
     *  @param StreamInterface|null $value Value to set for the hardwareIdentifier property.
    */
    public function setHardwareIdentifier(?StreamInterface $value ): void {
        $this->hardwareIdentifier = $value;
    }

    /**
     * Sets the importId property value. The Import Id of the Windows autopilot device.
     *  @param string|null $value Value to set for the importId property.
    */
    public function setImportId(?string $value ): void {
        $this->importId = $value;
    }

    /**
     * Sets the productKey property value. Product Key of the Windows autopilot device.
     *  @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value ): void {
        $this->productKey = $value;
    }

    /**
     * Sets the serialNumber property value. Serial number of the Windows autopilot device.
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

    /**
     * Sets the state property value. Current state of the imported device.
     *  @param ImportedWindowsAutopilotDeviceIdentityState|null $value Value to set for the state property.
    */
    public function setState(?ImportedWindowsAutopilotDeviceIdentityState $value ): void {
        $this->state = $value;
    }

}
