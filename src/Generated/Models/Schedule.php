<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Schedule extends Entity implements Parsable 
{
    /**
     * Instantiates a new schedule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Schedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Schedule {
        return new Schedule();
    }

    /**
     * Gets the enabled property value. Indicates whether the schedule is enabled for the team. Required.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->getBackingStore()->get('enabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'offerShiftRequests' => fn(ParseNode $n) => $o->setOfferShiftRequests($n->getCollectionOfObjectValues([OfferShiftRequest::class, 'createFromDiscriminatorValue'])),
            'offerShiftRequestsEnabled' => fn(ParseNode $n) => $o->setOfferShiftRequestsEnabled($n->getBooleanValue()),
            'openShiftChangeRequests' => fn(ParseNode $n) => $o->setOpenShiftChangeRequests($n->getCollectionOfObjectValues([OpenShiftChangeRequest::class, 'createFromDiscriminatorValue'])),
            'openShifts' => fn(ParseNode $n) => $o->setOpenShifts($n->getCollectionOfObjectValues([OpenShift::class, 'createFromDiscriminatorValue'])),
            'openShiftsEnabled' => fn(ParseNode $n) => $o->setOpenShiftsEnabled($n->getBooleanValue()),
            'provisionStatus' => fn(ParseNode $n) => $o->setProvisionStatus($n->getEnumValue(OperationStatus::class)),
            'provisionStatusCode' => fn(ParseNode $n) => $o->setProvisionStatusCode($n->getStringValue()),
            'schedulingGroups' => fn(ParseNode $n) => $o->setSchedulingGroups($n->getCollectionOfObjectValues([SchedulingGroup::class, 'createFromDiscriminatorValue'])),
            'shifts' => fn(ParseNode $n) => $o->setShifts($n->getCollectionOfObjectValues([Shift::class, 'createFromDiscriminatorValue'])),
            'swapShiftsChangeRequests' => fn(ParseNode $n) => $o->setSwapShiftsChangeRequests($n->getCollectionOfObjectValues([SwapShiftsChangeRequest::class, 'createFromDiscriminatorValue'])),
            'swapShiftsRequestsEnabled' => fn(ParseNode $n) => $o->setSwapShiftsRequestsEnabled($n->getBooleanValue()),
            'timeClockEnabled' => fn(ParseNode $n) => $o->setTimeClockEnabled($n->getBooleanValue()),
            'timeOffReasons' => fn(ParseNode $n) => $o->setTimeOffReasons($n->getCollectionOfObjectValues([TimeOffReason::class, 'createFromDiscriminatorValue'])),
            'timeOffRequests' => fn(ParseNode $n) => $o->setTimeOffRequests($n->getCollectionOfObjectValues([TimeOffRequest::class, 'createFromDiscriminatorValue'])),
            'timeOffRequestsEnabled' => fn(ParseNode $n) => $o->setTimeOffRequestsEnabled($n->getBooleanValue()),
            'timesOff' => fn(ParseNode $n) => $o->setTimesOff($n->getCollectionOfObjectValues([TimeOff::class, 'createFromDiscriminatorValue'])),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getStringValue()),
            'workforceIntegrationIds' => fn(ParseNode $n) => $o->setWorkforceIntegrationIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the offerShiftRequests property value. 
     * @return array<OfferShiftRequest>|null
    */
    public function getOfferShiftRequests(): ?array {
        return $this->getBackingStore()->get('offerShiftRequests');
    }

    /**
     * Gets the offerShiftRequestsEnabled property value. Indicates whether offer shift requests are enabled for the schedule.
     * @return bool|null
    */
    public function getOfferShiftRequestsEnabled(): ?bool {
        return $this->getBackingStore()->get('offerShiftRequestsEnabled');
    }

    /**
     * Gets the openShiftChangeRequests property value. 
     * @return array<OpenShiftChangeRequest>|null
    */
    public function getOpenShiftChangeRequests(): ?array {
        return $this->getBackingStore()->get('openShiftChangeRequests');
    }

    /**
     * Gets the openShifts property value. 
     * @return array<OpenShift>|null
    */
    public function getOpenShifts(): ?array {
        return $this->getBackingStore()->get('openShifts');
    }

    /**
     * Gets the openShiftsEnabled property value. Indicates whether open shifts are enabled for the schedule.
     * @return bool|null
    */
    public function getOpenShiftsEnabled(): ?bool {
        return $this->getBackingStore()->get('openShiftsEnabled');
    }

    /**
     * Gets the provisionStatus property value. The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
     * @return OperationStatus|null
    */
    public function getProvisionStatus(): ?OperationStatus {
        return $this->getBackingStore()->get('provisionStatus');
    }

    /**
     * Gets the provisionStatusCode property value. Additional information about why schedule provisioning failed.
     * @return string|null
    */
    public function getProvisionStatusCode(): ?string {
        return $this->getBackingStore()->get('provisionStatusCode');
    }

    /**
     * Gets the schedulingGroups property value. The logical grouping of users in the schedule (usually by role).
     * @return array<SchedulingGroup>|null
    */
    public function getSchedulingGroups(): ?array {
        return $this->getBackingStore()->get('schedulingGroups');
    }

    /**
     * Gets the shifts property value. The shifts in the schedule.
     * @return array<Shift>|null
    */
    public function getShifts(): ?array {
        return $this->getBackingStore()->get('shifts');
    }

    /**
     * Gets the swapShiftsChangeRequests property value. 
     * @return array<SwapShiftsChangeRequest>|null
    */
    public function getSwapShiftsChangeRequests(): ?array {
        return $this->getBackingStore()->get('swapShiftsChangeRequests');
    }

    /**
     * Gets the swapShiftsRequestsEnabled property value. Indicates whether swap shifts requests are enabled for the schedule.
     * @return bool|null
    */
    public function getSwapShiftsRequestsEnabled(): ?bool {
        return $this->getBackingStore()->get('swapShiftsRequestsEnabled');
    }

    /**
     * Gets the timeClockEnabled property value. Indicates whether time clock is enabled for the schedule.
     * @return bool|null
    */
    public function getTimeClockEnabled(): ?bool {
        return $this->getBackingStore()->get('timeClockEnabled');
    }

    /**
     * Gets the timeOffReasons property value. The set of reasons for a time off in the schedule.
     * @return array<TimeOffReason>|null
    */
    public function getTimeOffReasons(): ?array {
        return $this->getBackingStore()->get('timeOffReasons');
    }

    /**
     * Gets the timeOffRequests property value. 
     * @return array<TimeOffRequest>|null
    */
    public function getTimeOffRequests(): ?array {
        return $this->getBackingStore()->get('timeOffRequests');
    }

    /**
     * Gets the timeOffRequestsEnabled property value. Indicates whether time off requests are enabled for the schedule.
     * @return bool|null
    */
    public function getTimeOffRequestsEnabled(): ?bool {
        return $this->getBackingStore()->get('timeOffRequestsEnabled');
    }

    /**
     * Gets the timesOff property value. The instances of times off in the schedule.
     * @return array<TimeOff>|null
    */
    public function getTimesOff(): ?array {
        return $this->getBackingStore()->get('timesOff');
    }

    /**
     * Gets the timeZone property value. Indicates the time zone of the schedule team using tz database format. Required.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->getBackingStore()->get('timeZone');
    }

    /**
     * Gets the workforceIntegrationIds property value. 
     * @return array<string>|null
    */
    public function getWorkforceIntegrationIds(): ?array {
        return $this->getBackingStore()->get('workforceIntegrationIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeCollectionOfObjectValues('offerShiftRequests', $this->getOfferShiftRequests());
        $writer->writeBooleanValue('offerShiftRequestsEnabled', $this->getOfferShiftRequestsEnabled());
        $writer->writeCollectionOfObjectValues('openShiftChangeRequests', $this->getOpenShiftChangeRequests());
        $writer->writeCollectionOfObjectValues('openShifts', $this->getOpenShifts());
        $writer->writeBooleanValue('openShiftsEnabled', $this->getOpenShiftsEnabled());
        $writer->writeCollectionOfObjectValues('schedulingGroups', $this->getSchedulingGroups());
        $writer->writeCollectionOfObjectValues('shifts', $this->getShifts());
        $writer->writeCollectionOfObjectValues('swapShiftsChangeRequests', $this->getSwapShiftsChangeRequests());
        $writer->writeBooleanValue('swapShiftsRequestsEnabled', $this->getSwapShiftsRequestsEnabled());
        $writer->writeBooleanValue('timeClockEnabled', $this->getTimeClockEnabled());
        $writer->writeCollectionOfObjectValues('timeOffReasons', $this->getTimeOffReasons());
        $writer->writeCollectionOfObjectValues('timeOffRequests', $this->getTimeOffRequests());
        $writer->writeBooleanValue('timeOffRequestsEnabled', $this->getTimeOffRequestsEnabled());
        $writer->writeCollectionOfObjectValues('timesOff', $this->getTimesOff());
        $writer->writeStringValue('timeZone', $this->getTimeZone());
        $writer->writeCollectionOfPrimitiveValues('workforceIntegrationIds', $this->getWorkforceIntegrationIds());
    }

    /**
     * Sets the enabled property value. Indicates whether the schedule is enabled for the team. Required.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the offerShiftRequests property value. 
     * @param array<OfferShiftRequest>|null $value Value to set for the offerShiftRequests property.
    */
    public function setOfferShiftRequests(?array $value): void {
        $this->getBackingStore()->set('offerShiftRequests', $value);
    }

    /**
     * Sets the offerShiftRequestsEnabled property value. Indicates whether offer shift requests are enabled for the schedule.
     * @param bool|null $value Value to set for the offerShiftRequestsEnabled property.
    */
    public function setOfferShiftRequestsEnabled(?bool $value): void {
        $this->getBackingStore()->set('offerShiftRequestsEnabled', $value);
    }

    /**
     * Sets the openShiftChangeRequests property value. 
     * @param array<OpenShiftChangeRequest>|null $value Value to set for the openShiftChangeRequests property.
    */
    public function setOpenShiftChangeRequests(?array $value): void {
        $this->getBackingStore()->set('openShiftChangeRequests', $value);
    }

    /**
     * Sets the openShifts property value. 
     * @param array<OpenShift>|null $value Value to set for the openShifts property.
    */
    public function setOpenShifts(?array $value): void {
        $this->getBackingStore()->set('openShifts', $value);
    }

    /**
     * Sets the openShiftsEnabled property value. Indicates whether open shifts are enabled for the schedule.
     * @param bool|null $value Value to set for the openShiftsEnabled property.
    */
    public function setOpenShiftsEnabled(?bool $value): void {
        $this->getBackingStore()->set('openShiftsEnabled', $value);
    }

    /**
     * Sets the provisionStatus property value. The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
     * @param OperationStatus|null $value Value to set for the provisionStatus property.
    */
    public function setProvisionStatus(?OperationStatus $value): void {
        $this->getBackingStore()->set('provisionStatus', $value);
    }

    /**
     * Sets the provisionStatusCode property value. Additional information about why schedule provisioning failed.
     * @param string|null $value Value to set for the provisionStatusCode property.
    */
    public function setProvisionStatusCode(?string $value): void {
        $this->getBackingStore()->set('provisionStatusCode', $value);
    }

    /**
     * Sets the schedulingGroups property value. The logical grouping of users in the schedule (usually by role).
     * @param array<SchedulingGroup>|null $value Value to set for the schedulingGroups property.
    */
    public function setSchedulingGroups(?array $value): void {
        $this->getBackingStore()->set('schedulingGroups', $value);
    }

    /**
     * Sets the shifts property value. The shifts in the schedule.
     * @param array<Shift>|null $value Value to set for the shifts property.
    */
    public function setShifts(?array $value): void {
        $this->getBackingStore()->set('shifts', $value);
    }

    /**
     * Sets the swapShiftsChangeRequests property value. 
     * @param array<SwapShiftsChangeRequest>|null $value Value to set for the swapShiftsChangeRequests property.
    */
    public function setSwapShiftsChangeRequests(?array $value): void {
        $this->getBackingStore()->set('swapShiftsChangeRequests', $value);
    }

    /**
     * Sets the swapShiftsRequestsEnabled property value. Indicates whether swap shifts requests are enabled for the schedule.
     * @param bool|null $value Value to set for the swapShiftsRequestsEnabled property.
    */
    public function setSwapShiftsRequestsEnabled(?bool $value): void {
        $this->getBackingStore()->set('swapShiftsRequestsEnabled', $value);
    }

    /**
     * Sets the timeClockEnabled property value. Indicates whether time clock is enabled for the schedule.
     * @param bool|null $value Value to set for the timeClockEnabled property.
    */
    public function setTimeClockEnabled(?bool $value): void {
        $this->getBackingStore()->set('timeClockEnabled', $value);
    }

    /**
     * Sets the timeOffReasons property value. The set of reasons for a time off in the schedule.
     * @param array<TimeOffReason>|null $value Value to set for the timeOffReasons property.
    */
    public function setTimeOffReasons(?array $value): void {
        $this->getBackingStore()->set('timeOffReasons', $value);
    }

    /**
     * Sets the timeOffRequests property value. 
     * @param array<TimeOffRequest>|null $value Value to set for the timeOffRequests property.
    */
    public function setTimeOffRequests(?array $value): void {
        $this->getBackingStore()->set('timeOffRequests', $value);
    }

    /**
     * Sets the timeOffRequestsEnabled property value. Indicates whether time off requests are enabled for the schedule.
     * @param bool|null $value Value to set for the timeOffRequestsEnabled property.
    */
    public function setTimeOffRequestsEnabled(?bool $value): void {
        $this->getBackingStore()->set('timeOffRequestsEnabled', $value);
    }

    /**
     * Sets the timesOff property value. The instances of times off in the schedule.
     * @param array<TimeOff>|null $value Value to set for the timesOff property.
    */
    public function setTimesOff(?array $value): void {
        $this->getBackingStore()->set('timesOff', $value);
    }

    /**
     * Sets the timeZone property value. Indicates the time zone of the schedule team using tz database format. Required.
     * @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value): void {
        $this->getBackingStore()->set('timeZone', $value);
    }

    /**
     * Sets the workforceIntegrationIds property value. 
     * @param array<string>|null $value Value to set for the workforceIntegrationIds property.
    */
    public function setWorkforceIntegrationIds(?array $value): void {
        $this->getBackingStore()->set('workforceIntegrationIds', $value);
    }

}
