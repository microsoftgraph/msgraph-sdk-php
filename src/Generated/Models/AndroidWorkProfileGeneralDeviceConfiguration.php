<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidWorkProfileGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $passwordBlockFingerprintUnlock Indicates whether or not to block fingerprint unlock.
    */
    private ?bool $passwordBlockFingerprintUnlock = null;
    
    /**
     * @var bool|null $passwordBlockTrustAgents Indicates whether or not to block Smart Lock and other trust agents.
    */
    private ?bool $passwordBlockTrustAgents = null;
    
    /**
     * @var int|null $passwordExpirationDays Number of days before the password expires. Valid values 1 to 365
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumLength Minimum length of passwords. Valid values 4 to 16
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before the screen times out.
    */
    private ?int $passwordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount Number of previous passwords to block. Valid values 0 to 24
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var AndroidWorkProfileRequiredPasswordType|null $passwordRequiredType Type of password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
    */
    private ?AndroidWorkProfileRequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var int|null $passwordSignInFailureCountBeforeFactoryReset Number of sign in failures allowed before factory reset. Valid values 1 to 16
    */
    private ?int $passwordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var bool|null $securityRequireVerifyApps Require the Android Verify apps feature is turned on.
    */
    private ?bool $securityRequireVerifyApps = null;
    
    /**
     * @var bool|null $workProfileBlockAddingAccounts Block users from adding/removing accounts in work profile.
    */
    private ?bool $workProfileBlockAddingAccounts = null;
    
    /**
     * @var bool|null $workProfileBlockCamera Block work profile camera.
    */
    private ?bool $workProfileBlockCamera = null;
    
    /**
     * @var bool|null $workProfileBlockCrossProfileCallerId Block display work profile caller ID in personal profile.
    */
    private ?bool $workProfileBlockCrossProfileCallerId = null;
    
    /**
     * @var bool|null $workProfileBlockCrossProfileContactsSearch Block work profile contacts availability in personal profile.
    */
    private ?bool $workProfileBlockCrossProfileContactsSearch = null;
    
    /**
     * @var bool|null $workProfileBlockCrossProfileCopyPaste Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
    */
    private ?bool $workProfileBlockCrossProfileCopyPaste = null;
    
    /**
     * @var bool|null $workProfileBlockNotificationsWhileDeviceLocked Indicates whether or not to block notifications while device locked.
    */
    private ?bool $workProfileBlockNotificationsWhileDeviceLocked = null;
    
    /**
     * @var bool|null $workProfileBlockScreenCapture Block screen capture in work profile.
    */
    private ?bool $workProfileBlockScreenCapture = null;
    
    /**
     * @var bool|null $workProfileBluetoothEnableContactSharing Allow bluetooth devices to access enterprise contacts.
    */
    private ?bool $workProfileBluetoothEnableContactSharing = null;
    
    /**
     * @var AndroidWorkProfileCrossProfileDataSharingType|null $workProfileDataSharingType Type of data sharing that is allowed. Possible values are: deviceDefault, preventAny, allowPersonalToWork, noRestrictions.
    */
    private ?AndroidWorkProfileCrossProfileDataSharingType $workProfileDataSharingType = null;
    
    /**
     * @var AndroidWorkProfileDefaultAppPermissionPolicyType|null $workProfileDefaultAppPermissionPolicy Type of password that is required. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
    */
    private ?AndroidWorkProfileDefaultAppPermissionPolicyType $workProfileDefaultAppPermissionPolicy = null;
    
    /**
     * @var bool|null $workProfilePasswordBlockFingerprintUnlock Indicates whether or not to block fingerprint unlock for work profile.
    */
    private ?bool $workProfilePasswordBlockFingerprintUnlock = null;
    
    /**
     * @var bool|null $workProfilePasswordBlockTrustAgents Indicates whether or not to block Smart Lock and other trust agents for work profile.
    */
    private ?bool $workProfilePasswordBlockTrustAgents = null;
    
    /**
     * @var int|null $workProfilePasswordExpirationDays Number of days before the work profile password expires. Valid values 1 to 365
    */
    private ?int $workProfilePasswordExpirationDays = null;
    
    /**
     * @var int|null $workProfilePasswordMinimumLength Minimum length of work profile password. Valid values 4 to 16
    */
    private ?int $workProfilePasswordMinimumLength = null;
    
    /**
     * @var int|null $workProfilePasswordMinLetterCharacters Minimum # of letter characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinLetterCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinLowerCaseCharacters Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinLowerCaseCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinNonLetterCharacters Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinNonLetterCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinNumericCharacters Minimum # of numeric characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinNumericCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinSymbolCharacters Minimum # of symbols required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinSymbolCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinUpperCaseCharacters Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinUpperCaseCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before the screen times out.
    */
    private ?int $workProfilePasswordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $workProfilePasswordPreviousPasswordBlockCount Number of previous work profile passwords to block. Valid values 0 to 24
    */
    private ?int $workProfilePasswordPreviousPasswordBlockCount = null;
    
    /**
     * @var AndroidWorkProfileRequiredPasswordType|null $workProfilePasswordRequiredType Type of work profile password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
    */
    private ?AndroidWorkProfileRequiredPasswordType $workProfilePasswordRequiredType = null;
    
    /**
     * @var int|null $workProfilePasswordSignInFailureCountBeforeFactoryReset Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
    */
    private ?int $workProfilePasswordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var bool|null $workProfileRequirePassword Password is required or not for work profile
    */
    private ?bool $workProfileRequirePassword = null;
    
    /**
     * Instantiates a new AndroidWorkProfileGeneralDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileGeneralDeviceConfiguration {
        return new AndroidWorkProfileGeneralDeviceConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'passwordBlockFingerprintUnlock' => function (ParseNode $n) use ($o) { $o->setPasswordBlockFingerprintUnlock($n->getBooleanValue()); },
            'passwordBlockTrustAgents' => function (ParseNode $n) use ($o) { $o->setPasswordBlockTrustAgents($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(AndroidWorkProfileRequiredPasswordType::class)); },
            'passwordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
            'securityRequireVerifyApps' => function (ParseNode $n) use ($o) { $o->setSecurityRequireVerifyApps($n->getBooleanValue()); },
            'workProfileBlockAddingAccounts' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockAddingAccounts($n->getBooleanValue()); },
            'workProfileBlockCamera' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockCamera($n->getBooleanValue()); },
            'workProfileBlockCrossProfileCallerId' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockCrossProfileCallerId($n->getBooleanValue()); },
            'workProfileBlockCrossProfileContactsSearch' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockCrossProfileContactsSearch($n->getBooleanValue()); },
            'workProfileBlockCrossProfileCopyPaste' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockCrossProfileCopyPaste($n->getBooleanValue()); },
            'workProfileBlockNotificationsWhileDeviceLocked' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockNotificationsWhileDeviceLocked($n->getBooleanValue()); },
            'workProfileBlockScreenCapture' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockScreenCapture($n->getBooleanValue()); },
            'workProfileBluetoothEnableContactSharing' => function (ParseNode $n) use ($o) { $o->setWorkProfileBluetoothEnableContactSharing($n->getBooleanValue()); },
            'workProfileDataSharingType' => function (ParseNode $n) use ($o) { $o->setWorkProfileDataSharingType($n->getEnumValue(AndroidWorkProfileCrossProfileDataSharingType::class)); },
            'workProfileDefaultAppPermissionPolicy' => function (ParseNode $n) use ($o) { $o->setWorkProfileDefaultAppPermissionPolicy($n->getEnumValue(AndroidWorkProfileDefaultAppPermissionPolicyType::class)); },
            'workProfilePasswordBlockFingerprintUnlock' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordBlockFingerprintUnlock($n->getBooleanValue()); },
            'workProfilePasswordBlockTrustAgents' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordBlockTrustAgents($n->getBooleanValue()); },
            'workProfilePasswordExpirationDays' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordExpirationDays($n->getIntegerValue()); },
            'workProfilePasswordMinimumLength' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinimumLength($n->getIntegerValue()); },
            'workProfilePasswordMinLetterCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinLetterCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinLowerCaseCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinLowerCaseCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinNonLetterCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinNonLetterCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinNumericCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinNumericCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinSymbolCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinSymbolCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinUpperCaseCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinUpperCaseCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'workProfilePasswordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'workProfilePasswordRequiredType' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordRequiredType($n->getEnumValue(AndroidWorkProfileRequiredPasswordType::class)); },
            'workProfilePasswordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
            'workProfileRequirePassword' => function (ParseNode $n) use ($o) { $o->setWorkProfileRequirePassword($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @return bool|null
    */
    public function getPasswordBlockFingerprintUnlock(): ?bool {
        return $this->passwordBlockFingerprintUnlock;
    }

    /**
     * Gets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     * @return bool|null
    */
    public function getPasswordBlockTrustAgents(): ?bool {
        return $this->passwordBlockTrustAgents;
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequiredType property value. Type of password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
     * @return AndroidWorkProfileRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidWorkProfileRequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        return $this->securityRequireVerifyApps;
    }

    /**
     * Gets the workProfileBlockAddingAccounts property value. Block users from adding/removing accounts in work profile.
     * @return bool|null
    */
    public function getWorkProfileBlockAddingAccounts(): ?bool {
        return $this->workProfileBlockAddingAccounts;
    }

    /**
     * Gets the workProfileBlockCamera property value. Block work profile camera.
     * @return bool|null
    */
    public function getWorkProfileBlockCamera(): ?bool {
        return $this->workProfileBlockCamera;
    }

    /**
     * Gets the workProfileBlockCrossProfileCallerId property value. Block display work profile caller ID in personal profile.
     * @return bool|null
    */
    public function getWorkProfileBlockCrossProfileCallerId(): ?bool {
        return $this->workProfileBlockCrossProfileCallerId;
    }

    /**
     * Gets the workProfileBlockCrossProfileContactsSearch property value. Block work profile contacts availability in personal profile.
     * @return bool|null
    */
    public function getWorkProfileBlockCrossProfileContactsSearch(): ?bool {
        return $this->workProfileBlockCrossProfileContactsSearch;
    }

    /**
     * Gets the workProfileBlockCrossProfileCopyPaste property value. Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
     * @return bool|null
    */
    public function getWorkProfileBlockCrossProfileCopyPaste(): ?bool {
        return $this->workProfileBlockCrossProfileCopyPaste;
    }

    /**
     * Gets the workProfileBlockNotificationsWhileDeviceLocked property value. Indicates whether or not to block notifications while device locked.
     * @return bool|null
    */
    public function getWorkProfileBlockNotificationsWhileDeviceLocked(): ?bool {
        return $this->workProfileBlockNotificationsWhileDeviceLocked;
    }

    /**
     * Gets the workProfileBlockScreenCapture property value. Block screen capture in work profile.
     * @return bool|null
    */
    public function getWorkProfileBlockScreenCapture(): ?bool {
        return $this->workProfileBlockScreenCapture;
    }

    /**
     * Gets the workProfileBluetoothEnableContactSharing property value. Allow bluetooth devices to access enterprise contacts.
     * @return bool|null
    */
    public function getWorkProfileBluetoothEnableContactSharing(): ?bool {
        return $this->workProfileBluetoothEnableContactSharing;
    }

    /**
     * Gets the workProfileDataSharingType property value. Type of data sharing that is allowed. Possible values are: deviceDefault, preventAny, allowPersonalToWork, noRestrictions.
     * @return AndroidWorkProfileCrossProfileDataSharingType|null
    */
    public function getWorkProfileDataSharingType(): ?AndroidWorkProfileCrossProfileDataSharingType {
        return $this->workProfileDataSharingType;
    }

    /**
     * Gets the workProfileDefaultAppPermissionPolicy property value. Type of password that is required. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
     * @return AndroidWorkProfileDefaultAppPermissionPolicyType|null
    */
    public function getWorkProfileDefaultAppPermissionPolicy(): ?AndroidWorkProfileDefaultAppPermissionPolicyType {
        return $this->workProfileDefaultAppPermissionPolicy;
    }

    /**
     * Gets the workProfilePasswordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockFingerprintUnlock(): ?bool {
        return $this->workProfilePasswordBlockFingerprintUnlock;
    }

    /**
     * Gets the workProfilePasswordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockTrustAgents(): ?bool {
        return $this->workProfilePasswordBlockTrustAgents;
    }

    /**
     * Gets the workProfilePasswordExpirationDays property value. Number of days before the work profile password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getWorkProfilePasswordExpirationDays(): ?int {
        return $this->workProfilePasswordExpirationDays;
    }

    /**
     * Gets the workProfilePasswordMinimumLength property value. Minimum length of work profile password. Valid values 4 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLength(): ?int {
        return $this->workProfilePasswordMinimumLength;
    }

    /**
     * Gets the workProfilePasswordMinLetterCharacters property value. Minimum # of letter characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinLetterCharacters(): ?int {
        return $this->workProfilePasswordMinLetterCharacters;
    }

    /**
     * Gets the workProfilePasswordMinLowerCaseCharacters property value. Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinLowerCaseCharacters(): ?int {
        return $this->workProfilePasswordMinLowerCaseCharacters;
    }

    /**
     * Gets the workProfilePasswordMinNonLetterCharacters property value. Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinNonLetterCharacters(): ?int {
        return $this->workProfilePasswordMinNonLetterCharacters;
    }

    /**
     * Gets the workProfilePasswordMinNumericCharacters property value. Minimum # of numeric characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinNumericCharacters(): ?int {
        return $this->workProfilePasswordMinNumericCharacters;
    }

    /**
     * Gets the workProfilePasswordMinSymbolCharacters property value. Minimum # of symbols required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinSymbolCharacters(): ?int {
        return $this->workProfilePasswordMinSymbolCharacters;
    }

    /**
     * Gets the workProfilePasswordMinUpperCaseCharacters property value. Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinUpperCaseCharacters(): ?int {
        return $this->workProfilePasswordMinUpperCaseCharacters;
    }

    /**
     * Gets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the workProfilePasswordPreviousPasswordBlockCount property value. Number of previous work profile passwords to block. Valid values 0 to 24
     * @return int|null
    */
    public function getWorkProfilePasswordPreviousPasswordBlockCount(): ?int {
        return $this->workProfilePasswordPreviousPasswordBlockCount;
    }

    /**
     * Gets the workProfilePasswordRequiredType property value. Type of work profile password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
     * @return AndroidWorkProfileRequiredPasswordType|null
    */
    public function getWorkProfilePasswordRequiredType(): ?AndroidWorkProfileRequiredPasswordType {
        return $this->workProfilePasswordRequiredType;
    }

    /**
     * Gets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->workProfilePasswordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the workProfileRequirePassword property value. Password is required or not for work profile
     * @return bool|null
    */
    public function getWorkProfileRequirePassword(): ?bool {
        return $this->workProfileRequirePassword;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('passwordBlockFingerprintUnlock', $this->passwordBlockFingerprintUnlock);
        $writer->writeBooleanValue('passwordBlockTrustAgents', $this->passwordBlockTrustAgents);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->passwordSignInFailureCountBeforeFactoryReset);
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->securityRequireVerifyApps);
        $writer->writeBooleanValue('workProfileBlockAddingAccounts', $this->workProfileBlockAddingAccounts);
        $writer->writeBooleanValue('workProfileBlockCamera', $this->workProfileBlockCamera);
        $writer->writeBooleanValue('workProfileBlockCrossProfileCallerId', $this->workProfileBlockCrossProfileCallerId);
        $writer->writeBooleanValue('workProfileBlockCrossProfileContactsSearch', $this->workProfileBlockCrossProfileContactsSearch);
        $writer->writeBooleanValue('workProfileBlockCrossProfileCopyPaste', $this->workProfileBlockCrossProfileCopyPaste);
        $writer->writeBooleanValue('workProfileBlockNotificationsWhileDeviceLocked', $this->workProfileBlockNotificationsWhileDeviceLocked);
        $writer->writeBooleanValue('workProfileBlockScreenCapture', $this->workProfileBlockScreenCapture);
        $writer->writeBooleanValue('workProfileBluetoothEnableContactSharing', $this->workProfileBluetoothEnableContactSharing);
        $writer->writeEnumValue('workProfileDataSharingType', $this->workProfileDataSharingType);
        $writer->writeEnumValue('workProfileDefaultAppPermissionPolicy', $this->workProfileDefaultAppPermissionPolicy);
        $writer->writeBooleanValue('workProfilePasswordBlockFingerprintUnlock', $this->workProfilePasswordBlockFingerprintUnlock);
        $writer->writeBooleanValue('workProfilePasswordBlockTrustAgents', $this->workProfilePasswordBlockTrustAgents);
        $writer->writeIntegerValue('workProfilePasswordExpirationDays', $this->workProfilePasswordExpirationDays);
        $writer->writeIntegerValue('workProfilePasswordMinimumLength', $this->workProfilePasswordMinimumLength);
        $writer->writeIntegerValue('workProfilePasswordMinLetterCharacters', $this->workProfilePasswordMinLetterCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinLowerCaseCharacters', $this->workProfilePasswordMinLowerCaseCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinNonLetterCharacters', $this->workProfilePasswordMinNonLetterCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinNumericCharacters', $this->workProfilePasswordMinNumericCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinSymbolCharacters', $this->workProfilePasswordMinSymbolCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinUpperCaseCharacters', $this->workProfilePasswordMinUpperCaseCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinutesOfInactivityBeforeScreenTimeout', $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('workProfilePasswordPreviousPasswordBlockCount', $this->workProfilePasswordPreviousPasswordBlockCount);
        $writer->writeEnumValue('workProfilePasswordRequiredType', $this->workProfilePasswordRequiredType);
        $writer->writeIntegerValue('workProfilePasswordSignInFailureCountBeforeFactoryReset', $this->workProfilePasswordSignInFailureCountBeforeFactoryReset);
        $writer->writeBooleanValue('workProfileRequirePassword', $this->workProfileRequirePassword);
    }

    /**
     * Sets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     *  @param bool|null $value Value to set for the passwordBlockFingerprintUnlock property.
    */
    public function setPasswordBlockFingerprintUnlock(?bool $value ): void {
        $this->passwordBlockFingerprintUnlock = $value;
    }

    /**
     * Sets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     *  @param bool|null $value Value to set for the passwordBlockTrustAgents property.
    */
    public function setPasswordBlockTrustAgents(?bool $value ): void {
        $this->passwordBlockTrustAgents = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Type of password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
     *  @param AndroidWorkProfileRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidWorkProfileRequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->passwordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     *  @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value ): void {
        $this->securityRequireVerifyApps = $value;
    }

    /**
     * Sets the workProfileBlockAddingAccounts property value. Block users from adding/removing accounts in work profile.
     *  @param bool|null $value Value to set for the workProfileBlockAddingAccounts property.
    */
    public function setWorkProfileBlockAddingAccounts(?bool $value ): void {
        $this->workProfileBlockAddingAccounts = $value;
    }

    /**
     * Sets the workProfileBlockCamera property value. Block work profile camera.
     *  @param bool|null $value Value to set for the workProfileBlockCamera property.
    */
    public function setWorkProfileBlockCamera(?bool $value ): void {
        $this->workProfileBlockCamera = $value;
    }

    /**
     * Sets the workProfileBlockCrossProfileCallerId property value. Block display work profile caller ID in personal profile.
     *  @param bool|null $value Value to set for the workProfileBlockCrossProfileCallerId property.
    */
    public function setWorkProfileBlockCrossProfileCallerId(?bool $value ): void {
        $this->workProfileBlockCrossProfileCallerId = $value;
    }

    /**
     * Sets the workProfileBlockCrossProfileContactsSearch property value. Block work profile contacts availability in personal profile.
     *  @param bool|null $value Value to set for the workProfileBlockCrossProfileContactsSearch property.
    */
    public function setWorkProfileBlockCrossProfileContactsSearch(?bool $value ): void {
        $this->workProfileBlockCrossProfileContactsSearch = $value;
    }

    /**
     * Sets the workProfileBlockCrossProfileCopyPaste property value. Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
     *  @param bool|null $value Value to set for the workProfileBlockCrossProfileCopyPaste property.
    */
    public function setWorkProfileBlockCrossProfileCopyPaste(?bool $value ): void {
        $this->workProfileBlockCrossProfileCopyPaste = $value;
    }

    /**
     * Sets the workProfileBlockNotificationsWhileDeviceLocked property value. Indicates whether or not to block notifications while device locked.
     *  @param bool|null $value Value to set for the workProfileBlockNotificationsWhileDeviceLocked property.
    */
    public function setWorkProfileBlockNotificationsWhileDeviceLocked(?bool $value ): void {
        $this->workProfileBlockNotificationsWhileDeviceLocked = $value;
    }

    /**
     * Sets the workProfileBlockScreenCapture property value. Block screen capture in work profile.
     *  @param bool|null $value Value to set for the workProfileBlockScreenCapture property.
    */
    public function setWorkProfileBlockScreenCapture(?bool $value ): void {
        $this->workProfileBlockScreenCapture = $value;
    }

    /**
     * Sets the workProfileBluetoothEnableContactSharing property value. Allow bluetooth devices to access enterprise contacts.
     *  @param bool|null $value Value to set for the workProfileBluetoothEnableContactSharing property.
    */
    public function setWorkProfileBluetoothEnableContactSharing(?bool $value ): void {
        $this->workProfileBluetoothEnableContactSharing = $value;
    }

    /**
     * Sets the workProfileDataSharingType property value. Type of data sharing that is allowed. Possible values are: deviceDefault, preventAny, allowPersonalToWork, noRestrictions.
     *  @param AndroidWorkProfileCrossProfileDataSharingType|null $value Value to set for the workProfileDataSharingType property.
    */
    public function setWorkProfileDataSharingType(?AndroidWorkProfileCrossProfileDataSharingType $value ): void {
        $this->workProfileDataSharingType = $value;
    }

    /**
     * Sets the workProfileDefaultAppPermissionPolicy property value. Type of password that is required. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
     *  @param AndroidWorkProfileDefaultAppPermissionPolicyType|null $value Value to set for the workProfileDefaultAppPermissionPolicy property.
    */
    public function setWorkProfileDefaultAppPermissionPolicy(?AndroidWorkProfileDefaultAppPermissionPolicyType $value ): void {
        $this->workProfileDefaultAppPermissionPolicy = $value;
    }

    /**
     * Sets the workProfilePasswordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockFingerprintUnlock property.
    */
    public function setWorkProfilePasswordBlockFingerprintUnlock(?bool $value ): void {
        $this->workProfilePasswordBlockFingerprintUnlock = $value;
    }

    /**
     * Sets the workProfilePasswordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockTrustAgents property.
    */
    public function setWorkProfilePasswordBlockTrustAgents(?bool $value ): void {
        $this->workProfilePasswordBlockTrustAgents = $value;
    }

    /**
     * Sets the workProfilePasswordExpirationDays property value. Number of days before the work profile password expires. Valid values 1 to 365
     *  @param int|null $value Value to set for the workProfilePasswordExpirationDays property.
    */
    public function setWorkProfilePasswordExpirationDays(?int $value ): void {
        $this->workProfilePasswordExpirationDays = $value;
    }

    /**
     * Sets the workProfilePasswordMinimumLength property value. Minimum length of work profile password. Valid values 4 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumLength property.
    */
    public function setWorkProfilePasswordMinimumLength(?int $value ): void {
        $this->workProfilePasswordMinimumLength = $value;
    }

    /**
     * Sets the workProfilePasswordMinLetterCharacters property value. Minimum # of letter characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinLetterCharacters property.
    */
    public function setWorkProfilePasswordMinLetterCharacters(?int $value ): void {
        $this->workProfilePasswordMinLetterCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinLowerCaseCharacters property value. Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinLowerCaseCharacters property.
    */
    public function setWorkProfilePasswordMinLowerCaseCharacters(?int $value ): void {
        $this->workProfilePasswordMinLowerCaseCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinNonLetterCharacters property value. Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinNonLetterCharacters property.
    */
    public function setWorkProfilePasswordMinNonLetterCharacters(?int $value ): void {
        $this->workProfilePasswordMinNonLetterCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinNumericCharacters property value. Minimum # of numeric characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinNumericCharacters property.
    */
    public function setWorkProfilePasswordMinNumericCharacters(?int $value ): void {
        $this->workProfilePasswordMinNumericCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinSymbolCharacters property value. Minimum # of symbols required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinSymbolCharacters property.
    */
    public function setWorkProfilePasswordMinSymbolCharacters(?int $value ): void {
        $this->workProfilePasswordMinSymbolCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinUpperCaseCharacters property value. Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinUpperCaseCharacters property.
    */
    public function setWorkProfilePasswordMinUpperCaseCharacters(?int $value ): void {
        $this->workProfilePasswordMinUpperCaseCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the workProfilePasswordPreviousPasswordBlockCount property value. Number of previous work profile passwords to block. Valid values 0 to 24
     *  @param int|null $value Value to set for the workProfilePasswordPreviousPasswordBlockCount property.
    */
    public function setWorkProfilePasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->workProfilePasswordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the workProfilePasswordRequiredType property value. Type of work profile password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
     *  @param AndroidWorkProfileRequiredPasswordType|null $value Value to set for the workProfilePasswordRequiredType property.
    */
    public function setWorkProfilePasswordRequiredType(?AndroidWorkProfileRequiredPasswordType $value ): void {
        $this->workProfilePasswordRequiredType = $value;
    }

    /**
     * Sets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordSignInFailureCountBeforeFactoryReset property.
    */
    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->workProfilePasswordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the workProfileRequirePassword property value. Password is required or not for work profile
     *  @param bool|null $value Value to set for the workProfileRequirePassword property.
    */
    public function setWorkProfileRequirePassword(?bool $value ): void {
        $this->workProfileRequirePassword = $value;
    }

}
