<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MonitoringRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* MonitoringRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MonitoringRule extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the action
    * The action triggered when the threshold for the given signal is reached. Possible values are: alertError, pauseDeployment, offerFallback, unknownFutureValue. The offerFallback member is only supported on feature update deployments of Windows 11 and must be paired with the ineligible signal. The fallback version offered is the version 22H2 of Windows 10.
    *
    * @return MonitoringAction|null The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\MonitoringAction") || is_null($this->_propDict["action"])) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new MonitoringAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * The action triggered when the threshold for the given signal is reached. Possible values are: alertError, pauseDeployment, offerFallback, unknownFutureValue. The offerFallback member is only supported on feature update deployments of Windows 11 and must be paired with the ineligible signal. The fallback version offered is the version 22H2 of Windows 10.
    *
    * @param MonitoringAction $val The value to assign to the action
    *
    * @return MonitoringRule The MonitoringRule
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }

    /**
    * Gets the signal
    * The signal to monitor. Possible values are: rollback, ineligible, unknownFutureValue. The ineligible member is only supported on feature update deployments of Windows 11 and must be paired with the offerFallback action.
    *
    * @return MonitoringSignal|null The signal
    */
    public function getSignal()
    {
        if (array_key_exists("signal", $this->_propDict)) {
            if (is_a($this->_propDict["signal"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\MonitoringSignal") || is_null($this->_propDict["signal"])) {
                return $this->_propDict["signal"];
            } else {
                $this->_propDict["signal"] = new MonitoringSignal($this->_propDict["signal"]);
                return $this->_propDict["signal"];
            }
        }
        return null;
    }

    /**
    * Sets the signal
    * The signal to monitor. Possible values are: rollback, ineligible, unknownFutureValue. The ineligible member is only supported on feature update deployments of Windows 11 and must be paired with the offerFallback action.
    *
    * @param MonitoringSignal $val The value to assign to the signal
    *
    * @return MonitoringRule The MonitoringRule
    */
    public function setSignal($val)
    {
        $this->_propDict["signal"] = $val;
         return $this;
    }
    /**
    * Gets the threshold
    * The threshold for a signal at which to trigger the action. An integer from 1 to 100 (inclusive). This value is ignored when the signal is ineligible and the action is offerFallback.
    *
    * @return int|null The threshold
    */
    public function getThreshold()
    {
        if (array_key_exists("threshold", $this->_propDict)) {
            return $this->_propDict["threshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threshold
    * The threshold for a signal at which to trigger the action. An integer from 1 to 100 (inclusive). This value is ignored when the signal is ineligible and the action is offerFallback.
    *
    * @param int $val The value of the threshold
    *
    * @return MonitoringRule
    */
    public function setThreshold($val)
    {
        $this->_propDict["threshold"] = $val;
        return $this;
    }
}
