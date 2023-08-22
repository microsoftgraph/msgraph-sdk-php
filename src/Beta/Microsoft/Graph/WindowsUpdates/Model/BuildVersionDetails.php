<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BuildVersionDetails File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* BuildVersionDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BuildVersionDetails extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the buildNumber
    *
    * @return int|null The buildNumber
    */
    public function getBuildNumber()
    {
        if (array_key_exists("buildNumber", $this->_propDict)) {
            return $this->_propDict["buildNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the buildNumber
    *
    * @param int $val The value of the buildNumber
    *
    * @return BuildVersionDetails
    */
    public function setBuildNumber($val)
    {
        $this->_propDict["buildNumber"] = $val;
        return $this;
    }
    /**
    * Gets the majorVersion
    *
    * @return int|null The majorVersion
    */
    public function getMajorVersion()
    {
        if (array_key_exists("majorVersion", $this->_propDict)) {
            return $this->_propDict["majorVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the majorVersion
    *
    * @param int $val The value of the majorVersion
    *
    * @return BuildVersionDetails
    */
    public function setMajorVersion($val)
    {
        $this->_propDict["majorVersion"] = $val;
        return $this;
    }
    /**
    * Gets the minorVersion
    *
    * @return int|null The minorVersion
    */
    public function getMinorVersion()
    {
        if (array_key_exists("minorVersion", $this->_propDict)) {
            return $this->_propDict["minorVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minorVersion
    *
    * @param int $val The value of the minorVersion
    *
    * @return BuildVersionDetails
    */
    public function setMinorVersion($val)
    {
        $this->_propDict["minorVersion"] = $val;
        return $this;
    }
    /**
    * Gets the updateBuildRevision
    *
    * @return int|null The updateBuildRevision
    */
    public function getUpdateBuildRevision()
    {
        if (array_key_exists("updateBuildRevision", $this->_propDict)) {
            return $this->_propDict["updateBuildRevision"];
        } else {
            return null;
        }
    }

    /**
    * Sets the updateBuildRevision
    *
    * @param int $val The value of the updateBuildRevision
    *
    * @return BuildVersionDetails
    */
    public function setUpdateBuildRevision($val)
    {
        $this->_propDict["updateBuildRevision"] = $val;
        return $this;
    }
}
