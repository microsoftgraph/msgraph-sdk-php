<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOrganizationSettings File
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
* CloudPcOrganizationSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOrganizationSettings extends Entity
{
    /**
    * Gets the osVersion
    *
    * @return CloudPcOperatingSystem|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            if (is_a($this->_propDict["osVersion"], "\Beta\Microsoft\Graph\Model\CloudPcOperatingSystem") || is_null($this->_propDict["osVersion"])) {
                return $this->_propDict["osVersion"];
            } else {
                $this->_propDict["osVersion"] = new CloudPcOperatingSystem($this->_propDict["osVersion"]);
                return $this->_propDict["osVersion"];
            }
        }
        return null;
    }

    /**
    * Sets the osVersion
    *
    * @param CloudPcOperatingSystem $val The osVersion
    *
    * @return CloudPcOrganizationSettings
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the userAccountType
    *
    * @return CloudPcUserAccountType|null The userAccountType
    */
    public function getUserAccountType()
    {
        if (array_key_exists("userAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["userAccountType"], "\Beta\Microsoft\Graph\Model\CloudPcUserAccountType") || is_null($this->_propDict["userAccountType"])) {
                return $this->_propDict["userAccountType"];
            } else {
                $this->_propDict["userAccountType"] = new CloudPcUserAccountType($this->_propDict["userAccountType"]);
                return $this->_propDict["userAccountType"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccountType
    *
    * @param CloudPcUserAccountType $val The userAccountType
    *
    * @return CloudPcOrganizationSettings
    */
    public function setUserAccountType($val)
    {
        $this->_propDict["userAccountType"] = $val;
        return $this;
    }

}
