<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConditionalAccessGrantControls implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessGrantControls and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessGrantControls
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessGrantControls {
        return new ConditionalAccessGrantControls();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the authenticationStrength property value. The authenticationStrength property
     * @return AuthenticationStrengthPolicy|null
    */
    public function getAuthenticationStrength(): ?AuthenticationStrengthPolicy {
        $val = $this->getBackingStore()->get('authenticationStrength');
        if (is_null($val) || $val instanceof AuthenticationStrengthPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationStrength'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the builtInControls property value. List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     * @return array<ConditionalAccessGrantControl>|null
    */
    public function getBuiltInControls(): ?array {
        $val = $this->getBackingStore()->get('builtInControls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConditionalAccessGrantControl::class);
            /** @var array<ConditionalAccessGrantControl>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'builtInControls'");
    }

    /**
     * Gets the customAuthenticationFactors property value. List of custom controls IDs required by the policy. For more information, see Custom controls.
     * @return array<string>|null
    */
    public function getCustomAuthenticationFactors(): ?array {
        $val = $this->getBackingStore()->get('customAuthenticationFactors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customAuthenticationFactors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationStrength' => fn(ParseNode $n) => $o->setAuthenticationStrength($n->getObjectValue([AuthenticationStrengthPolicy::class, 'createFromDiscriminatorValue'])),
            'builtInControls' => fn(ParseNode $n) => $o->setBuiltInControls($n->getCollectionOfEnumValues(ConditionalAccessGrantControl::class)),
            'customAuthenticationFactors' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCustomAuthenticationFactors($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getStringValue()),
            'termsOfUse' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTermsOfUse($val);
            },
        ];
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
     * Gets the operator property value. Defines the relationship of the grant controls. Possible values: AND, OR.
     * @return string|null
    */
    public function getOperator(): ?string {
        $val = $this->getBackingStore()->get('operator');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operator'");
    }

    /**
     * Gets the termsOfUse property value. List of terms of use IDs required by the policy.
     * @return array<string>|null
    */
    public function getTermsOfUse(): ?array {
        $val = $this->getBackingStore()->get('termsOfUse');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsOfUse'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('authenticationStrength', $this->getAuthenticationStrength());
        $writer->writeCollectionOfEnumValues('builtInControls', $this->getBuiltInControls());
        $writer->writeCollectionOfPrimitiveValues('customAuthenticationFactors', $this->getCustomAuthenticationFactors());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operator', $this->getOperator());
        $writer->writeCollectionOfPrimitiveValues('termsOfUse', $this->getTermsOfUse());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the authenticationStrength property value. The authenticationStrength property
     * @param AuthenticationStrengthPolicy|null $value Value to set for the authenticationStrength property.
    */
    public function setAuthenticationStrength(?AuthenticationStrengthPolicy $value): void {
        $this->getBackingStore()->set('authenticationStrength', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the builtInControls property value. List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     * @param array<ConditionalAccessGrantControl>|null $value Value to set for the builtInControls property.
    */
    public function setBuiltInControls(?array $value): void {
        $this->getBackingStore()->set('builtInControls', $value);
    }

    /**
     * Sets the customAuthenticationFactors property value. List of custom controls IDs required by the policy. For more information, see Custom controls.
     * @param array<string>|null $value Value to set for the customAuthenticationFactors property.
    */
    public function setCustomAuthenticationFactors(?array $value): void {
        $this->getBackingStore()->set('customAuthenticationFactors', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operator property value. Defines the relationship of the grant controls. Possible values: AND, OR.
     * @param string|null $value Value to set for the operator property.
    */
    public function setOperator(?string $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the termsOfUse property value. List of terms of use IDs required by the policy.
     * @param array<string>|null $value Value to set for the termsOfUse property.
    */
    public function setTermsOfUse(?array $value): void {
        $this->getBackingStore()->set('termsOfUse', $value);
    }

}
