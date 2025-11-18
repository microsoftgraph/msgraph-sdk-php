<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class DayNote extends ChangeTrackedEntity implements Parsable 
{
    /**
     * Instantiates a new DayNote and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.dayNote');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DayNote
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DayNote {
        return new DayNote();
    }

    /**
     * Gets the dayNoteDate property value. The date of the day note.
     * @return Date|null
    */
    public function getDayNoteDate(): ?Date {
        $val = $this->getBackingStore()->get('dayNoteDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dayNoteDate'");
    }

    /**
     * Gets the draftDayNote property value. The draft version of this day note that is viewable by managers. Only contentType text is supported.
     * @return ItemBody|null
    */
    public function getDraftDayNote(): ?ItemBody {
        $val = $this->getBackingStore()->get('draftDayNote');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'draftDayNote'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dayNoteDate' => fn(ParseNode $n) => $o->setDayNoteDate($n->getDateValue()),
            'draftDayNote' => fn(ParseNode $n) => $o->setDraftDayNote($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'sharedDayNote' => fn(ParseNode $n) => $o->setSharedDayNote($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the sharedDayNote property value. The shared version of this day note that is viewable by both employees and managers. Only contentType text is supported.
     * @return ItemBody|null
    */
    public function getSharedDayNote(): ?ItemBody {
        $val = $this->getBackingStore()->get('sharedDayNote');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedDayNote'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateValue('dayNoteDate', $this->getDayNoteDate());
        $writer->writeObjectValue('draftDayNote', $this->getDraftDayNote());
        $writer->writeObjectValue('sharedDayNote', $this->getSharedDayNote());
    }

    /**
     * Sets the dayNoteDate property value. The date of the day note.
     * @param Date|null $value Value to set for the dayNoteDate property.
    */
    public function setDayNoteDate(?Date $value): void {
        $this->getBackingStore()->set('dayNoteDate', $value);
    }

    /**
     * Sets the draftDayNote property value. The draft version of this day note that is viewable by managers. Only contentType text is supported.
     * @param ItemBody|null $value Value to set for the draftDayNote property.
    */
    public function setDraftDayNote(?ItemBody $value): void {
        $this->getBackingStore()->set('draftDayNote', $value);
    }

    /**
     * Sets the sharedDayNote property value. The shared version of this day note that is viewable by both employees and managers. Only contentType text is supported.
     * @param ItemBody|null $value Value to set for the sharedDayNote property.
    */
    public function setSharedDayNote(?ItemBody $value): void {
        $this->getBackingStore()->set('sharedDayNote', $value);
    }

}
