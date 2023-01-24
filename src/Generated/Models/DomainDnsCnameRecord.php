<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainDnsCnameRecord extends DomainDnsRecord implements Parsable 
{
    /**
     * Instantiates a new DomainDnsCnameRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainDnsCnameRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainDnsCnameRecord {
        return new DomainDnsCnameRecord();
    }

    /**
     * Gets the canonicalName property value. The canonical name of the CNAME record. Used to configure the CNAME record at the DNS host.
     * @return string|null
    */
    public function getCanonicalName(): ?string {
        return $this->getBackingStore()->get('canonicalName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'canonicalName' => fn(ParseNode $n) => $o->setCanonicalName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('canonicalName', $this->getCanonicalName());
    }

    /**
     * Sets the canonicalName property value. The canonical name of the CNAME record. Used to configure the CNAME record at the DNS host.
     * @param string|null $value Value to set for the canonicalName property.
    */
    public function setCanonicalName(?string $value): void {
        $this->getBackingStore()->set('canonicalName', $value);
    }

}
