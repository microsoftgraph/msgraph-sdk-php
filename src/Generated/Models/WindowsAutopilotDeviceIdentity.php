<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsAutopilotDeviceIdentity extends Entity implements Parsable 
{
    /**
     * @var string|null $addressableUserName Addressable user name.
    */
    private ?string $addressableUserName = null;
    
    /**
     * @var string|null $azureActiveDirectoryDeviceId AAD Device ID - to be deprecated
    */
    private ?string $azureActiveDirectoryDeviceId = null;
    
    /**
     * @var string|null $displayName Display Name
    */
    private ?string $displayName = null;
    
    /**
     * @var EnrollmentState|null $enrollmentState The enrollmentState property
    */
    private ?EnrollmentState $enrollmentState = null;
    
    /**
     * @var string|null $groupTag Group Tag of the Windows autopilot device.
    */
    private ?string $groupTag = null;
    
    /**
     * @var DateTime|null $lastContactedDateTime Intune Last Contacted Date Time of the Windows autopilot device.
    */
    private ?DateTime $lastContactedDateTime = null;
    
    /**
     * @var string|null $managedDeviceId Managed Device ID
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $manufacturer Oem manufacturer of the Windows autopilot device.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model Model name of the Windows autopilot device.
    */
    private ?string $model = null;
    
    /**
     * @var string|null $productKey Product Key of the Windows autopilot device.
    */
    private ?string $productKey = null;
    
    /**
     * @var string|null $purchaseOrderIdentifier Purchase Order Identifier of the Windows autopilot device.
    */
    private ?string $purchaseOrderIdentifier = null;
    
    /**
     * @var string|null $resourceName Resource Name.
    */
    private ?string $resourceName = null;
    
    /**
     * @var string|null $serialNumber Serial number of the Windows autopilot device.
    */
    private ?string $serialNumber = null;
    
    /**
     * @var string|null $skuNumber SKU Number
    */
    private ?string $skuNumber = null;
    
    /**
     * @var string|null $systemFamily System Family
    */
    private ?string $systemFamily = null;
    
    /**
     * @var string|null $userPrincipalName User Principal Name.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new windowsAutopilotDeviceIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsAutopilotDeviceIdentity');
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
        return $this->addressableUserName;
    }

    /**
     * Gets the azureActiveDirectoryDeviceId property value. AAD Device ID - to be deprecated
     * @return string|null
    */
    public function getAzureActiveDirectoryDeviceId(): ?string {
        return $this->azureActiveDirectoryDeviceId;
    }

    /**
     * Gets the displayName property value. Display Name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enrollmentState property value. The enrollmentState property
     * @return EnrollmentState|null
    */
    public function getEnrollmentState(): ?EnrollmentState {
        return $this->enrollmentState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addressableUserName' => function (ParseNode $n) use ($o) { $o->setAddressableUserName($n->getStringValue()); },
            'azureActiveDirectoryDeviceId' => function (ParseNode $n) use ($o) { $o->setAzureActiveDirectoryDeviceId($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enrollmentState' => function (ParseNode $n) use ($o) { $o->setEnrollmentState($n->getEnumValue(EnrollmentState::class)); },
            'groupTag' => function (ParseNode $n) use ($o) { $o->setGroupTag($n->getStringValue()); },
            'lastContactedDateTime' => function (ParseNode $n) use ($o) { $o->setLastContactedDateTime($n->getDateTimeValue()); },
            'managedDeviceId' => function (ParseNode $n) use ($o) { $o->setManagedDeviceId($n->getStringValue()); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'productKey' => function (ParseNode $n) use ($o) { $o->setProductKey($n->getStringValue()); },
            'purchaseOrderIdentifier' => function (ParseNode $n) use ($o) { $o->setPurchaseOrderIdentifier($n->getStringValue()); },
            'resourceName' => function (ParseNode $n) use ($o) { $o->setResourceName($n->getStringValue()); },
            'serialNumber' => function (ParseNode $n) use ($o) { $o->setSerialNumber($n->getStringValue()); },
            'skuNumber' => function (ParseNode $n) use ($o) { $o->setSkuNumber($n->getStringValue()); },
            'systemFamily' => function (ParseNode $n) use ($o) { $o->setSystemFamily($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
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
     * Gets the lastContactedDateTime property value. Intune Last Contacted Date Time of the Windows autopilot device.
     * @return DateTime|null
    */
    public function getLastContactedDateTime(): ?DateTime {
        return $this->lastContactedDateTime;
    }

    /**
     * Gets the managedDeviceId property value. Managed Device ID
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the manufacturer property value. Oem manufacturer of the Windows autopilot device.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. Model name of the Windows autopilot device.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the productKey property value. Product Key of the Windows autopilot device.
     * @return string|null
    */
    public function getProductKey(): ?string {
        return $this->productKey;
    }

    /**
     * Gets the purchaseOrderIdentifier property value. Purchase Order Identifier of the Windows autopilot device.
     * @return string|null
    */
    public function getPurchaseOrderIdentifier(): ?string {
        return $this->purchaseOrderIdentifier;
    }

    /**
     * Gets the resourceName property value. Resource Name.
     * @return string|null
    */
    public function getResourceName(): ?string {
        return $this->resourceName;
    }

    /**
     * Gets the serialNumber property value. Serial number of the Windows autopilot device.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Gets the skuNumber property value. SKU Number
     * @return string|null
    */
    public function getSkuNumber(): ?string {
        return $this->skuNumber;
    }

    /**
     * Gets the systemFamily property value. System Family
     * @return string|null
    */
    public function getSystemFamily(): ?string {
        return $this->systemFamily;
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('addressableUserName', $this->addressableUserName);
        $writer->writeStringValue('azureActiveDirectoryDeviceId', $this->azureActiveDirectoryDeviceId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('enrollmentState', $this->enrollmentState);
        $writer->writeStringValue('groupTag', $this->groupTag);
        $writer->writeDateTimeValue('lastContactedDateTime', $this->lastContactedDateTime);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('productKey', $this->productKey);
        $writer->writeStringValue('purchaseOrderIdentifier', $this->purchaseOrderIdentifier);
        $writer->writeStringValue('resourceName', $this->resourceName);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
        $writer->writeStringValue('skuNumber', $this->skuNumber);
        $writer->writeStringValue('systemFamily', $this->systemFamily);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the addressableUserName property value. Addressable user name.
     *  @param string|null $value Value to set for the addressableUserName property.
    */
    public function setAddressableUserName(?string $value ): void {
        $this->addressableUserName = $value;
    }

    /**
     * Sets the azureActiveDirectoryDeviceId property value. AAD Device ID - to be deprecated
     *  @param string|null $value Value to set for the azureActiveDirectoryDeviceId property.
    */
    public function setAzureActiveDirectoryDeviceId(?string $value ): void {
        $this->azureActiveDirectoryDeviceId = $value;
    }

    /**
     * Sets the displayName property value. Display Name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enrollmentState property value. The enrollmentState property
     *  @param EnrollmentState|null $value Value to set for the enrollmentState property.
    */
    public function setEnrollmentState(?EnrollmentState $value ): void {
        $this->enrollmentState = $value;
    }

    /**
     * Sets the groupTag property value. Group Tag of the Windows autopilot device.
     *  @param string|null $value Value to set for the groupTag property.
    */
    public function setGroupTag(?string $value ): void {
        $this->groupTag = $value;
    }

    /**
     * Sets the lastContactedDateTime property value. Intune Last Contacted Date Time of the Windows autopilot device.
     *  @param DateTime|null $value Value to set for the lastContactedDateTime property.
    */
    public function setLastContactedDateTime(?DateTime $value ): void {
        $this->lastContactedDateTime = $value;
    }

    /**
     * Sets the managedDeviceId property value. Managed Device ID
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the manufacturer property value. Oem manufacturer of the Windows autopilot device.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. Model name of the Windows autopilot device.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the productKey property value. Product Key of the Windows autopilot device.
     *  @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value ): void {
        $this->productKey = $value;
    }

    /**
     * Sets the purchaseOrderIdentifier property value. Purchase Order Identifier of the Windows autopilot device.
     *  @param string|null $value Value to set for the purchaseOrderIdentifier property.
    */
    public function setPurchaseOrderIdentifier(?string $value ): void {
        $this->purchaseOrderIdentifier = $value;
    }

    /**
     * Sets the resourceName property value. Resource Name.
     *  @param string|null $value Value to set for the resourceName property.
    */
    public function setResourceName(?string $value ): void {
        $this->resourceName = $value;
    }

    /**
     * Sets the serialNumber property value. Serial number of the Windows autopilot device.
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

    /**
     * Sets the skuNumber property value. SKU Number
     *  @param string|null $value Value to set for the skuNumber property.
    */
    public function setSkuNumber(?string $value ): void {
        $this->skuNumber = $value;
    }

    /**
     * Sets the systemFamily property value. System Family
     *  @param string|null $value Value to set for the systemFamily property.
    */
    public function setSystemFamily(?string $value ): void {
        $this->systemFamily = $value;
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
