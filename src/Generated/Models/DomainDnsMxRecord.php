<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainDnsMxRecord extends DomainDnsRecord implements Parsable 
{
    /**
     * Instantiates a new DomainDnsMxRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainDnsMxRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainDnsMxRecord {
        return new DomainDnsMxRecord();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mailExchange' => fn(ParseNode $n) => $o->setMailExchange($n->getStringValue()),
            'preference' => fn(ParseNode $n) => $o->setPreference($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the mailExchange property value. Value used when configuring the answer/destination/value of the MX record at the DNS host.
     * @return string|null
    */
    public function getMailExchange(): ?string {
        $val = $this->getBackingStore()->get('mailExchange');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailExchange'");
    }

    /**
     * Gets the preference property value. Value used when configuring the Preference/Priority property of the MX record at the DNS host.
     * @return int|null
    */
    public function getPreference(): ?int {
        $val = $this->getBackingStore()->get('preference');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preference'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('mailExchange', $this->getMailExchange());
        $writer->writeIntegerValue('preference', $this->getPreference());
    }

    /**
     * Sets the mailExchange property value. Value used when configuring the answer/destination/value of the MX record at the DNS host.
     * @param string|null $value Value to set for the mailExchange property.
    */
    public function setMailExchange(?string $value): void {
        $this->getBackingStore()->set('mailExchange', $value);
    }

    /**
     * Sets the preference property value. Value used when configuring the Preference/Priority property of the MX record at the DNS host.
     * @param int|null $value Value to set for the preference property.
    */
    public function setPreference(?int $value): void {
        $this->getBackingStore()->set('preference', $value);
    }

}
