<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureCommunicationServicesUserConversationMember extends ConversationMember implements Parsable 
{
    /**
     * Instantiates a new AzureCommunicationServicesUserConversationMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.azureCommunicationServicesUserConversationMember');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureCommunicationServicesUserConversationMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureCommunicationServicesUserConversationMember {
        return new AzureCommunicationServicesUserConversationMember();
    }

    /**
     * Gets the azureCommunicationServicesId property value. Azure Communication Services ID of the user.
     * @return string|null
    */
    public function getAzureCommunicationServicesId(): ?string {
        $val = $this->getBackingStore()->get('azureCommunicationServicesId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureCommunicationServicesId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureCommunicationServicesId' => fn(ParseNode $n) => $o->setAzureCommunicationServicesId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureCommunicationServicesId', $this->getAzureCommunicationServicesId());
    }

    /**
     * Sets the azureCommunicationServicesId property value. Azure Communication Services ID of the user.
     * @param string|null $value Value to set for the azureCommunicationServicesId property.
    */
    public function setAzureCommunicationServicesId(?string $value): void {
        $this->getBackingStore()->set('azureCommunicationServicesId', $value);
    }

}
