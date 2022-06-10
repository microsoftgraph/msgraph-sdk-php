<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserFlowApiConnectorConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var IdentityApiConnector|null $postAttributeCollection The postAttributeCollection property
    */
    private ?IdentityApiConnector $postAttributeCollection = null;
    
    /**
     * @var IdentityApiConnector|null $postFederationSignup The postFederationSignup property
    */
    private ?IdentityApiConnector $postFederationSignup = null;
    
    /**
     * Instantiates a new userFlowApiConnectorConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserFlowApiConnectorConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserFlowApiConnectorConfiguration {
        return new UserFlowApiConnectorConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'postAttributeCollection' => function (ParseNode $n) use ($o) { $o->setPostAttributeCollection($n->getObjectValue(array(IdentityApiConnector::class, 'createFromDiscriminatorValue'))); },
            'postFederationSignup' => function (ParseNode $n) use ($o) { $o->setPostFederationSignup($n->getObjectValue(array(IdentityApiConnector::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the postAttributeCollection property value. The postAttributeCollection property
     * @return IdentityApiConnector|null
    */
    public function getPostAttributeCollection(): ?IdentityApiConnector {
        return $this->postAttributeCollection;
    }

    /**
     * Gets the postFederationSignup property value. The postFederationSignup property
     * @return IdentityApiConnector|null
    */
    public function getPostFederationSignup(): ?IdentityApiConnector {
        return $this->postFederationSignup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('postAttributeCollection', $this->postAttributeCollection);
        $writer->writeObjectValue('postFederationSignup', $this->postFederationSignup);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the postAttributeCollection property value. The postAttributeCollection property
     *  @param IdentityApiConnector|null $value Value to set for the postAttributeCollection property.
    */
    public function setPostAttributeCollection(?IdentityApiConnector $value ): void {
        $this->postAttributeCollection = $value;
    }

    /**
     * Sets the postFederationSignup property value. The postFederationSignup property
     *  @param IdentityApiConnector|null $value Value to set for the postFederationSignup property.
    */
    public function setPostFederationSignup(?IdentityApiConnector $value ): void {
        $this->postFederationSignup = $value;
    }

}
