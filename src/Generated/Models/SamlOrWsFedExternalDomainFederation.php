<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SamlOrWsFedExternalDomainFederation extends SamlOrWsFedProvider implements Parsable 
{
    /**
     * Instantiates a new SamlOrWsFedExternalDomainFederation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.samlOrWsFedExternalDomainFederation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SamlOrWsFedExternalDomainFederation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SamlOrWsFedExternalDomainFederation {
        return new SamlOrWsFedExternalDomainFederation();
    }

    /**
     * Gets the domains property value. Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq).
     * @return array<ExternalDomainName>|null
    */
    public function getDomains(): ?array {
        return $this->getBackingStore()->get('domains');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domains' => fn(ParseNode $n) => $o->setDomains($n->getCollectionOfObjectValues([ExternalDomainName::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('domains', $this->getDomains());
    }

    /**
     * Sets the domains property value. Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq).
     *  @param array<ExternalDomainName>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value): void {
        $this->getBackingStore()->set('domains', $value);
    }

}
