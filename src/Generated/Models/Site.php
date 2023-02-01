<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\TermStore\Store;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Site extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new site and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.site');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Site
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Site {
        return new Site();
    }

    /**
     * Gets the analytics property value. Analytics about the view activities that took place in this site.
     * @return ItemAnalytics|null
    */
    public function getAnalytics(): ?ItemAnalytics {
        return $this->getBackingStore()->get('analytics');
    }

    /**
     * Gets the columns property value. The collection of column definitions reusable across lists under this site.
     * @return array<ColumnDefinition>|null
    */
    public function getColumns(): ?array {
        return $this->getBackingStore()->get('columns');
    }

    /**
     * Gets the contentTypes property value. The collection of content types defined for this site.
     * @return array<ContentType>|null
    */
    public function getContentTypes(): ?array {
        return $this->getBackingStore()->get('contentTypes');
    }

    /**
     * Gets the displayName property value. The full title for the site. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the drive property value. The default drive (document library) for this site.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        return $this->getBackingStore()->get('drive');
    }

    /**
     * Gets the drives property value. The collection of drives (document libraries) under this site.
     * @return array<Drive>|null
    */
    public function getDrives(): ?array {
        return $this->getBackingStore()->get('drives');
    }

    /**
     * Gets the error property value. 
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * Gets the externalColumns property value. 
     * @return array<ColumnDefinition>|null
    */
    public function getExternalColumns(): ?array {
        return $this->getBackingStore()->get('externalColumns');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'analytics' => fn(ParseNode $n) => $o->setAnalytics($n->getObjectValue([ItemAnalytics::class, 'createFromDiscriminatorValue'])),
            'columns' => fn(ParseNode $n) => $o->setColumns($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'contentTypes' => fn(ParseNode $n) => $o->setContentTypes($n->getCollectionOfObjectValues([ContentType::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'drive' => fn(ParseNode $n) => $o->setDrive($n->getObjectValue([Drive::class, 'createFromDiscriminatorValue'])),
            'drives' => fn(ParseNode $n) => $o->setDrives($n->getCollectionOfObjectValues([Drive::class, 'createFromDiscriminatorValue'])),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'externalColumns' => fn(ParseNode $n) => $o->setExternalColumns($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([BaseItem::class, 'createFromDiscriminatorValue'])),
            'lists' => fn(ParseNode $n) => $o->setLists($n->getCollectionOfObjectValues([EscapedList::class, 'createFromDiscriminatorValue'])),
            'onenote' => fn(ParseNode $n) => $o->setOnenote($n->getObjectValue([Onenote::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([RichLongRunningOperation::class, 'createFromDiscriminatorValue'])),
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getCollectionOfObjectValues([Permission::class, 'createFromDiscriminatorValue'])),
            'root' => fn(ParseNode $n) => $o->setRoot($n->getObjectValue([Root::class, 'createFromDiscriminatorValue'])),
            'sharepointIds' => fn(ParseNode $n) => $o->setSharepointIds($n->getObjectValue([SharepointIds::class, 'createFromDiscriminatorValue'])),
            'siteCollection' => fn(ParseNode $n) => $o->setSiteCollection($n->getObjectValue([SiteCollection::class, 'createFromDiscriminatorValue'])),
            'sites' => fn(ParseNode $n) => $o->setSites($n->getCollectionOfObjectValues([Site::class, 'createFromDiscriminatorValue'])),
            'termStore' => fn(ParseNode $n) => $o->setTermStore($n->getObjectValue([Store::class, 'createFromDiscriminatorValue'])),
            'termStores' => fn(ParseNode $n) => $o->setTermStores($n->getCollectionOfObjectValues([Store::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the items property value. Used to address any item contained in this site. This collection can't be enumerated.
     * @return array<BaseItem>|null
    */
    public function getItems(): ?array {
        return $this->getBackingStore()->get('items');
    }

    /**
     * Gets the lists property value. The collection of lists under this site.
     * @return array<EscapedList>|null
    */
    public function getLists(): ?array {
        return $this->getBackingStore()->get('lists');
    }

    /**
     * Gets the onenote property value. Calls the OneNote service for notebook related operations.
     * @return Onenote|null
    */
    public function getOnenote(): ?Onenote {
        return $this->getBackingStore()->get('onenote');
    }

    /**
     * Gets the operations property value. The collection of long-running operations on the site.
     * @return array<RichLongRunningOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Gets the permissions property value. The permissions associated with the site. Nullable.
     * @return array<Permission>|null
    */
    public function getPermissions(): ?array {
        return $this->getBackingStore()->get('permissions');
    }

    /**
     * Gets the root property value. If present, indicates that this is the root site in the site collection. Read-only.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        return $this->getBackingStore()->get('root');
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        return $this->getBackingStore()->get('sharepointIds');
    }

    /**
     * Gets the siteCollection property value. Provides details about the site's site collection. Available only on the root site. Read-only.
     * @return SiteCollection|null
    */
    public function getSiteCollection(): ?SiteCollection {
        return $this->getBackingStore()->get('siteCollection');
    }

    /**
     * Gets the sites property value. The collection of the sub-sites under this site.
     * @return array<Site>|null
    */
    public function getSites(): ?array {
        return $this->getBackingStore()->get('sites');
    }

    /**
     * Gets the termStore property value. The default termStore under this site.
     * @return Store|null
    */
    public function getTermStore(): ?Store {
        return $this->getBackingStore()->get('termStore');
    }

    /**
     * Gets the termStores property value. The collection of termStores under this site.
     * @return array<Store>|null
    */
    public function getTermStores(): ?array {
        return $this->getBackingStore()->get('termStores');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('analytics', $this->getAnalytics());
        $writer->writeCollectionOfObjectValues('columns', $this->getColumns());
        $writer->writeCollectionOfObjectValues('contentTypes', $this->getContentTypes());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('drive', $this->getDrive());
        $writer->writeCollectionOfObjectValues('drives', $this->getDrives());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeCollectionOfObjectValues('externalColumns', $this->getExternalColumns());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeCollectionOfObjectValues('lists', $this->getLists());
        $writer->writeObjectValue('onenote', $this->getOnenote());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('permissions', $this->getPermissions());
        $writer->writeObjectValue('root', $this->getRoot());
        $writer->writeObjectValue('sharepointIds', $this->getSharepointIds());
        $writer->writeObjectValue('siteCollection', $this->getSiteCollection());
        $writer->writeCollectionOfObjectValues('sites', $this->getSites());
        $writer->writeObjectValue('termStore', $this->getTermStore());
        $writer->writeCollectionOfObjectValues('termStores', $this->getTermStores());
    }

    /**
     * Sets the analytics property value. Analytics about the view activities that took place in this site.
     * @param ItemAnalytics|null $value Value to set for the analytics property.
    */
    public function setAnalytics(?ItemAnalytics $value): void {
        $this->getBackingStore()->set('analytics', $value);
    }

    /**
     * Sets the columns property value. The collection of column definitions reusable across lists under this site.
     * @param array<ColumnDefinition>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value): void {
        $this->getBackingStore()->set('columns', $value);
    }

    /**
     * Sets the contentTypes property value. The collection of content types defined for this site.
     * @param array<ContentType>|null $value Value to set for the contentTypes property.
    */
    public function setContentTypes(?array $value): void {
        $this->getBackingStore()->set('contentTypes', $value);
    }

    /**
     * Sets the displayName property value. The full title for the site. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the drive property value. The default drive (document library) for this site.
     * @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value): void {
        $this->getBackingStore()->set('drive', $value);
    }

    /**
     * Sets the drives property value. The collection of drives (document libraries) under this site.
     * @param array<Drive>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value): void {
        $this->getBackingStore()->set('drives', $value);
    }

    /**
     * Sets the error property value. 
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the externalColumns property value. 
     * @param array<ColumnDefinition>|null $value Value to set for the externalColumns property.
    */
    public function setExternalColumns(?array $value): void {
        $this->getBackingStore()->set('externalColumns', $value);
    }

    /**
     * Sets the items property value. Used to address any item contained in this site. This collection can't be enumerated.
     * @param array<BaseItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the lists property value. The collection of lists under this site.
     * @param array<EscapedList>|null $value Value to set for the lists property.
    */
    public function setLists(?array $value): void {
        $this->getBackingStore()->set('lists', $value);
    }

    /**
     * Sets the onenote property value. Calls the OneNote service for notebook related operations.
     * @param Onenote|null $value Value to set for the onenote property.
    */
    public function setOnenote(?Onenote $value): void {
        $this->getBackingStore()->set('onenote', $value);
    }

    /**
     * Sets the operations property value. The collection of long-running operations on the site.
     * @param array<RichLongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the permissions property value. The permissions associated with the site. Nullable.
     * @param array<Permission>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the root property value. If present, indicates that this is the root site in the site collection. Read-only.
     * @param Root|null $value Value to set for the root property.
    */
    public function setRoot(?Root $value): void {
        $this->getBackingStore()->set('root', $value);
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value): void {
        $this->getBackingStore()->set('sharepointIds', $value);
    }

    /**
     * Sets the siteCollection property value. Provides details about the site's site collection. Available only on the root site. Read-only.
     * @param SiteCollection|null $value Value to set for the siteCollection property.
    */
    public function setSiteCollection(?SiteCollection $value): void {
        $this->getBackingStore()->set('siteCollection', $value);
    }

    /**
     * Sets the sites property value. The collection of the sub-sites under this site.
     * @param array<Site>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value): void {
        $this->getBackingStore()->set('sites', $value);
    }

    /**
     * Sets the termStore property value. The default termStore under this site.
     * @param Store|null $value Value to set for the termStore property.
    */
    public function setTermStore(?Store $value): void {
        $this->getBackingStore()->set('termStore', $value);
    }

    /**
     * Sets the termStores property value. The collection of termStores under this site.
     * @param array<Store>|null $value Value to set for the termStores property.
    */
    public function setTermStores(?array $value): void {
        $this->getBackingStore()->set('termStores', $value);
    }

}
