<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FeatureRolloutPolicy File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* FeatureRolloutPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FeatureRolloutPolicy extends Entity
{
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
    * @return FeatureRolloutPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return FeatureRolloutPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the feature
    *
    * @return StagedFeatureName The feature
    */
    public function getFeature()
    {
        if (array_key_exists("feature", $this->_propDict)) {
            if (is_a($this->_propDict["feature"], "Beta\Microsoft\Graph\Model\StagedFeatureName")) {
                return $this->_propDict["feature"];
            } else {
                $this->_propDict["feature"] = new StagedFeatureName($this->_propDict["feature"]);
                return $this->_propDict["feature"];
            }
        }
        return null;
    }
    
    /**
    * Sets the feature
    *
    * @param StagedFeatureName $val The feature
    *
    * @return FeatureRolloutPolicy
    */
    public function setFeature($val)
    {
        $this->_propDict["feature"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAppliedToOrganization
    *
    * @return bool The isAppliedToOrganization
    */
    public function getIsAppliedToOrganization()
    {
        if (array_key_exists("isAppliedToOrganization", $this->_propDict)) {
            return $this->_propDict["isAppliedToOrganization"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAppliedToOrganization
    *
    * @param bool $val The isAppliedToOrganization
    *
    * @return FeatureRolloutPolicy
    */
    public function setIsAppliedToOrganization($val)
    {
        $this->_propDict["isAppliedToOrganization"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return FeatureRolloutPolicy
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the appliesTo
     *
     * @return array The appliesTo
     */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
           return $this->_propDict["appliesTo"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appliesTo
    *
    * @param DirectoryObject $val The appliesTo
    *
    * @return FeatureRolloutPolicy
    */
    public function setAppliesTo($val)
    {
		$this->_propDict["appliesTo"] = $val;
        return $this;
    }
    
}