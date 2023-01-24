<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class WindowsUpdateActiveHoursInstall extends WindowsUpdateInstallScheduleType implements Parsable 
{
    /**
     * Instantiates a new WindowsUpdateActiveHoursInstall and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdateActiveHoursInstall');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUpdateActiveHoursInstall
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUpdateActiveHoursInstall {
        return new WindowsUpdateActiveHoursInstall();
    }

    /**
     * Gets the activeHoursEnd property value. Active Hours End
     * @return Time|null
    */
    public function getActiveHoursEnd(): ?Time {
        return $this->getBackingStore()->get('activeHoursEnd');
    }

    /**
     * Gets the activeHoursStart property value. Active Hours Start
     * @return Time|null
    */
    public function getActiveHoursStart(): ?Time {
        return $this->getBackingStore()->get('activeHoursStart');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeHoursEnd' => fn(ParseNode $n) => $o->setActiveHoursEnd($n->getTimeValue()),
            'activeHoursStart' => fn(ParseNode $n) => $o->setActiveHoursStart($n->getTimeValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeTimeValue('activeHoursEnd', $this->getActiveHoursEnd());
        $writer->writeTimeValue('activeHoursStart', $this->getActiveHoursStart());
    }

    /**
     * Sets the activeHoursEnd property value. Active Hours End
     * @param Time|null $value Value to set for the activeHoursEnd property.
    */
    public function setActiveHoursEnd(?Time $value): void {
        $this->getBackingStore()->set('activeHoursEnd', $value);
    }

    /**
     * Sets the activeHoursStart property value. Active Hours Start
     * @param Time|null $value Value to set for the activeHoursStart property.
    */
    public function setActiveHoursStart(?Time $value): void {
        $this->getBackingStore()->set('activeHoursStart', $value);
    }

}
