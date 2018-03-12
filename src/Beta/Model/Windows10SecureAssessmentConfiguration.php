<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10SecureAssessmentConfiguration File
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
* Windows10SecureAssessmentConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10SecureAssessmentConfiguration extends DeviceConfiguration
{
    /**
    * Gets the launchUri
    * Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
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
    * Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
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
    * The account used to configure the Windows device for taking the test. The user can be a domain account (domain\user), an AAD account (username@tenant.com) or a local account (username).
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
    * The account used to configure the Windows device for taking the test. The user can be a domain account (domain\user), an AAD account (username@tenant.com) or a local account (username).
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
    * Gets the configurationAccountType
    *
    * @return SecureAssessmentAccountType The configurationAccountType
    */
    public function getConfigurationAccountType()
    {
        if (array_key_exists("configurationAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["configurationAccountType"], "Microsoft\Graph\Model\SecureAssessmentAccountType")) {
                return $this->_propDict["configurationAccountType"];
            } else {
                $this->_propDict["configurationAccountType"] = new SecureAssessmentAccountType($this->_propDict["configurationAccountType"]);
                return $this->_propDict["configurationAccountType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configurationAccountType
    *
    * @param SecureAssessmentAccountType $val The configurationAccountType
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setConfigurationAccountType($val)
    {
        $this->_propDict["configurationAccountType"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowPrinting
    * Indicates whether or not to allow the app from printing during the test.
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
    * Indicates whether or not to allow the app from printing during the test.
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
    * Indicates whether or not to allow screen capture capability during a test.
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
    * Indicates whether or not to allow screen capture capability during a test.
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
    * Indicates whether or not to allow text suggestions during the test.
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
    * Indicates whether or not to allow text suggestions during the test.
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
    
    /**
    * Gets the printerNames
    *
    * @return string The printerNames
    */
    public function getPrinterNames()
    {
        if (array_key_exists("printerNames", $this->_propDict)) {
            return $this->_propDict["printerNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the printerNames
    *
    * @param string $val The printerNames
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setPrinterNames($val)
    {
        $this->_propDict["printerNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultPrinterName
    *
    * @return string The defaultPrinterName
    */
    public function getDefaultPrinterName()
    {
        if (array_key_exists("defaultPrinterName", $this->_propDict)) {
            return $this->_propDict["defaultPrinterName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultPrinterName
    *
    * @param string $val The defaultPrinterName
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setDefaultPrinterName($val)
    {
        $this->_propDict["defaultPrinterName"] = $val;
        return $this;
    }
    
    /**
    * Gets the blockAddingNewPrinter
    *
    * @return bool The blockAddingNewPrinter
    */
    public function getBlockAddingNewPrinter()
    {
        if (array_key_exists("blockAddingNewPrinter", $this->_propDict)) {
            return $this->_propDict["blockAddingNewPrinter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockAddingNewPrinter
    *
    * @param bool $val The blockAddingNewPrinter
    *
    * @return Windows10SecureAssessmentConfiguration
    */
    public function setBlockAddingNewPrinter($val)
    {
        $this->_propDict["blockAddingNewPrinter"] = boolval($val);
        return $this;
    }
    
}