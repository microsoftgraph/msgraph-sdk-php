<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SamlOrWsFedExternalDomainFederation extends SamlOrWsFedProvider implements Parsable 
{
    /**
     * Instantiates a new samlOrWsFedExternalDomainFederation and sets the default values.
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
        $val = $this->getBackingStore()->get('domains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExternalDomainName::class);
            /** @var array<ExternalDomainName>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domains'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domains' => fn(ParseNode $n) => $o->setDomains($n->getCollectionOfObjectValues([ExternalDomainName::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('domains', $this->getDomains());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the domains property value. Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq).
     * @param array<ExternalDomainName>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value): void {
        $this->getBackingStore()->set('domains', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
