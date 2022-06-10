<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows81GeneralConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $accountsBlockAddingNonMicrosoftAccountEmail Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
    */
    private ?bool $accountsBlockAddingNonMicrosoftAccountEmail = null;
    
    /**
     * @var bool|null $applyOnlyToWindows81 Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
    */
    private ?bool $applyOnlyToWindows81 = null;
    
    /**
     * @var bool|null $browserBlockAutofill Indicates whether or not to block auto fill.
    */
    private ?bool $browserBlockAutofill = null;
    
    /**
     * @var bool|null $browserBlockAutomaticDetectionOfIntranetSites Indicates whether or not to block automatic detection of Intranet sites.
    */
    private ?bool $browserBlockAutomaticDetectionOfIntranetSites = null;
    
    /**
     * @var bool|null $browserBlockEnterpriseModeAccess Indicates whether or not to block enterprise mode access.
    */
    private ?bool $browserBlockEnterpriseModeAccess = null;
    
    /**
     * @var bool|null $browserBlockJavaScript Indicates whether or not to Block the user from using JavaScript.
    */
    private ?bool $browserBlockJavaScript = null;
    
    /**
     * @var bool|null $browserBlockPlugins Indicates whether or not to block plug-ins.
    */
    private ?bool $browserBlockPlugins = null;
    
    /**
     * @var bool|null $browserBlockPopups Indicates whether or not to block popups.
    */
    private ?bool $browserBlockPopups = null;
    
    /**
     * @var bool|null $browserBlockSendingDoNotTrackHeader Indicates whether or not to Block the user from sending the do not track header.
    */
    private ?bool $browserBlockSendingDoNotTrackHeader = null;
    
    /**
     * @var bool|null $browserBlockSingleWordEntryOnIntranetSites Indicates whether or not to block a single word entry on Intranet sites.
    */
    private ?bool $browserBlockSingleWordEntryOnIntranetSites = null;
    
    /**
     * @var string|null $browserEnterpriseModeSiteListLocation The enterprise mode site list location. Could be a local file, local network or http location.
    */
    private ?string $browserEnterpriseModeSiteListLocation = null;
    
    /**
     * @var InternetSiteSecurityLevel|null $browserInternetSecurityLevel The internet security level. Possible values are: userDefined, medium, mediumHigh, high.
    */
    private ?InternetSiteSecurityLevel $browserInternetSecurityLevel = null;
    
    /**
     * @var SiteSecurityLevel|null $browserIntranetSecurityLevel The Intranet security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
    */
    private ?SiteSecurityLevel $browserIntranetSecurityLevel = null;
    
    /**
     * @var string|null $browserLoggingReportLocation The logging report location.
    */
    private ?string $browserLoggingReportLocation = null;
    
    /**
     * @var bool|null $browserRequireFirewall Indicates whether or not to require a firewall.
    */
    private ?bool $browserRequireFirewall = null;
    
    /**
     * @var bool|null $browserRequireFraudWarning Indicates whether or not to require fraud warning.
    */
    private ?bool $browserRequireFraudWarning = null;
    
    /**
     * @var bool|null $browserRequireHighSecurityForRestrictedSites Indicates whether or not to require high security for restricted sites.
    */
    private ?bool $browserRequireHighSecurityForRestrictedSites = null;
    
    /**
     * @var bool|null $browserRequireSmartScreen Indicates whether or not to require the user to use the smart screen filter.
    */
    private ?bool $browserRequireSmartScreen = null;
    
    /**
     * @var SiteSecurityLevel|null $browserTrustedSitesSecurityLevel The trusted sites security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
    */
    private ?SiteSecurityLevel $browserTrustedSitesSecurityLevel = null;
    
    /**
     * @var bool|null $cellularBlockDataRoaming Indicates whether or not to block data roaming.
    */
    private ?bool $cellularBlockDataRoaming = null;
    
    /**
     * @var bool|null $diagnosticsBlockDataSubmission Indicates whether or not to block diagnostic data submission.
    */
    private ?bool $diagnosticsBlockDataSubmission = null;
    
    /**
     * @var bool|null $passwordBlockPicturePasswordAndPin Indicates whether or not to Block the user from using a pictures password and pin.
    */
    private ?bool $passwordBlockPicturePasswordAndPin = null;
    
    /**
     * @var int|null $passwordExpirationDays Password expiration in days.
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumCharacterSetCount The number of character sets required in the password.
    */
    private ?int $passwordMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passwordMinimumLength The minimum password length.
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout The minutes of inactivity before the screen times out.
    */
    private ?int $passwordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount The number of previous passwords to prevent re-use of. Valid values 0 to 24
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var RequiredPasswordType|null $passwordRequiredType The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
    */
    private ?RequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var int|null $passwordSignInFailureCountBeforeFactoryReset The number of sign in failures before factory reset.
    */
    private ?int $passwordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var bool|null $storageRequireDeviceEncryption Indicates whether or not to require encryption on a mobile device.
    */
    private ?bool $storageRequireDeviceEncryption = null;
    
    /**
     * @var bool|null $updatesRequireAutomaticUpdates Indicates whether or not to require automatic updates.
    */
    private ?bool $updatesRequireAutomaticUpdates = null;
    
    /**
     * @var WindowsUserAccountControlSettings|null $userAccountControlSettings The user account control settings. Possible values are: userDefined, alwaysNotify, notifyOnAppChanges, notifyOnAppChangesWithoutDimming, neverNotify.
    */
    private ?WindowsUserAccountControlSettings $userAccountControlSettings = null;
    
    /**
     * @var string|null $workFoldersUrl The work folders url.
    */
    private ?string $workFoldersUrl = null;
    
    /**
     * Instantiates a new Windows81GeneralConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows81GeneralConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows81GeneralConfiguration {
        return new Windows81GeneralConfiguration();
    }

    /**
     * Gets the accountsBlockAddingNonMicrosoftAccountEmail property value. Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     * @return bool|null
    */
    public function getAccountsBlockAddingNonMicrosoftAccountEmail(): ?bool {
        return $this->accountsBlockAddingNonMicrosoftAccountEmail;
    }

    /**
     * Gets the applyOnlyToWindows81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     * @return bool|null
    */
    public function getApplyOnlyToWindows81(): ?bool {
        return $this->applyOnlyToWindows81;
    }

    /**
     * Gets the browserBlockAutofill property value. Indicates whether or not to block auto fill.
     * @return bool|null
    */
    public function getBrowserBlockAutofill(): ?bool {
        return $this->browserBlockAutofill;
    }

    /**
     * Gets the browserBlockAutomaticDetectionOfIntranetSites property value. Indicates whether or not to block automatic detection of Intranet sites.
     * @return bool|null
    */
    public function getBrowserBlockAutomaticDetectionOfIntranetSites(): ?bool {
        return $this->browserBlockAutomaticDetectionOfIntranetSites;
    }

    /**
     * Gets the browserBlockEnterpriseModeAccess property value. Indicates whether or not to block enterprise mode access.
     * @return bool|null
    */
    public function getBrowserBlockEnterpriseModeAccess(): ?bool {
        return $this->browserBlockEnterpriseModeAccess;
    }

    /**
     * Gets the browserBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     * @return bool|null
    */
    public function getBrowserBlockJavaScript(): ?bool {
        return $this->browserBlockJavaScript;
    }

    /**
     * Gets the browserBlockPlugins property value. Indicates whether or not to block plug-ins.
     * @return bool|null
    */
    public function getBrowserBlockPlugins(): ?bool {
        return $this->browserBlockPlugins;
    }

    /**
     * Gets the browserBlockPopups property value. Indicates whether or not to block popups.
     * @return bool|null
    */
    public function getBrowserBlockPopups(): ?bool {
        return $this->browserBlockPopups;
    }

    /**
     * Gets the browserBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     * @return bool|null
    */
    public function getBrowserBlockSendingDoNotTrackHeader(): ?bool {
        return $this->browserBlockSendingDoNotTrackHeader;
    }

    /**
     * Gets the browserBlockSingleWordEntryOnIntranetSites property value. Indicates whether or not to block a single word entry on Intranet sites.
     * @return bool|null
    */
    public function getBrowserBlockSingleWordEntryOnIntranetSites(): ?bool {
        return $this->browserBlockSingleWordEntryOnIntranetSites;
    }

    /**
     * Gets the browserEnterpriseModeSiteListLocation property value. The enterprise mode site list location. Could be a local file, local network or http location.
     * @return string|null
    */
    public function getBrowserEnterpriseModeSiteListLocation(): ?string {
        return $this->browserEnterpriseModeSiteListLocation;
    }

    /**
     * Gets the browserInternetSecurityLevel property value. The internet security level. Possible values are: userDefined, medium, mediumHigh, high.
     * @return InternetSiteSecurityLevel|null
    */
    public function getBrowserInternetSecurityLevel(): ?InternetSiteSecurityLevel {
        return $this->browserInternetSecurityLevel;
    }

    /**
     * Gets the browserIntranetSecurityLevel property value. The Intranet security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
     * @return SiteSecurityLevel|null
    */
    public function getBrowserIntranetSecurityLevel(): ?SiteSecurityLevel {
        return $this->browserIntranetSecurityLevel;
    }

    /**
     * Gets the browserLoggingReportLocation property value. The logging report location.
     * @return string|null
    */
    public function getBrowserLoggingReportLocation(): ?string {
        return $this->browserLoggingReportLocation;
    }

    /**
     * Gets the browserRequireFirewall property value. Indicates whether or not to require a firewall.
     * @return bool|null
    */
    public function getBrowserRequireFirewall(): ?bool {
        return $this->browserRequireFirewall;
    }

    /**
     * Gets the browserRequireFraudWarning property value. Indicates whether or not to require fraud warning.
     * @return bool|null
    */
    public function getBrowserRequireFraudWarning(): ?bool {
        return $this->browserRequireFraudWarning;
    }

    /**
     * Gets the browserRequireHighSecurityForRestrictedSites property value. Indicates whether or not to require high security for restricted sites.
     * @return bool|null
    */
    public function getBrowserRequireHighSecurityForRestrictedSites(): ?bool {
        return $this->browserRequireHighSecurityForRestrictedSites;
    }

    /**
     * Gets the browserRequireSmartScreen property value. Indicates whether or not to require the user to use the smart screen filter.
     * @return bool|null
    */
    public function getBrowserRequireSmartScreen(): ?bool {
        return $this->browserRequireSmartScreen;
    }

    /**
     * Gets the browserTrustedSitesSecurityLevel property value. The trusted sites security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
     * @return SiteSecurityLevel|null
    */
    public function getBrowserTrustedSitesSecurityLevel(): ?SiteSecurityLevel {
        return $this->browserTrustedSitesSecurityLevel;
    }

    /**
     * Gets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     * @return bool|null
    */
    public function getCellularBlockDataRoaming(): ?bool {
        return $this->cellularBlockDataRoaming;
    }

    /**
     * Gets the diagnosticsBlockDataSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @return bool|null
    */
    public function getDiagnosticsBlockDataSubmission(): ?bool {
        return $this->diagnosticsBlockDataSubmission;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountsBlockAddingNonMicrosoftAccountEmail' => function (ParseNode $n) use ($o) { $o->setAccountsBlockAddingNonMicrosoftAccountEmail($n->getBooleanValue()); },
            'applyOnlyToWindows81' => function (ParseNode $n) use ($o) { $o->setApplyOnlyToWindows81($n->getBooleanValue()); },
            'browserBlockAutofill' => function (ParseNode $n) use ($o) { $o->setBrowserBlockAutofill($n->getBooleanValue()); },
            'browserBlockAutomaticDetectionOfIntranetSites' => function (ParseNode $n) use ($o) { $o->setBrowserBlockAutomaticDetectionOfIntranetSites($n->getBooleanValue()); },
            'browserBlockEnterpriseModeAccess' => function (ParseNode $n) use ($o) { $o->setBrowserBlockEnterpriseModeAccess($n->getBooleanValue()); },
            'browserBlockJavaScript' => function (ParseNode $n) use ($o) { $o->setBrowserBlockJavaScript($n->getBooleanValue()); },
            'browserBlockPlugins' => function (ParseNode $n) use ($o) { $o->setBrowserBlockPlugins($n->getBooleanValue()); },
            'browserBlockPopups' => function (ParseNode $n) use ($o) { $o->setBrowserBlockPopups($n->getBooleanValue()); },
            'browserBlockSendingDoNotTrackHeader' => function (ParseNode $n) use ($o) { $o->setBrowserBlockSendingDoNotTrackHeader($n->getBooleanValue()); },
            'browserBlockSingleWordEntryOnIntranetSites' => function (ParseNode $n) use ($o) { $o->setBrowserBlockSingleWordEntryOnIntranetSites($n->getBooleanValue()); },
            'browserEnterpriseModeSiteListLocation' => function (ParseNode $n) use ($o) { $o->setBrowserEnterpriseModeSiteListLocation($n->getStringValue()); },
            'browserInternetSecurityLevel' => function (ParseNode $n) use ($o) { $o->setBrowserInternetSecurityLevel($n->getEnumValue(InternetSiteSecurityLevel::class)); },
            'browserIntranetSecurityLevel' => function (ParseNode $n) use ($o) { $o->setBrowserIntranetSecurityLevel($n->getEnumValue(SiteSecurityLevel::class)); },
            'browserLoggingReportLocation' => function (ParseNode $n) use ($o) { $o->setBrowserLoggingReportLocation($n->getStringValue()); },
            'browserRequireFirewall' => function (ParseNode $n) use ($o) { $o->setBrowserRequireFirewall($n->getBooleanValue()); },
            'browserRequireFraudWarning' => function (ParseNode $n) use ($o) { $o->setBrowserRequireFraudWarning($n->getBooleanValue()); },
            'browserRequireHighSecurityForRestrictedSites' => function (ParseNode $n) use ($o) { $o->setBrowserRequireHighSecurityForRestrictedSites($n->getBooleanValue()); },
            'browserRequireSmartScreen' => function (ParseNode $n) use ($o) { $o->setBrowserRequireSmartScreen($n->getBooleanValue()); },
            'browserTrustedSitesSecurityLevel' => function (ParseNode $n) use ($o) { $o->setBrowserTrustedSitesSecurityLevel($n->getEnumValue(SiteSecurityLevel::class)); },
            'cellularBlockDataRoaming' => function (ParseNode $n) use ($o) { $o->setCellularBlockDataRoaming($n->getBooleanValue()); },
            'diagnosticsBlockDataSubmission' => function (ParseNode $n) use ($o) { $o->setDiagnosticsBlockDataSubmission($n->getBooleanValue()); },
            'passwordBlockPicturePasswordAndPin' => function (ParseNode $n) use ($o) { $o->setPasswordBlockPicturePasswordAndPin($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumCharacterSetCount' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)); },
            'passwordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
            'storageRequireDeviceEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireDeviceEncryption($n->getBooleanValue()); },
            'updatesRequireAutomaticUpdates' => function (ParseNode $n) use ($o) { $o->setUpdatesRequireAutomaticUpdates($n->getBooleanValue()); },
            'userAccountControlSettings' => function (ParseNode $n) use ($o) { $o->setUserAccountControlSettings($n->getEnumValue(WindowsUserAccountControlSettings::class)); },
            'workFoldersUrl' => function (ParseNode $n) use ($o) { $o->setWorkFoldersUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the passwordBlockPicturePasswordAndPin property value. Indicates whether or not to Block the user from using a pictures password and pin.
     * @return bool|null
    */
    public function getPasswordBlockPicturePasswordAndPin(): ?bool {
        return $this->passwordBlockPicturePasswordAndPin;
    }

    /**
     * Gets the passwordExpirationDays property value. Password expiration in days.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        return $this->passwordMinimumCharacterSetCount;
    }

    /**
     * Gets the passwordMinimumLength property value. The minimum password length.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of. Valid values 0 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequiredType property value. The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset.
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the storageRequireDeviceEncryption property value. Indicates whether or not to require encryption on a mobile device.
     * @return bool|null
    */
    public function getStorageRequireDeviceEncryption(): ?bool {
        return $this->storageRequireDeviceEncryption;
    }

    /**
     * Gets the updatesRequireAutomaticUpdates property value. Indicates whether or not to require automatic updates.
     * @return bool|null
    */
    public function getUpdatesRequireAutomaticUpdates(): ?bool {
        return $this->updatesRequireAutomaticUpdates;
    }

    /**
     * Gets the userAccountControlSettings property value. The user account control settings. Possible values are: userDefined, alwaysNotify, notifyOnAppChanges, notifyOnAppChangesWithoutDimming, neverNotify.
     * @return WindowsUserAccountControlSettings|null
    */
    public function getUserAccountControlSettings(): ?WindowsUserAccountControlSettings {
        return $this->userAccountControlSettings;
    }

    /**
     * Gets the workFoldersUrl property value. The work folders url.
     * @return string|null
    */
    public function getWorkFoldersUrl(): ?string {
        return $this->workFoldersUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountsBlockAddingNonMicrosoftAccountEmail', $this->accountsBlockAddingNonMicrosoftAccountEmail);
        $writer->writeBooleanValue('applyOnlyToWindows81', $this->applyOnlyToWindows81);
        $writer->writeBooleanValue('browserBlockAutofill', $this->browserBlockAutofill);
        $writer->writeBooleanValue('browserBlockAutomaticDetectionOfIntranetSites', $this->browserBlockAutomaticDetectionOfIntranetSites);
        $writer->writeBooleanValue('browserBlockEnterpriseModeAccess', $this->browserBlockEnterpriseModeAccess);
        $writer->writeBooleanValue('browserBlockJavaScript', $this->browserBlockJavaScript);
        $writer->writeBooleanValue('browserBlockPlugins', $this->browserBlockPlugins);
        $writer->writeBooleanValue('browserBlockPopups', $this->browserBlockPopups);
        $writer->writeBooleanValue('browserBlockSendingDoNotTrackHeader', $this->browserBlockSendingDoNotTrackHeader);
        $writer->writeBooleanValue('browserBlockSingleWordEntryOnIntranetSites', $this->browserBlockSingleWordEntryOnIntranetSites);
        $writer->writeStringValue('browserEnterpriseModeSiteListLocation', $this->browserEnterpriseModeSiteListLocation);
        $writer->writeEnumValue('browserInternetSecurityLevel', $this->browserInternetSecurityLevel);
        $writer->writeEnumValue('browserIntranetSecurityLevel', $this->browserIntranetSecurityLevel);
        $writer->writeStringValue('browserLoggingReportLocation', $this->browserLoggingReportLocation);
        $writer->writeBooleanValue('browserRequireFirewall', $this->browserRequireFirewall);
        $writer->writeBooleanValue('browserRequireFraudWarning', $this->browserRequireFraudWarning);
        $writer->writeBooleanValue('browserRequireHighSecurityForRestrictedSites', $this->browserRequireHighSecurityForRestrictedSites);
        $writer->writeBooleanValue('browserRequireSmartScreen', $this->browserRequireSmartScreen);
        $writer->writeEnumValue('browserTrustedSitesSecurityLevel', $this->browserTrustedSitesSecurityLevel);
        $writer->writeBooleanValue('cellularBlockDataRoaming', $this->cellularBlockDataRoaming);
        $writer->writeBooleanValue('diagnosticsBlockDataSubmission', $this->diagnosticsBlockDataSubmission);
        $writer->writeBooleanValue('passwordBlockPicturePasswordAndPin', $this->passwordBlockPicturePasswordAndPin);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->passwordMinimumCharacterSetCount);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->passwordSignInFailureCountBeforeFactoryReset);
        $writer->writeBooleanValue('storageRequireDeviceEncryption', $this->storageRequireDeviceEncryption);
        $writer->writeBooleanValue('updatesRequireAutomaticUpdates', $this->updatesRequireAutomaticUpdates);
        $writer->writeEnumValue('userAccountControlSettings', $this->userAccountControlSettings);
        $writer->writeStringValue('workFoldersUrl', $this->workFoldersUrl);
    }

    /**
     * Sets the accountsBlockAddingNonMicrosoftAccountEmail property value. Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     *  @param bool|null $value Value to set for the accountsBlockAddingNonMicrosoftAccountEmail property.
    */
    public function setAccountsBlockAddingNonMicrosoftAccountEmail(?bool $value ): void {
        $this->accountsBlockAddingNonMicrosoftAccountEmail = $value;
    }

    /**
     * Sets the applyOnlyToWindows81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     *  @param bool|null $value Value to set for the applyOnlyToWindows81 property.
    */
    public function setApplyOnlyToWindows81(?bool $value ): void {
        $this->applyOnlyToWindows81 = $value;
    }

    /**
     * Sets the browserBlockAutofill property value. Indicates whether or not to block auto fill.
     *  @param bool|null $value Value to set for the browserBlockAutofill property.
    */
    public function setBrowserBlockAutofill(?bool $value ): void {
        $this->browserBlockAutofill = $value;
    }

    /**
     * Sets the browserBlockAutomaticDetectionOfIntranetSites property value. Indicates whether or not to block automatic detection of Intranet sites.
     *  @param bool|null $value Value to set for the browserBlockAutomaticDetectionOfIntranetSites property.
    */
    public function setBrowserBlockAutomaticDetectionOfIntranetSites(?bool $value ): void {
        $this->browserBlockAutomaticDetectionOfIntranetSites = $value;
    }

    /**
     * Sets the browserBlockEnterpriseModeAccess property value. Indicates whether or not to block enterprise mode access.
     *  @param bool|null $value Value to set for the browserBlockEnterpriseModeAccess property.
    */
    public function setBrowserBlockEnterpriseModeAccess(?bool $value ): void {
        $this->browserBlockEnterpriseModeAccess = $value;
    }

    /**
     * Sets the browserBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     *  @param bool|null $value Value to set for the browserBlockJavaScript property.
    */
    public function setBrowserBlockJavaScript(?bool $value ): void {
        $this->browserBlockJavaScript = $value;
    }

    /**
     * Sets the browserBlockPlugins property value. Indicates whether or not to block plug-ins.
     *  @param bool|null $value Value to set for the browserBlockPlugins property.
    */
    public function setBrowserBlockPlugins(?bool $value ): void {
        $this->browserBlockPlugins = $value;
    }

    /**
     * Sets the browserBlockPopups property value. Indicates whether or not to block popups.
     *  @param bool|null $value Value to set for the browserBlockPopups property.
    */
    public function setBrowserBlockPopups(?bool $value ): void {
        $this->browserBlockPopups = $value;
    }

    /**
     * Sets the browserBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     *  @param bool|null $value Value to set for the browserBlockSendingDoNotTrackHeader property.
    */
    public function setBrowserBlockSendingDoNotTrackHeader(?bool $value ): void {
        $this->browserBlockSendingDoNotTrackHeader = $value;
    }

    /**
     * Sets the browserBlockSingleWordEntryOnIntranetSites property value. Indicates whether or not to block a single word entry on Intranet sites.
     *  @param bool|null $value Value to set for the browserBlockSingleWordEntryOnIntranetSites property.
    */
    public function setBrowserBlockSingleWordEntryOnIntranetSites(?bool $value ): void {
        $this->browserBlockSingleWordEntryOnIntranetSites = $value;
    }

    /**
     * Sets the browserEnterpriseModeSiteListLocation property value. The enterprise mode site list location. Could be a local file, local network or http location.
     *  @param string|null $value Value to set for the browserEnterpriseModeSiteListLocation property.
    */
    public function setBrowserEnterpriseModeSiteListLocation(?string $value ): void {
        $this->browserEnterpriseModeSiteListLocation = $value;
    }

    /**
     * Sets the browserInternetSecurityLevel property value. The internet security level. Possible values are: userDefined, medium, mediumHigh, high.
     *  @param InternetSiteSecurityLevel|null $value Value to set for the browserInternetSecurityLevel property.
    */
    public function setBrowserInternetSecurityLevel(?InternetSiteSecurityLevel $value ): void {
        $this->browserInternetSecurityLevel = $value;
    }

    /**
     * Sets the browserIntranetSecurityLevel property value. The Intranet security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
     *  @param SiteSecurityLevel|null $value Value to set for the browserIntranetSecurityLevel property.
    */
    public function setBrowserIntranetSecurityLevel(?SiteSecurityLevel $value ): void {
        $this->browserIntranetSecurityLevel = $value;
    }

    /**
     * Sets the browserLoggingReportLocation property value. The logging report location.
     *  @param string|null $value Value to set for the browserLoggingReportLocation property.
    */
    public function setBrowserLoggingReportLocation(?string $value ): void {
        $this->browserLoggingReportLocation = $value;
    }

    /**
     * Sets the browserRequireFirewall property value. Indicates whether or not to require a firewall.
     *  @param bool|null $value Value to set for the browserRequireFirewall property.
    */
    public function setBrowserRequireFirewall(?bool $value ): void {
        $this->browserRequireFirewall = $value;
    }

    /**
     * Sets the browserRequireFraudWarning property value. Indicates whether or not to require fraud warning.
     *  @param bool|null $value Value to set for the browserRequireFraudWarning property.
    */
    public function setBrowserRequireFraudWarning(?bool $value ): void {
        $this->browserRequireFraudWarning = $value;
    }

    /**
     * Sets the browserRequireHighSecurityForRestrictedSites property value. Indicates whether or not to require high security for restricted sites.
     *  @param bool|null $value Value to set for the browserRequireHighSecurityForRestrictedSites property.
    */
    public function setBrowserRequireHighSecurityForRestrictedSites(?bool $value ): void {
        $this->browserRequireHighSecurityForRestrictedSites = $value;
    }

    /**
     * Sets the browserRequireSmartScreen property value. Indicates whether or not to require the user to use the smart screen filter.
     *  @param bool|null $value Value to set for the browserRequireSmartScreen property.
    */
    public function setBrowserRequireSmartScreen(?bool $value ): void {
        $this->browserRequireSmartScreen = $value;
    }

    /**
     * Sets the browserTrustedSitesSecurityLevel property value. The trusted sites security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
     *  @param SiteSecurityLevel|null $value Value to set for the browserTrustedSitesSecurityLevel property.
    */
    public function setBrowserTrustedSitesSecurityLevel(?SiteSecurityLevel $value ): void {
        $this->browserTrustedSitesSecurityLevel = $value;
    }

    /**
     * Sets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     *  @param bool|null $value Value to set for the cellularBlockDataRoaming property.
    */
    public function setCellularBlockDataRoaming(?bool $value ): void {
        $this->cellularBlockDataRoaming = $value;
    }

    /**
     * Sets the diagnosticsBlockDataSubmission property value. Indicates whether or not to block diagnostic data submission.
     *  @param bool|null $value Value to set for the diagnosticsBlockDataSubmission property.
    */
    public function setDiagnosticsBlockDataSubmission(?bool $value ): void {
        $this->diagnosticsBlockDataSubmission = $value;
    }

    /**
     * Sets the passwordBlockPicturePasswordAndPin property value. Indicates whether or not to Block the user from using a pictures password and pin.
     *  @param bool|null $value Value to set for the passwordBlockPicturePasswordAndPin property.
    */
    public function setPasswordBlockPicturePasswordAndPin(?bool $value ): void {
        $this->passwordBlockPicturePasswordAndPin = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Password expiration in days.
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     *  @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value ): void {
        $this->passwordMinimumCharacterSetCount = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. The minimum password length.
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of. Valid values 0 to 24
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequiredType property value. The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
     *  @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset.
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->passwordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the storageRequireDeviceEncryption property value. Indicates whether or not to require encryption on a mobile device.
     *  @param bool|null $value Value to set for the storageRequireDeviceEncryption property.
    */
    public function setStorageRequireDeviceEncryption(?bool $value ): void {
        $this->storageRequireDeviceEncryption = $value;
    }

    /**
     * Sets the updatesRequireAutomaticUpdates property value. Indicates whether or not to require automatic updates.
     *  @param bool|null $value Value to set for the updatesRequireAutomaticUpdates property.
    */
    public function setUpdatesRequireAutomaticUpdates(?bool $value ): void {
        $this->updatesRequireAutomaticUpdates = $value;
    }

    /**
     * Sets the userAccountControlSettings property value. The user account control settings. Possible values are: userDefined, alwaysNotify, notifyOnAppChanges, notifyOnAppChangesWithoutDimming, neverNotify.
     *  @param WindowsUserAccountControlSettings|null $value Value to set for the userAccountControlSettings property.
    */
    public function setUserAccountControlSettings(?WindowsUserAccountControlSettings $value ): void {
        $this->userAccountControlSettings = $value;
    }

    /**
     * Sets the workFoldersUrl property value. The work folders url.
     *  @param string|null $value Value to set for the workFoldersUrl property.
    */
    public function setWorkFoldersUrl(?string $value ): void {
        $this->workFoldersUrl = $value;
    }

}
