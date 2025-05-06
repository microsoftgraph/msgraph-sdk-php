<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OneDriveForBusinessRestoreSession extends RestoreSessionBase implements Parsable 
{
    /**
     * Instantiates a new OneDriveForBusinessRestoreSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.oneDriveForBusinessRestoreSession');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OneDriveForBusinessRestoreSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OneDriveForBusinessRestoreSession {
        return new OneDriveForBusinessRestoreSession();
    }

    /**
     * Gets the driveRestoreArtifacts property value. A collection of restore points and destination details that can be used to restore a OneDrive for Business drive.
     * @return array<DriveRestoreArtifact>|null
    */
    public function getDriveRestoreArtifacts(): ?array {
        $val = $this->getBackingStore()->get('driveRestoreArtifacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveRestoreArtifact::class);
            /** @var array<DriveRestoreArtifact>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveRestoreArtifacts'");
    }

    /**
     * Gets the driveRestoreArtifactsBulkAdditionRequests property value. The driveRestoreArtifactsBulkAdditionRequests property
     * @return array<DriveRestoreArtifactsBulkAdditionRequest>|null
    */
    public function getDriveRestoreArtifactsBulkAdditionRequests(): ?array {
        $val = $this->getBackingStore()->get('driveRestoreArtifactsBulkAdditionRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveRestoreArtifactsBulkAdditionRequest::class);
            /** @var array<DriveRestoreArtifactsBulkAdditionRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveRestoreArtifactsBulkAdditionRequests'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'driveRestoreArtifacts' => fn(ParseNode $n) => $o->setDriveRestoreArtifacts($n->getCollectionOfObjectValues([DriveRestoreArtifact::class, 'createFromDiscriminatorValue'])),
            'driveRestoreArtifactsBulkAdditionRequests' => fn(ParseNode $n) => $o->setDriveRestoreArtifactsBulkAdditionRequests($n->getCollectionOfObjectValues([DriveRestoreArtifactsBulkAdditionRequest::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('driveRestoreArtifacts', $this->getDriveRestoreArtifacts());
        $writer->writeCollectionOfObjectValues('driveRestoreArtifactsBulkAdditionRequests', $this->getDriveRestoreArtifactsBulkAdditionRequests());
    }

    /**
     * Sets the driveRestoreArtifacts property value. A collection of restore points and destination details that can be used to restore a OneDrive for Business drive.
     * @param array<DriveRestoreArtifact>|null $value Value to set for the driveRestoreArtifacts property.
    */
    public function setDriveRestoreArtifacts(?array $value): void {
        $this->getBackingStore()->set('driveRestoreArtifacts', $value);
    }

    /**
     * Sets the driveRestoreArtifactsBulkAdditionRequests property value. The driveRestoreArtifactsBulkAdditionRequests property
     * @param array<DriveRestoreArtifactsBulkAdditionRequest>|null $value Value to set for the driveRestoreArtifactsBulkAdditionRequests property.
    */
    public function setDriveRestoreArtifactsBulkAdditionRequests(?array $value): void {
        $this->getBackingStore()->set('driveRestoreArtifactsBulkAdditionRequests', $value);
    }

}
