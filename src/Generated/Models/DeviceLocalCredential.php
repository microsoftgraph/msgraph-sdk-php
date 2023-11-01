<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceLocalCredential extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceLocalCredential and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceLocalCredential
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceLocalCredential {
        return new DeviceLocalCredential();
    }

    /**
     * Gets the accountName property value. The name of the local admin account for which LAPS is enabled.
     * @return string|null
    */
    public function getAccountName(): ?string {
        $val = $this->getBackingStore()->get('accountName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountName'");
    }

    /**
     * Gets the accountSid property value. The SID of the local admin account for which LAPS is enabled.
     * @return string|null
    */
    public function getAccountSid(): ?string {
        $val = $this->getBackingStore()->get('accountSid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountSid'");
    }

    /**
     * Gets the backupDateTime property value. When the local administrator account credential for the device object was backed up to Azure Active Directory.
     * @return DateTime|null
    */
    public function getBackupDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('backupDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'backupDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountName' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'accountSid' => fn(ParseNode $n) => $o->setAccountSid($n->getStringValue()),
            'backupDateTime' => fn(ParseNode $n) => $o->setBackupDateTime($n->getDateTimeValue()),
            'passwordBase64' => fn(ParseNode $n) => $o->setPasswordBase64($n->getStringValue()),
        ]);
    }

    /**
     * Gets the passwordBase64 property value. The password for the local administrator account that is backed up to Azure Active Directory and returned as a Base64 encoded value.
     * @return string|null
    */
    public function getPasswordBase64(): ?string {
        $val = $this->getBackingStore()->get('passwordBase64');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBase64'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountName', $this->getAccountName());
        $writer->writeStringValue('accountSid', $this->getAccountSid());
        $writer->writeDateTimeValue('backupDateTime', $this->getBackupDateTime());
        $writer->writeStringValue('passwordBase64', $this->getPasswordBase64());
    }

    /**
     * Sets the accountName property value. The name of the local admin account for which LAPS is enabled.
     * @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value): void {
        $this->getBackingStore()->set('accountName', $value);
    }

    /**
     * Sets the accountSid property value. The SID of the local admin account for which LAPS is enabled.
     * @param string|null $value Value to set for the accountSid property.
    */
    public function setAccountSid(?string $value): void {
        $this->getBackingStore()->set('accountSid', $value);
    }

    /**
     * Sets the backupDateTime property value. When the local administrator account credential for the device object was backed up to Azure Active Directory.
     * @param DateTime|null $value Value to set for the backupDateTime property.
    */
    public function setBackupDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('backupDateTime', $value);
    }

    /**
     * Sets the passwordBase64 property value. The password for the local administrator account that is backed up to Azure Active Directory and returned as a Base64 encoded value.
     * @param string|null $value Value to set for the passwordBase64 property.
    */
    public function setPasswordBase64(?string $value): void {
        $this->getBackingStore()->set('passwordBase64', $value);
    }

}
