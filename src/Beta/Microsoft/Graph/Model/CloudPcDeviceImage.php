<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcDeviceImage File
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
* CloudPcDeviceImage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcDeviceImage extends Entity
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
    * @return CloudPcDeviceImage
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return CloudPcDeviceImage
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the operatingSystem
    *
    * @return string The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operatingSystem
    *
    * @param string $val The operatingSystem
    *
    * @return CloudPcDeviceImage
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the osBuildNumber
    *
    * @return string The osBuildNumber
    */
    public function getOsBuildNumber()
    {
        if (array_key_exists("osBuildNumber", $this->_propDict)) {
            return $this->_propDict["osBuildNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osBuildNumber
    *
    * @param string $val The osBuildNumber
    *
    * @return CloudPcDeviceImage
    */
    public function setOsBuildNumber($val)
    {
        $this->_propDict["osBuildNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceImageResourceId
    *
    * @return string The sourceImageResourceId
    */
    public function getSourceImageResourceId()
    {
        if (array_key_exists("sourceImageResourceId", $this->_propDict)) {
            return $this->_propDict["sourceImageResourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sourceImageResourceId
    *
    * @param string $val The sourceImageResourceId
    *
    * @return CloudPcDeviceImage
    */
    public function setSourceImageResourceId($val)
    {
        $this->_propDict["sourceImageResourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return CloudPcDeviceImageStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\CloudPcDeviceImageStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcDeviceImageStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param CloudPcDeviceImageStatus $val The status
    *
    * @return CloudPcDeviceImage
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the statusDetails
    *
    * @return CloudPcDeviceImageStatusDetails The statusDetails
    */
    public function getStatusDetails()
    {
        if (array_key_exists("statusDetails", $this->_propDict)) {
            if (is_a($this->_propDict["statusDetails"], "Beta\Microsoft\Graph\Model\CloudPcDeviceImageStatusDetails")) {
                return $this->_propDict["statusDetails"];
            } else {
                $this->_propDict["statusDetails"] = new CloudPcDeviceImageStatusDetails($this->_propDict["statusDetails"]);
                return $this->_propDict["statusDetails"];
            }
        }
        return null;
    }
    
    /**
    * Sets the statusDetails
    *
    * @param CloudPcDeviceImageStatusDetails $val The statusDetails
    *
    * @return CloudPcDeviceImage
    */
    public function setStatusDetails($val)
    {
        $this->_propDict["statusDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param string $val The version
    *
    * @return CloudPcDeviceImage
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}