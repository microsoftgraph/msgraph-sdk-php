<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BaseItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new baseItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseItem {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.drive': return new Drive();
                case '#microsoft.graph.driveItem': return new DriveItem();
                case '#microsoft.graph.list': return new EscapedList();
                case '#microsoft.graph.listItem': return new ListItem();
                case '#microsoft.graph.sharedDriveItem': return new SharedDriveItem();
                case '#microsoft.graph.site': return new Site();
            }
        }
        return new BaseItem();
    }

    /**
     * Gets the createdBy property value. Identity of the user, device, or application which created the item. Read-only.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdByUser property value. Identity of the user who created the item. Read-only.
     * @return User|null
    */
    public function getCreatedByUser(): ?User {
        return $this->getBackingStore()->get('createdByUser');
    }

    /**
     * Gets the createdDateTime property value. Date and time of item creation. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Provides a user-visible description of the item. Optional.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the eTag property value. ETag for the item. Read-only.
     * @return string|null
    */
    public function getETag(): ?string {
        return $this->getBackingStore()->get('eTag');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdByUser' => fn(ParseNode $n) => $o->setCreatedByUser($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'eTag' => fn(ParseNode $n) => $o->setETag($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedByUser' => fn(ParseNode $n) => $o->setLastModifiedByUser($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'parentReference' => fn(ParseNode $n) => $o->setParentReference($n->getObjectValue([ItemReference::class, 'createFromDiscriminatorValue'])),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user, device, and application which last modified the item. Read-only.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedByUser property value. Identity of the user who last modified the item. Read-only.
     * @return User|null
    */
    public function getLastModifiedByUser(): ?User {
        return $this->getBackingStore()->get('lastModifiedByUser');
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time the item was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the name property value. The name of the item. Read-write.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the parentReference property value. Parent information, if the item has a parent. Read-write.
     * @return ItemReference|null
    */
    public function getParentReference(): ?ItemReference {
        return $this->getBackingStore()->get('parentReference');
    }

    /**
     * Gets the webUrl property value. URL that displays the resource in the browser. Read-only.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeObjectValue('createdByUser', $this->getCreatedByUser());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('eTag', $this->getETag());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeObjectValue('lastModifiedByUser', $this->getLastModifiedByUser());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('parentReference', $this->getParentReference());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the createdBy property value. Identity of the user, device, or application which created the item. Read-only.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdByUser property value. Identity of the user who created the item. Read-only.
     *  @param User|null $value Value to set for the createdByUser property.
    */
    public function setCreatedByUser(?User $value): void {
        $this->getBackingStore()->set('createdByUser', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time of item creation. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Provides a user-visible description of the item. Optional.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the eTag property value. ETag for the item. Read-only.
     *  @param string|null $value Value to set for the eTag property.
    */
    public function setETag(?string $value): void {
        $this->getBackingStore()->set('eTag', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user, device, and application which last modified the item. Read-only.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedByUser property value. Identity of the user who last modified the item. Read-only.
     *  @param User|null $value Value to set for the lastModifiedByUser property.
    */
    public function setLastModifiedByUser(?User $value): void {
        $this->getBackingStore()->set('lastModifiedByUser', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time the item was last modified. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the name property value. The name of the item. Read-write.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the parentReference property value. Parent information, if the item has a parent. Read-write.
     *  @param ItemReference|null $value Value to set for the parentReference property.
    */
    public function setParentReference(?ItemReference $value): void {
        $this->getBackingStore()->set('parentReference', $value);
    }

    /**
     * Sets the webUrl property value. URL that displays the resource in the browser. Read-only.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
