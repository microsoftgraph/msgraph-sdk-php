<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EBookInstallSummary extends Entity implements Parsable 
{
    /**
     * @var int|null $failedDeviceCount Number of Devices that have failed to install this book.
    */
    private ?int $failedDeviceCount = null;
    
    /**
     * @var int|null $failedUserCount Number of Users that have 1 or more device that failed to install this book.
    */
    private ?int $failedUserCount = null;
    
    /**
     * @var int|null $installedDeviceCount Number of Devices that have successfully installed this book.
    */
    private ?int $installedDeviceCount = null;
    
    /**
     * @var int|null $installedUserCount Number of Users whose devices have all succeeded to install this book.
    */
    private ?int $installedUserCount = null;
    
    /**
     * @var int|null $notInstalledDeviceCount Number of Devices that does not have this book installed.
    */
    private ?int $notInstalledDeviceCount = null;
    
    /**
     * @var int|null $notInstalledUserCount Number of Users that did not install this book.
    */
    private ?int $notInstalledUserCount = null;
    
    /**
     * Instantiates a new eBookInstallSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EBookInstallSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EBookInstallSummary {
        return new EBookInstallSummary();
    }

    /**
     * Gets the failedDeviceCount property value. Number of Devices that have failed to install this book.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        return $this->failedDeviceCount;
    }

    /**
     * Gets the failedUserCount property value. Number of Users that have 1 or more device that failed to install this book.
     * @return int|null
    */
    public function getFailedUserCount(): ?int {
        return $this->failedUserCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'failedDeviceCount' => function (ParseNode $n) use ($o) { $o->setFailedDeviceCount($n->getIntegerValue()); },
            'failedUserCount' => function (ParseNode $n) use ($o) { $o->setFailedUserCount($n->getIntegerValue()); },
            'installedDeviceCount' => function (ParseNode $n) use ($o) { $o->setInstalledDeviceCount($n->getIntegerValue()); },
            'installedUserCount' => function (ParseNode $n) use ($o) { $o->setInstalledUserCount($n->getIntegerValue()); },
            'notInstalledDeviceCount' => function (ParseNode $n) use ($o) { $o->setNotInstalledDeviceCount($n->getIntegerValue()); },
            'notInstalledUserCount' => function (ParseNode $n) use ($o) { $o->setNotInstalledUserCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the installedDeviceCount property value. Number of Devices that have successfully installed this book.
     * @return int|null
    */
    public function getInstalledDeviceCount(): ?int {
        return $this->installedDeviceCount;
    }

    /**
     * Gets the installedUserCount property value. Number of Users whose devices have all succeeded to install this book.
     * @return int|null
    */
    public function getInstalledUserCount(): ?int {
        return $this->installedUserCount;
    }

    /**
     * Gets the notInstalledDeviceCount property value. Number of Devices that does not have this book installed.
     * @return int|null
    */
    public function getNotInstalledDeviceCount(): ?int {
        return $this->notInstalledDeviceCount;
    }

    /**
     * Gets the notInstalledUserCount property value. Number of Users that did not install this book.
     * @return int|null
    */
    public function getNotInstalledUserCount(): ?int {
        return $this->notInstalledUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('failedDeviceCount', $this->failedDeviceCount);
        $writer->writeIntegerValue('failedUserCount', $this->failedUserCount);
        $writer->writeIntegerValue('installedDeviceCount', $this->installedDeviceCount);
        $writer->writeIntegerValue('installedUserCount', $this->installedUserCount);
        $writer->writeIntegerValue('notInstalledDeviceCount', $this->notInstalledDeviceCount);
        $writer->writeIntegerValue('notInstalledUserCount', $this->notInstalledUserCount);
    }

    /**
     * Sets the failedDeviceCount property value. Number of Devices that have failed to install this book.
     *  @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value ): void {
        $this->failedDeviceCount = $value;
    }

    /**
     * Sets the failedUserCount property value. Number of Users that have 1 or more device that failed to install this book.
     *  @param int|null $value Value to set for the failedUserCount property.
    */
    public function setFailedUserCount(?int $value ): void {
        $this->failedUserCount = $value;
    }

    /**
     * Sets the installedDeviceCount property value. Number of Devices that have successfully installed this book.
     *  @param int|null $value Value to set for the installedDeviceCount property.
    */
    public function setInstalledDeviceCount(?int $value ): void {
        $this->installedDeviceCount = $value;
    }

    /**
     * Sets the installedUserCount property value. Number of Users whose devices have all succeeded to install this book.
     *  @param int|null $value Value to set for the installedUserCount property.
    */
    public function setInstalledUserCount(?int $value ): void {
        $this->installedUserCount = $value;
    }

    /**
     * Sets the notInstalledDeviceCount property value. Number of Devices that does not have this book installed.
     *  @param int|null $value Value to set for the notInstalledDeviceCount property.
    */
    public function setNotInstalledDeviceCount(?int $value ): void {
        $this->notInstalledDeviceCount = $value;
    }

    /**
     * Sets the notInstalledUserCount property value. Number of Users that did not install this book.
     *  @param int|null $value Value to set for the notInstalledUserCount property.
    */
    public function setNotInstalledUserCount(?int $value ): void {
        $this->notInstalledUserCount = $value;
    }

}
