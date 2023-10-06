<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomTrainingSetting File
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
* CustomTrainingSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomTrainingSetting extends TrainingSetting
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.customTrainingSetting");
    }


    /**
    * Gets the assignedTo
    * A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue.
    *
    * @return TrainingAssignedTo|null The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            if (is_a($this->_propDict["assignedTo"], "\Beta\Microsoft\Graph\Model\TrainingAssignedTo") || is_null($this->_propDict["assignedTo"])) {
                return $this->_propDict["assignedTo"];
            } else {
                $this->_propDict["assignedTo"] = new TrainingAssignedTo($this->_propDict["assignedTo"]);
                return $this->_propDict["assignedTo"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedTo
    * A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue.
    *
    * @param TrainingAssignedTo $val The value to assign to the assignedTo
    *
    * @return CustomTrainingSetting The CustomTrainingSetting
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
         return $this;
    }
    /**
    * Gets the description
    * The description of the custom training setting.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of the custom training setting.
    *
    * @param string $val The value of the description
    *
    * @return CustomTrainingSetting
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name of the custom training setting.
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
    * The display name of the custom training setting.
    *
    * @param string $val The value of the displayName
    *
    * @return CustomTrainingSetting
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the durationInMinutes
    * Training duration.
    *
    * @return int|null The durationInMinutes
    */
    public function getDurationInMinutes()
    {
        if (array_key_exists("durationInMinutes", $this->_propDict)) {
            return $this->_propDict["durationInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationInMinutes
    * Training duration.
    *
    * @param int $val The value of the durationInMinutes
    *
    * @return CustomTrainingSetting
    */
    public function setDurationInMinutes($val)
    {
        $this->_propDict["durationInMinutes"] = $val;
        return $this;
    }
    /**
    * Gets the url
    * The training URL.
    *
    * @return string|null The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * The training URL.
    *
    * @param string $val The value of the url
    *
    * @return CustomTrainingSetting
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
}
