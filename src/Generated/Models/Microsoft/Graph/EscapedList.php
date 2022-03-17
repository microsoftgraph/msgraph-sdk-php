<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EscapedList extends BaseItem 
{
    /** @var array<ColumnDefinition>|null $columns The collection of field definitions for this list. */
    private ?array $columns = null;
    
    /** @var array<ContentType>|null $contentTypes The collection of content types present in this list. */
    private ?array $contentTypes = null;
    
    /** @var string|null $displayName The displayable title of the list. */
    private ?string $displayName = null;
    
    /** @var Drive|null $drive Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem]. */
    private ?Drive $drive = null;
    
    /** @var ListInfo|null $EscapedList Provides additional details about the list. */
    private ?ListInfo $escapedList = null;
    
    /** @var array<ListItem>|null $items All items contained in the list. */
    private ?array $items = null;
    
    /** @var SharepointIds|null $sharepointIds Returns identifiers useful for SharePoint REST compatibility. Read-only. */
    private ?SharepointIds $sharepointIds = null;
    
    /** @var array<Subscription>|null $subscriptions The set of subscriptions on the list. */
    private ?array $subscriptions = null;
    
    /** @var SystemFacet|null $system If present, indicates that this is a system-managed list. Read-only. */
    private ?SystemFacet $system = null;
    
    /**
     * Instantiates a new EscapedList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EscapedList
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EscapedList {
        return new EscapedList();
    }

    /**
     * Gets the columns property value. The collection of field definitions for this list.
     * @return array<ColumnDefinition>|null
    */
    public function getColumns(): ?array {
        return $this->columns;
    }

    /**
     * Gets the contentTypes property value. The collection of content types present in this list.
     * @return array<ContentType>|null
    */
    public function getContentTypes(): ?array {
        return $this->contentTypes;
    }

    /**
     * Gets the displayName property value. The displayable title of the list.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the drive property value. Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem].
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        return $this->drive;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'columns' => function (self $o, ParseNode $n) { $o->setColumns($n->getCollectionOfObjectValues(ColumnDefinition::class)); },
            'contentTypes' => function (self $o, ParseNode $n) { $o->setContentTypes($n->getCollectionOfObjectValues(ContentType::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'drive' => function (self $o, ParseNode $n) { $o->setDrive($n->getObjectValue(Drive::class)); },
            'list' => function (self $o, ParseNode $n) { $o->setEscapedList($n->getObjectValue(ListInfo::class)); },
            'items' => function (self $o, ParseNode $n) { $o->setItems($n->getCollectionOfObjectValues(ListItem::class)); },
            'sharepointIds' => function (self $o, ParseNode $n) { $o->setSharepointIds($n->getObjectValue(SharepointIds::class)); },
            'subscriptions' => function (self $o, ParseNode $n) { $o->setSubscriptions($n->getCollectionOfObjectValues(Subscription::class)); },
            'system' => function (self $o, ParseNode $n) { $o->setSystem($n->getObjectValue(SystemFacet::class)); },
        ]);
    }

    /**
     * Gets the items property value. All items contained in the list.
     * @return array<ListItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the list property value. Provides additional details about the list.
     * @return ListInfo|null
    */
    public function getList(): ?ListInfo {
        return $this->escapedList;
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        return $this->sharepointIds;
    }

    /**
     * Gets the subscriptions property value. The set of subscriptions on the list.
     * @return array<Subscription>|null
    */
    public function getSubscriptions(): ?array {
        return $this->subscriptions;
    }

    /**
     * Gets the system property value. If present, indicates that this is a system-managed list. Read-only.
     * @return SystemFacet|null
    */
    public function getSystem(): ?SystemFacet {
        return $this->system;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('columns', $this->columns);
        $writer->writeCollectionOfObjectValues('contentTypes', $this->contentTypes);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('drive', $this->drive);
        $writer->writeObjectValue('list', $this->escapedList);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeObjectValue('sharepointIds', $this->sharepointIds);
        $writer->writeCollectionOfObjectValues('subscriptions', $this->subscriptions);
        $writer->writeObjectValue('system', $this->system);
    }

    /**
     * Sets the columns property value. The collection of field definitions for this list.
     *  @param array<ColumnDefinition>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value ): void {
        $this->columns = $value;
    }

    /**
     * Sets the contentTypes property value. The collection of content types present in this list.
     *  @param array<ContentType>|null $value Value to set for the contentTypes property.
    */
    public function setContentTypes(?array $value ): void {
        $this->contentTypes = $value;
    }

    /**
     * Sets the displayName property value. The displayable title of the list.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the drive property value. Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem].
     *  @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value ): void {
        $this->drive = $value;
    }

    /**
     * Sets the items property value. All items contained in the list.
     *  @param array<ListItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the list property value. Provides additional details about the list.
     *  @param ListInfo|null $value Value to set for the EscapedList property.
    */
    public function setList(?ListInfo $value ): void {
        $this->escapedList = $value;
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     *  @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value ): void {
        $this->sharepointIds = $value;
    }

    /**
     * Sets the subscriptions property value. The set of subscriptions on the list.
     *  @param array<Subscription>|null $value Value to set for the subscriptions property.
    */
    public function setSubscriptions(?array $value ): void {
        $this->subscriptions = $value;
    }

    /**
     * Sets the system property value. If present, indicates that this is a system-managed list. Read-only.
     *  @param SystemFacet|null $value Value to set for the system property.
    */
    public function setSystem(?SystemFacet $value ): void {
        $this->system = $value;
    }

}
