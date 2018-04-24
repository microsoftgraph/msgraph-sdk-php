<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedEBook File
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
* ManagedEBook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagedEBook extends Entity
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
    * @return ManagedEBook
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
    * @return ManagedEBook
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
    * @return ManagedEBook
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishedDateTime
    *
    * @return \DateTime The publishedDateTime
    */
    public function getPublishedDateTime()
    {
        if (array_key_exists("publishedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["publishedDateTime"], "\DateTime")) {
                return $this->_propDict["publishedDateTime"];
            } else {
                $this->_propDict["publishedDateTime"] = new \DateTime($this->_propDict["publishedDateTime"]);
                return $this->_propDict["publishedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishedDateTime
    *
    * @param \DateTime $val The publishedDateTime
    *
    * @return ManagedEBook
    */
    public function setPublishedDateTime($val)
    {
        $this->_propDict["publishedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the largeCover
    *
    * @return MimeContent The largeCover
    */
    public function getLargeCover()
    {
        if (array_key_exists("largeCover", $this->_propDict)) {
            if (is_a($this->_propDict["largeCover"], "Microsoft\Graph\Beta\Model\MimeContent")) {
                return $this->_propDict["largeCover"];
            } else {
                $this->_propDict["largeCover"] = new MimeContent($this->_propDict["largeCover"]);
                return $this->_propDict["largeCover"];
            }
        }
        return null;
    }
    
    /**
    * Sets the largeCover
    *
    * @param MimeContent $val The largeCover
    *
    * @return ManagedEBook
    */
    public function setLargeCover($val)
    {
        $this->_propDict["largeCover"] = $val;
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
    * @return ManagedEBook
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
    * @return ManagedEBook
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
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
    * @return ManagedEBook
    */
    public function setInformationUrl($val)
    {
        $this->_propDict["informationUrl"] = $val;
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
    * @return ManagedEBook
    */
    public function setPrivacyInformationUrl($val)
    {
        $this->_propDict["privacyInformationUrl"] = $val;
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
    * @param ManagedEBookCategory $val The categories
    *
    * @return ManagedEBook
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
    * @param ManagedEBookAssignment $val The assignments
    *
    * @return ManagedEBook
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the installSummary
    *
    * @return EBookInstallSummary The installSummary
    */
    public function getInstallSummary()
    {
        if (array_key_exists("installSummary", $this->_propDict)) {
            if (is_a($this->_propDict["installSummary"], "Microsoft\Graph\Beta\Model\EBookInstallSummary")) {
                return $this->_propDict["installSummary"];
            } else {
                $this->_propDict["installSummary"] = new EBookInstallSummary($this->_propDict["installSummary"]);
                return $this->_propDict["installSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installSummary
    *
    * @param EBookInstallSummary $val The installSummary
    *
    * @return ManagedEBook
    */
    public function setInstallSummary($val)
    {
        $this->_propDict["installSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStates
     *
     * @return array The deviceStates
     */
    public function getDeviceStates()
    {
        if (array_key_exists("deviceStates", $this->_propDict)) {
           return $this->_propDict["deviceStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStates
    *
    * @param DeviceInstallState $val The deviceStates
    *
    * @return ManagedEBook
    */
    public function setDeviceStates($val)
    {
		$this->_propDict["deviceStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStateSummary
     *
     * @return array The userStateSummary
     */
    public function getUserStateSummary()
    {
        if (array_key_exists("userStateSummary", $this->_propDict)) {
           return $this->_propDict["userStateSummary"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userStateSummary
    *
    * @param UserInstallStateSummary $val The userStateSummary
    *
    * @return ManagedEBook
    */
    public function setUserStateSummary($val)
    {
		$this->_propDict["userStateSummary"] = $val;
        return $this;
    }
    
}