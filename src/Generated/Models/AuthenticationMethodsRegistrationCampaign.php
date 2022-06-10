<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationMethodsRegistrationCampaign implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ExcludeTarget>|null $excludeTargets Users and groups of users that are excluded from being prompted to set up the authentication method.
    */
    private ?array $excludeTargets = null;
    
    /**
     * @var array<AuthenticationMethodsRegistrationCampaignIncludeTarget>|null $includeTargets Users and groups of users that are prompted to set up the authentication method.
    */
    private ?array $includeTargets = null;
    
    /**
     * @var int|null $snoozeDurationInDays Specifies the number of days that the user sees a prompt again if they select 'Not now' and snoozes the prompt. Minimum 0 days. Maximum: 14 days. If the value is '0' – The user is prompted during every MFA attempt.
    */
    private ?int $snoozeDurationInDays = null;
    
    /**
     * @var AdvancedConfigState|null $state Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
    */
    private ?AdvancedConfigState $state = null;
    
    /**
     * Instantiates a new authenticationMethodsRegistrationCampaign and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodsRegistrationCampaign
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodsRegistrationCampaign {
        return new AuthenticationMethodsRegistrationCampaign();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeTargets property value. Users and groups of users that are excluded from being prompted to set up the authentication method.
     * @return array<ExcludeTarget>|null
    */
    public function getExcludeTargets(): ?array {
        return $this->excludeTargets;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeTargets' => function (ParseNode $n) use ($o) { $o->setExcludeTargets($n->getCollectionOfObjectValues(array(ExcludeTarget::class, 'createFromDiscriminatorValue'))); },
            'includeTargets' => function (ParseNode $n) use ($o) { $o->setIncludeTargets($n->getCollectionOfObjectValues(array(AuthenticationMethodsRegistrationCampaignIncludeTarget::class, 'createFromDiscriminatorValue'))); },
            'snoozeDurationInDays' => function (ParseNode $n) use ($o) { $o->setSnoozeDurationInDays($n->getIntegerValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(AdvancedConfigState::class)); },
        ];
    }

    /**
     * Gets the includeTargets property value. Users and groups of users that are prompted to set up the authentication method.
     * @return array<AuthenticationMethodsRegistrationCampaignIncludeTarget>|null
    */
    public function getIncludeTargets(): ?array {
        return $this->includeTargets;
    }

    /**
     * Gets the snoozeDurationInDays property value. Specifies the number of days that the user sees a prompt again if they select 'Not now' and snoozes the prompt. Minimum 0 days. Maximum: 14 days. If the value is '0' – The user is prompted during every MFA attempt.
     * @return int|null
    */
    public function getSnoozeDurationInDays(): ?int {
        return $this->snoozeDurationInDays;
    }

    /**
     * Gets the state property value. Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
     * @return AdvancedConfigState|null
    */
    public function getState(): ?AdvancedConfigState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('excludeTargets', $this->excludeTargets);
        $writer->writeCollectionOfObjectValues('includeTargets', $this->includeTargets);
        $writer->writeIntegerValue('snoozeDurationInDays', $this->snoozeDurationInDays);
        $writer->writeEnumValue('state', $this->state);
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
     * Sets the excludeTargets property value. Users and groups of users that are excluded from being prompted to set up the authentication method.
     *  @param array<ExcludeTarget>|null $value Value to set for the excludeTargets property.
    */
    public function setExcludeTargets(?array $value ): void {
        $this->excludeTargets = $value;
    }

    /**
     * Sets the includeTargets property value. Users and groups of users that are prompted to set up the authentication method.
     *  @param array<AuthenticationMethodsRegistrationCampaignIncludeTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value ): void {
        $this->includeTargets = $value;
    }

    /**
     * Sets the snoozeDurationInDays property value. Specifies the number of days that the user sees a prompt again if they select 'Not now' and snoozes the prompt. Minimum 0 days. Maximum: 14 days. If the value is '0' – The user is prompted during every MFA attempt.
     *  @param int|null $value Value to set for the snoozeDurationInDays property.
    */
    public function setSnoozeDurationInDays(?int $value ): void {
        $this->snoozeDurationInDays = $value;
    }

    /**
     * Sets the state property value. Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Azure AD for the setting. The default value is disabled.
     *  @param AdvancedConfigState|null $value Value to set for the state property.
    */
    public function setState(?AdvancedConfigState $value ): void {
        $this->state = $value;
    }

}
