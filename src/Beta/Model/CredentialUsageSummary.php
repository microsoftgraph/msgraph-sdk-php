<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CredentialUsageSummary File
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
* CredentialUsageSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CredentialUsageSummary extends Entity
{
    /**
    * Gets the feature
    *
    * @return FeatureType The feature
    */
    public function getFeature()
    {
        if (array_key_exists("feature", $this->_propDict)) {
            if (is_a($this->_propDict["feature"], "Microsoft\Graph\Beta\Model\FeatureType")) {
                return $this->_propDict["feature"];
            } else {
                $this->_propDict["feature"] = new FeatureType($this->_propDict["feature"]);
                return $this->_propDict["feature"];
            }
        }
        return null;
    }
    
    /**
    * Sets the feature
    *
    * @param FeatureType $val The feature
    *
    * @return CredentialUsageSummary
    */
    public function setFeature($val)
    {
        $this->_propDict["feature"] = $val;
        return $this;
    }
    
    /**
    * Gets the successfulActivityCount
    *
    * @return int The successfulActivityCount
    */
    public function getSuccessfulActivityCount()
    {
        if (array_key_exists("successfulActivityCount", $this->_propDict)) {
            return $this->_propDict["successfulActivityCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successfulActivityCount
    *
    * @param int $val The successfulActivityCount
    *
    * @return CredentialUsageSummary
    */
    public function setSuccessfulActivityCount($val)
    {
        $this->_propDict["successfulActivityCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failureActivityCount
    *
    * @return int The failureActivityCount
    */
    public function getFailureActivityCount()
    {
        if (array_key_exists("failureActivityCount", $this->_propDict)) {
            return $this->_propDict["failureActivityCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failureActivityCount
    *
    * @param int $val The failureActivityCount
    *
    * @return CredentialUsageSummary
    */
    public function setFailureActivityCount($val)
    {
        $this->_propDict["failureActivityCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the authMethod
    *
    * @return AuthMethodsType The authMethod
    */
    public function getAuthMethod()
    {
        if (array_key_exists("authMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authMethod"], "Microsoft\Graph\Beta\Model\AuthMethodsType")) {
                return $this->_propDict["authMethod"];
            } else {
                $this->_propDict["authMethod"] = new AuthMethodsType($this->_propDict["authMethod"]);
                return $this->_propDict["authMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authMethod
    *
    * @param AuthMethodsType $val The authMethod
    *
    * @return CredentialUsageSummary
    */
    public function setAuthMethod($val)
    {
        $this->_propDict["authMethod"] = $val;
        return $this;
    }
    
}