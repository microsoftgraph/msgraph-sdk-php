<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BrowseSessionBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new BrowseSessionBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowseSessionBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowseSessionBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.oneDriveForBusinessBrowseSession': return new OneDriveForBusinessBrowseSession();
                case '#microsoft.graph.sharePointBrowseSession': return new SharePointBrowseSession();
            }
        }
        return new BrowseSessionBase();
    }

    /**
     * Gets the backupSizeInBytes property value. The backupSizeInBytes property
     * @return string|null
    */
    public function getBackupSizeInBytes(): ?string {
        $val = $this->getBackingStore()->get('backupSizeInBytes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'backupSizeInBytes'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the error property value. The error property
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof PublicError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'backupSizeInBytes' => fn(ParseNode $n) => $o->setBackupSizeInBytes($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'restorePointDateTime' => fn(ParseNode $n) => $o->setRestorePointDateTime($n->getDateTimeValue()),
            'restorePointId' => fn(ParseNode $n) => $o->setRestorePointId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BrowseSessionStatus::class)),
        ]);
    }

    /**
     * Gets the restorePointDateTime property value. The restorePointDateTime property
     * @return DateTime|null
    */
    public function getRestorePointDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restorePointDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointDateTime'");
    }

    /**
     * Gets the restorePointId property value. The restorePointId property
     * @return string|null
    */
    public function getRestorePointId(): ?string {
        $val = $this->getBackingStore()->get('restorePointId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointId'");
    }

    /**
     * Gets the status property value. The status property
     * @return BrowseSessionStatus|null
    */
    public function getStatus(): ?BrowseSessionStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof BrowseSessionStatus) {
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
        $writer->writeStringValue('backupSizeInBytes', $this->getBackupSizeInBytes());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('restorePointDateTime', $this->getRestorePointDateTime());
        $writer->writeStringValue('restorePointId', $this->getRestorePointId());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the backupSizeInBytes property value. The backupSizeInBytes property
     * @param string|null $value Value to set for the backupSizeInBytes property.
    */
    public function setBackupSizeInBytes(?string $value): void {
        $this->getBackingStore()->set('backupSizeInBytes', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the error property value. The error property
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the restorePointDateTime property value. The restorePointDateTime property
     * @param DateTime|null $value Value to set for the restorePointDateTime property.
    */
    public function setRestorePointDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restorePointDateTime', $value);
    }

    /**
     * Sets the restorePointId property value. The restorePointId property
     * @param string|null $value Value to set for the restorePointId property.
    */
    public function setRestorePointId(?string $value): void {
        $this->getBackingStore()->set('restorePointId', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param BrowseSessionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BrowseSessionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
