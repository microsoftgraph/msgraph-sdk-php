<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CalendarGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new calendarGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalendarGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalendarGroup {
        return new CalendarGroup();
    }

    /**
     * Gets the calendars property value. The calendars in the calendar group. Navigation property. Read-only. Nullable.
     * @return array<Calendar>|null
    */
    public function getCalendars(): ?array {
        return $this->getBackingStore()->get('calendars');
    }

    /**
     * Gets the changeKey property value. Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     * @return string|null
    */
    public function getChangeKey(): ?string {
        return $this->getBackingStore()->get('changeKey');
    }

    /**
     * Gets the classId property value. The class identifier. Read-only.
     * @return Guid|null
    */
    public function getClassId(): ?Guid {
        return $this->getBackingStore()->get('classId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'calendars' => fn(ParseNode $n) => $o->setCalendars($n->getCollectionOfObjectValues([Calendar::class, 'createFromDiscriminatorValue'])),
            'changeKey' => fn(ParseNode $n) => $o->setChangeKey($n->getStringValue()),
            'classId' => fn(ParseNode $n) => $o->setClassId($n->getObjectValue([Guid::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. The group name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('calendars', $this->getCalendars());
        $writer->writeStringValue('changeKey', $this->getChangeKey());
        $writer->writeStringValue('classId', $this->getClassId());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the calendars property value. The calendars in the calendar group. Navigation property. Read-only. Nullable.
     *  @param array<Calendar>|null $value Value to set for the calendars property.
    */
    public function setCalendars(?array $value): void {
        $this->getBackingStore()->set('calendars', $value);
    }

    /**
     * Sets the changeKey property value. Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     *  @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value): void {
        $this->getBackingStore()->set('changeKey', $value);
    }

    /**
     * Sets the classId property value. The class identifier. Read-only.
     *  @param Guid|null $value Value to set for the classId property.
    */
    public function setClassId(?Guid $value): void {
        $this->getBackingStore()->set('classId', $value);
    }

    /**
     * Sets the name property value. The group name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

}
