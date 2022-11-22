<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserInstallStateSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new userInstallStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserInstallStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserInstallStateSummary {
        return new UserInstallStateSummary();
    }

    /**
     * Gets the deviceStates property value. The install state of the eBook.
     * @return array<DeviceInstallState>|null
    */
    public function getDeviceStates(): ?array {
        return $this->getBackingStore()->get('deviceStates');
    }

    /**
     * Gets the failedDeviceCount property value. Failed Device Count.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        return $this->getBackingStore()->get('failedDeviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceStates' => fn(ParseNode $n) => $o->setDeviceStates($n->getCollectionOfObjectValues([DeviceInstallState::class, 'createFromDiscriminatorValue'])),
            'failedDeviceCount' => fn(ParseNode $n) => $o->setFailedDeviceCount($n->getIntegerValue()),
            'installedDeviceCount' => fn(ParseNode $n) => $o->setInstalledDeviceCount($n->getIntegerValue()),
            'notInstalledDeviceCount' => fn(ParseNode $n) => $o->setNotInstalledDeviceCount($n->getIntegerValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installedDeviceCount property value. Installed Device Count.
     * @return int|null
    */
    public function getInstalledDeviceCount(): ?int {
        return $this->getBackingStore()->get('installedDeviceCount');
    }

    /**
     * Gets the notInstalledDeviceCount property value. Not installed device count.
     * @return int|null
    */
    public function getNotInstalledDeviceCount(): ?int {
        return $this->getBackingStore()->get('notInstalledDeviceCount');
    }

    /**
     * Gets the userName property value. User name.
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
        $writer->writeCollectionOfObjectValues('deviceStates', $this->getDeviceStates());
        $writer->writeIntegerValue('failedDeviceCount', $this->getFailedDeviceCount());
        $writer->writeIntegerValue('installedDeviceCount', $this->getInstalledDeviceCount());
        $writer->writeIntegerValue('notInstalledDeviceCount', $this->getNotInstalledDeviceCount());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the deviceStates property value. The install state of the eBook.
     *  @param array<DeviceInstallState>|null $value Value to set for the deviceStates property.
    */
    public function setDeviceStates(?array $value): void {
        $this->getBackingStore()->set('deviceStates', $value);
    }

    /**
     * Sets the failedDeviceCount property value. Failed Device Count.
     *  @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('failedDeviceCount', $value);
    }

    /**
     * Sets the installedDeviceCount property value. Installed Device Count.
     *  @param int|null $value Value to set for the installedDeviceCount property.
    */
    public function setInstalledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('installedDeviceCount', $value);
    }

    /**
     * Sets the notInstalledDeviceCount property value. Not installed device count.
     *  @param int|null $value Value to set for the notInstalledDeviceCount property.
    */
    public function setNotInstalledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notInstalledDeviceCount', $value);
    }

    /**
     * Sets the userName property value. User name.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
