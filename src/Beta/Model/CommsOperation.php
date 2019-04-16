<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommsOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* CommsOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CommsOperation extends Entity
{
    /**
    * Gets the status
    *
    * @return OperationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Beta\Model\OperationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new OperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param OperationStatus $val The status
    *
    * @return CommsOperation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return CommsOperation
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastActionDateTime
    *
    * @return \DateTime The lastActionDateTime
    */
    public function getLastActionDateTime()
    {
        if (array_key_exists("lastActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActionDateTime"], "\DateTime")) {
                return $this->_propDict["lastActionDateTime"];
            } else {
                $this->_propDict["lastActionDateTime"] = new \DateTime($this->_propDict["lastActionDateTime"]);
                return $this->_propDict["lastActionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActionDateTime
    *
    * @param \DateTime $val The lastActionDateTime
    *
    * @return CommsOperation
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientContext
    *
    * @return string The clientContext
    */
    public function getClientContext()
    {
        if (array_key_exists("clientContext", $this->_propDict)) {
            return $this->_propDict["clientContext"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientContext
    *
    * @param string $val The clientContext
    *
    * @return CommsOperation
    */
    public function setClientContext($val)
    {
        $this->_propDict["clientContext"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorInfo
    *
    * @return ResultInfo The errorInfo
    */
    public function getErrorInfo()
    {
        if (array_key_exists("errorInfo", $this->_propDict)) {
            if (is_a($this->_propDict["errorInfo"], "Microsoft\Graph\Beta\Model\ResultInfo")) {
                return $this->_propDict["errorInfo"];
            } else {
                $this->_propDict["errorInfo"] = new ResultInfo($this->_propDict["errorInfo"]);
                return $this->_propDict["errorInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the errorInfo
    *
    * @param ResultInfo $val The errorInfo
    *
    * @return CommsOperation
    */
    public function setErrorInfo($val)
    {
        $this->_propDict["errorInfo"] = $val;
        return $this;
    }
    
}