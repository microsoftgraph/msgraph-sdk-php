<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestoreArtifactBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new RestoreArtifactBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestoreArtifactBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestoreArtifactBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.driveRestoreArtifact': return new DriveRestoreArtifact();
                case '#microsoft.graph.granularMailboxRestoreArtifact': return new GranularMailboxRestoreArtifact();
                case '#microsoft.graph.mailboxRestoreArtifact': return new MailboxRestoreArtifact();
                case '#microsoft.graph.siteRestoreArtifact': return new SiteRestoreArtifact();
            }
        }
        return new RestoreArtifactBase();
    }

    /**
     * Gets the completionDateTime property value. The time when restoration of restore artifact is completed.
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionDateTime'");
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
            'completionDateTime' => fn(ParseNode $n) => $o->setCompletionDateTime($n->getDateTimeValue()),
            'destinationType' => fn(ParseNode $n) => $o->setDestinationType($n->getEnumValue(DestinationType::class)),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'restorePoint' => fn(ParseNode $n) => $o->setRestorePoint($n->getObjectValue([RestorePoint::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ArtifactRestoreStatus::class)),
        ]);
    }

    /**
     * Gets the restorePoint property value. Represents the date and time when an artifact is protected by a protectionPolicy and can be restored.
     * @return RestorePoint|null
    */
    public function getRestorePoint(): ?RestorePoint {
        $val = $this->getBackingStore()->get('restorePoint');
        if (is_null($val) || $val instanceof RestorePoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePoint'");
    }

    /**
     * Gets the startDateTime property value. The time when restoration of restore artifact is started.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. The individual restoration status of the restore artifact. The possible values are: added, scheduling, scheduled, inProgress, succeeded, failed, unknownFutureValue.
     * @return ArtifactRestoreStatus|null
    */
    public function getStatus(): ?ArtifactRestoreStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ArtifactRestoreStatus) {
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
        $writer->writeDateTimeValue('completionDateTime', $this->getCompletionDateTime());
        $writer->writeEnumValue('destinationType', $this->getDestinationType());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeObjectValue('restorePoint', $this->getRestorePoint());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the completionDateTime property value. The time when restoration of restore artifact is completed.
     * @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completionDateTime', $value);
    }

    /**
     * Sets the destinationType property value. Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     * @param DestinationType|null $value Value to set for the destinationType property.
    */
    public function setDestinationType(?DestinationType $value): void {
        $this->getBackingStore()->set('destinationType', $value);
    }

    /**
     * Sets the error property value. Contains error details if the restore session fails or completes with an error.
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the restorePoint property value. Represents the date and time when an artifact is protected by a protectionPolicy and can be restored.
     * @param RestorePoint|null $value Value to set for the restorePoint property.
    */
    public function setRestorePoint(?RestorePoint $value): void {
        $this->getBackingStore()->set('restorePoint', $value);
    }

    /**
     * Sets the startDateTime property value. The time when restoration of restore artifact is started.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The individual restoration status of the restore artifact. The possible values are: added, scheduling, scheduled, inProgress, succeeded, failed, unknownFutureValue.
     * @param ArtifactRestoreStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ArtifactRestoreStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
