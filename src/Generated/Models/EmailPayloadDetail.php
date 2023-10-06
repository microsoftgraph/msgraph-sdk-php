<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailPayloadDetail extends PayloadDetail implements Parsable 
{
    /**
     * Instantiates a new emailPayloadDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.emailPayloadDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailPayloadDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailPayloadDetail {
        return new EmailPayloadDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fromEmail' => fn(ParseNode $n) => $o->setFromEmail($n->getStringValue()),
            'fromName' => fn(ParseNode $n) => $o->setFromName($n->getStringValue()),
            'isExternalSender' => fn(ParseNode $n) => $o->setIsExternalSender($n->getBooleanValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fromEmail property value. The fromEmail property
     * @return string|null
    */
    public function getFromEmail(): ?string {
        $val = $this->getBackingStore()->get('fromEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fromEmail'");
    }

    /**
     * Gets the fromName property value. The fromName property
     * @return string|null
    */
    public function getFromName(): ?string {
        $val = $this->getBackingStore()->get('fromName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fromName'");
    }

    /**
     * Gets the isExternalSender property value. The isExternalSender property
     * @return bool|null
    */
    public function getIsExternalSender(): ?bool {
        $val = $this->getBackingStore()->get('isExternalSender');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExternalSender'");
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fromEmail', $this->getFromEmail());
        $writer->writeStringValue('fromName', $this->getFromName());
        $writer->writeBooleanValue('isExternalSender', $this->getIsExternalSender());
        $writer->writeStringValue('subject', $this->getSubject());
    }

    /**
     * Sets the fromEmail property value. The fromEmail property
     * @param string|null $value Value to set for the fromEmail property.
    */
    public function setFromEmail(?string $value): void {
        $this->getBackingStore()->set('fromEmail', $value);
    }

    /**
     * Sets the fromName property value. The fromName property
     * @param string|null $value Value to set for the fromName property.
    */
    public function setFromName(?string $value): void {
        $this->getBackingStore()->set('fromName', $value);
    }

    /**
     * Sets the isExternalSender property value. The isExternalSender property
     * @param bool|null $value Value to set for the isExternalSender property.
    */
    public function setIsExternalSender(?bool $value): void {
        $this->getBackingStore()->set('isExternalSender', $value);
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
