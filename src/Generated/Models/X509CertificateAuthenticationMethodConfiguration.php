<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class X509CertificateAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * @var X509CertificateAuthenticationModeConfiguration|null $authenticationModeConfiguration Defines strong authentication configurations. This configuration includes the default authentication mode and the different rules for strong authentication bindings.
    */
    private ?X509CertificateAuthenticationModeConfiguration $authenticationModeConfiguration = null;
    
    /**
     * @var array<X509CertificateUserBinding>|null $certificateUserBindings Defines fields in the X.509 certificate that map to attributes of the Azure AD user object in order to bind the certificate to the user. The priority of the object determines the order in which the binding is carried out. The first binding that matches will be used and the rest ignored.
    */
    private ?array $certificateUserBindings = null;
    
    /**
     * @var array<AuthenticationMethodTarget>|null $includeTargets A collection of users or groups who are enabled to use the authentication method.
    */
    private ?array $includeTargets = null;
    
    /**
     * Instantiates a new X509CertificateAuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.x509CertificateAuthenticationMethodConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return X509CertificateAuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): X509CertificateAuthenticationMethodConfiguration {
        return new X509CertificateAuthenticationMethodConfiguration();
    }

    /**
     * Gets the authenticationModeConfiguration property value. Defines strong authentication configurations. This configuration includes the default authentication mode and the different rules for strong authentication bindings.
     * @return X509CertificateAuthenticationModeConfiguration|null
    */
    public function getAuthenticationModeConfiguration(): ?X509CertificateAuthenticationModeConfiguration {
        return $this->authenticationModeConfiguration;
    }

    /**
     * Gets the certificateUserBindings property value. Defines fields in the X.509 certificate that map to attributes of the Azure AD user object in order to bind the certificate to the user. The priority of the object determines the order in which the binding is carried out. The first binding that matches will be used and the rest ignored.
     * @return array<X509CertificateUserBinding>|null
    */
    public function getCertificateUserBindings(): ?array {
        return $this->certificateUserBindings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationModeConfiguration' => fn(ParseNode $n) => $o->setAuthenticationModeConfiguration($n->getObjectValue([X509CertificateAuthenticationModeConfiguration::class, 'createFromDiscriminatorValue'])),
            'certificateUserBindings' => fn(ParseNode $n) => $o->setCertificateUserBindings($n->getCollectionOfObjectValues([X509CertificateUserBinding::class, 'createFromDiscriminatorValue'])),
            'includeTargets' => fn(ParseNode $n) => $o->setIncludeTargets($n->getCollectionOfObjectValues([AuthenticationMethodTarget::class, 'createFromDiscriminatorValue'])),
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
        $writer->writeObjectValue('authenticationModeConfiguration', $this->authenticationModeConfiguration);
        $writer->writeCollectionOfObjectValues('certificateUserBindings', $this->certificateUserBindings);
        $writer->writeCollectionOfObjectValues('includeTargets', $this->includeTargets);
    }

    /**
     * Sets the authenticationModeConfiguration property value. Defines strong authentication configurations. This configuration includes the default authentication mode and the different rules for strong authentication bindings.
     *  @param X509CertificateAuthenticationModeConfiguration|null $value Value to set for the authenticationModeConfiguration property.
    */
    public function setAuthenticationModeConfiguration(?X509CertificateAuthenticationModeConfiguration $value ): void {
        $this->authenticationModeConfiguration = $value;
    }

    /**
     * Sets the certificateUserBindings property value. Defines fields in the X.509 certificate that map to attributes of the Azure AD user object in order to bind the certificate to the user. The priority of the object determines the order in which the binding is carried out. The first binding that matches will be used and the rest ignored.
     *  @param array<X509CertificateUserBinding>|null $value Value to set for the certificateUserBindings property.
    */
    public function setCertificateUserBindings(?array $value ): void {
        $this->certificateUserBindings = $value;
    }

    /**
     * Sets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method.
     *  @param array<AuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value ): void {
        $this->includeTargets = $value;
    }

}
