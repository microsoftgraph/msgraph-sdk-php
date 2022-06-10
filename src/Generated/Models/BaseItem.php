<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BaseItem extends Entity implements Parsable 
{
    /**
     * @var IdentitySet|null $createdBy Identity of the user, device, or application which created the item. Read-only.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var User|null $createdByUser Identity of the user who created the item. Read-only.
    */
    private ?User $createdByUser = null;
    
    /**
     * @var DateTime|null $createdDateTime Date and time of item creation. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Provides a user-visible description of the item. Optional.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $eTag ETag for the item. Read-only.
    */
    private ?string $eTag = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy Identity of the user, device, and application which last modified the item. Read-only.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var User|null $lastModifiedByUser Identity of the user who last modified the item. Read-only.
    */
    private ?User $lastModifiedByUser = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Date and time the item was last modified. Read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $name The name of the item. Read-write.
    */
    private ?string $name = null;
    
    /**
     * @var ItemReference|null $parentReference Parent information, if the item has a parent. Read-write.
    */
    private ?ItemReference $parentReference = null;
    
    /**
     * @var string|null $webUrl URL that displays the resource in the browser. Read-only.
    */
    private ?string $webUrl = null;
    
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
        return $this->createdBy;
    }

    /**
     * Gets the createdByUser property value. Identity of the user who created the item. Read-only.
     * @return User|null
    */
    public function getCreatedByUser(): ?User {
        return $this->createdByUser;
    }

    /**
     * Gets the createdDateTime property value. Date and time of item creation. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Provides a user-visible description of the item. Optional.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the eTag property value. ETag for the item. Read-only.
     * @return string|null
    */
    public function getETag(): ?string {
        return $this->eTag;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdByUser' => function (ParseNode $n) use ($o) { $o->setCreatedByUser($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'eTag' => function (ParseNode $n) use ($o) { $o->setETag($n->getStringValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedByUser' => function (ParseNode $n) use ($o) { $o->setLastModifiedByUser($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'parentReference' => function (ParseNode $n) use ($o) { $o->setParentReference($n->getObjectValue(array(ItemReference::class, 'createFromDiscriminatorValue'))); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user, device, and application which last modified the item. Read-only.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedByUser property value. Identity of the user who last modified the item. Read-only.
     * @return User|null
    */
    public function getLastModifiedByUser(): ?User {
        return $this->lastModifiedByUser;
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time the item was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the name property value. The name of the item. Read-write.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parentReference property value. Parent information, if the item has a parent. Read-write.
     * @return ItemReference|null
    */
    public function getParentReference(): ?ItemReference {
        return $this->parentReference;
    }

    /**
     * Gets the webUrl property value. URL that displays the resource in the browser. Read-only.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeObjectValue('createdByUser', $this->createdByUser);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('eTag', $this->eTag);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeObjectValue('lastModifiedByUser', $this->lastModifiedByUser);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('parentReference', $this->parentReference);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the createdBy property value. Identity of the user, device, or application which created the item. Read-only.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdByUser property value. Identity of the user who created the item. Read-only.
     *  @param User|null $value Value to set for the createdByUser property.
    */
    public function setCreatedByUser(?User $value ): void {
        $this->createdByUser = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time of item creation. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Provides a user-visible description of the item. Optional.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the eTag property value. ETag for the item. Read-only.
     *  @param string|null $value Value to set for the eTag property.
    */
    public function setETag(?string $value ): void {
        $this->eTag = $value;
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user, device, and application which last modified the item. Read-only.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedByUser property value. Identity of the user who last modified the item. Read-only.
     *  @param User|null $value Value to set for the lastModifiedByUser property.
    */
    public function setLastModifiedByUser(?User $value ): void {
        $this->lastModifiedByUser = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time the item was last modified. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the name property value. The name of the item. Read-write.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parentReference property value. Parent information, if the item has a parent. Read-write.
     *  @param ItemReference|null $value Value to set for the parentReference property.
    */
    public function setParentReference(?ItemReference $value ): void {
        $this->parentReference = $value;
    }

    /**
     * Sets the webUrl property value. URL that displays the resource in the browser. Read-only.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
