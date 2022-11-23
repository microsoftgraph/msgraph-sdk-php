<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class B2xIdentityUserFlow extends IdentityUserFlow implements Parsable 
{
    /**
     * Instantiates a new B2xIdentityUserFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return B2xIdentityUserFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): B2xIdentityUserFlow {
        return new B2xIdentityUserFlow();
    }

    /**
     * Gets the apiConnectorConfiguration property value. Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     * @return UserFlowApiConnectorConfiguration|null
    */
    public function getApiConnectorConfiguration(): ?UserFlowApiConnectorConfiguration {
        return $this->getBackingStore()->get('apiConnectorConfiguration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiConnectorConfiguration' => fn(ParseNode $n) => $o->setApiConnectorConfiguration($n->getObjectValue([UserFlowApiConnectorConfiguration::class, 'createFromDiscriminatorValue'])),
            'identityProviders' => fn(ParseNode $n) => $o->setIdentityProviders($n->getCollectionOfObjectValues([IdentityProvider::class, 'createFromDiscriminatorValue'])),
            'languages' => fn(ParseNode $n) => $o->setLanguages($n->getCollectionOfObjectValues([UserFlowLanguageConfiguration::class, 'createFromDiscriminatorValue'])),
            'userAttributeAssignments' => fn(ParseNode $n) => $o->setUserAttributeAssignments($n->getCollectionOfObjectValues([IdentityUserFlowAttributeAssignment::class, 'createFromDiscriminatorValue'])),
            'userFlowIdentityProviders' => fn(ParseNode $n) => $o->setUserFlowIdentityProviders($n->getCollectionOfObjectValues([IdentityProviderBase::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identityProviders property value. The identity providers included in the user flow.
     * @return array<IdentityProvider>|null
    */
    public function getIdentityProviders(): ?array {
        return $this->getBackingStore()->get('identityProviders');
    }

    /**
     * Gets the languages property value. The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign-up user flow. You cannot create custom languages in self-service sign-up user flows.
     * @return array<UserFlowLanguageConfiguration>|null
    */
    public function getLanguages(): ?array {
        return $this->getBackingStore()->get('languages');
    }

    /**
     * Gets the userAttributeAssignments property value. The user attribute assignments included in the user flow.
     * @return array<IdentityUserFlowAttributeAssignment>|null
    */
    public function getUserAttributeAssignments(): ?array {
        return $this->getBackingStore()->get('userAttributeAssignments');
    }

    /**
     * Gets the userFlowIdentityProviders property value. The userFlowIdentityProviders property
     * @return array<IdentityProviderBase>|null
    */
    public function getUserFlowIdentityProviders(): ?array {
        return $this->getBackingStore()->get('userFlowIdentityProviders');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('apiConnectorConfiguration', $this->getApiConnectorConfiguration());
        $writer->writeCollectionOfObjectValues('identityProviders', $this->getIdentityProviders());
        $writer->writeCollectionOfObjectValues('languages', $this->getLanguages());
        $writer->writeCollectionOfObjectValues('userAttributeAssignments', $this->getUserAttributeAssignments());
        $writer->writeCollectionOfObjectValues('userFlowIdentityProviders', $this->getUserFlowIdentityProviders());
    }

    /**
     * Sets the apiConnectorConfiguration property value. Configuration for enabling an API connector for use as part of the self-service sign-up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     *  @param UserFlowApiConnectorConfiguration|null $value Value to set for the apiConnectorConfiguration property.
    */
    public function setApiConnectorConfiguration(?UserFlowApiConnectorConfiguration $value): void {
        $this->getBackingStore()->set('apiConnectorConfiguration', $value);
    }

    /**
     * Sets the identityProviders property value. The identity providers included in the user flow.
     *  @param array<IdentityProvider>|null $value Value to set for the identityProviders property.
    */
    public function setIdentityProviders(?array $value): void {
        $this->getBackingStore()->set('identityProviders', $value);
    }

    /**
     * Sets the languages property value. The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign-up user flow. You cannot create custom languages in self-service sign-up user flows.
     *  @param array<UserFlowLanguageConfiguration>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value): void {
        $this->getBackingStore()->set('languages', $value);
    }

    /**
     * Sets the userAttributeAssignments property value. The user attribute assignments included in the user flow.
     *  @param array<IdentityUserFlowAttributeAssignment>|null $value Value to set for the userAttributeAssignments property.
    */
    public function setUserAttributeAssignments(?array $value): void {
        $this->getBackingStore()->set('userAttributeAssignments', $value);
    }

    /**
     * Sets the userFlowIdentityProviders property value. The userFlowIdentityProviders property
     *  @param array<IdentityProviderBase>|null $value Value to set for the userFlowIdentityProviders property.
    */
    public function setUserFlowIdentityProviders(?array $value): void {
        $this->getBackingStore()->set('userFlowIdentityProviders', $value);
    }

}
