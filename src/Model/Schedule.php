<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Schedule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* Schedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Schedule extends Entity
{
    /**
    * Gets the enabled
    * Indicates whether the schedule is enabled for the team. Required.
    *
    * @return bool|null The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    * Indicates whether the schedule is enabled for the team. Required.
    *
    * @param bool $val The enabled
    *
    * @return Schedule
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the offerShiftRequestsEnabled
    * Indicates whether offer shift requests are enabled for the schedule.
    *
    * @return bool|null The offerShiftRequestsEnabled
    */
    public function getOfferShiftRequestsEnabled()
    {
        if (array_key_exists("offerShiftRequestsEnabled", $this->_propDict)) {
            return $this->_propDict["offerShiftRequestsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offerShiftRequestsEnabled
    * Indicates whether offer shift requests are enabled for the schedule.
    *
    * @param bool $val The offerShiftRequestsEnabled
    *
    * @return Schedule
    */
    public function setOfferShiftRequestsEnabled($val)
    {
        $this->_propDict["offerShiftRequestsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the openShiftsEnabled
    * Indicates whether open shifts are enabled for the schedule.
    *
    * @return bool|null The openShiftsEnabled
    */
    public function getOpenShiftsEnabled()
    {
        if (array_key_exists("openShiftsEnabled", $this->_propDict)) {
            return $this->_propDict["openShiftsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the openShiftsEnabled
    * Indicates whether open shifts are enabled for the schedule.
    *
    * @param bool $val The openShiftsEnabled
    *
    * @return Schedule
    */
    public function setOpenShiftsEnabled($val)
    {
        $this->_propDict["openShiftsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the provisionStatus
    * The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
    *
    * @return OperationStatus|null The provisionStatus
    */
    public function getProvisionStatus()
    {
        if (array_key_exists("provisionStatus", $this->_propDict) && !is_null($this->_propDict["provisionStatus"])) {
            if (is_a($this->_propDict["provisionStatus"], "\Microsoft\Graph\Model\OperationStatus")) {
                return $this->_propDict["provisionStatus"];
            } else {
                $this->_propDict["provisionStatus"] = new OperationStatus($this->_propDict["provisionStatus"]);
                return $this->_propDict["provisionStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the provisionStatus
    * The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
    *
    * @param OperationStatus $val The provisionStatus
    *
    * @return Schedule
    */
    public function setProvisionStatus($val)
    {
        $this->_propDict["provisionStatus"] = $val;
        return $this;
    }

    /**
    * Gets the provisionStatusCode
    * Additional information about why schedule provisioning failed.
    *
    * @return string|null The provisionStatusCode
    */
    public function getProvisionStatusCode()
    {
        if (array_key_exists("provisionStatusCode", $this->_propDict)) {
            return $this->_propDict["provisionStatusCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provisionStatusCode
    * Additional information about why schedule provisioning failed.
    *
    * @param string $val The provisionStatusCode
    *
    * @return Schedule
    */
    public function setProvisionStatusCode($val)
    {
        $this->_propDict["provisionStatusCode"] = $val;
        return $this;
    }

    /**
    * Gets the swapShiftsRequestsEnabled
    * Indicates whether swap shifts requests are enabled for the schedule.
    *
    * @return bool|null The swapShiftsRequestsEnabled
    */
    public function getSwapShiftsRequestsEnabled()
    {
        if (array_key_exists("swapShiftsRequestsEnabled", $this->_propDict)) {
            return $this->_propDict["swapShiftsRequestsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the swapShiftsRequestsEnabled
    * Indicates whether swap shifts requests are enabled for the schedule.
    *
    * @param bool $val The swapShiftsRequestsEnabled
    *
    * @return Schedule
    */
    public function setSwapShiftsRequestsEnabled($val)
    {
        $this->_propDict["swapShiftsRequestsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the timeClockEnabled
    * Indicates whether time clock is enabled for the schedule.
    *
    * @return bool|null The timeClockEnabled
    */
    public function getTimeClockEnabled()
    {
        if (array_key_exists("timeClockEnabled", $this->_propDict)) {
            return $this->_propDict["timeClockEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeClockEnabled
    * Indicates whether time clock is enabled for the schedule.
    *
    * @param bool $val The timeClockEnabled
    *
    * @return Schedule
    */
    public function setTimeClockEnabled($val)
    {
        $this->_propDict["timeClockEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the timeOffRequestsEnabled
    * Indicates whether time off requests are enabled for the schedule.
    *
    * @return bool|null The timeOffRequestsEnabled
    */
    public function getTimeOffRequestsEnabled()
    {
        if (array_key_exists("timeOffRequestsEnabled", $this->_propDict)) {
            return $this->_propDict["timeOffRequestsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeOffRequestsEnabled
    * Indicates whether time off requests are enabled for the schedule.
    *
    * @param bool $val The timeOffRequestsEnabled
    *
    * @return Schedule
    */
    public function setTimeOffRequestsEnabled($val)
    {
        $this->_propDict["timeOffRequestsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the timeZone
    * Indicates the time zone of the schedule team using tz database format. Required.
    *
    * @return string|null The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    * Indicates the time zone of the schedule team using tz database format. Required.
    *
    * @param string $val The timeZone
    *
    * @return Schedule
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }

    /**
    * Gets the workforceIntegrationIds
    *
    * @return string|null The workforceIntegrationIds
    */
    public function getWorkforceIntegrationIds()
    {
        if (array_key_exists("workforceIntegrationIds", $this->_propDict)) {
            return $this->_propDict["workforceIntegrationIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the workforceIntegrationIds
    *
    * @param string $val The workforceIntegrationIds
    *
    * @return Schedule
    */
    public function setWorkforceIntegrationIds($val)
    {
        $this->_propDict["workforceIntegrationIds"] = $val;
        return $this;
    }


     /**
     * Gets the offerShiftRequests
     *
     * @return OfferShiftRequest[]|null The offerShiftRequests
     */
    public function getOfferShiftRequests()
    {
        if (array_key_exists('offerShiftRequests', $this->_propDict) && !is_null($this->_propDict['offerShiftRequests'])) {
            $offerShiftRequests = [];
            if (count($this->_propDict['offerShiftRequests']) > 0 && is_a($this->_propDict['offerShiftRequests'][0], 'OfferShiftRequest')) {
                return $this->_propDict['offerShiftRequests'];
            }
            foreach ($this->_propDict['offerShiftRequests'] as $singleValue) {
                $offerShiftRequests []= new OfferShiftRequest($singleValue);
            }
            $this->_propDict['offerShiftRequests'] = $offerShiftRequests;
            return $this->_propDict['offerShiftRequests'];
        }
        return null;
    }

    /**
    * Sets the offerShiftRequests
    *
    * @param OfferShiftRequest[] $val The offerShiftRequests
    *
    * @return Schedule
    */
    public function setOfferShiftRequests($val)
    {
        $this->_propDict["offerShiftRequests"] = $val;
        return $this;
    }


     /**
     * Gets the openShiftChangeRequests
     *
     * @return OpenShiftChangeRequest[]|null The openShiftChangeRequests
     */
    public function getOpenShiftChangeRequests()
    {
        if (array_key_exists('openShiftChangeRequests', $this->_propDict) && !is_null($this->_propDict['openShiftChangeRequests'])) {
            $openShiftChangeRequests = [];
            if (count($this->_propDict['openShiftChangeRequests']) > 0 && is_a($this->_propDict['openShiftChangeRequests'][0], 'OpenShiftChangeRequest')) {
                return $this->_propDict['openShiftChangeRequests'];
            }
            foreach ($this->_propDict['openShiftChangeRequests'] as $singleValue) {
                $openShiftChangeRequests []= new OpenShiftChangeRequest($singleValue);
            }
            $this->_propDict['openShiftChangeRequests'] = $openShiftChangeRequests;
            return $this->_propDict['openShiftChangeRequests'];
        }
        return null;
    }

    /**
    * Sets the openShiftChangeRequests
    *
    * @param OpenShiftChangeRequest[] $val The openShiftChangeRequests
    *
    * @return Schedule
    */
    public function setOpenShiftChangeRequests($val)
    {
        $this->_propDict["openShiftChangeRequests"] = $val;
        return $this;
    }


     /**
     * Gets the openShifts
     *
     * @return OpenShift[]|null The openShifts
     */
    public function getOpenShifts()
    {
        if (array_key_exists('openShifts', $this->_propDict) && !is_null($this->_propDict['openShifts'])) {
            $openShifts = [];
            if (count($this->_propDict['openShifts']) > 0 && is_a($this->_propDict['openShifts'][0], 'OpenShift')) {
                return $this->_propDict['openShifts'];
            }
            foreach ($this->_propDict['openShifts'] as $singleValue) {
                $openShifts []= new OpenShift($singleValue);
            }
            $this->_propDict['openShifts'] = $openShifts;
            return $this->_propDict['openShifts'];
        }
        return null;
    }

    /**
    * Sets the openShifts
    *
    * @param OpenShift[] $val The openShifts
    *
    * @return Schedule
    */
    public function setOpenShifts($val)
    {
        $this->_propDict["openShifts"] = $val;
        return $this;
    }


     /**
     * Gets the schedulingGroups
    * The logical grouping of users in the schedule (usually by role).
     *
     * @return SchedulingGroup[]|null The schedulingGroups
     */
    public function getSchedulingGroups()
    {
        if (array_key_exists('schedulingGroups', $this->_propDict) && !is_null($this->_propDict['schedulingGroups'])) {
            $schedulingGroups = [];
            if (count($this->_propDict['schedulingGroups']) > 0 && is_a($this->_propDict['schedulingGroups'][0], 'SchedulingGroup')) {
                return $this->_propDict['schedulingGroups'];
            }
            foreach ($this->_propDict['schedulingGroups'] as $singleValue) {
                $schedulingGroups []= new SchedulingGroup($singleValue);
            }
            $this->_propDict['schedulingGroups'] = $schedulingGroups;
            return $this->_propDict['schedulingGroups'];
        }
        return null;
    }

    /**
    * Sets the schedulingGroups
    * The logical grouping of users in the schedule (usually by role).
    *
    * @param SchedulingGroup[] $val The schedulingGroups
    *
    * @return Schedule
    */
    public function setSchedulingGroups($val)
    {
        $this->_propDict["schedulingGroups"] = $val;
        return $this;
    }


     /**
     * Gets the shifts
    * The shifts in the schedule.
     *
     * @return Shift[]|null The shifts
     */
    public function getShifts()
    {
        if (array_key_exists('shifts', $this->_propDict) && !is_null($this->_propDict['shifts'])) {
            $shifts = [];
            if (count($this->_propDict['shifts']) > 0 && is_a($this->_propDict['shifts'][0], 'Shift')) {
                return $this->_propDict['shifts'];
            }
            foreach ($this->_propDict['shifts'] as $singleValue) {
                $shifts []= new Shift($singleValue);
            }
            $this->_propDict['shifts'] = $shifts;
            return $this->_propDict['shifts'];
        }
        return null;
    }

    /**
    * Sets the shifts
    * The shifts in the schedule.
    *
    * @param Shift[] $val The shifts
    *
    * @return Schedule
    */
    public function setShifts($val)
    {
        $this->_propDict["shifts"] = $val;
        return $this;
    }


     /**
     * Gets the swapShiftsChangeRequests
     *
     * @return SwapShiftsChangeRequest[]|null The swapShiftsChangeRequests
     */
    public function getSwapShiftsChangeRequests()
    {
        if (array_key_exists('swapShiftsChangeRequests', $this->_propDict) && !is_null($this->_propDict['swapShiftsChangeRequests'])) {
            $swapShiftsChangeRequests = [];
            if (count($this->_propDict['swapShiftsChangeRequests']) > 0 && is_a($this->_propDict['swapShiftsChangeRequests'][0], 'SwapShiftsChangeRequest')) {
                return $this->_propDict['swapShiftsChangeRequests'];
            }
            foreach ($this->_propDict['swapShiftsChangeRequests'] as $singleValue) {
                $swapShiftsChangeRequests []= new SwapShiftsChangeRequest($singleValue);
            }
            $this->_propDict['swapShiftsChangeRequests'] = $swapShiftsChangeRequests;
            return $this->_propDict['swapShiftsChangeRequests'];
        }
        return null;
    }

    /**
    * Sets the swapShiftsChangeRequests
    *
    * @param SwapShiftsChangeRequest[] $val The swapShiftsChangeRequests
    *
    * @return Schedule
    */
    public function setSwapShiftsChangeRequests($val)
    {
        $this->_propDict["swapShiftsChangeRequests"] = $val;
        return $this;
    }


     /**
     * Gets the timeOffReasons
    * The set of reasons for a time off in the schedule.
     *
     * @return TimeOffReason[]|null The timeOffReasons
     */
    public function getTimeOffReasons()
    {
        if (array_key_exists('timeOffReasons', $this->_propDict) && !is_null($this->_propDict['timeOffReasons'])) {
            $timeOffReasons = [];
            if (count($this->_propDict['timeOffReasons']) > 0 && is_a($this->_propDict['timeOffReasons'][0], 'TimeOffReason')) {
                return $this->_propDict['timeOffReasons'];
            }
            foreach ($this->_propDict['timeOffReasons'] as $singleValue) {
                $timeOffReasons []= new TimeOffReason($singleValue);
            }
            $this->_propDict['timeOffReasons'] = $timeOffReasons;
            return $this->_propDict['timeOffReasons'];
        }
        return null;
    }

    /**
    * Sets the timeOffReasons
    * The set of reasons for a time off in the schedule.
    *
    * @param TimeOffReason[] $val The timeOffReasons
    *
    * @return Schedule
    */
    public function setTimeOffReasons($val)
    {
        $this->_propDict["timeOffReasons"] = $val;
        return $this;
    }


     /**
     * Gets the timeOffRequests
     *
     * @return TimeOffRequest[]|null The timeOffRequests
     */
    public function getTimeOffRequests()
    {
        if (array_key_exists('timeOffRequests', $this->_propDict) && !is_null($this->_propDict['timeOffRequests'])) {
            $timeOffRequests = [];
            if (count($this->_propDict['timeOffRequests']) > 0 && is_a($this->_propDict['timeOffRequests'][0], 'TimeOffRequest')) {
                return $this->_propDict['timeOffRequests'];
            }
            foreach ($this->_propDict['timeOffRequests'] as $singleValue) {
                $timeOffRequests []= new TimeOffRequest($singleValue);
            }
            $this->_propDict['timeOffRequests'] = $timeOffRequests;
            return $this->_propDict['timeOffRequests'];
        }
        return null;
    }

    /**
    * Sets the timeOffRequests
    *
    * @param TimeOffRequest[] $val The timeOffRequests
    *
    * @return Schedule
    */
    public function setTimeOffRequests($val)
    {
        $this->_propDict["timeOffRequests"] = $val;
        return $this;
    }


     /**
     * Gets the timesOff
    * The instances of times off in the schedule.
     *
     * @return TimeOff[]|null The timesOff
     */
    public function getTimesOff()
    {
        if (array_key_exists('timesOff', $this->_propDict) && !is_null($this->_propDict['timesOff'])) {
            $timesOff = [];
            if (count($this->_propDict['timesOff']) > 0 && is_a($this->_propDict['timesOff'][0], 'TimeOff')) {
                return $this->_propDict['timesOff'];
            }
            foreach ($this->_propDict['timesOff'] as $singleValue) {
                $timesOff []= new TimeOff($singleValue);
            }
            $this->_propDict['timesOff'] = $timesOff;
            return $this->_propDict['timesOff'];
        }
        return null;
    }

    /**
    * Sets the timesOff
    * The instances of times off in the schedule.
    *
    * @param TimeOff[] $val The timesOff
    *
    * @return Schedule
    */
    public function setTimesOff($val)
    {
        $this->_propDict["timesOff"] = $val;
        return $this;
    }

}
