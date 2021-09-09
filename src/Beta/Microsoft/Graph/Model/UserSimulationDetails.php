<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSimulationDetails File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* UserSimulationDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSimulationDetails extends Entity
{
    /**
    * Gets the assignedTrainingsCount
    *
    * @return int|null The assignedTrainingsCount
    */
    public function getAssignedTrainingsCount()
    {
        if (array_key_exists("assignedTrainingsCount", $this->_propDict)) {
            return $this->_propDict["assignedTrainingsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedTrainingsCount
    *
    * @param int $val The value of the assignedTrainingsCount
    *
    * @return UserSimulationDetails
    */
    public function setAssignedTrainingsCount($val)
    {
        $this->_propDict["assignedTrainingsCount"] = $val;
        return $this;
    }
    /**
    * Gets the completedTrainingsCount
    *
    * @return int|null The completedTrainingsCount
    */
    public function getCompletedTrainingsCount()
    {
        if (array_key_exists("completedTrainingsCount", $this->_propDict)) {
            return $this->_propDict["completedTrainingsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedTrainingsCount
    *
    * @param int $val The value of the completedTrainingsCount
    *
    * @return UserSimulationDetails
    */
    public function setCompletedTrainingsCount($val)
    {
        $this->_propDict["completedTrainingsCount"] = $val;
        return $this;
    }

    /**
    * Gets the compromisedDateTime
    *
    * @return \DateTime|null The compromisedDateTime
    */
    public function getCompromisedDateTime()
    {
        if (array_key_exists("compromisedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["compromisedDateTime"], "\DateTime") || is_null($this->_propDict["compromisedDateTime"])) {
                return $this->_propDict["compromisedDateTime"];
            } else {
                $this->_propDict["compromisedDateTime"] = new \DateTime($this->_propDict["compromisedDateTime"]);
                return $this->_propDict["compromisedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the compromisedDateTime
    *
    * @param \DateTime $val The value to assign to the compromisedDateTime
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setCompromisedDateTime($val)
    {
        $this->_propDict["compromisedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the inProgressTrainingsCount
    *
    * @return int|null The inProgressTrainingsCount
    */
    public function getInProgressTrainingsCount()
    {
        if (array_key_exists("inProgressTrainingsCount", $this->_propDict)) {
            return $this->_propDict["inProgressTrainingsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inProgressTrainingsCount
    *
    * @param int $val The value of the inProgressTrainingsCount
    *
    * @return UserSimulationDetails
    */
    public function setInProgressTrainingsCount($val)
    {
        $this->_propDict["inProgressTrainingsCount"] = $val;
        return $this;
    }
    /**
    * Gets the isCompromised
    *
    * @return bool|null The isCompromised
    */
    public function getIsCompromised()
    {
        if (array_key_exists("isCompromised", $this->_propDict)) {
            return $this->_propDict["isCompromised"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCompromised
    *
    * @param bool $val The value of the isCompromised
    *
    * @return UserSimulationDetails
    */
    public function setIsCompromised($val)
    {
        $this->_propDict["isCompromised"] = $val;
        return $this;
    }

    /**
    * Gets the reportedPhishDateTime
    *
    * @return \DateTime|null The reportedPhishDateTime
    */
    public function getReportedPhishDateTime()
    {
        if (array_key_exists("reportedPhishDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reportedPhishDateTime"], "\DateTime") || is_null($this->_propDict["reportedPhishDateTime"])) {
                return $this->_propDict["reportedPhishDateTime"];
            } else {
                $this->_propDict["reportedPhishDateTime"] = new \DateTime($this->_propDict["reportedPhishDateTime"]);
                return $this->_propDict["reportedPhishDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reportedPhishDateTime
    *
    * @param \DateTime $val The value to assign to the reportedPhishDateTime
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setReportedPhishDateTime($val)
    {
        $this->_propDict["reportedPhishDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the simulationEvents
    *
    * @return UserSimulationEventInfo|null The simulationEvents
    */
    public function getSimulationEvents()
    {
        if (array_key_exists("simulationEvents", $this->_propDict)) {
            if (is_a($this->_propDict["simulationEvents"], "\Beta\Microsoft\Graph\Model\UserSimulationEventInfo") || is_null($this->_propDict["simulationEvents"])) {
                return $this->_propDict["simulationEvents"];
            } else {
                $this->_propDict["simulationEvents"] = new UserSimulationEventInfo($this->_propDict["simulationEvents"]);
                return $this->_propDict["simulationEvents"];
            }
        }
        return null;
    }

    /**
    * Sets the simulationEvents
    *
    * @param UserSimulationEventInfo $val The value to assign to the simulationEvents
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setSimulationEvents($val)
    {
        $this->_propDict["simulationEvents"] = $val;
         return $this;
    }

    /**
    * Gets the simulationUser
    *
    * @return AttackSimulationUser|null The simulationUser
    */
    public function getSimulationUser()
    {
        if (array_key_exists("simulationUser", $this->_propDict)) {
            if (is_a($this->_propDict["simulationUser"], "\Beta\Microsoft\Graph\Model\AttackSimulationUser") || is_null($this->_propDict["simulationUser"])) {
                return $this->_propDict["simulationUser"];
            } else {
                $this->_propDict["simulationUser"] = new AttackSimulationUser($this->_propDict["simulationUser"]);
                return $this->_propDict["simulationUser"];
            }
        }
        return null;
    }

    /**
    * Sets the simulationUser
    *
    * @param AttackSimulationUser $val The value to assign to the simulationUser
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setSimulationUser($val)
    {
        $this->_propDict["simulationUser"] = $val;
         return $this;
    }

    /**
    * Gets the trainingEvents
    *
    * @return UserTrainingEventInfo|null The trainingEvents
    */
    public function getTrainingEvents()
    {
        if (array_key_exists("trainingEvents", $this->_propDict)) {
            if (is_a($this->_propDict["trainingEvents"], "\Beta\Microsoft\Graph\Model\UserTrainingEventInfo") || is_null($this->_propDict["trainingEvents"])) {
                return $this->_propDict["trainingEvents"];
            } else {
                $this->_propDict["trainingEvents"] = new UserTrainingEventInfo($this->_propDict["trainingEvents"]);
                return $this->_propDict["trainingEvents"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingEvents
    *
    * @param UserTrainingEventInfo $val The value to assign to the trainingEvents
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setTrainingEvents($val)
    {
        $this->_propDict["trainingEvents"] = $val;
         return $this;
    }
}
