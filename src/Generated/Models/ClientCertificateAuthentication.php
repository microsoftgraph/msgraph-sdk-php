<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ClientCertificateAuthentication extends ApiAuthenticationConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new clientCertificateAuthentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.clientCertificateAuthentication');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClientCertificateAuthentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClientCertificateAuthentication {
        return new ClientCertificateAuthentication();
    }

    /**
     * Gets the certificateList property value. The list of certificates uploaded for this API connector.
     * @return array<Pkcs12CertificateInformation>|null
    */
    public function getCertificateList(): ?array {
        $val = $this->getBackingStore()->get('certificateList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Pkcs12CertificateInformation::class);
            /** @var array<Pkcs12CertificateInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateList'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateList' => fn(ParseNode $n) => $o->setCertificateList($n->getCollectionOfObjectValues([Pkcs12CertificateInformation::class, 'createFromDiscriminatorValue'])),
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
        $writer->writeCollectionOfObjectValues('certificateList', $this->getCertificateList());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the certificateList property value. The list of certificates uploaded for this API connector.
     * @param array<Pkcs12CertificateInformation>|null $value Value to set for the certificateList property.
    */
    public function setCertificateList(?array $value): void {
        $this->getBackingStore()->set('certificateList', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
