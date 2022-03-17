<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Schedule extends Entity 
{
    /** @var bool|null $enabled Indicates whether the schedule is enabled for the team. Required. */
    private ?bool $enabled = null;
    
    /** @var array<OfferShiftRequest>|null $offerShiftRequests  */
    private ?array $offerShiftRequests = null;
    
    /** @var bool|null $offerShiftRequestsEnabled Indicates whether offer shift requests are enabled for the schedule. */
    private ?bool $offerShiftRequestsEnabled = null;
    
    /** @var array<OpenShiftChangeRequest>|null $openShiftChangeRequests  */
    private ?array $openShiftChangeRequests = null;
    
    /** @var array<OpenShift>|null $openShifts  */
    private ?array $openShifts = null;
    
    /** @var bool|null $openShiftsEnabled Indicates whether open shifts are enabled for the schedule. */
    private ?bool $openShiftsEnabled = null;
    
    /** @var OperationStatus|null $provisionStatus The status of the schedule provisioning. The possible values are notStarted, running, completed, failed. */
    private ?OperationStatus $provisionStatus = null;
    
    /** @var string|null $provisionStatusCode Additional information about why schedule provisioning failed. */
    private ?string $provisionStatusCode = null;
    
    /** @var array<SchedulingGroup>|null $schedulingGroups The logical grouping of users in the schedule (usually by role). */
    private ?array $schedulingGroups = null;
    
    /** @var array<Shift>|null $shifts The shifts in the schedule. */
    private ?array $shifts = null;
    
    /** @var array<SwapShiftsChangeRequest>|null $swapShiftsChangeRequests  */
    private ?array $swapShiftsChangeRequests = null;
    
    /** @var bool|null $swapShiftsRequestsEnabled Indicates whether swap shifts requests are enabled for the schedule. */
    private ?bool $swapShiftsRequestsEnabled = null;
    
    /** @var bool|null $timeClockEnabled Indicates whether time clock is enabled for the schedule. */
    private ?bool $timeClockEnabled = null;
    
    /** @var array<TimeOffReason>|null $timeOffReasons The set of reasons for a time off in the schedule. */
    private ?array $timeOffReasons = null;
    
    /** @var array<TimeOffRequest>|null $timeOffRequests  */
    private ?array $timeOffRequests = null;
    
    /** @var bool|null $timeOffRequestsEnabled Indicates whether time off requests are enabled for the schedule. */
    private ?bool $timeOffRequestsEnabled = null;
    
    /** @var array<TimeOff>|null $timesOff The instances of times off in the schedule. */
    private ?array $timesOff = null;
    
    /** @var string|null $timeZone Indicates the time zone of the schedule team using tz database format. Required. */
    private ?string $timeZone = null;
    
    /** @var array<string>|null $workforceIntegrationIds  */
    private ?array $workforceIntegrationIds = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): Schedule {
        return new Schedule();
    }

    /**
     * Gets the enabled property value. Indicates whether the schedule is enabled for the team. Required.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'enabled' => function (self $o, ParseNode $n) { $o->setEnabled($n->getBooleanValue()); },
            'offerShiftRequests' => function (self $o, ParseNode $n) { $o->setOfferShiftRequests($n->getCollectionOfObjectValues(OfferShiftRequest::class)); },
            'offerShiftRequestsEnabled' => function (self $o, ParseNode $n) { $o->setOfferShiftRequestsEnabled($n->getBooleanValue()); },
            'openShiftChangeRequests' => function (self $o, ParseNode $n) { $o->setOpenShiftChangeRequests($n->getCollectionOfObjectValues(OpenShiftChangeRequest::class)); },
            'openShifts' => function (self $o, ParseNode $n) { $o->setOpenShifts($n->getCollectionOfObjectValues(OpenShift::class)); },
            'openShiftsEnabled' => function (self $o, ParseNode $n) { $o->setOpenShiftsEnabled($n->getBooleanValue()); },
            'provisionStatus' => function (self $o, ParseNode $n) { $o->setProvisionStatus($n->getEnumValue(OperationStatus::class)); },
            'provisionStatusCode' => function (self $o, ParseNode $n) { $o->setProvisionStatusCode($n->getStringValue()); },
            'schedulingGroups' => function (self $o, ParseNode $n) { $o->setSchedulingGroups($n->getCollectionOfObjectValues(SchedulingGroup::class)); },
            'shifts' => function (self $o, ParseNode $n) { $o->setShifts($n->getCollectionOfObjectValues(Shift::class)); },
            'swapShiftsChangeRequests' => function (self $o, ParseNode $n) { $o->setSwapShiftsChangeRequests($n->getCollectionOfObjectValues(SwapShiftsChangeRequest::class)); },
            'swapShiftsRequestsEnabled' => function (self $o, ParseNode $n) { $o->setSwapShiftsRequestsEnabled($n->getBooleanValue()); },
            'timeClockEnabled' => function (self $o, ParseNode $n) { $o->setTimeClockEnabled($n->getBooleanValue()); },
            'timeOffReasons' => function (self $o, ParseNode $n) { $o->setTimeOffReasons($n->getCollectionOfObjectValues(TimeOffReason::class)); },
            'timeOffRequests' => function (self $o, ParseNode $n) { $o->setTimeOffRequests($n->getCollectionOfObjectValues(TimeOffRequest::class)); },
            'timeOffRequestsEnabled' => function (self $o, ParseNode $n) { $o->setTimeOffRequestsEnabled($n->getBooleanValue()); },
            'timesOff' => function (self $o, ParseNode $n) { $o->setTimesOff($n->getCollectionOfObjectValues(TimeOff::class)); },
            'timeZone' => function (self $o, ParseNode $n) { $o->setTimeZone($n->getStringValue()); },
            'workforceIntegrationIds' => function (self $o, ParseNode $n) { $o->setWorkforceIntegrationIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the offerShiftRequests property value. 
     * @return array<OfferShiftRequest>|null
    */
    public function getOfferShiftRequests(): ?array {
        return $this->offerShiftRequests;
    }

    /**
     * Gets the offerShiftRequestsEnabled property value. Indicates whether offer shift requests are enabled for the schedule.
     * @return bool|null
    */
    public function getOfferShiftRequestsEnabled(): ?bool {
        return $this->offerShiftRequestsEnabled;
    }

    /**
     * Gets the openShiftChangeRequests property value. 
     * @return array<OpenShiftChangeRequest>|null
    */
    public function getOpenShiftChangeRequests(): ?array {
        return $this->openShiftChangeRequests;
    }

    /**
     * Gets the openShifts property value. 
     * @return array<OpenShift>|null
    */
    public function getOpenShifts(): ?array {
        return $this->openShifts;
    }

    /**
     * Gets the openShiftsEnabled property value. Indicates whether open shifts are enabled for the schedule.
     * @return bool|null
    */
    public function getOpenShiftsEnabled(): ?bool {
        return $this->openShiftsEnabled;
    }

    /**
     * Gets the provisionStatus property value. The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
     * @return OperationStatus|null
    */
    public function getProvisionStatus(): ?OperationStatus {
        return $this->provisionStatus;
    }

    /**
     * Gets the provisionStatusCode property value. Additional information about why schedule provisioning failed.
     * @return string|null
    */
    public function getProvisionStatusCode(): ?string {
        return $this->provisionStatusCode;
    }

    /**
     * Gets the schedulingGroups property value. The logical grouping of users in the schedule (usually by role).
     * @return array<SchedulingGroup>|null
    */
    public function getSchedulingGroups(): ?array {
        return $this->schedulingGroups;
    }

    /**
     * Gets the shifts property value. The shifts in the schedule.
     * @return array<Shift>|null
    */
    public function getShifts(): ?array {
        return $this->shifts;
    }

    /**
     * Gets the swapShiftsChangeRequests property value. 
     * @return array<SwapShiftsChangeRequest>|null
    */
    public function getSwapShiftsChangeRequests(): ?array {
        return $this->swapShiftsChangeRequests;
    }

    /**
     * Gets the swapShiftsRequestsEnabled property value. Indicates whether swap shifts requests are enabled for the schedule.
     * @return bool|null
    */
    public function getSwapShiftsRequestsEnabled(): ?bool {
        return $this->swapShiftsRequestsEnabled;
    }

    /**
     * Gets the timeClockEnabled property value. Indicates whether time clock is enabled for the schedule.
     * @return bool|null
    */
    public function getTimeClockEnabled(): ?bool {
        return $this->timeClockEnabled;
    }

    /**
     * Gets the timeOffReasons property value. The set of reasons for a time off in the schedule.
     * @return array<TimeOffReason>|null
    */
    public function getTimeOffReasons(): ?array {
        return $this->timeOffReasons;
    }

    /**
     * Gets the timeOffRequests property value. 
     * @return array<TimeOffRequest>|null
    */
    public function getTimeOffRequests(): ?array {
        return $this->timeOffRequests;
    }

    /**
     * Gets the timeOffRequestsEnabled property value. Indicates whether time off requests are enabled for the schedule.
     * @return bool|null
    */
    public function getTimeOffRequestsEnabled(): ?bool {
        return $this->timeOffRequestsEnabled;
    }

    /**
     * Gets the timesOff property value. The instances of times off in the schedule.
     * @return array<TimeOff>|null
    */
    public function getTimesOff(): ?array {
        return $this->timesOff;
    }

    /**
     * Gets the timeZone property value. Indicates the time zone of the schedule team using tz database format. Required.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->timeZone;
    }

    /**
     * Gets the workforceIntegrationIds property value. 
     * @return array<string>|null
    */
    public function getWorkforceIntegrationIds(): ?array {
        return $this->workforceIntegrationIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeCollectionOfObjectValues('offerShiftRequests', $this->offerShiftRequests);
        $writer->writeBooleanValue('offerShiftRequestsEnabled', $this->offerShiftRequestsEnabled);
        $writer->writeCollectionOfObjectValues('openShiftChangeRequests', $this->openShiftChangeRequests);
        $writer->writeCollectionOfObjectValues('openShifts', $this->openShifts);
        $writer->writeBooleanValue('openShiftsEnabled', $this->openShiftsEnabled);
        $writer->writeEnumValue('provisionStatus', $this->provisionStatus);
        $writer->writeStringValue('provisionStatusCode', $this->provisionStatusCode);
        $writer->writeCollectionOfObjectValues('schedulingGroups', $this->schedulingGroups);
        $writer->writeCollectionOfObjectValues('shifts', $this->shifts);
        $writer->writeCollectionOfObjectValues('swapShiftsChangeRequests', $this->swapShiftsChangeRequests);
        $writer->writeBooleanValue('swapShiftsRequestsEnabled', $this->swapShiftsRequestsEnabled);
        $writer->writeBooleanValue('timeClockEnabled', $this->timeClockEnabled);
        $writer->writeCollectionOfObjectValues('timeOffReasons', $this->timeOffReasons);
        $writer->writeCollectionOfObjectValues('timeOffRequests', $this->timeOffRequests);
        $writer->writeBooleanValue('timeOffRequestsEnabled', $this->timeOffRequestsEnabled);
        $writer->writeCollectionOfObjectValues('timesOff', $this->timesOff);
        $writer->writeStringValue('timeZone', $this->timeZone);
        $writer->writeCollectionOfPrimitiveValues('workforceIntegrationIds', $this->workforceIntegrationIds);
    }

    /**
     * Sets the enabled property value. Indicates whether the schedule is enabled for the team. Required.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the offerShiftRequests property value. 
     *  @param array<OfferShiftRequest>|null $value Value to set for the offerShiftRequests property.
    */
    public function setOfferShiftRequests(?array $value ): void {
        $this->offerShiftRequests = $value;
    }

    /**
     * Sets the offerShiftRequestsEnabled property value. Indicates whether offer shift requests are enabled for the schedule.
     *  @param bool|null $value Value to set for the offerShiftRequestsEnabled property.
    */
    public function setOfferShiftRequestsEnabled(?bool $value ): void {
        $this->offerShiftRequestsEnabled = $value;
    }

    /**
     * Sets the openShiftChangeRequests property value. 
     *  @param array<OpenShiftChangeRequest>|null $value Value to set for the openShiftChangeRequests property.
    */
    public function setOpenShiftChangeRequests(?array $value ): void {
        $this->openShiftChangeRequests = $value;
    }

    /**
     * Sets the openShifts property value. 
     *  @param array<OpenShift>|null $value Value to set for the openShifts property.
    */
    public function setOpenShifts(?array $value ): void {
        $this->openShifts = $value;
    }

    /**
     * Sets the openShiftsEnabled property value. Indicates whether open shifts are enabled for the schedule.
     *  @param bool|null $value Value to set for the openShiftsEnabled property.
    */
    public function setOpenShiftsEnabled(?bool $value ): void {
        $this->openShiftsEnabled = $value;
    }

    /**
     * Sets the provisionStatus property value. The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
     *  @param OperationStatus|null $value Value to set for the provisionStatus property.
    */
    public function setProvisionStatus(?OperationStatus $value ): void {
        $this->provisionStatus = $value;
    }

    /**
     * Sets the provisionStatusCode property value. Additional information about why schedule provisioning failed.
     *  @param string|null $value Value to set for the provisionStatusCode property.
    */
    public function setProvisionStatusCode(?string $value ): void {
        $this->provisionStatusCode = $value;
    }

    /**
     * Sets the schedulingGroups property value. The logical grouping of users in the schedule (usually by role).
     *  @param array<SchedulingGroup>|null $value Value to set for the schedulingGroups property.
    */
    public function setSchedulingGroups(?array $value ): void {
        $this->schedulingGroups = $value;
    }

    /**
     * Sets the shifts property value. The shifts in the schedule.
     *  @param array<Shift>|null $value Value to set for the shifts property.
    */
    public function setShifts(?array $value ): void {
        $this->shifts = $value;
    }

    /**
     * Sets the swapShiftsChangeRequests property value. 
     *  @param array<SwapShiftsChangeRequest>|null $value Value to set for the swapShiftsChangeRequests property.
    */
    public function setSwapShiftsChangeRequests(?array $value ): void {
        $this->swapShiftsChangeRequests = $value;
    }

    /**
     * Sets the swapShiftsRequestsEnabled property value. Indicates whether swap shifts requests are enabled for the schedule.
     *  @param bool|null $value Value to set for the swapShiftsRequestsEnabled property.
    */
    public function setSwapShiftsRequestsEnabled(?bool $value ): void {
        $this->swapShiftsRequestsEnabled = $value;
    }

    /**
     * Sets the timeClockEnabled property value. Indicates whether time clock is enabled for the schedule.
     *  @param bool|null $value Value to set for the timeClockEnabled property.
    */
    public function setTimeClockEnabled(?bool $value ): void {
        $this->timeClockEnabled = $value;
    }

    /**
     * Sets the timeOffReasons property value. The set of reasons for a time off in the schedule.
     *  @param array<TimeOffReason>|null $value Value to set for the timeOffReasons property.
    */
    public function setTimeOffReasons(?array $value ): void {
        $this->timeOffReasons = $value;
    }

    /**
     * Sets the timeOffRequests property value. 
     *  @param array<TimeOffRequest>|null $value Value to set for the timeOffRequests property.
    */
    public function setTimeOffRequests(?array $value ): void {
        $this->timeOffRequests = $value;
    }

    /**
     * Sets the timeOffRequestsEnabled property value. Indicates whether time off requests are enabled for the schedule.
     *  @param bool|null $value Value to set for the timeOffRequestsEnabled property.
    */
    public function setTimeOffRequestsEnabled(?bool $value ): void {
        $this->timeOffRequestsEnabled = $value;
    }

    /**
     * Sets the timesOff property value. The instances of times off in the schedule.
     *  @param array<TimeOff>|null $value Value to set for the timesOff property.
    */
    public function setTimesOff(?array $value ): void {
        $this->timesOff = $value;
    }

    /**
     * Sets the timeZone property value. Indicates the time zone of the schedule team using tz database format. Required.
     *  @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value ): void {
        $this->timeZone = $value;
    }

    /**
     * Sets the workforceIntegrationIds property value. 
     *  @param array<string>|null $value Value to set for the workforceIntegrationIds property.
    */
    public function setWorkforceIntegrationIds(?array $value ): void {
        $this->workforceIntegrationIds = $value;
    }

}
