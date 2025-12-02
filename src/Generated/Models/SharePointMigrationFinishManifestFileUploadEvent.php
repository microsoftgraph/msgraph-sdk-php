<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointMigrationFinishManifestFileUploadEvent extends SharePointMigrationEvent implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationFinishManifestFileUploadEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationFinishManifestFileUploadEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationFinishManifestFileUploadEvent {
        return new SharePointMigrationFinishManifestFileUploadEvent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'manifestFileName' => fn(ParseNode $n) => $o->setManifestFileName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the manifestFileName property value. The exported manifest file name. Read-only.
     * @return string|null
    */
    public function getManifestFileName(): ?string {
        $val = $this->getBackingStore()->get('manifestFileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manifestFileName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('manifestFileName', $this->getManifestFileName());
    }

    /**
     * Sets the manifestFileName property value. The exported manifest file name. Read-only.
     * @param string|null $value Value to set for the manifestFileName property.
    */
    public function setManifestFileName(?string $value): void {
        $this->getBackingStore()->set('manifestFileName', $value);
    }

}
