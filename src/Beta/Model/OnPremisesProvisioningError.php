<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesProvisioningError File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* OnPremisesProvisioningError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OnPremisesProvisioningError extends Entity
{
    /**
    * Gets the value
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    *
    * @param string $val The value of the value
    *
    * @return OnPremisesProvisioningError
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
    /**
    * Gets the category
    *
    * @return string The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category
    *
    * @param string $val The value of the category
    *
    * @return OnPremisesProvisioningError
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    /**
    * Gets the propertyCausingError
    *
    * @return string The propertyCausingError
    */
    public function getPropertyCausingError()
    {
        if (array_key_exists("propertyCausingError", $this->_propDict)) {
            return $this->_propDict["propertyCausingError"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propertyCausingError
    *
    * @param string $val The value of the propertyCausingError
    *
    * @return OnPremisesProvisioningError
    */
    public function setPropertyCausingError($val)
    {
        $this->_propDict["propertyCausingError"] = $val;
        return $this;
    }

    /**
    * Gets the occurredDateTime
    *
    * @return \DateTime The occurredDateTime
    */
    public function getOccurredDateTime()
    {
        if (array_key_exists("occurredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["occurredDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["occurredDateTime"];
            } else {
                $this->_propDict["occurredDateTime"] = new \DateTime($this->_propDict["occurredDateTime"]);
                return $this->_propDict["occurredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the occurredDateTime
    *
    * @param \DateTime $val The value to assign to the occurredDateTime
    *
    * @return OnPremisesProvisioningError The OnPremisesProvisioningError
    */
    public function setOccurredDateTime($val)
    {
        $this->_propDict["occurredDateTime"] = $val;
         return $this;
    }
}
