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
    * Display name of the agreement. The display name is used for internal tracking of the agreement but is not shown to end users who view the agreement. Supports $filter (eq).
    *
    * @return string|null The displayName
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
    * Display name of the agreement. The display name is used for internal tracking of the agreement but is not shown to end users who view the agreement. Supports $filter (eq).
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
    * This setting enables you to require end users to accept this agreement on every device that they are accessing it from. The end user will be required to register their device in Microsoft Entra ID, if they haven't already done so. Supports $filter (eq).
    *
    * @return bool|null The isPerDeviceAcceptanceRequired
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
    * This setting enables you to require end users to accept this agreement on every device that they are accessing it from. The end user will be required to register their device in Microsoft Entra ID, if they haven't already done so. Supports $filter (eq).
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
    * Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq).
    *
    * @return bool|null The isViewingBeforeAcceptanceRequired
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
    * Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq).
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
    * Expiration schedule and frequency of agreement for all users.  Supports $filter (eq).
    *
    * @return TermsExpiration|null The termsExpiration
    */
    public function getTermsExpiration()
    {
        if (array_key_exists("termsExpiration", $this->_propDict)) {
            if (is_a($this->_propDict["termsExpiration"], "\Beta\Microsoft\Graph\Model\TermsExpiration") || is_null($this->_propDict["termsExpiration"])) {
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
    * Expiration schedule and frequency of agreement for all users.  Supports $filter (eq).
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
    * The duration after which the user must re-accept the terms of use. The value is represented in ISO 8601 format for durations.
    *
    * @return \DateInterval|null The userReacceptRequiredFrequency
    */
    public function getUserReacceptRequiredFrequency()
    {
        if (array_key_exists("userReacceptRequiredFrequency", $this->_propDict)) {
            if (is_a($this->_propDict["userReacceptRequiredFrequency"], "\DateInterval") || is_null($this->_propDict["userReacceptRequiredFrequency"])) {
                return $this->_propDict["userReacceptRequiredFrequency"];
            } else {
                $this->_propDict["userReacceptRequiredFrequency"] = new \DateInterval($this->_propDict["userReacceptRequiredFrequency"]);
                return $this->_propDict["userReacceptRequiredFrequency"];
            }
        }
        return null;
    }

    /**
    * Sets the userReacceptRequiredFrequency
    * The duration after which the user must re-accept the terms of use. The value is represented in ISO 8601 format for durations.
    *
    * @param \DateInterval $val The userReacceptRequiredFrequency
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
    * Read-only. Information about acceptances of this agreement.
     *
     * @return array|null The acceptances
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
    * Read-only. Information about acceptances of this agreement.
    *
    * @param AgreementAcceptance[] $val The acceptances
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
    * Default PDF linked to this agreement.
    *
    * @return AgreementFile|null The file
    */
    public function getFile()
    {
        if (array_key_exists("file", $this->_propDict)) {
            if (is_a($this->_propDict["file"], "\Beta\Microsoft\Graph\Model\AgreementFile") || is_null($this->_propDict["file"])) {
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
    * Default PDF linked to this agreement.
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
    * PDFs linked to this agreement. Note: This property is in the process of being deprecated. Use the  file property instead.
     *
     * @return array|null The files
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
    * PDFs linked to this agreement. Note: This property is in the process of being deprecated. Use the  file property instead.
    *
    * @param AgreementFileLocalization[] $val The files
    *
    * @return Agreement
    */
    public function setFiles($val)
    {
        $this->_propDict["files"] = $val;
        return $this;
    }

}
