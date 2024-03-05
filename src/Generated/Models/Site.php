<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\TermStore\Store;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Site extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new Site and sets the default values.
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
        $val = $this->getBackingStore()->get('analytics');
        if (is_null($val) || $val instanceof ItemAnalytics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'analytics'");
    }

    /**
     * Gets the columns property value. The collection of column definitions reusable across lists under this site.
     * @return array<ColumnDefinition>|null
    */
    public function getColumns(): ?array {
        $val = $this->getBackingStore()->get('columns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ColumnDefinition::class);
            /** @var array<ColumnDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columns'");
    }

    /**
     * Gets the contentTypes property value. The collection of content types defined for this site.
     * @return array<ContentType>|null
    */
    public function getContentTypes(): ?array {
        $val = $this->getBackingStore()->get('contentTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContentType::class);
            /** @var array<ContentType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentTypes'");
    }

    /**
     * Gets the displayName property value. The full title for the site. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the drive property value. The default drive (document library) for this site.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        $val = $this->getBackingStore()->get('drive');
        if (is_null($val) || $val instanceof Drive) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drive'");
    }

    /**
     * Gets the drives property value. The collection of drives (document libraries) under this site.
     * @return array<Drive>|null
    */
    public function getDrives(): ?array {
        $val = $this->getBackingStore()->get('drives');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Drive::class);
            /** @var array<Drive>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drives'");
    }

    /**
     * Gets the error property value. The error property
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof PublicError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * Gets the externalColumns property value. The externalColumns property
     * @return array<ColumnDefinition>|null
    */
    public function getExternalColumns(): ?array {
        $val = $this->getBackingStore()->get('externalColumns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ColumnDefinition::class);
            /** @var array<ColumnDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalColumns'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'isPersonalSite' => fn(ParseNode $n) => $o->setIsPersonalSite($n->getBooleanValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([BaseItem::class, 'createFromDiscriminatorValue'])),
            'lists' => fn(ParseNode $n) => $o->setLists($n->getCollectionOfObjectValues([EscapedList::class, 'createFromDiscriminatorValue'])),
            'onenote' => fn(ParseNode $n) => $o->setOnenote($n->getObjectValue([Onenote::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([RichLongRunningOperation::class, 'createFromDiscriminatorValue'])),
            'pages' => fn(ParseNode $n) => $o->setPages($n->getCollectionOfObjectValues([BaseSitePage::class, 'createFromDiscriminatorValue'])),
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
     * Gets the isPersonalSite property value. Identifies whether the site is personal or not. Read-only.
     * @return bool|null
    */
    public function getIsPersonalSite(): ?bool {
        $val = $this->getBackingStore()->get('isPersonalSite');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPersonalSite'");
    }

    /**
     * Gets the items property value. Used to address any item contained in this site. This collection can't be enumerated.
     * @return array<BaseItem>|null
    */
    public function getItems(): ?array {
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BaseItem::class);
            /** @var array<BaseItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
    }

    /**
     * Gets the lists property value. The collection of lists under this site.
     * @return array<EscapedList>|null
    */
    public function getLists(): ?array {
        $val = $this->getBackingStore()->get('lists');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EscapedList::class);
            /** @var array<EscapedList>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lists'");
    }

    /**
     * Gets the onenote property value. Calls the OneNote service for notebook related operations.
     * @return Onenote|null
    */
    public function getOnenote(): ?Onenote {
        $val = $this->getBackingStore()->get('onenote');
        if (is_null($val) || $val instanceof Onenote) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onenote'");
    }

    /**
     * Gets the operations property value. The collection of long-running operations on the site.
     * @return array<RichLongRunningOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RichLongRunningOperation::class);
            /** @var array<RichLongRunningOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the pages property value. The pages property
     * @return array<BaseSitePage>|null
    */
    public function getPages(): ?array {
        $val = $this->getBackingStore()->get('pages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BaseSitePage::class);
            /** @var array<BaseSitePage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pages'");
    }

    /**
     * Gets the permissions property value. The permissions associated with the site. Nullable.
     * @return array<Permission>|null
    */
    public function getPermissions(): ?array {
        $val = $this->getBackingStore()->get('permissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Permission::class);
            /** @var array<Permission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissions'");
    }

    /**
     * Gets the root property value. If present, indicates that this is the root site in the site collection. Read-only.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        $val = $this->getBackingStore()->get('root');
        if (is_null($val) || $val instanceof Root) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'root'");
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
     * Gets the siteCollection property value. Provides details about the site's site collection. Available only on the root site. Read-only.
     * @return SiteCollection|null
    */
    public function getSiteCollection(): ?SiteCollection {
        $val = $this->getBackingStore()->get('siteCollection');
        if (is_null($val) || $val instanceof SiteCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteCollection'");
    }

    /**
     * Gets the sites property value. The collection of the sub-sites under this site.
     * @return array<Site>|null
    */
    public function getSites(): ?array {
        $val = $this->getBackingStore()->get('sites');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Site::class);
            /** @var array<Site>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sites'");
    }

    /**
     * Gets the termStore property value. The default termStore under this site.
     * @return Store|null
    */
    public function getTermStore(): ?Store {
        $val = $this->getBackingStore()->get('termStore');
        if (is_null($val) || $val instanceof Store) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termStore'");
    }

    /**
     * Gets the termStores property value. The collection of termStores under this site.
     * @return array<Store>|null
    */
    public function getTermStores(): ?array {
        $val = $this->getBackingStore()->get('termStores');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Store::class);
            /** @var array<Store>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termStores'");
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
        $writer->writeBooleanValue('isPersonalSite', $this->getIsPersonalSite());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeCollectionOfObjectValues('lists', $this->getLists());
        $writer->writeObjectValue('onenote', $this->getOnenote());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('pages', $this->getPages());
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
     * Sets the error property value. The error property
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the externalColumns property value. The externalColumns property
     * @param array<ColumnDefinition>|null $value Value to set for the externalColumns property.
    */
    public function setExternalColumns(?array $value): void {
        $this->getBackingStore()->set('externalColumns', $value);
    }

    /**
     * Sets the isPersonalSite property value. Identifies whether the site is personal or not. Read-only.
     * @param bool|null $value Value to set for the isPersonalSite property.
    */
    public function setIsPersonalSite(?bool $value): void {
        $this->getBackingStore()->set('isPersonalSite', $value);
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
     * Sets the pages property value. The pages property
     * @param array<BaseSitePage>|null $value Value to set for the pages property.
    */
    public function setPages(?array $value): void {
        $this->getBackingStore()->set('pages', $value);
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
