<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Authentication extends Entity 
{
    /** @var array<Fido2AuthenticationMethod>|null $fido2Methods  */
    private ?array $fido2Methods = null;
    
    /** @var array<AuthenticationMethod>|null $methods  */
    private ?array $methods = null;
    
    /** @var array<MicrosoftAuthenticatorAuthenticationMethod>|null $microsoftAuthenticatorMethods  */
    private ?array $microsoftAuthenticatorMethods = null;
    
    /** @var array<WindowsHelloForBusinessAuthenticationMethod>|null $windowsHelloForBusinessMethods  */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): Authentication {
        return new Authentication();
    }

    /**
     * Gets the fido2Methods property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'fido2Methods' => function (self $o, ParseNode $n) { $o->setFido2Methods($n->getCollectionOfObjectValues(Fido2AuthenticationMethod::class)); },
            'methods' => function (self $o, ParseNode $n) { $o->setMethods($n->getCollectionOfObjectValues(AuthenticationMethod::class)); },
            'microsoftAuthenticatorMethods' => function (self $o, ParseNode $n) { $o->setMicrosoftAuthenticatorMethods($n->getCollectionOfObjectValues(MicrosoftAuthenticatorAuthenticationMethod::class)); },
            'windowsHelloForBusinessMethods' => function (self $o, ParseNode $n) { $o->setWindowsHelloForBusinessMethods($n->getCollectionOfObjectValues(WindowsHelloForBusinessAuthenticationMethod::class)); },
        ]);
    }

    /**
     * Gets the methods property value. 
     * @return array<AuthenticationMethod>|null
    */
    public function getMethods(): ?array {
        return $this->methods;
    }

    /**
     * Gets the microsoftAuthenticatorMethods property value. 
     * @return array<MicrosoftAuthenticatorAuthenticationMethod>|null
    */
    public function getMicrosoftAuthenticatorMethods(): ?array {
        return $this->microsoftAuthenticatorMethods;
    }

    /**
     * Gets the windowsHelloForBusinessMethods property value. 
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
        $writer->writeCollectionOfObjectValues('windowsHelloForBusinessMethods', $this->windowsHelloForBusinessMethods);
    }

    /**
     * Sets the fido2Methods property value. 
     *  @param array<Fido2AuthenticationMethod>|null $value Value to set for the fido2Methods property.
    */
    public function setFido2Methods(?array $value ): void {
        $this->fido2Methods = $value;
    }

    /**
     * Sets the methods property value. 
     *  @param array<AuthenticationMethod>|null $value Value to set for the methods property.
    */
    public function setMethods(?array $value ): void {
        $this->methods = $value;
    }

    /**
     * Sets the microsoftAuthenticatorMethods property value. 
     *  @param array<MicrosoftAuthenticatorAuthenticationMethod>|null $value Value to set for the microsoftAuthenticatorMethods property.
    */
    public function setMicrosoftAuthenticatorMethods(?array $value ): void {
        $this->microsoftAuthenticatorMethods = $value;
    }

    /**
     * Sets the windowsHelloForBusinessMethods property value. 
     *  @param array<WindowsHelloForBusinessAuthenticationMethod>|null $value Value to set for the windowsHelloForBusinessMethods property.
    */
    public function setWindowsHelloForBusinessMethods(?array $value ): void {
        $this->windowsHelloForBusinessMethods = $value;
    }

}
