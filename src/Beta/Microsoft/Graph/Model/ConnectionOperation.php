<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectionOperation File
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
* ConnectionOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectionOperation extends Entity
{
    /**
    * Gets the status
    *
    * @return ConnectionOperationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\ConnectionOperationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ConnectionOperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param ConnectionOperationStatus $val The status
    *
    * @return ConnectionOperation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the error
    *
    * @return ErrorDetail The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "Beta\Microsoft\Graph\Model\ErrorDetail")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new ErrorDetail($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }
    
    /**
    * Sets the error
    *
    * @param ErrorDetail $val The error
    *
    * @return ConnectionOperation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }
    
}