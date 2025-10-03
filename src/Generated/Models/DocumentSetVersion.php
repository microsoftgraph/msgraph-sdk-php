<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DocumentSetVersion extends ListItemVersion implements Parsable 
{
    /**
     * Instantiates a new DocumentSetVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.documentSetVersion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentSetVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentSetVersion {
        return new DocumentSetVersion();
    }

    /**
     * Gets the comment property value. Comment about the captured version.
     * @return string|null
    */
    public function getComment(): ?string {
        $val = $this->getBackingStore()->get('comment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comment'");
    }

    /**
     * Gets the createdBy property value. User who captured the version.
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
     * Gets the createdDateTime property value. Date and time when this version was created.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([DocumentSetVersionItem::class, 'createFromDiscriminatorValue'])),
            'shouldCaptureMinorVersion' => fn(ParseNode $n) => $o->setShouldCaptureMinorVersion($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the items property value. Items within the document set that are captured as part of this version.
     * @return array<DocumentSetVersionItem>|null
    */
    public function getItems(): ?array {
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DocumentSetVersionItem::class);
            /** @var array<DocumentSetVersionItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
    }

    /**
     * Gets the shouldCaptureMinorVersion property value. If true, minor versions of items are also captured; otherwise, only major versions are captured. The default value is false.
     * @return bool|null
    */
    public function getShouldCaptureMinorVersion(): ?bool {
        $val = $this->getBackingStore()->get('shouldCaptureMinorVersion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shouldCaptureMinorVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeBooleanValue('shouldCaptureMinorVersion', $this->getShouldCaptureMinorVersion());
    }

    /**
     * Sets the comment property value. Comment about the captured version.
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the createdBy property value. User who captured the version.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time when this version was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the items property value. Items within the document set that are captured as part of this version.
     * @param array<DocumentSetVersionItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the shouldCaptureMinorVersion property value. If true, minor versions of items are also captured; otherwise, only major versions are captured. The default value is false.
     * @param bool|null $value Value to set for the shouldCaptureMinorVersion property.
    */
    public function setShouldCaptureMinorVersion(?bool $value): void {
        $this->getBackingStore()->set('shouldCaptureMinorVersion', $value);
    }

}
