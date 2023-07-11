<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentRequestCallbackData File
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
* AccessPackageAssignmentRequestCallbackData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentRequestCallbackData extends CustomExtensionData
{
    /**
    * Gets the customExtensionStageInstanceDetail
    *
    * @return string|null The customExtensionStageInstanceDetail
    */
    public function getCustomExtensionStageInstanceDetail()
    {
        if (array_key_exists("customExtensionStageInstanceDetail", $this->_propDict)) {
            return $this->_propDict["customExtensionStageInstanceDetail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customExtensionStageInstanceDetail
    *
    * @param string $val The value of the customExtensionStageInstanceDetail
    *
    * @return AccessPackageAssignmentRequestCallbackData
    */
    public function setCustomExtensionStageInstanceDetail($val)
    {
        $this->_propDict["customExtensionStageInstanceDetail"] = $val;
        return $this;
    }
    /**
    * Gets the customExtensionStageInstanceId
    *
    * @return string|null The customExtensionStageInstanceId
    */
    public function getCustomExtensionStageInstanceId()
    {
        if (array_key_exists("customExtensionStageInstanceId", $this->_propDict)) {
            return $this->_propDict["customExtensionStageInstanceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customExtensionStageInstanceId
    *
    * @param string $val The value of the customExtensionStageInstanceId
    *
    * @return AccessPackageAssignmentRequestCallbackData
    */
    public function setCustomExtensionStageInstanceId($val)
    {
        $this->_propDict["customExtensionStageInstanceId"] = $val;
        return $this;
    }

    /**
    * Gets the stage
    *
    * @return AccessPackageCustomExtensionStage|null The stage
    */
    public function getStage()
    {
        if (array_key_exists("stage", $this->_propDict)) {
            if (is_a($this->_propDict["stage"], "\Microsoft\Graph\Model\AccessPackageCustomExtensionStage") || is_null($this->_propDict["stage"])) {
                return $this->_propDict["stage"];
            } else {
                $this->_propDict["stage"] = new AccessPackageCustomExtensionStage($this->_propDict["stage"]);
                return $this->_propDict["stage"];
            }
        }
        return null;
    }

    /**
    * Sets the stage
    *
    * @param AccessPackageCustomExtensionStage $val The value to assign to the stage
    *
    * @return AccessPackageAssignmentRequestCallbackData The AccessPackageAssignmentRequestCallbackData
    */
    public function setStage($val)
    {
        $this->_propDict["stage"] = $val;
         return $this;
    }
    /**
    * Gets the state
    *
    * @return string|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    *
    * @param string $val The value of the state
    *
    * @return AccessPackageAssignmentRequestCallbackData
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
}
