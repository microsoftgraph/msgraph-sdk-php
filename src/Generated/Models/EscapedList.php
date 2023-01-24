<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EscapedList extends BaseItem implements Parsable 
{
    /**
     * @var ListInfo|null $escapedList Provides additional details about the list.
    */
    public ?ListInfo $escapedList = null;
    
    /**
     * Instantiates a new EscapedList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.list');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EscapedList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EscapedList {
        return new EscapedList();
    }

    /**
     * Gets the columns property value. The collection of field definitions for this list.
     * @return array<ColumnDefinition>|null
    */
    public function getColumns(): ?array {
        return $this->getBackingStore()->get('columns');
    }

    /**
     * Gets the contentTypes property value. The collection of content types present in this list.
     * @return array<ContentType>|null
    */
    public function getContentTypes(): ?array {
        return $this->getBackingStore()->get('contentTypes');
    }

    /**
     * Gets the displayName property value. The displayable title of the list.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the drive property value. Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem].
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        return $this->getBackingStore()->get('drive');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'columns' => fn(ParseNode $n) => $o->setColumns($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'contentTypes' => fn(ParseNode $n) => $o->setContentTypes($n->getCollectionOfObjectValues([ContentType::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'drive' => fn(ParseNode $n) => $o->setDrive($n->getObjectValue([Drive::class, 'createFromDiscriminatorValue'])),
            'list' => fn(ParseNode $n) => $o->setList($n->getObjectValue([ListInfo::class, 'createFromDiscriminatorValue'])),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([ListItem::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([RichLongRunningOperation::class, 'createFromDiscriminatorValue'])),
            'sharepointIds' => fn(ParseNode $n) => $o->setSharepointIds($n->getObjectValue([SharepointIds::class, 'createFromDiscriminatorValue'])),
            'subscriptions' => fn(ParseNode $n) => $o->setSubscriptions($n->getCollectionOfObjectValues([Subscription::class, 'createFromDiscriminatorValue'])),
            'system' => fn(ParseNode $n) => $o->setSystem($n->getObjectValue([SystemFacet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the items property value. All items contained in the list.
     * @return array<ListItem>|null
    */
    public function getItems(): ?array {
        return $this->getBackingStore()->get('items');
    }

    /**
     * Gets the list property value. Provides additional details about the list.
     * @return ListInfo|null
    */
    public function getList(): ?ListInfo {
        return $this->getBackingStore()->get('escapedList');
    }

    /**
     * Gets the operations property value. The collection of long-running operations on the list.
     * @return array<RichLongRunningOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        return $this->getBackingStore()->get('sharepointIds');
    }

    /**
     * Gets the subscriptions property value. The set of subscriptions on the list.
     * @return array<Subscription>|null
    */
    public function getSubscriptions(): ?array {
        return $this->getBackingStore()->get('subscriptions');
    }

    /**
     * Gets the system property value. If present, indicates that this is a system-managed list. Read-only.
     * @return SystemFacet|null
    */
    public function getSystem(): ?SystemFacet {
        return $this->getBackingStore()->get('system');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('columns', $this->getColumns());
        $writer->writeCollectionOfObjectValues('contentTypes', $this->getContentTypes());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('drive', $this->getDrive());
        $writer->writeObjectValue('list', $this->getList());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeObjectValue('sharepointIds', $this->getSharepointIds());
        $writer->writeCollectionOfObjectValues('subscriptions', $this->getSubscriptions());
        $writer->writeObjectValue('system', $this->getSystem());
    }

    /**
     * Sets the columns property value. The collection of field definitions for this list.
     * @param array<ColumnDefinition>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value): void {
        $this->getBackingStore()->set('columns', $value);
    }

    /**
     * Sets the contentTypes property value. The collection of content types present in this list.
     * @param array<ContentType>|null $value Value to set for the contentTypes property.
    */
    public function setContentTypes(?array $value): void {
        $this->getBackingStore()->set('contentTypes', $value);
    }

    /**
     * Sets the displayName property value. The displayable title of the list.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the drive property value. Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem].
     * @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value): void {
        $this->getBackingStore()->set('drive', $value);
    }

    /**
     * Sets the items property value. All items contained in the list.
     * @param array<ListItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the list property value. Provides additional details about the list.
     * @param ListInfo|null $value Value to set for the EscapedList property.
    */
    public function setList(?ListInfo $value): void {
        $this->getBackingStore()->set('escapedList', $value);
    }

    /**
     * Sets the operations property value. The collection of long-running operations on the list.
     * @param array<RichLongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value): void {
        $this->getBackingStore()->set('sharepointIds', $value);
    }

    /**
     * Sets the subscriptions property value. The set of subscriptions on the list.
     * @param array<Subscription>|null $value Value to set for the subscriptions property.
    */
    public function setSubscriptions(?array $value): void {
        $this->getBackingStore()->set('subscriptions', $value);
    }

    /**
     * Sets the system property value. If present, indicates that this is a system-managed list. Read-only.
     * @param SystemFacet|null $value Value to set for the system property.
    */
    public function setSystem(?SystemFacet $value): void {
        $this->getBackingStore()->set('system', $value);
    }

}
