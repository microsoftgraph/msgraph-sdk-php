<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PositionDetail File
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
* PositionDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PositionDetail extends Entity
{

    /**
    * Gets the company
    *
    * @return CompanyDetail The company
    */
    public function getCompany()
    {
        if (array_key_exists("company", $this->_propDict)) {
            if (is_a($this->_propDict["company"], "Microsoft\Graph\Beta\Model\CompanyDetail")) {
                return $this->_propDict["company"];
            } else {
                $this->_propDict["company"] = new CompanyDetail($this->_propDict["company"]);
                return $this->_propDict["company"];
            }
        }
        return null;
    }

    /**
    * Sets the company
    *
    * @param CompanyDetail $val The value to assign to the company
    *
    * @return PositionDetail The PositionDetail
    */
    public function setCompany($val)
    {
        $this->_propDict["company"] = $val;
         return $this;
    }
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The value of the description
    *
    * @return PositionDetail
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the endMonthYear
    *
    * @return \DateTime The endMonthYear
    */
    public function getEndMonthYear()
    {
        if (array_key_exists("endMonthYear", $this->_propDict)) {
            if (is_a($this->_propDict["endMonthYear"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["endMonthYear"];
            } else {
                $this->_propDict["endMonthYear"] = new \DateTime($this->_propDict["endMonthYear"]);
                return $this->_propDict["endMonthYear"];
            }
        }
        return null;
    }

    /**
    * Sets the endMonthYear
    *
    * @param \DateTime $val The value to assign to the endMonthYear
    *
    * @return PositionDetail The PositionDetail
    */
    public function setEndMonthYear($val)
    {
        $this->_propDict["endMonthYear"] = $val;
         return $this;
    }
    /**
    * Gets the jobTitle
    *
    * @return string The jobTitle
    */
    public function getJobTitle()
    {
        if (array_key_exists("jobTitle", $this->_propDict)) {
            return $this->_propDict["jobTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the jobTitle
    *
    * @param string $val The value of the jobTitle
    *
    * @return PositionDetail
    */
    public function setJobTitle($val)
    {
        $this->_propDict["jobTitle"] = $val;
        return $this;
    }
    /**
    * Gets the role
    *
    * @return string The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            return $this->_propDict["role"];
        } else {
            return null;
        }
    }

    /**
    * Sets the role
    *
    * @param string $val The value of the role
    *
    * @return PositionDetail
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }

    /**
    * Gets the startMonthYear
    *
    * @return \DateTime The startMonthYear
    */
    public function getStartMonthYear()
    {
        if (array_key_exists("startMonthYear", $this->_propDict)) {
            if (is_a($this->_propDict["startMonthYear"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["startMonthYear"];
            } else {
                $this->_propDict["startMonthYear"] = new \DateTime($this->_propDict["startMonthYear"]);
                return $this->_propDict["startMonthYear"];
            }
        }
        return null;
    }

    /**
    * Sets the startMonthYear
    *
    * @param \DateTime $val The value to assign to the startMonthYear
    *
    * @return PositionDetail The PositionDetail
    */
    public function setStartMonthYear($val)
    {
        $this->_propDict["startMonthYear"] = $val;
         return $this;
    }
    /**
    * Gets the summary
    *
    * @return string The summary
    */
    public function getSummary()
    {
        if (array_key_exists("summary", $this->_propDict)) {
            return $this->_propDict["summary"];
        } else {
            return null;
        }
    }

    /**
    * Sets the summary
    *
    * @param string $val The value of the summary
    *
    * @return PositionDetail
    */
    public function setSummary($val)
    {
        $this->_propDict["summary"] = $val;
        return $this;
    }
}
