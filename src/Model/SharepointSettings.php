<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharepointSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* SharepointSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharepointSettings extends Entity
{
    /**
    * Gets the allowedDomainGuidsForSyncApp
    *
    * @return array|null The allowedDomainGuidsForSyncApp
    */
    public function getAllowedDomainGuidsForSyncApp()
    {
        if (array_key_exists("allowedDomainGuidsForSyncApp", $this->_propDict)) {
            return $this->_propDict["allowedDomainGuidsForSyncApp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedDomainGuidsForSyncApp
    *
    * @param string[] $val The allowedDomainGuidsForSyncApp
    *
    * @return SharepointSettings
    */
    public function setAllowedDomainGuidsForSyncApp($val)
    {
        $this->_propDict["allowedDomainGuidsForSyncApp"] = $val;
        return $this;
    }

    /**
    * Gets the availableManagedPathsForSiteCreation
    *
    * @return array|null The availableManagedPathsForSiteCreation
    */
    public function getAvailableManagedPathsForSiteCreation()
    {
        if (array_key_exists("availableManagedPathsForSiteCreation", $this->_propDict)) {
            return $this->_propDict["availableManagedPathsForSiteCreation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the availableManagedPathsForSiteCreation
    *
    * @param string[] $val The availableManagedPathsForSiteCreation
    *
    * @return SharepointSettings
    */
    public function setAvailableManagedPathsForSiteCreation($val)
    {
        $this->_propDict["availableManagedPathsForSiteCreation"] = $val;
        return $this;
    }

    /**
    * Gets the deletedUserPersonalSiteRetentionPeriodInDays
    *
    * @return int|null The deletedUserPersonalSiteRetentionPeriodInDays
    */
    public function getDeletedUserPersonalSiteRetentionPeriodInDays()
    {
        if (array_key_exists("deletedUserPersonalSiteRetentionPeriodInDays", $this->_propDict)) {
            return $this->_propDict["deletedUserPersonalSiteRetentionPeriodInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deletedUserPersonalSiteRetentionPeriodInDays
    *
    * @param int $val The deletedUserPersonalSiteRetentionPeriodInDays
    *
    * @return SharepointSettings
    */
    public function setDeletedUserPersonalSiteRetentionPeriodInDays($val)
    {
        $this->_propDict["deletedUserPersonalSiteRetentionPeriodInDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the excludedFileExtensionsForSyncApp
    *
    * @return array|null The excludedFileExtensionsForSyncApp
    */
    public function getExcludedFileExtensionsForSyncApp()
    {
        if (array_key_exists("excludedFileExtensionsForSyncApp", $this->_propDict)) {
            return $this->_propDict["excludedFileExtensionsForSyncApp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludedFileExtensionsForSyncApp
    *
    * @param string[] $val The excludedFileExtensionsForSyncApp
    *
    * @return SharepointSettings
    */
    public function setExcludedFileExtensionsForSyncApp($val)
    {
        $this->_propDict["excludedFileExtensionsForSyncApp"] = $val;
        return $this;
    }

    /**
    * Gets the idleSessionSignOut
    *
    * @return IdleSessionSignOut|null The idleSessionSignOut
    */
    public function getIdleSessionSignOut()
    {
        if (array_key_exists("idleSessionSignOut", $this->_propDict)) {
            if (is_a($this->_propDict["idleSessionSignOut"], "\Microsoft\Graph\Model\IdleSessionSignOut") || is_null($this->_propDict["idleSessionSignOut"])) {
                return $this->_propDict["idleSessionSignOut"];
            } else {
                $this->_propDict["idleSessionSignOut"] = new IdleSessionSignOut($this->_propDict["idleSessionSignOut"]);
                return $this->_propDict["idleSessionSignOut"];
            }
        }
        return null;
    }

    /**
    * Sets the idleSessionSignOut
    *
    * @param IdleSessionSignOut $val The idleSessionSignOut
    *
    * @return SharepointSettings
    */
    public function setIdleSessionSignOut($val)
    {
        $this->_propDict["idleSessionSignOut"] = $val;
        return $this;
    }

    /**
    * Gets the imageTaggingOption
    *
    * @return ImageTaggingChoice|null The imageTaggingOption
    */
    public function getImageTaggingOption()
    {
        if (array_key_exists("imageTaggingOption", $this->_propDict)) {
            if (is_a($this->_propDict["imageTaggingOption"], "\Microsoft\Graph\Model\ImageTaggingChoice") || is_null($this->_propDict["imageTaggingOption"])) {
                return $this->_propDict["imageTaggingOption"];
            } else {
                $this->_propDict["imageTaggingOption"] = new ImageTaggingChoice($this->_propDict["imageTaggingOption"]);
                return $this->_propDict["imageTaggingOption"];
            }
        }
        return null;
    }

    /**
    * Sets the imageTaggingOption
    *
    * @param ImageTaggingChoice $val The imageTaggingOption
    *
    * @return SharepointSettings
    */
    public function setImageTaggingOption($val)
    {
        $this->_propDict["imageTaggingOption"] = $val;
        return $this;
    }

    /**
    * Gets the isCommentingOnSitePagesEnabled
    *
    * @return bool|null The isCommentingOnSitePagesEnabled
    */
    public function getIsCommentingOnSitePagesEnabled()
    {
        if (array_key_exists("isCommentingOnSitePagesEnabled", $this->_propDict)) {
            return $this->_propDict["isCommentingOnSitePagesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCommentingOnSitePagesEnabled
    *
    * @param bool $val The isCommentingOnSitePagesEnabled
    *
    * @return SharepointSettings
    */
    public function setIsCommentingOnSitePagesEnabled($val)
    {
        $this->_propDict["isCommentingOnSitePagesEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isFileActivityNotificationEnabled
    *
    * @return bool|null The isFileActivityNotificationEnabled
    */
    public function getIsFileActivityNotificationEnabled()
    {
        if (array_key_exists("isFileActivityNotificationEnabled", $this->_propDict)) {
            return $this->_propDict["isFileActivityNotificationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isFileActivityNotificationEnabled
    *
    * @param bool $val The isFileActivityNotificationEnabled
    *
    * @return SharepointSettings
    */
    public function setIsFileActivityNotificationEnabled($val)
    {
        $this->_propDict["isFileActivityNotificationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isLegacyAuthProtocolsEnabled
    *
    * @return bool|null The isLegacyAuthProtocolsEnabled
    */
    public function getIsLegacyAuthProtocolsEnabled()
    {
        if (array_key_exists("isLegacyAuthProtocolsEnabled", $this->_propDict)) {
            return $this->_propDict["isLegacyAuthProtocolsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLegacyAuthProtocolsEnabled
    *
    * @param bool $val The isLegacyAuthProtocolsEnabled
    *
    * @return SharepointSettings
    */
    public function setIsLegacyAuthProtocolsEnabled($val)
    {
        $this->_propDict["isLegacyAuthProtocolsEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isLoopEnabled
    *
    * @return bool|null The isLoopEnabled
    */
    public function getIsLoopEnabled()
    {
        if (array_key_exists("isLoopEnabled", $this->_propDict)) {
            return $this->_propDict["isLoopEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLoopEnabled
    *
    * @param bool $val The isLoopEnabled
    *
    * @return SharepointSettings
    */
    public function setIsLoopEnabled($val)
    {
        $this->_propDict["isLoopEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMacSyncAppEnabled
    *
    * @return bool|null The isMacSyncAppEnabled
    */
    public function getIsMacSyncAppEnabled()
    {
        if (array_key_exists("isMacSyncAppEnabled", $this->_propDict)) {
            return $this->_propDict["isMacSyncAppEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMacSyncAppEnabled
    *
    * @param bool $val The isMacSyncAppEnabled
    *
    * @return SharepointSettings
    */
    public function setIsMacSyncAppEnabled($val)
    {
        $this->_propDict["isMacSyncAppEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isRequireAcceptingUserToMatchInvitedUserEnabled
    *
    * @return bool|null The isRequireAcceptingUserToMatchInvitedUserEnabled
    */
    public function getIsRequireAcceptingUserToMatchInvitedUserEnabled()
    {
        if (array_key_exists("isRequireAcceptingUserToMatchInvitedUserEnabled", $this->_propDict)) {
            return $this->_propDict["isRequireAcceptingUserToMatchInvitedUserEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequireAcceptingUserToMatchInvitedUserEnabled
    *
    * @param bool $val The isRequireAcceptingUserToMatchInvitedUserEnabled
    *
    * @return SharepointSettings
    */
    public function setIsRequireAcceptingUserToMatchInvitedUserEnabled($val)
    {
        $this->_propDict["isRequireAcceptingUserToMatchInvitedUserEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isResharingByExternalUsersEnabled
    *
    * @return bool|null The isResharingByExternalUsersEnabled
    */
    public function getIsResharingByExternalUsersEnabled()
    {
        if (array_key_exists("isResharingByExternalUsersEnabled", $this->_propDict)) {
            return $this->_propDict["isResharingByExternalUsersEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isResharingByExternalUsersEnabled
    *
    * @param bool $val The isResharingByExternalUsersEnabled
    *
    * @return SharepointSettings
    */
    public function setIsResharingByExternalUsersEnabled($val)
    {
        $this->_propDict["isResharingByExternalUsersEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSharePointMobileNotificationEnabled
    *
    * @return bool|null The isSharePointMobileNotificationEnabled
    */
    public function getIsSharePointMobileNotificationEnabled()
    {
        if (array_key_exists("isSharePointMobileNotificationEnabled", $this->_propDict)) {
            return $this->_propDict["isSharePointMobileNotificationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSharePointMobileNotificationEnabled
    *
    * @param bool $val The isSharePointMobileNotificationEnabled
    *
    * @return SharepointSettings
    */
    public function setIsSharePointMobileNotificationEnabled($val)
    {
        $this->_propDict["isSharePointMobileNotificationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSharePointNewsfeedEnabled
    *
    * @return bool|null The isSharePointNewsfeedEnabled
    */
    public function getIsSharePointNewsfeedEnabled()
    {
        if (array_key_exists("isSharePointNewsfeedEnabled", $this->_propDict)) {
            return $this->_propDict["isSharePointNewsfeedEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSharePointNewsfeedEnabled
    *
    * @param bool $val The isSharePointNewsfeedEnabled
    *
    * @return SharepointSettings
    */
    public function setIsSharePointNewsfeedEnabled($val)
    {
        $this->_propDict["isSharePointNewsfeedEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSiteCreationEnabled
    *
    * @return bool|null The isSiteCreationEnabled
    */
    public function getIsSiteCreationEnabled()
    {
        if (array_key_exists("isSiteCreationEnabled", $this->_propDict)) {
            return $this->_propDict["isSiteCreationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSiteCreationEnabled
    *
    * @param bool $val The isSiteCreationEnabled
    *
    * @return SharepointSettings
    */
    public function setIsSiteCreationEnabled($val)
    {
        $this->_propDict["isSiteCreationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSiteCreationUIEnabled
    *
    * @return bool|null The isSiteCreationUIEnabled
    */
    public function getIsSiteCreationUIEnabled()
    {
        if (array_key_exists("isSiteCreationUIEnabled", $this->_propDict)) {
            return $this->_propDict["isSiteCreationUIEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSiteCreationUIEnabled
    *
    * @param bool $val The isSiteCreationUIEnabled
    *
    * @return SharepointSettings
    */
    public function setIsSiteCreationUIEnabled($val)
    {
        $this->_propDict["isSiteCreationUIEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSitePagesCreationEnabled
    *
    * @return bool|null The isSitePagesCreationEnabled
    */
    public function getIsSitePagesCreationEnabled()
    {
        if (array_key_exists("isSitePagesCreationEnabled", $this->_propDict)) {
            return $this->_propDict["isSitePagesCreationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSitePagesCreationEnabled
    *
    * @param bool $val The isSitePagesCreationEnabled
    *
    * @return SharepointSettings
    */
    public function setIsSitePagesCreationEnabled($val)
    {
        $this->_propDict["isSitePagesCreationEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSitesStorageLimitAutomatic
    *
    * @return bool|null The isSitesStorageLimitAutomatic
    */
    public function getIsSitesStorageLimitAutomatic()
    {
        if (array_key_exists("isSitesStorageLimitAutomatic", $this->_propDict)) {
            return $this->_propDict["isSitesStorageLimitAutomatic"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSitesStorageLimitAutomatic
    *
    * @param bool $val The isSitesStorageLimitAutomatic
    *
    * @return SharepointSettings
    */
    public function setIsSitesStorageLimitAutomatic($val)
    {
        $this->_propDict["isSitesStorageLimitAutomatic"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSyncButtonHiddenOnPersonalSite
    *
    * @return bool|null The isSyncButtonHiddenOnPersonalSite
    */
    public function getIsSyncButtonHiddenOnPersonalSite()
    {
        if (array_key_exists("isSyncButtonHiddenOnPersonalSite", $this->_propDict)) {
            return $this->_propDict["isSyncButtonHiddenOnPersonalSite"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSyncButtonHiddenOnPersonalSite
    *
    * @param bool $val The isSyncButtonHiddenOnPersonalSite
    *
    * @return SharepointSettings
    */
    public function setIsSyncButtonHiddenOnPersonalSite($val)
    {
        $this->_propDict["isSyncButtonHiddenOnPersonalSite"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isUnmanagedSyncAppForTenantRestricted
    *
    * @return bool|null The isUnmanagedSyncAppForTenantRestricted
    */
    public function getIsUnmanagedSyncAppForTenantRestricted()
    {
        if (array_key_exists("isUnmanagedSyncAppForTenantRestricted", $this->_propDict)) {
            return $this->_propDict["isUnmanagedSyncAppForTenantRestricted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isUnmanagedSyncAppForTenantRestricted
    *
    * @param bool $val The isUnmanagedSyncAppForTenantRestricted
    *
    * @return SharepointSettings
    */
    public function setIsUnmanagedSyncAppForTenantRestricted($val)
    {
        $this->_propDict["isUnmanagedSyncAppForTenantRestricted"] = boolval($val);
        return $this;
    }

    /**
    * Gets the personalSiteDefaultStorageLimitInMB
    *
    * @return int|null The personalSiteDefaultStorageLimitInMB
    */
    public function getPersonalSiteDefaultStorageLimitInMB()
    {
        if (array_key_exists("personalSiteDefaultStorageLimitInMB", $this->_propDict)) {
            return $this->_propDict["personalSiteDefaultStorageLimitInMB"];
        } else {
            return null;
        }
    }

    /**
    * Sets the personalSiteDefaultStorageLimitInMB
    *
    * @param int $val The personalSiteDefaultStorageLimitInMB
    *
    * @return SharepointSettings
    */
    public function setPersonalSiteDefaultStorageLimitInMB($val)
    {
        $this->_propDict["personalSiteDefaultStorageLimitInMB"] = intval($val);
        return $this;
    }

    /**
    * Gets the sharingAllowedDomainList
    *
    * @return array|null The sharingAllowedDomainList
    */
    public function getSharingAllowedDomainList()
    {
        if (array_key_exists("sharingAllowedDomainList", $this->_propDict)) {
            return $this->_propDict["sharingAllowedDomainList"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharingAllowedDomainList
    *
    * @param string[] $val The sharingAllowedDomainList
    *
    * @return SharepointSettings
    */
    public function setSharingAllowedDomainList($val)
    {
        $this->_propDict["sharingAllowedDomainList"] = $val;
        return $this;
    }

    /**
    * Gets the sharingBlockedDomainList
    *
    * @return array|null The sharingBlockedDomainList
    */
    public function getSharingBlockedDomainList()
    {
        if (array_key_exists("sharingBlockedDomainList", $this->_propDict)) {
            return $this->_propDict["sharingBlockedDomainList"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharingBlockedDomainList
    *
    * @param string[] $val The sharingBlockedDomainList
    *
    * @return SharepointSettings
    */
    public function setSharingBlockedDomainList($val)
    {
        $this->_propDict["sharingBlockedDomainList"] = $val;
        return $this;
    }

    /**
    * Gets the sharingCapability
    *
    * @return SharingCapabilities|null The sharingCapability
    */
    public function getSharingCapability()
    {
        if (array_key_exists("sharingCapability", $this->_propDict)) {
            if (is_a($this->_propDict["sharingCapability"], "\Microsoft\Graph\Model\SharingCapabilities") || is_null($this->_propDict["sharingCapability"])) {
                return $this->_propDict["sharingCapability"];
            } else {
                $this->_propDict["sharingCapability"] = new SharingCapabilities($this->_propDict["sharingCapability"]);
                return $this->_propDict["sharingCapability"];
            }
        }
        return null;
    }

    /**
    * Sets the sharingCapability
    *
    * @param SharingCapabilities $val The sharingCapability
    *
    * @return SharepointSettings
    */
    public function setSharingCapability($val)
    {
        $this->_propDict["sharingCapability"] = $val;
        return $this;
    }

    /**
    * Gets the sharingDomainRestrictionMode
    *
    * @return SharingDomainRestrictionMode|null The sharingDomainRestrictionMode
    */
    public function getSharingDomainRestrictionMode()
    {
        if (array_key_exists("sharingDomainRestrictionMode", $this->_propDict)) {
            if (is_a($this->_propDict["sharingDomainRestrictionMode"], "\Microsoft\Graph\Model\SharingDomainRestrictionMode") || is_null($this->_propDict["sharingDomainRestrictionMode"])) {
                return $this->_propDict["sharingDomainRestrictionMode"];
            } else {
                $this->_propDict["sharingDomainRestrictionMode"] = new SharingDomainRestrictionMode($this->_propDict["sharingDomainRestrictionMode"]);
                return $this->_propDict["sharingDomainRestrictionMode"];
            }
        }
        return null;
    }

    /**
    * Sets the sharingDomainRestrictionMode
    *
    * @param SharingDomainRestrictionMode $val The sharingDomainRestrictionMode
    *
    * @return SharepointSettings
    */
    public function setSharingDomainRestrictionMode($val)
    {
        $this->_propDict["sharingDomainRestrictionMode"] = $val;
        return $this;
    }

    /**
    * Gets the siteCreationDefaultManagedPath
    *
    * @return string|null The siteCreationDefaultManagedPath
    */
    public function getSiteCreationDefaultManagedPath()
    {
        if (array_key_exists("siteCreationDefaultManagedPath", $this->_propDict)) {
            return $this->_propDict["siteCreationDefaultManagedPath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteCreationDefaultManagedPath
    *
    * @param string $val The siteCreationDefaultManagedPath
    *
    * @return SharepointSettings
    */
    public function setSiteCreationDefaultManagedPath($val)
    {
        $this->_propDict["siteCreationDefaultManagedPath"] = $val;
        return $this;
    }

    /**
    * Gets the siteCreationDefaultStorageLimitInMB
    *
    * @return int|null The siteCreationDefaultStorageLimitInMB
    */
    public function getSiteCreationDefaultStorageLimitInMB()
    {
        if (array_key_exists("siteCreationDefaultStorageLimitInMB", $this->_propDict)) {
            return $this->_propDict["siteCreationDefaultStorageLimitInMB"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteCreationDefaultStorageLimitInMB
    *
    * @param int $val The siteCreationDefaultStorageLimitInMB
    *
    * @return SharepointSettings
    */
    public function setSiteCreationDefaultStorageLimitInMB($val)
    {
        $this->_propDict["siteCreationDefaultStorageLimitInMB"] = intval($val);
        return $this;
    }

    /**
    * Gets the tenantDefaultTimezone
    *
    * @return string|null The tenantDefaultTimezone
    */
    public function getTenantDefaultTimezone()
    {
        if (array_key_exists("tenantDefaultTimezone", $this->_propDict)) {
            return $this->_propDict["tenantDefaultTimezone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantDefaultTimezone
    *
    * @param string $val The tenantDefaultTimezone
    *
    * @return SharepointSettings
    */
    public function setTenantDefaultTimezone($val)
    {
        $this->_propDict["tenantDefaultTimezone"] = $val;
        return $this;
    }

}
