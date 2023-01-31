<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AuthenticationMethodsRegistrationCampaign implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new authenticationMethodsRegistrationCampaign and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the excludeTargets property value. Users and groups of users that are excluded from being prompted to set up the authentication method.
     * @return array<ExcludeTarget>|null
    */
    public function getExcludeTargets(): ?array {
        return $this->getBackingStore()->get('excludeTargets');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeTargets' => fn(ParseNode $n) => $o->setExcludeTargets($n->getCollectionOfObjectValues([ExcludeTarget::class, 'createFromDiscriminatorValue'])),
            'includeTargets' => fn(ParseNode $n) => $o->setIncludeTargets($n->getCollectionOfObjectValues([AuthenticationMethodsRegistrationCampaignIncludeTarget::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'snoozeDurationInDays' => fn(ParseNode $n) => $o->setSnoozeDurationInDays($n->getIntegerValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AdvancedConfigState::class)),
        ];
    }

    /**
     * Gets the includeTargets property value. Users and groups of users that are prompted to set up the authentication method.
     * @return array<AuthenticationMethodsRegistrationCampaignIncludeTarget>|null
    */
    public function getIncludeTargets(): ?array {
        return $this->getBackingStore()->get('includeTargets');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the snoozeDurationInDays property value. Specifies the number of days that the user sees a prompt again if they select 'Not now' and snoozes the prompt. Minimum: 0 days. Maximum: 14 days. If the value is '0', the user is prompted during every MFA attempt.
     * @return int|null
    */
    public function getSnoozeDurationInDays(): ?int {
        return $this->getBackingStore()->get('snoozeDurationInDays');
    }

    /**
     * Gets the state property value. 
     * @return AdvancedConfigState|null
    */
    public function getState(): ?AdvancedConfigState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('excludeTargets', $this->getExcludeTargets());
        $writer->writeCollectionOfObjectValues('includeTargets', $this->getIncludeTargets());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('snoozeDurationInDays', $this->getSnoozeDurationInDays());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the excludeTargets property value. Users and groups of users that are excluded from being prompted to set up the authentication method.
     * @param array<ExcludeTarget>|null $value Value to set for the excludeTargets property.
    */
    public function setExcludeTargets(?array $value): void {
        $this->getBackingStore()->set('excludeTargets', $value);
    }

    /**
     * Sets the includeTargets property value. Users and groups of users that are prompted to set up the authentication method.
     * @param array<AuthenticationMethodsRegistrationCampaignIncludeTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value): void {
        $this->getBackingStore()->set('includeTargets', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the snoozeDurationInDays property value. Specifies the number of days that the user sees a prompt again if they select 'Not now' and snoozes the prompt. Minimum: 0 days. Maximum: 14 days. If the value is '0', the user is prompted during every MFA attempt.
     * @param int|null $value Value to set for the snoozeDurationInDays property.
    */
    public function setSnoozeDurationInDays(?int $value): void {
        $this->getBackingStore()->set('snoozeDurationInDays', $value);
    }

    /**
     * Sets the state property value. 
     * @param AdvancedConfigState|null $value Value to set for the state property.
    */
    public function setState(?AdvancedConfigState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
