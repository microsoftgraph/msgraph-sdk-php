<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharepointSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new sharepointSettings and sets the default values.
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
     * Gets the allowedDomainGuidsForSyncApp property value. The allowedDomainGuidsForSyncApp property
     * @return array<string>|null
    */
    public function getAllowedDomainGuidsForSyncApp(): ?array {
        return $this->getBackingStore()->get('allowedDomainGuidsForSyncApp');
    }

    /**
     * Gets the availableManagedPathsForSiteCreation property value. The availableManagedPathsForSiteCreation property
     * @return array<string>|null
    */
    public function getAvailableManagedPathsForSiteCreation(): ?array {
        return $this->getBackingStore()->get('availableManagedPathsForSiteCreation');
    }

    /**
     * Gets the deletedUserPersonalSiteRetentionPeriodInDays property value. The deletedUserPersonalSiteRetentionPeriodInDays property
     * @return int|null
    */
    public function getDeletedUserPersonalSiteRetentionPeriodInDays(): ?int {
        return $this->getBackingStore()->get('deletedUserPersonalSiteRetentionPeriodInDays');
    }

    /**
     * Gets the excludedFileExtensionsForSyncApp property value. The excludedFileExtensionsForSyncApp property
     * @return array<string>|null
    */
    public function getExcludedFileExtensionsForSyncApp(): ?array {
        return $this->getBackingStore()->get('excludedFileExtensionsForSyncApp');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedDomainGuidsForSyncApp' => fn(ParseNode $n) => $o->setAllowedDomainGuidsForSyncApp($n->getCollectionOfPrimitiveValues()),
            'availableManagedPathsForSiteCreation' => fn(ParseNode $n) => $o->setAvailableManagedPathsForSiteCreation($n->getCollectionOfPrimitiveValues()),
            'deletedUserPersonalSiteRetentionPeriodInDays' => fn(ParseNode $n) => $o->setDeletedUserPersonalSiteRetentionPeriodInDays($n->getIntegerValue()),
            'excludedFileExtensionsForSyncApp' => fn(ParseNode $n) => $o->setExcludedFileExtensionsForSyncApp($n->getCollectionOfPrimitiveValues()),
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
            'sharingAllowedDomainList' => fn(ParseNode $n) => $o->setSharingAllowedDomainList($n->getCollectionOfPrimitiveValues()),
            'sharingBlockedDomainList' => fn(ParseNode $n) => $o->setSharingBlockedDomainList($n->getCollectionOfPrimitiveValues()),
            'sharingCapability' => fn(ParseNode $n) => $o->setSharingCapability($n->getEnumValue(SharingCapabilities::class)),
            'sharingDomainRestrictionMode' => fn(ParseNode $n) => $o->setSharingDomainRestrictionMode($n->getEnumValue(SharingDomainRestrictionMode::class)),
            'siteCreationDefaultManagedPath' => fn(ParseNode $n) => $o->setSiteCreationDefaultManagedPath($n->getStringValue()),
            'siteCreationDefaultStorageLimitInMB' => fn(ParseNode $n) => $o->setSiteCreationDefaultStorageLimitInMB($n->getIntegerValue()),
            'tenantDefaultTimezone' => fn(ParseNode $n) => $o->setTenantDefaultTimezone($n->getStringValue()),
        ]);
    }

    /**
     * Gets the idleSessionSignOut property value. The idleSessionSignOut property
     * @return IdleSessionSignOut|null
    */
    public function getIdleSessionSignOut(): ?IdleSessionSignOut {
        return $this->getBackingStore()->get('idleSessionSignOut');
    }

    /**
     * Gets the imageTaggingOption property value. The imageTaggingOption property
     * @return ImageTaggingChoice|null
    */
    public function getImageTaggingOption(): ?ImageTaggingChoice {
        return $this->getBackingStore()->get('imageTaggingOption');
    }

    /**
     * Gets the isCommentingOnSitePagesEnabled property value. The isCommentingOnSitePagesEnabled property
     * @return bool|null
    */
    public function getIsCommentingOnSitePagesEnabled(): ?bool {
        return $this->getBackingStore()->get('isCommentingOnSitePagesEnabled');
    }

    /**
     * Gets the isFileActivityNotificationEnabled property value. The isFileActivityNotificationEnabled property
     * @return bool|null
    */
    public function getIsFileActivityNotificationEnabled(): ?bool {
        return $this->getBackingStore()->get('isFileActivityNotificationEnabled');
    }

    /**
     * Gets the isLegacyAuthProtocolsEnabled property value. The isLegacyAuthProtocolsEnabled property
     * @return bool|null
    */
    public function getIsLegacyAuthProtocolsEnabled(): ?bool {
        return $this->getBackingStore()->get('isLegacyAuthProtocolsEnabled');
    }

    /**
     * Gets the isLoopEnabled property value. The isLoopEnabled property
     * @return bool|null
    */
    public function getIsLoopEnabled(): ?bool {
        return $this->getBackingStore()->get('isLoopEnabled');
    }

    /**
     * Gets the isMacSyncAppEnabled property value. The isMacSyncAppEnabled property
     * @return bool|null
    */
    public function getIsMacSyncAppEnabled(): ?bool {
        return $this->getBackingStore()->get('isMacSyncAppEnabled');
    }

    /**
     * Gets the isRequireAcceptingUserToMatchInvitedUserEnabled property value. The isRequireAcceptingUserToMatchInvitedUserEnabled property
     * @return bool|null
    */
    public function getIsRequireAcceptingUserToMatchInvitedUserEnabled(): ?bool {
        return $this->getBackingStore()->get('isRequireAcceptingUserToMatchInvitedUserEnabled');
    }

    /**
     * Gets the isResharingByExternalUsersEnabled property value. The isResharingByExternalUsersEnabled property
     * @return bool|null
    */
    public function getIsResharingByExternalUsersEnabled(): ?bool {
        return $this->getBackingStore()->get('isResharingByExternalUsersEnabled');
    }

    /**
     * Gets the isSharePointMobileNotificationEnabled property value. The isSharePointMobileNotificationEnabled property
     * @return bool|null
    */
    public function getIsSharePointMobileNotificationEnabled(): ?bool {
        return $this->getBackingStore()->get('isSharePointMobileNotificationEnabled');
    }

    /**
     * Gets the isSharePointNewsfeedEnabled property value. The isSharePointNewsfeedEnabled property
     * @return bool|null
    */
    public function getIsSharePointNewsfeedEnabled(): ?bool {
        return $this->getBackingStore()->get('isSharePointNewsfeedEnabled');
    }

    /**
     * Gets the isSiteCreationEnabled property value. The isSiteCreationEnabled property
     * @return bool|null
    */
    public function getIsSiteCreationEnabled(): ?bool {
        return $this->getBackingStore()->get('isSiteCreationEnabled');
    }

    /**
     * Gets the isSiteCreationUIEnabled property value. The isSiteCreationUIEnabled property
     * @return bool|null
    */
    public function getIsSiteCreationUIEnabled(): ?bool {
        return $this->getBackingStore()->get('isSiteCreationUIEnabled');
    }

    /**
     * Gets the isSitePagesCreationEnabled property value. The isSitePagesCreationEnabled property
     * @return bool|null
    */
    public function getIsSitePagesCreationEnabled(): ?bool {
        return $this->getBackingStore()->get('isSitePagesCreationEnabled');
    }

    /**
     * Gets the isSitesStorageLimitAutomatic property value. The isSitesStorageLimitAutomatic property
     * @return bool|null
    */
    public function getIsSitesStorageLimitAutomatic(): ?bool {
        return $this->getBackingStore()->get('isSitesStorageLimitAutomatic');
    }

    /**
     * Gets the isSyncButtonHiddenOnPersonalSite property value. The isSyncButtonHiddenOnPersonalSite property
     * @return bool|null
    */
    public function getIsSyncButtonHiddenOnPersonalSite(): ?bool {
        return $this->getBackingStore()->get('isSyncButtonHiddenOnPersonalSite');
    }

    /**
     * Gets the isUnmanagedSyncAppForTenantRestricted property value. The isUnmanagedSyncAppForTenantRestricted property
     * @return bool|null
    */
    public function getIsUnmanagedSyncAppForTenantRestricted(): ?bool {
        return $this->getBackingStore()->get('isUnmanagedSyncAppForTenantRestricted');
    }

    /**
     * Gets the personalSiteDefaultStorageLimitInMB property value. The personalSiteDefaultStorageLimitInMB property
     * @return int|null
    */
    public function getPersonalSiteDefaultStorageLimitInMB(): ?int {
        return $this->getBackingStore()->get('personalSiteDefaultStorageLimitInMB');
    }

    /**
     * Gets the sharingAllowedDomainList property value. The sharingAllowedDomainList property
     * @return array<string>|null
    */
    public function getSharingAllowedDomainList(): ?array {
        return $this->getBackingStore()->get('sharingAllowedDomainList');
    }

    /**
     * Gets the sharingBlockedDomainList property value. The sharingBlockedDomainList property
     * @return array<string>|null
    */
    public function getSharingBlockedDomainList(): ?array {
        return $this->getBackingStore()->get('sharingBlockedDomainList');
    }

    /**
     * Gets the sharingCapability property value. The sharingCapability property
     * @return SharingCapabilities|null
    */
    public function getSharingCapability(): ?SharingCapabilities {
        return $this->getBackingStore()->get('sharingCapability');
    }

    /**
     * Gets the sharingDomainRestrictionMode property value. The sharingDomainRestrictionMode property
     * @return SharingDomainRestrictionMode|null
    */
    public function getSharingDomainRestrictionMode(): ?SharingDomainRestrictionMode {
        return $this->getBackingStore()->get('sharingDomainRestrictionMode');
    }

    /**
     * Gets the siteCreationDefaultManagedPath property value. The siteCreationDefaultManagedPath property
     * @return string|null
    */
    public function getSiteCreationDefaultManagedPath(): ?string {
        return $this->getBackingStore()->get('siteCreationDefaultManagedPath');
    }

    /**
     * Gets the siteCreationDefaultStorageLimitInMB property value. The siteCreationDefaultStorageLimitInMB property
     * @return int|null
    */
    public function getSiteCreationDefaultStorageLimitInMB(): ?int {
        return $this->getBackingStore()->get('siteCreationDefaultStorageLimitInMB');
    }

    /**
     * Gets the tenantDefaultTimezone property value. The tenantDefaultTimezone property
     * @return string|null
    */
    public function getTenantDefaultTimezone(): ?string {
        return $this->getBackingStore()->get('tenantDefaultTimezone');
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
     * Sets the allowedDomainGuidsForSyncApp property value. The allowedDomainGuidsForSyncApp property
     * @param array<string>|null $value Value to set for the allowedDomainGuidsForSyncApp property.
    */
    public function setAllowedDomainGuidsForSyncApp(?array $value): void {
        $this->getBackingStore()->set('allowedDomainGuidsForSyncApp', $value);
    }

    /**
     * Sets the availableManagedPathsForSiteCreation property value. The availableManagedPathsForSiteCreation property
     * @param array<string>|null $value Value to set for the availableManagedPathsForSiteCreation property.
    */
    public function setAvailableManagedPathsForSiteCreation(?array $value): void {
        $this->getBackingStore()->set('availableManagedPathsForSiteCreation', $value);
    }

    /**
     * Sets the deletedUserPersonalSiteRetentionPeriodInDays property value. The deletedUserPersonalSiteRetentionPeriodInDays property
     * @param int|null $value Value to set for the deletedUserPersonalSiteRetentionPeriodInDays property.
    */
    public function setDeletedUserPersonalSiteRetentionPeriodInDays(?int $value): void {
        $this->getBackingStore()->set('deletedUserPersonalSiteRetentionPeriodInDays', $value);
    }

    /**
     * Sets the excludedFileExtensionsForSyncApp property value. The excludedFileExtensionsForSyncApp property
     * @param array<string>|null $value Value to set for the excludedFileExtensionsForSyncApp property.
    */
    public function setExcludedFileExtensionsForSyncApp(?array $value): void {
        $this->getBackingStore()->set('excludedFileExtensionsForSyncApp', $value);
    }

    /**
     * Sets the idleSessionSignOut property value. The idleSessionSignOut property
     * @param IdleSessionSignOut|null $value Value to set for the idleSessionSignOut property.
    */
    public function setIdleSessionSignOut(?IdleSessionSignOut $value): void {
        $this->getBackingStore()->set('idleSessionSignOut', $value);
    }

    /**
     * Sets the imageTaggingOption property value. The imageTaggingOption property
     * @param ImageTaggingChoice|null $value Value to set for the imageTaggingOption property.
    */
    public function setImageTaggingOption(?ImageTaggingChoice $value): void {
        $this->getBackingStore()->set('imageTaggingOption', $value);
    }

    /**
     * Sets the isCommentingOnSitePagesEnabled property value. The isCommentingOnSitePagesEnabled property
     * @param bool|null $value Value to set for the isCommentingOnSitePagesEnabled property.
    */
    public function setIsCommentingOnSitePagesEnabled(?bool $value): void {
        $this->getBackingStore()->set('isCommentingOnSitePagesEnabled', $value);
    }

    /**
     * Sets the isFileActivityNotificationEnabled property value. The isFileActivityNotificationEnabled property
     * @param bool|null $value Value to set for the isFileActivityNotificationEnabled property.
    */
    public function setIsFileActivityNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isFileActivityNotificationEnabled', $value);
    }

    /**
     * Sets the isLegacyAuthProtocolsEnabled property value. The isLegacyAuthProtocolsEnabled property
     * @param bool|null $value Value to set for the isLegacyAuthProtocolsEnabled property.
    */
    public function setIsLegacyAuthProtocolsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isLegacyAuthProtocolsEnabled', $value);
    }

    /**
     * Sets the isLoopEnabled property value. The isLoopEnabled property
     * @param bool|null $value Value to set for the isLoopEnabled property.
    */
    public function setIsLoopEnabled(?bool $value): void {
        $this->getBackingStore()->set('isLoopEnabled', $value);
    }

    /**
     * Sets the isMacSyncAppEnabled property value. The isMacSyncAppEnabled property
     * @param bool|null $value Value to set for the isMacSyncAppEnabled property.
    */
    public function setIsMacSyncAppEnabled(?bool $value): void {
        $this->getBackingStore()->set('isMacSyncAppEnabled', $value);
    }

    /**
     * Sets the isRequireAcceptingUserToMatchInvitedUserEnabled property value. The isRequireAcceptingUserToMatchInvitedUserEnabled property
     * @param bool|null $value Value to set for the isRequireAcceptingUserToMatchInvitedUserEnabled property.
    */
    public function setIsRequireAcceptingUserToMatchInvitedUserEnabled(?bool $value): void {
        $this->getBackingStore()->set('isRequireAcceptingUserToMatchInvitedUserEnabled', $value);
    }

    /**
     * Sets the isResharingByExternalUsersEnabled property value. The isResharingByExternalUsersEnabled property
     * @param bool|null $value Value to set for the isResharingByExternalUsersEnabled property.
    */
    public function setIsResharingByExternalUsersEnabled(?bool $value): void {
        $this->getBackingStore()->set('isResharingByExternalUsersEnabled', $value);
    }

    /**
     * Sets the isSharePointMobileNotificationEnabled property value. The isSharePointMobileNotificationEnabled property
     * @param bool|null $value Value to set for the isSharePointMobileNotificationEnabled property.
    */
    public function setIsSharePointMobileNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSharePointMobileNotificationEnabled', $value);
    }

    /**
     * Sets the isSharePointNewsfeedEnabled property value. The isSharePointNewsfeedEnabled property
     * @param bool|null $value Value to set for the isSharePointNewsfeedEnabled property.
    */
    public function setIsSharePointNewsfeedEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSharePointNewsfeedEnabled', $value);
    }

    /**
     * Sets the isSiteCreationEnabled property value. The isSiteCreationEnabled property
     * @param bool|null $value Value to set for the isSiteCreationEnabled property.
    */
    public function setIsSiteCreationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSiteCreationEnabled', $value);
    }

    /**
     * Sets the isSiteCreationUIEnabled property value. The isSiteCreationUIEnabled property
     * @param bool|null $value Value to set for the isSiteCreationUIEnabled property.
    */
    public function setIsSiteCreationUIEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSiteCreationUIEnabled', $value);
    }

    /**
     * Sets the isSitePagesCreationEnabled property value. The isSitePagesCreationEnabled property
     * @param bool|null $value Value to set for the isSitePagesCreationEnabled property.
    */
    public function setIsSitePagesCreationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSitePagesCreationEnabled', $value);
    }

    /**
     * Sets the isSitesStorageLimitAutomatic property value. The isSitesStorageLimitAutomatic property
     * @param bool|null $value Value to set for the isSitesStorageLimitAutomatic property.
    */
    public function setIsSitesStorageLimitAutomatic(?bool $value): void {
        $this->getBackingStore()->set('isSitesStorageLimitAutomatic', $value);
    }

    /**
     * Sets the isSyncButtonHiddenOnPersonalSite property value. The isSyncButtonHiddenOnPersonalSite property
     * @param bool|null $value Value to set for the isSyncButtonHiddenOnPersonalSite property.
    */
    public function setIsSyncButtonHiddenOnPersonalSite(?bool $value): void {
        $this->getBackingStore()->set('isSyncButtonHiddenOnPersonalSite', $value);
    }

    /**
     * Sets the isUnmanagedSyncAppForTenantRestricted property value. The isUnmanagedSyncAppForTenantRestricted property
     * @param bool|null $value Value to set for the isUnmanagedSyncAppForTenantRestricted property.
    */
    public function setIsUnmanagedSyncAppForTenantRestricted(?bool $value): void {
        $this->getBackingStore()->set('isUnmanagedSyncAppForTenantRestricted', $value);
    }

    /**
     * Sets the personalSiteDefaultStorageLimitInMB property value. The personalSiteDefaultStorageLimitInMB property
     * @param int|null $value Value to set for the personalSiteDefaultStorageLimitInMB property.
    */
    public function setPersonalSiteDefaultStorageLimitInMB(?int $value): void {
        $this->getBackingStore()->set('personalSiteDefaultStorageLimitInMB', $value);
    }

    /**
     * Sets the sharingAllowedDomainList property value. The sharingAllowedDomainList property
     * @param array<string>|null $value Value to set for the sharingAllowedDomainList property.
    */
    public function setSharingAllowedDomainList(?array $value): void {
        $this->getBackingStore()->set('sharingAllowedDomainList', $value);
    }

    /**
     * Sets the sharingBlockedDomainList property value. The sharingBlockedDomainList property
     * @param array<string>|null $value Value to set for the sharingBlockedDomainList property.
    */
    public function setSharingBlockedDomainList(?array $value): void {
        $this->getBackingStore()->set('sharingBlockedDomainList', $value);
    }

    /**
     * Sets the sharingCapability property value. The sharingCapability property
     * @param SharingCapabilities|null $value Value to set for the sharingCapability property.
    */
    public function setSharingCapability(?SharingCapabilities $value): void {
        $this->getBackingStore()->set('sharingCapability', $value);
    }

    /**
     * Sets the sharingDomainRestrictionMode property value. The sharingDomainRestrictionMode property
     * @param SharingDomainRestrictionMode|null $value Value to set for the sharingDomainRestrictionMode property.
    */
    public function setSharingDomainRestrictionMode(?SharingDomainRestrictionMode $value): void {
        $this->getBackingStore()->set('sharingDomainRestrictionMode', $value);
    }

    /**
     * Sets the siteCreationDefaultManagedPath property value. The siteCreationDefaultManagedPath property
     * @param string|null $value Value to set for the siteCreationDefaultManagedPath property.
    */
    public function setSiteCreationDefaultManagedPath(?string $value): void {
        $this->getBackingStore()->set('siteCreationDefaultManagedPath', $value);
    }

    /**
     * Sets the siteCreationDefaultStorageLimitInMB property value. The siteCreationDefaultStorageLimitInMB property
     * @param int|null $value Value to set for the siteCreationDefaultStorageLimitInMB property.
    */
    public function setSiteCreationDefaultStorageLimitInMB(?int $value): void {
        $this->getBackingStore()->set('siteCreationDefaultStorageLimitInMB', $value);
    }

    /**
     * Sets the tenantDefaultTimezone property value. The tenantDefaultTimezone property
     * @param string|null $value Value to set for the tenantDefaultTimezone property.
    */
    public function setTenantDefaultTimezone(?string $value): void {
        $this->getBackingStore()->set('tenantDefaultTimezone', $value);
    }

}
