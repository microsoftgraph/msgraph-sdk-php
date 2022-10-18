<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Pkcs12CertificateInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isActive Represents whether the certificate is the active certificate to be used for calling the API connector. The active certificate is the most recently uploaded certificate which is not yet expired but whose notBefore time is in the past.
    */
    private ?bool $isActive = null;
    
    /**
     * @var int|null $notAfter The certificate's expiry. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    */
    private ?int $notAfter = null;
    
    /**
     * @var int|null $notBefore The certificate's issue time (not before). This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    */
    private ?int $notBefore = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $thumbprint The certificate thumbprint.
    */
    private ?string $thumbprint = null;
    
    /**
     * Instantiates a new pkcs12CertificateInformation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.pkcs12CertificateInformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Pkcs12CertificateInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Pkcs12CertificateInformation {
        return new Pkcs12CertificateInformation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'notAfter' => fn(ParseNode $n) => $o->setNotAfter($n->getIntegerValue()),
            'notBefore' => fn(ParseNode $n) => $o->setNotBefore($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'thumbprint' => fn(ParseNode $n) => $o->setThumbprint($n->getStringValue()),
        ];
    }

    /**
     * Gets the isActive property value. Represents whether the certificate is the active certificate to be used for calling the API connector. The active certificate is the most recently uploaded certificate which is not yet expired but whose notBefore time is in the past.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the notAfter property value. The certificate's expiry. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @return int|null
    */
    public function getNotAfter(): ?int {
        return $this->notAfter;
    }

    /**
     * Gets the notBefore property value. The certificate's issue time (not before). This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @return int|null
    */
    public function getNotBefore(): ?int {
        return $this->notBefore;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the thumbprint property value. The certificate thumbprint.
     * @return string|null
    */
    public function getThumbprint(): ?string {
        return $this->thumbprint;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isActive', $this->isActive);
        $writer->writeIntegerValue('notAfter', $this->notAfter);
        $writer->writeIntegerValue('notBefore', $this->notBefore);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('thumbprint', $this->thumbprint);
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
     * Sets the isActive property value. Represents whether the certificate is the active certificate to be used for calling the API connector. The active certificate is the most recently uploaded certificate which is not yet expired but whose notBefore time is in the past.
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the notAfter property value. The certificate's expiry. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     *  @param int|null $value Value to set for the notAfter property.
    */
    public function setNotAfter(?int $value ): void {
        $this->notAfter = $value;
    }

    /**
     * Sets the notBefore property value. The certificate's issue time (not before). This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     *  @param int|null $value Value to set for the notBefore property.
    */
    public function setNotBefore(?int $value ): void {
        $this->notBefore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the thumbprint property value. The certificate thumbprint.
     *  @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value ): void {
        $this->thumbprint = $value;
    }

}
