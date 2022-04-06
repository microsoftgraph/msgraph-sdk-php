<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserInstallStateSummary extends Entity 
{
    /** @var array<DeviceInstallState>|null $deviceStates The install state of the eBook. */
    private ?array $deviceStates = null;
    
    /** @var int|null $failedDeviceCount Failed Device Count. */
    private ?int $failedDeviceCount = null;
    
    /** @var int|null $installedDeviceCount Installed Device Count. */
    private ?int $installedDeviceCount = null;
    
    /** @var int|null $notInstalledDeviceCount Not installed device count. */
    private ?int $notInstalledDeviceCount = null;
    
    /** @var string|null $userName User name. */
    private ?string $userName = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserInstallStateSummary {
        return new UserInstallStateSummary();
    }

    /**
     * Gets the deviceStates property value. The install state of the eBook.
     * @return array<DeviceInstallState>|null
    */
    public function getDeviceStates(): ?array {
        return $this->deviceStates;
    }

    /**
     * Gets the failedDeviceCount property value. Failed Device Count.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        return $this->failedDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'deviceStates' => function (self $o, ParseNode $n) { $o->setDeviceStates($n->getCollectionOfObjectValues(DeviceInstallState::class)); },
            'failedDeviceCount' => function (self $o, ParseNode $n) { $o->setFailedDeviceCount($n->getIntegerValue()); },
            'installedDeviceCount' => function (self $o, ParseNode $n) { $o->setInstalledDeviceCount($n->getIntegerValue()); },
            'notInstalledDeviceCount' => function (self $o, ParseNode $n) { $o->setNotInstalledDeviceCount($n->getIntegerValue()); },
            'userName' => function (self $o, ParseNode $n) { $o->setUserName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the installedDeviceCount property value. Installed Device Count.
     * @return int|null
    */
    public function getInstalledDeviceCount(): ?int {
        return $this->installedDeviceCount;
    }

    /**
     * Gets the notInstalledDeviceCount property value. Not installed device count.
     * @return int|null
    */
    public function getNotInstalledDeviceCount(): ?int {
        return $this->notInstalledDeviceCount;
    }

    /**
     * Gets the userName property value. User name.
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
        $writer->writeCollectionOfObjectValues('deviceStates', $this->deviceStates);
        $writer->writeIntegerValue('failedDeviceCount', $this->failedDeviceCount);
        $writer->writeIntegerValue('installedDeviceCount', $this->installedDeviceCount);
        $writer->writeIntegerValue('notInstalledDeviceCount', $this->notInstalledDeviceCount);
        $writer->writeStringValue('userName', $this->userName);
    }

    /**
     * Sets the deviceStates property value. The install state of the eBook.
     *  @param array<DeviceInstallState>|null $value Value to set for the deviceStates property.
    */
    public function setDeviceStates(?array $value ): void {
        $this->deviceStates = $value;
    }

    /**
     * Sets the failedDeviceCount property value. Failed Device Count.
     *  @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value ): void {
        $this->failedDeviceCount = $value;
    }

    /**
     * Sets the installedDeviceCount property value. Installed Device Count.
     *  @param int|null $value Value to set for the installedDeviceCount property.
    */
    public function setInstalledDeviceCount(?int $value ): void {
        $this->installedDeviceCount = $value;
    }

    /**
     * Sets the notInstalledDeviceCount property value. Not installed device count.
     *  @param int|null $value Value to set for the notInstalledDeviceCount property.
    */
    public function setNotInstalledDeviceCount(?int $value ): void {
        $this->notInstalledDeviceCount = $value;
    }

    /**
     * Sets the userName property value. User name.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

}
