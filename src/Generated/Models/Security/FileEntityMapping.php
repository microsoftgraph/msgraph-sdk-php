<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new FileEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.fileEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileEntityMapping {
        return new FileEntityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'nameColumn' => fn(ParseNode $n) => $o->setNameColumn($n->getStringValue()),
            'sha1Column' => fn(ParseNode $n) => $o->setSha1Column($n->getStringValue()),
            'sha256Column' => fn(ParseNode $n) => $o->setSha256Column($n->getStringValue()),
        ]);
    }

    /**
     * Gets the nameColumn property value. Name of the detection query column that maps to the name of the alert entity.
     * @return string|null
    */
    public function getNameColumn(): ?string {
        $val = $this->getBackingStore()->get('nameColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nameColumn'");
    }

    /**
     * Gets the sha1Column property value. Name of the detection query column that maps to the SHA-1 hash of the alert entity.
     * @return string|null
    */
    public function getSha1Column(): ?string {
        $val = $this->getBackingStore()->get('sha1Column');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha1Column'");
    }

    /**
     * Gets the sha256Column property value. Name of the detection query column that maps to the SHA-256 hash of the alert entity.
     * @return string|null
    */
    public function getSha256Column(): ?string {
        $val = $this->getBackingStore()->get('sha256Column');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha256Column'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('nameColumn', $this->getNameColumn());
        $writer->writeStringValue('sha1Column', $this->getSha1Column());
        $writer->writeStringValue('sha256Column', $this->getSha256Column());
    }

    /**
     * Sets the nameColumn property value. Name of the detection query column that maps to the name of the alert entity.
     * @param string|null $value Value to set for the nameColumn property.
    */
    public function setNameColumn(?string $value): void {
        $this->getBackingStore()->set('nameColumn', $value);
    }

    /**
     * Sets the sha1Column property value. Name of the detection query column that maps to the SHA-1 hash of the alert entity.
     * @param string|null $value Value to set for the sha1Column property.
    */
    public function setSha1Column(?string $value): void {
        $this->getBackingStore()->set('sha1Column', $value);
    }

    /**
     * Sets the sha256Column property value. Name of the detection query column that maps to the SHA-256 hash of the alert entity.
     * @param string|null $value Value to set for the sha256Column property.
    */
    public function setSha256Column(?string $value): void {
        $this->getBackingStore()->set('sha256Column', $value);
    }

}
