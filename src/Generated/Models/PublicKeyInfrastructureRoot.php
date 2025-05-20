<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PublicKeyInfrastructureRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new PublicKeyInfrastructureRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PublicKeyInfrastructureRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PublicKeyInfrastructureRoot {
        return new PublicKeyInfrastructureRoot();
    }

    /**
     * Gets the certificateBasedAuthConfigurations property value. The certificateBasedAuthConfigurations property
     * @return array<CertificateBasedAuthPki>|null
    */
    public function getCertificateBasedAuthConfigurations(): ?array {
        $val = $this->getBackingStore()->get('certificateBasedAuthConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CertificateBasedAuthPki::class);
            /** @var array<CertificateBasedAuthPki>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateBasedAuthConfigurations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateBasedAuthConfigurations' => fn(ParseNode $n) => $o->setCertificateBasedAuthConfigurations($n->getCollectionOfObjectValues([CertificateBasedAuthPki::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('certificateBasedAuthConfigurations', $this->getCertificateBasedAuthConfigurations());
    }

    /**
     * Sets the certificateBasedAuthConfigurations property value. The certificateBasedAuthConfigurations property
     * @param array<CertificateBasedAuthPki>|null $value Value to set for the certificateBasedAuthConfigurations property.
    */
    public function setCertificateBasedAuthConfigurations(?array $value): void {
        $this->getBackingStore()->set('certificateBasedAuthConfigurations', $value);
    }

}
