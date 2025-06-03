<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MailboxRestoreArtifactsBulkAdditionRequest extends RestoreArtifactsBulkRequestBase implements Parsable 
{
    /**
     * Instantiates a new MailboxRestoreArtifactsBulkAdditionRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxRestoreArtifactsBulkAdditionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxRestoreArtifactsBulkAdditionRequest {
        return new MailboxRestoreArtifactsBulkAdditionRequest();
    }

    /**
     * Gets the directoryObjectIds property value. The list of directory object IDs that are added to the corresponding Exchange restore session in a bulk operation.
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
            'mailboxes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMailboxes($val);
            },
        ]);
    }

    /**
     * Gets the mailboxes property value. The list of email addresses that are added to the corresponding Exchange restore session in a bulk operation.
     * @return array<string>|null
    */
    public function getMailboxes(): ?array {
        $val = $this->getBackingStore()->get('mailboxes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('directoryObjectIds', $this->getDirectoryObjectIds());
        $writer->writeCollectionOfPrimitiveValues('mailboxes', $this->getMailboxes());
    }

    /**
     * Sets the directoryObjectIds property value. The list of directory object IDs that are added to the corresponding Exchange restore session in a bulk operation.
     * @param array<string>|null $value Value to set for the directoryObjectIds property.
    */
    public function setDirectoryObjectIds(?array $value): void {
        $this->getBackingStore()->set('directoryObjectIds', $value);
    }

    /**
     * Sets the mailboxes property value. The list of email addresses that are added to the corresponding Exchange restore session in a bulk operation.
     * @param array<string>|null $value Value to set for the mailboxes property.
    */
    public function setMailboxes(?array $value): void {
        $this->getBackingStore()->set('mailboxes', $value);
    }

}
