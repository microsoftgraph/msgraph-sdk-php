<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityContainer extends Entity 
{
    /** @var array<IdentityApiConnector>|null $apiConnectors Represents entry point for API connectors. */
    private ?array $apiConnectors = null;
    
    /** @var array<B2xIdentityUserFlow>|null $b2xUserFlows Represents entry point for B2X/self-service sign-up identity userflows. */
    private ?array $b2xUserFlows = null;
    
    /** @var ConditionalAccessRoot|null $conditionalAccess the entry point for the Conditional Access (CA) object model. */
    private ?ConditionalAccessRoot $conditionalAccess = null;
    
    /** @var array<IdentityProviderBase>|null $identityProviders Represents entry point for identity provider base. */
    private ?array $identityProviders = null;
    
    /** @var array<IdentityUserFlowAttribute>|null $userFlowAttributes Represents entry point for identity userflow attributes. */
    private ?array $userFlowAttributes = null;
    
    /**
     * Instantiates a new identityContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityContainer
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IdentityContainer {
        return new IdentityContainer();
    }

    /**
     * Gets the apiConnectors property value. Represents entry point for API connectors.
     * @return array<IdentityApiConnector>|null
    */
    public function getApiConnectors(): ?array {
        return $this->apiConnectors;
    }

    /**
     * Gets the b2xUserFlows property value. Represents entry point for B2X/self-service sign-up identity userflows.
     * @return array<B2xIdentityUserFlow>|null
    */
    public function getB2xUserFlows(): ?array {
        return $this->b2xUserFlows;
    }

    /**
     * Gets the conditionalAccess property value. the entry point for the Conditional Access (CA) object model.
     * @return ConditionalAccessRoot|null
    */
    public function getConditionalAccess(): ?ConditionalAccessRoot {
        return $this->conditionalAccess;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'apiConnectors' => function (self $o, ParseNode $n) { $o->setApiConnectors($n->getCollectionOfObjectValues(IdentityApiConnector::class)); },
            'b2xUserFlows' => function (self $o, ParseNode $n) { $o->setB2xUserFlows($n->getCollectionOfObjectValues(B2xIdentityUserFlow::class)); },
            'conditionalAccess' => function (self $o, ParseNode $n) { $o->setConditionalAccess($n->getObjectValue(ConditionalAccessRoot::class)); },
            'identityProviders' => function (self $o, ParseNode $n) { $o->setIdentityProviders($n->getCollectionOfObjectValues(IdentityProviderBase::class)); },
            'userFlowAttributes' => function (self $o, ParseNode $n) { $o->setUserFlowAttributes($n->getCollectionOfObjectValues(IdentityUserFlowAttribute::class)); },
        ]);
    }

    /**
     * Gets the identityProviders property value. Represents entry point for identity provider base.
     * @return array<IdentityProviderBase>|null
    */
    public function getIdentityProviders(): ?array {
        return $this->identityProviders;
    }

    /**
     * Gets the userFlowAttributes property value. Represents entry point for identity userflow attributes.
     * @return array<IdentityUserFlowAttribute>|null
    */
    public function getUserFlowAttributes(): ?array {
        return $this->userFlowAttributes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('apiConnectors', $this->apiConnectors);
        $writer->writeCollectionOfObjectValues('b2xUserFlows', $this->b2xUserFlows);
        $writer->writeObjectValue('conditionalAccess', $this->conditionalAccess);
        $writer->writeCollectionOfObjectValues('identityProviders', $this->identityProviders);
        $writer->writeCollectionOfObjectValues('userFlowAttributes', $this->userFlowAttributes);
    }

    /**
     * Sets the apiConnectors property value. Represents entry point for API connectors.
     *  @param array<IdentityApiConnector>|null $value Value to set for the apiConnectors property.
    */
    public function setApiConnectors(?array $value ): void {
        $this->apiConnectors = $value;
    }

    /**
     * Sets the b2xUserFlows property value. Represents entry point for B2X/self-service sign-up identity userflows.
     *  @param array<B2xIdentityUserFlow>|null $value Value to set for the b2xUserFlows property.
    */
    public function setB2xUserFlows(?array $value ): void {
        $this->b2xUserFlows = $value;
    }

    /**
     * Sets the conditionalAccess property value. the entry point for the Conditional Access (CA) object model.
     *  @param ConditionalAccessRoot|null $value Value to set for the conditionalAccess property.
    */
    public function setConditionalAccess(?ConditionalAccessRoot $value ): void {
        $this->conditionalAccess = $value;
    }

    /**
     * Sets the identityProviders property value. Represents entry point for identity provider base.
     *  @param array<IdentityProviderBase>|null $value Value to set for the identityProviders property.
    */
    public function setIdentityProviders(?array $value ): void {
        $this->identityProviders = $value;
    }

    /**
     * Sets the userFlowAttributes property value. Represents entry point for identity userflow attributes.
     *  @param array<IdentityUserFlowAttribute>|null $value Value to set for the userFlowAttributes property.
    */
    public function setUserFlowAttributes(?array $value ): void {
        $this->userFlowAttributes = $value;
    }

}
