<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainState File
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
* DomainState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DomainState extends Entity
{
    /**
    * Gets the status
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    *
    * @param string $val The value of the status
    *
    * @return DomainState
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    /**
    * Gets the operation
    *
    * @return string The operation
    */
    public function getOperation()
    {
        if (array_key_exists("operation", $this->_propDict)) {
            return $this->_propDict["operation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operation
    *
    * @param string $val The value of the operation
    *
    * @return DomainState
    */
    public function setOperation($val)
    {
        $this->_propDict["operation"] = $val;
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
            if (is_a($this->_propDict["lastActionDateTime"], "Microsoft\Graph\Model\\DateTime")) {
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
    * @param \DateTime $val The value to assign to the lastActionDateTime
    *
    * @return DomainState The DomainState
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
         return $this;
    }
}
