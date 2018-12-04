<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10SecureAssessmentConfiguration File
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
* Windows10SecureAssessmentConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Windows10SecureAssessmentConfiguration extends DeviceConfiguration
{
    /**
    * Gets the launchUri
    *
    * @return string The launchUri
    */
    public function getLaunchUri()
    {
        if (array_key_exists("launchUri", $this->_propDict)) {
            return $this->_propDict["launchUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the launchUri
    *
    * @param string $val The launchUri
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setLaunchUri($val)
    {
        $this->_propDict["launchUri"] = $val;
        return $this;
    }
    
    /**
    * Gets the configurationAccount
    *
    * @return string The configurationAccount
    */
    public function getConfigurationAccount()
    {
        if (array_key_exists("configurationAccount", $this->_propDict)) {
            return $this->_propDict["configurationAccount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationAccount
    *
    * @param string $val The configurationAccount
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setConfigurationAccount($val)
    {
        $this->_propDict["configurationAccount"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowPrinting
    *
    * @return bool The allowPrinting
    */
    public function getAllowPrinting()
    {
        if (array_key_exists("allowPrinting", $this->_propDict)) {
            return $this->_propDict["allowPrinting"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowPrinting
    *
    * @param bool $val The allowPrinting
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setAllowPrinting($val)
    {
        $this->_propDict["allowPrinting"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowScreenCapture
    *
    * @return bool The allowScreenCapture
    */
    public function getAllowScreenCapture()
    {
        if (array_key_exists("allowScreenCapture", $this->_propDict)) {
            return $this->_propDict["allowScreenCapture"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowScreenCapture
    *
    * @param bool $val The allowScreenCapture
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setAllowScreenCapture($val)
    {
        $this->_propDict["allowScreenCapture"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowTextSuggestion
    *
    * @return bool The allowTextSuggestion
    */
    public function getAllowTextSuggestion()
    {
        if (array_key_exists("allowTextSuggestion", $this->_propDict)) {
            return $this->_propDict["allowTextSuggestion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowTextSuggestion
    *
    * @param bool $val The allowTextSuggestion
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setAllowTextSuggestion($val)
    {
        $this->_propDict["allowTextSuggestion"] = boolval($val);
        return $this;
    }
    
}