<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This topic provides descriptions of the declared methods, properties and relationships exposed by the windows81GeneralConfiguration resource.
*/
class Windows81GeneralConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new windows81GeneralConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows81GeneralConfiguration');
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
        $val = $this->getBackingStore()->get('accountsBlockAddingNonMicrosoftAccountEmail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountsBlockAddingNonMicrosoftAccountEmail'");
    }

    /**
     * Gets the applyOnlyToWindows81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     * @return bool|null
    */
    public function getApplyOnlyToWindows81(): ?bool {
        $val = $this->getBackingStore()->get('applyOnlyToWindows81');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applyOnlyToWindows81'");
    }

    /**
     * Gets the browserBlockAutofill property value. Indicates whether or not to block auto fill.
     * @return bool|null
    */
    public function getBrowserBlockAutofill(): ?bool {
        $val = $this->getBackingStore()->get('browserBlockAutofill');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserBlockAutofill'");
    }

    /**
     * Gets the browserBlockAutomaticDetectionOfIntranetSites property value. Indicates whether or not to block automatic detection of Intranet sites.
     * @return bool|null
    */
    public function getBrowserBlockAutomaticDetectionOfIntranetSites(): ?bool {
        $val = $this->getBackingStore()->get('browserBlockAutomaticDetectionOfIntranetSites');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserBlockAutomaticDetectionOfIntranetSites'");
    }

    /**
     * Gets the browserBlockEnterpriseModeAccess property value. Indicates whether or not to block enterprise mode access.
     * @return bool|null
    */
    public function getBrowserBlockEnterpriseModeAccess(): ?bool {
        $val = $this->getBackingStore()->get('browserBlockEnterpriseModeAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserBlockEnterpriseModeAccess'");
    }

    /**
     * Gets the browserBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     * @return bool|null
    */
    public function getBrowserBlockJavaScript(): ?bool {
        $val = $this->getBackingStore()->get('browserBlockJavaScript');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserBlockJavaScript'");
    }

    /**
     * Gets the browserBlockPlugins property value. Indicates whether or not to block plug-ins.
     * @return bool|null
    */
    public function getBrowserBlockPlugins(): ?bool {
        $val = $this->getBackingStore()->get('browserBlockPlugins');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserBlockPlugins'");
    }

    /**
     * Gets the browserBlockPopups property value. Indicates whether or not to block popups.
     * @return bool|null
    */
    public function getBrowserBlockPopups(): ?bool {
        $val = $this->getBackingStore()->get('browserBlockPopups');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserBlockPopups'");
    }

    /**
     * Gets the browserBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     * @return bool|null
    */
    public function getBrowserBlockSendingDoNotTrackHeader(): ?bool {
        $val = $this->getBackingStore()->get('browserBlockSendingDoNotTrackHeader');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserBlockSendingDoNotTrackHeader'");
    }

    /**
     * Gets the browserBlockSingleWordEntryOnIntranetSites property value. Indicates whether or not to block a single word entry on Intranet sites.
     * @return bool|null
    */
    public function getBrowserBlockSingleWordEntryOnIntranetSites(): ?bool {
        $val = $this->getBackingStore()->get('browserBlockSingleWordEntryOnIntranetSites');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserBlockSingleWordEntryOnIntranetSites'");
    }

    /**
     * Gets the browserEnterpriseModeSiteListLocation property value. The enterprise mode site list location. Could be a local file, local network or http location.
     * @return string|null
    */
    public function getBrowserEnterpriseModeSiteListLocation(): ?string {
        $val = $this->getBackingStore()->get('browserEnterpriseModeSiteListLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserEnterpriseModeSiteListLocation'");
    }

    /**
     * Gets the browserInternetSecurityLevel property value. Possible values for internet site security level.
     * @return InternetSiteSecurityLevel|null
    */
    public function getBrowserInternetSecurityLevel(): ?InternetSiteSecurityLevel {
        $val = $this->getBackingStore()->get('browserInternetSecurityLevel');
        if (is_null($val) || $val instanceof InternetSiteSecurityLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserInternetSecurityLevel'");
    }

    /**
     * Gets the browserIntranetSecurityLevel property value. Possible values for site security level.
     * @return SiteSecurityLevel|null
    */
    public function getBrowserIntranetSecurityLevel(): ?SiteSecurityLevel {
        $val = $this->getBackingStore()->get('browserIntranetSecurityLevel');
        if (is_null($val) || $val instanceof SiteSecurityLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserIntranetSecurityLevel'");
    }

    /**
     * Gets the browserLoggingReportLocation property value. The logging report location.
     * @return string|null
    */
    public function getBrowserLoggingReportLocation(): ?string {
        $val = $this->getBackingStore()->get('browserLoggingReportLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserLoggingReportLocation'");
    }

    /**
     * Gets the browserRequireFirewall property value. Indicates whether or not to require a firewall.
     * @return bool|null
    */
    public function getBrowserRequireFirewall(): ?bool {
        $val = $this->getBackingStore()->get('browserRequireFirewall');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserRequireFirewall'");
    }

    /**
     * Gets the browserRequireFraudWarning property value. Indicates whether or not to require fraud warning.
     * @return bool|null
    */
    public function getBrowserRequireFraudWarning(): ?bool {
        $val = $this->getBackingStore()->get('browserRequireFraudWarning');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserRequireFraudWarning'");
    }

    /**
     * Gets the browserRequireHighSecurityForRestrictedSites property value. Indicates whether or not to require high security for restricted sites.
     * @return bool|null
    */
    public function getBrowserRequireHighSecurityForRestrictedSites(): ?bool {
        $val = $this->getBackingStore()->get('browserRequireHighSecurityForRestrictedSites');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserRequireHighSecurityForRestrictedSites'");
    }

    /**
     * Gets the browserRequireSmartScreen property value. Indicates whether or not to require the user to use the smart screen filter.
     * @return bool|null
    */
    public function getBrowserRequireSmartScreen(): ?bool {
        $val = $this->getBackingStore()->get('browserRequireSmartScreen');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserRequireSmartScreen'");
    }

    /**
     * Gets the browserTrustedSitesSecurityLevel property value. Possible values for site security level.
     * @return SiteSecurityLevel|null
    */
    public function getBrowserTrustedSitesSecurityLevel(): ?SiteSecurityLevel {
        $val = $this->getBackingStore()->get('browserTrustedSitesSecurityLevel');
        if (is_null($val) || $val instanceof SiteSecurityLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserTrustedSitesSecurityLevel'");
    }

    /**
     * Gets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     * @return bool|null
    */
    public function getCellularBlockDataRoaming(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockDataRoaming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockDataRoaming'");
    }

    /**
     * Gets the diagnosticsBlockDataSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @return bool|null
    */
    public function getDiagnosticsBlockDataSubmission(): ?bool {
        $val = $this->getBackingStore()->get('diagnosticsBlockDataSubmission');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'diagnosticsBlockDataSubmission'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountsBlockAddingNonMicrosoftAccountEmail' => fn(ParseNode $n) => $o->setAccountsBlockAddingNonMicrosoftAccountEmail($n->getBooleanValue()),
            'applyOnlyToWindows81' => fn(ParseNode $n) => $o->setApplyOnlyToWindows81($n->getBooleanValue()),
            'browserBlockAutofill' => fn(ParseNode $n) => $o->setBrowserBlockAutofill($n->getBooleanValue()),
            'browserBlockAutomaticDetectionOfIntranetSites' => fn(ParseNode $n) => $o->setBrowserBlockAutomaticDetectionOfIntranetSites($n->getBooleanValue()),
            'browserBlockEnterpriseModeAccess' => fn(ParseNode $n) => $o->setBrowserBlockEnterpriseModeAccess($n->getBooleanValue()),
            'browserBlockJavaScript' => fn(ParseNode $n) => $o->setBrowserBlockJavaScript($n->getBooleanValue()),
            'browserBlockPlugins' => fn(ParseNode $n) => $o->setBrowserBlockPlugins($n->getBooleanValue()),
            'browserBlockPopups' => fn(ParseNode $n) => $o->setBrowserBlockPopups($n->getBooleanValue()),
            'browserBlockSendingDoNotTrackHeader' => fn(ParseNode $n) => $o->setBrowserBlockSendingDoNotTrackHeader($n->getBooleanValue()),
            'browserBlockSingleWordEntryOnIntranetSites' => fn(ParseNode $n) => $o->setBrowserBlockSingleWordEntryOnIntranetSites($n->getBooleanValue()),
            'browserEnterpriseModeSiteListLocation' => fn(ParseNode $n) => $o->setBrowserEnterpriseModeSiteListLocation($n->getStringValue()),
            'browserInternetSecurityLevel' => fn(ParseNode $n) => $o->setBrowserInternetSecurityLevel($n->getEnumValue(InternetSiteSecurityLevel::class)),
            'browserIntranetSecurityLevel' => fn(ParseNode $n) => $o->setBrowserIntranetSecurityLevel($n->getEnumValue(SiteSecurityLevel::class)),
            'browserLoggingReportLocation' => fn(ParseNode $n) => $o->setBrowserLoggingReportLocation($n->getStringValue()),
            'browserRequireFirewall' => fn(ParseNode $n) => $o->setBrowserRequireFirewall($n->getBooleanValue()),
            'browserRequireFraudWarning' => fn(ParseNode $n) => $o->setBrowserRequireFraudWarning($n->getBooleanValue()),
            'browserRequireHighSecurityForRestrictedSites' => fn(ParseNode $n) => $o->setBrowserRequireHighSecurityForRestrictedSites($n->getBooleanValue()),
            'browserRequireSmartScreen' => fn(ParseNode $n) => $o->setBrowserRequireSmartScreen($n->getBooleanValue()),
            'browserTrustedSitesSecurityLevel' => fn(ParseNode $n) => $o->setBrowserTrustedSitesSecurityLevel($n->getEnumValue(SiteSecurityLevel::class)),
            'cellularBlockDataRoaming' => fn(ParseNode $n) => $o->setCellularBlockDataRoaming($n->getBooleanValue()),
            'diagnosticsBlockDataSubmission' => fn(ParseNode $n) => $o->setDiagnosticsBlockDataSubmission($n->getBooleanValue()),
            'passwordBlockPicturePasswordAndPin' => fn(ParseNode $n) => $o->setPasswordBlockPicturePasswordAndPin($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)),
            'passwordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'storageRequireDeviceEncryption' => fn(ParseNode $n) => $o->setStorageRequireDeviceEncryption($n->getBooleanValue()),
            'updatesRequireAutomaticUpdates' => fn(ParseNode $n) => $o->setUpdatesRequireAutomaticUpdates($n->getBooleanValue()),
            'userAccountControlSettings' => fn(ParseNode $n) => $o->setUserAccountControlSettings($n->getEnumValue(WindowsUserAccountControlSettings::class)),
            'workFoldersUrl' => fn(ParseNode $n) => $o->setWorkFoldersUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the passwordBlockPicturePasswordAndPin property value. Indicates whether or not to Block the user from using a pictures password and pin.
     * @return bool|null
    */
    public function getPasswordBlockPicturePasswordAndPin(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockPicturePasswordAndPin');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockPicturePasswordAndPin'");
    }

    /**
     * Gets the passwordExpirationDays property value. Password expiration in days.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        $val = $this->getBackingStore()->get('passwordExpirationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordExpirationDays'");
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumCharacterSetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumCharacterSetCount'");
    }

    /**
     * Gets the passwordMinimumLength property value. The minimum password length.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLength'");
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeScreenTimeout');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesOfInactivityBeforeScreenTimeout'");
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of. Valid values 0 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        $val = $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPreviousPasswordBlockCount'");
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof RequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset.
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        $val = $this->getBackingStore()->get('passwordSignInFailureCountBeforeFactoryReset');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordSignInFailureCountBeforeFactoryReset'");
    }

    /**
     * Gets the storageRequireDeviceEncryption property value. Indicates whether or not to require encryption on a mobile device.
     * @return bool|null
    */
    public function getStorageRequireDeviceEncryption(): ?bool {
        $val = $this->getBackingStore()->get('storageRequireDeviceEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageRequireDeviceEncryption'");
    }

    /**
     * Gets the updatesRequireAutomaticUpdates property value. Indicates whether or not to require automatic updates.
     * @return bool|null
    */
    public function getUpdatesRequireAutomaticUpdates(): ?bool {
        $val = $this->getBackingStore()->get('updatesRequireAutomaticUpdates');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatesRequireAutomaticUpdates'");
    }

    /**
     * Gets the userAccountControlSettings property value. Possible values for Windows user account control settings.
     * @return WindowsUserAccountControlSettings|null
    */
    public function getUserAccountControlSettings(): ?WindowsUserAccountControlSettings {
        $val = $this->getBackingStore()->get('userAccountControlSettings');
        if (is_null($val) || $val instanceof WindowsUserAccountControlSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAccountControlSettings'");
    }

    /**
     * Gets the workFoldersUrl property value. The work folders url.
     * @return string|null
    */
    public function getWorkFoldersUrl(): ?string {
        $val = $this->getBackingStore()->get('workFoldersUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workFoldersUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountsBlockAddingNonMicrosoftAccountEmail', $this->getAccountsBlockAddingNonMicrosoftAccountEmail());
        $writer->writeBooleanValue('browserBlockAutofill', $this->getBrowserBlockAutofill());
        $writer->writeBooleanValue('browserBlockAutomaticDetectionOfIntranetSites', $this->getBrowserBlockAutomaticDetectionOfIntranetSites());
        $writer->writeBooleanValue('browserBlockEnterpriseModeAccess', $this->getBrowserBlockEnterpriseModeAccess());
        $writer->writeBooleanValue('browserBlockJavaScript', $this->getBrowserBlockJavaScript());
        $writer->writeBooleanValue('browserBlockPlugins', $this->getBrowserBlockPlugins());
        $writer->writeBooleanValue('browserBlockPopups', $this->getBrowserBlockPopups());
        $writer->writeBooleanValue('browserBlockSendingDoNotTrackHeader', $this->getBrowserBlockSendingDoNotTrackHeader());
        $writer->writeBooleanValue('browserBlockSingleWordEntryOnIntranetSites', $this->getBrowserBlockSingleWordEntryOnIntranetSites());
        $writer->writeStringValue('browserEnterpriseModeSiteListLocation', $this->getBrowserEnterpriseModeSiteListLocation());
        $writer->writeEnumValue('browserInternetSecurityLevel', $this->getBrowserInternetSecurityLevel());
        $writer->writeEnumValue('browserIntranetSecurityLevel', $this->getBrowserIntranetSecurityLevel());
        $writer->writeStringValue('browserLoggingReportLocation', $this->getBrowserLoggingReportLocation());
        $writer->writeBooleanValue('browserRequireFirewall', $this->getBrowserRequireFirewall());
        $writer->writeBooleanValue('browserRequireFraudWarning', $this->getBrowserRequireFraudWarning());
        $writer->writeBooleanValue('browserRequireHighSecurityForRestrictedSites', $this->getBrowserRequireHighSecurityForRestrictedSites());
        $writer->writeBooleanValue('browserRequireSmartScreen', $this->getBrowserRequireSmartScreen());
        $writer->writeEnumValue('browserTrustedSitesSecurityLevel', $this->getBrowserTrustedSitesSecurityLevel());
        $writer->writeBooleanValue('cellularBlockDataRoaming', $this->getCellularBlockDataRoaming());
        $writer->writeBooleanValue('diagnosticsBlockDataSubmission', $this->getDiagnosticsBlockDataSubmission());
        $writer->writeBooleanValue('passwordBlockPicturePasswordAndPin', $this->getPasswordBlockPicturePasswordAndPin());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->getPasswordMinimumCharacterSetCount());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->getPasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeBooleanValue('storageRequireDeviceEncryption', $this->getStorageRequireDeviceEncryption());
        $writer->writeBooleanValue('updatesRequireAutomaticUpdates', $this->getUpdatesRequireAutomaticUpdates());
        $writer->writeEnumValue('userAccountControlSettings', $this->getUserAccountControlSettings());
        $writer->writeStringValue('workFoldersUrl', $this->getWorkFoldersUrl());
    }

    /**
     * Sets the accountsBlockAddingNonMicrosoftAccountEmail property value. Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     * @param bool|null $value Value to set for the accountsBlockAddingNonMicrosoftAccountEmail property.
    */
    public function setAccountsBlockAddingNonMicrosoftAccountEmail(?bool $value): void {
        $this->getBackingStore()->set('accountsBlockAddingNonMicrosoftAccountEmail', $value);
    }

    /**
     * Sets the applyOnlyToWindows81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     * @param bool|null $value Value to set for the applyOnlyToWindows81 property.
    */
    public function setApplyOnlyToWindows81(?bool $value): void {
        $this->getBackingStore()->set('applyOnlyToWindows81', $value);
    }

    /**
     * Sets the browserBlockAutofill property value. Indicates whether or not to block auto fill.
     * @param bool|null $value Value to set for the browserBlockAutofill property.
    */
    public function setBrowserBlockAutofill(?bool $value): void {
        $this->getBackingStore()->set('browserBlockAutofill', $value);
    }

    /**
     * Sets the browserBlockAutomaticDetectionOfIntranetSites property value. Indicates whether or not to block automatic detection of Intranet sites.
     * @param bool|null $value Value to set for the browserBlockAutomaticDetectionOfIntranetSites property.
    */
    public function setBrowserBlockAutomaticDetectionOfIntranetSites(?bool $value): void {
        $this->getBackingStore()->set('browserBlockAutomaticDetectionOfIntranetSites', $value);
    }

    /**
     * Sets the browserBlockEnterpriseModeAccess property value. Indicates whether or not to block enterprise mode access.
     * @param bool|null $value Value to set for the browserBlockEnterpriseModeAccess property.
    */
    public function setBrowserBlockEnterpriseModeAccess(?bool $value): void {
        $this->getBackingStore()->set('browserBlockEnterpriseModeAccess', $value);
    }

    /**
     * Sets the browserBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     * @param bool|null $value Value to set for the browserBlockJavaScript property.
    */
    public function setBrowserBlockJavaScript(?bool $value): void {
        $this->getBackingStore()->set('browserBlockJavaScript', $value);
    }

    /**
     * Sets the browserBlockPlugins property value. Indicates whether or not to block plug-ins.
     * @param bool|null $value Value to set for the browserBlockPlugins property.
    */
    public function setBrowserBlockPlugins(?bool $value): void {
        $this->getBackingStore()->set('browserBlockPlugins', $value);
    }

    /**
     * Sets the browserBlockPopups property value. Indicates whether or not to block popups.
     * @param bool|null $value Value to set for the browserBlockPopups property.
    */
    public function setBrowserBlockPopups(?bool $value): void {
        $this->getBackingStore()->set('browserBlockPopups', $value);
    }

    /**
     * Sets the browserBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     * @param bool|null $value Value to set for the browserBlockSendingDoNotTrackHeader property.
    */
    public function setBrowserBlockSendingDoNotTrackHeader(?bool $value): void {
        $this->getBackingStore()->set('browserBlockSendingDoNotTrackHeader', $value);
    }

    /**
     * Sets the browserBlockSingleWordEntryOnIntranetSites property value. Indicates whether or not to block a single word entry on Intranet sites.
     * @param bool|null $value Value to set for the browserBlockSingleWordEntryOnIntranetSites property.
    */
    public function setBrowserBlockSingleWordEntryOnIntranetSites(?bool $value): void {
        $this->getBackingStore()->set('browserBlockSingleWordEntryOnIntranetSites', $value);
    }

    /**
     * Sets the browserEnterpriseModeSiteListLocation property value. The enterprise mode site list location. Could be a local file, local network or http location.
     * @param string|null $value Value to set for the browserEnterpriseModeSiteListLocation property.
    */
    public function setBrowserEnterpriseModeSiteListLocation(?string $value): void {
        $this->getBackingStore()->set('browserEnterpriseModeSiteListLocation', $value);
    }

    /**
     * Sets the browserInternetSecurityLevel property value. Possible values for internet site security level.
     * @param InternetSiteSecurityLevel|null $value Value to set for the browserInternetSecurityLevel property.
    */
    public function setBrowserInternetSecurityLevel(?InternetSiteSecurityLevel $value): void {
        $this->getBackingStore()->set('browserInternetSecurityLevel', $value);
    }

    /**
     * Sets the browserIntranetSecurityLevel property value. Possible values for site security level.
     * @param SiteSecurityLevel|null $value Value to set for the browserIntranetSecurityLevel property.
    */
    public function setBrowserIntranetSecurityLevel(?SiteSecurityLevel $value): void {
        $this->getBackingStore()->set('browserIntranetSecurityLevel', $value);
    }

    /**
     * Sets the browserLoggingReportLocation property value. The logging report location.
     * @param string|null $value Value to set for the browserLoggingReportLocation property.
    */
    public function setBrowserLoggingReportLocation(?string $value): void {
        $this->getBackingStore()->set('browserLoggingReportLocation', $value);
    }

    /**
     * Sets the browserRequireFirewall property value. Indicates whether or not to require a firewall.
     * @param bool|null $value Value to set for the browserRequireFirewall property.
    */
    public function setBrowserRequireFirewall(?bool $value): void {
        $this->getBackingStore()->set('browserRequireFirewall', $value);
    }

    /**
     * Sets the browserRequireFraudWarning property value. Indicates whether or not to require fraud warning.
     * @param bool|null $value Value to set for the browserRequireFraudWarning property.
    */
    public function setBrowserRequireFraudWarning(?bool $value): void {
        $this->getBackingStore()->set('browserRequireFraudWarning', $value);
    }

    /**
     * Sets the browserRequireHighSecurityForRestrictedSites property value. Indicates whether or not to require high security for restricted sites.
     * @param bool|null $value Value to set for the browserRequireHighSecurityForRestrictedSites property.
    */
    public function setBrowserRequireHighSecurityForRestrictedSites(?bool $value): void {
        $this->getBackingStore()->set('browserRequireHighSecurityForRestrictedSites', $value);
    }

    /**
     * Sets the browserRequireSmartScreen property value. Indicates whether or not to require the user to use the smart screen filter.
     * @param bool|null $value Value to set for the browserRequireSmartScreen property.
    */
    public function setBrowserRequireSmartScreen(?bool $value): void {
        $this->getBackingStore()->set('browserRequireSmartScreen', $value);
    }

    /**
     * Sets the browserTrustedSitesSecurityLevel property value. Possible values for site security level.
     * @param SiteSecurityLevel|null $value Value to set for the browserTrustedSitesSecurityLevel property.
    */
    public function setBrowserTrustedSitesSecurityLevel(?SiteSecurityLevel $value): void {
        $this->getBackingStore()->set('browserTrustedSitesSecurityLevel', $value);
    }

    /**
     * Sets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     * @param bool|null $value Value to set for the cellularBlockDataRoaming property.
    */
    public function setCellularBlockDataRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockDataRoaming', $value);
    }

    /**
     * Sets the diagnosticsBlockDataSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @param bool|null $value Value to set for the diagnosticsBlockDataSubmission property.
    */
    public function setDiagnosticsBlockDataSubmission(?bool $value): void {
        $this->getBackingStore()->set('diagnosticsBlockDataSubmission', $value);
    }

    /**
     * Sets the passwordBlockPicturePasswordAndPin property value. Indicates whether or not to Block the user from using a pictures password and pin.
     * @param bool|null $value Value to set for the passwordBlockPicturePasswordAndPin property.
    */
    public function setPasswordBlockPicturePasswordAndPin(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockPicturePasswordAndPin', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Password expiration in days.
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumCharacterSetCount', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. The minimum password length.
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of. Valid values 0 to 24
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     * @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset.
     * @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('passwordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the storageRequireDeviceEncryption property value. Indicates whether or not to require encryption on a mobile device.
     * @param bool|null $value Value to set for the storageRequireDeviceEncryption property.
    */
    public function setStorageRequireDeviceEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireDeviceEncryption', $value);
    }

    /**
     * Sets the updatesRequireAutomaticUpdates property value. Indicates whether or not to require automatic updates.
     * @param bool|null $value Value to set for the updatesRequireAutomaticUpdates property.
    */
    public function setUpdatesRequireAutomaticUpdates(?bool $value): void {
        $this->getBackingStore()->set('updatesRequireAutomaticUpdates', $value);
    }

    /**
     * Sets the userAccountControlSettings property value. Possible values for Windows user account control settings.
     * @param WindowsUserAccountControlSettings|null $value Value to set for the userAccountControlSettings property.
    */
    public function setUserAccountControlSettings(?WindowsUserAccountControlSettings $value): void {
        $this->getBackingStore()->set('userAccountControlSettings', $value);
    }

    /**
     * Sets the workFoldersUrl property value. The work folders url.
     * @param string|null $value Value to set for the workFoldersUrl property.
    */
    public function setWorkFoldersUrl(?string $value): void {
        $this->getBackingStore()->set('workFoldersUrl', $value);
    }

}
