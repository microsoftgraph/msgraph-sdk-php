<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('calendars');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Calendar::class);
            /** @var array<Calendar>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendars'");
    }

    /**
     * Gets the changeKey property value. Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     * @return string|null
    */
    public function getChangeKey(): ?string {
        $val = $this->getBackingStore()->get('changeKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changeKey'");
    }

    /**
     * Gets the classId property value. The class identifier. Read-only.
     * @return string|null
    */
    public function getClassId(): ?string {
        $val = $this->getBackingStore()->get('classId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'calendars' => fn(ParseNode $n) => $o->setCalendars($n->getCollectionOfObjectValues([Calendar::class, 'createFromDiscriminatorValue'])),
            'changeKey' => fn(ParseNode $n) => $o->setChangeKey($n->getStringValue()),
            'classId' => fn(ParseNode $n) => $o->setClassId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. The group name.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * @param array<Calendar>|null $value Value to set for the calendars property.
    */
    public function setCalendars(?array $value): void {
        $this->getBackingStore()->set('calendars', $value);
    }

    /**
     * Sets the changeKey property value. Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     * @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value): void {
        $this->getBackingStore()->set('changeKey', $value);
    }

    /**
     * Sets the classId property value. The class identifier. Read-only.
     * @param string|null $value Value to set for the classId property.
    */
    public function setClassId(?string $value): void {
        $this->getBackingStore()->set('classId', $value);
    }

    /**
     * Sets the name property value. The group name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

}
