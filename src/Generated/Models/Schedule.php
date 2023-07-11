<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Schedule extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
        $val = $this->getBackingStore()->get('enabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'workforceIntegrationIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWorkforceIntegrationIds($val);
            },
        ]);
    }

    /**
     * Gets the offerShiftRequests property value. The offer requests for shifts in the schedule.
     * @return array<OfferShiftRequest>|null
    */
    public function getOfferShiftRequests(): ?array {
        $val = $this->getBackingStore()->get('offerShiftRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OfferShiftRequest::class);
            /** @var array<OfferShiftRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offerShiftRequests'");
    }

    /**
     * Gets the offerShiftRequestsEnabled property value. Indicates whether offer shift requests are enabled for the schedule.
     * @return bool|null
    */
    public function getOfferShiftRequestsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('offerShiftRequestsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offerShiftRequestsEnabled'");
    }

    /**
     * Gets the openShiftChangeRequests property value. The open shift requests in the schedule.
     * @return array<OpenShiftChangeRequest>|null
    */
    public function getOpenShiftChangeRequests(): ?array {
        $val = $this->getBackingStore()->get('openShiftChangeRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OpenShiftChangeRequest::class);
            /** @var array<OpenShiftChangeRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'openShiftChangeRequests'");
    }

    /**
     * Gets the openShifts property value. The set of open shifts in a scheduling group in the schedule.
     * @return array<OpenShift>|null
    */
    public function getOpenShifts(): ?array {
        $val = $this->getBackingStore()->get('openShifts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OpenShift::class);
            /** @var array<OpenShift>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'openShifts'");
    }

    /**
     * Gets the openShiftsEnabled property value. Indicates whether open shifts are enabled for the schedule.
     * @return bool|null
    */
    public function getOpenShiftsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('openShiftsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'openShiftsEnabled'");
    }

    /**
     * Gets the provisionStatus property value. The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
     * @return OperationStatus|null
    */
    public function getProvisionStatus(): ?OperationStatus {
        $val = $this->getBackingStore()->get('provisionStatus');
        if (is_null($val) || $val instanceof OperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisionStatus'");
    }

    /**
     * Gets the provisionStatusCode property value. Additional information about why schedule provisioning failed.
     * @return string|null
    */
    public function getProvisionStatusCode(): ?string {
        $val = $this->getBackingStore()->get('provisionStatusCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisionStatusCode'");
    }

    /**
     * Gets the schedulingGroups property value. The logical grouping of users in the schedule (usually by role).
     * @return array<SchedulingGroup>|null
    */
    public function getSchedulingGroups(): ?array {
        $val = $this->getBackingStore()->get('schedulingGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SchedulingGroup::class);
            /** @var array<SchedulingGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedulingGroups'");
    }

    /**
     * Gets the shifts property value. The shifts in the schedule.
     * @return array<Shift>|null
    */
    public function getShifts(): ?array {
        $val = $this->getBackingStore()->get('shifts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Shift::class);
            /** @var array<Shift>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shifts'");
    }

    /**
     * Gets the swapShiftsChangeRequests property value. The swap requests for shifts in the schedule.
     * @return array<SwapShiftsChangeRequest>|null
    */
    public function getSwapShiftsChangeRequests(): ?array {
        $val = $this->getBackingStore()->get('swapShiftsChangeRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SwapShiftsChangeRequest::class);
            /** @var array<SwapShiftsChangeRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'swapShiftsChangeRequests'");
    }

    /**
     * Gets the swapShiftsRequestsEnabled property value. Indicates whether swap shifts requests are enabled for the schedule.
     * @return bool|null
    */
    public function getSwapShiftsRequestsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('swapShiftsRequestsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'swapShiftsRequestsEnabled'");
    }

    /**
     * Gets the timeClockEnabled property value. Indicates whether time clock is enabled for the schedule.
     * @return bool|null
    */
    public function getTimeClockEnabled(): ?bool {
        $val = $this->getBackingStore()->get('timeClockEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeClockEnabled'");
    }

    /**
     * Gets the timeOffReasons property value. The set of reasons for a time off in the schedule.
     * @return array<TimeOffReason>|null
    */
    public function getTimeOffReasons(): ?array {
        $val = $this->getBackingStore()->get('timeOffReasons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TimeOffReason::class);
            /** @var array<TimeOffReason>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeOffReasons'");
    }

    /**
     * Gets the timeOffRequests property value. The time off requests in the schedule.
     * @return array<TimeOffRequest>|null
    */
    public function getTimeOffRequests(): ?array {
        $val = $this->getBackingStore()->get('timeOffRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TimeOffRequest::class);
            /** @var array<TimeOffRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeOffRequests'");
    }

    /**
     * Gets the timeOffRequestsEnabled property value. Indicates whether time off requests are enabled for the schedule.
     * @return bool|null
    */
    public function getTimeOffRequestsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('timeOffRequestsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeOffRequestsEnabled'");
    }

    /**
     * Gets the timesOff property value. The instances of times off in the schedule.
     * @return array<TimeOff>|null
    */
    public function getTimesOff(): ?array {
        $val = $this->getBackingStore()->get('timesOff');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TimeOff::class);
            /** @var array<TimeOff>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timesOff'");
    }

    /**
     * Gets the timeZone property value. Indicates the time zone of the schedule team using tz database format. Required.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        $val = $this->getBackingStore()->get('timeZone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeZone'");
    }

    /**
     * Gets the workforceIntegrationIds property value. The workforceIntegrationIds property
     * @return array<string>|null
    */
    public function getWorkforceIntegrationIds(): ?array {
        $val = $this->getBackingStore()->get('workforceIntegrationIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workforceIntegrationIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the offerShiftRequests property value. The offer requests for shifts in the schedule.
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
     * Sets the openShiftChangeRequests property value. The open shift requests in the schedule.
     * @param array<OpenShiftChangeRequest>|null $value Value to set for the openShiftChangeRequests property.
    */
    public function setOpenShiftChangeRequests(?array $value): void {
        $this->getBackingStore()->set('openShiftChangeRequests', $value);
    }

    /**
     * Sets the openShifts property value. The set of open shifts in a scheduling group in the schedule.
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
     * Sets the swapShiftsChangeRequests property value. The swap requests for shifts in the schedule.
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
     * Sets the timeOffRequests property value. The time off requests in the schedule.
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
     * Sets the workforceIntegrationIds property value. The workforceIntegrationIds property
     * @param array<string>|null $value Value to set for the workforceIntegrationIds property.
    */
    public function setWorkforceIntegrationIds(?array $value): void {
        $this->getBackingStore()->set('workforceIntegrationIds', $value);
    }

}
