<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceInstallState extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceName property value. Device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the errorCode property value. The error code for install failures.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'installState' => fn(ParseNode $n) => $o->setInstallState($n->getEnumValue(InstallState::class)),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'osDescription' => fn(ParseNode $n) => $o->setOsDescription($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installState property value. Possible values for install state.
     * @return InstallState|null
    */
    public function getInstallState(): ?InstallState {
        return $this->getBackingStore()->get('installState');
    }

    /**
     * Gets the lastSyncDateTime property value. Last sync date and time.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSyncDateTime');
    }

    /**
     * Gets the osDescription property value. OS Description.
     * @return string|null
    */
    public function getOsDescription(): ?string {
        return $this->getBackingStore()->get('osDescription');
    }

    /**
     * Gets the osVersion property value. OS Version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the userName property value. Device User Name.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->getBackingStore()->get('userName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeEnumValue('installState', $this->getInstallState());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeStringValue('osDescription', $this->getOsDescription());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the deviceId property value. Device Id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. Device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the errorCode property value. The error code for install failures.
     *  @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the installState property value. Possible values for install state.
     *  @param InstallState|null $value Value to set for the installState property.
    */
    public function setInstallState(?InstallState $value): void {
        $this->getBackingStore()->set('installState', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Last sync date and time.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the osDescription property value. OS Description.
     *  @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value): void {
        $this->getBackingStore()->set('osDescription', $value);
    }

    /**
     * Sets the osVersion property value. OS Version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the userName property value. Device User Name.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
