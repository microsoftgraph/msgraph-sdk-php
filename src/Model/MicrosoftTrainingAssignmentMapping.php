<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTrainingAssignmentMapping File
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
* MicrosoftTrainingAssignmentMapping class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTrainingAssignmentMapping extends TrainingSetting
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.microsoftTrainingAssignmentMapping");
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
            if (is_a($this->_propDict["assignedTo"], "\Microsoft\Graph\Model\TrainingAssignedTo") || is_null($this->_propDict["assignedTo"])) {
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
    * @return MicrosoftTrainingAssignmentMapping The MicrosoftTrainingAssignmentMapping
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
         return $this;
    }

    /**
    * Gets the training
    *
    * @return Training|null The training
    */
    public function getTraining()
    {
        if (array_key_exists("training", $this->_propDict)) {
            if (is_a($this->_propDict["training"], "\Microsoft\Graph\Model\Training") || is_null($this->_propDict["training"])) {
                return $this->_propDict["training"];
            } else {
                $this->_propDict["training"] = new Training($this->_propDict["training"]);
                return $this->_propDict["training"];
            }
        }
        return null;
    }

    /**
    * Sets the training
    *
    * @param Training $val The value to assign to the training
    *
    * @return MicrosoftTrainingAssignmentMapping The MicrosoftTrainingAssignmentMapping
    */
    public function setTraining($val)
    {
        $this->_propDict["training"] = $val;
         return $this;
    }
}
