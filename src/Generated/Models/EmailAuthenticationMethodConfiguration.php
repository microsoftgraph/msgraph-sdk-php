<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * @var ExternalEmailOtpState|null $allowExternalIdToUseEmailOtp Determines whether email OTP is usable by external users for authentication. Possible values are: default, enabled, disabled, unknownFutureValue. Tenants in the default state who did not use public preview will automatically have email OTP enabled beginning in October 2021.
    */
    private ?ExternalEmailOtpState $allowExternalIdToUseEmailOtp = null;
    
    /**
     * @var array<AuthenticationMethodTarget>|null $includeTargets A collection of users or groups who are enabled to use the authentication method.
    */
    private ?array $includeTargets = null;
    
    /**
     * Instantiates a new EmailAuthenticationMethodConfiguration and sets the default values.
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
        return $this->allowExternalIdToUseEmailOtp;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowExternalIdToUseEmailOtp' => function (ParseNode $n) use ($o) { $o->setAllowExternalIdToUseEmailOtp($n->getEnumValue(ExternalEmailOtpState::class)); },
            'includeTargets' => function (ParseNode $n) use ($o) { $o->setIncludeTargets($n->getCollectionOfObjectValues(array(AuthenticationMethodTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method.
     * @return array<AuthenticationMethodTarget>|null
    */
    public function getIncludeTargets(): ?array {
        return $this->includeTargets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowExternalIdToUseEmailOtp', $this->allowExternalIdToUseEmailOtp);
        $writer->writeCollectionOfObjectValues('includeTargets', $this->includeTargets);
    }

    /**
     * Sets the allowExternalIdToUseEmailOtp property value. Determines whether email OTP is usable by external users for authentication. Possible values are: default, enabled, disabled, unknownFutureValue. Tenants in the default state who did not use public preview will automatically have email OTP enabled beginning in October 2021.
     *  @param ExternalEmailOtpState|null $value Value to set for the allowExternalIdToUseEmailOtp property.
    */
    public function setAllowExternalIdToUseEmailOtp(?ExternalEmailOtpState $value ): void {
        $this->allowExternalIdToUseEmailOtp = $value;
    }

    /**
     * Sets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method.
     *  @param array<AuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value ): void {
        $this->includeTargets = $value;
    }

}
