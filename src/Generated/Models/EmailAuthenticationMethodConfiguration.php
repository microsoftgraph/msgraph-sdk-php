<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EmailAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * Instantiates a new emailAuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.emailAuthenticationMethodConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailAuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailAuthenticationMethodConfiguration {
        return new EmailAuthenticationMethodConfiguration();
    }

    /**
     * Gets the allowExternalIdToUseEmailOtp property value. Determines whether email OTP is usable by external users for authentication. Possible values are: default, enabled, disabled, unknownFutureValue. Tenants in the default state who did not use public preview will automatically have email OTP enabled beginning in October 2021.
     * @return ExternalEmailOtpState|null
    */
    public function getAllowExternalIdToUseEmailOtp(): ?ExternalEmailOtpState {
        $val = $this->getBackingStore()->get('allowExternalIdToUseEmailOtp');
        if (is_null($val) || $val instanceof ExternalEmailOtpState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowExternalIdToUseEmailOtp'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowExternalIdToUseEmailOtp' => fn(ParseNode $n) => $o->setAllowExternalIdToUseEmailOtp($n->getEnumValue(ExternalEmailOtpState::class)),
            'includeTargets' => fn(ParseNode $n) => $o->setIncludeTargets($n->getCollectionOfObjectValues([AuthenticationMethodTarget::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the includeTargets property value. A collection of groups that are enabled to use the authentication method.
     * @return array<AuthenticationMethodTarget>|null
    */
    public function getIncludeTargets(): ?array {
        $val = $this->getBackingStore()->get('includeTargets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationMethodTarget::class);
            /** @var array<AuthenticationMethodTarget>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeTargets'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowExternalIdToUseEmailOtp', $this->getAllowExternalIdToUseEmailOtp());
        $writer->writeCollectionOfObjectValues('includeTargets', $this->getIncludeTargets());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the allowExternalIdToUseEmailOtp property value. Determines whether email OTP is usable by external users for authentication. Possible values are: default, enabled, disabled, unknownFutureValue. Tenants in the default state who did not use public preview will automatically have email OTP enabled beginning in October 2021.
     * @param ExternalEmailOtpState|null $value Value to set for the allowExternalIdToUseEmailOtp property.
    */
    public function setAllowExternalIdToUseEmailOtp(?ExternalEmailOtpState $value): void {
        $this->getBackingStore()->set('allowExternalIdToUseEmailOtp', $value);
    }

    /**
     * Sets the includeTargets property value. A collection of groups that are enabled to use the authentication method.
     * @param array<AuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value): void {
        $this->getBackingStore()->set('includeTargets', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
