<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkypeForBusinessDeviceUsageUserDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* SkypeForBusinessDeviceUsageUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkypeForBusinessDeviceUsageUserDetail extends Entity
{
    /**
    * Gets the lastActivityDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["lastActivityDate"])) {
                return $this->_propDict["lastActivityDate"];
            } else {
                $this->_propDict["lastActivityDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["lastActivityDate"]);
                return $this->_propDict["lastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActivityDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The lastActivityDate
    *
    * @return SkypeForBusinessDeviceUsageUserDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string|null The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return SkypeForBusinessDeviceUsageUserDetail
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["reportRefreshDate"])) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The reportRefreshDate
    *
    * @return SkypeForBusinessDeviceUsageUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the usedAndroidPhone
    *
    * @return bool|null The usedAndroidPhone
    */
    public function getUsedAndroidPhone()
    {
        if (array_key_exists("usedAndroidPhone", $this->_propDict)) {
            return $this->_propDict["usedAndroidPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedAndroidPhone
    *
    * @param bool $val The usedAndroidPhone
    *
    * @return SkypeForBusinessDeviceUsageUserDetail
    */
    public function setUsedAndroidPhone($val)
    {
        $this->_propDict["usedAndroidPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usediPad
    *
    * @return bool|null The usediPad
    */
    public function getUsediPad()
    {
        if (array_key_exists("usediPad", $this->_propDict)) {
            return $this->_propDict["usediPad"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usediPad
    *
    * @param bool $val The usediPad
    *
    * @return SkypeForBusinessDeviceUsageUserDetail
    */
    public function setUsediPad($val)
    {
        $this->_propDict["usediPad"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usediPhone
    *
    * @return bool|null The usediPhone
    */
    public function getUsediPhone()
    {
        if (array_key_exists("usediPhone", $this->_propDict)) {
            return $this->_propDict["usediPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usediPhone
    *
    * @param bool $val The usediPhone
    *
    * @return SkypeForBusinessDeviceUsageUserDetail
    */
    public function setUsediPhone($val)
    {
        $this->_propDict["usediPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWindows
    *
    * @return bool|null The usedWindows
    */
    public function getUsedWindows()
    {
        if (array_key_exists("usedWindows", $this->_propDict)) {
            return $this->_propDict["usedWindows"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedWindows
    *
    * @param bool $val The usedWindows
    *
    * @return SkypeForBusinessDeviceUsageUserDetail
    */
    public function setUsedWindows($val)
    {
        $this->_propDict["usedWindows"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWindowsPhone
    *
    * @return bool|null The usedWindowsPhone
    */
    public function getUsedWindowsPhone()
    {
        if (array_key_exists("usedWindowsPhone", $this->_propDict)) {
            return $this->_propDict["usedWindowsPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedWindowsPhone
    *
    * @param bool $val The usedWindowsPhone
    *
    * @return SkypeForBusinessDeviceUsageUserDetail
    */
    public function setUsedWindowsPhone($val)
    {
        $this->_propDict["usedWindowsPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return SkypeForBusinessDeviceUsageUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
