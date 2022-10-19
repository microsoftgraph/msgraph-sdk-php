<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedDriveItem extends BaseItem implements Parsable 
{
    /**
     * @var DriveItem|null $driveItem Used to access the underlying driveItem
    */
    private ?DriveItem $driveItem = null;
    
    /**
     * @var EscapedList|null $escapedList Used to access the underlying list
    */
    private ?EscapedList $escapedList = null;
    
    /**
     * @var array<DriveItem>|null $items All driveItems contained in the sharing root. This collection cannot be enumerated.
    */
    private ?array $items = null;
    
    /**
     * @var ListItem|null $listItem Used to access the underlying listItem
    */
    private ?ListItem $listItem = null;
    
    /**
     * @var IdentitySet|null $owner Information about the owner of the shared item being referenced.
    */
    private ?IdentitySet $owner = null;
    
    /**
     * @var Permission|null $permission Used to access the permission representing the underlying sharing link
    */
    private ?Permission $permission = null;
    
    /**
     * @var DriveItem|null $root Used to access the underlying driveItem. Deprecated -- use driveItem instead.
    */
    private ?DriveItem $root = null;
    
    /**
     * @var Site|null $site Used to access the underlying site
    */
    private ?Site $site = null;
    
    /**
     * Instantiates a new SharedDriveItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharedDriveItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedDriveItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedDriveItem {
        return new SharedDriveItem();
    }

    /**
     * Gets the driveItem property value. Used to access the underlying driveItem
     * @return DriveItem|null
    */
    public function getDriveItem(): ?DriveItem {
        return $this->driveItem;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'driveItem' => fn(ParseNode $n) => $o->setDriveItem($n->getObjectValue([DriveItem::class, 'createFromDiscriminatorValue'])),
            'list' => fn(ParseNode $n) => $o->setList($n->getObjectValue([EscapedList::class, 'createFromDiscriminatorValue'])),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([DriveItem::class, 'createFromDiscriminatorValue'])),
            'listItem' => fn(ParseNode $n) => $o->setListItem($n->getObjectValue([ListItem::class, 'createFromDiscriminatorValue'])),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'permission' => fn(ParseNode $n) => $o->setPermission($n->getObjectValue([Permission::class, 'createFromDiscriminatorValue'])),
            'root' => fn(ParseNode $n) => $o->setRoot($n->getObjectValue([DriveItem::class, 'createFromDiscriminatorValue'])),
            'site' => fn(ParseNode $n) => $o->setSite($n->getObjectValue([Site::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the items property value. All driveItems contained in the sharing root. This collection cannot be enumerated.
     * @return array<DriveItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the list property value. Used to access the underlying list
     * @return EscapedList|null
    */
    public function getList(): ?EscapedList {
        return $this->escapedList;
    }

    /**
     * Gets the listItem property value. Used to access the underlying listItem
     * @return ListItem|null
    */
    public function getListItem(): ?ListItem {
        return $this->listItem;
    }

    /**
     * Gets the owner property value. Information about the owner of the shared item being referenced.
     * @return IdentitySet|null
    */
    public function getOwner(): ?IdentitySet {
        return $this->owner;
    }

    /**
     * Gets the permission property value. Used to access the permission representing the underlying sharing link
     * @return Permission|null
    */
    public function getPermission(): ?Permission {
        return $this->permission;
    }

    /**
     * Gets the root property value. Used to access the underlying driveItem. Deprecated -- use driveItem instead.
     * @return DriveItem|null
    */
    public function getRoot(): ?DriveItem {
        return $this->root;
    }

    /**
     * Gets the site property value. Used to access the underlying site
     * @return Site|null
    */
    public function getSite(): ?Site {
        return $this->site;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('driveItem', $this->driveItem);
        $writer->writeObjectValue('list', $this->escapedList);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeObjectValue('listItem', $this->listItem);
        $writer->writeObjectValue('owner', $this->owner);
        $writer->writeObjectValue('permission', $this->permission);
        $writer->writeObjectValue('root', $this->root);
        $writer->writeObjectValue('site', $this->site);
    }

    /**
     * Sets the driveItem property value. Used to access the underlying driveItem
     *  @param DriveItem|null $value Value to set for the driveItem property.
    */
    public function setDriveItem(?DriveItem $value ): void {
        $this->driveItem = $value;
    }

    /**
     * Sets the items property value. All driveItems contained in the sharing root. This collection cannot be enumerated.
     *  @param array<DriveItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the list property value. Used to access the underlying list
     *  @param EscapedList|null $value Value to set for the EscapedList property.
    */
    public function setList(?EscapedList $value ): void {
        $this->escapedList = $value;
    }

    /**
     * Sets the listItem property value. Used to access the underlying listItem
     *  @param ListItem|null $value Value to set for the listItem property.
    */
    public function setListItem(?ListItem $value ): void {
        $this->listItem = $value;
    }

    /**
     * Sets the owner property value. Information about the owner of the shared item being referenced.
     *  @param IdentitySet|null $value Value to set for the owner property.
    */
    public function setOwner(?IdentitySet $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the permission property value. Used to access the permission representing the underlying sharing link
     *  @param Permission|null $value Value to set for the permission property.
    */
    public function setPermission(?Permission $value ): void {
        $this->permission = $value;
    }

    /**
     * Sets the root property value. Used to access the underlying driveItem. Deprecated -- use driveItem instead.
     *  @param DriveItem|null $value Value to set for the root property.
    */
    public function setRoot(?DriveItem $value ): void {
        $this->root = $value;
    }

    /**
     * Sets the site property value. Used to access the underlying site
     *  @param Site|null $value Value to set for the site property.
    */
    public function setSite(?Site $value ): void {
        $this->site = $value;
    }

}
