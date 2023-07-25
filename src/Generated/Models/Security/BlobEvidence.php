<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BlobEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new blobEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.blobEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BlobEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BlobEvidence {
        return new BlobEvidence();
    }

    /**
     * Gets the blobContainer property value. The blobContainer property
     * @return BlobContainerEvidence|null
    */
    public function getBlobContainer(): ?BlobContainerEvidence {
        $val = $this->getBackingStore()->get('blobContainer');
        if (is_null($val) || $val instanceof BlobContainerEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blobContainer'");
    }

    /**
     * Gets the etag property value. The etag property
     * @return string|null
    */
    public function getEtag(): ?string {
        $val = $this->getBackingStore()->get('etag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'etag'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'blobContainer' => fn(ParseNode $n) => $o->setBlobContainer($n->getObjectValue([BlobContainerEvidence::class, 'createFromDiscriminatorValue'])),
            'etag' => fn(ParseNode $n) => $o->setEtag($n->getStringValue()),
            'fileHashes' => fn(ParseNode $n) => $o->setFileHashes($n->getCollectionOfObjectValues([FileHash::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileHashes property value. The fileHashes property
     * @return array<FileHash>|null
    */
    public function getFileHashes(): ?array {
        $val = $this->getBackingStore()->get('fileHashes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileHash::class);
            /** @var array<FileHash>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileHashes'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('blobContainer', $this->getBlobContainer());
        $writer->writeStringValue('etag', $this->getEtag());
        $writer->writeCollectionOfObjectValues('fileHashes', $this->getFileHashes());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the blobContainer property value. The blobContainer property
     * @param BlobContainerEvidence|null $value Value to set for the blobContainer property.
    */
    public function setBlobContainer(?BlobContainerEvidence $value): void {
        $this->getBackingStore()->set('blobContainer', $value);
    }

    /**
     * Sets the etag property value. The etag property
     * @param string|null $value Value to set for the etag property.
    */
    public function setEtag(?string $value): void {
        $this->getBackingStore()->set('etag', $value);
    }

    /**
     * Sets the fileHashes property value. The fileHashes property
     * @param array<FileHash>|null $value Value to set for the fileHashes property.
    */
    public function setFileHashes(?array $value): void {
        $this->getBackingStore()->set('fileHashes', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
