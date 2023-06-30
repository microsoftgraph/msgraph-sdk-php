<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CalendarSharingMessage extends Message implements Parsable 
{
    /**
     * Instantiates a new CalendarSharingMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.calendarSharingMessage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalendarSharingMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalendarSharingMessage {
        return new CalendarSharingMessage();
    }

    /**
     * Gets the canAccept property value. The canAccept property
     * @return bool|null
    */
    public function getCanAccept(): ?bool {
        $val = $this->getBackingStore()->get('canAccept');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canAccept'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'canAccept' => fn(ParseNode $n) => $o->setCanAccept($n->getBooleanValue()),
            'sharingMessageAction' => fn(ParseNode $n) => $o->setSharingMessageAction($n->getObjectValue([CalendarSharingMessageAction::class, 'createFromDiscriminatorValue'])),
            'sharingMessageActions' => fn(ParseNode $n) => $o->setSharingMessageActions($n->getCollectionOfObjectValues([CalendarSharingMessageAction::class, 'createFromDiscriminatorValue'])),
            'suggestedCalendarName' => fn(ParseNode $n) => $o->setSuggestedCalendarName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the sharingMessageAction property value. The sharingMessageAction property
     * @return CalendarSharingMessageAction|null
    */
    public function getSharingMessageAction(): ?CalendarSharingMessageAction {
        $val = $this->getBackingStore()->get('sharingMessageAction');
        if (is_null($val) || $val instanceof CalendarSharingMessageAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharingMessageAction'");
    }

    /**
     * Gets the sharingMessageActions property value. The sharingMessageActions property
     * @return array<CalendarSharingMessageAction>|null
    */
    public function getSharingMessageActions(): ?array {
        $val = $this->getBackingStore()->get('sharingMessageActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CalendarSharingMessageAction::class);
            /** @var array<CalendarSharingMessageAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharingMessageActions'");
    }

    /**
     * Gets the suggestedCalendarName property value. The suggestedCalendarName property
     * @return string|null
    */
    public function getSuggestedCalendarName(): ?string {
        $val = $this->getBackingStore()->get('suggestedCalendarName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'suggestedCalendarName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('canAccept', $this->getCanAccept());
        $writer->writeObjectValue('sharingMessageAction', $this->getSharingMessageAction());
        $writer->writeCollectionOfObjectValues('sharingMessageActions', $this->getSharingMessageActions());
        $writer->writeStringValue('suggestedCalendarName', $this->getSuggestedCalendarName());
    }

    /**
     * Sets the canAccept property value. The canAccept property
     * @param bool|null $value Value to set for the canAccept property.
    */
    public function setCanAccept(?bool $value): void {
        $this->getBackingStore()->set('canAccept', $value);
    }

    /**
     * Sets the sharingMessageAction property value. The sharingMessageAction property
     * @param CalendarSharingMessageAction|null $value Value to set for the sharingMessageAction property.
    */
    public function setSharingMessageAction(?CalendarSharingMessageAction $value): void {
        $this->getBackingStore()->set('sharingMessageAction', $value);
    }

    /**
     * Sets the sharingMessageActions property value. The sharingMessageActions property
     * @param array<CalendarSharingMessageAction>|null $value Value to set for the sharingMessageActions property.
    */
    public function setSharingMessageActions(?array $value): void {
        $this->getBackingStore()->set('sharingMessageActions', $value);
    }

    /**
     * Sets the suggestedCalendarName property value. The suggestedCalendarName property
     * @param string|null $value Value to set for the suggestedCalendarName property.
    */
    public function setSuggestedCalendarName(?string $value): void {
        $this->getBackingStore()->set('suggestedCalendarName', $value);
    }

}
