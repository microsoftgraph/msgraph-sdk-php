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
        $val = $this->getBackingStore()->get('access');
        if (is_null($val) || $val instanceof AccessAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'access'");
    }

    /**
     * Gets the activityDateTime property value. Details about when the activity took place. Read-only.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('activityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDateTime'");
    }

    /**
     * Gets the actor property value. Identity of who performed the action. Read-only.
     * @return IdentitySet|null
    */
    public function getActor(): ?IdentitySet {
        $val = $this->getBackingStore()->get('actor');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actor'");
    }

    /**
     * Gets the driveItem property value. Exposes the driveItem that was the target of this activity.
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
