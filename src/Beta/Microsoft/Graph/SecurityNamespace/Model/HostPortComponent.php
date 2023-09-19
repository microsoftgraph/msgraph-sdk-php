<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostPortComponent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* HostPortComponent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostPortComponent extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the firstSeenDateTime
    *
    * @return \DateTime|null The firstSeenDateTime
    */
    public function getFirstSeenDateTime()
    {
        if (array_key_exists("firstSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstSeenDateTime"], "\DateTime") || is_null($this->_propDict["firstSeenDateTime"])) {
                return $this->_propDict["firstSeenDateTime"];
            } else {
                $this->_propDict["firstSeenDateTime"] = new \DateTime($this->_propDict["firstSeenDateTime"]);
                return $this->_propDict["firstSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the firstSeenDateTime
    *
    * @param \DateTime $val The value to assign to the firstSeenDateTime
    *
    * @return HostPortComponent The HostPortComponent
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the isRecent
    *
    * @return bool|null The isRecent
    */
    public function getIsRecent()
    {
        if (array_key_exists("isRecent", $this->_propDict)) {
            return $this->_propDict["isRecent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRecent
    *
    * @param bool $val The value of the isRecent
    *
    * @return HostPortComponent
    */
    public function setIsRecent($val)
    {
        $this->_propDict["isRecent"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    *
    * @return \DateTime|null The lastSeenDateTime
    */
    public function getLastSeenDateTime()
    {
        if (array_key_exists("lastSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSeenDateTime"], "\DateTime") || is_null($this->_propDict["lastSeenDateTime"])) {
                return $this->_propDict["lastSeenDateTime"];
            } else {
                $this->_propDict["lastSeenDateTime"] = new \DateTime($this->_propDict["lastSeenDateTime"]);
                return $this->_propDict["lastSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSeenDateTime
    *
    * @param \DateTime $val The value to assign to the lastSeenDateTime
    *
    * @return HostPortComponent The HostPortComponent
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the component
    *
    * @return HostComponent|null The component
    */
    public function getComponent()
    {
        if (array_key_exists("component", $this->_propDict)) {
            if (is_a($this->_propDict["component"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\HostComponent") || is_null($this->_propDict["component"])) {
                return $this->_propDict["component"];
            } else {
                $this->_propDict["component"] = new HostComponent($this->_propDict["component"]);
                return $this->_propDict["component"];
            }
        }
        return null;
    }

    /**
    * Sets the component
    *
    * @param HostComponent $val The value to assign to the component
    *
    * @return HostPortComponent The HostPortComponent
    */
    public function setComponent($val)
    {
        $this->_propDict["component"] = $val;
         return $this;
    }
}
