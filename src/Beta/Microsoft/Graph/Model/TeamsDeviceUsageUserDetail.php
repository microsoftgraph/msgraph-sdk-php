<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsDeviceUsageUserDetail File
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
* TeamsDeviceUsageUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsDeviceUsageUserDetail extends Entity
{
    /**
    * Gets the deletedDate
    * The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
    *
    * @return \DateTime|null The deletedDate
    */
    public function getDeletedDate()
    {
        if (array_key_exists("deletedDate", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDate"], "\DateTime") || is_null($this->_propDict["deletedDate"])) {
                return $this->_propDict["deletedDate"];
            } else {
                $this->_propDict["deletedDate"] = new \DateTime($this->_propDict["deletedDate"]);
                return $this->_propDict["deletedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deletedDate
    * The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
    *
    * @param \DateTime $val The deletedDate
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setDeletedDate($val)
    {
        $this->_propDict["deletedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeleted
    * Whether this user has been deleted or soft deleted.
    *
    * @return bool|null The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    * Whether this user has been deleted or soft deleted.
    *
    * @param bool $val The isDeleted
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isLicensed
    * Whether the user has been assigned a Teams license.
    *
    * @return bool|null The isLicensed
    */
    public function getIsLicensed()
    {
        if (array_key_exists("isLicensed", $this->_propDict)) {
            return $this->_propDict["isLicensed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isLicensed
    * Whether the user has been assigned a Teams license.
    *
    * @param bool $val The isLicensed
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setIsLicensed($val)
    {
        $this->_propDict["isLicensed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    * The last date that the user participated in a Microsoft Teams activity.
    *
    * @return \DateTime|null The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\DateTime") || is_null($this->_propDict["lastActivityDate"])) {
                return $this->_propDict["lastActivityDate"];
            } else {
                $this->_propDict["lastActivityDate"] = new \DateTime($this->_propDict["lastActivityDate"]);
                return $this->_propDict["lastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActivityDate
    * The last date that the user participated in a Microsoft Teams activity.
    *
    * @param \DateTime $val The lastActivityDate
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    * The number of days the report covers.
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
    * The number of days the report covers.
    *
    * @param string $val The reportPeriod
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    * The latest date of the content.
    *
    * @return \DateTime|null The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime") || is_null($this->_propDict["reportRefreshDate"])) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    * The latest date of the content.
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the usedAndroidPhone
    * Whether the user was active on the Teams mobile client for Android.
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
    * Whether the user was active on the Teams mobile client for Android.
    *
    * @param bool $val The usedAndroidPhone
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedAndroidPhone($val)
    {
        $this->_propDict["usedAndroidPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedChromeOS
    * Whether the user was active in the Teams desktop client on a ChromeOS computer.
    *
    * @return bool|null The usedChromeOS
    */
    public function getUsedChromeOS()
    {
        if (array_key_exists("usedChromeOS", $this->_propDict)) {
            return $this->_propDict["usedChromeOS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedChromeOS
    * Whether the user was active in the Teams desktop client on a ChromeOS computer.
    *
    * @param bool $val The usedChromeOS
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedChromeOS($val)
    {
        $this->_propDict["usedChromeOS"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usediOS
    * Whether the user was active on the Teams mobile client for iOS.
    *
    * @return bool|null The usediOS
    */
    public function getUsediOS()
    {
        if (array_key_exists("usediOS", $this->_propDict)) {
            return $this->_propDict["usediOS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usediOS
    * Whether the user was active on the Teams mobile client for iOS.
    *
    * @param bool $val The usediOS
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsediOS($val)
    {
        $this->_propDict["usediOS"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedLinux
    * Whether the user was active in the Teams desktop client on a Linux computer.
    *
    * @return bool|null The usedLinux
    */
    public function getUsedLinux()
    {
        if (array_key_exists("usedLinux", $this->_propDict)) {
            return $this->_propDict["usedLinux"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedLinux
    * Whether the user was active in the Teams desktop client on a Linux computer.
    *
    * @param bool $val The usedLinux
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedLinux($val)
    {
        $this->_propDict["usedLinux"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedMac
    * Whether the user was active in the Teams desktop client on a macOS computer.
    *
    * @return bool|null The usedMac
    */
    public function getUsedMac()
    {
        if (array_key_exists("usedMac", $this->_propDict)) {
            return $this->_propDict["usedMac"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedMac
    * Whether the user was active in the Teams desktop client on a macOS computer.
    *
    * @param bool $val The usedMac
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedMac($val)
    {
        $this->_propDict["usedMac"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWeb
    * Whether the user was active in the Teams web client on devices.
    *
    * @return bool|null The usedWeb
    */
    public function getUsedWeb()
    {
        if (array_key_exists("usedWeb", $this->_propDict)) {
            return $this->_propDict["usedWeb"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedWeb
    * Whether the user was active in the Teams web client on devices.
    *
    * @param bool $val The usedWeb
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedWeb($val)
    {
        $this->_propDict["usedWeb"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWindows
    * Whether the user was active in the Teams desktop client on a Windows-based computer.
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
    * Whether the user was active in the Teams desktop client on a Windows-based computer.
    *
    * @param bool $val The usedWindows
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedWindows($val)
    {
        $this->_propDict["usedWindows"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWindowsPhone
    * Whether the user was active on the Teams mobile client for Windows phone.
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
    * Whether the user was active on the Teams mobile client for Windows phone.
    *
    * @param bool $val The usedWindowsPhone
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedWindowsPhone($val)
    {
        $this->_propDict["usedWindowsPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
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
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
    *
    * @param string $val The userPrincipalName
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
