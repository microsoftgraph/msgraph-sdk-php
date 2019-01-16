<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignIn File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* SignIn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SignIn extends Entity
{
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
    * @return SignIn
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return SignIn
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
    * @return SignIn
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
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
    * @return SignIn
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appId
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appId
    *
    * @param string $val The appId
    *
    * @return SignIn
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
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
    * @return SignIn
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
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
    * @return SignIn
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return SignInStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Model\SignInStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SignInStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param SignInStatus $val The status
    *
    * @return SignIn
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientAppUsed
    *
    * @return string The clientAppUsed
    */
    public function getClientAppUsed()
    {
        if (array_key_exists("clientAppUsed", $this->_propDict)) {
            return $this->_propDict["clientAppUsed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientAppUsed
    *
    * @param string $val The clientAppUsed
    *
    * @return SignIn
    */
    public function setClientAppUsed($val)
    {
        $this->_propDict["clientAppUsed"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceDetail
    *
    * @return DeviceDetail The deviceDetail
    */
    public function getDeviceDetail()
    {
        if (array_key_exists("deviceDetail", $this->_propDict)) {
            if (is_a($this->_propDict["deviceDetail"], "Microsoft\Graph\Model\DeviceDetail")) {
                return $this->_propDict["deviceDetail"];
            } else {
                $this->_propDict["deviceDetail"] = new DeviceDetail($this->_propDict["deviceDetail"]);
                return $this->_propDict["deviceDetail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceDetail
    *
    * @param DeviceDetail $val The deviceDetail
    *
    * @return SignIn
    */
    public function setDeviceDetail($val)
    {
        $this->_propDict["deviceDetail"] = $val;
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
            if (is_a($this->_propDict["location"], "Microsoft\Graph\Model\SignInLocation")) {
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
    * @return SignIn
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    
    /**
    * Gets the mfaDetail
    *
    * @return MfaDetail The mfaDetail
    */
    public function getMfaDetail()
    {
        if (array_key_exists("mfaDetail", $this->_propDict)) {
            if (is_a($this->_propDict["mfaDetail"], "Microsoft\Graph\Model\MfaDetail")) {
                return $this->_propDict["mfaDetail"];
            } else {
                $this->_propDict["mfaDetail"] = new MfaDetail($this->_propDict["mfaDetail"]);
                return $this->_propDict["mfaDetail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mfaDetail
    *
    * @param MfaDetail $val The mfaDetail
    *
    * @return SignIn
    */
    public function setMfaDetail($val)
    {
        $this->_propDict["mfaDetail"] = $val;
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
    * @return SignIn
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the conditionalAccessStatus
    *
    * @return ConditionalAccessStatus The conditionalAccessStatus
    */
    public function getConditionalAccessStatus()
    {
        if (array_key_exists("conditionalAccessStatus", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessStatus"], "Microsoft\Graph\Model\ConditionalAccessStatus")) {
                return $this->_propDict["conditionalAccessStatus"];
            } else {
                $this->_propDict["conditionalAccessStatus"] = new ConditionalAccessStatus($this->_propDict["conditionalAccessStatus"]);
                return $this->_propDict["conditionalAccessStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditionalAccessStatus
    *
    * @param ConditionalAccessStatus $val The conditionalAccessStatus
    *
    * @return SignIn
    */
    public function setConditionalAccessStatus($val)
    {
        $this->_propDict["conditionalAccessStatus"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appliedConditionalAccessPolicies
     *
     * @return array The appliedConditionalAccessPolicies
     */
    public function getAppliedConditionalAccessPolicies()
    {
        if (array_key_exists("appliedConditionalAccessPolicies", $this->_propDict)) {
           return $this->_propDict["appliedConditionalAccessPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appliedConditionalAccessPolicies
    *
    * @param AppliedConditionalAccessPolicy $val The appliedConditionalAccessPolicies
    *
    * @return SignIn
    */
    public function setAppliedConditionalAccessPolicies($val)
    {
		$this->_propDict["appliedConditionalAccessPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the originalRequestId
    *
    * @return string The originalRequestId
    */
    public function getOriginalRequestId()
    {
        if (array_key_exists("originalRequestId", $this->_propDict)) {
            return $this->_propDict["originalRequestId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the originalRequestId
    *
    * @param string $val The originalRequestId
    *
    * @return SignIn
    */
    public function setOriginalRequestId($val)
    {
        $this->_propDict["originalRequestId"] = $val;
        return $this;
    }
    
    /**
    * Gets the isInteractive
    *
    * @return bool The isInteractive
    */
    public function getIsInteractive()
    {
        if (array_key_exists("isInteractive", $this->_propDict)) {
            return $this->_propDict["isInteractive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isInteractive
    *
    * @param bool $val The isInteractive
    *
    * @return SignIn
    */
    public function setIsInteractive($val)
    {
        $this->_propDict["isInteractive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the tokenIssuerName
    *
    * @return string The tokenIssuerName
    */
    public function getTokenIssuerName()
    {
        if (array_key_exists("tokenIssuerName", $this->_propDict)) {
            return $this->_propDict["tokenIssuerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenIssuerName
    *
    * @param string $val The tokenIssuerName
    *
    * @return SignIn
    */
    public function setTokenIssuerName($val)
    {
        $this->_propDict["tokenIssuerName"] = $val;
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
            if (is_a($this->_propDict["tokenIssuerType"], "Microsoft\Graph\Model\TokenIssuerType")) {
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
    * @return SignIn
    */
    public function setTokenIssuerType($val)
    {
        $this->_propDict["tokenIssuerType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the authenticationProcessingDetails
     *
     * @return array The authenticationProcessingDetails
     */
    public function getAuthenticationProcessingDetails()
    {
        if (array_key_exists("authenticationProcessingDetails", $this->_propDict)) {
           return $this->_propDict["authenticationProcessingDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the authenticationProcessingDetails
    *
    * @param KeyValue $val The authenticationProcessingDetails
    *
    * @return SignIn
    */
    public function setAuthenticationProcessingDetails($val)
    {
		$this->_propDict["authenticationProcessingDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the networkLocationDetails
     *
     * @return array The networkLocationDetails
     */
    public function getNetworkLocationDetails()
    {
        if (array_key_exists("networkLocationDetails", $this->_propDict)) {
           return $this->_propDict["networkLocationDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the networkLocationDetails
    *
    * @param NetworkLocationDetail $val The networkLocationDetails
    *
    * @return SignIn
    */
    public function setNetworkLocationDetails($val)
    {
		$this->_propDict["networkLocationDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the processingTimeInMilliseconds
    *
    * @return int The processingTimeInMilliseconds
    */
    public function getProcessingTimeInMilliseconds()
    {
        if (array_key_exists("processingTimeInMilliseconds", $this->_propDict)) {
            return $this->_propDict["processingTimeInMilliseconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the processingTimeInMilliseconds
    *
    * @param int $val The processingTimeInMilliseconds
    *
    * @return SignIn
    */
    public function setProcessingTimeInMilliseconds($val)
    {
        $this->_propDict["processingTimeInMilliseconds"] = intval($val);
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
            if (is_a($this->_propDict["riskDetail"], "Microsoft\Graph\Model\RiskDetail")) {
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
    * @return SignIn
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskLevelAggregated
    *
    * @return RiskLevel The riskLevelAggregated
    */
    public function getRiskLevelAggregated()
    {
        if (array_key_exists("riskLevelAggregated", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevelAggregated"], "Microsoft\Graph\Model\RiskLevel")) {
                return $this->_propDict["riskLevelAggregated"];
            } else {
                $this->_propDict["riskLevelAggregated"] = new RiskLevel($this->_propDict["riskLevelAggregated"]);
                return $this->_propDict["riskLevelAggregated"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskLevelAggregated
    *
    * @param RiskLevel $val The riskLevelAggregated
    *
    * @return SignIn
    */
    public function setRiskLevelAggregated($val)
    {
        $this->_propDict["riskLevelAggregated"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskLevelDuringSignIn
    *
    * @return RiskLevel The riskLevelDuringSignIn
    */
    public function getRiskLevelDuringSignIn()
    {
        if (array_key_exists("riskLevelDuringSignIn", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevelDuringSignIn"], "Microsoft\Graph\Model\RiskLevel")) {
                return $this->_propDict["riskLevelDuringSignIn"];
            } else {
                $this->_propDict["riskLevelDuringSignIn"] = new RiskLevel($this->_propDict["riskLevelDuringSignIn"]);
                return $this->_propDict["riskLevelDuringSignIn"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskLevelDuringSignIn
    *
    * @param RiskLevel $val The riskLevelDuringSignIn
    *
    * @return SignIn
    */
    public function setRiskLevelDuringSignIn($val)
    {
        $this->_propDict["riskLevelDuringSignIn"] = $val;
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
            if (is_a($this->_propDict["riskState"], "Microsoft\Graph\Model\RiskState")) {
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
    * @return SignIn
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }
    

     /** 
     * Gets the riskEventTypes
     *
     * @return array The riskEventTypes
     */
    public function getRiskEventTypes()
    {
        if (array_key_exists("riskEventTypes", $this->_propDict)) {
           return $this->_propDict["riskEventTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the riskEventTypes
    *
    * @param RiskEventType $val The riskEventTypes
    *
    * @return SignIn
    */
    public function setRiskEventTypes($val)
    {
		$this->_propDict["riskEventTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceDisplayName
    *
    * @return string The resourceDisplayName
    */
    public function getResourceDisplayName()
    {
        if (array_key_exists("resourceDisplayName", $this->_propDict)) {
            return $this->_propDict["resourceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceDisplayName
    *
    * @param string $val The resourceDisplayName
    *
    * @return SignIn
    */
    public function setResourceDisplayName($val)
    {
        $this->_propDict["resourceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    *
    * @param string $val The resourceId
    *
    * @return SignIn
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethodsUsed
    *
    * @return string The authenticationMethodsUsed
    */
    public function getAuthenticationMethodsUsed()
    {
        if (array_key_exists("authenticationMethodsUsed", $this->_propDict)) {
            return $this->_propDict["authenticationMethodsUsed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationMethodsUsed
    *
    * @param string $val The authenticationMethodsUsed
    *
    * @return SignIn
    */
    public function setAuthenticationMethodsUsed($val)
    {
        $this->_propDict["authenticationMethodsUsed"] = $val;
        return $this;
    }
    
}