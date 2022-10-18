<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImportedWindowsAutopilotDeviceIdentityUpload extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTimeUtc DateTime when the entity is created.
    */
    private ?DateTime $createdDateTimeUtc = null;
    
    /**
     * @var array<ImportedWindowsAutopilotDeviceIdentity>|null $deviceIdentities Collection of all Autopilot devices as a part of this upload.
    */
    private ?array $deviceIdentities = null;
    
    /**
     * @var ImportedWindowsAutopilotDeviceIdentityUploadStatus|null $status The status property
    */
    private ?ImportedWindowsAutopilotDeviceIdentityUploadStatus $status = null;
    
    /**
     * Instantiates a new ImportedWindowsAutopilotDeviceIdentityUpload and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.importedWindowsAutopilotDeviceIdentityUpload');
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
        return $this->createdDateTimeUtc;
    }

    /**
     * Gets the deviceIdentities property value. Collection of all Autopilot devices as a part of this upload.
     * @return array<ImportedWindowsAutopilotDeviceIdentity>|null
    */
    public function getDeviceIdentities(): ?array {
        return $this->deviceIdentities;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTimeUtc', $this->createdDateTimeUtc);
        $writer->writeCollectionOfObjectValues('deviceIdentities', $this->deviceIdentities);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the createdDateTimeUtc property value. DateTime when the entity is created.
     *  @param DateTime|null $value Value to set for the createdDateTimeUtc property.
    */
    public function setCreatedDateTimeUtc(?DateTime $value ): void {
        $this->createdDateTimeUtc = $value;
    }

    /**
     * Sets the deviceIdentities property value. Collection of all Autopilot devices as a part of this upload.
     *  @param array<ImportedWindowsAutopilotDeviceIdentity>|null $value Value to set for the deviceIdentities property.
    */
    public function setDeviceIdentities(?array $value ): void {
        $this->deviceIdentities = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param ImportedWindowsAutopilotDeviceIdentityUploadStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ImportedWindowsAutopilotDeviceIdentityUploadStatus $value ): void {
        $this->status = $value;
    }

}
