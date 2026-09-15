<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Note extends OutlookItem implements Parsable 
{
    /**
     * Instantiates a new Note and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.note');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Note
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Note {
        return new Note();
    }

    /**
     * Gets the attachments property value. The file attachments for the note. Only inline image attachments (image/png, image/jpeg, image/gif, or image/bmp) are supported, with a maximum size of 3 MB per attachment. Use $expand to retrieve attachments.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Attachment::class);
            /** @var array<Attachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the body property value. The content of the note. Supports text or html content types.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        $val = $this->getBackingStore()->get('body');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'body'");
    }

    /**
     * Gets the bodyPreview property value. Auto-generated preview of the note body content (first ~255 characters, plain text). Read-only.
     * @return string|null
    */
    public function getBodyPreview(): ?string {
        $val = $this->getBackingStore()->get('bodyPreview');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bodyPreview'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the note.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Extension::class);
            /** @var array<Extension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([Attachment::class, 'createFromDiscriminatorValue'])),
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'bodyPreview' => fn(ParseNode $n) => $o->setBodyPreview($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'isDeleted' => fn(ParseNode $n) => $o->setIsDeleted($n->getBooleanValue()),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hasAttachments property value. Indicates whether the note has file attachments. Supports $filter (eq). Read-only.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        $val = $this->getBackingStore()->get('hasAttachments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasAttachments'");
    }

    /**
     * Gets the isDeleted property value. Indicates whether the note is soft-deleted. Read-only.
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        $val = $this->getBackingStore()->get('isDeleted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDeleted'");
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the note.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('multiValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiValueLegacyExtendedProperty::class);
            /** @var array<MultiValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiValueExtendedProperties'");
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the note.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('singleValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SingleValueLegacyExtendedProperty::class);
            /** @var array<SingleValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleValueExtendedProperties'");
    }

    /**
     * Gets the subject property value. The title of the note. Supports $filter (eq, ne, startsWith) and $orderby.
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
        $writer->writeStringValue('subject', $this->getSubject());
    }

    /**
     * Sets the attachments property value. The file attachments for the note. Only inline image attachments (image/png, image/jpeg, image/gif, or image/bmp) are supported, with a maximum size of 3 MB per attachment. Use $expand to retrieve attachments.
     * @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the body property value. The content of the note. Supports text or html content types.
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the bodyPreview property value. Auto-generated preview of the note body content (first ~255 characters, plain text). Read-only.
     * @param string|null $value Value to set for the bodyPreview property.
    */
    public function setBodyPreview(?string $value): void {
        $this->getBackingStore()->set('bodyPreview', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the note.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the hasAttachments property value. Indicates whether the note has file attachments. Supports $filter (eq). Read-only.
     * @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the isDeleted property value. Indicates whether the note is soft-deleted. Read-only.
     * @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value): void {
        $this->getBackingStore()->set('isDeleted', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the note.
     * @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the note.
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

    /**
     * Sets the subject property value. The title of the note. Supports $filter (eq, ne, startsWith) and $orderby.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
