<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Drive extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new Drive and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.drive');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Drive
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Drive {
        return new Drive();
    }

    /**
     * Gets the bundles property value. Collection of bundles (albums and multi-select-shared sets of items). Only in personal OneDrive.
     * @return array<DriveItem>|null
    */
    public function getBundles(): ?array {
        $val = $this->getBackingStore()->get('bundles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveItem::class);
            /** @var array<DriveItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bundles'");
    }

    /**
     * Gets the driveType property value. Describes the type of drive represented by this resource. OneDrive personal drives return personal. OneDrive for Business returns business. SharePoint document libraries return documentLibrary. Read-only.
     * @return string|null
    */
    public function getDriveType(): ?string {
        $val = $this->getBackingStore()->get('driveType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveType'");
    }

    /**
     * Gets the list property value. For drives in SharePoint, the underlying document library list. Read-only. Nullable.
     * @return EscapedList|null
    */
    public function getEscapedList(): ?EscapedList {
        $val = $this->getBackingStore()->get('escapedList');
        if (is_null($val) || $val instanceof EscapedList) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedList'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bundles' => fn(ParseNode $n) => $o->setBundles($n->getCollectionOfObjectValues([DriveItem::class, 'createFromDiscriminatorValue'])),
            'driveType' => fn(ParseNode $n) => $o->setDriveType($n->getStringValue()),
            'list' => fn(ParseNode $n) => $o->setEscapedList($n->getObjectValue([EscapedList::class, 'createFromDiscriminatorValue'])),
            'following' => fn(ParseNode $n) => $o->setFollowing($n->getCollectionOfObjectValues([DriveItem::class, 'createFromDiscriminatorValue'])),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([DriveItem::class, 'createFromDiscriminatorValue'])),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'quota' => fn(ParseNode $n) => $o->setQuota($n->getObjectValue([Quota::class, 'createFromDiscriminatorValue'])),
            'root' => fn(ParseNode $n) => $o->setRoot($n->getObjectValue([DriveItem::class, 'createFromDiscriminatorValue'])),
            'sharePointIds' => fn(ParseNode $n) => $o->setSharePointIds($n->getObjectValue([SharepointIds::class, 'createFromDiscriminatorValue'])),
            'special' => fn(ParseNode $n) => $o->setSpecial($n->getCollectionOfObjectValues([DriveItem::class, 'createFromDiscriminatorValue'])),
            'system' => fn(ParseNode $n) => $o->setSystem($n->getObjectValue([SystemFacet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the following property value. The list of items the user is following. Only in OneDrive for Business.
     * @return array<DriveItem>|null
    */
    public function getFollowing(): ?array {
        $val = $this->getBackingStore()->get('following');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveItem::class);
            /** @var array<DriveItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'following'");
    }

    /**
     * Gets the items property value. All items contained in the drive. Read-only. Nullable.
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
     * Gets the owner property value. Optional. The user account that owns the drive. Read-only.
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
     * Gets the quota property value. Optional. Information about the drive's storage space quota. Read-only.
     * @return Quota|null
    */
    public function getQuota(): ?Quota {
        $val = $this->getBackingStore()->get('quota');
        if (is_null($val) || $val instanceof Quota) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quota'");
    }

    /**
     * Gets the root property value. The root folder of the drive. Read-only.
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
     * Gets the sharePointIds property value. The sharePointIds property
     * @return SharepointIds|null
    */
    public function getSharePointIds(): ?SharepointIds {
        $val = $this->getBackingStore()->get('sharePointIds');
        if (is_null($val) || $val instanceof SharepointIds) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointIds'");
    }

    /**
     * Gets the special property value. Collection of common folders available in OneDrive. Read-only. Nullable.
     * @return array<DriveItem>|null
    */
    public function getSpecial(): ?array {
        $val = $this->getBackingStore()->get('special');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveItem::class);
            /** @var array<DriveItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'special'");
    }

    /**
     * Gets the system property value. If present, indicates that it's a system-managed drive. Read-only.
     * @return SystemFacet|null
    */
    public function getSystem(): ?SystemFacet {
        $val = $this->getBackingStore()->get('system');
        if (is_null($val) || $val instanceof SystemFacet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'system'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('bundles', $this->getBundles());
        $writer->writeStringValue('driveType', $this->getDriveType());
        $writer->writeObjectValue('list', $this->getEscapedList());
        $writer->writeCollectionOfObjectValues('following', $this->getFollowing());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeObjectValue('owner', $this->getOwner());
        $writer->writeObjectValue('quota', $this->getQuota());
        $writer->writeObjectValue('root', $this->getRoot());
        $writer->writeObjectValue('sharePointIds', $this->getSharePointIds());
        $writer->writeCollectionOfObjectValues('special', $this->getSpecial());
        $writer->writeObjectValue('system', $this->getSystem());
    }

    /**
     * Sets the bundles property value. Collection of bundles (albums and multi-select-shared sets of items). Only in personal OneDrive.
     * @param array<DriveItem>|null $value Value to set for the bundles property.
    */
    public function setBundles(?array $value): void {
        $this->getBackingStore()->set('bundles', $value);
    }

    /**
     * Sets the driveType property value. Describes the type of drive represented by this resource. OneDrive personal drives return personal. OneDrive for Business returns business. SharePoint document libraries return documentLibrary. Read-only.
     * @param string|null $value Value to set for the driveType property.
    */
    public function setDriveType(?string $value): void {
        $this->getBackingStore()->set('driveType', $value);
    }

    /**
     * Sets the list property value. For drives in SharePoint, the underlying document library list. Read-only. Nullable.
     * @param EscapedList|null $value Value to set for the list property.
    */
    public function setEscapedList(?EscapedList $value): void {
        $this->getBackingStore()->set('escapedList', $value);
    }

    /**
     * Sets the following property value. The list of items the user is following. Only in OneDrive for Business.
     * @param array<DriveItem>|null $value Value to set for the following property.
    */
    public function setFollowing(?array $value): void {
        $this->getBackingStore()->set('following', $value);
    }

    /**
     * Sets the items property value. All items contained in the drive. Read-only. Nullable.
     * @param array<DriveItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the owner property value. Optional. The user account that owns the drive. Read-only.
     * @param IdentitySet|null $value Value to set for the owner property.
    */
    public function setOwner(?IdentitySet $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the quota property value. Optional. Information about the drive's storage space quota. Read-only.
     * @param Quota|null $value Value to set for the quota property.
    */
    public function setQuota(?Quota $value): void {
        $this->getBackingStore()->set('quota', $value);
    }

    /**
     * Sets the root property value. The root folder of the drive. Read-only.
     * @param DriveItem|null $value Value to set for the root property.
    */
    public function setRoot(?DriveItem $value): void {
        $this->getBackingStore()->set('root', $value);
    }

    /**
     * Sets the sharePointIds property value. The sharePointIds property
     * @param SharepointIds|null $value Value to set for the sharePointIds property.
    */
    public function setSharePointIds(?SharepointIds $value): void {
        $this->getBackingStore()->set('sharePointIds', $value);
    }

    /**
     * Sets the special property value. Collection of common folders available in OneDrive. Read-only. Nullable.
     * @param array<DriveItem>|null $value Value to set for the special property.
    */
    public function setSpecial(?array $value): void {
        $this->getBackingStore()->set('special', $value);
    }

    /**
     * Sets the system property value. If present, indicates that it's a system-managed drive. Read-only.
     * @param SystemFacet|null $value Value to set for the system property.
    */
    public function setSystem(?SystemFacet $value): void {
        $this->getBackingStore()->set('system', $value);
    }

}
