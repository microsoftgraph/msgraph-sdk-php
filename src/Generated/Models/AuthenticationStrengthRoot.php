<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationStrengthRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationStrengthRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationStrengthRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationStrengthRoot {
        return new AuthenticationStrengthRoot();
    }

    /**
     * Gets the authenticationMethodModes property value. The authenticationMethodModes property
     * @return array<AuthenticationMethodModeDetail>|null
    */
    public function getAuthenticationMethodModes(): ?array {
        return $this->getBackingStore()->get('authenticationMethodModes');
    }

    /**
     * Gets the combinations property value. The combinations property
     * @return array<AuthenticationMethodModes>|null
    */
    public function getCombinations(): ?array {
        return $this->getBackingStore()->get('combinations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethodModes' => fn(ParseNode $n) => $o->setAuthenticationMethodModes($n->getCollectionOfObjectValues([AuthenticationMethodModeDetail::class, 'createFromDiscriminatorValue'])),
            'combinations' => fn(ParseNode $n) => $o->setCombinations($n->getCollectionOfEnumValues(AuthenticationMethodModes::class)),
            'policies' => fn(ParseNode $n) => $o->setPolicies($n->getCollectionOfObjectValues([AuthenticationStrengthPolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policies property value. The policies property
     * @return array<AuthenticationStrengthPolicy>|null
    */
    public function getPolicies(): ?array {
        return $this->getBackingStore()->get('policies');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('authenticationMethodModes', $this->getAuthenticationMethodModes());
        $writer->writeCollectionOfEnumValues('combinations', $this->getCombinations());
        $writer->writeCollectionOfObjectValues('policies', $this->getPolicies());
    }

    /**
     * Sets the authenticationMethodModes property value. The authenticationMethodModes property
     * @param array<AuthenticationMethodModeDetail>|null $value Value to set for the authenticationMethodModes property.
    */
    public function setAuthenticationMethodModes(?array $value): void {
        $this->getBackingStore()->set('authenticationMethodModes', $value);
    }

    /**
     * Sets the combinations property value. The combinations property
     * @param array<AuthenticationMethodModes>|null $value Value to set for the combinations property.
    */
    public function setCombinations(?array $value): void {
        $this->getBackingStore()->set('combinations', $value);
    }

    /**
     * Sets the policies property value. The policies property
     * @param array<AuthenticationStrengthPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value): void {
        $this->getBackingStore()->set('policies', $value);
    }

}
