<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationIdentityMatchingOptions File
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
* EducationIdentityMatchingOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationIdentityMatchingOptions extends Entity
{

    /**
    * Gets the appliesTo
    *
    * @return EducationUserRole The appliesTo
    */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
            if (is_a($this->_propDict["appliesTo"], "Beta\Microsoft\Graph\Model\EducationUserRole")) {
                return $this->_propDict["appliesTo"];
            } else {
                $this->_propDict["appliesTo"] = new EducationUserRole($this->_propDict["appliesTo"]);
                return $this->_propDict["appliesTo"];
            }
        }
        return null;
    }

    /**
    * Sets the appliesTo
    *
    * @param EducationUserRole $val The value to assign to the appliesTo
    *
    * @return EducationIdentityMatchingOptions The EducationIdentityMatchingOptions
    */
    public function setAppliesTo($val)
    {
        $this->_propDict["appliesTo"] = $val;
         return $this;
    }
    /**
    * Gets the sourcePropertyName
    *
    * @return string The sourcePropertyName
    */
    public function getSourcePropertyName()
    {
        if (array_key_exists("sourcePropertyName", $this->_propDict)) {
            return $this->_propDict["sourcePropertyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourcePropertyName
    *
    * @param string $val The value of the sourcePropertyName
    *
    * @return EducationIdentityMatchingOptions
    */
    public function setSourcePropertyName($val)
    {
        $this->_propDict["sourcePropertyName"] = $val;
        return $this;
    }
    /**
    * Gets the targetPropertyName
    *
    * @return string The targetPropertyName
    */
    public function getTargetPropertyName()
    {
        if (array_key_exists("targetPropertyName", $this->_propDict)) {
            return $this->_propDict["targetPropertyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetPropertyName
    *
    * @param string $val The value of the targetPropertyName
    *
    * @return EducationIdentityMatchingOptions
    */
    public function setTargetPropertyName($val)
    {
        $this->_propDict["targetPropertyName"] = $val;
        return $this;
    }
    /**
    * Gets the targetDomain
    *
    * @return string The targetDomain
    */
    public function getTargetDomain()
    {
        if (array_key_exists("targetDomain", $this->_propDict)) {
            return $this->_propDict["targetDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetDomain
    *
    * @param string $val The value of the targetDomain
    *
    * @return EducationIdentityMatchingOptions
    */
    public function setTargetDomain($val)
    {
        $this->_propDict["targetDomain"] = $val;
        return $this;
    }
}
