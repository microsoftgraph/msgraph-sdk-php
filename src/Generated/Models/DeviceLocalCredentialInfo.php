<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceLocalCredentialInfo extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceLocalCredentialInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceLocalCredentialInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceLocalCredentialInfo {
        return new DeviceLocalCredentialInfo();
    }

    /**
     * Gets the credentials property value. The credentials of the device's local administrator account backed up to Azure Active Directory.
     * @return array<DeviceLocalCredential>|null
    */
    public function getCredentials(): ?array {
        $val = $this->getBackingStore()->get('credentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceLocalCredential::class);
            /** @var array<DeviceLocalCredential>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'credentials'");
    }

    /**
     * Gets the deviceName property value. Display name of the device that the local credentials are associated with.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'credentials' => fn(ParseNode $n) => $o->setCredentials($n->getCollectionOfObjectValues([DeviceLocalCredential::class, 'createFromDiscriminatorValue'])),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'lastBackupDateTime' => fn(ParseNode $n) => $o->setLastBackupDateTime($n->getDateTimeValue()),
            'refreshDateTime' => fn(ParseNode $n) => $o->setRefreshDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastBackupDateTime property value. When the local administrator account credential was backed up to Azure Active Directory.
     * @return DateTime|null
    */
    public function getLastBackupDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastBackupDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastBackupDateTime'");
    }

    /**
     * Gets the refreshDateTime property value. When the local administrator account credential will be refreshed and backed up to Azure Active Directory.
     * @return DateTime|null
    */
    public function getRefreshDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('refreshDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'refreshDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('credentials', $this->getCredentials());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeDateTimeValue('lastBackupDateTime', $this->getLastBackupDateTime());
        $writer->writeDateTimeValue('refreshDateTime', $this->getRefreshDateTime());
    }

    /**
     * Sets the credentials property value. The credentials of the device's local administrator account backed up to Azure Active Directory.
     * @param array<DeviceLocalCredential>|null $value Value to set for the credentials property.
    */
    public function setCredentials(?array $value): void {
        $this->getBackingStore()->set('credentials', $value);
    }

    /**
     * Sets the deviceName property value. Display name of the device that the local credentials are associated with.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the lastBackupDateTime property value. When the local administrator account credential was backed up to Azure Active Directory.
     * @param DateTime|null $value Value to set for the lastBackupDateTime property.
    */
    public function setLastBackupDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastBackupDateTime', $value);
    }

    /**
     * Sets the refreshDateTime property value. When the local administrator account credential will be refreshed and backed up to Azure Active Directory.
     * @param DateTime|null $value Value to set for the refreshDateTime property.
    */
    public function setRefreshDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('refreshDateTime', $value);
    }

}
