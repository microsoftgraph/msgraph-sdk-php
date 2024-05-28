<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationEventsFlow extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationEventsFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationEventsFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationEventsFlow {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.externalUsersSelfServiceSignUpEventsFlow': return new ExternalUsersSelfServiceSignUpEventsFlow();
            }
        }
        return new AuthenticationEventsFlow();
    }

    /**
     * Gets the conditions property value. The conditions representing the context of the authentication request that's used to decide whether the events policy is invoked.
     * @return AuthenticationConditions|null
    */
    public function getConditions(): ?AuthenticationConditions {
        $val = $this->getBackingStore()->get('conditions');
        if (is_null($val) || $val instanceof AuthenticationConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditions'");
    }

    /**
     * Gets the description property value. The description of the events policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Required. The display name for the events policy.
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
            'conditions' => fn(ParseNode $n) => $o->setConditions($n->getObjectValue([AuthenticationConditions::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('conditions', $this->getConditions());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the conditions property value. The conditions representing the context of the authentication request that's used to decide whether the events policy is invoked.
     * @param AuthenticationConditions|null $value Value to set for the conditions property.
    */
    public function setConditions(?AuthenticationConditions $value): void {
        $this->getBackingStore()->set('conditions', $value);
    }

    /**
     * Sets the description property value. The description of the events policy.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Required. The display name for the events policy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

}
