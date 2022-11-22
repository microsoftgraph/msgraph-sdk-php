<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Authentication extends Entity implements Parsable 
{
    /**
     * Instantiates a new authentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Authentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Authentication {
        return new Authentication();
    }

    /**
     * Gets the emailMethods property value. The email address registered to a user for authentication.
     * @return array<EmailAuthenticationMethod>|null
    */
    public function getEmailMethods(): ?array {
        return $this->getBackingStore()->get('emailMethods');
    }

    /**
     * Gets the fido2Methods property value. Represents the FIDO2 security keys registered to a user for authentication.
     * @return array<Fido2AuthenticationMethod>|null
    */
    public function getFido2Methods(): ?array {
        return $this->getBackingStore()->get('fido2Methods');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailMethods' => fn(ParseNode $n) => $o->setEmailMethods($n->getCollectionOfObjectValues([EmailAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'fido2Methods' => fn(ParseNode $n) => $o->setFido2Methods($n->getCollectionOfObjectValues([Fido2AuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'methods' => fn(ParseNode $n) => $o->setMethods($n->getCollectionOfObjectValues([AuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'microsoftAuthenticatorMethods' => fn(ParseNode $n) => $o->setMicrosoftAuthenticatorMethods($n->getCollectionOfObjectValues([MicrosoftAuthenticatorAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([LongRunningOperation::class, 'createFromDiscriminatorValue'])),
            'passwordMethods' => fn(ParseNode $n) => $o->setPasswordMethods($n->getCollectionOfObjectValues([PasswordAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'phoneMethods' => fn(ParseNode $n) => $o->setPhoneMethods($n->getCollectionOfObjectValues([PhoneAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'softwareOathMethods' => fn(ParseNode $n) => $o->setSoftwareOathMethods($n->getCollectionOfObjectValues([SoftwareOathAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'temporaryAccessPassMethods' => fn(ParseNode $n) => $o->setTemporaryAccessPassMethods($n->getCollectionOfObjectValues([TemporaryAccessPassAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'windowsHelloForBusinessMethods' => fn(ParseNode $n) => $o->setWindowsHelloForBusinessMethods($n->getCollectionOfObjectValues([WindowsHelloForBusinessAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the methods property value. Represents all authentication methods registered to a user.
     * @return array<AuthenticationMethod>|null
    */
    public function getMethods(): ?array {
        return $this->getBackingStore()->get('methods');
    }

    /**
     * Gets the microsoftAuthenticatorMethods property value. The details of the Microsoft Authenticator app registered to a user for authentication.
     * @return array<MicrosoftAuthenticatorAuthenticationMethod>|null
    */
    public function getMicrosoftAuthenticatorMethods(): ?array {
        return $this->getBackingStore()->get('microsoftAuthenticatorMethods');
    }

    /**
     * Gets the operations property value. Represents the status of a long-running operation.
     * @return array<LongRunningOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Gets the passwordMethods property value. Represents the password that's registered to a user for authentication. For security, the password itself will never be returned in the object, but action can be taken to reset a password.
     * @return array<PasswordAuthenticationMethod>|null
    */
    public function getPasswordMethods(): ?array {
        return $this->getBackingStore()->get('passwordMethods');
    }

    /**
     * Gets the phoneMethods property value. The phone numbers registered to a user for authentication.
     * @return array<PhoneAuthenticationMethod>|null
    */
    public function getPhoneMethods(): ?array {
        return $this->getBackingStore()->get('phoneMethods');
    }

    /**
     * Gets the softwareOathMethods property value. The software OATH TOTP applications registered to a user for authentication.
     * @return array<SoftwareOathAuthenticationMethod>|null
    */
    public function getSoftwareOathMethods(): ?array {
        return $this->getBackingStore()->get('softwareOathMethods');
    }

    /**
     * Gets the temporaryAccessPassMethods property value. Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     * @return array<TemporaryAccessPassAuthenticationMethod>|null
    */
    public function getTemporaryAccessPassMethods(): ?array {
        return $this->getBackingStore()->get('temporaryAccessPassMethods');
    }

    /**
     * Gets the windowsHelloForBusinessMethods property value. Represents the Windows Hello for Business authentication method registered to a user for authentication.
     * @return array<WindowsHelloForBusinessAuthenticationMethod>|null
    */
    public function getWindowsHelloForBusinessMethods(): ?array {
        return $this->getBackingStore()->get('windowsHelloForBusinessMethods');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('emailMethods', $this->getEmailMethods());
        $writer->writeCollectionOfObjectValues('fido2Methods', $this->getFido2Methods());
        $writer->writeCollectionOfObjectValues('methods', $this->getMethods());
        $writer->writeCollectionOfObjectValues('microsoftAuthenticatorMethods', $this->getMicrosoftAuthenticatorMethods());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('passwordMethods', $this->getPasswordMethods());
        $writer->writeCollectionOfObjectValues('phoneMethods', $this->getPhoneMethods());
        $writer->writeCollectionOfObjectValues('softwareOathMethods', $this->getSoftwareOathMethods());
        $writer->writeCollectionOfObjectValues('temporaryAccessPassMethods', $this->getTemporaryAccessPassMethods());
        $writer->writeCollectionOfObjectValues('windowsHelloForBusinessMethods', $this->getWindowsHelloForBusinessMethods());
    }

    /**
     * Sets the emailMethods property value. The email address registered to a user for authentication.
     *  @param array<EmailAuthenticationMethod>|null $value Value to set for the emailMethods property.
    */
    public function setEmailMethods(?array $value): void {
        $this->getBackingStore()->set('emailMethods', $value);
    }

    /**
     * Sets the fido2Methods property value. Represents the FIDO2 security keys registered to a user for authentication.
     *  @param array<Fido2AuthenticationMethod>|null $value Value to set for the fido2Methods property.
    */
    public function setFido2Methods(?array $value): void {
        $this->getBackingStore()->set('fido2Methods', $value);
    }

    /**
     * Sets the methods property value. Represents all authentication methods registered to a user.
     *  @param array<AuthenticationMethod>|null $value Value to set for the methods property.
    */
    public function setMethods(?array $value): void {
        $this->getBackingStore()->set('methods', $value);
    }

    /**
     * Sets the microsoftAuthenticatorMethods property value. The details of the Microsoft Authenticator app registered to a user for authentication.
     *  @param array<MicrosoftAuthenticatorAuthenticationMethod>|null $value Value to set for the microsoftAuthenticatorMethods property.
    */
    public function setMicrosoftAuthenticatorMethods(?array $value): void {
        $this->getBackingStore()->set('microsoftAuthenticatorMethods', $value);
    }

    /**
     * Sets the operations property value. Represents the status of a long-running operation.
     *  @param array<LongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the passwordMethods property value. Represents the password that's registered to a user for authentication. For security, the password itself will never be returned in the object, but action can be taken to reset a password.
     *  @param array<PasswordAuthenticationMethod>|null $value Value to set for the passwordMethods property.
    */
    public function setPasswordMethods(?array $value): void {
        $this->getBackingStore()->set('passwordMethods', $value);
    }

    /**
     * Sets the phoneMethods property value. The phone numbers registered to a user for authentication.
     *  @param array<PhoneAuthenticationMethod>|null $value Value to set for the phoneMethods property.
    */
    public function setPhoneMethods(?array $value): void {
        $this->getBackingStore()->set('phoneMethods', $value);
    }

    /**
     * Sets the softwareOathMethods property value. The software OATH TOTP applications registered to a user for authentication.
     *  @param array<SoftwareOathAuthenticationMethod>|null $value Value to set for the softwareOathMethods property.
    */
    public function setSoftwareOathMethods(?array $value): void {
        $this->getBackingStore()->set('softwareOathMethods', $value);
    }

    /**
     * Sets the temporaryAccessPassMethods property value. Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     *  @param array<TemporaryAccessPassAuthenticationMethod>|null $value Value to set for the temporaryAccessPassMethods property.
    */
    public function setTemporaryAccessPassMethods(?array $value): void {
        $this->getBackingStore()->set('temporaryAccessPassMethods', $value);
    }

    /**
     * Sets the windowsHelloForBusinessMethods property value. Represents the Windows Hello for Business authentication method registered to a user for authentication.
     *  @param array<WindowsHelloForBusinessAuthenticationMethod>|null $value Value to set for the windowsHelloForBusinessMethods property.
    */
    public function setWindowsHelloForBusinessMethods(?array $value): void {
        $this->getBackingStore()->set('windowsHelloForBusinessMethods', $value);
    }

}
