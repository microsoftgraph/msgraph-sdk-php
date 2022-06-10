<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Authentication extends Entity implements Parsable 
{
    /**
     * @var array<Fido2AuthenticationMethod>|null $fido2Methods Represents the FIDO2 security keys registered to a user for authentication.
    */
    private ?array $fido2Methods = null;
    
    /**
     * @var array<AuthenticationMethod>|null $methods Represents all authentication methods registered to a user.
    */
    private ?array $methods = null;
    
    /**
     * @var array<MicrosoftAuthenticatorAuthenticationMethod>|null $microsoftAuthenticatorMethods The details of the Microsoft Authenticator app registered to a user for authentication.
    */
    private ?array $microsoftAuthenticatorMethods = null;
    
    /**
     * @var array<TemporaryAccessPassAuthenticationMethod>|null $temporaryAccessPassMethods Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
    */
    private ?array $temporaryAccessPassMethods = null;
    
    /**
     * @var array<WindowsHelloForBusinessAuthenticationMethod>|null $windowsHelloForBusinessMethods Represents the Windows Hello for Business authentication method registered to a user for authentication.
    */
    private ?array $windowsHelloForBusinessMethods = null;
    
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
     * Gets the fido2Methods property value. Represents the FIDO2 security keys registered to a user for authentication.
     * @return array<Fido2AuthenticationMethod>|null
    */
    public function getFido2Methods(): ?array {
        return $this->fido2Methods;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fido2Methods' => function (ParseNode $n) use ($o) { $o->setFido2Methods($n->getCollectionOfObjectValues(array(Fido2AuthenticationMethod::class, 'createFromDiscriminatorValue'))); },
            'methods' => function (ParseNode $n) use ($o) { $o->setMethods($n->getCollectionOfObjectValues(array(AuthenticationMethod::class, 'createFromDiscriminatorValue'))); },
            'microsoftAuthenticatorMethods' => function (ParseNode $n) use ($o) { $o->setMicrosoftAuthenticatorMethods($n->getCollectionOfObjectValues(array(MicrosoftAuthenticatorAuthenticationMethod::class, 'createFromDiscriminatorValue'))); },
            'temporaryAccessPassMethods' => function (ParseNode $n) use ($o) { $o->setTemporaryAccessPassMethods($n->getCollectionOfObjectValues(array(TemporaryAccessPassAuthenticationMethod::class, 'createFromDiscriminatorValue'))); },
            'windowsHelloForBusinessMethods' => function (ParseNode $n) use ($o) { $o->setWindowsHelloForBusinessMethods($n->getCollectionOfObjectValues(array(WindowsHelloForBusinessAuthenticationMethod::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the methods property value. Represents all authentication methods registered to a user.
     * @return array<AuthenticationMethod>|null
    */
    public function getMethods(): ?array {
        return $this->methods;
    }

    /**
     * Gets the microsoftAuthenticatorMethods property value. The details of the Microsoft Authenticator app registered to a user for authentication.
     * @return array<MicrosoftAuthenticatorAuthenticationMethod>|null
    */
    public function getMicrosoftAuthenticatorMethods(): ?array {
        return $this->microsoftAuthenticatorMethods;
    }

    /**
     * Gets the temporaryAccessPassMethods property value. Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     * @return array<TemporaryAccessPassAuthenticationMethod>|null
    */
    public function getTemporaryAccessPassMethods(): ?array {
        return $this->temporaryAccessPassMethods;
    }

    /**
     * Gets the windowsHelloForBusinessMethods property value. Represents the Windows Hello for Business authentication method registered to a user for authentication.
     * @return array<WindowsHelloForBusinessAuthenticationMethod>|null
    */
    public function getWindowsHelloForBusinessMethods(): ?array {
        return $this->windowsHelloForBusinessMethods;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('fido2Methods', $this->fido2Methods);
        $writer->writeCollectionOfObjectValues('methods', $this->methods);
        $writer->writeCollectionOfObjectValues('microsoftAuthenticatorMethods', $this->microsoftAuthenticatorMethods);
        $writer->writeCollectionOfObjectValues('temporaryAccessPassMethods', $this->temporaryAccessPassMethods);
        $writer->writeCollectionOfObjectValues('windowsHelloForBusinessMethods', $this->windowsHelloForBusinessMethods);
    }

    /**
     * Sets the fido2Methods property value. Represents the FIDO2 security keys registered to a user for authentication.
     *  @param array<Fido2AuthenticationMethod>|null $value Value to set for the fido2Methods property.
    */
    public function setFido2Methods(?array $value ): void {
        $this->fido2Methods = $value;
    }

    /**
     * Sets the methods property value. Represents all authentication methods registered to a user.
     *  @param array<AuthenticationMethod>|null $value Value to set for the methods property.
    */
    public function setMethods(?array $value ): void {
        $this->methods = $value;
    }

    /**
     * Sets the microsoftAuthenticatorMethods property value. The details of the Microsoft Authenticator app registered to a user for authentication.
     *  @param array<MicrosoftAuthenticatorAuthenticationMethod>|null $value Value to set for the microsoftAuthenticatorMethods property.
    */
    public function setMicrosoftAuthenticatorMethods(?array $value ): void {
        $this->microsoftAuthenticatorMethods = $value;
    }

    /**
     * Sets the temporaryAccessPassMethods property value. Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     *  @param array<TemporaryAccessPassAuthenticationMethod>|null $value Value to set for the temporaryAccessPassMethods property.
    */
    public function setTemporaryAccessPassMethods(?array $value ): void {
        $this->temporaryAccessPassMethods = $value;
    }

    /**
     * Sets the windowsHelloForBusinessMethods property value. Represents the Windows Hello for Business authentication method registered to a user for authentication.
     *  @param array<WindowsHelloForBusinessAuthenticationMethod>|null $value Value to set for the windowsHelloForBusinessMethods property.
    */
    public function setWindowsHelloForBusinessMethods(?array $value ): void {
        $this->windowsHelloForBusinessMethods = $value;
    }

}
