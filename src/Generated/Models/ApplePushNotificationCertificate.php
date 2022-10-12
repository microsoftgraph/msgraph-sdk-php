<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplePushNotificationCertificate extends Entity implements Parsable 
{
    /**
     * @var string|null $appleIdentifier Apple Id of the account used to create the MDM push certificate.
    */
    private ?string $appleIdentifier = null;
    
    /**
     * @var string|null $certificate Not yet documented
    */
    private ?string $certificate = null;
    
    /**
     * @var string|null $certificateSerialNumber Certificate serial number. This property is read-only.
    */
    private ?string $certificateSerialNumber = null;
    
    /**
     * @var string|null $certificateUploadFailureReason The reason the certificate upload failed.
    */
    private ?string $certificateUploadFailureReason = null;
    
    /**
     * @var string|null $certificateUploadStatus The certificate upload status.
    */
    private ?string $certificateUploadStatus = null;
    
    /**
     * @var DateTime|null $expirationDateTime The expiration date and time for Apple push notification certificate.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Last modified date and time for Apple push notification certificate.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $topicIdentifier Topic Id.
    */
    private ?string $topicIdentifier = null;
    
    /**
     * Instantiates a new applePushNotificationCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.applePushNotificationCertificate');
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
        return $this->appleIdentifier;
    }

    /**
     * Gets the certificate property value. Not yet documented
     * @return string|null
    */
    public function getCertificate(): ?string {
        return $this->certificate;
    }

    /**
     * Gets the certificateSerialNumber property value. Certificate serial number. This property is read-only.
     * @return string|null
    */
    public function getCertificateSerialNumber(): ?string {
        return $this->certificateSerialNumber;
    }

    /**
     * Gets the certificateUploadFailureReason property value. The reason the certificate upload failed.
     * @return string|null
    */
    public function getCertificateUploadFailureReason(): ?string {
        return $this->certificateUploadFailureReason;
    }

    /**
     * Gets the certificateUploadStatus property value. The certificate upload status.
     * @return string|null
    */
    public function getCertificateUploadStatus(): ?string {
        return $this->certificateUploadStatus;
    }

    /**
     * Gets the expirationDateTime property value. The expiration date and time for Apple push notification certificate.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appleIdentifier' => function (ParseNode $n) use ($o) { $o->setAppleIdentifier($n->getStringValue()); },
            'certificate' => function (ParseNode $n) use ($o) { $o->setCertificate($n->getStringValue()); },
            'certificateSerialNumber' => function (ParseNode $n) use ($o) { $o->setCertificateSerialNumber($n->getStringValue()); },
            'certificateUploadFailureReason' => function (ParseNode $n) use ($o) { $o->setCertificateUploadFailureReason($n->getStringValue()); },
            'certificateUploadStatus' => function (ParseNode $n) use ($o) { $o->setCertificateUploadStatus($n->getStringValue()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'topicIdentifier' => function (ParseNode $n) use ($o) { $o->setTopicIdentifier($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified date and time for Apple push notification certificate.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the topicIdentifier property value. Topic Id.
     * @return string|null
    */
    public function getTopicIdentifier(): ?string {
        return $this->topicIdentifier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appleIdentifier', $this->appleIdentifier);
        $writer->writeStringValue('certificate', $this->certificate);
        $writer->writeStringValue('certificateUploadFailureReason', $this->certificateUploadFailureReason);
        $writer->writeStringValue('certificateUploadStatus', $this->certificateUploadStatus);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('topicIdentifier', $this->topicIdentifier);
    }

    /**
     * Sets the appleIdentifier property value. Apple Id of the account used to create the MDM push certificate.
     *  @param string|null $value Value to set for the appleIdentifier property.
    */
    public function setAppleIdentifier(?string $value ): void {
        $this->appleIdentifier = $value;
    }

    /**
     * Sets the certificate property value. Not yet documented
     *  @param string|null $value Value to set for the certificate property.
    */
    public function setCertificate(?string $value ): void {
        $this->certificate = $value;
    }

    /**
     * Sets the certificateSerialNumber property value. Certificate serial number. This property is read-only.
     *  @param string|null $value Value to set for the certificateSerialNumber property.
    */
    public function setCertificateSerialNumber(?string $value ): void {
        $this->certificateSerialNumber = $value;
    }

    /**
     * Sets the certificateUploadFailureReason property value. The reason the certificate upload failed.
     *  @param string|null $value Value to set for the certificateUploadFailureReason property.
    */
    public function setCertificateUploadFailureReason(?string $value ): void {
        $this->certificateUploadFailureReason = $value;
    }

    /**
     * Sets the certificateUploadStatus property value. The certificate upload status.
     *  @param string|null $value Value to set for the certificateUploadStatus property.
    */
    public function setCertificateUploadStatus(?string $value ): void {
        $this->certificateUploadStatus = $value;
    }

    /**
     * Sets the expirationDateTime property value. The expiration date and time for Apple push notification certificate.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified date and time for Apple push notification certificate.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the topicIdentifier property value. Topic Id.
     *  @param string|null $value Value to set for the topicIdentifier property.
    */
    public function setTopicIdentifier(?string $value ): void {
        $this->topicIdentifier = $value;
    }

}
