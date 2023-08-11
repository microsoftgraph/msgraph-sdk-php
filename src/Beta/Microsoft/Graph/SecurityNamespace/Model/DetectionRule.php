<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectionRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* DetectionRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DetectionRule extends ProtectionRule
{
    /**
    * Gets the detectionAction
    *
    * @return DetectionAction|null The detectionAction
    */
    public function getDetectionAction()
    {
        if (array_key_exists("detectionAction", $this->_propDict)) {
            if (is_a($this->_propDict["detectionAction"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DetectionAction") || is_null($this->_propDict["detectionAction"])) {
                return $this->_propDict["detectionAction"];
            } else {
                $this->_propDict["detectionAction"] = new DetectionAction($this->_propDict["detectionAction"]);
                return $this->_propDict["detectionAction"];
            }
        }
        return null;
    }

    /**
    * Sets the detectionAction
    *
    * @param DetectionAction $val The detectionAction
    *
    * @return DetectionRule
    */
    public function setDetectionAction($val)
    {
        $this->_propDict["detectionAction"] = $val;
        return $this;
    }

    /**
    * Gets the lastRunDetails
    *
    * @return RunDetails|null The lastRunDetails
    */
    public function getLastRunDetails()
    {
        if (array_key_exists("lastRunDetails", $this->_propDict)) {
            if (is_a($this->_propDict["lastRunDetails"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\RunDetails") || is_null($this->_propDict["lastRunDetails"])) {
                return $this->_propDict["lastRunDetails"];
            } else {
                $this->_propDict["lastRunDetails"] = new RunDetails($this->_propDict["lastRunDetails"]);
                return $this->_propDict["lastRunDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRunDetails
    *
    * @param RunDetails $val The lastRunDetails
    *
    * @return DetectionRule
    */
    public function setLastRunDetails($val)
    {
        $this->_propDict["lastRunDetails"] = $val;
        return $this;
    }

    /**
    * Gets the queryCondition
    *
    * @return QueryCondition|null The queryCondition
    */
    public function getQueryCondition()
    {
        if (array_key_exists("queryCondition", $this->_propDict)) {
            if (is_a($this->_propDict["queryCondition"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\QueryCondition") || is_null($this->_propDict["queryCondition"])) {
                return $this->_propDict["queryCondition"];
            } else {
                $this->_propDict["queryCondition"] = new QueryCondition($this->_propDict["queryCondition"]);
                return $this->_propDict["queryCondition"];
            }
        }
        return null;
    }

    /**
    * Sets the queryCondition
    *
    * @param QueryCondition $val The queryCondition
    *
    * @return DetectionRule
    */
    public function setQueryCondition($val)
    {
        $this->_propDict["queryCondition"] = $val;
        return $this;
    }

    /**
    * Gets the schedule
    *
    * @return RuleSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\RuleSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new RuleSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    *
    * @param RuleSchedule $val The schedule
    *
    * @return DetectionRule
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }

}
