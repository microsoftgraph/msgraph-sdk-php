<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationEventListener extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationEventListener and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationEventListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationEventListener {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.onAttributeCollectionListener': return new OnAttributeCollectionListener();
                case '#microsoft.graph.onAttributeCollectionStartListener': return new OnAttributeCollectionStartListener();
                case '#microsoft.graph.onAttributeCollectionSubmitListener': return new OnAttributeCollectionSubmitListener();
                case '#microsoft.graph.onAuthenticationMethodLoadStartListener': return new OnAuthenticationMethodLoadStartListener();
                case '#microsoft.graph.onEmailOtpSendListener': return new OnEmailOtpSendListener();
                case '#microsoft.graph.onInteractiveAuthFlowStartListener': return new OnInteractiveAuthFlowStartListener();
                case '#microsoft.graph.onTokenIssuanceStartListener': return new OnTokenIssuanceStartListener();
                case '#microsoft.graph.onUserCreateStartListener': return new OnUserCreateStartListener();
            }
        }
        return new AuthenticationEventListener();
    }

    /**
     * Gets the authenticationEventsFlowId property value. The identifier of the authenticationEventsFlow object.
     * @return string|null
    */
    public function getAuthenticationEventsFlowId(): ?string {
        $val = $this->getBackingStore()->get('authenticationEventsFlowId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationEventsFlowId'");
    }

    /**
     * Gets the conditions property value. The conditions on which this authenticationEventListener should trigger.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationEventsFlowId' => fn(ParseNode $n) => $o->setAuthenticationEventsFlowId($n->getStringValue()),
            'conditions' => fn(ParseNode $n) => $o->setConditions($n->getObjectValue([AuthenticationConditions::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authenticationEventsFlowId', $this->getAuthenticationEventsFlowId());
        $writer->writeObjectValue('conditions', $this->getConditions());
    }

    /**
     * Sets the authenticationEventsFlowId property value. The identifier of the authenticationEventsFlow object.
     * @param string|null $value Value to set for the authenticationEventsFlowId property.
    */
    public function setAuthenticationEventsFlowId(?string $value): void {
        $this->getBackingStore()->set('authenticationEventsFlowId', $value);
    }

    /**
     * Sets the conditions property value. The conditions on which this authenticationEventListener should trigger.
     * @param AuthenticationConditions|null $value Value to set for the conditions property.
    */
    public function setConditions(?AuthenticationConditions $value): void {
        $this->getBackingStore()->set('conditions', $value);
    }

}
