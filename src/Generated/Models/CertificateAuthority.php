<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class CertificateAuthority implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var StreamInterface|null $certificate Required. The base64 encoded string representing the public certificate. */
    private ?StreamInterface $certificate = null;
    
    /** @var string|null $certificateRevocationListUrl The URL of the certificate revocation list. */
    private ?string $certificateRevocationListUrl = null;
    
    /** @var string|null $deltaCertificateRevocationListUrl The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created. */
    private ?string $deltaCertificateRevocationListUrl = null;
    
    /** @var bool|null $isRootAuthority Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority. */
    private ?bool $isRootAuthority = null;
    
    /** @var string|null $issuer The issuer of the certificate, calculated from the certificate value. Read-only. */
    private ?string $issuer = null;
    
    /** @var string|null $issuerSki The subject key identifier of the certificate, calculated from the certificate value. Read-only. */
    private ?string $issuerSki = null;
    
    /**
     * Instantiates a new certificateAuthority and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CertificateAuthority
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CertificateAuthority {
        return new CertificateAuthority();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificate property value. Required. The base64 encoded string representing the public certificate.
     * @return StreamInterface|null
    */
    public function getCertificate(): ?StreamInterface {
        return $this->certificate;
    }

    /**
     * Gets the certificateRevocationListUrl property value. The URL of the certificate revocation list.
     * @return string|null
    */
    public function getCertificateRevocationListUrl(): ?string {
        return $this->certificateRevocationListUrl;
    }

    /**
     * Gets the deltaCertificateRevocationListUrl property value. The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created.
     * @return string|null
    */
    public function getDeltaCertificateRevocationListUrl(): ?string {
        return $this->deltaCertificateRevocationListUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'certificate' => function (self $o, ParseNode $n) { $o->setCertificate($n->getBinaryContent()); },
            'certificateRevocationListUrl' => function (self $o, ParseNode $n) { $o->setCertificateRevocationListUrl($n->getStringValue()); },
            'deltaCertificateRevocationListUrl' => function (self $o, ParseNode $n) { $o->setDeltaCertificateRevocationListUrl($n->getStringValue()); },
            'isRootAuthority' => function (self $o, ParseNode $n) { $o->setIsRootAuthority($n->getBooleanValue()); },
            'issuer' => function (self $o, ParseNode $n) { $o->setIssuer($n->getStringValue()); },
            'issuerSki' => function (self $o, ParseNode $n) { $o->setIssuerSki($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isRootAuthority property value. Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority.
     * @return bool|null
    */
    public function getIsRootAuthority(): ?bool {
        return $this->isRootAuthority;
    }

    /**
     * Gets the issuer property value. The issuer of the certificate, calculated from the certificate value. Read-only.
     * @return string|null
    */
    public function getIssuer(): ?string {
        return $this->issuer;
    }

    /**
     * Gets the issuerSki property value. The subject key identifier of the certificate, calculated from the certificate value. Read-only.
     * @return string|null
    */
    public function getIssuerSki(): ?string {
        return $this->issuerSki;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('certificate', $this->certificate);
        $writer->writeStringValue('certificateRevocationListUrl', $this->certificateRevocationListUrl);
        $writer->writeStringValue('deltaCertificateRevocationListUrl', $this->deltaCertificateRevocationListUrl);
        $writer->writeBooleanValue('isRootAuthority', $this->isRootAuthority);
        $writer->writeStringValue('issuer', $this->issuer);
        $writer->writeStringValue('issuerSki', $this->issuerSki);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the certificate property value. Required. The base64 encoded string representing the public certificate.
     *  @param StreamInterface|null $value Value to set for the certificate property.
    */
    public function setCertificate(?StreamInterface $value ): void {
        $this->certificate = $value;
    }

    /**
     * Sets the certificateRevocationListUrl property value. The URL of the certificate revocation list.
     *  @param string|null $value Value to set for the certificateRevocationListUrl property.
    */
    public function setCertificateRevocationListUrl(?string $value ): void {
        $this->certificateRevocationListUrl = $value;
    }

    /**
     * Sets the deltaCertificateRevocationListUrl property value. The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created.
     *  @param string|null $value Value to set for the deltaCertificateRevocationListUrl property.
    */
    public function setDeltaCertificateRevocationListUrl(?string $value ): void {
        $this->deltaCertificateRevocationListUrl = $value;
    }

    /**
     * Sets the isRootAuthority property value. Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority.
     *  @param bool|null $value Value to set for the isRootAuthority property.
    */
    public function setIsRootAuthority(?bool $value ): void {
        $this->isRootAuthority = $value;
    }

    /**
     * Sets the issuer property value. The issuer of the certificate, calculated from the certificate value. Read-only.
     *  @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value ): void {
        $this->issuer = $value;
    }

    /**
     * Sets the issuerSki property value. The subject key identifier of the certificate, calculated from the certificate value. Read-only.
     *  @param string|null $value Value to set for the issuerSki property.
    */
    public function setIssuerSki(?string $value ): void {
        $this->issuerSki = $value;
    }

}
