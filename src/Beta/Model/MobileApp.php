<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileApp File
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
* MobileApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileApp extends Entity
{
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
    * @return MobileApp
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @param string $val The description
    *
    * @return MobileApp
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisher
    *
    * @param string $val The publisher
    *
    * @return MobileApp
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the largeIcon
    *
    * @return MimeContent The largeIcon
    */
    public function getLargeIcon()
    {
        if (array_key_exists("largeIcon", $this->_propDict)) {
            if (is_a($this->_propDict["largeIcon"], "Microsoft\Graph\Beta\Model\MimeContent")) {
                return $this->_propDict["largeIcon"];
            } else {
                $this->_propDict["largeIcon"] = new MimeContent($this->_propDict["largeIcon"]);
                return $this->_propDict["largeIcon"];
            }
        }
        return null;
    }
    
    /**
    * Sets the largeIcon
    *
    * @param MimeContent $val The largeIcon
    *
    * @return MobileApp
    */
    public function setLargeIcon($val)
    {
        $this->_propDict["largeIcon"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return MobileApp
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return MobileApp
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isFeatured
    *
    * @return bool The isFeatured
    */
    public function getIsFeatured()
    {
        if (array_key_exists("isFeatured", $this->_propDict)) {
            return $this->_propDict["isFeatured"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isFeatured
    *
    * @param bool $val The isFeatured
    *
    * @return MobileApp
    */
    public function setIsFeatured($val)
    {
        $this->_propDict["isFeatured"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the privacyInformationUrl
    *
    * @return string The privacyInformationUrl
    */
    public function getPrivacyInformationUrl()
    {
        if (array_key_exists("privacyInformationUrl", $this->_propDict)) {
            return $this->_propDict["privacyInformationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privacyInformationUrl
    *
    * @param string $val The privacyInformationUrl
    *
    * @return MobileApp
    */
    public function setPrivacyInformationUrl($val)
    {
        $this->_propDict["privacyInformationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the informationUrl
    *
    * @return string The informationUrl
    */
    public function getInformationUrl()
    {
        if (array_key_exists("informationUrl", $this->_propDict)) {
            return $this->_propDict["informationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the informationUrl
    *
    * @param string $val The informationUrl
    *
    * @return MobileApp
    */
    public function setInformationUrl($val)
    {
        $this->_propDict["informationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the owner
    *
    * @return string The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            return $this->_propDict["owner"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the owner
    *
    * @param string $val The owner
    *
    * @return MobileApp
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }
    
    /**
    * Gets the developer
    *
    * @return string The developer
    */
    public function getDeveloper()
    {
        if (array_key_exists("developer", $this->_propDict)) {
            return $this->_propDict["developer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the developer
    *
    * @param string $val The developer
    *
    * @return MobileApp
    */
    public function setDeveloper($val)
    {
        $this->_propDict["developer"] = $val;
        return $this;
    }
    
    /**
    * Gets the notes
    *
    * @return string The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notes
    *
    * @param string $val The notes
    *
    * @return MobileApp
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    
    /**
    * Gets the uploadState
    *
    * @return int The uploadState
    */
    public function getUploadState()
    {
        if (array_key_exists("uploadState", $this->_propDict)) {
            return $this->_propDict["uploadState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uploadState
    *
    * @param int $val The uploadState
    *
    * @return MobileApp
    */
    public function setUploadState($val)
    {
        $this->_propDict["uploadState"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the publishingState
    *
    * @return MobileAppPublishingState The publishingState
    */
    public function getPublishingState()
    {
        if (array_key_exists("publishingState", $this->_propDict)) {
            if (is_a($this->_propDict["publishingState"], "Microsoft\Graph\Beta\Model\MobileAppPublishingState")) {
                return $this->_propDict["publishingState"];
            } else {
                $this->_propDict["publishingState"] = new MobileAppPublishingState($this->_propDict["publishingState"]);
                return $this->_propDict["publishingState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishingState
    *
    * @param MobileAppPublishingState $val The publishingState
    *
    * @return MobileApp
    */
    public function setPublishingState($val)
    {
        $this->_propDict["publishingState"] = $val;
        return $this;
    }
    

     /** 
     * Gets the categories
     *
     * @return array The categories
     */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
           return $this->_propDict["categories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the categories
    *
    * @param MobileAppCategory $val The categories
    *
    * @return MobileApp
    */
    public function setCategories($val)
    {
		$this->_propDict["categories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    *
    * @param MobileAppAssignment $val The assignments
    *
    * @return MobileApp
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the installSummary
    *
    * @return MobileAppInstallSummary The installSummary
    */
    public function getInstallSummary()
    {
        if (array_key_exists("installSummary", $this->_propDict)) {
            if (is_a($this->_propDict["installSummary"], "Microsoft\Graph\Beta\Model\MobileAppInstallSummary")) {
                return $this->_propDict["installSummary"];
            } else {
                $this->_propDict["installSummary"] = new MobileAppInstallSummary($this->_propDict["installSummary"]);
                return $this->_propDict["installSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installSummary
    *
    * @param MobileAppInstallSummary $val The installSummary
    *
    * @return MobileApp
    */
    public function setInstallSummary($val)
    {
        $this->_propDict["installSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStatuses
     *
     * @return array The deviceStatuses
     */
    public function getDeviceStatuses()
    {
        if (array_key_exists("deviceStatuses", $this->_propDict)) {
           return $this->_propDict["deviceStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStatuses
    *
    * @param MobileAppInstallStatus $val The deviceStatuses
    *
    * @return MobileApp
    */
    public function setDeviceStatuses($val)
    {
		$this->_propDict["deviceStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStatuses
     *
     * @return array The userStatuses
     */
    public function getUserStatuses()
    {
        if (array_key_exists("userStatuses", $this->_propDict)) {
           return $this->_propDict["userStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userStatuses
    *
    * @param UserAppInstallStatus $val The userStatuses
    *
    * @return MobileApp
    */
    public function setUserStatuses($val)
    {
		$this->_propDict["userStatuses"] = $val;
        return $this;
    }
    
}