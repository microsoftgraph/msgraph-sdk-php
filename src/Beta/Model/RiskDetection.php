<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskDetection File
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
* RiskDetection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RiskDetection extends Entity
{
    /**
    * Gets the requestId
    *
    * @return string The requestId
    */
    public function getRequestId()
    {
        if (array_key_exists("requestId", $this->_propDict)) {
            return $this->_propDict["requestId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestId
    *
    * @param string $val The requestId
    *
    * @return RiskDetection
    */
    public function setRequestId($val)
    {
        $this->_propDict["requestId"] = $val;
        return $this;
    }
    
    /**
    * Gets the correlationId
    *
    * @return string The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the correlationId
    *
    * @param string $val The correlationId
    *
    * @return RiskDetection
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskType
    *
    * @return RiskEventType The riskType
    */
    public function getRiskType()
    {
        if (array_key_exists("riskType", $this->_propDict)) {
            if (is_a($this->_propDict["riskType"], "Microsoft\Graph\Beta\Model\RiskEventType")) {
                return $this->_propDict["riskType"];
            } else {
                $this->_propDict["riskType"] = new RiskEventType($this->_propDict["riskType"]);
                return $this->_propDict["riskType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskType
    *
    * @param RiskEventType $val The riskType
    *
    * @return RiskDetection
    */
    public function setRiskType($val)
    {
        $this->_propDict["riskType"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskState
    *
    * @return RiskState The riskState
    */
    public function getRiskState()
    {
        if (array_key_exists("riskState", $this->_propDict)) {
            if (is_a($this->_propDict["riskState"], "Microsoft\Graph\Beta\Model\RiskState")) {
                return $this->_propDict["riskState"];
            } else {
                $this->_propDict["riskState"] = new RiskState($this->_propDict["riskState"]);
                return $this->_propDict["riskState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskState
    *
    * @param RiskState $val The riskState
    *
    * @return RiskDetection
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskLevel
    *
    * @return RiskLevel The riskLevel
    */
    public function getRiskLevel()
    {
        if (array_key_exists("riskLevel", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevel"], "Microsoft\Graph\Beta\Model\RiskLevel")) {
                return $this->_propDict["riskLevel"];
            } else {
                $this->_propDict["riskLevel"] = new RiskLevel($this->_propDict["riskLevel"]);
                return $this->_propDict["riskLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskLevel
    *
    * @param RiskLevel $val The riskLevel
    *
    * @return RiskDetection
    */
    public function setRiskLevel($val)
    {
        $this->_propDict["riskLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskDetail
    *
    * @return RiskDetail The riskDetail
    */
    public function getRiskDetail()
    {
        if (array_key_exists("riskDetail", $this->_propDict)) {
            if (is_a($this->_propDict["riskDetail"], "Microsoft\Graph\Beta\Model\RiskDetail")) {
                return $this->_propDict["riskDetail"];
            } else {
                $this->_propDict["riskDetail"] = new RiskDetail($this->_propDict["riskDetail"]);
                return $this->_propDict["riskDetail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskDetail
    *
    * @param RiskDetail $val The riskDetail
    *
    * @return RiskDetection
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }
    
    /**
    * Gets the source
    *
    * @return string The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            return $this->_propDict["source"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the source
    *
    * @param string $val The source
    *
    * @return RiskDetection
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
    
    /**
    * Gets the detectionTimingType
    *
    * @return RiskDetectionTimingType The detectionTimingType
    */
    public function getDetectionTimingType()
    {
        if (array_key_exists("detectionTimingType", $this->_propDict)) {
            if (is_a($this->_propDict["detectionTimingType"], "Microsoft\Graph\Beta\Model\RiskDetectionTimingType")) {
                return $this->_propDict["detectionTimingType"];
            } else {
                $this->_propDict["detectionTimingType"] = new RiskDetectionTimingType($this->_propDict["detectionTimingType"]);
                return $this->_propDict["detectionTimingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the detectionTimingType
    *
    * @param RiskDetectionTimingType $val The detectionTimingType
    *
    * @return RiskDetection
    */
    public function setDetectionTimingType($val)
    {
        $this->_propDict["detectionTimingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the activity
    *
    * @return ActivityType The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "Microsoft\Graph\Beta\Model\ActivityType")) {
                return $this->_propDict["activity"];
            } else {
                $this->_propDict["activity"] = new ActivityType($this->_propDict["activity"]);
                return $this->_propDict["activity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activity
    *
    * @param ActivityType $val The activity
    *
    * @return RiskDetection
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenIssuerType
    *
    * @return TokenIssuerType The tokenIssuerType
    */
    public function getTokenIssuerType()
    {
        if (array_key_exists("tokenIssuerType", $this->_propDict)) {
            if (is_a($this->_propDict["tokenIssuerType"], "Microsoft\Graph\Beta\Model\TokenIssuerType")) {
                return $this->_propDict["tokenIssuerType"];
            } else {
                $this->_propDict["tokenIssuerType"] = new TokenIssuerType($this->_propDict["tokenIssuerType"]);
                return $this->_propDict["tokenIssuerType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tokenIssuerType
    *
    * @param TokenIssuerType $val The tokenIssuerType
    *
    * @return RiskDetection
    */
    public function setTokenIssuerType($val)
    {
        $this->_propDict["tokenIssuerType"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipAddress
    *
    * @return string The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipAddress
    *
    * @param string $val The ipAddress
    *
    * @return RiskDetection
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the location
    *
    * @return SignInLocation The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "Microsoft\Graph\Beta\Model\SignInLocation")) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new SignInLocation($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }
    
    /**
    * Sets the location
    *
    * @param SignInLocation $val The location
    *
    * @return RiskDetection
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityDateTime
    *
    * @return \DateTime The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime")) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activityDateTime
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return RiskDetection
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the detectedDateTime
    *
    * @return \DateTime The detectedDateTime
    */
    public function getDetectedDateTime()
    {
        if (array_key_exists("detectedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["detectedDateTime"], "\DateTime")) {
                return $this->_propDict["detectedDateTime"];
            } else {
                $this->_propDict["detectedDateTime"] = new \DateTime($this->_propDict["detectedDateTime"]);
                return $this->_propDict["detectedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the detectedDateTime
    *
    * @param \DateTime $val The detectedDateTime
    *
    * @return RiskDetection
    */
    public function setDetectedDateTime($val)
    {
        $this->_propDict["detectedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdatedDateTime
    *
    * @return \DateTime The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdatedDateTime
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return RiskDetection
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return RiskDetection
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    *
    * @return string The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userDisplayName
    *
    * @param string $val The userDisplayName
    *
    * @return RiskDetection
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
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
    * @return RiskDetection
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the additionalInfo
    *
    * @return string The additionalInfo
    */
    public function getAdditionalInfo()
    {
        if (array_key_exists("additionalInfo", $this->_propDict)) {
            return $this->_propDict["additionalInfo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the additionalInfo
    *
    * @param string $val The additionalInfo
    *
    * @return RiskDetection
    */
    public function setAdditionalInfo($val)
    {
        $this->_propDict["additionalInfo"] = $val;
        return $this;
    }
    
}