<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Agreement File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* Agreement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Agreement extends Entity
{
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
    * @return Agreement
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isPerDeviceAcceptanceRequired
    *
    * @return bool The isPerDeviceAcceptanceRequired
    */
    public function getIsPerDeviceAcceptanceRequired()
    {
        if (array_key_exists("isPerDeviceAcceptanceRequired", $this->_propDict)) {
            return $this->_propDict["isPerDeviceAcceptanceRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isPerDeviceAcceptanceRequired
    *
    * @param bool $val The isPerDeviceAcceptanceRequired
    *
    * @return Agreement
    */
    public function setIsPerDeviceAcceptanceRequired($val)
    {
        $this->_propDict["isPerDeviceAcceptanceRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isViewingBeforeAcceptanceRequired
    *
    * @return bool The isViewingBeforeAcceptanceRequired
    */
    public function getIsViewingBeforeAcceptanceRequired()
    {
        if (array_key_exists("isViewingBeforeAcceptanceRequired", $this->_propDict)) {
            return $this->_propDict["isViewingBeforeAcceptanceRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isViewingBeforeAcceptanceRequired
    *
    * @param bool $val The isViewingBeforeAcceptanceRequired
    *
    * @return Agreement
    */
    public function setIsViewingBeforeAcceptanceRequired($val)
    {
        $this->_propDict["isViewingBeforeAcceptanceRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the termsExpiration
    *
    * @return TermsExpiration The termsExpiration
    */
    public function getTermsExpiration()
    {
        if (array_key_exists("termsExpiration", $this->_propDict)) {
            if (is_a($this->_propDict["termsExpiration"], "Beta\Microsoft\Graph\Model\TermsExpiration")) {
                return $this->_propDict["termsExpiration"];
            } else {
                $this->_propDict["termsExpiration"] = new TermsExpiration($this->_propDict["termsExpiration"]);
                return $this->_propDict["termsExpiration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the termsExpiration
    *
    * @param TermsExpiration $val The termsExpiration
    *
    * @return Agreement
    */
    public function setTermsExpiration($val)
    {
        $this->_propDict["termsExpiration"] = $val;
        return $this;
    }
    
    /**
    * Gets the userReacceptRequiredFrequency
    *
    * @return Duration The userReacceptRequiredFrequency
    */
    public function getUserReacceptRequiredFrequency()
    {
        if (array_key_exists("userReacceptRequiredFrequency", $this->_propDict)) {
            if (is_a($this->_propDict["userReacceptRequiredFrequency"], "Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["userReacceptRequiredFrequency"];
            } else {
                $this->_propDict["userReacceptRequiredFrequency"] = new Duration($this->_propDict["userReacceptRequiredFrequency"]);
                return $this->_propDict["userReacceptRequiredFrequency"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userReacceptRequiredFrequency
    *
    * @param Duration $val The userReacceptRequiredFrequency
    *
    * @return Agreement
    */
    public function setUserReacceptRequiredFrequency($val)
    {
        $this->_propDict["userReacceptRequiredFrequency"] = $val;
        return $this;
    }
    

     /** 
     * Gets the acceptances
     *
     * @return array The acceptances
     */
    public function getAcceptances()
    {
        if (array_key_exists("acceptances", $this->_propDict)) {
           return $this->_propDict["acceptances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the acceptances
    *
    * @param AgreementAcceptance $val The acceptances
    *
    * @return Agreement
    */
    public function setAcceptances($val)
    {
		$this->_propDict["acceptances"] = $val;
        return $this;
    }
    
    /**
    * Gets the file
    *
    * @return AgreementFile The file
    */
    public function getFile()
    {
        if (array_key_exists("file", $this->_propDict)) {
            if (is_a($this->_propDict["file"], "Beta\Microsoft\Graph\Model\AgreementFile")) {
                return $this->_propDict["file"];
            } else {
                $this->_propDict["file"] = new AgreementFile($this->_propDict["file"]);
                return $this->_propDict["file"];
            }
        }
        return null;
    }
    
    /**
    * Sets the file
    *
    * @param AgreementFile $val The file
    *
    * @return Agreement
    */
    public function setFile($val)
    {
        $this->_propDict["file"] = $val;
        return $this;
    }
    

     /** 
     * Gets the files
     *
     * @return array The files
     */
    public function getFiles()
    {
        if (array_key_exists("files", $this->_propDict)) {
           return $this->_propDict["files"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the files
    *
    * @param AgreementFileLocalization $val The files
    *
    * @return Agreement
    */
    public function setFiles($val)
    {
		$this->_propDict["files"] = $val;
        return $this;
    }
    
}