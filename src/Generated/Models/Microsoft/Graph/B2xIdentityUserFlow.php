<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class B2xIdentityUserFlow extends IdentityUserFlow 
{
    /** @var UserFlowApiConnectorConfiguration|null $apiConnectorConfiguration Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration. */
    private ?UserFlowApiConnectorConfiguration $apiConnectorConfiguration = null;
    
    /** @var array<IdentityProvider>|null $identityProviders The identity providers included in the user flow. */
    private ?array $identityProviders = null;
    
    /** @var array<UserFlowLanguageConfiguration>|null $languages The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign-up user flow. You cannot create custom languages in self-service sign-up user flows. */
    private ?array $languages = null;
    
    /** @var array<IdentityUserFlowAttributeAssignment>|null $userAttributeAssignments The user attribute assignments included in the user flow. */
    private ?array $userAttributeAssignments = null;
    
    /** @var array<IdentityProviderBase>|null $userFlowIdentityProviders  */
    private ?array $userFlowIdentityProviders = null;
    
    /**
     * Instantiates a new b2xIdentityUserFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return B2xIdentityUserFlow
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): B2xIdentityUserFlow {
        return new B2xIdentityUserFlow();
    }

    /**
     * Gets the apiConnectorConfiguration property value. Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     * @return UserFlowApiConnectorConfiguration|null
    */
    public function getApiConnectorConfiguration(): ?UserFlowApiConnectorConfiguration {
        return $this->apiConnectorConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'apiConnectorConfiguration' => function (self $o, ParseNode $n) { $o->setApiConnectorConfiguration($n->getObjectValue(UserFlowApiConnectorConfiguration::class)); },
            'identityProviders' => function (self $o, ParseNode $n) { $o->setIdentityProviders($n->getCollectionOfObjectValues(IdentityProvider::class)); },
            'languages' => function (self $o, ParseNode $n) { $o->setLanguages($n->getCollectionOfObjectValues(UserFlowLanguageConfiguration::class)); },
            'userAttributeAssignments' => function (self $o, ParseNode $n) { $o->setUserAttributeAssignments($n->getCollectionOfObjectValues(IdentityUserFlowAttributeAssignment::class)); },
            'userFlowIdentityProviders' => function (self $o, ParseNode $n) { $o->setUserFlowIdentityProviders($n->getCollectionOfObjectValues(IdentityProviderBase::class)); },
        ]);
    }

    /**
     * Gets the identityProviders property value. The identity providers included in the user flow.
     * @return array<IdentityProvider>|null
    */
    public function getIdentityProviders(): ?array {
        return $this->identityProviders;
    }

    /**
     * Gets the languages property value. The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign-up user flow. You cannot create custom languages in self-service sign-up user flows.
     * @return array<UserFlowLanguageConfiguration>|null
    */
    public function getLanguages(): ?array {
        return $this->languages;
    }

    /**
     * Gets the userAttributeAssignments property value. The user attribute assignments included in the user flow.
     * @return array<IdentityUserFlowAttributeAssignment>|null
    */
    public function getUserAttributeAssignments(): ?array {
        return $this->userAttributeAssignments;
    }

    /**
     * Gets the userFlowIdentityProviders property value. 
     * @return array<IdentityProviderBase>|null
    */
    public function getUserFlowIdentityProviders(): ?array {
        return $this->userFlowIdentityProviders;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('apiConnectorConfiguration', $this->apiConnectorConfiguration);
        $writer->writeCollectionOfObjectValues('identityProviders', $this->identityProviders);
        $writer->writeCollectionOfObjectValues('languages', $this->languages);
        $writer->writeCollectionOfObjectValues('userAttributeAssignments', $this->userAttributeAssignments);
        $writer->writeCollectionOfObjectValues('userFlowIdentityProviders', $this->userFlowIdentityProviders);
    }

    /**
     * Sets the apiConnectorConfiguration property value. Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     *  @param UserFlowApiConnectorConfiguration|null $value Value to set for the apiConnectorConfiguration property.
    */
    public function setApiConnectorConfiguration(?UserFlowApiConnectorConfiguration $value ): void {
        $this->apiConnectorConfiguration = $value;
    }

    /**
     * Sets the identityProviders property value. The identity providers included in the user flow.
     *  @param array<IdentityProvider>|null $value Value to set for the identityProviders property.
    */
    public function setIdentityProviders(?array $value ): void {
        $this->identityProviders = $value;
    }

    /**
     * Sets the languages property value. The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign-up user flow. You cannot create custom languages in self-service sign-up user flows.
     *  @param array<UserFlowLanguageConfiguration>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value ): void {
        $this->languages = $value;
    }

    /**
     * Sets the userAttributeAssignments property value. The user attribute assignments included in the user flow.
     *  @param array<IdentityUserFlowAttributeAssignment>|null $value Value to set for the userAttributeAssignments property.
    */
    public function setUserAttributeAssignments(?array $value ): void {
        $this->userAttributeAssignments = $value;
    }

    /**
     * Sets the userFlowIdentityProviders property value. 
     *  @param array<IdentityProviderBase>|null $value Value to set for the userFlowIdentityProviders property.
    */
    public function setUserFlowIdentityProviders(?array $value ): void {
        $this->userFlowIdentityProviders = $value;
    }

}
