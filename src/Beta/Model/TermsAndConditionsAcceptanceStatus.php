<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsAndConditionsAcceptanceStatus File
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
* TermsAndConditionsAcceptanceStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TermsAndConditionsAcceptanceStatus extends Entity
{
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
    * @return TermsAndConditionsAcceptanceStatus
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the acceptedVersion
    *
    * @return int The acceptedVersion
    */
    public function getAcceptedVersion()
    {
        if (array_key_exists("acceptedVersion", $this->_propDict)) {
            return $this->_propDict["acceptedVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the acceptedVersion
    *
    * @param int $val The acceptedVersion
    *
    * @return TermsAndConditionsAcceptanceStatus
    */
    public function setAcceptedVersion($val)
    {
        $this->_propDict["acceptedVersion"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the acceptedDateTime
    *
    * @return \DateTime The acceptedDateTime
    */
    public function getAcceptedDateTime()
    {
        if (array_key_exists("acceptedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["acceptedDateTime"], "\DateTime")) {
                return $this->_propDict["acceptedDateTime"];
            } else {
                $this->_propDict["acceptedDateTime"] = new \DateTime($this->_propDict["acceptedDateTime"]);
                return $this->_propDict["acceptedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the acceptedDateTime
    *
    * @param \DateTime $val The acceptedDateTime
    *
    * @return TermsAndConditionsAcceptanceStatus
    */
    public function setAcceptedDateTime($val)
    {
        $this->_propDict["acceptedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the termsAndConditions
    *
    * @return TermsAndConditions The termsAndConditions
    */
    public function getTermsAndConditions()
    {
        if (array_key_exists("termsAndConditions", $this->_propDict)) {
            if (is_a($this->_propDict["termsAndConditions"], "Microsoft\Graph\Beta\Model\TermsAndConditions")) {
                return $this->_propDict["termsAndConditions"];
            } else {
                $this->_propDict["termsAndConditions"] = new TermsAndConditions($this->_propDict["termsAndConditions"]);
                return $this->_propDict["termsAndConditions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the termsAndConditions
    *
    * @param TermsAndConditions $val The termsAndConditions
    *
    * @return TermsAndConditionsAcceptanceStatus
    */
    public function setTermsAndConditions($val)
    {
        $this->_propDict["termsAndConditions"] = $val;
        return $this;
    }
    
}