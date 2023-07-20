<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for the installation summary of a book for a device.
*/
class EBookInstallSummary extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('failedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedDeviceCount'");
    }

    /**
     * Gets the failedUserCount property value. Number of Users that have 1 or more device that failed to install this book.
     * @return int|null
    */
    public function getFailedUserCount(): ?int {
        $val = $this->getBackingStore()->get('failedUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedUserCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'failedDeviceCount' => fn(ParseNode $n) => $o->setFailedDeviceCount($n->getIntegerValue()),
            'failedUserCount' => fn(ParseNode $n) => $o->setFailedUserCount($n->getIntegerValue()),
            'installedDeviceCount' => fn(ParseNode $n) => $o->setInstalledDeviceCount($n->getIntegerValue()),
            'installedUserCount' => fn(ParseNode $n) => $o->setInstalledUserCount($n->getIntegerValue()),
            'notInstalledDeviceCount' => fn(ParseNode $n) => $o->setNotInstalledDeviceCount($n->getIntegerValue()),
            'notInstalledUserCount' => fn(ParseNode $n) => $o->setNotInstalledUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the installedDeviceCount property value. Number of Devices that have successfully installed this book.
     * @return int|null
    */
    public function getInstalledDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('installedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installedDeviceCount'");
    }

    /**
     * Gets the installedUserCount property value. Number of Users whose devices have all succeeded to install this book.
     * @return int|null
    */
    public function getInstalledUserCount(): ?int {
        $val = $this->getBackingStore()->get('installedUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installedUserCount'");
    }

    /**
     * Gets the notInstalledDeviceCount property value. Number of Devices that does not have this book installed.
     * @return int|null
    */
    public function getNotInstalledDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('notInstalledDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notInstalledDeviceCount'");
    }

    /**
     * Gets the notInstalledUserCount property value. Number of Users that did not install this book.
     * @return int|null
    */
    public function getNotInstalledUserCount(): ?int {
        $val = $this->getBackingStore()->get('notInstalledUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notInstalledUserCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('failedDeviceCount', $this->getFailedDeviceCount());
        $writer->writeIntegerValue('failedUserCount', $this->getFailedUserCount());
        $writer->writeIntegerValue('installedDeviceCount', $this->getInstalledDeviceCount());
        $writer->writeIntegerValue('installedUserCount', $this->getInstalledUserCount());
        $writer->writeIntegerValue('notInstalledDeviceCount', $this->getNotInstalledDeviceCount());
        $writer->writeIntegerValue('notInstalledUserCount', $this->getNotInstalledUserCount());
    }

    /**
     * Sets the failedDeviceCount property value. Number of Devices that have failed to install this book.
     * @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('failedDeviceCount', $value);
    }

    /**
     * Sets the failedUserCount property value. Number of Users that have 1 or more device that failed to install this book.
     * @param int|null $value Value to set for the failedUserCount property.
    */
    public function setFailedUserCount(?int $value): void {
        $this->getBackingStore()->set('failedUserCount', $value);
    }

    /**
     * Sets the installedDeviceCount property value. Number of Devices that have successfully installed this book.
     * @param int|null $value Value to set for the installedDeviceCount property.
    */
    public function setInstalledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('installedDeviceCount', $value);
    }

    /**
     * Sets the installedUserCount property value. Number of Users whose devices have all succeeded to install this book.
     * @param int|null $value Value to set for the installedUserCount property.
    */
    public function setInstalledUserCount(?int $value): void {
        $this->getBackingStore()->set('installedUserCount', $value);
    }

    /**
     * Sets the notInstalledDeviceCount property value. Number of Devices that does not have this book installed.
     * @param int|null $value Value to set for the notInstalledDeviceCount property.
    */
    public function setNotInstalledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notInstalledDeviceCount', $value);
    }

    /**
     * Sets the notInstalledUserCount property value. Number of Users that did not install this book.
     * @param int|null $value Value to set for the notInstalledUserCount property.
    */
    public function setNotInstalledUserCount(?int $value): void {
        $this->getBackingStore()->set('notInstalledUserCount', $value);
    }

}
