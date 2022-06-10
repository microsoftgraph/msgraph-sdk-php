<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CalendarGroup extends Entity implements Parsable 
{
    /**
     * @var array<Calendar>|null $calendars The calendars in the calendar group. Navigation property. Read-only. Nullable.
    */
    private ?array $calendars = null;
    
    /**
     * @var string|null $changeKey Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
    */
    private ?string $changeKey = null;
    
    /**
     * @var string|null $classId The class identifier. Read-only.
    */
    private ?string $classId = null;
    
    /**
     * @var string|null $name The group name.
    */
    private ?string $name = null;
    
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
        return $this->calendars;
    }

    /**
     * Gets the changeKey property value. Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     * @return string|null
    */
    public function getChangeKey(): ?string {
        return $this->changeKey;
    }

    /**
     * Gets the classId property value. The class identifier. Read-only.
     * @return string|null
    */
    public function getClassId(): ?string {
        return $this->classId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'calendars' => function (ParseNode $n) use ($o) { $o->setCalendars($n->getCollectionOfObjectValues(array(Calendar::class, 'createFromDiscriminatorValue'))); },
            'changeKey' => function (ParseNode $n) use ($o) { $o->setChangeKey($n->getStringValue()); },
            'classId' => function (ParseNode $n) use ($o) { $o->setClassId($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the name property value. The group name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('calendars', $this->calendars);
        $writer->writeStringValue('changeKey', $this->changeKey);
        $writer->writeStringValue('classId', $this->classId);
        $writer->writeStringValue('name', $this->name);
    }

    /**
     * Sets the calendars property value. The calendars in the calendar group. Navigation property. Read-only. Nullable.
     *  @param array<Calendar>|null $value Value to set for the calendars property.
    */
    public function setCalendars(?array $value ): void {
        $this->calendars = $value;
    }

    /**
     * Sets the changeKey property value. Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     *  @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value ): void {
        $this->changeKey = $value;
    }

    /**
     * Sets the classId property value. The class identifier. Read-only.
     *  @param string|null $value Value to set for the classId property.
    */
    public function setClassId(?string $value ): void {
        $this->classId = $value;
    }

    /**
     * Sets the name property value. The group name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
