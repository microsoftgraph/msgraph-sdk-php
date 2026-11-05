<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailboxEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new MailboxEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.mailboxEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxEntityMapping {
        return new MailboxEntityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'primaryAddressColumn' => fn(ParseNode $n) => $o->setPrimaryAddressColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the primaryAddressColumn property value. Name of the detection query column that maps to the primary email address of the alert entity.
     * @return string|null
    */
    public function getPrimaryAddressColumn(): ?string {
        $val = $this->getBackingStore()->get('primaryAddressColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryAddressColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('primaryAddressColumn', $this->getPrimaryAddressColumn());
    }

    /**
     * Sets the primaryAddressColumn property value. Name of the detection query column that maps to the primary email address of the alert entity.
     * @param string|null $value Value to set for the primaryAddressColumn property.
    */
    public function setPrimaryAddressColumn(?string $value): void {
        $this->getBackingStore()->set('primaryAddressColumn', $value);
    }

}
