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
namespace Microsoft\Graph\Model;

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
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Model\OperationStatus")) {
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
    * Gets the resultInfo
    *
    * @return ResultInfo The resultInfo
    */
    public function getResultInfo()
    {
        if (array_key_exists("resultInfo", $this->_propDict)) {
            if (is_a($this->_propDict["resultInfo"], "Microsoft\Graph\Model\ResultInfo")) {
                return $this->_propDict["resultInfo"];
            } else {
                $this->_propDict["resultInfo"] = new ResultInfo($this->_propDict["resultInfo"]);
                return $this->_propDict["resultInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resultInfo
    *
    * @param ResultInfo $val The resultInfo
    *
    * @return CommsOperation
    */
    public function setResultInfo($val)
    {
        $this->_propDict["resultInfo"] = $val;
        return $this;
    }
    
}