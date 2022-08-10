<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CertificateBasedAuthConfiguration extends Entity implements Parsable 
{
    /**
     * @var array<CertificateAuthority>|null $certificateAuthorities Collection of certificate authorities which creates a trusted certificate chain.
    */
    private ?array $certificateAuthorities = null;
    
    /**
     * Instantiates a new certificateBasedAuthConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.certificateBasedAuthConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CertificateBasedAuthConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CertificateBasedAuthConfiguration {
        return new CertificateBasedAuthConfiguration();
    }

    /**
     * Gets the certificateAuthorities property value. Collection of certificate authorities which creates a trusted certificate chain.
     * @return array<CertificateAuthority>|null
    */
    public function getCertificateAuthorities(): ?array {
        return $this->certificateAuthorities;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateAuthorities' => function (ParseNode $n) use ($o) { $o->setCertificateAuthorities($n->getCollectionOfObjectValues(array(CertificateAuthority::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('certificateAuthorities', $this->certificateAuthorities);
    }

    /**
     * Sets the certificateAuthorities property value. Collection of certificate authorities which creates a trusted certificate chain.
     *  @param array<CertificateAuthority>|null $value Value to set for the certificateAuthorities property.
    */
    public function setCertificateAuthorities(?array $value ): void {
        $this->certificateAuthorities = $value;
    }

}
