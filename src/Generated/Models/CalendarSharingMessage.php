<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CalendarSharingMessage extends Message implements Parsable 
{
    /**
     * @var bool|null $canAccept The canAccept property
    */
    private ?bool $canAccept = null;
    
    /**
     * @var CalendarSharingMessageAction|null $sharingMessageAction The sharingMessageAction property
    */
    private ?CalendarSharingMessageAction $sharingMessageAction = null;
    
    /**
     * @var array<CalendarSharingMessageAction>|null $sharingMessageActions The sharingMessageActions property
    */
    private ?array $sharingMessageActions = null;
    
    /**
     * @var string|null $suggestedCalendarName The suggestedCalendarName property
    */
    private ?string $suggestedCalendarName = null;
    
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
        return $this->canAccept;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'canAccept' => function (ParseNode $n) use ($o) { $o->setCanAccept($n->getBooleanValue()); },
            'sharingMessageAction' => function (ParseNode $n) use ($o) { $o->setSharingMessageAction($n->getObjectValue(array(CalendarSharingMessageAction::class, 'createFromDiscriminatorValue'))); },
            'sharingMessageActions' => function (ParseNode $n) use ($o) { $o->setSharingMessageActions($n->getCollectionOfObjectValues(array(CalendarSharingMessageAction::class, 'createFromDiscriminatorValue'))); },
            'suggestedCalendarName' => function (ParseNode $n) use ($o) { $o->setSuggestedCalendarName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the sharingMessageAction property value. The sharingMessageAction property
     * @return CalendarSharingMessageAction|null
    */
    public function getSharingMessageAction(): ?CalendarSharingMessageAction {
        return $this->sharingMessageAction;
    }

    /**
     * Gets the sharingMessageActions property value. The sharingMessageActions property
     * @return array<CalendarSharingMessageAction>|null
    */
    public function getSharingMessageActions(): ?array {
        return $this->sharingMessageActions;
    }

    /**
     * Gets the suggestedCalendarName property value. The suggestedCalendarName property
     * @return string|null
    */
    public function getSuggestedCalendarName(): ?string {
        return $this->suggestedCalendarName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('canAccept', $this->canAccept);
        $writer->writeObjectValue('sharingMessageAction', $this->sharingMessageAction);
        $writer->writeCollectionOfObjectValues('sharingMessageActions', $this->sharingMessageActions);
        $writer->writeStringValue('suggestedCalendarName', $this->suggestedCalendarName);
    }

    /**
     * Sets the canAccept property value. The canAccept property
     *  @param bool|null $value Value to set for the canAccept property.
    */
    public function setCanAccept(?bool $value ): void {
        $this->canAccept = $value;
    }

    /**
     * Sets the sharingMessageAction property value. The sharingMessageAction property
     *  @param CalendarSharingMessageAction|null $value Value to set for the sharingMessageAction property.
    */
    public function setSharingMessageAction(?CalendarSharingMessageAction $value ): void {
        $this->sharingMessageAction = $value;
    }

    /**
     * Sets the sharingMessageActions property value. The sharingMessageActions property
     *  @param array<CalendarSharingMessageAction>|null $value Value to set for the sharingMessageActions property.
    */
    public function setSharingMessageActions(?array $value ): void {
        $this->sharingMessageActions = $value;
    }

    /**
     * Sets the suggestedCalendarName property value. The suggestedCalendarName property
     *  @param string|null $value Value to set for the suggestedCalendarName property.
    */
    public function setSuggestedCalendarName(?string $value ): void {
        $this->suggestedCalendarName = $value;
    }

}
