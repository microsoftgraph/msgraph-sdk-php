<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Apple push notification certificate.
*/
class ApplePushNotificationCertificate extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApplePushNotificationCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplePushNotificationCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplePushNotificationCertificate {
        return new ApplePushNotificationCertificate();
    }

    /**
     * Gets the appleIdentifier property value. Apple Id of the account used to create the MDM push certificate.
     * @return string|null
    */
    public function getAppleIdentifier(): ?string {
        $val = $this->getBackingStore()->get('appleIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appleIdentifier'");
    }

    /**
     * Gets the certificate property value. The certificate property
     * @return string|null
    */
    public function getCertificate(): ?string {
        $val = $this->getBackingStore()->get('certificate');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificate'");
    }

    /**
     * Gets the certificateSerialNumber property value. Certificate serial number. This property is read-only.
     * @return string|null
    */
    public function getCertificateSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('certificateSerialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateSerialNumber'");
    }

    /**
     * Gets the certificateUploadFailureReason property value. The reason the certificate upload failed.
     * @return string|null
    */
    public function getCertificateUploadFailureReason(): ?string {
        $val = $this->getBackingStore()->get('certificateUploadFailureReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateUploadFailureReason'");
    }

    /**
     * Gets the certificateUploadStatus property value. The certificate upload status.
     * @return string|null
    */
    public function getCertificateUploadStatus(): ?string {
        $val = $this->getBackingStore()->get('certificateUploadStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateUploadStatus'");
    }

    /**
     * Gets the expirationDateTime property value. The expiration date and time for Apple push notification certificate.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appleIdentifier' => fn(ParseNode $n) => $o->setAppleIdentifier($n->getStringValue()),
            'certificate' => fn(ParseNode $n) => $o->setCertificate($n->getStringValue()),
            'certificateSerialNumber' => fn(ParseNode $n) => $o->setCertificateSerialNumber($n->getStringValue()),
            'certificateUploadFailureReason' => fn(ParseNode $n) => $o->setCertificateUploadFailureReason($n->getStringValue()),
            'certificateUploadStatus' => fn(ParseNode $n) => $o->setCertificateUploadStatus($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'topicIdentifier' => fn(ParseNode $n) => $o->setTopicIdentifier($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified date and time for Apple push notification certificate.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the topicIdentifier property value. Topic Id.
     * @return string|null
    */
    public function getTopicIdentifier(): ?string {
        $val = $this->getBackingStore()->get('topicIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topicIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appleIdentifier', $this->getAppleIdentifier());
        $writer->writeStringValue('certificate', $this->getCertificate());
        $writer->writeStringValue('certificateUploadFailureReason', $this->getCertificateUploadFailureReason());
        $writer->writeStringValue('certificateUploadStatus', $this->getCertificateUploadStatus());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('topicIdentifier', $this->getTopicIdentifier());
    }

    /**
     * Sets the appleIdentifier property value. Apple Id of the account used to create the MDM push certificate.
     * @param string|null $value Value to set for the appleIdentifier property.
    */
    public function setAppleIdentifier(?string $value): void {
        $this->getBackingStore()->set('appleIdentifier', $value);
    }

    /**
     * Sets the certificate property value. The certificate property
     * @param string|null $value Value to set for the certificate property.
    */
    public function setCertificate(?string $value): void {
        $this->getBackingStore()->set('certificate', $value);
    }

    /**
     * Sets the certificateSerialNumber property value. Certificate serial number. This property is read-only.
     * @param string|null $value Value to set for the certificateSerialNumber property.
    */
    public function setCertificateSerialNumber(?string $value): void {
        $this->getBackingStore()->set('certificateSerialNumber', $value);
    }

    /**
     * Sets the certificateUploadFailureReason property value. The reason the certificate upload failed.
     * @param string|null $value Value to set for the certificateUploadFailureReason property.
    */
    public function setCertificateUploadFailureReason(?string $value): void {
        $this->getBackingStore()->set('certificateUploadFailureReason', $value);
    }

    /**
     * Sets the certificateUploadStatus property value. The certificate upload status.
     * @param string|null $value Value to set for the certificateUploadStatus property.
    */
    public function setCertificateUploadStatus(?string $value): void {
        $this->getBackingStore()->set('certificateUploadStatus', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expiration date and time for Apple push notification certificate.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified date and time for Apple push notification certificate.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the topicIdentifier property value. Topic Id.
     * @param string|null $value Value to set for the topicIdentifier property.
    */
    public function setTopicIdentifier(?string $value): void {
        $this->getBackingStore()->set('topicIdentifier', $value);
    }

}
