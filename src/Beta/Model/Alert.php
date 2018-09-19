<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Alert File
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
* Alert class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Alert extends Entity
{
    /**
    * Gets the activityGroupName
    *
    * @return string The activityGroupName
    */
    public function getActivityGroupName()
    {
        if (array_key_exists("activityGroupName", $this->_propDict)) {
            return $this->_propDict["activityGroupName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityGroupName
    *
    * @param string $val The activityGroupName
    *
    * @return Alert
    */
    public function setActivityGroupName($val)
    {
        $this->_propDict["activityGroupName"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignedTo
    *
    * @return string The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            return $this->_propDict["assignedTo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedTo
    *
    * @param string $val The assignedTo
    *
    * @return Alert
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureSubscriptionId
    *
    * @return string The azureSubscriptionId
    */
    public function getAzureSubscriptionId()
    {
        if (array_key_exists("azureSubscriptionId", $this->_propDict)) {
            return $this->_propDict["azureSubscriptionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureSubscriptionId
    *
    * @param string $val The azureSubscriptionId
    *
    * @return Alert
    */
    public function setAzureSubscriptionId($val)
    {
        $this->_propDict["azureSubscriptionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureTenantId
    *
    * @return string The azureTenantId
    */
    public function getAzureTenantId()
    {
        if (array_key_exists("azureTenantId", $this->_propDict)) {
            return $this->_propDict["azureTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureTenantId
    *
    * @param string $val The azureTenantId
    *
    * @return Alert
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
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
    * @param string $val The category
    *
    * @return Alert
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the closedDateTime
    *
    * @return \DateTime The closedDateTime
    */
    public function getClosedDateTime()
    {
        if (array_key_exists("closedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["closedDateTime"], "\DateTime")) {
                return $this->_propDict["closedDateTime"];
            } else {
                $this->_propDict["closedDateTime"] = new \DateTime($this->_propDict["closedDateTime"]);
                return $this->_propDict["closedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the closedDateTime
    *
    * @param \DateTime $val The closedDateTime
    *
    * @return Alert
    */
    public function setClosedDateTime($val)
    {
        $this->_propDict["closedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudAppStates
     *
     * @return array The cloudAppStates
     */
    public function getCloudAppStates()
    {
        if (array_key_exists("cloudAppStates", $this->_propDict)) {
           return $this->_propDict["cloudAppStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cloudAppStates
    *
    * @param CloudAppSecurityState $val The cloudAppStates
    *
    * @return Alert
    */
    public function setCloudAppStates($val)
    {
		$this->_propDict["cloudAppStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the comments
    *
    * @return string The comments
    */
    public function getComments()
    {
        if (array_key_exists("comments", $this->_propDict)) {
            return $this->_propDict["comments"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the comments
    *
    * @param string $val The comments
    *
    * @return Alert
    */
    public function setComments($val)
    {
        $this->_propDict["comments"] = $val;
        return $this;
    }
    
    /**
    * Gets the confidence
    *
    * @return int The confidence
    */
    public function getConfidence()
    {
        if (array_key_exists("confidence", $this->_propDict)) {
            return $this->_propDict["confidence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the confidence
    *
    * @param int $val The confidence
    *
    * @return Alert
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = intval($val);
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
    * @return Alert
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return Alert
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the detectionIds
    *
    * @return string The detectionIds
    */
    public function getDetectionIds()
    {
        if (array_key_exists("detectionIds", $this->_propDict)) {
            return $this->_propDict["detectionIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the detectionIds
    *
    * @param string $val The detectionIds
    *
    * @return Alert
    */
    public function setDetectionIds($val)
    {
        $this->_propDict["detectionIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the eventDateTime
    *
    * @return \DateTime The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime")) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eventDateTime
    *
    * @param \DateTime $val The eventDateTime
    *
    * @return Alert
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the feedback
    *
    * @return AlertFeedback The feedback
    */
    public function getFeedback()
    {
        if (array_key_exists("feedback", $this->_propDict)) {
            if (is_a($this->_propDict["feedback"], "Microsoft\Graph\Beta\Model\AlertFeedback")) {
                return $this->_propDict["feedback"];
            } else {
                $this->_propDict["feedback"] = new AlertFeedback($this->_propDict["feedback"]);
                return $this->_propDict["feedback"];
            }
        }
        return null;
    }
    
    /**
    * Sets the feedback
    *
    * @param AlertFeedback $val The feedback
    *
    * @return Alert
    */
    public function setFeedback($val)
    {
        $this->_propDict["feedback"] = $val;
        return $this;
    }
    

     /** 
     * Gets the fileStates
     *
     * @return array The fileStates
     */
    public function getFileStates()
    {
        if (array_key_exists("fileStates", $this->_propDict)) {
           return $this->_propDict["fileStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the fileStates
    *
    * @param FileSecurityState $val The fileStates
    *
    * @return Alert
    */
    public function setFileStates($val)
    {
		$this->_propDict["fileStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the hostStates
     *
     * @return array The hostStates
     */
    public function getHostStates()
    {
        if (array_key_exists("hostStates", $this->_propDict)) {
           return $this->_propDict["hostStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the hostStates
    *
    * @param HostSecurityState $val The hostStates
    *
    * @return Alert
    */
    public function setHostStates($val)
    {
		$this->_propDict["hostStates"] = $val;
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
    * @return Alert
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the malwareStates
     *
     * @return array The malwareStates
     */
    public function getMalwareStates()
    {
        if (array_key_exists("malwareStates", $this->_propDict)) {
           return $this->_propDict["malwareStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the malwareStates
    *
    * @param MalwareState $val The malwareStates
    *
    * @return Alert
    */
    public function setMalwareStates($val)
    {
		$this->_propDict["malwareStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the networkConnections
     *
     * @return array The networkConnections
     */
    public function getNetworkConnections()
    {
        if (array_key_exists("networkConnections", $this->_propDict)) {
           return $this->_propDict["networkConnections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the networkConnections
    *
    * @param NetworkConnection $val The networkConnections
    *
    * @return Alert
    */
    public function setNetworkConnections($val)
    {
		$this->_propDict["networkConnections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the processes
     *
     * @return array The processes
     */
    public function getProcesses()
    {
        if (array_key_exists("processes", $this->_propDict)) {
           return $this->_propDict["processes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the processes
    *
    * @param Process $val The processes
    *
    * @return Alert
    */
    public function setProcesses($val)
    {
		$this->_propDict["processes"] = $val;
        return $this;
    }
    
    /**
    * Gets the recommendedActions
    *
    * @return string The recommendedActions
    */
    public function getRecommendedActions()
    {
        if (array_key_exists("recommendedActions", $this->_propDict)) {
            return $this->_propDict["recommendedActions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recommendedActions
    *
    * @param string $val The recommendedActions
    *
    * @return Alert
    */
    public function setRecommendedActions($val)
    {
        $this->_propDict["recommendedActions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registryKeyStates
     *
     * @return array The registryKeyStates
     */
    public function getRegistryKeyStates()
    {
        if (array_key_exists("registryKeyStates", $this->_propDict)) {
           return $this->_propDict["registryKeyStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the registryKeyStates
    *
    * @param RegistryKeyState $val The registryKeyStates
    *
    * @return Alert
    */
    public function setRegistryKeyStates($val)
    {
		$this->_propDict["registryKeyStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the severity
    *
    * @return AlertSeverity The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "Microsoft\Graph\Beta\Model\AlertSeverity")) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new AlertSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the severity
    *
    * @param AlertSeverity $val The severity
    *
    * @return Alert
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceMaterials
    *
    * @return string The sourceMaterials
    */
    public function getSourceMaterials()
    {
        if (array_key_exists("sourceMaterials", $this->_propDict)) {
            return $this->_propDict["sourceMaterials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sourceMaterials
    *
    * @param string $val The sourceMaterials
    *
    * @return Alert
    */
    public function setSourceMaterials($val)
    {
        $this->_propDict["sourceMaterials"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return AlertStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Beta\Model\AlertStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AlertStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param AlertStatus $val The status
    *
    * @return Alert
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the tags
    *
    * @return string The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    *
    * @param string $val The tags
    *
    * @return Alert
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    *
    * @param string $val The title
    *
    * @return Alert
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    

     /** 
     * Gets the triggers
     *
     * @return array The triggers
     */
    public function getTriggers()
    {
        if (array_key_exists("triggers", $this->_propDict)) {
           return $this->_propDict["triggers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the triggers
    *
    * @param AlertTrigger $val The triggers
    *
    * @return Alert
    */
    public function setTriggers($val)
    {
		$this->_propDict["triggers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStates
     *
     * @return array The userStates
     */
    public function getUserStates()
    {
        if (array_key_exists("userStates", $this->_propDict)) {
           return $this->_propDict["userStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userStates
    *
    * @param UserSecurityState $val The userStates
    *
    * @return Alert
    */
    public function setUserStates($val)
    {
		$this->_propDict["userStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorInformation
    *
    * @return SecurityVendorInformation The vendorInformation
    */
    public function getVendorInformation()
    {
        if (array_key_exists("vendorInformation", $this->_propDict)) {
            if (is_a($this->_propDict["vendorInformation"], "Microsoft\Graph\Beta\Model\SecurityVendorInformation")) {
                return $this->_propDict["vendorInformation"];
            } else {
                $this->_propDict["vendorInformation"] = new SecurityVendorInformation($this->_propDict["vendorInformation"]);
                return $this->_propDict["vendorInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vendorInformation
    *
    * @param SecurityVendorInformation $val The vendorInformation
    *
    * @return Alert
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the vulnerabilityStates
     *
     * @return array The vulnerabilityStates
     */
    public function getVulnerabilityStates()
    {
        if (array_key_exists("vulnerabilityStates", $this->_propDict)) {
           return $this->_propDict["vulnerabilityStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the vulnerabilityStates
    *
    * @param VulnerabilityState $val The vulnerabilityStates
    *
    * @return Alert
    */
    public function setVulnerabilityStates($val)
    {
		$this->_propDict["vulnerabilityStates"] = $val;
        return $this;
    }
    
}