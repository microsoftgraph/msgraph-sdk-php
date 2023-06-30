<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SharedDriveItem extends BaseItem implements Parsable 
{
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
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveItem::class);
            /** @var array<DriveItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
    }

    /**
     * Gets the list property value. Used to access the underlying list
     * @return EscapedList|null
    */
    public function getList(): ?EscapedList {
        $val = $this->getBackingStore()->get('escapedList');
        if (is_null($val) || $val instanceof EscapedList) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedList'");
    }

    /**
     * Gets the listItem property value. Used to access the underlying listItem
     * @return ListItem|null
    */
    public function getListItem(): ?ListItem {
        $val = $this->getBackingStore()->get('listItem');
        if (is_null($val) || $val instanceof ListItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'listItem'");
    }

    /**
     * Gets the owner property value. Information about the owner of the shared item being referenced.
     * @return IdentitySet|null
    */
    public function getOwner(): ?IdentitySet {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Gets the permission property value. Used to access the permission representing the underlying sharing link
     * @return Permission|null
    */
    public function getPermission(): ?Permission {
        $val = $this->getBackingStore()->get('permission');
        if (is_null($val) || $val instanceof Permission) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permission'");
    }

    /**
     * Gets the root property value. Used to access the underlying driveItem. Deprecated -- use driveItem instead.
     * @return DriveItem|null
    */
    public function getRoot(): ?DriveItem {
        $val = $this->getBackingStore()->get('root');
        if (is_null($val) || $val instanceof DriveItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'root'");
    }

    /**
     * Gets the site property value. Used to access the underlying site
     * @return Site|null
    */
    public function getSite(): ?Site {
        $val = $this->getBackingStore()->get('site');
        if (is_null($val) || $val instanceof Site) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'site'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('driveItem', $this->getDriveItem());
        $writer->writeObjectValue('list', $this->getList());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeObjectValue('listItem', $this->getListItem());
        $writer->writeObjectValue('owner', $this->getOwner());
        $writer->writeObjectValue('permission', $this->getPermission());
        $writer->writeObjectValue('root', $this->getRoot());
        $writer->writeObjectValue('site', $this->getSite());
    }

    /**
     * Sets the driveItem property value. Used to access the underlying driveItem
     * @param DriveItem|null $value Value to set for the driveItem property.
    */
    public function setDriveItem(?DriveItem $value): void {
        $this->getBackingStore()->set('driveItem', $value);
    }

    /**
     * Sets the items property value. All driveItems contained in the sharing root. This collection cannot be enumerated.
     * @param array<DriveItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the list property value. Used to access the underlying list
     * @param EscapedList|null $value Value to set for the EscapedList property.
    */
    public function setList(?EscapedList $value): void {
        $this->getBackingStore()->set('escapedList', $value);
    }

    /**
     * Sets the listItem property value. Used to access the underlying listItem
     * @param ListItem|null $value Value to set for the listItem property.
    */
    public function setListItem(?ListItem $value): void {
        $this->getBackingStore()->set('listItem', $value);
    }

    /**
     * Sets the owner property value. Information about the owner of the shared item being referenced.
     * @param IdentitySet|null $value Value to set for the owner property.
    */
    public function setOwner(?IdentitySet $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the permission property value. Used to access the permission representing the underlying sharing link
     * @param Permission|null $value Value to set for the permission property.
    */
    public function setPermission(?Permission $value): void {
        $this->getBackingStore()->set('permission', $value);
    }

    /**
     * Sets the root property value. Used to access the underlying driveItem. Deprecated -- use driveItem instead.
     * @param DriveItem|null $value Value to set for the root property.
    */
    public function setRoot(?DriveItem $value): void {
        $this->getBackingStore()->set('root', $value);
    }

    /**
     * Sets the site property value. Used to access the underlying site
     * @param Site|null $value Value to set for the site property.
    */
    public function setSite(?Site $value): void {
        $this->getBackingStore()->set('site', $value);
    }

}
