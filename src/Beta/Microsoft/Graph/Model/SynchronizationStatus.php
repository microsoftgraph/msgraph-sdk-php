<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* SynchronizationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationStatus extends Entity
{

    /**
    * Gets the code
    *
    * @return SynchronizationStatusCode The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            if (is_a($this->_propDict["code"], "Beta\Microsoft\Graph\Model\SynchronizationStatusCode")) {
                return $this->_propDict["code"];
            } else {
                $this->_propDict["code"] = new SynchronizationStatusCode($this->_propDict["code"]);
                return $this->_propDict["code"];
            }
        }
        return null;
    }

    /**
    * Sets the code
    *
    * @param SynchronizationStatusCode $val The value to assign to the code
    *
    * @return SynchronizationStatus The SynchronizationStatus
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
         return $this;
    }
    /**
    * Gets the countSuccessiveCompleteFailures
    *
    * @return int The countSuccessiveCompleteFailures
    */
    public function getCountSuccessiveCompleteFailures()
    {
        if (array_key_exists("countSuccessiveCompleteFailures", $this->_propDict)) {
            return $this->_propDict["countSuccessiveCompleteFailures"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countSuccessiveCompleteFailures
    *
    * @param int $val The value of the countSuccessiveCompleteFailures
    *
    * @return SynchronizationStatus
    */
    public function setCountSuccessiveCompleteFailures($val)
    {
        $this->_propDict["countSuccessiveCompleteFailures"] = $val;
        return $this;
    }
    /**
    * Gets the escrowsPruned
    *
    * @return bool The escrowsPruned
    */
    public function getEscrowsPruned()
    {
        if (array_key_exists("escrowsPruned", $this->_propDict)) {
            return $this->_propDict["escrowsPruned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the escrowsPruned
    *
    * @param bool $val The value of the escrowsPruned
    *
    * @return SynchronizationStatus
    */
    public function setEscrowsPruned($val)
    {
        $this->_propDict["escrowsPruned"] = $val;
        return $this;
    }

    /**
    * Gets the lastExecution
    *
    * @return SynchronizationTaskExecution The lastExecution
    */
    public function getLastExecution()
    {
        if (array_key_exists("lastExecution", $this->_propDict)) {
            if (is_a($this->_propDict["lastExecution"], "Beta\Microsoft\Graph\Model\SynchronizationTaskExecution")) {
                return $this->_propDict["lastExecution"];
            } else {
                $this->_propDict["lastExecution"] = new SynchronizationTaskExecution($this->_propDict["lastExecution"]);
                return $this->_propDict["lastExecution"];
            }
        }
        return null;
    }

    /**
    * Sets the lastExecution
    *
    * @param SynchronizationTaskExecution $val The value to assign to the lastExecution
    *
    * @return SynchronizationStatus The SynchronizationStatus
    */
    public function setLastExecution($val)
    {
        $this->_propDict["lastExecution"] = $val;
         return $this;
    }

    /**
    * Gets the lastSuccessfulExecution
    *
    * @return SynchronizationTaskExecution The lastSuccessfulExecution
    */
    public function getLastSuccessfulExecution()
    {
        if (array_key_exists("lastSuccessfulExecution", $this->_propDict)) {
            if (is_a($this->_propDict["lastSuccessfulExecution"], "Beta\Microsoft\Graph\Model\SynchronizationTaskExecution")) {
                return $this->_propDict["lastSuccessfulExecution"];
            } else {
                $this->_propDict["lastSuccessfulExecution"] = new SynchronizationTaskExecution($this->_propDict["lastSuccessfulExecution"]);
                return $this->_propDict["lastSuccessfulExecution"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSuccessfulExecution
    *
    * @param SynchronizationTaskExecution $val The value to assign to the lastSuccessfulExecution
    *
    * @return SynchronizationStatus The SynchronizationStatus
    */
    public function setLastSuccessfulExecution($val)
    {
        $this->_propDict["lastSuccessfulExecution"] = $val;
         return $this;
    }

    /**
    * Gets the lastSuccessfulExecutionWithExports
    *
    * @return SynchronizationTaskExecution The lastSuccessfulExecutionWithExports
    */
    public function getLastSuccessfulExecutionWithExports()
    {
        if (array_key_exists("lastSuccessfulExecutionWithExports", $this->_propDict)) {
            if (is_a($this->_propDict["lastSuccessfulExecutionWithExports"], "Beta\Microsoft\Graph\Model\SynchronizationTaskExecution")) {
                return $this->_propDict["lastSuccessfulExecutionWithExports"];
            } else {
                $this->_propDict["lastSuccessfulExecutionWithExports"] = new SynchronizationTaskExecution($this->_propDict["lastSuccessfulExecutionWithExports"]);
                return $this->_propDict["lastSuccessfulExecutionWithExports"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSuccessfulExecutionWithExports
    *
    * @param SynchronizationTaskExecution $val The value to assign to the lastSuccessfulExecutionWithExports
    *
    * @return SynchronizationStatus The SynchronizationStatus
    */
    public function setLastSuccessfulExecutionWithExports($val)
    {
        $this->_propDict["lastSuccessfulExecutionWithExports"] = $val;
         return $this;
    }

    /**
    * Gets the progress
    *
    * @return SynchronizationProgress The progress
    */
    public function getProgress()
    {
        if (array_key_exists("progress", $this->_propDict)) {
            if (is_a($this->_propDict["progress"], "Beta\Microsoft\Graph\Model\SynchronizationProgress")) {
                return $this->_propDict["progress"];
            } else {
                $this->_propDict["progress"] = new SynchronizationProgress($this->_propDict["progress"]);
                return $this->_propDict["progress"];
            }
        }
        return null;
    }

    /**
    * Sets the progress
    *
    * @param SynchronizationProgress $val The value to assign to the progress
    *
    * @return SynchronizationStatus The SynchronizationStatus
    */
    public function setProgress($val)
    {
        $this->_propDict["progress"] = $val;
         return $this;
    }

    /**
    * Gets the quarantine
    *
    * @return SynchronizationQuarantine The quarantine
    */
    public function getQuarantine()
    {
        if (array_key_exists("quarantine", $this->_propDict)) {
            if (is_a($this->_propDict["quarantine"], "Beta\Microsoft\Graph\Model\SynchronizationQuarantine")) {
                return $this->_propDict["quarantine"];
            } else {
                $this->_propDict["quarantine"] = new SynchronizationQuarantine($this->_propDict["quarantine"]);
                return $this->_propDict["quarantine"];
            }
        }
        return null;
    }

    /**
    * Sets the quarantine
    *
    * @param SynchronizationQuarantine $val The value to assign to the quarantine
    *
    * @return SynchronizationStatus The SynchronizationStatus
    */
    public function setQuarantine($val)
    {
        $this->_propDict["quarantine"] = $val;
         return $this;
    }

    /**
    * Gets the steadyStateFirstAchievedTime
    *
    * @return \DateTime The steadyStateFirstAchievedTime
    */
    public function getSteadyStateFirstAchievedTime()
    {
        if (array_key_exists("steadyStateFirstAchievedTime", $this->_propDict)) {
            if (is_a($this->_propDict["steadyStateFirstAchievedTime"], "\DateTime")) {
                return $this->_propDict["steadyStateFirstAchievedTime"];
            } else {
                $this->_propDict["steadyStateFirstAchievedTime"] = new \DateTime($this->_propDict["steadyStateFirstAchievedTime"]);
                return $this->_propDict["steadyStateFirstAchievedTime"];
            }
        }
        return null;
    }

    /**
    * Sets the steadyStateFirstAchievedTime
    *
    * @param \DateTime $val The value to assign to the steadyStateFirstAchievedTime
    *
    * @return SynchronizationStatus The SynchronizationStatus
    */
    public function setSteadyStateFirstAchievedTime($val)
    {
        $this->_propDict["steadyStateFirstAchievedTime"] = $val;
         return $this;
    }

    /**
    * Gets the steadyStateLastAchievedTime
    *
    * @return \DateTime The steadyStateLastAchievedTime
    */
    public function getSteadyStateLastAchievedTime()
    {
        if (array_key_exists("steadyStateLastAchievedTime", $this->_propDict)) {
            if (is_a($this->_propDict["steadyStateLastAchievedTime"], "\DateTime")) {
                return $this->_propDict["steadyStateLastAchievedTime"];
            } else {
                $this->_propDict["steadyStateLastAchievedTime"] = new \DateTime($this->_propDict["steadyStateLastAchievedTime"]);
                return $this->_propDict["steadyStateLastAchievedTime"];
            }
        }
        return null;
    }

    /**
    * Sets the steadyStateLastAchievedTime
    *
    * @param \DateTime $val The value to assign to the steadyStateLastAchievedTime
    *
    * @return SynchronizationStatus The SynchronizationStatus
    */
    public function setSteadyStateLastAchievedTime($val)
    {
        $this->_propDict["steadyStateLastAchievedTime"] = $val;
         return $this;
    }

    /**
    * Gets the synchronizedEntryCountByType
    *
    * @return StringKeyLongValuePair The synchronizedEntryCountByType
    */
    public function getSynchronizedEntryCountByType()
    {
        if (array_key_exists("synchronizedEntryCountByType", $this->_propDict)) {
            if (is_a($this->_propDict["synchronizedEntryCountByType"], "Beta\Microsoft\Graph\Model\StringKeyLongValuePair")) {
                return $this->_propDict["synchronizedEntryCountByType"];
            } else {
                $this->_propDict["synchronizedEntryCountByType"] = new StringKeyLongValuePair($this->_propDict["synchronizedEntryCountByType"]);
                return $this->_propDict["synchronizedEntryCountByType"];
            }
        }
        return null;
    }

    /**
    * Sets the synchronizedEntryCountByType
    *
    * @param StringKeyLongValuePair $val The value to assign to the synchronizedEntryCountByType
    *
    * @return SynchronizationStatus The SynchronizationStatus
    */
    public function setSynchronizedEntryCountByType($val)
    {
        $this->_propDict["synchronizedEntryCountByType"] = $val;
         return $this;
    }
    /**
    * Gets the troubleshootingUrl
    *
    * @return string The troubleshootingUrl
    */
    public function getTroubleshootingUrl()
    {
        if (array_key_exists("troubleshootingUrl", $this->_propDict)) {
            return $this->_propDict["troubleshootingUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the troubleshootingUrl
    *
    * @param string $val The value of the troubleshootingUrl
    *
    * @return SynchronizationStatus
    */
    public function setTroubleshootingUrl($val)
    {
        $this->_propDict["troubleshootingUrl"] = $val;
        return $this;
    }
}
