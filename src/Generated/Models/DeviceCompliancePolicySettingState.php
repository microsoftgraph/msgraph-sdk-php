<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceCompliancePolicySettingState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $currentValue Current value of setting on device
    */
    private ?string $currentValue = null;
    
    /**
     * @var int|null $errorCode Error code for the setting
    */
    private ?int $errorCode = null;
    
    /**
     * @var string|null $errorDescription Error description
    */
    private ?string $errorDescription = null;
    
    /**
     * @var string|null $instanceDisplayName Name of setting instance that is being reported.
    */
    private ?string $instanceDisplayName = null;
    
    /**
     * @var string|null $setting The setting that is being reported
    */
    private ?string $setting = null;
    
    /**
     * @var string|null $settingName Localized/user friendly setting name that is being reported
    */
    private ?string $settingName = null;
    
    /**
     * @var array<SettingSource>|null $sources Contributing policies
    */
    private ?array $sources = null;
    
    /**
     * @var ComplianceStatus|null $state The compliance state of the setting. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    */
    private ?ComplianceStatus $state = null;
    
    /**
     * @var string|null $userEmail UserEmail
    */
    private ?string $userEmail = null;
    
    /**
     * @var string|null $userId UserId
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userName UserName
    */
    private ?string $userName = null;
    
    /**
     * @var string|null $userPrincipalName UserPrincipalName.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new deviceCompliancePolicySettingState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceCompliancePolicySettingState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceCompliancePolicySettingState {
        return new DeviceCompliancePolicySettingState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the currentValue property value. Current value of setting on device
     * @return string|null
    */
    public function getCurrentValue(): ?string {
        return $this->currentValue;
    }

    /**
     * Gets the errorCode property value. Error code for the setting
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * Gets the errorDescription property value. Error description
     * @return string|null
    */
    public function getErrorDescription(): ?string {
        return $this->errorDescription;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentValue' => function (ParseNode $n) use ($o) { $o->setCurrentValue($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'errorDescription' => function (ParseNode $n) use ($o) { $o->setErrorDescription($n->getStringValue()); },
            'instanceDisplayName' => function (ParseNode $n) use ($o) { $o->setInstanceDisplayName($n->getStringValue()); },
            'setting' => function (ParseNode $n) use ($o) { $o->setSetting($n->getStringValue()); },
            'settingName' => function (ParseNode $n) use ($o) { $o->setSettingName($n->getStringValue()); },
            'sources' => function (ParseNode $n) use ($o) { $o->setSources($n->getCollectionOfObjectValues(array(SettingSource::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ComplianceStatus::class)); },
            'userEmail' => function (ParseNode $n) use ($o) { $o->setUserEmail($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the instanceDisplayName property value. Name of setting instance that is being reported.
     * @return string|null
    */
    public function getInstanceDisplayName(): ?string {
        return $this->instanceDisplayName;
    }

    /**
     * Gets the setting property value. The setting that is being reported
     * @return string|null
    */
    public function getSetting(): ?string {
        return $this->setting;
    }

    /**
     * Gets the settingName property value. Localized/user friendly setting name that is being reported
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Gets the sources property value. Contributing policies
     * @return array<SettingSource>|null
    */
    public function getSources(): ?array {
        return $this->sources;
    }

    /**
     * Gets the state property value. The compliance state of the setting. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
     * @return ComplianceStatus|null
    */
    public function getState(): ?ComplianceStatus {
        return $this->state;
    }

    /**
     * Gets the userEmail property value. UserEmail
     * @return string|null
    */
    public function getUserEmail(): ?string {
        return $this->userEmail;
    }

    /**
     * Gets the userId property value. UserId
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userName property value. UserName
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Gets the userPrincipalName property value. UserPrincipalName.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currentValue', $this->currentValue);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeStringValue('errorDescription', $this->errorDescription);
        $writer->writeStringValue('instanceDisplayName', $this->instanceDisplayName);
        $writer->writeStringValue('setting', $this->setting);
        $writer->writeStringValue('settingName', $this->settingName);
        $writer->writeCollectionOfObjectValues('sources', $this->sources);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('userEmail', $this->userEmail);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userName', $this->userName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the currentValue property value. Current value of setting on device
     *  @param string|null $value Value to set for the currentValue property.
    */
    public function setCurrentValue(?string $value ): void {
        $this->currentValue = $value;
    }

    /**
     * Sets the errorCode property value. Error code for the setting
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the errorDescription property value. Error description
     *  @param string|null $value Value to set for the errorDescription property.
    */
    public function setErrorDescription(?string $value ): void {
        $this->errorDescription = $value;
    }

    /**
     * Sets the instanceDisplayName property value. Name of setting instance that is being reported.
     *  @param string|null $value Value to set for the instanceDisplayName property.
    */
    public function setInstanceDisplayName(?string $value ): void {
        $this->instanceDisplayName = $value;
    }

    /**
     * Sets the setting property value. The setting that is being reported
     *  @param string|null $value Value to set for the setting property.
    */
    public function setSetting(?string $value ): void {
        $this->setting = $value;
    }

    /**
     * Sets the settingName property value. Localized/user friendly setting name that is being reported
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

    /**
     * Sets the sources property value. Contributing policies
     *  @param array<SettingSource>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value ): void {
        $this->sources = $value;
    }

    /**
     * Sets the state property value. The compliance state of the setting. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
     *  @param ComplianceStatus|null $value Value to set for the state property.
    */
    public function setState(?ComplianceStatus $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the userEmail property value. UserEmail
     *  @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value ): void {
        $this->userEmail = $value;
    }

    /**
     * Sets the userId property value. UserId
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userName property value. UserName
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

    /**
     * Sets the userPrincipalName property value. UserPrincipalName.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
