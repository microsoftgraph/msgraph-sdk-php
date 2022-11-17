<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class IosUpdateConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new IosUpdateConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosUpdateConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosUpdateConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosUpdateConfiguration {
        return new IosUpdateConfiguration();
    }

    /**
     * Gets the activeHoursEnd property value. Active Hours End (active hours mean the time window when updates install should not happen)
     * @return Time|null
    */
    public function getActiveHoursEnd(): ?Time {
        return $this->getBackingStore()->get('activeHoursEnd');
    }

    /**
     * Gets the activeHoursStart property value. Active Hours Start (active hours mean the time window when updates install should not happen)
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
            'scheduledInstallDays' => fn(ParseNode $n) => $o->setScheduledInstallDays($n->getCollectionOfEnumValues(DayOfWeek::class)),
            'utcTimeOffsetInMinutes' => fn(ParseNode $n) => $o->setUtcTimeOffsetInMinutes($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the scheduledInstallDays property value. Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
     * @return array<DayOfWeek>|null
    */
    public function getScheduledInstallDays(): ?array {
        return $this->getBackingStore()->get('scheduledInstallDays');
    }

    /**
     * Gets the utcTimeOffsetInMinutes property value. UTC Time Offset indicated in minutes
     * @return int|null
    */
    public function getUtcTimeOffsetInMinutes(): ?int {
        return $this->getBackingStore()->get('utcTimeOffsetInMinutes');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeTimeValue('activeHoursEnd', $this->getActiveHoursEnd());
        $writer->writeTimeValue('activeHoursStart', $this->getActiveHoursStart());
        $writer->writeCollectionOfEnumValues('scheduledInstallDays', $this->getScheduledInstallDays());
        $writer->writeIntegerValue('utcTimeOffsetInMinutes', $this->getUtcTimeOffsetInMinutes());
    }

    /**
     * Sets the activeHoursEnd property value. Active Hours End (active hours mean the time window when updates install should not happen)
     *  @param Time|null $value Value to set for the activeHoursEnd property.
    */
    public function setActiveHoursEnd(?Time $value): void {
        $this->getBackingStore()->set('activeHoursEnd', $value);
    }

    /**
     * Sets the activeHoursStart property value. Active Hours Start (active hours mean the time window when updates install should not happen)
     *  @param Time|null $value Value to set for the activeHoursStart property.
    */
    public function setActiveHoursStart(?Time $value): void {
        $this->getBackingStore()->set('activeHoursStart', $value);
    }

    /**
     * Sets the scheduledInstallDays property value. Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
     *  @param array<DayOfWeek>|null $value Value to set for the scheduledInstallDays property.
    */
    public function setScheduledInstallDays(?array $value): void {
        $this->getBackingStore()->set('scheduledInstallDays', $value);
    }

    /**
     * Sets the utcTimeOffsetInMinutes property value. UTC Time Offset indicated in minutes
     *  @param int|null $value Value to set for the utcTimeOffsetInMinutes property.
    */
    public function setUtcTimeOffsetInMinutes(?int $value): void {
        $this->getBackingStore()->set('utcTimeOffsetInMinutes', $value);
    }

}
