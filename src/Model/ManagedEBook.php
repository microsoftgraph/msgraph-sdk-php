<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedEBook File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* ManagedEBook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedEBook extends Entity
{
    /**
    * Gets the createdDateTime
    * The date and time when the eBook file was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
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
    * The date and time when the eBook file was created.
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
    * Gets the description
    * Description.
    *
    * @return string|null The description
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
    * Description.
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
    * Gets the displayName
    * Name of the eBook.
    *
    * @return string|null The displayName
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
    * Name of the eBook.
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
    * Gets the informationUrl
    * The more information Url.
    *
    * @return string|null The informationUrl
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
    * The more information Url.
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
    * Gets the largeCover
    * Book cover.
    *
    * @return MimeContent|null The largeCover
    */
    public function getLargeCover()
    {
        if (array_key_exists("largeCover", $this->_propDict) && !is_null($this->_propDict["largeCover"])) {
            if (is_a($this->_propDict["largeCover"], "\Microsoft\Graph\Model\MimeContent")) {
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
    * Book cover.
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
    * Gets the lastModifiedDateTime
    * The date and time when the eBook was last modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict) && !is_null($this->_propDict["lastModifiedDateTime"])) {
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
    * The date and time when the eBook was last modified.
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
    * Gets the privacyInformationUrl
    * The privacy statement Url.
    *
    * @return string|null The privacyInformationUrl
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
    * The privacy statement Url.
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
    * Gets the publishedDateTime
    * The date and time when the eBook was published.
    *
    * @return \DateTime|null The publishedDateTime
    */
    public function getPublishedDateTime()
    {
        if (array_key_exists("publishedDateTime", $this->_propDict) && !is_null($this->_propDict["publishedDateTime"])) {
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
    * The date and time when the eBook was published.
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
    * Gets the publisher
    * Publisher.
    *
    * @return string|null The publisher
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
    * Publisher.
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
     * Gets the assignments
    * The list of assignments for this eBook.
     *
     * @return ManagedEBookAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
            $assignments = [];
            if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'ManagedEBookAssignment')) {
                return $this->_propDict['assignments'];
            }
            foreach ($this->_propDict['assignments'] as $singleValue) {
                $assignments []= new ManagedEBookAssignment($singleValue);
            }
            $this->_propDict['assignments'] = $assignments;
            return $this->_propDict['assignments'];
        }
        return null;
    }
    
    /** 
    * Sets the assignments
    * The list of assignments for this eBook.
    *
    * @param ManagedEBookAssignment[] $val The assignments
    *
    * @return ManagedEBook
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStates
    * The list of installation states for this eBook.
     *
     * @return DeviceInstallState[]|null The deviceStates
     */
    public function getDeviceStates()
    {
        if (array_key_exists('deviceStates', $this->_propDict) && !is_null($this->_propDict['deviceStates'])) {
            $deviceStates = [];
            if (count($this->_propDict['deviceStates']) > 0 && is_a($this->_propDict['deviceStates'][0], 'DeviceInstallState')) {
                return $this->_propDict['deviceStates'];
            }
            foreach ($this->_propDict['deviceStates'] as $singleValue) {
                $deviceStates []= new DeviceInstallState($singleValue);
            }
            $this->_propDict['deviceStates'] = $deviceStates;
            return $this->_propDict['deviceStates'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceStates
    * The list of installation states for this eBook.
    *
    * @param DeviceInstallState[] $val The deviceStates
    *
    * @return ManagedEBook
    */
    public function setDeviceStates($val)
    {
        $this->_propDict["deviceStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the installSummary
    * Mobile App Install Summary.
    *
    * @return EBookInstallSummary|null The installSummary
    */
    public function getInstallSummary()
    {
        if (array_key_exists("installSummary", $this->_propDict) && !is_null($this->_propDict["installSummary"])) {
            if (is_a($this->_propDict["installSummary"], "\Microsoft\Graph\Model\EBookInstallSummary")) {
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
    * Mobile App Install Summary.
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
     * Gets the userStateSummary
    * The list of installation states for this eBook.
     *
     * @return UserInstallStateSummary[]|null The userStateSummary
     */
    public function getUserStateSummary()
    {
        if (array_key_exists('userStateSummary', $this->_propDict) && !is_null($this->_propDict['userStateSummary'])) {
            $userStateSummary = [];
            if (count($this->_propDict['userStateSummary']) > 0 && is_a($this->_propDict['userStateSummary'][0], 'UserInstallStateSummary')) {
                return $this->_propDict['userStateSummary'];
            }
            foreach ($this->_propDict['userStateSummary'] as $singleValue) {
                $userStateSummary []= new UserInstallStateSummary($singleValue);
            }
            $this->_propDict['userStateSummary'] = $userStateSummary;
            return $this->_propDict['userStateSummary'];
        }
        return null;
    }
    
    /** 
    * Sets the userStateSummary
    * The list of installation states for this eBook.
    *
    * @param UserInstallStateSummary[] $val The userStateSummary
    *
    * @return ManagedEBook
    */
    public function setUserStateSummary($val)
    {
        $this->_propDict["userStateSummary"] = $val;
        return $this;
    }
    
}
