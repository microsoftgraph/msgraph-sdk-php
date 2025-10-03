<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Import windows autopilot devices using upload.
*/
class ImportedWindowsAutopilotDeviceIdentityUpload extends Entity implements Parsable 
{
    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityUpload and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportedWindowsAutopilotDeviceIdentityUpload
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportedWindowsAutopilotDeviceIdentityUpload {
        return new ImportedWindowsAutopilotDeviceIdentityUpload();
    }

    /**
     * Gets the createdDateTimeUtc property value. DateTime when the entity is created.
     * @return DateTime|null
    */
    public function getCreatedDateTimeUtc(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTimeUtc');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTimeUtc'");
    }

    /**
     * Gets the deviceIdentities property value. Collection of all Autopilot devices as a part of this upload.
     * @return array<ImportedWindowsAutopilotDeviceIdentity>|null
    */
    public function getDeviceIdentities(): ?array {
        $val = $this->getBackingStore()->get('deviceIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImportedWindowsAutopilotDeviceIdentity::class);
            /** @var array<ImportedWindowsAutopilotDeviceIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceIdentities'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTimeUtc' => fn(ParseNode $n) => $o->setCreatedDateTimeUtc($n->getDateTimeValue()),
            'deviceIdentities' => fn(ParseNode $n) => $o->setDeviceIdentities($n->getCollectionOfObjectValues([ImportedWindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ImportedWindowsAutopilotDeviceIdentityUploadStatus::class)),
        ]);
    }

    /**
     * Gets the status property value. The status property
     * @return ImportedWindowsAutopilotDeviceIdentityUploadStatus|null
    */
    public function getStatus(): ?ImportedWindowsAutopilotDeviceIdentityUploadStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ImportedWindowsAutopilotDeviceIdentityUploadStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTimeUtc', $this->getCreatedDateTimeUtc());
        $writer->writeCollectionOfObjectValues('deviceIdentities', $this->getDeviceIdentities());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdDateTimeUtc property value. DateTime when the entity is created.
     * @param DateTime|null $value Value to set for the createdDateTimeUtc property.
    */
    public function setCreatedDateTimeUtc(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTimeUtc', $value);
    }

    /**
     * Sets the deviceIdentities property value. Collection of all Autopilot devices as a part of this upload.
     * @param array<ImportedWindowsAutopilotDeviceIdentity>|null $value Value to set for the deviceIdentities property.
    */
    public function setDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('deviceIdentities', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ImportedWindowsAutopilotDeviceIdentityUploadStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ImportedWindowsAutopilotDeviceIdentityUploadStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
