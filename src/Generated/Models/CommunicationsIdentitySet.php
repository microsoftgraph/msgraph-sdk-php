<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CommunicationsIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * Instantiates a new communicationsIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.communicationsIdentitySet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CommunicationsIdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CommunicationsIdentitySet {
        return new CommunicationsIdentitySet();
    }

    /**
     * Gets the applicationInstance property value. The application instance associated with this action.
     * @return Identity|null
    */
    public function getApplicationInstance(): ?Identity {
        $val = $this->getBackingStore()->get('applicationInstance');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationInstance'");
    }

    /**
     * Gets the assertedIdentity property value. An identity the participant would like to present itself as to the other participants in the call.
     * @return Identity|null
    */
    public function getAssertedIdentity(): ?Identity {
        $val = $this->getBackingStore()->get('assertedIdentity');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assertedIdentity'");
    }

    /**
     * Gets the azureCommunicationServicesUser property value. The Azure Communication Services user associated with this action.
     * @return Identity|null
    */
    public function getAzureCommunicationServicesUser(): ?Identity {
        $val = $this->getBackingStore()->get('azureCommunicationServicesUser');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureCommunicationServicesUser'");
    }

    /**
     * Gets the encrypted property value. The encrypted user associated with this action.
     * @return Identity|null
    */
    public function getEncrypted(): ?Identity {
        $val = $this->getBackingStore()->get('encrypted');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encrypted'");
    }

    /**
     * Gets the endpointType property value. Type of endpoint that the participant uses. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone, unknownFutureValue.
     * @return CommunicationsIdentitySet_endpointType|null
    */
    public function getEndpointType(): ?CommunicationsIdentitySet_endpointType {
        $val = $this->getBackingStore()->get('endpointType');
        if (is_null($val) || $val instanceof CommunicationsIdentitySet_endpointType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpointType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationInstance' => fn(ParseNode $n) => $o->setApplicationInstance($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'assertedIdentity' => fn(ParseNode $n) => $o->setAssertedIdentity($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'azureCommunicationServicesUser' => fn(ParseNode $n) => $o->setAzureCommunicationServicesUser($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'encrypted' => fn(ParseNode $n) => $o->setEncrypted($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'endpointType' => fn(ParseNode $n) => $o->setEndpointType($n->getEnumValue(CommunicationsIdentitySet_endpointType::class)),
            'guest' => fn(ParseNode $n) => $o->setGuest($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'onPremises' => fn(ParseNode $n) => $o->setOnPremises($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the guest property value. The guest user associated with this action.
     * @return Identity|null
    */
    public function getGuest(): ?Identity {
        $val = $this->getBackingStore()->get('guest');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'guest'");
    }

    /**
     * Gets the onPremises property value. The Skype for Business on-premises user associated with this action.
     * @return Identity|null
    */
    public function getOnPremises(): ?Identity {
        $val = $this->getBackingStore()->get('onPremises');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremises'");
    }

    /**
     * Gets the phone property value. The phone user associated with this action.
     * @return Identity|null
    */
    public function getPhone(): ?Identity {
        $val = $this->getBackingStore()->get('phone');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phone'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicationInstance', $this->getApplicationInstance());
        $writer->writeObjectValue('assertedIdentity', $this->getAssertedIdentity());
        $writer->writeObjectValue('azureCommunicationServicesUser', $this->getAzureCommunicationServicesUser());
        $writer->writeObjectValue('encrypted', $this->getEncrypted());
        $writer->writeEnumValue('endpointType', $this->getEndpointType());
        $writer->writeObjectValue('guest', $this->getGuest());
        $writer->writeObjectValue('onPremises', $this->getOnPremises());
        $writer->writeObjectValue('phone', $this->getPhone());
    }

    /**
     * Sets the applicationInstance property value. The application instance associated with this action.
     * @param Identity|null $value Value to set for the applicationInstance property.
    */
    public function setApplicationInstance(?Identity $value): void {
        $this->getBackingStore()->set('applicationInstance', $value);
    }

    /**
     * Sets the assertedIdentity property value. An identity the participant would like to present itself as to the other participants in the call.
     * @param Identity|null $value Value to set for the assertedIdentity property.
    */
    public function setAssertedIdentity(?Identity $value): void {
        $this->getBackingStore()->set('assertedIdentity', $value);
    }

    /**
     * Sets the azureCommunicationServicesUser property value. The Azure Communication Services user associated with this action.
     * @param Identity|null $value Value to set for the azureCommunicationServicesUser property.
    */
    public function setAzureCommunicationServicesUser(?Identity $value): void {
        $this->getBackingStore()->set('azureCommunicationServicesUser', $value);
    }

    /**
     * Sets the encrypted property value. The encrypted user associated with this action.
     * @param Identity|null $value Value to set for the encrypted property.
    */
    public function setEncrypted(?Identity $value): void {
        $this->getBackingStore()->set('encrypted', $value);
    }

    /**
     * Sets the endpointType property value. Type of endpoint that the participant uses. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone, unknownFutureValue.
     * @param CommunicationsIdentitySet_endpointType|null $value Value to set for the endpointType property.
    */
    public function setEndpointType(?CommunicationsIdentitySet_endpointType $value): void {
        $this->getBackingStore()->set('endpointType', $value);
    }

    /**
     * Sets the guest property value. The guest user associated with this action.
     * @param Identity|null $value Value to set for the guest property.
    */
    public function setGuest(?Identity $value): void {
        $this->getBackingStore()->set('guest', $value);
    }

    /**
     * Sets the onPremises property value. The Skype for Business on-premises user associated with this action.
     * @param Identity|null $value Value to set for the onPremises property.
    */
    public function setOnPremises(?Identity $value): void {
        $this->getBackingStore()->set('onPremises', $value);
    }

    /**
     * Sets the phone property value. The phone user associated with this action.
     * @param Identity|null $value Value to set for the phone property.
    */
    public function setPhone(?Identity $value): void {
        $this->getBackingStore()->set('phone', $value);
    }

}
