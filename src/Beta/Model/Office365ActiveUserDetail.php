<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365ActiveUserDetail File
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
* Office365ActiveUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Office365ActiveUserDetail extends Entity
{
    /**
    * Gets the reportRefreshDate
    *
    * @return \DateTime The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
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
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
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
    * @return Office365ActiveUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return Office365ActiveUserDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeleted
    *
    * @return bool The isDeleted
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
    *
    * @param bool $val The isDeleted
    *
    * @return Office365ActiveUserDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deletedDate
    *
    * @return \DateTime The deletedDate
    */
    public function getDeletedDate()
    {
        if (array_key_exists("deletedDate", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDate"], "\DateTime")) {
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
    *
    * @param \DateTime $val The deletedDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setDeletedDate($val)
    {
        $this->_propDict["deletedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasExchangeLicense
    *
    * @return bool The hasExchangeLicense
    */
    public function getHasExchangeLicense()
    {
        if (array_key_exists("hasExchangeLicense", $this->_propDict)) {
            return $this->_propDict["hasExchangeLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasExchangeLicense
    *
    * @param bool $val The hasExchangeLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasExchangeLicense($val)
    {
        $this->_propDict["hasExchangeLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasOneDriveLicense
    *
    * @return bool The hasOneDriveLicense
    */
    public function getHasOneDriveLicense()
    {
        if (array_key_exists("hasOneDriveLicense", $this->_propDict)) {
            return $this->_propDict["hasOneDriveLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasOneDriveLicense
    *
    * @param bool $val The hasOneDriveLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasOneDriveLicense($val)
    {
        $this->_propDict["hasOneDriveLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasSharePointLicense
    *
    * @return bool The hasSharePointLicense
    */
    public function getHasSharePointLicense()
    {
        if (array_key_exists("hasSharePointLicense", $this->_propDict)) {
            return $this->_propDict["hasSharePointLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasSharePointLicense
    *
    * @param bool $val The hasSharePointLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasSharePointLicense($val)
    {
        $this->_propDict["hasSharePointLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasSkypeForBusinessLicense
    *
    * @return bool The hasSkypeForBusinessLicense
    */
    public function getHasSkypeForBusinessLicense()
    {
        if (array_key_exists("hasSkypeForBusinessLicense", $this->_propDict)) {
            return $this->_propDict["hasSkypeForBusinessLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasSkypeForBusinessLicense
    *
    * @param bool $val The hasSkypeForBusinessLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasSkypeForBusinessLicense($val)
    {
        $this->_propDict["hasSkypeForBusinessLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasYammerLicense
    *
    * @return bool The hasYammerLicense
    */
    public function getHasYammerLicense()
    {
        if (array_key_exists("hasYammerLicense", $this->_propDict)) {
            return $this->_propDict["hasYammerLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasYammerLicense
    *
    * @param bool $val The hasYammerLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasYammerLicense($val)
    {
        $this->_propDict["hasYammerLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasTeamsLicense
    *
    * @return bool The hasTeamsLicense
    */
    public function getHasTeamsLicense()
    {
        if (array_key_exists("hasTeamsLicense", $this->_propDict)) {
            return $this->_propDict["hasTeamsLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasTeamsLicense
    *
    * @param bool $val The hasTeamsLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasTeamsLicense($val)
    {
        $this->_propDict["hasTeamsLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the exchangeLastActivityDate
    *
    * @return \DateTime The exchangeLastActivityDate
    */
    public function getExchangeLastActivityDate()
    {
        if (array_key_exists("exchangeLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeLastActivityDate"], "\DateTime")) {
                return $this->_propDict["exchangeLastActivityDate"];
            } else {
                $this->_propDict["exchangeLastActivityDate"] = new \DateTime($this->_propDict["exchangeLastActivityDate"]);
                return $this->_propDict["exchangeLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeLastActivityDate
    *
    * @param \DateTime $val The exchangeLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setExchangeLastActivityDate($val)
    {
        $this->_propDict["exchangeLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the oneDriveLastActivityDate
    *
    * @return \DateTime The oneDriveLastActivityDate
    */
    public function getOneDriveLastActivityDate()
    {
        if (array_key_exists("oneDriveLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["oneDriveLastActivityDate"], "\DateTime")) {
                return $this->_propDict["oneDriveLastActivityDate"];
            } else {
                $this->_propDict["oneDriveLastActivityDate"] = new \DateTime($this->_propDict["oneDriveLastActivityDate"]);
                return $this->_propDict["oneDriveLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the oneDriveLastActivityDate
    *
    * @param \DateTime $val The oneDriveLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setOneDriveLastActivityDate($val)
    {
        $this->_propDict["oneDriveLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharePointLastActivityDate
    *
    * @return \DateTime The sharePointLastActivityDate
    */
    public function getSharePointLastActivityDate()
    {
        if (array_key_exists("sharePointLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["sharePointLastActivityDate"], "\DateTime")) {
                return $this->_propDict["sharePointLastActivityDate"];
            } else {
                $this->_propDict["sharePointLastActivityDate"] = new \DateTime($this->_propDict["sharePointLastActivityDate"]);
                return $this->_propDict["sharePointLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharePointLastActivityDate
    *
    * @param \DateTime $val The sharePointLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setSharePointLastActivityDate($val)
    {
        $this->_propDict["sharePointLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the skypeForBusinessLastActivityDate
    *
    * @return \DateTime The skypeForBusinessLastActivityDate
    */
    public function getSkypeForBusinessLastActivityDate()
    {
        if (array_key_exists("skypeForBusinessLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["skypeForBusinessLastActivityDate"], "\DateTime")) {
                return $this->_propDict["skypeForBusinessLastActivityDate"];
            } else {
                $this->_propDict["skypeForBusinessLastActivityDate"] = new \DateTime($this->_propDict["skypeForBusinessLastActivityDate"]);
                return $this->_propDict["skypeForBusinessLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the skypeForBusinessLastActivityDate
    *
    * @param \DateTime $val The skypeForBusinessLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setSkypeForBusinessLastActivityDate($val)
    {
        $this->_propDict["skypeForBusinessLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the yammerLastActivityDate
    *
    * @return \DateTime The yammerLastActivityDate
    */
    public function getYammerLastActivityDate()
    {
        if (array_key_exists("yammerLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["yammerLastActivityDate"], "\DateTime")) {
                return $this->_propDict["yammerLastActivityDate"];
            } else {
                $this->_propDict["yammerLastActivityDate"] = new \DateTime($this->_propDict["yammerLastActivityDate"]);
                return $this->_propDict["yammerLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the yammerLastActivityDate
    *
    * @param \DateTime $val The yammerLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setYammerLastActivityDate($val)
    {
        $this->_propDict["yammerLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamsLastActivityDate
    *
    * @return \DateTime The teamsLastActivityDate
    */
    public function getTeamsLastActivityDate()
    {
        if (array_key_exists("teamsLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["teamsLastActivityDate"], "\DateTime")) {
                return $this->_propDict["teamsLastActivityDate"];
            } else {
                $this->_propDict["teamsLastActivityDate"] = new \DateTime($this->_propDict["teamsLastActivityDate"]);
                return $this->_propDict["teamsLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the teamsLastActivityDate
    *
    * @param \DateTime $val The teamsLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setTeamsLastActivityDate($val)
    {
        $this->_propDict["teamsLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeLicenseAssignDate
    *
    * @return \DateTime The exchangeLicenseAssignDate
    */
    public function getExchangeLicenseAssignDate()
    {
        if (array_key_exists("exchangeLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["exchangeLicenseAssignDate"];
            } else {
                $this->_propDict["exchangeLicenseAssignDate"] = new \DateTime($this->_propDict["exchangeLicenseAssignDate"]);
                return $this->_propDict["exchangeLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeLicenseAssignDate
    *
    * @param \DateTime $val The exchangeLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setExchangeLicenseAssignDate($val)
    {
        $this->_propDict["exchangeLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the oneDriveLicenseAssignDate
    *
    * @return \DateTime The oneDriveLicenseAssignDate
    */
    public function getOneDriveLicenseAssignDate()
    {
        if (array_key_exists("oneDriveLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["oneDriveLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["oneDriveLicenseAssignDate"];
            } else {
                $this->_propDict["oneDriveLicenseAssignDate"] = new \DateTime($this->_propDict["oneDriveLicenseAssignDate"]);
                return $this->_propDict["oneDriveLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the oneDriveLicenseAssignDate
    *
    * @param \DateTime $val The oneDriveLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setOneDriveLicenseAssignDate($val)
    {
        $this->_propDict["oneDriveLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharePointLicenseAssignDate
    *
    * @return \DateTime The sharePointLicenseAssignDate
    */
    public function getSharePointLicenseAssignDate()
    {
        if (array_key_exists("sharePointLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["sharePointLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["sharePointLicenseAssignDate"];
            } else {
                $this->_propDict["sharePointLicenseAssignDate"] = new \DateTime($this->_propDict["sharePointLicenseAssignDate"]);
                return $this->_propDict["sharePointLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharePointLicenseAssignDate
    *
    * @param \DateTime $val The sharePointLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setSharePointLicenseAssignDate($val)
    {
        $this->_propDict["sharePointLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the skypeForBusinessLicenseAssignDate
    *
    * @return \DateTime The skypeForBusinessLicenseAssignDate
    */
    public function getSkypeForBusinessLicenseAssignDate()
    {
        if (array_key_exists("skypeForBusinessLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["skypeForBusinessLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["skypeForBusinessLicenseAssignDate"];
            } else {
                $this->_propDict["skypeForBusinessLicenseAssignDate"] = new \DateTime($this->_propDict["skypeForBusinessLicenseAssignDate"]);
                return $this->_propDict["skypeForBusinessLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the skypeForBusinessLicenseAssignDate
    *
    * @param \DateTime $val The skypeForBusinessLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setSkypeForBusinessLicenseAssignDate($val)
    {
        $this->_propDict["skypeForBusinessLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the yammerLicenseAssignDate
    *
    * @return \DateTime The yammerLicenseAssignDate
    */
    public function getYammerLicenseAssignDate()
    {
        if (array_key_exists("yammerLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["yammerLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["yammerLicenseAssignDate"];
            } else {
                $this->_propDict["yammerLicenseAssignDate"] = new \DateTime($this->_propDict["yammerLicenseAssignDate"]);
                return $this->_propDict["yammerLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the yammerLicenseAssignDate
    *
    * @param \DateTime $val The yammerLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setYammerLicenseAssignDate($val)
    {
        $this->_propDict["yammerLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamsLicenseAssignDate
    *
    * @return \DateTime The teamsLicenseAssignDate
    */
    public function getTeamsLicenseAssignDate()
    {
        if (array_key_exists("teamsLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["teamsLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["teamsLicenseAssignDate"];
            } else {
                $this->_propDict["teamsLicenseAssignDate"] = new \DateTime($this->_propDict["teamsLicenseAssignDate"]);
                return $this->_propDict["teamsLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the teamsLicenseAssignDate
    *
    * @param \DateTime $val The teamsLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setTeamsLicenseAssignDate($val)
    {
        $this->_propDict["teamsLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignedProducts
    *
    * @return string The assignedProducts
    */
    public function getAssignedProducts()
    {
        if (array_key_exists("assignedProducts", $this->_propDict)) {
            return $this->_propDict["assignedProducts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedProducts
    *
    * @param string $val The assignedProducts
    *
    * @return Office365ActiveUserDetail
    */
    public function setAssignedProducts($val)
    {
        $this->_propDict["assignedProducts"] = $val;
        return $this;
    }
    
}