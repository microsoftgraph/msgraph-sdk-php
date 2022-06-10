<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceInstallState extends Entity implements Parsable 
{
    /**
     * @var string|null $deviceId Device Id.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceName Device name.
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $errorCode The error code for install failures.
    */
    private ?string $errorCode = null;
    
    /**
     * @var InstallState|null $installState The install state of the eBook. Possible values are: notApplicable, installed, failed, notInstalled, uninstallFailed, unknown.
    */
    private ?InstallState $installState = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Last sync date and time.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $osDescription OS Description.
    */
    private ?string $osDescription = null;
    
    /**
     * @var string|null $osVersion OS Version.
    */
    private ?string $osVersion = null;
    
    /**
     * @var string|null $userName Device User Name.
    */
    private ?string $userName = null;
    
    /**
     * Instantiates a new deviceInstallState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceInstallState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceInstallState {
        return new DeviceInstallState();
    }

    /**
     * Gets the deviceId property value. Device Id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. Device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the errorCode property value. The error code for install failures.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getStringValue()); },
            'installState' => function (ParseNode $n) use ($o) { $o->setInstallState($n->getEnumValue(InstallState::class)); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'osDescription' => function (ParseNode $n) use ($o) { $o->setOsDescription($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the installState property value. The install state of the eBook. Possible values are: notApplicable, installed, failed, notInstalled, uninstallFailed, unknown.
     * @return InstallState|null
    */
    public function getInstallState(): ?InstallState {
        return $this->installState;
    }

    /**
     * Gets the lastSyncDateTime property value. Last sync date and time.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the osDescription property value. OS Description.
     * @return string|null
    */
    public function getOsDescription(): ?string {
        return $this->osDescription;
    }

    /**
     * Gets the osVersion property value. OS Version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the userName property value. Device User Name.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('errorCode', $this->errorCode);
        $writer->writeEnumValue('installState', $this->installState);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('osDescription', $this->osDescription);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeStringValue('userName', $this->userName);
    }

    /**
     * Sets the deviceId property value. Device Id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. Device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the errorCode property value. The error code for install failures.
     *  @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the installState property value. The install state of the eBook. Possible values are: notApplicable, installed, failed, notInstalled, uninstallFailed, unknown.
     *  @param InstallState|null $value Value to set for the installState property.
    */
    public function setInstallState(?InstallState $value ): void {
        $this->installState = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. Last sync date and time.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the osDescription property value. OS Description.
     *  @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value ): void {
        $this->osDescription = $value;
    }

    /**
     * Sets the osVersion property value. OS Version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the userName property value. Device User Name.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

}
