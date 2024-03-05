<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityProviderBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityProviderBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityProviderBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityProviderBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.appleManagedIdentityProvider': return new AppleManagedIdentityProvider();
                case '#microsoft.graph.builtInIdentityProvider': return new BuiltInIdentityProvider();
                case '#microsoft.graph.internalDomainFederation': return new InternalDomainFederation();
                case '#microsoft.graph.samlOrWsFedExternalDomainFederation': return new SamlOrWsFedExternalDomainFederation();
                case '#microsoft.graph.samlOrWsFedProvider': return new SamlOrWsFedProvider();
                case '#microsoft.graph.socialIdentityProvider': return new SocialIdentityProvider();
            }
        }
        return new IdentityProviderBase();
    }

    /**
     * Gets the displayName property value. The display name of the identity provider.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the displayName property value. The display name of the identity provider.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

}
