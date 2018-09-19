<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserActivationCounts File
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
* UserActivationCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserActivationCounts extends Entity
{
    /**
    * Gets the productType
    *
    * @return string The productType
    */
    public function getProductType()
    {
        if (array_key_exists("productType", $this->_propDict)) {
            return $this->_propDict["productType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productType
    *
    * @param string $val The value of the productType
    *
    * @return UserActivationCounts
    */
    public function setProductType($val)
    {
        $this->_propDict["productType"] = $val;
        return $this;
    }

    /**
    * Gets the lastActivatedDate
    *
    * @return \DateTime The lastActivatedDate
    */
    public function getLastActivatedDate()
    {
        if (array_key_exists("lastActivatedDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivatedDate"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["lastActivatedDate"];
            } else {
                $this->_propDict["lastActivatedDate"] = new \DateTime($this->_propDict["lastActivatedDate"]);
                return $this->_propDict["lastActivatedDate"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActivatedDate
    *
    * @param \DateTime $val The value to assign to the lastActivatedDate
    *
    * @return UserActivationCounts The UserActivationCounts
    */
    public function setLastActivatedDate($val)
    {
        $this->_propDict["lastActivatedDate"] = $val;
         return $this;
    }
    /**
    * Gets the windows
    *
    * @return int The windows
    */
    public function getWindows()
    {
        if (array_key_exists("windows", $this->_propDict)) {
            return $this->_propDict["windows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows
    *
    * @param int $val The value of the windows
    *
    * @return UserActivationCounts
    */
    public function setWindows($val)
    {
        $this->_propDict["windows"] = $val;
        return $this;
    }
    /**
    * Gets the mac
    *
    * @return int The mac
    */
    public function getMac()
    {
        if (array_key_exists("mac", $this->_propDict)) {
            return $this->_propDict["mac"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mac
    *
    * @param int $val The value of the mac
    *
    * @return UserActivationCounts
    */
    public function setMac($val)
    {
        $this->_propDict["mac"] = $val;
        return $this;
    }
    /**
    * Gets the windows10Mobile
    *
    * @return int The windows10Mobile
    */
    public function getWindows10Mobile()
    {
        if (array_key_exists("windows10Mobile", $this->_propDict)) {
            return $this->_propDict["windows10Mobile"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows10Mobile
    *
    * @param int $val The value of the windows10Mobile
    *
    * @return UserActivationCounts
    */
    public function setWindows10Mobile($val)
    {
        $this->_propDict["windows10Mobile"] = $val;
        return $this;
    }
    /**
    * Gets the ios
    *
    * @return int The ios
    */
    public function getIos()
    {
        if (array_key_exists("ios", $this->_propDict)) {
            return $this->_propDict["ios"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ios
    *
    * @param int $val The value of the ios
    *
    * @return UserActivationCounts
    */
    public function setIos($val)
    {
        $this->_propDict["ios"] = $val;
        return $this;
    }
    /**
    * Gets the android
    *
    * @return int The android
    */
    public function getAndroid()
    {
        if (array_key_exists("android", $this->_propDict)) {
            return $this->_propDict["android"];
        } else {
            return null;
        }
    }

    /**
    * Sets the android
    *
    * @param int $val The value of the android
    *
    * @return UserActivationCounts
    */
    public function setAndroid($val)
    {
        $this->_propDict["android"] = $val;
        return $this;
    }
    /**
    * Gets the activatedOnSharedComputer
    *
    * @return bool The activatedOnSharedComputer
    */
    public function getActivatedOnSharedComputer()
    {
        if (array_key_exists("activatedOnSharedComputer", $this->_propDict)) {
            return $this->_propDict["activatedOnSharedComputer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activatedOnSharedComputer
    *
    * @param bool $val The value of the activatedOnSharedComputer
    *
    * @return UserActivationCounts
    */
    public function setActivatedOnSharedComputer($val)
    {
        $this->_propDict["activatedOnSharedComputer"] = $val;
        return $this;
    }
}
