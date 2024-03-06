<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SharepointSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new SharepointSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharepointSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharepointSettings {
        return new SharepointSettings();
    }

    /**
     * Gets the allowedDomainGuidsForSyncApp property value. Collection of trusted domain GUIDs for the OneDrive sync app.
     * @return array<string>|null
    */
    public function getAllowedDomainGuidsForSyncApp(): ?array {
        $val = $this->getBackingStore()->get('allowedDomainGuidsForSyncApp');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedDomainGuidsForSyncApp'");
    }

    /**
     * Gets the availableManagedPathsForSiteCreation property value. Collection of managed paths available for site creation. Read-only.
     * @return array<string>|null
    */
    public function getAvailableManagedPathsForSiteCreation(): ?array {
        $val = $this->getBackingStore()->get('availableManagedPathsForSiteCreation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availableManagedPathsForSiteCreation'");
    }

    /**
     * Gets the deletedUserPersonalSiteRetentionPeriodInDays property value. The number of days for preserving a deleted user's OneDrive.
     * @return int|null
    */
    public function getDeletedUserPersonalSiteRetentionPeriodInDays(): ?int {
        $val = $this->getBackingStore()->get('deletedUserPersonalSiteRetentionPeriodInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedUserPersonalSiteRetentionPeriodInDays'");
    }

    /**
     * Gets the excludedFileExtensionsForSyncApp property value. Collection of file extensions not uploaded by the OneDrive sync app.
     * @return array<string>|null
    */
    public function getExcludedFileExtensionsForSyncApp(): ?array {
        $val = $this->getBackingStore()->get('excludedFileExtensionsForSyncApp');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedFileExtensionsForSyncApp'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedDomainGuidsForSyncApp' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedDomainGuidsForSyncApp($val);
            },
            'availableManagedPathsForSiteCreation' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAvailableManagedPathsForSiteCreation($val);
            },
            'deletedUserPersonalSiteRetentionPeriodInDays' => fn(ParseNode $n) => $o->setDeletedUserPersonalSiteRetentionPeriodInDays($n->getIntegerValue()),
            'excludedFileExtensionsForSyncApp' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludedFileExtensionsForSyncApp($val);
            },
            'idleSessionSignOut' => fn(ParseNode $n) => $o->setIdleSessionSignOut($n->getObjectValue([IdleSessionSignOut::class, 'createFromDiscriminatorValue'])),
            'imageTaggingOption' => fn(ParseNode $n) => $o->setImageTaggingOption($n->getEnumValue(ImageTaggingChoice::class)),
            'isCommentingOnSitePagesEnabled' => fn(ParseNode $n) => $o->setIsCommentingOnSitePagesEnabled($n->getBooleanValue()),
            'isFileActivityNotificationEnabled' => fn(ParseNode $n) => $o->setIsFileActivityNotificationEnabled($n->getBooleanValue()),
            'isLegacyAuthProtocolsEnabled' => fn(ParseNode $n) => $o->setIsLegacyAuthProtocolsEnabled($n->getBooleanValue()),
            'isLoopEnabled' => fn(ParseNode $n) => $o->setIsLoopEnabled($n->getBooleanValue()),
            'isMacSyncAppEnabled' => fn(ParseNode $n) => $o->setIsMacSyncAppEnabled($n->getBooleanValue()),
            'isRequireAcceptingUserToMatchInvitedUserEnabled' => fn(ParseNode $n) => $o->setIsRequireAcceptingUserToMatchInvitedUserEnabled($n->getBooleanValue()),
            'isResharingByExternalUsersEnabled' => fn(ParseNode $n) => $o->setIsResharingByExternalUsersEnabled($n->getBooleanValue()),
            'isSharePointMobileNotificationEnabled' => fn(ParseNode $n) => $o->setIsSharePointMobileNotificationEnabled($n->getBooleanValue()),
            'isSharePointNewsfeedEnabled' => fn(ParseNode $n) => $o->setIsSharePointNewsfeedEnabled($n->getBooleanValue()),
            'isSiteCreationEnabled' => fn(ParseNode $n) => $o->setIsSiteCreationEnabled($n->getBooleanValue()),
            'isSiteCreationUIEnabled' => fn(ParseNode $n) => $o->setIsSiteCreationUIEnabled($n->getBooleanValue()),
            'isSitePagesCreationEnabled' => fn(ParseNode $n) => $o->setIsSitePagesCreationEnabled($n->getBooleanValue()),
            'isSitesStorageLimitAutomatic' => fn(ParseNode $n) => $o->setIsSitesStorageLimitAutomatic($n->getBooleanValue()),
            'isSyncButtonHiddenOnPersonalSite' => fn(ParseNode $n) => $o->setIsSyncButtonHiddenOnPersonalSite($n->getBooleanValue()),
            'isUnmanagedSyncAppForTenantRestricted' => fn(ParseNode $n) => $o->setIsUnmanagedSyncAppForTenantRestricted($n->getBooleanValue()),
            'personalSiteDefaultStorageLimitInMB' => fn(ParseNode $n) => $o->setPersonalSiteDefaultStorageLimitInMB($n->getIntegerValue()),
            'sharingAllowedDomainList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSharingAllowedDomainList($val);
            },
            'sharingBlockedDomainList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSharingBlockedDomainList($val);
            },
            'sharingCapability' => fn(ParseNode $n) => $o->setSharingCapability($n->getEnumValue(SharingCapabilities::class)),
            'sharingDomainRestrictionMode' => fn(ParseNode $n) => $o->setSharingDomainRestrictionMode($n->getEnumValue(SharingDomainRestrictionMode::class)),
            'siteCreationDefaultManagedPath' => fn(ParseNode $n) => $o->setSiteCreationDefaultManagedPath($n->getStringValue()),
            'siteCreationDefaultStorageLimitInMB' => fn(ParseNode $n) => $o->setSiteCreationDefaultStorageLimitInMB($n->getIntegerValue()),
            'tenantDefaultTimezone' => fn(ParseNode $n) => $o->setTenantDefaultTimezone($n->getStringValue()),
        ]);
    }

    /**
     * Gets the idleSessionSignOut property value. Specifies the idle session sign-out policies for the tenant.
     * @return IdleSessionSignOut|null
    */
    public function getIdleSessionSignOut(): ?IdleSessionSignOut {
        $val = $this->getBackingStore()->get('idleSessionSignOut');
        if (is_null($val) || $val instanceof IdleSessionSignOut) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'idleSessionSignOut'");
    }

    /**
     * Gets the imageTaggingOption property value. Specifies the image tagging option for the tenant. Possible values are: disabled, basic, enhanced.
     * @return ImageTaggingChoice|null
    */
    public function getImageTaggingOption(): ?ImageTaggingChoice {
        $val = $this->getBackingStore()->get('imageTaggingOption');
        if (is_null($val) || $val instanceof ImageTaggingChoice) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageTaggingOption'");
    }

    /**
     * Gets the isCommentingOnSitePagesEnabled property value. Indicates whether comments are allowed on modern site pages in SharePoint.
     * @return bool|null
    */
    public function getIsCommentingOnSitePagesEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isCommentingOnSitePagesEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCommentingOnSitePagesEnabled'");
    }

    /**
     * Gets the isFileActivityNotificationEnabled property value. Indicates whether push notifications are enabled for OneDrive events.
     * @return bool|null
    */
    public function getIsFileActivityNotificationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isFileActivityNotificationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFileActivityNotificationEnabled'");
    }

    /**
     * Gets the isLegacyAuthProtocolsEnabled property value. Indicates whether legacy authentication protocols are enabled for the tenant.
     * @return bool|null
    */
    public function getIsLegacyAuthProtocolsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isLegacyAuthProtocolsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isLegacyAuthProtocolsEnabled'");
    }

    /**
     * Gets the isLoopEnabled property value. Indicates whether if Fluid Framework is allowed on SharePoint sites.
     * @return bool|null
    */
    public function getIsLoopEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isLoopEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isLoopEnabled'");
    }

    /**
     * Gets the isMacSyncAppEnabled property value. Indicates whether files can be synced using the OneDrive sync app for Mac.
     * @return bool|null
    */
    public function getIsMacSyncAppEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isMacSyncAppEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMacSyncAppEnabled'");
    }

    /**
     * Gets the isRequireAcceptingUserToMatchInvitedUserEnabled property value. Indicates whether guests must sign in using the same account to which sharing invitations are sent.
     * @return bool|null
    */
    public function getIsRequireAcceptingUserToMatchInvitedUserEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isRequireAcceptingUserToMatchInvitedUserEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequireAcceptingUserToMatchInvitedUserEnabled'");
    }

    /**
     * Gets the isResharingByExternalUsersEnabled property value. Indicates whether guests are allowed to reshare files, folders, and sites they don't own.
     * @return bool|null
    */
    public function getIsResharingByExternalUsersEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isResharingByExternalUsersEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isResharingByExternalUsersEnabled'");
    }

    /**
     * Gets the isSharePointMobileNotificationEnabled property value. Indicates whether mobile push notifications are enabled for SharePoint.
     * @return bool|null
    */
    public function getIsSharePointMobileNotificationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSharePointMobileNotificationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSharePointMobileNotificationEnabled'");
    }

    /**
     * Gets the isSharePointNewsfeedEnabled property value. Indicates whether the newsfeed is allowed on the modern site pages in SharePoint.
     * @return bool|null
    */
    public function getIsSharePointNewsfeedEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSharePointNewsfeedEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSharePointNewsfeedEnabled'");
    }

    /**
     * Gets the isSiteCreationEnabled property value. Indicates whether users are allowed to create sites.
     * @return bool|null
    */
    public function getIsSiteCreationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSiteCreationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSiteCreationEnabled'");
    }

    /**
     * Gets the isSiteCreationUIEnabled property value. Indicates whether the UI commands for creating sites are shown.
     * @return bool|null
    */
    public function getIsSiteCreationUIEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSiteCreationUIEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSiteCreationUIEnabled'");
    }

    /**
     * Gets the isSitePagesCreationEnabled property value. Indicates whether creating new modern pages is allowed on SharePoint sites.
     * @return bool|null
    */
    public function getIsSitePagesCreationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSitePagesCreationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSitePagesCreationEnabled'");
    }

    /**
     * Gets the isSitesStorageLimitAutomatic property value. Indicates whether site storage space is automatically managed or if specific storage limits are set per site.
     * @return bool|null
    */
    public function getIsSitesStorageLimitAutomatic(): ?bool {
        $val = $this->getBackingStore()->get('isSitesStorageLimitAutomatic');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSitesStorageLimitAutomatic'");
    }

    /**
     * Gets the isSyncButtonHiddenOnPersonalSite property value. Indicates whether the sync button in OneDrive is hidden.
     * @return bool|null
    */
    public function getIsSyncButtonHiddenOnPersonalSite(): ?bool {
        $val = $this->getBackingStore()->get('isSyncButtonHiddenOnPersonalSite');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSyncButtonHiddenOnPersonalSite'");
    }

    /**
     * Gets the isUnmanagedSyncAppForTenantRestricted property value. Indicates whether users are allowed to sync files only on PCs joined to specific domains.
     * @return bool|null
    */
    public function getIsUnmanagedSyncAppForTenantRestricted(): ?bool {
        $val = $this->getBackingStore()->get('isUnmanagedSyncAppForTenantRestricted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUnmanagedSyncAppForTenantRestricted'");
    }

    /**
     * Gets the personalSiteDefaultStorageLimitInMB property value. The default OneDrive storage limit for all new and existing users who are assigned a qualifying license. Measured in megabytes (MB).
     * @return int|null
    */
    public function getPersonalSiteDefaultStorageLimitInMB(): ?int {
        $val = $this->getBackingStore()->get('personalSiteDefaultStorageLimitInMB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'personalSiteDefaultStorageLimitInMB'");
    }

    /**
     * Gets the sharingAllowedDomainList property value. Collection of email domains that are allowed for sharing outside the organization.
     * @return array<string>|null
    */
    public function getSharingAllowedDomainList(): ?array {
        $val = $this->getBackingStore()->get('sharingAllowedDomainList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharingAllowedDomainList'");
    }

    /**
     * Gets the sharingBlockedDomainList property value. Collection of email domains that are blocked for sharing outside the organization.
     * @return array<string>|null
    */
    public function getSharingBlockedDomainList(): ?array {
        $val = $this->getBackingStore()->get('sharingBlockedDomainList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharingBlockedDomainList'");
    }

    /**
     * Gets the sharingCapability property value. Sharing capability for the tenant. Possible values are: disabled, externalUserSharingOnly, externalUserAndGuestSharing, existingExternalUserSharingOnly.
     * @return SharingCapabilities|null
    */
    public function getSharingCapability(): ?SharingCapabilities {
        $val = $this->getBackingStore()->get('sharingCapability');
        if (is_null($val) || $val instanceof SharingCapabilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharingCapability'");
    }

    /**
     * Gets the sharingDomainRestrictionMode property value. Specifies the external sharing mode for domains. Possible values are: none, allowList, blockList.
     * @return SharingDomainRestrictionMode|null
    */
    public function getSharingDomainRestrictionMode(): ?SharingDomainRestrictionMode {
        $val = $this->getBackingStore()->get('sharingDomainRestrictionMode');
        if (is_null($val) || $val instanceof SharingDomainRestrictionMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharingDomainRestrictionMode'");
    }

    /**
     * Gets the siteCreationDefaultManagedPath property value. The value of the team site managed path. This is the path under which new team sites will be created.
     * @return string|null
    */
    public function getSiteCreationDefaultManagedPath(): ?string {
        $val = $this->getBackingStore()->get('siteCreationDefaultManagedPath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteCreationDefaultManagedPath'");
    }

    /**
     * Gets the siteCreationDefaultStorageLimitInMB property value. The default storage quota for a new site upon creation. Measured in megabytes (MB).
     * @return int|null
    */
    public function getSiteCreationDefaultStorageLimitInMB(): ?int {
        $val = $this->getBackingStore()->get('siteCreationDefaultStorageLimitInMB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteCreationDefaultStorageLimitInMB'");
    }

    /**
     * Gets the tenantDefaultTimezone property value. The default timezone of a tenant for newly created sites. For a list of possible values, see SPRegionalSettings.TimeZones property.
     * @return string|null
    */
    public function getTenantDefaultTimezone(): ?string {
        $val = $this->getBackingStore()->get('tenantDefaultTimezone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantDefaultTimezone'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedDomainGuidsForSyncApp', $this->getAllowedDomainGuidsForSyncApp());
        $writer->writeCollectionOfPrimitiveValues('availableManagedPathsForSiteCreation', $this->getAvailableManagedPathsForSiteCreation());
        $writer->writeIntegerValue('deletedUserPersonalSiteRetentionPeriodInDays', $this->getDeletedUserPersonalSiteRetentionPeriodInDays());
        $writer->writeCollectionOfPrimitiveValues('excludedFileExtensionsForSyncApp', $this->getExcludedFileExtensionsForSyncApp());
        $writer->writeObjectValue('idleSessionSignOut', $this->getIdleSessionSignOut());
        $writer->writeEnumValue('imageTaggingOption', $this->getImageTaggingOption());
        $writer->writeBooleanValue('isCommentingOnSitePagesEnabled', $this->getIsCommentingOnSitePagesEnabled());
        $writer->writeBooleanValue('isFileActivityNotificationEnabled', $this->getIsFileActivityNotificationEnabled());
        $writer->writeBooleanValue('isLegacyAuthProtocolsEnabled', $this->getIsLegacyAuthProtocolsEnabled());
        $writer->writeBooleanValue('isLoopEnabled', $this->getIsLoopEnabled());
        $writer->writeBooleanValue('isMacSyncAppEnabled', $this->getIsMacSyncAppEnabled());
        $writer->writeBooleanValue('isRequireAcceptingUserToMatchInvitedUserEnabled', $this->getIsRequireAcceptingUserToMatchInvitedUserEnabled());
        $writer->writeBooleanValue('isResharingByExternalUsersEnabled', $this->getIsResharingByExternalUsersEnabled());
        $writer->writeBooleanValue('isSharePointMobileNotificationEnabled', $this->getIsSharePointMobileNotificationEnabled());
        $writer->writeBooleanValue('isSharePointNewsfeedEnabled', $this->getIsSharePointNewsfeedEnabled());
        $writer->writeBooleanValue('isSiteCreationEnabled', $this->getIsSiteCreationEnabled());
        $writer->writeBooleanValue('isSiteCreationUIEnabled', $this->getIsSiteCreationUIEnabled());
        $writer->writeBooleanValue('isSitePagesCreationEnabled', $this->getIsSitePagesCreationEnabled());
        $writer->writeBooleanValue('isSitesStorageLimitAutomatic', $this->getIsSitesStorageLimitAutomatic());
        $writer->writeBooleanValue('isSyncButtonHiddenOnPersonalSite', $this->getIsSyncButtonHiddenOnPersonalSite());
        $writer->writeBooleanValue('isUnmanagedSyncAppForTenantRestricted', $this->getIsUnmanagedSyncAppForTenantRestricted());
        $writer->writeIntegerValue('personalSiteDefaultStorageLimitInMB', $this->getPersonalSiteDefaultStorageLimitInMB());
        $writer->writeCollectionOfPrimitiveValues('sharingAllowedDomainList', $this->getSharingAllowedDomainList());
        $writer->writeCollectionOfPrimitiveValues('sharingBlockedDomainList', $this->getSharingBlockedDomainList());
        $writer->writeEnumValue('sharingCapability', $this->getSharingCapability());
        $writer->writeEnumValue('sharingDomainRestrictionMode', $this->getSharingDomainRestrictionMode());
        $writer->writeStringValue('siteCreationDefaultManagedPath', $this->getSiteCreationDefaultManagedPath());
        $writer->writeIntegerValue('siteCreationDefaultStorageLimitInMB', $this->getSiteCreationDefaultStorageLimitInMB());
        $writer->writeStringValue('tenantDefaultTimezone', $this->getTenantDefaultTimezone());
    }

    /**
     * Sets the allowedDomainGuidsForSyncApp property value. Collection of trusted domain GUIDs for the OneDrive sync app.
     * @param array<string>|null $value Value to set for the allowedDomainGuidsForSyncApp property.
    */
    public function setAllowedDomainGuidsForSyncApp(?array $value): void {
        $this->getBackingStore()->set('allowedDomainGuidsForSyncApp', $value);
    }

    /**
     * Sets the availableManagedPathsForSiteCreation property value. Collection of managed paths available for site creation. Read-only.
     * @param array<string>|null $value Value to set for the availableManagedPathsForSiteCreation property.
    */
    public function setAvailableManagedPathsForSiteCreation(?array $value): void {
        $this->getBackingStore()->set('availableManagedPathsForSiteCreation', $value);
    }

    /**
     * Sets the deletedUserPersonalSiteRetentionPeriodInDays property value. The number of days for preserving a deleted user's OneDrive.
     * @param int|null $value Value to set for the deletedUserPersonalSiteRetentionPeriodInDays property.
    */
    public function setDeletedUserPersonalSiteRetentionPeriodInDays(?int $value): void {
        $this->getBackingStore()->set('deletedUserPersonalSiteRetentionPeriodInDays', $value);
    }

    /**
     * Sets the excludedFileExtensionsForSyncApp property value. Collection of file extensions not uploaded by the OneDrive sync app.
     * @param array<string>|null $value Value to set for the excludedFileExtensionsForSyncApp property.
    */
    public function setExcludedFileExtensionsForSyncApp(?array $value): void {
        $this->getBackingStore()->set('excludedFileExtensionsForSyncApp', $value);
    }

    /**
     * Sets the idleSessionSignOut property value. Specifies the idle session sign-out policies for the tenant.
     * @param IdleSessionSignOut|null $value Value to set for the idleSessionSignOut property.
    */
    public function setIdleSessionSignOut(?IdleSessionSignOut $value): void {
        $this->getBackingStore()->set('idleSessionSignOut', $value);
    }

    /**
     * Sets the imageTaggingOption property value. Specifies the image tagging option for the tenant. Possible values are: disabled, basic, enhanced.
     * @param ImageTaggingChoice|null $value Value to set for the imageTaggingOption property.
    */
    public function setImageTaggingOption(?ImageTaggingChoice $value): void {
        $this->getBackingStore()->set('imageTaggingOption', $value);
    }

    /**
     * Sets the isCommentingOnSitePagesEnabled property value. Indicates whether comments are allowed on modern site pages in SharePoint.
     * @param bool|null $value Value to set for the isCommentingOnSitePagesEnabled property.
    */
    public function setIsCommentingOnSitePagesEnabled(?bool $value): void {
        $this->getBackingStore()->set('isCommentingOnSitePagesEnabled', $value);
    }

    /**
     * Sets the isFileActivityNotificationEnabled property value. Indicates whether push notifications are enabled for OneDrive events.
     * @param bool|null $value Value to set for the isFileActivityNotificationEnabled property.
    */
    public function setIsFileActivityNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isFileActivityNotificationEnabled', $value);
    }

    /**
     * Sets the isLegacyAuthProtocolsEnabled property value. Indicates whether legacy authentication protocols are enabled for the tenant.
     * @param bool|null $value Value to set for the isLegacyAuthProtocolsEnabled property.
    */
    public function setIsLegacyAuthProtocolsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isLegacyAuthProtocolsEnabled', $value);
    }

    /**
     * Sets the isLoopEnabled property value. Indicates whether if Fluid Framework is allowed on SharePoint sites.
     * @param bool|null $value Value to set for the isLoopEnabled property.
    */
    public function setIsLoopEnabled(?bool $value): void {
        $this->getBackingStore()->set('isLoopEnabled', $value);
    }

    /**
     * Sets the isMacSyncAppEnabled property value. Indicates whether files can be synced using the OneDrive sync app for Mac.
     * @param bool|null $value Value to set for the isMacSyncAppEnabled property.
    */
    public function setIsMacSyncAppEnabled(?bool $value): void {
        $this->getBackingStore()->set('isMacSyncAppEnabled', $value);
    }

    /**
     * Sets the isRequireAcceptingUserToMatchInvitedUserEnabled property value. Indicates whether guests must sign in using the same account to which sharing invitations are sent.
     * @param bool|null $value Value to set for the isRequireAcceptingUserToMatchInvitedUserEnabled property.
    */
    public function setIsRequireAcceptingUserToMatchInvitedUserEnabled(?bool $value): void {
        $this->getBackingStore()->set('isRequireAcceptingUserToMatchInvitedUserEnabled', $value);
    }

    /**
     * Sets the isResharingByExternalUsersEnabled property value. Indicates whether guests are allowed to reshare files, folders, and sites they don't own.
     * @param bool|null $value Value to set for the isResharingByExternalUsersEnabled property.
    */
    public function setIsResharingByExternalUsersEnabled(?bool $value): void {
        $this->getBackingStore()->set('isResharingByExternalUsersEnabled', $value);
    }

    /**
     * Sets the isSharePointMobileNotificationEnabled property value. Indicates whether mobile push notifications are enabled for SharePoint.
     * @param bool|null $value Value to set for the isSharePointMobileNotificationEnabled property.
    */
    public function setIsSharePointMobileNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSharePointMobileNotificationEnabled', $value);
    }

    /**
     * Sets the isSharePointNewsfeedEnabled property value. Indicates whether the newsfeed is allowed on the modern site pages in SharePoint.
     * @param bool|null $value Value to set for the isSharePointNewsfeedEnabled property.
    */
    public function setIsSharePointNewsfeedEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSharePointNewsfeedEnabled', $value);
    }

    /**
     * Sets the isSiteCreationEnabled property value. Indicates whether users are allowed to create sites.
     * @param bool|null $value Value to set for the isSiteCreationEnabled property.
    */
    public function setIsSiteCreationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSiteCreationEnabled', $value);
    }

    /**
     * Sets the isSiteCreationUIEnabled property value. Indicates whether the UI commands for creating sites are shown.
     * @param bool|null $value Value to set for the isSiteCreationUIEnabled property.
    */
    public function setIsSiteCreationUIEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSiteCreationUIEnabled', $value);
    }

    /**
     * Sets the isSitePagesCreationEnabled property value. Indicates whether creating new modern pages is allowed on SharePoint sites.
     * @param bool|null $value Value to set for the isSitePagesCreationEnabled property.
    */
    public function setIsSitePagesCreationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSitePagesCreationEnabled', $value);
    }

    /**
     * Sets the isSitesStorageLimitAutomatic property value. Indicates whether site storage space is automatically managed or if specific storage limits are set per site.
     * @param bool|null $value Value to set for the isSitesStorageLimitAutomatic property.
    */
    public function setIsSitesStorageLimitAutomatic(?bool $value): void {
        $this->getBackingStore()->set('isSitesStorageLimitAutomatic', $value);
    }

    /**
     * Sets the isSyncButtonHiddenOnPersonalSite property value. Indicates whether the sync button in OneDrive is hidden.
     * @param bool|null $value Value to set for the isSyncButtonHiddenOnPersonalSite property.
    */
    public function setIsSyncButtonHiddenOnPersonalSite(?bool $value): void {
        $this->getBackingStore()->set('isSyncButtonHiddenOnPersonalSite', $value);
    }

    /**
     * Sets the isUnmanagedSyncAppForTenantRestricted property value. Indicates whether users are allowed to sync files only on PCs joined to specific domains.
     * @param bool|null $value Value to set for the isUnmanagedSyncAppForTenantRestricted property.
    */
    public function setIsUnmanagedSyncAppForTenantRestricted(?bool $value): void {
        $this->getBackingStore()->set('isUnmanagedSyncAppForTenantRestricted', $value);
    }

    /**
     * Sets the personalSiteDefaultStorageLimitInMB property value. The default OneDrive storage limit for all new and existing users who are assigned a qualifying license. Measured in megabytes (MB).
     * @param int|null $value Value to set for the personalSiteDefaultStorageLimitInMB property.
    */
    public function setPersonalSiteDefaultStorageLimitInMB(?int $value): void {
        $this->getBackingStore()->set('personalSiteDefaultStorageLimitInMB', $value);
    }

    /**
     * Sets the sharingAllowedDomainList property value. Collection of email domains that are allowed for sharing outside the organization.
     * @param array<string>|null $value Value to set for the sharingAllowedDomainList property.
    */
    public function setSharingAllowedDomainList(?array $value): void {
        $this->getBackingStore()->set('sharingAllowedDomainList', $value);
    }

    /**
     * Sets the sharingBlockedDomainList property value. Collection of email domains that are blocked for sharing outside the organization.
     * @param array<string>|null $value Value to set for the sharingBlockedDomainList property.
    */
    public function setSharingBlockedDomainList(?array $value): void {
        $this->getBackingStore()->set('sharingBlockedDomainList', $value);
    }

    /**
     * Sets the sharingCapability property value. Sharing capability for the tenant. Possible values are: disabled, externalUserSharingOnly, externalUserAndGuestSharing, existingExternalUserSharingOnly.
     * @param SharingCapabilities|null $value Value to set for the sharingCapability property.
    */
    public function setSharingCapability(?SharingCapabilities $value): void {
        $this->getBackingStore()->set('sharingCapability', $value);
    }

    /**
     * Sets the sharingDomainRestrictionMode property value. Specifies the external sharing mode for domains. Possible values are: none, allowList, blockList.
     * @param SharingDomainRestrictionMode|null $value Value to set for the sharingDomainRestrictionMode property.
    */
    public function setSharingDomainRestrictionMode(?SharingDomainRestrictionMode $value): void {
        $this->getBackingStore()->set('sharingDomainRestrictionMode', $value);
    }

    /**
     * Sets the siteCreationDefaultManagedPath property value. The value of the team site managed path. This is the path under which new team sites will be created.
     * @param string|null $value Value to set for the siteCreationDefaultManagedPath property.
    */
    public function setSiteCreationDefaultManagedPath(?string $value): void {
        $this->getBackingStore()->set('siteCreationDefaultManagedPath', $value);
    }

    /**
     * Sets the siteCreationDefaultStorageLimitInMB property value. The default storage quota for a new site upon creation. Measured in megabytes (MB).
     * @param int|null $value Value to set for the siteCreationDefaultStorageLimitInMB property.
    */
    public function setSiteCreationDefaultStorageLimitInMB(?int $value): void {
        $this->getBackingStore()->set('siteCreationDefaultStorageLimitInMB', $value);
    }

    /**
     * Sets the tenantDefaultTimezone property value. The default timezone of a tenant for newly created sites. For a list of possible values, see SPRegionalSettings.TimeZones property.
     * @param string|null $value Value to set for the tenantDefaultTimezone property.
    */
    public function setTenantDefaultTimezone(?string $value): void {
        $this->getBackingStore()->set('tenantDefaultTimezone', $value);
    }

}
