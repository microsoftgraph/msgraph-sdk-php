<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftCustomTrainingSetting File
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
* MicrosoftCustomTrainingSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftCustomTrainingSetting extends TrainingSetting
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.microsoftCustomTrainingSetting");
    }


    /**
    * Gets the completionDateTime
    * The completion date and time of the training. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The completionDateTime
    */
    public function getCompletionDateTime()
    {
        if (array_key_exists("completionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completionDateTime"], "\DateTime") || is_null($this->_propDict["completionDateTime"])) {
                return $this->_propDict["completionDateTime"];
            } else {
                $this->_propDict["completionDateTime"] = new \DateTime($this->_propDict["completionDateTime"]);
                return $this->_propDict["completionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completionDateTime
    * The completion date and time of the training. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the completionDateTime
    *
    * @return MicrosoftCustomTrainingSetting The MicrosoftCustomTrainingSetting
    */
    public function setCompletionDateTime($val)
    {
        $this->_propDict["completionDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the trainingAssignmentMappings
    * The mapping details of the associated training.
    *
    * @return MicrosoftTrainingAssignmentMapping|null The trainingAssignmentMappings
    */
    public function getTrainingAssignmentMappings()
    {
        if (array_key_exists("trainingAssignmentMappings", $this->_propDict)) {
            if (is_a($this->_propDict["trainingAssignmentMappings"], "\Beta\Microsoft\Graph\Model\MicrosoftTrainingAssignmentMapping") || is_null($this->_propDict["trainingAssignmentMappings"])) {
                return $this->_propDict["trainingAssignmentMappings"];
            } else {
                $this->_propDict["trainingAssignmentMappings"] = new MicrosoftTrainingAssignmentMapping($this->_propDict["trainingAssignmentMappings"]);
                return $this->_propDict["trainingAssignmentMappings"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingAssignmentMappings
    * The mapping details of the associated training.
    *
    * @param MicrosoftTrainingAssignmentMapping $val The value to assign to the trainingAssignmentMappings
    *
    * @return MicrosoftCustomTrainingSetting The MicrosoftCustomTrainingSetting
    */
    public function setTrainingAssignmentMappings($val)
    {
        $this->_propDict["trainingAssignmentMappings"] = $val;
         return $this;
    }

    /**
    * Gets the trainingCompletionDuration
    * The training completion duration that needs to be provided before scheduling the training. Possible values are: week, fortnite, month, unknownFutureValue.
    *
    * @return TrainingCompletionDuration|null The trainingCompletionDuration
    */
    public function getTrainingCompletionDuration()
    {
        if (array_key_exists("trainingCompletionDuration", $this->_propDict)) {
            if (is_a($this->_propDict["trainingCompletionDuration"], "\Beta\Microsoft\Graph\Model\TrainingCompletionDuration") || is_null($this->_propDict["trainingCompletionDuration"])) {
                return $this->_propDict["trainingCompletionDuration"];
            } else {
                $this->_propDict["trainingCompletionDuration"] = new TrainingCompletionDuration($this->_propDict["trainingCompletionDuration"]);
                return $this->_propDict["trainingCompletionDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingCompletionDuration
    * The training completion duration that needs to be provided before scheduling the training. Possible values are: week, fortnite, month, unknownFutureValue.
    *
    * @param TrainingCompletionDuration $val The value to assign to the trainingCompletionDuration
    *
    * @return MicrosoftCustomTrainingSetting The MicrosoftCustomTrainingSetting
    */
    public function setTrainingCompletionDuration($val)
    {
        $this->_propDict["trainingCompletionDuration"] = $val;
         return $this;
    }
}
