<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HardwareConfiguration File
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
* HardwareConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HardwareConfiguration extends Entity
{
    /**
    * Gets the configurationFileContent
    * File content of the hardware configuration
    *
    * @return \GuzzleHttp\Psr7\Stream|null The configurationFileContent
    */
    public function getConfigurationFileContent()
    {
        if (array_key_exists("configurationFileContent", $this->_propDict)) {
            if (is_a($this->_propDict["configurationFileContent"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["configurationFileContent"])) {
                return $this->_propDict["configurationFileContent"];
            } else {
                $this->_propDict["configurationFileContent"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["configurationFileContent"]);
                return $this->_propDict["configurationFileContent"];
            }
        }
        return null;
    }

    /**
    * Sets the configurationFileContent
    * File content of the hardware configuration
    *
    * @param \GuzzleHttp\Psr7\Stream $val The configurationFileContent
    *
    * @return HardwareConfiguration
    */
    public function setConfigurationFileContent($val)
    {
        $this->_propDict["configurationFileContent"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Timestamp of when the hardware configuration was created. This property is read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
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
    * Timestamp of when the hardware configuration was created. This property is read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return HardwareConfiguration
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description of the hardware configuration
    *
    * @return string|null The description
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
    * Description of the hardware configuration
    *
    * @param string $val The description
    *
    * @return HardwareConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Name of the hardware configuration
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
    * Name of the hardware configuration
    *
    * @param string $val The displayName
    *
    * @return HardwareConfiguration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the fileName
    * File name of the hardware configuration
    *
    * @return string|null The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileName
    * File name of the hardware configuration
    *
    * @param string $val The fileName
    *
    * @return HardwareConfiguration
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }

    /**
    * Gets the hardwareConfigurationFormat
    * Oem type of the hardware configuration. Possible values are: dell, surface, surfaceDock.
    *
    * @return HardwareConfigurationFormat|null The hardwareConfigurationFormat
    */
    public function getHardwareConfigurationFormat()
    {
        if (array_key_exists("hardwareConfigurationFormat", $this->_propDict)) {
            if (is_a($this->_propDict["hardwareConfigurationFormat"], "\Beta\Microsoft\Graph\Model\HardwareConfigurationFormat") || is_null($this->_propDict["hardwareConfigurationFormat"])) {
                return $this->_propDict["hardwareConfigurationFormat"];
            } else {
                $this->_propDict["hardwareConfigurationFormat"] = new HardwareConfigurationFormat($this->_propDict["hardwareConfigurationFormat"]);
                return $this->_propDict["hardwareConfigurationFormat"];
            }
        }
        return null;
    }

    /**
    * Sets the hardwareConfigurationFormat
    * Oem type of the hardware configuration. Possible values are: dell, surface, surfaceDock.
    *
    * @param HardwareConfigurationFormat $val The hardwareConfigurationFormat
    *
    * @return HardwareConfiguration
    */
    public function setHardwareConfigurationFormat($val)
    {
        $this->_propDict["hardwareConfigurationFormat"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Timestamp of when the hardware configuration was modified. This property is read-only.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
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
    * Timestamp of when the hardware configuration was modified. This property is read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return HardwareConfiguration
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the perDevicePasswordDisabled
    * A value indicating whether per devcive pasword disabled
    *
    * @return bool|null The perDevicePasswordDisabled
    */
    public function getPerDevicePasswordDisabled()
    {
        if (array_key_exists("perDevicePasswordDisabled", $this->_propDict)) {
            return $this->_propDict["perDevicePasswordDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the perDevicePasswordDisabled
    * A value indicating whether per devcive pasword disabled
    *
    * @param bool $val The perDevicePasswordDisabled
    *
    * @return HardwareConfiguration
    */
    public function setPerDevicePasswordDisabled($val)
    {
        $this->_propDict["perDevicePasswordDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the roleScopeTagIds
    * List of Scope Tag IDs for the hardware configuration
    *
    * @return string|null The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagIds
    * List of Scope Tag IDs for the hardware configuration
    *
    * @param string $val The roleScopeTagIds
    *
    * @return HardwareConfiguration
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * Version of the hardware configuration
    *
    * @return int|null The version
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
    * Version of the hardware configuration
    *
    * @param int $val The version
    *
    * @return HardwareConfiguration
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }


     /**
     * Gets the assignments
    * List of group assignments for the hardware configuration
     *
     * @return array|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignments
    * List of group assignments for the hardware configuration
    *
    * @param HardwareConfigurationAssignment[] $val The assignments
    *
    * @return HardwareConfiguration
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }


     /**
     * Gets the deviceRunStates
    * List of run states for the hardware configuration across all devices
     *
     * @return array|null The deviceRunStates
     */
    public function getDeviceRunStates()
    {
        if (array_key_exists("deviceRunStates", $this->_propDict)) {
           return $this->_propDict["deviceRunStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceRunStates
    * List of run states for the hardware configuration across all devices
    *
    * @param HardwareConfigurationDeviceState[] $val The deviceRunStates
    *
    * @return HardwareConfiguration
    */
    public function setDeviceRunStates($val)
    {
        $this->_propDict["deviceRunStates"] = $val;
        return $this;
    }

    /**
    * Gets the runSummary
    * Run summary for hardware configuration
    *
    * @return HardwareConfigurationRunSummary|null The runSummary
    */
    public function getRunSummary()
    {
        if (array_key_exists("runSummary", $this->_propDict)) {
            if (is_a($this->_propDict["runSummary"], "\Beta\Microsoft\Graph\Model\HardwareConfigurationRunSummary") || is_null($this->_propDict["runSummary"])) {
                return $this->_propDict["runSummary"];
            } else {
                $this->_propDict["runSummary"] = new HardwareConfigurationRunSummary($this->_propDict["runSummary"]);
                return $this->_propDict["runSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the runSummary
    * Run summary for hardware configuration
    *
    * @param HardwareConfigurationRunSummary $val The runSummary
    *
    * @return HardwareConfiguration
    */
    public function setRunSummary($val)
    {
        $this->_propDict["runSummary"] = $val;
        return $this;
    }


     /**
     * Gets the userRunStates
    * List of run states for the hardware configuration across all users
     *
     * @return array|null The userRunStates
     */
    public function getUserRunStates()
    {
        if (array_key_exists("userRunStates", $this->_propDict)) {
           return $this->_propDict["userRunStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userRunStates
    * List of run states for the hardware configuration across all users
    *
    * @param HardwareConfigurationUserState[] $val The userRunStates
    *
    * @return HardwareConfiguration
    */
    public function setUserRunStates($val)
    {
        $this->_propDict["userRunStates"] = $val;
        return $this;
    }

}
