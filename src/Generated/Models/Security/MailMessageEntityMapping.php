<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailMessageEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new MailMessageEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.mailMessageEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailMessageEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailMessageEntityMapping {
        return new MailMessageEntityMapping();
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
            'senderColumn' => fn(ParseNode $n) => $o->setSenderColumn($n->getStringValue()),
            'subjectColumn' => fn(ParseNode $n) => $o->setSubjectColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the networkMessageIdColumn property value. Name of the detection query column that maps to the network message ID of the alert entity.
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
     * Gets the recipientColumn property value. Name of the detection query column that maps to the recipient of the alert entity.
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
     * Gets the senderColumn property value. Name of the detection query column that maps to the sender of the alert entity.
     * @return string|null
    */
    public function getSenderColumn(): ?string {
        $val = $this->getBackingStore()->get('senderColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderColumn'");
    }

    /**
     * Gets the subjectColumn property value. Name of the detection query column that maps to the subject of the alert entity.
     * @return string|null
    */
    public function getSubjectColumn(): ?string {
        $val = $this->getBackingStore()->get('subjectColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('networkMessageIdColumn', $this->getNetworkMessageIdColumn());
        $writer->writeStringValue('recipientColumn', $this->getRecipientColumn());
        $writer->writeStringValue('senderColumn', $this->getSenderColumn());
        $writer->writeStringValue('subjectColumn', $this->getSubjectColumn());
    }

    /**
     * Sets the networkMessageIdColumn property value. Name of the detection query column that maps to the network message ID of the alert entity.
     * @param string|null $value Value to set for the networkMessageIdColumn property.
    */
    public function setNetworkMessageIdColumn(?string $value): void {
        $this->getBackingStore()->set('networkMessageIdColumn', $value);
    }

    /**
     * Sets the recipientColumn property value. Name of the detection query column that maps to the recipient of the alert entity.
     * @param string|null $value Value to set for the recipientColumn property.
    */
    public function setRecipientColumn(?string $value): void {
        $this->getBackingStore()->set('recipientColumn', $value);
    }

    /**
     * Sets the senderColumn property value. Name of the detection query column that maps to the sender of the alert entity.
     * @param string|null $value Value to set for the senderColumn property.
    */
    public function setSenderColumn(?string $value): void {
        $this->getBackingStore()->set('senderColumn', $value);
    }

    /**
     * Sets the subjectColumn property value. Name of the detection query column that maps to the subject of the alert entity.
     * @param string|null $value Value to set for the subjectColumn property.
    */
    public function setSubjectColumn(?string $value): void {
        $this->getBackingStore()->set('subjectColumn', $value);
    }

}
