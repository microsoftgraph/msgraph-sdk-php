<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ShiftItem extends ScheduleEntity implements Parsable 
{
    /**
     * @var array<ShiftActivity>|null $activities An incremental part of a shift which can cover details of when and where an employee is during their shift. For example, an assignment or a scheduled break or lunch. Required.
    */
    private ?array $activities = null;
    
    /**
     * @var string|null $displayName The shift label of the shiftItem.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $notes The shift notes for the shiftItem.
    */
    private ?string $notes = null;
    
    /**
     * Instantiates a new shiftItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShiftItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShiftItem {
        return new ShiftItem();
    }

    /**
     * Gets the activities property value. An incremental part of a shift which can cover details of when and where an employee is during their shift. For example, an assignment or a scheduled break or lunch. Required.
     * @return array<ShiftActivity>|null
    */
    public function getActivities(): ?array {
        return $this->activities;
    }

    /**
     * Gets the displayName property value. The shift label of the shiftItem.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activities' => function (ParseNode $n) use ($o) { $o->setActivities($n->getCollectionOfObjectValues(array(ShiftActivity::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'notes' => function (ParseNode $n) use ($o) { $o->setNotes($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the notes property value. The shift notes for the shiftItem.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activities', $this->activities);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('notes', $this->notes);
    }

    /**
     * Sets the activities property value. An incremental part of a shift which can cover details of when and where an employee is during their shift. For example, an assignment or a scheduled break or lunch. Required.
     *  @param array<ShiftActivity>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value ): void {
        $this->activities = $value;
    }

    /**
     * Sets the displayName property value. The shift label of the shiftItem.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the notes property value. The shift notes for the shiftItem.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

}
