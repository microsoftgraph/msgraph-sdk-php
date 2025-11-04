<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalUsersSelfServiceSignUpEventsFlow extends AuthenticationEventsFlow implements Parsable 
{
    /**
     * Instantiates a new ExternalUsersSelfServiceSignUpEventsFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalUsersSelfServiceSignUpEventsFlow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalUsersSelfServiceSignUpEventsFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalUsersSelfServiceSignUpEventsFlow {
        return new ExternalUsersSelfServiceSignUpEventsFlow();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'onAttributeCollection' => fn(ParseNode $n) => $o->setOnAttributeCollection($n->getObjectValue([OnAttributeCollectionHandler::class, 'createFromDiscriminatorValue'])),
            'onAttributeCollectionStart' => fn(ParseNode $n) => $o->setOnAttributeCollectionStart($n->getObjectValue([OnAttributeCollectionStartHandler::class, 'createFromDiscriminatorValue'])),
            'onAttributeCollectionSubmit' => fn(ParseNode $n) => $o->setOnAttributeCollectionSubmit($n->getObjectValue([OnAttributeCollectionSubmitHandler::class, 'createFromDiscriminatorValue'])),
            'onAuthenticationMethodLoadStart' => fn(ParseNode $n) => $o->setOnAuthenticationMethodLoadStart($n->getObjectValue([OnAuthenticationMethodLoadStartHandler::class, 'createFromDiscriminatorValue'])),
            'onInteractiveAuthFlowStart' => fn(ParseNode $n) => $o->setOnInteractiveAuthFlowStart($n->getObjectValue([OnInteractiveAuthFlowStartHandler::class, 'createFromDiscriminatorValue'])),
            'onUserCreateStart' => fn(ParseNode $n) => $o->setOnUserCreateStart($n->getObjectValue([OnUserCreateStartHandler::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the onAttributeCollection property value. The configuration for what to invoke when attributes are ready to be collected from the user.
     * @return OnAttributeCollectionHandler|null
    */
    public function getOnAttributeCollection(): ?OnAttributeCollectionHandler {
        $val = $this->getBackingStore()->get('onAttributeCollection');
        if (is_null($val) || $val instanceof OnAttributeCollectionHandler) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onAttributeCollection'");
    }

    /**
     * Gets the onAttributeCollectionStart property value. The configuration for what to invoke when attribution collection starts.
     * @return OnAttributeCollectionStartHandler|null
    */
    public function getOnAttributeCollectionStart(): ?OnAttributeCollectionStartHandler {
        $val = $this->getBackingStore()->get('onAttributeCollectionStart');
        if (is_null($val) || $val instanceof OnAttributeCollectionStartHandler) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onAttributeCollectionStart'");
    }

    /**
     * Gets the onAttributeCollectionSubmit property value. The configuration for what to invoke when attributes are submitted at the end of attribution collection.
     * @return OnAttributeCollectionSubmitHandler|null
    */
    public function getOnAttributeCollectionSubmit(): ?OnAttributeCollectionSubmitHandler {
        $val = $this->getBackingStore()->get('onAttributeCollectionSubmit');
        if (is_null($val) || $val instanceof OnAttributeCollectionSubmitHandler) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onAttributeCollectionSubmit'");
    }

    /**
     * Gets the onAuthenticationMethodLoadStart property value. Required. The configuration for what to invoke when authentication methods are ready to be presented to the user. Must have at least one identity provider linked.  Supports $filter (eq). See support for filtering on user flows for syntax information.
     * @return OnAuthenticationMethodLoadStartHandler|null
    */
    public function getOnAuthenticationMethodLoadStart(): ?OnAuthenticationMethodLoadStartHandler {
        $val = $this->getBackingStore()->get('onAuthenticationMethodLoadStart');
        if (is_null($val) || $val instanceof OnAuthenticationMethodLoadStartHandler) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onAuthenticationMethodLoadStart'");
    }

    /**
     * Gets the onInteractiveAuthFlowStart property value. Required. The configuration for what to invoke when an authentication flow is ready to be initiated.
     * @return OnInteractiveAuthFlowStartHandler|null
    */
    public function getOnInteractiveAuthFlowStart(): ?OnInteractiveAuthFlowStartHandler {
        $val = $this->getBackingStore()->get('onInteractiveAuthFlowStart');
        if (is_null($val) || $val instanceof OnInteractiveAuthFlowStartHandler) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onInteractiveAuthFlowStart'");
    }

    /**
     * Gets the onUserCreateStart property value. The configuration for what to invoke during user creation.
     * @return OnUserCreateStartHandler|null
    */
    public function getOnUserCreateStart(): ?OnUserCreateStartHandler {
        $val = $this->getBackingStore()->get('onUserCreateStart');
        if (is_null($val) || $val instanceof OnUserCreateStartHandler) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onUserCreateStart'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('onAttributeCollection', $this->getOnAttributeCollection());
        $writer->writeObjectValue('onAttributeCollectionStart', $this->getOnAttributeCollectionStart());
        $writer->writeObjectValue('onAttributeCollectionSubmit', $this->getOnAttributeCollectionSubmit());
        $writer->writeObjectValue('onAuthenticationMethodLoadStart', $this->getOnAuthenticationMethodLoadStart());
        $writer->writeObjectValue('onInteractiveAuthFlowStart', $this->getOnInteractiveAuthFlowStart());
        $writer->writeObjectValue('onUserCreateStart', $this->getOnUserCreateStart());
    }

    /**
     * Sets the onAttributeCollection property value. The configuration for what to invoke when attributes are ready to be collected from the user.
     * @param OnAttributeCollectionHandler|null $value Value to set for the onAttributeCollection property.
    */
    public function setOnAttributeCollection(?OnAttributeCollectionHandler $value): void {
        $this->getBackingStore()->set('onAttributeCollection', $value);
    }

    /**
     * Sets the onAttributeCollectionStart property value. The configuration for what to invoke when attribution collection starts.
     * @param OnAttributeCollectionStartHandler|null $value Value to set for the onAttributeCollectionStart property.
    */
    public function setOnAttributeCollectionStart(?OnAttributeCollectionStartHandler $value): void {
        $this->getBackingStore()->set('onAttributeCollectionStart', $value);
    }

    /**
     * Sets the onAttributeCollectionSubmit property value. The configuration for what to invoke when attributes are submitted at the end of attribution collection.
     * @param OnAttributeCollectionSubmitHandler|null $value Value to set for the onAttributeCollectionSubmit property.
    */
    public function setOnAttributeCollectionSubmit(?OnAttributeCollectionSubmitHandler $value): void {
        $this->getBackingStore()->set('onAttributeCollectionSubmit', $value);
    }

    /**
     * Sets the onAuthenticationMethodLoadStart property value. Required. The configuration for what to invoke when authentication methods are ready to be presented to the user. Must have at least one identity provider linked.  Supports $filter (eq). See support for filtering on user flows for syntax information.
     * @param OnAuthenticationMethodLoadStartHandler|null $value Value to set for the onAuthenticationMethodLoadStart property.
    */
    public function setOnAuthenticationMethodLoadStart(?OnAuthenticationMethodLoadStartHandler $value): void {
        $this->getBackingStore()->set('onAuthenticationMethodLoadStart', $value);
    }

    /**
     * Sets the onInteractiveAuthFlowStart property value. Required. The configuration for what to invoke when an authentication flow is ready to be initiated.
     * @param OnInteractiveAuthFlowStartHandler|null $value Value to set for the onInteractiveAuthFlowStart property.
    */
    public function setOnInteractiveAuthFlowStart(?OnInteractiveAuthFlowStartHandler $value): void {
        $this->getBackingStore()->set('onInteractiveAuthFlowStart', $value);
    }

    /**
     * Sets the onUserCreateStart property value. The configuration for what to invoke during user creation.
     * @param OnUserCreateStartHandler|null $value Value to set for the onUserCreateStart property.
    */
    public function setOnUserCreateStart(?OnUserCreateStartHandler $value): void {
        $this->getBackingStore()->set('onUserCreateStart', $value);
    }

}
