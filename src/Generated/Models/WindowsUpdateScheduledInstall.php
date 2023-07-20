<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class WindowsUpdateScheduledInstall extends WindowsUpdateInstallScheduleType implements Parsable 
{
    /**
     * Instantiates a new windowsUpdateScheduledInstall and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdateScheduledInstall');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUpdateScheduledInstall
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUpdateScheduledInstall {
        return new WindowsUpdateScheduledInstall();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scheduledInstallDay' => fn(ParseNode $n) => $o->setScheduledInstallDay($n->getEnumValue(WeeklySchedule::class)),
            'scheduledInstallTime' => fn(ParseNode $n) => $o->setScheduledInstallTime($n->getTimeValue()),
        ]);
    }

    /**
     * Gets the scheduledInstallDay property value. Possible values for a weekly schedule.
     * @return WeeklySchedule|null
    */
    public function getScheduledInstallDay(): ?WeeklySchedule {
        $val = $this->getBackingStore()->get('scheduledInstallDay');
        if (is_null($val) || $val instanceof WeeklySchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledInstallDay'");
    }

    /**
     * Gets the scheduledInstallTime property value. Scheduled Install Time during day
     * @return Time|null
    */
    public function getScheduledInstallTime(): ?Time {
        $val = $this->getBackingStore()->get('scheduledInstallTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledInstallTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('scheduledInstallDay', $this->getScheduledInstallDay());
        $writer->writeTimeValue('scheduledInstallTime', $this->getScheduledInstallTime());
    }

    /**
     * Sets the scheduledInstallDay property value. Possible values for a weekly schedule.
     * @param WeeklySchedule|null $value Value to set for the scheduledInstallDay property.
    */
    public function setScheduledInstallDay(?WeeklySchedule $value): void {
        $this->getBackingStore()->set('scheduledInstallDay', $value);
    }

    /**
     * Sets the scheduledInstallTime property value. Scheduled Install Time during day
     * @param Time|null $value Value to set for the scheduledInstallTime property.
    */
    public function setScheduledInstallTime(?Time $value): void {
        $this->getBackingStore()->set('scheduledInstallTime', $value);
    }

}
