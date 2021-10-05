<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectRightsRequestStageDetail File
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
* SubjectRightsRequestStageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubjectRightsRequestStageDetail extends Entity
{

    /**
    * Gets the error
    *
    * @return PublicError|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Beta\Microsoft\Graph\Model\PublicError") || is_null($this->_propDict["error"])) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new PublicError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    *
    * @param PublicError $val The value to assign to the error
    *
    * @return SubjectRightsRequestStageDetail The SubjectRightsRequestStageDetail
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }

    /**
    * Gets the stage
    *
    * @return SubjectRightsRequestStage|null The stage
    */
    public function getStage()
    {
        if (array_key_exists("stage", $this->_propDict)) {
            if (is_a($this->_propDict["stage"], "\Beta\Microsoft\Graph\Model\SubjectRightsRequestStage") || is_null($this->_propDict["stage"])) {
                return $this->_propDict["stage"];
            } else {
                $this->_propDict["stage"] = new SubjectRightsRequestStage($this->_propDict["stage"]);
                return $this->_propDict["stage"];
            }
        }
        return null;
    }

    /**
    * Sets the stage
    *
    * @param SubjectRightsRequestStage $val The value to assign to the stage
    *
    * @return SubjectRightsRequestStageDetail The SubjectRightsRequestStageDetail
    */
    public function setStage($val)
    {
        $this->_propDict["stage"] = $val;
         return $this;
    }

    /**
    * Gets the status
    *
    * @return SubjectRightsRequestStageStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\SubjectRightsRequestStageStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SubjectRightsRequestStageStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param SubjectRightsRequestStageStatus $val The value to assign to the status
    *
    * @return SubjectRightsRequestStageDetail The SubjectRightsRequestStageDetail
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
