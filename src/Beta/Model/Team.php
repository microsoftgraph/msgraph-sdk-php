<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Team File
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
* Team class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Team extends Entity
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
    * @return Team
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
    * @return Team
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the internalId
    * A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
    *
    * @return string The internalId
    */
    public function getInternalId()
    {
        if (array_key_exists("internalId", $this->_propDict)) {
            return $this->_propDict["internalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the internalId
    * A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
    *
    * @param string $val The internalId
    *
    * @return Team
    */
    public function setInternalId($val)
    {
        $this->_propDict["internalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the classification
    *
    * @return string The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            return $this->_propDict["classification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classification
    *
    * @param string $val The classification
    *
    * @return Team
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }
    
    /**
    * Gets the specialization
    *
    * @return TeamSpecialization The specialization
    */
    public function getSpecialization()
    {
        if (array_key_exists("specialization", $this->_propDict)) {
            if (is_a($this->_propDict["specialization"], "Microsoft\Graph\Beta\Model\TeamSpecialization")) {
                return $this->_propDict["specialization"];
            } else {
                $this->_propDict["specialization"] = new TeamSpecialization($this->_propDict["specialization"]);
                return $this->_propDict["specialization"];
            }
        }
        return null;
    }
    
    /**
    * Sets the specialization
    *
    * @param TeamSpecialization $val The specialization
    *
    * @return Team
    */
    public function setSpecialization($val)
    {
        $this->_propDict["specialization"] = $val;
        return $this;
    }
    
    /**
    * Gets the visibility
    *
    * @return TeamVisibilityType The visibility
    */
    public function getVisibility()
    {
        if (array_key_exists("visibility", $this->_propDict)) {
            if (is_a($this->_propDict["visibility"], "Microsoft\Graph\Beta\Model\TeamVisibilityType")) {
                return $this->_propDict["visibility"];
            } else {
                $this->_propDict["visibility"] = new TeamVisibilityType($this->_propDict["visibility"]);
                return $this->_propDict["visibility"];
            }
        }
        return null;
    }
    
    /**
    * Sets the visibility
    *
    * @param TeamVisibilityType $val The visibility
    *
    * @return Team
    */
    public function setVisibility($val)
    {
        $this->_propDict["visibility"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    * A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    * A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
    *
    * @param string $val The webUrl
    *
    * @return Team
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the memberSettings
    * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
    *
    * @return TeamMemberSettings The memberSettings
    */
    public function getMemberSettings()
    {
        if (array_key_exists("memberSettings", $this->_propDict)) {
            if (is_a($this->_propDict["memberSettings"], "Microsoft\Graph\Beta\Model\TeamMemberSettings")) {
                return $this->_propDict["memberSettings"];
            } else {
                $this->_propDict["memberSettings"] = new TeamMemberSettings($this->_propDict["memberSettings"]);
                return $this->_propDict["memberSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the memberSettings
    * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
    *
    * @param TeamMemberSettings $val The memberSettings
    *
    * @return Team
    */
    public function setMemberSettings($val)
    {
        $this->_propDict["memberSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the guestSettings
    * Settings to configure whether guests can create, update, or delete channels in the team.
    *
    * @return TeamGuestSettings The guestSettings
    */
    public function getGuestSettings()
    {
        if (array_key_exists("guestSettings", $this->_propDict)) {
            if (is_a($this->_propDict["guestSettings"], "Microsoft\Graph\Beta\Model\TeamGuestSettings")) {
                return $this->_propDict["guestSettings"];
            } else {
                $this->_propDict["guestSettings"] = new TeamGuestSettings($this->_propDict["guestSettings"]);
                return $this->_propDict["guestSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the guestSettings
    * Settings to configure whether guests can create, update, or delete channels in the team.
    *
    * @param TeamGuestSettings $val The guestSettings
    *
    * @return Team
    */
    public function setGuestSettings($val)
    {
        $this->_propDict["guestSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the messagingSettings
    * Settings to configure messaging and mentions in the team.
    *
    * @return TeamMessagingSettings The messagingSettings
    */
    public function getMessagingSettings()
    {
        if (array_key_exists("messagingSettings", $this->_propDict)) {
            if (is_a($this->_propDict["messagingSettings"], "Microsoft\Graph\Beta\Model\TeamMessagingSettings")) {
                return $this->_propDict["messagingSettings"];
            } else {
                $this->_propDict["messagingSettings"] = new TeamMessagingSettings($this->_propDict["messagingSettings"]);
                return $this->_propDict["messagingSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the messagingSettings
    * Settings to configure messaging and mentions in the team.
    *
    * @param TeamMessagingSettings $val The messagingSettings
    *
    * @return Team
    */
    public function setMessagingSettings($val)
    {
        $this->_propDict["messagingSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the funSettings
    * Settings to configure use of Giphy, memes, and stickers in the team.
    *
    * @return TeamFunSettings The funSettings
    */
    public function getFunSettings()
    {
        if (array_key_exists("funSettings", $this->_propDict)) {
            if (is_a($this->_propDict["funSettings"], "Microsoft\Graph\Beta\Model\TeamFunSettings")) {
                return $this->_propDict["funSettings"];
            } else {
                $this->_propDict["funSettings"] = new TeamFunSettings($this->_propDict["funSettings"]);
                return $this->_propDict["funSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the funSettings
    * Settings to configure use of Giphy, memes, and stickers in the team.
    *
    * @param TeamFunSettings $val The funSettings
    *
    * @return Team
    */
    public function setFunSettings($val)
    {
        $this->_propDict["funSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the discoverySettings
    *
    * @return TeamDiscoverySettings The discoverySettings
    */
    public function getDiscoverySettings()
    {
        if (array_key_exists("discoverySettings", $this->_propDict)) {
            if (is_a($this->_propDict["discoverySettings"], "Microsoft\Graph\Beta\Model\TeamDiscoverySettings")) {
                return $this->_propDict["discoverySettings"];
            } else {
                $this->_propDict["discoverySettings"] = new TeamDiscoverySettings($this->_propDict["discoverySettings"]);
                return $this->_propDict["discoverySettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the discoverySettings
    *
    * @param TeamDiscoverySettings $val The discoverySettings
    *
    * @return Team
    */
    public function setDiscoverySettings($val)
    {
        $this->_propDict["discoverySettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the isArchived
    * Whether this team is in read-only mode.
    *
    * @return bool The isArchived
    */
    public function getIsArchived()
    {
        if (array_key_exists("isArchived", $this->_propDict)) {
            return $this->_propDict["isArchived"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isArchived
    * Whether this team is in read-only mode.
    *
    * @param bool $val The isArchived
    *
    * @return Team
    */
    public function setIsArchived($val)
    {
        $this->_propDict["isArchived"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the schedule
    *
    * @return Schedule The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "Microsoft\Graph\Beta\Model\Schedule")) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new Schedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schedule
    *
    * @param Schedule $val The schedule
    *
    * @return Team
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the photo
    *
    * @return ProfilePhoto The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "Microsoft\Graph\Beta\Model\ProfilePhoto")) {
                return $this->_propDict["photo"];
            } else {
                $this->_propDict["photo"] = new ProfilePhoto($this->_propDict["photo"]);
                return $this->_propDict["photo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the photo
    *
    * @param ProfilePhoto $val The photo
    *
    * @return Team
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }
    
    /**
    * Gets the template
    *
    * @return TeamsTemplate The template
    */
    public function getTemplate()
    {
        if (array_key_exists("template", $this->_propDict)) {
            if (is_a($this->_propDict["template"], "Microsoft\Graph\Beta\Model\TeamsTemplate")) {
                return $this->_propDict["template"];
            } else {
                $this->_propDict["template"] = new TeamsTemplate($this->_propDict["template"]);
                return $this->_propDict["template"];
            }
        }
        return null;
    }
    
    /**
    * Sets the template
    *
    * @param TeamsTemplate $val The template
    *
    * @return Team
    */
    public function setTemplate($val)
    {
        $this->_propDict["template"] = $val;
        return $this;
    }
    

     /** 
     * Gets the channels
    * The collection of channels &amp; messages associated with the team.
     *
     * @return array The channels
     */
    public function getChannels()
    {
        if (array_key_exists("channels", $this->_propDict)) {
           return $this->_propDict["channels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the channels
    * The collection of channels &amp; messages associated with the team.
    *
    * @param Channel $val The channels
    *
    * @return Team
    */
    public function setChannels($val)
    {
		$this->_propDict["channels"] = $val;
        return $this;
    }
    

     /** 
     * Gets the apps
     *
     * @return array The apps
     */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
           return $this->_propDict["apps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the apps
    *
    * @param TeamsCatalogApp $val The apps
    *
    * @return Team
    */
    public function setApps($val)
    {
		$this->_propDict["apps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the installedApps
    * The apps installed in this team.
     *
     * @return array The installedApps
     */
    public function getInstalledApps()
    {
        if (array_key_exists("installedApps", $this->_propDict)) {
           return $this->_propDict["installedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the installedApps
    * The apps installed in this team.
    *
    * @param TeamsAppInstallation $val The installedApps
    *
    * @return Team
    */
    public function setInstalledApps($val)
    {
		$this->_propDict["installedApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    *
    * @param TeamsAsyncOperation $val The operations
    *
    * @return Team
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the owners
     *
     * @return array The owners
     */
    public function getOwners()
    {
        if (array_key_exists("owners", $this->_propDict)) {
           return $this->_propDict["owners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the owners
    *
    * @param User $val The owners
    *
    * @return Team
    */
    public function setOwners($val)
    {
		$this->_propDict["owners"] = $val;
        return $this;
    }
    
    /**
    * Gets the primaryChannel
    *
    * @return Channel The primaryChannel
    */
    public function getPrimaryChannel()
    {
        if (array_key_exists("primaryChannel", $this->_propDict)) {
            if (is_a($this->_propDict["primaryChannel"], "Microsoft\Graph\Beta\Model\Channel")) {
                return $this->_propDict["primaryChannel"];
            } else {
                $this->_propDict["primaryChannel"] = new Channel($this->_propDict["primaryChannel"]);
                return $this->_propDict["primaryChannel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the primaryChannel
    *
    * @param Channel $val The primaryChannel
    *
    * @return Team
    */
    public function setPrimaryChannel($val)
    {
        $this->_propDict["primaryChannel"] = $val;
        return $this;
    }
    
    /**
    * Gets the group
    *
    * @return Group The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict)) {
            if (is_a($this->_propDict["group"], "Microsoft\Graph\Beta\Model\Group")) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new Group($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }
    
    /**
    * Sets the group
    *
    * @param Group $val The group
    *
    * @return Team
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }
    
}