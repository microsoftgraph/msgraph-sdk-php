<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestoreSessionBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new RestoreSessionBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestoreSessionBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestoreSessionBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.exchangeRestoreSession': return new ExchangeRestoreSession();
                case '#microsoft.graph.oneDriveForBusinessRestoreSession': return new OneDriveForBusinessRestoreSession();
                case '#microsoft.graph.sharePointRestoreSession': return new SharePointRestoreSession();
            }
        }
        return new RestoreSessionBase();
    }

    /**
     * Gets the completedDateTime property value. The time of completion of the restore session.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the createdBy property value. The identity of person who created the restore session.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The time of creation of the restore session.
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
     * Gets the error property value. Contains error details if the restore session fails or completes with an error.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'restoreJobType' => fn(ParseNode $n) => $o->setRestoreJobType($n->getEnumValue(RestoreJobType::class)),
            'restoreSessionArtifactCount' => fn(ParseNode $n) => $o->setRestoreSessionArtifactCount($n->getObjectValue([RestoreSessionArtifactCount::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RestoreSessionStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the person who last modified the restore session.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Timestamp of the last modification of the restore session.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the restoreJobType property value. Indicates whether the restore session was created normally or by a bulk job.
     * @return RestoreJobType|null
    */
    public function getRestoreJobType(): ?RestoreJobType {
        $val = $this->getBackingStore()->get('restoreJobType');
        if (is_null($val) || $val instanceof RestoreJobType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreJobType'");
    }

    /**
     * Gets the restoreSessionArtifactCount property value. The number of metadata artifacts that belong to this restore session.
     * @return RestoreSessionArtifactCount|null
    */
    public function getRestoreSessionArtifactCount(): ?RestoreSessionArtifactCount {
        $val = $this->getBackingStore()->get('restoreSessionArtifactCount');
        if (is_null($val) || $val instanceof RestoreSessionArtifactCount) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreSessionArtifactCount'");
    }

    /**
     * Gets the status property value. Status of the restore session. The value is an aggregated status of the restored artifacts. The possible values are: draft, activating, active, completedWithError, completed, unknownFutureValue, failed. Use the Prefer: include-unknown-enum-members request header to get the following members in this evolvable enum: failed.
     * @return RestoreSessionStatus|null
    */
    public function getStatus(): ?RestoreSessionStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof RestoreSessionStatus) {
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
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('restoreJobType', $this->getRestoreJobType());
        $writer->writeObjectValue('restoreSessionArtifactCount', $this->getRestoreSessionArtifactCount());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the completedDateTime property value. The time of completion of the restore session.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdBy property value. The identity of person who created the restore session.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The time of creation of the restore session.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the error property value. Contains error details if the restore session fails or completes with an error.
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the person who last modified the restore session.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Timestamp of the last modification of the restore session.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the restoreJobType property value. Indicates whether the restore session was created normally or by a bulk job.
     * @param RestoreJobType|null $value Value to set for the restoreJobType property.
    */
    public function setRestoreJobType(?RestoreJobType $value): void {
        $this->getBackingStore()->set('restoreJobType', $value);
    }

    /**
     * Sets the restoreSessionArtifactCount property value. The number of metadata artifacts that belong to this restore session.
     * @param RestoreSessionArtifactCount|null $value Value to set for the restoreSessionArtifactCount property.
    */
    public function setRestoreSessionArtifactCount(?RestoreSessionArtifactCount $value): void {
        $this->getBackingStore()->set('restoreSessionArtifactCount', $value);
    }

    /**
     * Sets the status property value. Status of the restore session. The value is an aggregated status of the restored artifacts. The possible values are: draft, activating, active, completedWithError, completed, unknownFutureValue, failed. Use the Prefer: include-unknown-enum-members request header to get the following members in this evolvable enum: failed.
     * @param RestoreSessionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RestoreSessionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
