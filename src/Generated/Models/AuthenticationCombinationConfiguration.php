<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationCombinationConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new authenticationCombinationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationCombinationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationCombinationConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.fido2CombinationConfiguration': return new Fido2CombinationConfiguration();
            }
        }
        return new AuthenticationCombinationConfiguration();
    }

    /**
     * Gets the appliesToCombinations property value. The appliesToCombinations property
     * @return array<AuthenticationMethodModes>|null
    */
    public function getAppliesToCombinations(): ?array {
        return $this->getBackingStore()->get('appliesToCombinations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliesToCombinations' => fn(ParseNode $n) => $o->setAppliesToCombinations($n->getCollectionOfEnumValues(AuthenticationMethodModes::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('appliesToCombinations', $this->getAppliesToCombinations());
    }

    /**
     * Sets the appliesToCombinations property value. The appliesToCombinations property
     * @param array<AuthenticationMethodModes>|null $value Value to set for the appliesToCombinations property.
    */
    public function setAppliesToCombinations(?array $value): void {
        $this->getBackingStore()->set('appliesToCombinations', $value);
    }

}
