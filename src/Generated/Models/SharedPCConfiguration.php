<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class SharedPCConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var SharedPCAccountManagerPolicy|null $accountManagerPolicy Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false.
    */
    private ?SharedPCAccountManagerPolicy $accountManagerPolicy = null;
    
    /**
     * @var SharedPCAllowedAccountType|null $allowedAccounts Indicates which type of accounts are allowed to use on a shared PC. Possible values are: notConfigured, guest, domain.
    */
    private ?SharedPCAllowedAccountType $allowedAccounts = null;
    
    /**
     * @var bool|null $allowLocalStorage Specifies whether local storage is allowed on a shared PC.
    */
    private ?bool $allowLocalStorage = null;
    
    /**
     * @var bool|null $disableAccountManager Disables the account manager for shared PC mode.
    */
    private ?bool $disableAccountManager = null;
    
    /**
     * @var bool|null $disableEduPolicies Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true.
    */
    private ?bool $disableEduPolicies = null;
    
    /**
     * @var bool|null $disablePowerPolicies Specifies whether the default shared PC power policies should be disabled.
    */
    private ?bool $disablePowerPolicies = null;
    
    /**
     * @var bool|null $disableSignInOnResume Disables the requirement to sign in whenever the device wakes up from sleep mode.
    */
    private ?bool $disableSignInOnResume = null;
    
    /**
     * @var bool|null $enabled Enables shared PC mode and applies the shared pc policies.
    */
    private ?bool $enabled = null;
    
    /**
     * @var int|null $idleTimeBeforeSleepInSeconds Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring.
    */
    private ?int $idleTimeBeforeSleepInSeconds = null;
    
    /**
     * @var string|null $kioskAppDisplayName Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set.
    */
    private ?string $kioskAppDisplayName = null;
    
    /**
     * @var string|null $kioskAppUserModelId Specifies the application user model ID of the app to use with assigned access.
    */
    private ?string $kioskAppUserModelId = null;
    
    /**
     * @var Time|null $maintenanceStartTime Specifies the daily start time of maintenance hour.
    */
    private ?Time $maintenanceStartTime = null;
    
    /**
     * Instantiates a new SharedPCConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedPCConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedPCConfiguration {
        return new SharedPCConfiguration();
    }

    /**
     * Gets the accountManagerPolicy property value. Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false.
     * @return SharedPCAccountManagerPolicy|null
    */
    public function getAccountManagerPolicy(): ?SharedPCAccountManagerPolicy {
        return $this->accountManagerPolicy;
    }

    /**
     * Gets the allowedAccounts property value. Indicates which type of accounts are allowed to use on a shared PC. Possible values are: notConfigured, guest, domain.
     * @return SharedPCAllowedAccountType|null
    */
    public function getAllowedAccounts(): ?SharedPCAllowedAccountType {
        return $this->allowedAccounts;
    }

    /**
     * Gets the allowLocalStorage property value. Specifies whether local storage is allowed on a shared PC.
     * @return bool|null
    */
    public function getAllowLocalStorage(): ?bool {
        return $this->allowLocalStorage;
    }

    /**
     * Gets the disableAccountManager property value. Disables the account manager for shared PC mode.
     * @return bool|null
    */
    public function getDisableAccountManager(): ?bool {
        return $this->disableAccountManager;
    }

    /**
     * Gets the disableEduPolicies property value. Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true.
     * @return bool|null
    */
    public function getDisableEduPolicies(): ?bool {
        return $this->disableEduPolicies;
    }

    /**
     * Gets the disablePowerPolicies property value. Specifies whether the default shared PC power policies should be disabled.
     * @return bool|null
    */
    public function getDisablePowerPolicies(): ?bool {
        return $this->disablePowerPolicies;
    }

    /**
     * Gets the disableSignInOnResume property value. Disables the requirement to sign in whenever the device wakes up from sleep mode.
     * @return bool|null
    */
    public function getDisableSignInOnResume(): ?bool {
        return $this->disableSignInOnResume;
    }

    /**
     * Gets the enabled property value. Enables shared PC mode and applies the shared pc policies.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountManagerPolicy' => function (ParseNode $n) use ($o) { $o->setAccountManagerPolicy($n->getObjectValue(array(SharedPCAccountManagerPolicy::class, 'createFromDiscriminatorValue'))); },
            'allowedAccounts' => function (ParseNode $n) use ($o) { $o->setAllowedAccounts($n->getEnumValue(SharedPCAllowedAccountType::class)); },
            'allowLocalStorage' => function (ParseNode $n) use ($o) { $o->setAllowLocalStorage($n->getBooleanValue()); },
            'disableAccountManager' => function (ParseNode $n) use ($o) { $o->setDisableAccountManager($n->getBooleanValue()); },
            'disableEduPolicies' => function (ParseNode $n) use ($o) { $o->setDisableEduPolicies($n->getBooleanValue()); },
            'disablePowerPolicies' => function (ParseNode $n) use ($o) { $o->setDisablePowerPolicies($n->getBooleanValue()); },
            'disableSignInOnResume' => function (ParseNode $n) use ($o) { $o->setDisableSignInOnResume($n->getBooleanValue()); },
            'enabled' => function (ParseNode $n) use ($o) { $o->setEnabled($n->getBooleanValue()); },
            'idleTimeBeforeSleepInSeconds' => function (ParseNode $n) use ($o) { $o->setIdleTimeBeforeSleepInSeconds($n->getIntegerValue()); },
            'kioskAppDisplayName' => function (ParseNode $n) use ($o) { $o->setKioskAppDisplayName($n->getStringValue()); },
            'kioskAppUserModelId' => function (ParseNode $n) use ($o) { $o->setKioskAppUserModelId($n->getStringValue()); },
            'maintenanceStartTime' => function (ParseNode $n) use ($o) { $o->setMaintenanceStartTime($n->getTimeValue()); },
        ]);
    }

    /**
     * Gets the idleTimeBeforeSleepInSeconds property value. Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring.
     * @return int|null
    */
    public function getIdleTimeBeforeSleepInSeconds(): ?int {
        return $this->idleTimeBeforeSleepInSeconds;
    }

    /**
     * Gets the kioskAppDisplayName property value. Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set.
     * @return string|null
    */
    public function getKioskAppDisplayName(): ?string {
        return $this->kioskAppDisplayName;
    }

    /**
     * Gets the kioskAppUserModelId property value. Specifies the application user model ID of the app to use with assigned access.
     * @return string|null
    */
    public function getKioskAppUserModelId(): ?string {
        return $this->kioskAppUserModelId;
    }

    /**
     * Gets the maintenanceStartTime property value. Specifies the daily start time of maintenance hour.
     * @return Time|null
    */
    public function getMaintenanceStartTime(): ?Time {
        return $this->maintenanceStartTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accountManagerPolicy', $this->accountManagerPolicy);
        $writer->writeEnumValue('allowedAccounts', $this->allowedAccounts);
        $writer->writeBooleanValue('allowLocalStorage', $this->allowLocalStorage);
        $writer->writeBooleanValue('disableAccountManager', $this->disableAccountManager);
        $writer->writeBooleanValue('disableEduPolicies', $this->disableEduPolicies);
        $writer->writeBooleanValue('disablePowerPolicies', $this->disablePowerPolicies);
        $writer->writeBooleanValue('disableSignInOnResume', $this->disableSignInOnResume);
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeIntegerValue('idleTimeBeforeSleepInSeconds', $this->idleTimeBeforeSleepInSeconds);
        $writer->writeStringValue('kioskAppDisplayName', $this->kioskAppDisplayName);
        $writer->writeStringValue('kioskAppUserModelId', $this->kioskAppUserModelId);
        $writer->writeTimeValue('maintenanceStartTime', $this->maintenanceStartTime);
    }

    /**
     * Sets the accountManagerPolicy property value. Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false.
     *  @param SharedPCAccountManagerPolicy|null $value Value to set for the accountManagerPolicy property.
    */
    public function setAccountManagerPolicy(?SharedPCAccountManagerPolicy $value ): void {
        $this->accountManagerPolicy = $value;
    }

    /**
     * Sets the allowedAccounts property value. Indicates which type of accounts are allowed to use on a shared PC. Possible values are: notConfigured, guest, domain.
     *  @param SharedPCAllowedAccountType|null $value Value to set for the allowedAccounts property.
    */
    public function setAllowedAccounts(?SharedPCAllowedAccountType $value ): void {
        $this->allowedAccounts = $value;
    }

    /**
     * Sets the allowLocalStorage property value. Specifies whether local storage is allowed on a shared PC.
     *  @param bool|null $value Value to set for the allowLocalStorage property.
    */
    public function setAllowLocalStorage(?bool $value ): void {
        $this->allowLocalStorage = $value;
    }

    /**
     * Sets the disableAccountManager property value. Disables the account manager for shared PC mode.
     *  @param bool|null $value Value to set for the disableAccountManager property.
    */
    public function setDisableAccountManager(?bool $value ): void {
        $this->disableAccountManager = $value;
    }

    /**
     * Sets the disableEduPolicies property value. Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true.
     *  @param bool|null $value Value to set for the disableEduPolicies property.
    */
    public function setDisableEduPolicies(?bool $value ): void {
        $this->disableEduPolicies = $value;
    }

    /**
     * Sets the disablePowerPolicies property value. Specifies whether the default shared PC power policies should be disabled.
     *  @param bool|null $value Value to set for the disablePowerPolicies property.
    */
    public function setDisablePowerPolicies(?bool $value ): void {
        $this->disablePowerPolicies = $value;
    }

    /**
     * Sets the disableSignInOnResume property value. Disables the requirement to sign in whenever the device wakes up from sleep mode.
     *  @param bool|null $value Value to set for the disableSignInOnResume property.
    */
    public function setDisableSignInOnResume(?bool $value ): void {
        $this->disableSignInOnResume = $value;
    }

    /**
     * Sets the enabled property value. Enables shared PC mode and applies the shared pc policies.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the idleTimeBeforeSleepInSeconds property value. Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring.
     *  @param int|null $value Value to set for the idleTimeBeforeSleepInSeconds property.
    */
    public function setIdleTimeBeforeSleepInSeconds(?int $value ): void {
        $this->idleTimeBeforeSleepInSeconds = $value;
    }

    /**
     * Sets the kioskAppDisplayName property value. Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set.
     *  @param string|null $value Value to set for the kioskAppDisplayName property.
    */
    public function setKioskAppDisplayName(?string $value ): void {
        $this->kioskAppDisplayName = $value;
    }

    /**
     * Sets the kioskAppUserModelId property value. Specifies the application user model ID of the app to use with assigned access.
     *  @param string|null $value Value to set for the kioskAppUserModelId property.
    */
    public function setKioskAppUserModelId(?string $value ): void {
        $this->kioskAppUserModelId = $value;
    }

    /**
     * Sets the maintenanceStartTime property value. Specifies the daily start time of maintenance hour.
     *  @param Time|null $value Value to set for the maintenanceStartTime property.
    */
    public function setMaintenanceStartTime(?Time $value ): void {
        $this->maintenanceStartTime = $value;
    }

}
