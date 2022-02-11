<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomExtensionHandlerInstance File
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
* CustomExtensionHandlerInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomExtensionHandlerInstance extends Entity
{
    /**
    * Gets the customExtensionId
    *
    * @return string|null The customExtensionId
    */
    public function getCustomExtensionId()
    {
        if (array_key_exists("customExtensionId", $this->_propDict)) {
            return $this->_propDict["customExtensionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customExtensionId
    *
    * @param string $val The value of the customExtensionId
    *
    * @return CustomExtensionHandlerInstance
    */
    public function setCustomExtensionId($val)
    {
        $this->_propDict["customExtensionId"] = $val;
        return $this;
    }
    /**
    * Gets the externalCorrelationId
    *
    * @return string|null The externalCorrelationId
    */
    public function getExternalCorrelationId()
    {
        if (array_key_exists("externalCorrelationId", $this->_propDict)) {
            return $this->_propDict["externalCorrelationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalCorrelationId
    *
    * @param string $val The value of the externalCorrelationId
    *
    * @return CustomExtensionHandlerInstance
    */
    public function setExternalCorrelationId($val)
    {
        $this->_propDict["externalCorrelationId"] = $val;
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
            if (is_a($this->_propDict["stage"], "\Beta\Microsoft\Graph\Model\AccessPackageCustomExtensionStage") || is_null($this->_propDict["stage"])) {
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
    * @return CustomExtensionHandlerInstance The CustomExtensionHandlerInstance
    */
    public function setStage($val)
    {
        $this->_propDict["stage"] = $val;
         return $this;
    }

    /**
    * Gets the status
    *
    * @return AccessPackageCustomExtensionHandlerStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\AccessPackageCustomExtensionHandlerStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AccessPackageCustomExtensionHandlerStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param AccessPackageCustomExtensionHandlerStatus $val The value to assign to the status
    *
    * @return CustomExtensionHandlerInstance The CustomExtensionHandlerInstance
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
