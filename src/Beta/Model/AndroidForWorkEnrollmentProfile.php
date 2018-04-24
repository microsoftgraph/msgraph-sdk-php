<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkEnrollmentProfile File
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
* AndroidForWorkEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkEnrollmentProfile extends Entity
{
    /**
    * Gets the accountId
    *
    * @return string The accountId
    */
    public function getAccountId()
    {
        if (array_key_exists("accountId", $this->_propDict)) {
            return $this->_propDict["accountId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountId
    *
    * @param string $val The accountId
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setAccountId($val)
    {
        $this->_propDict["accountId"] = $val;
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
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
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
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
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
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenValue
    *
    * @return string The tokenValue
    */
    public function getTokenValue()
    {
        if (array_key_exists("tokenValue", $this->_propDict)) {
            return $this->_propDict["tokenValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenValue
    *
    * @param string $val The tokenValue
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setTokenValue($val)
    {
        $this->_propDict["tokenValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenExpirationDateTime
    *
    * @return \DateTime The tokenExpirationDateTime
    */
    public function getTokenExpirationDateTime()
    {
        if (array_key_exists("tokenExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["tokenExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["tokenExpirationDateTime"];
            } else {
                $this->_propDict["tokenExpirationDateTime"] = new \DateTime($this->_propDict["tokenExpirationDateTime"]);
                return $this->_propDict["tokenExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tokenExpirationDateTime
    *
    * @param \DateTime $val The tokenExpirationDateTime
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setTokenExpirationDateTime($val)
    {
        $this->_propDict["tokenExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrolledDeviceCount
    *
    * @return int The enrolledDeviceCount
    */
    public function getEnrolledDeviceCount()
    {
        if (array_key_exists("enrolledDeviceCount", $this->_propDict)) {
            return $this->_propDict["enrolledDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enrolledDeviceCount
    *
    * @param int $val The enrolledDeviceCount
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setEnrolledDeviceCount($val)
    {
        $this->_propDict["enrolledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the qrCodeContent
    *
    * @return string The qrCodeContent
    */
    public function getQrCodeContent()
    {
        if (array_key_exists("qrCodeContent", $this->_propDict)) {
            return $this->_propDict["qrCodeContent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qrCodeContent
    *
    * @param string $val The qrCodeContent
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setQrCodeContent($val)
    {
        $this->_propDict["qrCodeContent"] = $val;
        return $this;
    }
    
    /**
    * Gets the qrCodeImage
    *
    * @return MimeContent The qrCodeImage
    */
    public function getQrCodeImage()
    {
        if (array_key_exists("qrCodeImage", $this->_propDict)) {
            if (is_a($this->_propDict["qrCodeImage"], "Microsoft\Graph\Beta\Model\MimeContent")) {
                return $this->_propDict["qrCodeImage"];
            } else {
                $this->_propDict["qrCodeImage"] = new MimeContent($this->_propDict["qrCodeImage"]);
                return $this->_propDict["qrCodeImage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the qrCodeImage
    *
    * @param MimeContent $val The qrCodeImage
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setQrCodeImage($val)
    {
        $this->_propDict["qrCodeImage"] = $val;
        return $this;
    }
    
}