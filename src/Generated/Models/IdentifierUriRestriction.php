<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IdentifierUriRestriction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IdentifierUriRestriction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentifierUriRestriction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentifierUriRestriction {
        return new IdentifierUriRestriction();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the excludeActors property value. Collection of custom security attribute exemptions. If an actor user or service principal has the custom security attribute defined in this section, they're exempted from the restriction.  This means that calls the user or service principal makes to create or update apps are exempt from this policy enforcement.
     * @return AppManagementPolicyActorExemptions|null
    */
    public function getExcludeActors(): ?AppManagementPolicyActorExemptions {
        $val = $this->getBackingStore()->get('excludeActors');
        if (is_null($val) || $val instanceof AppManagementPolicyActorExemptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeActors'");
    }

    /**
     * Gets the excludeAppsReceivingV2Tokens property value. If true, the restriction isn't enforced for applications that are configured to receive V2 tokens in Microsoft Entra ID; else, the restriction is enforced for those applications.
     * @return bool|null
    */
    public function getExcludeAppsReceivingV2Tokens(): ?bool {
        $val = $this->getBackingStore()->get('excludeAppsReceivingV2Tokens');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeAppsReceivingV2Tokens'");
    }

    /**
     * Gets the excludeSaml property value. If true, the restriction isn't enforced for SAML applications in Microsoft Entra ID; else, the restriction is enforced for those applications.
     * @return bool|null
    */
    public function getExcludeSaml(): ?bool {
        $val = $this->getBackingStore()->get('excludeSaml');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeSaml'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeActors' => fn(ParseNode $n) => $o->setExcludeActors($n->getObjectValue([AppManagementPolicyActorExemptions::class, 'createFromDiscriminatorValue'])),
            'excludeAppsReceivingV2Tokens' => fn(ParseNode $n) => $o->setExcludeAppsReceivingV2Tokens($n->getBooleanValue()),
            'excludeSaml' => fn(ParseNode $n) => $o->setExcludeSaml($n->getBooleanValue()),
            'isStateSetByMicrosoft' => fn(ParseNode $n) => $o->setIsStateSetByMicrosoft($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'restrictForAppsCreatedAfterDateTime' => fn(ParseNode $n) => $o->setRestrictForAppsCreatedAfterDateTime($n->getDateTimeValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AppManagementRestrictionState::class)),
        ];
    }

    /**
     * Gets the isStateSetByMicrosoft property value. If true, Microsoft sets the identifierUriRestriction state. If false, the tenant modifies the identifierUriRestriction state. Read-only.
     * @return bool|null
    */
    public function getIsStateSetByMicrosoft(): ?bool {
        $val = $this->getBackingStore()->get('isStateSetByMicrosoft');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isStateSetByMicrosoft'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the restrictForAppsCreatedAfterDateTime property value. Specifies the date from which the policy restriction applies to newly created applications. For existing applications, the enforcement date can be retroactively applied.
     * @return DateTime|null
    */
    public function getRestrictForAppsCreatedAfterDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restrictForAppsCreatedAfterDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictForAppsCreatedAfterDateTime'");
    }

    /**
     * Gets the state property value. The state property
     * @return AppManagementRestrictionState|null
    */
    public function getState(): ?AppManagementRestrictionState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof AppManagementRestrictionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('excludeActors', $this->getExcludeActors());
        $writer->writeBooleanValue('excludeAppsReceivingV2Tokens', $this->getExcludeAppsReceivingV2Tokens());
        $writer->writeBooleanValue('excludeSaml', $this->getExcludeSaml());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('restrictForAppsCreatedAfterDateTime', $this->getRestrictForAppsCreatedAfterDateTime());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the excludeActors property value. Collection of custom security attribute exemptions. If an actor user or service principal has the custom security attribute defined in this section, they're exempted from the restriction.  This means that calls the user or service principal makes to create or update apps are exempt from this policy enforcement.
     * @param AppManagementPolicyActorExemptions|null $value Value to set for the excludeActors property.
    */
    public function setExcludeActors(?AppManagementPolicyActorExemptions $value): void {
        $this->getBackingStore()->set('excludeActors', $value);
    }

    /**
     * Sets the excludeAppsReceivingV2Tokens property value. If true, the restriction isn't enforced for applications that are configured to receive V2 tokens in Microsoft Entra ID; else, the restriction is enforced for those applications.
     * @param bool|null $value Value to set for the excludeAppsReceivingV2Tokens property.
    */
    public function setExcludeAppsReceivingV2Tokens(?bool $value): void {
        $this->getBackingStore()->set('excludeAppsReceivingV2Tokens', $value);
    }

    /**
     * Sets the excludeSaml property value. If true, the restriction isn't enforced for SAML applications in Microsoft Entra ID; else, the restriction is enforced for those applications.
     * @param bool|null $value Value to set for the excludeSaml property.
    */
    public function setExcludeSaml(?bool $value): void {
        $this->getBackingStore()->set('excludeSaml', $value);
    }

    /**
     * Sets the isStateSetByMicrosoft property value. If true, Microsoft sets the identifierUriRestriction state. If false, the tenant modifies the identifierUriRestriction state. Read-only.
     * @param bool|null $value Value to set for the isStateSetByMicrosoft property.
    */
    public function setIsStateSetByMicrosoft(?bool $value): void {
        $this->getBackingStore()->set('isStateSetByMicrosoft', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the restrictForAppsCreatedAfterDateTime property value. Specifies the date from which the policy restriction applies to newly created applications. For existing applications, the enforcement date can be retroactively applied.
     * @param DateTime|null $value Value to set for the restrictForAppsCreatedAfterDateTime property.
    */
    public function setRestrictForAppsCreatedAfterDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restrictForAppsCreatedAfterDateTime', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param AppManagementRestrictionState|null $value Value to set for the state property.
    */
    public function setState(?AppManagementRestrictionState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
