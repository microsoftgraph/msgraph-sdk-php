<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DriveRestoreArtifactsBulkAdditionRequest extends RestoreArtifactsBulkRequestBase implements Parsable 
{
    /**
     * Instantiates a new DriveRestoreArtifactsBulkAdditionRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriveRestoreArtifactsBulkAdditionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriveRestoreArtifactsBulkAdditionRequest {
        return new DriveRestoreArtifactsBulkAdditionRequest();
    }

    /**
     * Gets the directoryObjectIds property value. The list of directory object IDs that are added to the corresponding OneDrive for work or school restore session in a bulk operation.
     * @return array<string>|null
    */
    public function getDirectoryObjectIds(): ?array {
        $val = $this->getBackingStore()->get('directoryObjectIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryObjectIds'");
    }

    /**
     * Gets the drives property value. The list of email addresses that are added to the corresponding OneDrive for work or school restore session in a bulk operation.
     * @return array<string>|null
    */
    public function getDrives(): ?array {
        $val = $this->getBackingStore()->get('drives');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drives'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'directoryObjectIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDirectoryObjectIds($val);
            },
            'drives' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDrives($val);
            },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('directoryObjectIds', $this->getDirectoryObjectIds());
        $writer->writeCollectionOfPrimitiveValues('drives', $this->getDrives());
    }

    /**
     * Sets the directoryObjectIds property value. The list of directory object IDs that are added to the corresponding OneDrive for work or school restore session in a bulk operation.
     * @param array<string>|null $value Value to set for the directoryObjectIds property.
    */
    public function setDirectoryObjectIds(?array $value): void {
        $this->getBackingStore()->set('directoryObjectIds', $value);
    }

    /**
     * Sets the drives property value. The list of email addresses that are added to the corresponding OneDrive for work or school restore session in a bulk operation.
     * @param array<string>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value): void {
        $this->getBackingStore()->set('drives', $value);
    }

}
