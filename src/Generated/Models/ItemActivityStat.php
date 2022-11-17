<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActivityStat extends Entity implements Parsable 
{
    /**
     * Instantiates a new itemActivityStat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.itemActivityStat');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemActivityStat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemActivityStat {
        return new ItemActivityStat();
    }

    /**
     * Gets the access property value. Statistics about the access actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getAccess(): ?ItemActionStat {
        return $this->getBackingStore()->get('access');
    }

    /**
     * Gets the activities property value. Exposes the itemActivities represented in this itemActivityStat resource.
     * @return array<ItemActivity>|null
    */
    public function getActivities(): ?array {
        return $this->getBackingStore()->get('activities');
    }

    /**
     * Gets the create property value. Statistics about the create actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getCreate(): ?ItemActionStat {
        return $this->getBackingStore()->get('create');
    }

    /**
     * Gets the delete property value. Statistics about the delete actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getDelete(): ?ItemActionStat {
        return $this->getBackingStore()->get('delete');
    }

    /**
     * Gets the edit property value. Statistics about the edit actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getEdit(): ?ItemActionStat {
        return $this->getBackingStore()->get('edit');
    }

    /**
     * Gets the endDateTime property value. When the interval ends. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'access' => fn(ParseNode $n) => $o->setAccess($n->getObjectValue([ItemActionStat::class, 'createFromDiscriminatorValue'])),
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getCollectionOfObjectValues([ItemActivity::class, 'createFromDiscriminatorValue'])),
            'create' => fn(ParseNode $n) => $o->setCreate($n->getObjectValue([ItemActionStat::class, 'createFromDiscriminatorValue'])),
            'delete' => fn(ParseNode $n) => $o->setDelete($n->getObjectValue([ItemActionStat::class, 'createFromDiscriminatorValue'])),
            'edit' => fn(ParseNode $n) => $o->setEdit($n->getObjectValue([ItemActionStat::class, 'createFromDiscriminatorValue'])),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'incompleteData' => fn(ParseNode $n) => $o->setIncompleteData($n->getObjectValue([IncompleteData::class, 'createFromDiscriminatorValue'])),
            'isTrending' => fn(ParseNode $n) => $o->setIsTrending($n->getBooleanValue()),
            'move' => fn(ParseNode $n) => $o->setMove($n->getObjectValue([ItemActionStat::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the incompleteData property value. Indicates that the statistics in this interval are based on incomplete data. Read-only.
     * @return IncompleteData|null
    */
    public function getIncompleteData(): ?IncompleteData {
        return $this->getBackingStore()->get('incompleteData');
    }

    /**
     * Gets the isTrending property value. Indicates whether the item is 'trending.' Read-only.
     * @return bool|null
    */
    public function getIsTrending(): ?bool {
        return $this->getBackingStore()->get('isTrending');
    }

    /**
     * Gets the move property value. Statistics about the move actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getMove(): ?ItemActionStat {
        return $this->getBackingStore()->get('move');
    }

    /**
     * Gets the startDateTime property value. When the interval starts. Read-only.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('access', $this->getAccess());
        $writer->writeCollectionOfObjectValues('activities', $this->getActivities());
        $writer->writeObjectValue('create', $this->getCreate());
        $writer->writeObjectValue('delete', $this->getDelete());
        $writer->writeObjectValue('edit', $this->getEdit());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeObjectValue('incompleteData', $this->getIncompleteData());
        $writer->writeBooleanValue('isTrending', $this->getIsTrending());
        $writer->writeObjectValue('move', $this->getMove());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the access property value. Statistics about the access actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the access property.
    */
    public function setAccess(?ItemActionStat $value): void {
        $this->getBackingStore()->set('access', $value);
    }

    /**
     * Sets the activities property value. Exposes the itemActivities represented in this itemActivityStat resource.
     *  @param array<ItemActivity>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value): void {
        $this->getBackingStore()->set('activities', $value);
    }

    /**
     * Sets the create property value. Statistics about the create actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the create property.
    */
    public function setCreate(?ItemActionStat $value): void {
        $this->getBackingStore()->set('create', $value);
    }

    /**
     * Sets the delete property value. Statistics about the delete actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the delete property.
    */
    public function setDelete(?ItemActionStat $value): void {
        $this->getBackingStore()->set('delete', $value);
    }

    /**
     * Sets the edit property value. Statistics about the edit actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the edit property.
    */
    public function setEdit(?ItemActionStat $value): void {
        $this->getBackingStore()->set('edit', $value);
    }

    /**
     * Sets the endDateTime property value. When the interval ends. Read-only.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the incompleteData property value. Indicates that the statistics in this interval are based on incomplete data. Read-only.
     *  @param IncompleteData|null $value Value to set for the incompleteData property.
    */
    public function setIncompleteData(?IncompleteData $value): void {
        $this->getBackingStore()->set('incompleteData', $value);
    }

    /**
     * Sets the isTrending property value. Indicates whether the item is 'trending.' Read-only.
     *  @param bool|null $value Value to set for the isTrending property.
    */
    public function setIsTrending(?bool $value): void {
        $this->getBackingStore()->set('isTrending', $value);
    }

    /**
     * Sets the move property value. Statistics about the move actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the move property.
    */
    public function setMove(?ItemActionStat $value): void {
        $this->getBackingStore()->set('move', $value);
    }

    /**
     * Sets the startDateTime property value. When the interval starts. Read-only.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
