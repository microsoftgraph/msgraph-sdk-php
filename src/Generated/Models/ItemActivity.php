<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new itemActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('access');
    }

    /**
     * Gets the activityDateTime property value. Details about when the activity took place. Read-only.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        return $this->getBackingStore()->get('activityDateTime');
    }

    /**
     * Gets the actor property value. Identity of who performed the action. Read-only.
     * @return IdentitySet|null
    */
    public function getActor(): ?IdentitySet {
        return $this->getBackingStore()->get('actor');
    }

    /**
     * Gets the driveItem property value. Exposes the driveItem that was the target of this activity.
     * @return DriveItem|null
    */
    public function getDriveItem(): ?DriveItem {
        return $this->getBackingStore()->get('driveItem');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'access' => fn(ParseNode $n) => $o->setAccess($n->getObjectValue([AccessAction::class, 'createFromDiscriminatorValue'])),
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'driveItem' => fn(ParseNode $n) => $o->setDriveItem($n->getObjectValue([DriveItem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('access', $this->getAccess());
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeObjectValue('driveItem', $this->getDriveItem());
    }

    /**
     * Sets the access property value. An item was accessed.
     * @param AccessAction|null $value Value to set for the access property.
    */
    public function setAccess(?AccessAction $value): void {
        $this->getBackingStore()->set('access', $value);
    }

    /**
     * Sets the activityDateTime property value. Details about when the activity took place. Read-only.
     * @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the actor property value. Identity of who performed the action. Read-only.
     * @param IdentitySet|null $value Value to set for the actor property.
    */
    public function setActor(?IdentitySet $value): void {
        $this->getBackingStore()->set('actor', $value);
    }

    /**
     * Sets the driveItem property value. Exposes the driveItem that was the target of this activity.
     * @param DriveItem|null $value Value to set for the driveItem property.
    */
    public function setDriveItem(?DriveItem $value): void {
        $this->getBackingStore()->set('driveItem', $value);
    }

}
