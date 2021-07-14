<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectionOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\ExternalConnectors\Model;

/**
* ConnectionOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectionOperation extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the error
    *
    * @return \Microsoft\Graph\Model\PublicError|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Microsoft\Graph\Model\PublicError") || is_null($this->_propDict["error"])) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new \Microsoft\Graph\Model\PublicError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }
    
    /**
    * Sets the error
    *
    * @param \Microsoft\Graph\Model\PublicError $val The error
    *
    * @return ConnectionOperation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return ConnectionOperationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\ExternalConnectors\Model\ConnectionOperationStatus") || is_null($this->_propDict["status"])) {
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
    
}
