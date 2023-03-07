<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class EnterpriseCodeSigningCertificate extends Entity implements Parsable 
{
    /**
     * Instantiates a new EnterpriseCodeSigningCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnterpriseCodeSigningCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnterpriseCodeSigningCertificate {
        return new EnterpriseCodeSigningCertificate();
    }

    /**
     * Gets the content property value. The Windows Enterprise Code-Signing Certificate in the raw data format. Set to null once certificate has been uploaded and other properties have been populated.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->getBackingStore()->get('content');
    }

    /**
     * Gets the expirationDateTime property value. The cert expiration date and time (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            'issuerName' => fn(ParseNode $n) => $o->setIssuerName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CertificateStatus::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'subjectName' => fn(ParseNode $n) => $o->setSubjectName($n->getStringValue()),
            'uploadDateTime' => fn(ParseNode $n) => $o->setUploadDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the issuer property value. The issuer value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @return string|null
    */
    public function getIssuer(): ?string {
        return $this->getBackingStore()->get('issuer');
    }

    /**
     * Gets the issuerName property value. The issuer name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @return string|null
    */
    public function getIssuerName(): ?string {
        return $this->getBackingStore()->get('issuerName');
    }

    /**
     * Gets the status property value. The status property
     * @return CertificateStatus|null
    */
    public function getStatus(): ?CertificateStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the subject property value. The subject value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->getBackingStore()->get('subject');
    }

    /**
     * Gets the subjectName property value. The subject name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @return string|null
    */
    public function getSubjectName(): ?string {
        return $this->getBackingStore()->get('subjectName');
    }

    /**
     * Gets the uploadDateTime property value. The date time of CodeSigning Cert when it is uploaded (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @return DateTime|null
    */
    public function getUploadDateTime(): ?DateTime {
        return $this->getBackingStore()->get('uploadDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('issuer', $this->getIssuer());
        $writer->writeStringValue('issuerName', $this->getIssuerName());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('subjectName', $this->getSubjectName());
        $writer->writeDateTimeValue('uploadDateTime', $this->getUploadDateTime());
    }

    /**
     * Sets the content property value. The Windows Enterprise Code-Signing Certificate in the raw data format. Set to null once certificate has been uploaded and other properties have been populated.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the expirationDateTime property value. The cert expiration date and time (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the issuer property value. The issuer value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the issuerName property value. The issuer name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @param string|null $value Value to set for the issuerName property.
    */
    public function setIssuerName(?string $value): void {
        $this->getBackingStore()->set('issuerName', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CertificateStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CertificateStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the subject property value. The subject value for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the subjectName property value. The subject name for the cert. This might contain information such as country (C), state or province (S), locality (L), common name of the cert (CN), organization (O), and organizational unit (OU). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @param string|null $value Value to set for the subjectName property.
    */
    public function setSubjectName(?string $value): void {
        $this->getBackingStore()->set('subjectName', $value);
    }

    /**
     * Sets the uploadDateTime property value. The date time of CodeSigning Cert when it is uploaded (using ISO 8601 format, in UTC time). Uploading a valid cert file through the Intune admin console will automatically populate this value in the HTTP response. Supports: $filter, $select, $top, $OrderBy, $skip. $Search is not supported.
     * @param DateTime|null $value Value to set for the uploadDateTime property.
    */
    public function setUploadDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('uploadDateTime', $value);
    }

}
