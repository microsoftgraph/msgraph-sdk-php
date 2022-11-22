<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Psr\Http\Message\StreamInterface;

class CertificateAuthority implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new certificateAuthority and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CertificateAuthority
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CertificateAuthority {
        return new CertificateAuthority();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the certificate property value. Required. The base64 encoded string representing the public certificate.
     * @return StreamInterface|null
    */
    public function getCertificate(): ?StreamInterface {
        return $this->getBackingStore()->get('certificate');
    }

    /**
     * Gets the certificateRevocationListUrl property value. The URL of the certificate revocation list.
     * @return string|null
    */
    public function getCertificateRevocationListUrl(): ?string {
        return $this->getBackingStore()->get('certificateRevocationListUrl');
    }

    /**
     * Gets the deltaCertificateRevocationListUrl property value. The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created.
     * @return string|null
    */
    public function getDeltaCertificateRevocationListUrl(): ?string {
        return $this->getBackingStore()->get('deltaCertificateRevocationListUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificate' => fn(ParseNode $n) => $o->setCertificate($n->getBinaryContent()),
            'certificateRevocationListUrl' => fn(ParseNode $n) => $o->setCertificateRevocationListUrl($n->getStringValue()),
            'deltaCertificateRevocationListUrl' => fn(ParseNode $n) => $o->setDeltaCertificateRevocationListUrl($n->getStringValue()),
            'isRootAuthority' => fn(ParseNode $n) => $o->setIsRootAuthority($n->getBooleanValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            'issuerSki' => fn(ParseNode $n) => $o->setIssuerSki($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isRootAuthority property value. Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority.
     * @return bool|null
    */
    public function getIsRootAuthority(): ?bool {
        return $this->getBackingStore()->get('isRootAuthority');
    }

    /**
     * Gets the issuer property value. The issuer of the certificate, calculated from the certificate value. Read-only.
     * @return string|null
    */
    public function getIssuer(): ?string {
        return $this->getBackingStore()->get('issuer');
    }

    /**
     * Gets the issuerSki property value. The subject key identifier of the certificate, calculated from the certificate value. Read-only.
     * @return string|null
    */
    public function getIssuerSki(): ?string {
        return $this->getBackingStore()->get('issuerSki');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('certificate', $this->getCertificate());
        $writer->writeStringValue('certificateRevocationListUrl', $this->getCertificateRevocationListUrl());
        $writer->writeStringValue('deltaCertificateRevocationListUrl', $this->getDeltaCertificateRevocationListUrl());
        $writer->writeBooleanValue('isRootAuthority', $this->getIsRootAuthority());
        $writer->writeStringValue('issuer', $this->getIssuer());
        $writer->writeStringValue('issuerSki', $this->getIssuerSki());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the certificate property value. Required. The base64 encoded string representing the public certificate.
     *  @param StreamInterface|null $value Value to set for the certificate property.
    */
    public function setCertificate(?StreamInterface $value): void {
        $this->getBackingStore()->set('certificate', $value);
    }

    /**
     * Sets the certificateRevocationListUrl property value. The URL of the certificate revocation list.
     *  @param string|null $value Value to set for the certificateRevocationListUrl property.
    */
    public function setCertificateRevocationListUrl(?string $value): void {
        $this->getBackingStore()->set('certificateRevocationListUrl', $value);
    }

    /**
     * Sets the deltaCertificateRevocationListUrl property value. The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created.
     *  @param string|null $value Value to set for the deltaCertificateRevocationListUrl property.
    */
    public function setDeltaCertificateRevocationListUrl(?string $value): void {
        $this->getBackingStore()->set('deltaCertificateRevocationListUrl', $value);
    }

    /**
     * Sets the isRootAuthority property value. Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority.
     *  @param bool|null $value Value to set for the isRootAuthority property.
    */
    public function setIsRootAuthority(?bool $value): void {
        $this->getBackingStore()->set('isRootAuthority', $value);
    }

    /**
     * Sets the issuer property value. The issuer of the certificate, calculated from the certificate value. Read-only.
     *  @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the issuerSki property value. The subject key identifier of the certificate, calculated from the certificate value. Read-only.
     *  @param string|null $value Value to set for the issuerSki property.
    */
    public function setIssuerSki(?string $value): void {
        $this->getBackingStore()->set('issuerSki', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
