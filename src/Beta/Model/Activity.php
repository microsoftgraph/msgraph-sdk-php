<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Activity File
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
* Activity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Activity extends Entity
{
    /**
    * Gets the visualElements
    *
    * @return VisualInfo The visualElements
    */
    public function getVisualElements()
    {
        if (array_key_exists("visualElements", $this->_propDict)) {
            if (is_a($this->_propDict["visualElements"], "Microsoft\Graph\Model\VisualInfo")) {
                return $this->_propDict["visualElements"];
            } else {
                $this->_propDict["visualElements"] = new VisualInfo($this->_propDict["visualElements"]);
                return $this->_propDict["visualElements"];
            }
        }
        return null;
    }
    
    /**
    * Sets the visualElements
    *
    * @param VisualInfo $val The visualElements
    *
    * @return Activity
    */
    public function setVisualElements($val)
    {
        $this->_propDict["visualElements"] = $val;
        return $this;
    }
    
    /**
    * Gets the activitySourceHost
    *
    * @return string The activitySourceHost
    */
    public function getActivitySourceHost()
    {
        if (array_key_exists("activitySourceHost", $this->_propDict)) {
            return $this->_propDict["activitySourceHost"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activitySourceHost
    *
    * @param string $val The activitySourceHost
    *
    * @return Activity
    */
    public function setActivitySourceHost($val)
    {
        $this->_propDict["activitySourceHost"] = $val;
        return $this;
    }
    
    /**
    * Gets the activationUrl
    *
    * @return string The activationUrl
    */
    public function getActivationUrl()
    {
        if (array_key_exists("activationUrl", $this->_propDict)) {
            return $this->_propDict["activationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activationUrl
    *
    * @param string $val The activationUrl
    *
    * @return Activity
    */
    public function setActivationUrl($val)
    {
        $this->_propDict["activationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActivityId
    *
    * @return string The appActivityId
    */
    public function getAppActivityId()
    {
        if (array_key_exists("appActivityId", $this->_propDict)) {
            return $this->_propDict["appActivityId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appActivityId
    *
    * @param string $val The appActivityId
    *
    * @return Activity
    */
    public function setAppActivityId($val)
    {
        $this->_propDict["appActivityId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    *
    * @param string $val The appDisplayName
    *
    * @return Activity
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentUrl
    *
    * @return string The contentUrl
    */
    public function getContentUrl()
    {
        if (array_key_exists("contentUrl", $this->_propDict)) {
            return $this->_propDict["contentUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentUrl
    *
    * @param string $val The contentUrl
    *
    * @return Activity
    */
    public function setContentUrl($val)
    {
        $this->_propDict["contentUrl"] = $val;
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
    * @return Activity
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return Activity
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the fallbackUrl
    *
    * @return string The fallbackUrl
    */
    public function getFallbackUrl()
    {
        if (array_key_exists("fallbackUrl", $this->_propDict)) {
            return $this->_propDict["fallbackUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fallbackUrl
    *
    * @param string $val The fallbackUrl
    *
    * @return Activity
    */
    public function setFallbackUrl($val)
    {
        $this->_propDict["fallbackUrl"] = $val;
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
    * @return Activity
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the userTimezone
    *
    * @return string The userTimezone
    */
    public function getUserTimezone()
    {
        if (array_key_exists("userTimezone", $this->_propDict)) {
            return $this->_propDict["userTimezone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userTimezone
    *
    * @param string $val The userTimezone
    *
    * @return Activity
    */
    public function setUserTimezone($val)
    {
        $this->_propDict["userTimezone"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentInfo
    *
    * @return string The contentInfo
    */
    public function getContentInfo()
    {
        if (array_key_exists("contentInfo", $this->_propDict)) {
            return $this->_propDict["contentInfo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentInfo
    *
    * @param string $val The contentInfo
    *
    * @return Activity
    */
    public function setContentInfo($val)
    {
        $this->_propDict["contentInfo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the historyItems
     *
     * @return array The historyItems
     */
    public function getHistoryItems()
    {
        if (array_key_exists("historyItems", $this->_propDict)) {
           return $this->_propDict["historyItems"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the historyItems
    *
    * @param HistoryItem $val The historyItems
    *
    * @return Activity
    */
    public function setHistoryItems($val)
    {
		$this->_propDict["historyItems"] = $val;
        return $this;
    }
    
}