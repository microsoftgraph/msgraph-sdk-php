<?php

namespace Microsoft\Graph\Models;

use Microsoft\Graph\Models\TermStore\Store;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Site extends BaseItem implements Parsable 
{
    /**
     * @var ItemAnalytics|null $analytics Analytics about the view activities that took place in this site.
    */
    private ?ItemAnalytics $analytics = null;
    
    /**
     * @var array<ColumnDefinition>|null $columns The collection of column definitions reusable across lists under this site.
    */
    private ?array $columns = null;
    
    /**
     * @var array<ContentType>|null $contentTypes The collection of content types defined for this site.
    */
    private ?array $contentTypes = null;
    
    /**
     * @var string|null $displayName The full title for the site. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var Drive|null $drive The default drive (document library) for this site.
    */
    private ?Drive $drive = null;
    
    /**
     * @var array<Drive>|null $drives The collection of drives (document libraries) under this site.
    */
    private ?array $drives = null;
    
    /**
     * @var PublicError|null $error The error property
    */
    private ?PublicError $error = null;
    
    /**
     * @var array<ColumnDefinition>|null $externalColumns The collection of column definitions available in the site that are referenced from the sites in the parent hierarchy of the current site.
    */
    private ?array $externalColumns = null;
    
    /**
     * @var array<BaseItem>|null $items Used to address any item contained in this site. This collection cannot be enumerated.
    */
    private ?array $items = null;
    
    /**
     * @var array<EscapedList>|null $lists The collection of lists under this site.
    */
    private ?array $lists = null;
    
    /**
     * @var Onenote|null $onenote Calls the OneNote service for notebook related operations.
    */
    private ?Onenote $onenote = null;
    
    /**
     * @var array<RichLongRunningOperation>|null $operations The collection of long running operations for the site.
    */
    private ?array $operations = null;
    
    /**
     * @var array<Permission>|null $permissions The permissions associated with the site. Nullable.
    */
    private ?array $permissions = null;
    
    /**
     * @var Root|null $root If present, indicates that this is the root site in the site collection. Read-only.
    */
    private ?Root $root = null;
    
    /**
     * @var SharepointIds|null $sharepointIds Returns identifiers useful for SharePoint REST compatibility. Read-only.
    */
    private ?SharepointIds $sharepointIds = null;
    
    /**
     * @var SiteCollection|null $siteCollection Provides details about the site's site collection. Available only on the root site. Read-only.
    */
    private ?SiteCollection $siteCollection = null;
    
    /**
     * @var array<Site>|null $sites The collection of the sub-sites under this site.
    */
    private ?array $sites = null;
    
    /**
     * @var Store|null $termStore The termStore under this site.
    */
    private ?Store $termStore = null;
    
    /**
     * @var array<Store>|null $termStores The collection of termStores under this site.
    */
    private ?array $termStores = null;
    
    /**
     * Instantiates a new site and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->analytics;
    }

    /**
     * Gets the columns property value. The collection of column definitions reusable across lists under this site.
     * @return array<ColumnDefinition>|null
    */
    public function getColumns(): ?array {
        return $this->columns;
    }

    /**
     * Gets the contentTypes property value. The collection of content types defined for this site.
     * @return array<ContentType>|null
    */
    public function getContentTypes(): ?array {
        return $this->contentTypes;
    }

    /**
     * Gets the displayName property value. The full title for the site. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the drive property value. The default drive (document library) for this site.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        return $this->drive;
    }

    /**
     * Gets the drives property value. The collection of drives (document libraries) under this site.
     * @return array<Drive>|null
    */
    public function getDrives(): ?array {
        return $this->drives;
    }

    /**
     * Gets the error property value. The error property
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->error;
    }

    /**
     * Gets the externalColumns property value. The collection of column definitions available in the site that are referenced from the sites in the parent hierarchy of the current site.
     * @return array<ColumnDefinition>|null
    */
    public function getExternalColumns(): ?array {
        return $this->externalColumns;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'analytics' => function (ParseNode $n) use ($o) { $o->setAnalytics($n->getObjectValue(array(ItemAnalytics::class, 'createFromDiscriminatorValue'))); },
            'columns' => function (ParseNode $n) use ($o) { $o->setColumns($n->getCollectionOfObjectValues(array(ColumnDefinition::class, 'createFromDiscriminatorValue'))); },
            'contentTypes' => function (ParseNode $n) use ($o) { $o->setContentTypes($n->getCollectionOfObjectValues(array(ContentType::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'drive' => function (ParseNode $n) use ($o) { $o->setDrive($n->getObjectValue(array(Drive::class, 'createFromDiscriminatorValue'))); },
            'drives' => function (ParseNode $n) use ($o) { $o->setDrives($n->getCollectionOfObjectValues(array(Drive::class, 'createFromDiscriminatorValue'))); },
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(PublicError::class, 'createFromDiscriminatorValue'))); },
            'externalColumns' => function (ParseNode $n) use ($o) { $o->setExternalColumns($n->getCollectionOfObjectValues(array(ColumnDefinition::class, 'createFromDiscriminatorValue'))); },
            'items' => function (ParseNode $n) use ($o) { $o->setItems($n->getCollectionOfObjectValues(array(BaseItem::class, 'createFromDiscriminatorValue'))); },
            'lists' => function (ParseNode $n) use ($o) { $o->setLists($n->getCollectionOfObjectValues(array(EscapedList::class, 'createFromDiscriminatorValue'))); },
            'onenote' => function (ParseNode $n) use ($o) { $o->setOnenote($n->getObjectValue(array(Onenote::class, 'createFromDiscriminatorValue'))); },
            'operations' => function (ParseNode $n) use ($o) { $o->setOperations($n->getCollectionOfObjectValues(array(RichLongRunningOperation::class, 'createFromDiscriminatorValue'))); },
            'permissions' => function (ParseNode $n) use ($o) { $o->setPermissions($n->getCollectionOfObjectValues(array(Permission::class, 'createFromDiscriminatorValue'))); },
            'root' => function (ParseNode $n) use ($o) { $o->setRoot($n->getObjectValue(array(Root::class, 'createFromDiscriminatorValue'))); },
            'sharepointIds' => function (ParseNode $n) use ($o) { $o->setSharepointIds($n->getObjectValue(array(SharepointIds::class, 'createFromDiscriminatorValue'))); },
            'siteCollection' => function (ParseNode $n) use ($o) { $o->setSiteCollection($n->getObjectValue(array(SiteCollection::class, 'createFromDiscriminatorValue'))); },
            'sites' => function (ParseNode $n) use ($o) { $o->setSites($n->getCollectionOfObjectValues(array(Site::class, 'createFromDiscriminatorValue'))); },
            'termStore' => function (ParseNode $n) use ($o) { $o->setTermStore($n->getObjectValue(array(Store::class, 'createFromDiscriminatorValue'))); },
            'termStores' => function (ParseNode $n) use ($o) { $o->setTermStores($n->getCollectionOfObjectValues(array(Store::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the items property value. Used to address any item contained in this site. This collection cannot be enumerated.
     * @return array<BaseItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the lists property value. The collection of lists under this site.
     * @return array<EscapedList>|null
    */
    public function getLists(): ?array {
        return $this->lists;
    }

    /**
     * Gets the onenote property value. Calls the OneNote service for notebook related operations.
     * @return Onenote|null
    */
    public function getOnenote(): ?Onenote {
        return $this->onenote;
    }

    /**
     * Gets the operations property value. The collection of long running operations for the site.
     * @return array<RichLongRunningOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the permissions property value. The permissions associated with the site. Nullable.
     * @return array<Permission>|null
    */
    public function getPermissions(): ?array {
        return $this->permissions;
    }

    /**
     * Gets the root property value. If present, indicates that this is the root site in the site collection. Read-only.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        return $this->root;
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        return $this->sharepointIds;
    }

    /**
     * Gets the siteCollection property value. Provides details about the site's site collection. Available only on the root site. Read-only.
     * @return SiteCollection|null
    */
    public function getSiteCollection(): ?SiteCollection {
        return $this->siteCollection;
    }

    /**
     * Gets the sites property value. The collection of the sub-sites under this site.
     * @return array<Site>|null
    */
    public function getSites(): ?array {
        return $this->sites;
    }

    /**
     * Gets the termStore property value. The termStore under this site.
     * @return Store|null
    */
    public function getTermStore(): ?Store {
        return $this->termStore;
    }

    /**
     * Gets the termStores property value. The collection of termStores under this site.
     * @return array<Store>|null
    */
    public function getTermStores(): ?array {
        return $this->termStores;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('analytics', $this->analytics);
        $writer->writeCollectionOfObjectValues('columns', $this->columns);
        $writer->writeCollectionOfObjectValues('contentTypes', $this->contentTypes);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('drive', $this->drive);
        $writer->writeCollectionOfObjectValues('drives', $this->drives);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeCollectionOfObjectValues('externalColumns', $this->externalColumns);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeCollectionOfObjectValues('lists', $this->lists);
        $writer->writeObjectValue('onenote', $this->onenote);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('permissions', $this->permissions);
        $writer->writeObjectValue('root', $this->root);
        $writer->writeObjectValue('sharepointIds', $this->sharepointIds);
        $writer->writeObjectValue('siteCollection', $this->siteCollection);
        $writer->writeCollectionOfObjectValues('sites', $this->sites);
        $writer->writeObjectValue('termStore', $this->termStore);
        $writer->writeCollectionOfObjectValues('termStores', $this->termStores);
    }

    /**
     * Sets the analytics property value. Analytics about the view activities that took place in this site.
     *  @param ItemAnalytics|null $value Value to set for the analytics property.
    */
    public function setAnalytics(?ItemAnalytics $value ): void {
        $this->analytics = $value;
    }

    /**
     * Sets the columns property value. The collection of column definitions reusable across lists under this site.
     *  @param array<ColumnDefinition>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value ): void {
        $this->columns = $value;
    }

    /**
     * Sets the contentTypes property value. The collection of content types defined for this site.
     *  @param array<ContentType>|null $value Value to set for the contentTypes property.
    */
    public function setContentTypes(?array $value ): void {
        $this->contentTypes = $value;
    }

    /**
     * Sets the displayName property value. The full title for the site. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the drive property value. The default drive (document library) for this site.
     *  @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value ): void {
        $this->drive = $value;
    }

    /**
     * Sets the drives property value. The collection of drives (document libraries) under this site.
     *  @param array<Drive>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value ): void {
        $this->drives = $value;
    }

    /**
     * Sets the error property value. The error property
     *  @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the externalColumns property value. The collection of column definitions available in the site that are referenced from the sites in the parent hierarchy of the current site.
     *  @param array<ColumnDefinition>|null $value Value to set for the externalColumns property.
    */
    public function setExternalColumns(?array $value ): void {
        $this->externalColumns = $value;
    }

    /**
     * Sets the items property value. Used to address any item contained in this site. This collection cannot be enumerated.
     *  @param array<BaseItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the lists property value. The collection of lists under this site.
     *  @param array<EscapedList>|null $value Value to set for the lists property.
    */
    public function setLists(?array $value ): void {
        $this->lists = $value;
    }

    /**
     * Sets the onenote property value. Calls the OneNote service for notebook related operations.
     *  @param Onenote|null $value Value to set for the onenote property.
    */
    public function setOnenote(?Onenote $value ): void {
        $this->onenote = $value;
    }

    /**
     * Sets the operations property value. The collection of long running operations for the site.
     *  @param array<RichLongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the permissions property value. The permissions associated with the site. Nullable.
     *  @param array<Permission>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value ): void {
        $this->permissions = $value;
    }

    /**
     * Sets the root property value. If present, indicates that this is the root site in the site collection. Read-only.
     *  @param Root|null $value Value to set for the root property.
    */
    public function setRoot(?Root $value ): void {
        $this->root = $value;
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     *  @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value ): void {
        $this->sharepointIds = $value;
    }

    /**
     * Sets the siteCollection property value. Provides details about the site's site collection. Available only on the root site. Read-only.
     *  @param SiteCollection|null $value Value to set for the siteCollection property.
    */
    public function setSiteCollection(?SiteCollection $value ): void {
        $this->siteCollection = $value;
    }

    /**
     * Sets the sites property value. The collection of the sub-sites under this site.
     *  @param array<Site>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value ): void {
        $this->sites = $value;
    }

    /**
     * Sets the termStore property value. The termStore under this site.
     *  @param Store|null $value Value to set for the termStore property.
    */
    public function setTermStore(?Store $value ): void {
        $this->termStore = $value;
    }

    /**
     * Sets the termStores property value. The collection of termStores under this site.
     *  @param array<Store>|null $value Value to set for the termStores property.
    */
    public function setTermStores(?array $value ): void {
        $this->termStores = $value;
    }

}
