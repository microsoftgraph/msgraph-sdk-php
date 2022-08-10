<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class WindowsUpdateScheduledInstall extends WindowsUpdateInstallScheduleType implements Parsable 
{
    /**
     * @var WeeklySchedule|null $scheduledInstallDay Possible values for a weekly schedule.
    */
    private ?WeeklySchedule $scheduledInstallDay = null;
    
    /**
     * @var Time|null $scheduledInstallTime Scheduled Install Time during day
    */
    private ?Time $scheduledInstallTime = null;
    
    /**
     * Instantiates a new WindowsUpdateScheduledInstall and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scheduledInstallDay' => function (ParseNode $n) use ($o) { $o->setScheduledInstallDay($n->getEnumValue(WeeklySchedule::class)); },
            'scheduledInstallTime' => function (ParseNode $n) use ($o) { $o->setScheduledInstallTime($n->getTimeValue()); },
        ]);
    }

    /**
     * Gets the scheduledInstallDay property value. Possible values for a weekly schedule.
     * @return WeeklySchedule|null
    */
    public function getScheduledInstallDay(): ?WeeklySchedule {
        return $this->scheduledInstallDay;
    }

    /**
     * Gets the scheduledInstallTime property value. Scheduled Install Time during day
     * @return Time|null
    */
    public function getScheduledInstallTime(): ?Time {
        return $this->scheduledInstallTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('scheduledInstallDay', $this->scheduledInstallDay);
        $writer->writeTimeValue('scheduledInstallTime', $this->scheduledInstallTime);
    }

    /**
     * Sets the scheduledInstallDay property value. Possible values for a weekly schedule.
     *  @param WeeklySchedule|null $value Value to set for the scheduledInstallDay property.
    */
    public function setScheduledInstallDay(?WeeklySchedule $value ): void {
        $this->scheduledInstallDay = $value;
    }

    /**
     * Sets the scheduledInstallTime property value. Scheduled Install Time during day
     *  @param Time|null $value Value to set for the scheduledInstallTime property.
    */
    public function setScheduledInstallTime(?Time $value ): void {
        $this->scheduledInstallTime = $value;
    }

}
