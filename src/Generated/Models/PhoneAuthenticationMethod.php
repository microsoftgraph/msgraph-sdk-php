<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PhoneAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * @var string|null $phoneNumber The phone number to text or call for authentication. Phone numbers use the format '+<country code> <number>x<extension>', with extension optional. For example, +1 5555551234 or +1 5555551234x123 are valid. Numbers are rejected when creating/updating if they do not match the required format.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var AuthenticationPhoneType|null $phoneType The type of this phone. Possible values are: mobile, alternateMobile, or office.
    */
    private ?AuthenticationPhoneType $phoneType = null;
    
    /**
     * @var AuthenticationMethodSignInState|null $smsSignInState Whether a phone is ready to be used for SMS sign-in or not. Possible values are: notSupported, notAllowedByPolicy, notEnabled, phoneNumberNotUnique, ready, or notConfigured, unknownFutureValue.
    */
    private ?AuthenticationMethodSignInState $smsSignInState = null;
    
    /**
     * Instantiates a new PhoneAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.phoneAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneAuthenticationMethod {
        return new PhoneAuthenticationMethod();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'phoneNumber' => function (ParseNode $n) use ($o) { $o->setPhoneNumber($n->getStringValue()); },
            'phoneType' => function (ParseNode $n) use ($o) { $o->setPhoneType($n->getEnumValue(AuthenticationPhoneType::class)); },
            'smsSignInState' => function (ParseNode $n) use ($o) { $o->setSmsSignInState($n->getEnumValue(AuthenticationMethodSignInState::class)); },
        ]);
    }

    /**
     * Gets the phoneNumber property value. The phone number to text or call for authentication. Phone numbers use the format '+<country code> <number>x<extension>', with extension optional. For example, +1 5555551234 or +1 5555551234x123 are valid. Numbers are rejected when creating/updating if they do not match the required format.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the phoneType property value. The type of this phone. Possible values are: mobile, alternateMobile, or office.
     * @return AuthenticationPhoneType|null
    */
    public function getPhoneType(): ?AuthenticationPhoneType {
        return $this->phoneType;
    }

    /**
     * Gets the smsSignInState property value. Whether a phone is ready to be used for SMS sign-in or not. Possible values are: notSupported, notAllowedByPolicy, notEnabled, phoneNumberNotUnique, ready, or notConfigured, unknownFutureValue.
     * @return AuthenticationMethodSignInState|null
    */
    public function getSmsSignInState(): ?AuthenticationMethodSignInState {
        return $this->smsSignInState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
        $writer->writeEnumValue('phoneType', $this->phoneType);
        $writer->writeEnumValue('smsSignInState', $this->smsSignInState);
    }

    /**
     * Sets the phoneNumber property value. The phone number to text or call for authentication. Phone numbers use the format '+<country code> <number>x<extension>', with extension optional. For example, +1 5555551234 or +1 5555551234x123 are valid. Numbers are rejected when creating/updating if they do not match the required format.
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value ): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the phoneType property value. The type of this phone. Possible values are: mobile, alternateMobile, or office.
     *  @param AuthenticationPhoneType|null $value Value to set for the phoneType property.
    */
    public function setPhoneType(?AuthenticationPhoneType $value ): void {
        $this->phoneType = $value;
    }

    /**
     * Sets the smsSignInState property value. Whether a phone is ready to be used for SMS sign-in or not. Possible values are: notSupported, notAllowedByPolicy, notEnabled, phoneNumberNotUnique, ready, or notConfigured, unknownFutureValue.
     *  @param AuthenticationMethodSignInState|null $value Value to set for the smsSignInState property.
    */
    public function setSmsSignInState(?AuthenticationMethodSignInState $value ): void {
        $this->smsSignInState = $value;
    }

}
