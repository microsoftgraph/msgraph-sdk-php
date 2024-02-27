<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ListItem extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new ListItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.listItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListItem {
        return new ListItem();
    }

    /**
     * Gets the analytics property value. Analytics about the view activities that took place on this item.
     * @return ItemAnalytics|null
    */
    public function getAnalytics(): ?ItemAnalytics {
        $val = $this->getBackingStore()->get('analytics');
        if (is_null($val) || $val instanceof ItemAnalytics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'analytics'");
    }

    /**
     * Gets the contentType property value. The content type of this list item
     * @return ContentTypeInfo|null
    */
    public function getContentType(): ?ContentTypeInfo {
        $val = $this->getBackingStore()->get('contentType');
        if (is_null($val) || $val instanceof ContentTypeInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentType'");
    }

    /**
     * Gets the documentSetVersions property value. Version information for a document set version created by a user.
     * @return array<DocumentSetVersion>|null
    */
    public function getDocumentSetVersions(): ?array {
        $val = $this->getBackingStore()->get('documentSetVersions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DocumentSetVersion::class);
            /** @var array<DocumentSetVersion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentSetVersions'");
    }

    /**
     * Gets the driveItem property value. For document libraries, the driveItem relationship exposes the listItem as a [driveItem][]
     * @return DriveItem|null
    */
    public function getDriveItem(): ?DriveItem {
        $val = $this->getBackingStore()->get('driveItem');
        if (is_null($val) || $val instanceof DriveItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveItem'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'analytics' => fn(ParseNode $n) => $o->setAnalytics($n->getObjectValue([ItemAnalytics::class, 'createFromDiscriminatorValue'])),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getObjectValue([ContentTypeInfo::class, 'createFromDiscriminatorValue'])),
            'documentSetVersions' => fn(ParseNode $n) => $o->setDocumentSetVersions($n->getCollectionOfObjectValues([DocumentSetVersion::class, 'createFromDiscriminatorValue'])),
            'driveItem' => fn(ParseNode $n) => $o->setDriveItem($n->getObjectValue([DriveItem::class, 'createFromDiscriminatorValue'])),
            'fields' => fn(ParseNode $n) => $o->setFields($n->getObjectValue([FieldValueSet::class, 'createFromDiscriminatorValue'])),
            'sharepointIds' => fn(ParseNode $n) => $o->setSharepointIds($n->getObjectValue([SharepointIds::class, 'createFromDiscriminatorValue'])),
            'versions' => fn(ParseNode $n) => $o->setVersions($n->getCollectionOfObjectValues([ListItemVersion::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fields property value. The values of the columns set on this list item.
     * @return FieldValueSet|null
    */
    public function getFields(): ?FieldValueSet {
        $val = $this->getBackingStore()->get('fields');
        if (is_null($val) || $val instanceof FieldValueSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fields'");
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        $val = $this->getBackingStore()->get('sharepointIds');
        if (is_null($val) || $val instanceof SharepointIds) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharepointIds'");
    }

    /**
     * Gets the versions property value. The list of previous versions of the list item.
     * @return array<ListItemVersion>|null
    */
    public function getVersions(): ?array {
        $val = $this->getBackingStore()->get('versions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ListItemVersion::class);
            /** @var array<ListItemVersion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('analytics', $this->getAnalytics());
        $writer->writeObjectValue('contentType', $this->getContentType());
        $writer->writeCollectionOfObjectValues('documentSetVersions', $this->getDocumentSetVersions());
        $writer->writeObjectValue('driveItem', $this->getDriveItem());
        $writer->writeObjectValue('fields', $this->getFields());
        $writer->writeObjectValue('sharepointIds', $this->getSharepointIds());
        $writer->writeCollectionOfObjectValues('versions', $this->getVersions());
    }

    /**
     * Sets the analytics property value. Analytics about the view activities that took place on this item.
     * @param ItemAnalytics|null $value Value to set for the analytics property.
    */
    public function setAnalytics(?ItemAnalytics $value): void {
        $this->getBackingStore()->set('analytics', $value);
    }

    /**
     * Sets the contentType property value. The content type of this list item
     * @param ContentTypeInfo|null $value Value to set for the contentType property.
    */
    public function setContentType(?ContentTypeInfo $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the documentSetVersions property value. Version information for a document set version created by a user.
     * @param array<DocumentSetVersion>|null $value Value to set for the documentSetVersions property.
    */
    public function setDocumentSetVersions(?array $value): void {
        $this->getBackingStore()->set('documentSetVersions', $value);
    }

    /**
     * Sets the driveItem property value. For document libraries, the driveItem relationship exposes the listItem as a [driveItem][]
     * @param DriveItem|null $value Value to set for the driveItem property.
    */
    public function setDriveItem(?DriveItem $value): void {
        $this->getBackingStore()->set('driveItem', $value);
    }

    /**
     * Sets the fields property value. The values of the columns set on this list item.
     * @param FieldValueSet|null $value Value to set for the fields property.
    */
    public function setFields(?FieldValueSet $value): void {
        $this->getBackingStore()->set('fields', $value);
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value): void {
        $this->getBackingStore()->set('sharepointIds', $value);
    }

    /**
     * Sets the versions property value. The list of previous versions of the list item.
     * @param array<ListItemVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value): void {
        $this->getBackingStore()->set('versions', $value);
    }

}
