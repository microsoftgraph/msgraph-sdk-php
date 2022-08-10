<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActivity extends Entity implements Parsable 
{
    /**
     * @var AccessAction|null $access An item was accessed.
    */
    private ?AccessAction $access = null;
    
    /**
     * @var DateTime|null $activityDateTime Details about when the activity took place. Read-only.
    */
    private ?DateTime $activityDateTime = null;
    
    /**
     * @var IdentitySet|null $actor Identity of who performed the action. Read-only.
    */
    private ?IdentitySet $actor = null;
    
    /**
     * @var DriveItem|null $driveItem Exposes the driveItem that was the target of this activity.
    */
    private ?DriveItem $driveItem = null;
    
    /**
     * Instantiates a new itemActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.itemActivity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemActivity {
        return new ItemActivity();
    }

    /**
     * Gets the access property value. An item was accessed.
     * @return AccessAction|null
    */
    public function getAccess(): ?AccessAction {
        return $this->access;
    }

    /**
     * Gets the activityDateTime property value. Details about when the activity took place. Read-only.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        return $this->activityDateTime;
    }

    /**
     * Gets the actor property value. Identity of who performed the action. Read-only.
     * @return IdentitySet|null
    */
    public function getActor(): ?IdentitySet {
        return $this->actor;
    }

    /**
     * Gets the driveItem property value. Exposes the driveItem that was the target of this activity.
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
            'access' => function (ParseNode $n) use ($o) { $o->setAccess($n->getObjectValue(array(AccessAction::class, 'createFromDiscriminatorValue'))); },
            'activityDateTime' => function (ParseNode $n) use ($o) { $o->setActivityDateTime($n->getDateTimeValue()); },
            'actor' => function (ParseNode $n) use ($o) { $o->setActor($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'driveItem' => function (ParseNode $n) use ($o) { $o->setDriveItem($n->getObjectValue(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('access', $this->access);
        $writer->writeDateTimeValue('activityDateTime', $this->activityDateTime);
        $writer->writeObjectValue('actor', $this->actor);
        $writer->writeObjectValue('driveItem', $this->driveItem);
    }

    /**
     * Sets the access property value. An item was accessed.
     *  @param AccessAction|null $value Value to set for the access property.
    */
    public function setAccess(?AccessAction $value ): void {
        $this->access = $value;
    }

    /**
     * Sets the activityDateTime property value. Details about when the activity took place. Read-only.
     *  @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value ): void {
        $this->activityDateTime = $value;
    }

    /**
     * Sets the actor property value. Identity of who performed the action. Read-only.
     *  @param IdentitySet|null $value Value to set for the actor property.
    */
    public function setActor(?IdentitySet $value ): void {
        $this->actor = $value;
    }

    /**
     * Sets the driveItem property value. Exposes the driveItem that was the target of this activity.
     *  @param DriveItem|null $value Value to set for the driveItem property.
    */
    public function setDriveItem(?DriveItem $value ): void {
        $this->driveItem = $value;
    }

}
