<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserTrainingEventInfo File
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
* UserTrainingEventInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserTrainingEventInfo extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return UserTrainingEventInfo
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the latestTrainingStatus
    *
    * @return TrainingStatus|null The latestTrainingStatus
    */
    public function getLatestTrainingStatus()
    {
        if (array_key_exists("latestTrainingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["latestTrainingStatus"], "\Beta\Microsoft\Graph\Model\TrainingStatus") || is_null($this->_propDict["latestTrainingStatus"])) {
                return $this->_propDict["latestTrainingStatus"];
            } else {
                $this->_propDict["latestTrainingStatus"] = new TrainingStatus($this->_propDict["latestTrainingStatus"]);
                return $this->_propDict["latestTrainingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the latestTrainingStatus
    *
    * @param TrainingStatus $val The value to assign to the latestTrainingStatus
    *
    * @return UserTrainingEventInfo The UserTrainingEventInfo
    */
    public function setLatestTrainingStatus($val)
    {
        $this->_propDict["latestTrainingStatus"] = $val;
         return $this;
    }

    /**
    * Gets the trainingAssignedProperties
    *
    * @return UserTrainingContentEventInfo|null The trainingAssignedProperties
    */
    public function getTrainingAssignedProperties()
    {
        if (array_key_exists("trainingAssignedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["trainingAssignedProperties"], "\Beta\Microsoft\Graph\Model\UserTrainingContentEventInfo") || is_null($this->_propDict["trainingAssignedProperties"])) {
                return $this->_propDict["trainingAssignedProperties"];
            } else {
                $this->_propDict["trainingAssignedProperties"] = new UserTrainingContentEventInfo($this->_propDict["trainingAssignedProperties"]);
                return $this->_propDict["trainingAssignedProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingAssignedProperties
    *
    * @param UserTrainingContentEventInfo $val The value to assign to the trainingAssignedProperties
    *
    * @return UserTrainingEventInfo The UserTrainingEventInfo
    */
    public function setTrainingAssignedProperties($val)
    {
        $this->_propDict["trainingAssignedProperties"] = $val;
         return $this;
    }

    /**
    * Gets the trainingCompletedProperties
    *
    * @return UserTrainingContentEventInfo|null The trainingCompletedProperties
    */
    public function getTrainingCompletedProperties()
    {
        if (array_key_exists("trainingCompletedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["trainingCompletedProperties"], "\Beta\Microsoft\Graph\Model\UserTrainingContentEventInfo") || is_null($this->_propDict["trainingCompletedProperties"])) {
                return $this->_propDict["trainingCompletedProperties"];
            } else {
                $this->_propDict["trainingCompletedProperties"] = new UserTrainingContentEventInfo($this->_propDict["trainingCompletedProperties"]);
                return $this->_propDict["trainingCompletedProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingCompletedProperties
    *
    * @param UserTrainingContentEventInfo $val The value to assign to the trainingCompletedProperties
    *
    * @return UserTrainingEventInfo The UserTrainingEventInfo
    */
    public function setTrainingCompletedProperties($val)
    {
        $this->_propDict["trainingCompletedProperties"] = $val;
         return $this;
    }

    /**
    * Gets the trainingUpdatedProperties
    *
    * @return UserTrainingContentEventInfo|null The trainingUpdatedProperties
    */
    public function getTrainingUpdatedProperties()
    {
        if (array_key_exists("trainingUpdatedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["trainingUpdatedProperties"], "\Beta\Microsoft\Graph\Model\UserTrainingContentEventInfo") || is_null($this->_propDict["trainingUpdatedProperties"])) {
                return $this->_propDict["trainingUpdatedProperties"];
            } else {
                $this->_propDict["trainingUpdatedProperties"] = new UserTrainingContentEventInfo($this->_propDict["trainingUpdatedProperties"]);
                return $this->_propDict["trainingUpdatedProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingUpdatedProperties
    *
    * @param UserTrainingContentEventInfo $val The value to assign to the trainingUpdatedProperties
    *
    * @return UserTrainingEventInfo The UserTrainingEventInfo
    */
    public function setTrainingUpdatedProperties($val)
    {
        $this->_propDict["trainingUpdatedProperties"] = $val;
         return $this;
    }
}
