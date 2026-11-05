<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailAction extends AutomatedAction implements Parsable 
{
    /**
     * Instantiates a new EmailAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.emailAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailAction {
        return new EmailAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'networkMessageIdColumn' => fn(ParseNode $n) => $o->setNetworkMessageIdColumn($n->getStringValue()),
            'recipientColumn' => fn(ParseNode $n) => $o->setRecipientColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the networkMessageIdColumn property value. Name of the hunting-query result column that contains the network message ID of the targeted email message.
     * @return string|null
    */
    public function getNetworkMessageIdColumn(): ?string {
        $val = $this->getBackingStore()->get('networkMessageIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkMessageIdColumn'");
    }

    /**
     * Gets the recipientColumn property value. Name of the hunting-query result column that contains the recipient of the targeted email message.
     * @return string|null
    */
    public function getRecipientColumn(): ?string {
        $val = $this->getBackingStore()->get('recipientColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('networkMessageIdColumn', $this->getNetworkMessageIdColumn());
        $writer->writeStringValue('recipientColumn', $this->getRecipientColumn());
    }

    /**
     * Sets the networkMessageIdColumn property value. Name of the hunting-query result column that contains the network message ID of the targeted email message.
     * @param string|null $value Value to set for the networkMessageIdColumn property.
    */
    public function setNetworkMessageIdColumn(?string $value): void {
        $this->getBackingStore()->set('networkMessageIdColumn', $value);
    }

    /**
     * Sets the recipientColumn property value. Name of the hunting-query result column that contains the recipient of the targeted email message.
     * @param string|null $value Value to set for the recipientColumn property.
    */
    public function setRecipientColumn(?string $value): void {
        $this->getBackingStore()->set('recipientColumn', $value);
    }

}
