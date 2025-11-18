<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureCommunicationServicesUserIdentity extends Identity implements Parsable 
{
    /**
     * Instantiates a new AzureCommunicationServicesUserIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.azureCommunicationServicesUserIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureCommunicationServicesUserIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureCommunicationServicesUserIdentity {
        return new AzureCommunicationServicesUserIdentity();
    }

    /**
     * Gets the azureCommunicationServicesResourceId property value. The Azure Communication Services resource ID associated with the user.
     * @return string|null
    */
    public function getAzureCommunicationServicesResourceId(): ?string {
        $val = $this->getBackingStore()->get('azureCommunicationServicesResourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureCommunicationServicesResourceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureCommunicationServicesResourceId' => fn(ParseNode $n) => $o->setAzureCommunicationServicesResourceId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureCommunicationServicesResourceId', $this->getAzureCommunicationServicesResourceId());
    }

    /**
     * Sets the azureCommunicationServicesResourceId property value. The Azure Communication Services resource ID associated with the user.
     * @param string|null $value Value to set for the azureCommunicationServicesResourceId property.
    */
    public function setAzureCommunicationServicesResourceId(?string $value): void {
        $this->getBackingStore()->set('azureCommunicationServicesResourceId', $value);
    }

}
