<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SigningCertificateUpdateStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $certificateUpdateResult Status of the last certificate update. Read-only. For a list of statuses, see certificateUpdateResult status.
    */
    private ?string $certificateUpdateResult = null;
    
    /**
     * @var DateTime|null $lastRunDateTime Date and time in ISO 8601 format and in UTC time when the certificate was last updated. Read-only.
    */
    private ?DateTime $lastRunDateTime = null;
    
    /**
     * Instantiates a new signingCertificateUpdateStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SigningCertificateUpdateStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SigningCertificateUpdateStatus {
        return new SigningCertificateUpdateStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificateUpdateResult property value. Status of the last certificate update. Read-only. For a list of statuses, see certificateUpdateResult status.
     * @return string|null
    */
    public function getCertificateUpdateResult(): ?string {
        return $this->certificateUpdateResult;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificateUpdateResult' => function (ParseNode $n) use ($o) { $o->setCertificateUpdateResult($n->getStringValue()); },
            'lastRunDateTime' => function (ParseNode $n) use ($o) { $o->setLastRunDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the lastRunDateTime property value. Date and time in ISO 8601 format and in UTC time when the certificate was last updated. Read-only.
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        return $this->lastRunDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('certificateUpdateResult', $this->certificateUpdateResult);
        $writer->writeDateTimeValue('lastRunDateTime', $this->lastRunDateTime);
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
     * Sets the certificateUpdateResult property value. Status of the last certificate update. Read-only. For a list of statuses, see certificateUpdateResult status.
     *  @param string|null $value Value to set for the certificateUpdateResult property.
    */
    public function setCertificateUpdateResult(?string $value ): void {
        $this->certificateUpdateResult = $value;
    }

    /**
     * Sets the lastRunDateTime property value. Date and time in ISO 8601 format and in UTC time when the certificate was last updated. Read-only.
     *  @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value ): void {
        $this->lastRunDateTime = $value;
    }

}
