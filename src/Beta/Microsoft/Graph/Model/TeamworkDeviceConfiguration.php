<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkDeviceConfiguration File
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
* TeamworkDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkDeviceConfiguration extends Entity
{
    /**
    * Gets the cameraConfiguration
    *
    * @return TeamworkCameraConfiguration|null The cameraConfiguration
    */
    public function getCameraConfiguration()
    {
        if (array_key_exists("cameraConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["cameraConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkCameraConfiguration") || is_null($this->_propDict["cameraConfiguration"])) {
                return $this->_propDict["cameraConfiguration"];
            } else {
                $this->_propDict["cameraConfiguration"] = new TeamworkCameraConfiguration($this->_propDict["cameraConfiguration"]);
                return $this->_propDict["cameraConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the cameraConfiguration
    *
    * @param TeamworkCameraConfiguration $val The cameraConfiguration
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setCameraConfiguration($val)
    {
        $this->_propDict["cameraConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    *
    * @return IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    *
    * @param IdentitySet $val The createdBy
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
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
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayConfiguration
    *
    * @return TeamworkDisplayConfiguration|null The displayConfiguration
    */
    public function getDisplayConfiguration()
    {
        if (array_key_exists("displayConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["displayConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkDisplayConfiguration") || is_null($this->_propDict["displayConfiguration"])) {
                return $this->_propDict["displayConfiguration"];
            } else {
                $this->_propDict["displayConfiguration"] = new TeamworkDisplayConfiguration($this->_propDict["displayConfiguration"]);
                return $this->_propDict["displayConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the displayConfiguration
    *
    * @param TeamworkDisplayConfiguration $val The displayConfiguration
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setDisplayConfiguration($val)
    {
        $this->_propDict["displayConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the hardwareConfiguration
    *
    * @return TeamworkHardwareConfiguration|null The hardwareConfiguration
    */
    public function getHardwareConfiguration()
    {
        if (array_key_exists("hardwareConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["hardwareConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkHardwareConfiguration") || is_null($this->_propDict["hardwareConfiguration"])) {
                return $this->_propDict["hardwareConfiguration"];
            } else {
                $this->_propDict["hardwareConfiguration"] = new TeamworkHardwareConfiguration($this->_propDict["hardwareConfiguration"]);
                return $this->_propDict["hardwareConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the hardwareConfiguration
    *
    * @param TeamworkHardwareConfiguration $val The hardwareConfiguration
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setHardwareConfiguration($val)
    {
        $this->_propDict["hardwareConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    *
    * @return IdentitySet|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the microphoneConfiguration
    *
    * @return TeamworkMicrophoneConfiguration|null The microphoneConfiguration
    */
    public function getMicrophoneConfiguration()
    {
        if (array_key_exists("microphoneConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["microphoneConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkMicrophoneConfiguration") || is_null($this->_propDict["microphoneConfiguration"])) {
                return $this->_propDict["microphoneConfiguration"];
            } else {
                $this->_propDict["microphoneConfiguration"] = new TeamworkMicrophoneConfiguration($this->_propDict["microphoneConfiguration"]);
                return $this->_propDict["microphoneConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the microphoneConfiguration
    *
    * @param TeamworkMicrophoneConfiguration $val The microphoneConfiguration
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setMicrophoneConfiguration($val)
    {
        $this->_propDict["microphoneConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the softwareVersions
    *
    * @return TeamworkDeviceSoftwareVersions|null The softwareVersions
    */
    public function getSoftwareVersions()
    {
        if (array_key_exists("softwareVersions", $this->_propDict)) {
            if (is_a($this->_propDict["softwareVersions"], "\Beta\Microsoft\Graph\Model\TeamworkDeviceSoftwareVersions") || is_null($this->_propDict["softwareVersions"])) {
                return $this->_propDict["softwareVersions"];
            } else {
                $this->_propDict["softwareVersions"] = new TeamworkDeviceSoftwareVersions($this->_propDict["softwareVersions"]);
                return $this->_propDict["softwareVersions"];
            }
        }
        return null;
    }

    /**
    * Sets the softwareVersions
    *
    * @param TeamworkDeviceSoftwareVersions $val The softwareVersions
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setSoftwareVersions($val)
    {
        $this->_propDict["softwareVersions"] = $val;
        return $this;
    }

    /**
    * Gets the speakerConfiguration
    *
    * @return TeamworkSpeakerConfiguration|null The speakerConfiguration
    */
    public function getSpeakerConfiguration()
    {
        if (array_key_exists("speakerConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["speakerConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkSpeakerConfiguration") || is_null($this->_propDict["speakerConfiguration"])) {
                return $this->_propDict["speakerConfiguration"];
            } else {
                $this->_propDict["speakerConfiguration"] = new TeamworkSpeakerConfiguration($this->_propDict["speakerConfiguration"]);
                return $this->_propDict["speakerConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the speakerConfiguration
    *
    * @param TeamworkSpeakerConfiguration $val The speakerConfiguration
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setSpeakerConfiguration($val)
    {
        $this->_propDict["speakerConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the systemConfiguration
    *
    * @return TeamworkSystemConfiguration|null The systemConfiguration
    */
    public function getSystemConfiguration()
    {
        if (array_key_exists("systemConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["systemConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkSystemConfiguration") || is_null($this->_propDict["systemConfiguration"])) {
                return $this->_propDict["systemConfiguration"];
            } else {
                $this->_propDict["systemConfiguration"] = new TeamworkSystemConfiguration($this->_propDict["systemConfiguration"]);
                return $this->_propDict["systemConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the systemConfiguration
    *
    * @param TeamworkSystemConfiguration $val The systemConfiguration
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setSystemConfiguration($val)
    {
        $this->_propDict["systemConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the teamsClientConfiguration
    *
    * @return TeamworkTeamsClientConfiguration|null The teamsClientConfiguration
    */
    public function getTeamsClientConfiguration()
    {
        if (array_key_exists("teamsClientConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["teamsClientConfiguration"], "\Beta\Microsoft\Graph\Model\TeamworkTeamsClientConfiguration") || is_null($this->_propDict["teamsClientConfiguration"])) {
                return $this->_propDict["teamsClientConfiguration"];
            } else {
                $this->_propDict["teamsClientConfiguration"] = new TeamworkTeamsClientConfiguration($this->_propDict["teamsClientConfiguration"]);
                return $this->_propDict["teamsClientConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the teamsClientConfiguration
    *
    * @param TeamworkTeamsClientConfiguration $val The teamsClientConfiguration
    *
    * @return TeamworkDeviceConfiguration
    */
    public function setTeamsClientConfiguration($val)
    {
        $this->_propDict["teamsClientConfiguration"] = $val;
        return $this;
    }

}
