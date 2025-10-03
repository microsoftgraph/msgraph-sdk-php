<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RestoreArtifactsBulkRequestBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new RestoreArtifactsBulkRequestBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestoreArtifactsBulkRequestBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestoreArtifactsBulkRequestBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.driveRestoreArtifactsBulkAdditionRequest': return new DriveRestoreArtifactsBulkAdditionRequest();
                case '#microsoft.graph.mailboxRestoreArtifactsBulkAdditionRequest': return new MailboxRestoreArtifactsBulkAdditionRequest();
                case '#microsoft.graph.siteRestoreArtifactsBulkAdditionRequest': return new SiteRestoreArtifactsBulkAdditionRequest();
            }
        }
        return new RestoreArtifactsBulkRequestBase();
    }

    /**
     * Gets the createdBy property value. The identity of the person who created the bulk request.
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
     * Gets the createdDateTime property value. The time when the bulk request was created.
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
     * Gets the destinationType property value. Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     * @return DestinationType|null
    */
    public function getDestinationType(): ?DestinationType {
        $val = $this->getBackingStore()->get('destinationType');
        if (is_null($val) || $val instanceof DestinationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationType'");
    }

    /**
     * Gets the displayName property value. Name of the addition request.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the error property value. Error details are populated for resource resolution failures.
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
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'destinationType' => fn(ParseNode $n) => $o->setDestinationType($n->getEnumValue(DestinationType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'protectionTimePeriod' => fn(ParseNode $n) => $o->setProtectionTimePeriod($n->getObjectValue([TimePeriod::class, 'createFromDiscriminatorValue'])),
            'protectionUnitIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProtectionUnitIds($val);
            },
            'restorePointPreference' => fn(ParseNode $n) => $o->setRestorePointPreference($n->getEnumValue(RestorePointPreference::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RestoreArtifactsBulkRequestStatus::class)),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getEnumValue(RestorePointTags::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the person who last modified this entity.
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
     * Gets the lastModifiedDateTime property value. Timestamp when this entity was last modified.
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
     * Gets the protectionTimePeriod property value. The start and end date and time of the protection period.
     * @return TimePeriod|null
    */
    public function getProtectionTimePeriod(): ?TimePeriod {
        $val = $this->getBackingStore()->get('protectionTimePeriod');
        if (is_null($val) || $val instanceof TimePeriod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionTimePeriod'");
    }

    /**
     * Gets the protectionUnitIds property value. Indicates which protection units to restore. This property isn't implemented yet. Future value; don't use.
     * @return array<string>|null
    */
    public function getProtectionUnitIds(): ?array {
        $val = $this->getBackingStore()->get('protectionUnitIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionUnitIds'");
    }

    /**
     * Gets the restorePointPreference property value. Indicates which restore point to return. The possible values are: oldest, latest, unknownFutureValue.
     * @return RestorePointPreference|null
    */
    public function getRestorePointPreference(): ?RestorePointPreference {
        $val = $this->getBackingStore()->get('restorePointPreference');
        if (is_null($val) || $val instanceof RestorePointPreference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointPreference'");
    }

    /**
     * Gets the status property value. The status property
     * @return RestoreArtifactsBulkRequestStatus|null
    */
    public function getStatus(): ?RestoreArtifactsBulkRequestStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof RestoreArtifactsBulkRequestStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tags property value. The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue.
     * @return RestorePointTags|null
    */
    public function getTags(): ?RestorePointTags {
        $val = $this->getBackingStore()->get('tags');
        if (is_null($val) || $val instanceof RestorePointTags) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('destinationType', $this->getDestinationType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('protectionTimePeriod', $this->getProtectionTimePeriod());
        $writer->writeCollectionOfPrimitiveValues('protectionUnitIds', $this->getProtectionUnitIds());
        $writer->writeEnumValue('restorePointPreference', $this->getRestorePointPreference());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('tags', $this->getTags());
    }

    /**
     * Sets the createdBy property value. The identity of the person who created the bulk request.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The time when the bulk request was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the destinationType property value. Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     * @param DestinationType|null $value Value to set for the destinationType property.
    */
    public function setDestinationType(?DestinationType $value): void {
        $this->getBackingStore()->set('destinationType', $value);
    }

    /**
     * Sets the displayName property value. Name of the addition request.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the error property value. Error details are populated for resource resolution failures.
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the person who last modified this entity.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Timestamp when this entity was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the protectionTimePeriod property value. The start and end date and time of the protection period.
     * @param TimePeriod|null $value Value to set for the protectionTimePeriod property.
    */
    public function setProtectionTimePeriod(?TimePeriod $value): void {
        $this->getBackingStore()->set('protectionTimePeriod', $value);
    }

    /**
     * Sets the protectionUnitIds property value. Indicates which protection units to restore. This property isn't implemented yet. Future value; don't use.
     * @param array<string>|null $value Value to set for the protectionUnitIds property.
    */
    public function setProtectionUnitIds(?array $value): void {
        $this->getBackingStore()->set('protectionUnitIds', $value);
    }

    /**
     * Sets the restorePointPreference property value. Indicates which restore point to return. The possible values are: oldest, latest, unknownFutureValue.
     * @param RestorePointPreference|null $value Value to set for the restorePointPreference property.
    */
    public function setRestorePointPreference(?RestorePointPreference $value): void {
        $this->getBackingStore()->set('restorePointPreference', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param RestoreArtifactsBulkRequestStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RestoreArtifactsBulkRequestStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tags property value. The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue.
     * @param RestorePointTags|null $value Value to set for the tags property.
    */
    public function setTags(?RestorePointTags $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
