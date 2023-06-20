<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* M365ForwardingRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

/**
* M365ForwardingRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class M365ForwardingRule extends ForwardingRule
{
    /**
    * Gets the category
    *
    * @return ForwardingCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\Networkaccess\Model\ForwardingCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new ForwardingCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    *
    * @param ForwardingCategory $val The category
    *
    * @return M365ForwardingRule
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the ports
    *
    * @return array|null The ports
    */
    public function getPorts()
    {
        if (array_key_exists("ports", $this->_propDict)) {
            return $this->_propDict["ports"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ports
    *
    * @param string[] $val The ports
    *
    * @return M365ForwardingRule
    */
    public function setPorts($val)
    {
        $this->_propDict["ports"] = $val;
        return $this;
    }

    /**
    * Gets the protocol
    *
    * @return NetworkingProtocol|null The protocol
    */
    public function getProtocol()
    {
        if (array_key_exists("protocol", $this->_propDict)) {
            if (is_a($this->_propDict["protocol"], "\Beta\Microsoft\Graph\Networkaccess\Model\NetworkingProtocol") || is_null($this->_propDict["protocol"])) {
                return $this->_propDict["protocol"];
            } else {
                $this->_propDict["protocol"] = new NetworkingProtocol($this->_propDict["protocol"]);
                return $this->_propDict["protocol"];
            }
        }
        return null;
    }

    /**
    * Sets the protocol
    *
    * @param NetworkingProtocol $val The protocol
    *
    * @return M365ForwardingRule
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
        return $this;
    }

}
