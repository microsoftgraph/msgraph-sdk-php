<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityApiConnector extends Entity implements Parsable 
{
    /**
     * @var ApiAuthenticationConfigurationBase|null $authenticationConfiguration The object which describes the authentication configuration details for calling the API. Basic and PKCS 12 client certificate are supported.
    */
    private ?ApiAuthenticationConfigurationBase $authenticationConfiguration = null;
    
    /**
     * @var string|null $displayName The name of the API connector.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $targetUrl The URL of the API endpoint to call.
    */
    private ?string $targetUrl = null;
    
    /**
     * Instantiates a new IdentityApiConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityApiConnector');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityApiConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityApiConnector {
        return new IdentityApiConnector();
    }

    /**
     * Gets the authenticationConfiguration property value. The object which describes the authentication configuration details for calling the API. Basic and PKCS 12 client certificate are supported.
     * @return ApiAuthenticationConfigurationBase|null
    */
    public function getAuthenticationConfiguration(): ?ApiAuthenticationConfigurationBase {
        return $this->authenticationConfiguration;
    }

    /**
     * Gets the displayName property value. The name of the API connector.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationConfiguration' => fn(ParseNode $n) => $o->setAuthenticationConfiguration($n->getObjectValue([ApiAuthenticationConfigurationBase::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'targetUrl' => fn(ParseNode $n) => $o->setTargetUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the targetUrl property value. The URL of the API endpoint to call.
     * @return string|null
    */
    public function getTargetUrl(): ?string {
        return $this->targetUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('authenticationConfiguration', $this->authenticationConfiguration);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('targetUrl', $this->targetUrl);
    }

    /**
     * Sets the authenticationConfiguration property value. The object which describes the authentication configuration details for calling the API. Basic and PKCS 12 client certificate are supported.
     *  @param ApiAuthenticationConfigurationBase|null $value Value to set for the authenticationConfiguration property.
    */
    public function setAuthenticationConfiguration(?ApiAuthenticationConfigurationBase $value ): void {
        $this->authenticationConfiguration = $value;
    }

    /**
     * Sets the displayName property value. The name of the API connector.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the targetUrl property value. The URL of the API endpoint to call.
     *  @param string|null $value Value to set for the targetUrl property.
    */
    public function setTargetUrl(?string $value ): void {
        $this->targetUrl = $value;
    }

}
