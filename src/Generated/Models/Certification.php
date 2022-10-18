<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Certification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $certificationDetailsUrl URL that shows certification details for the application.
    */
    private ?string $certificationDetailsUrl = null;
    
    /**
     * @var DateTime|null $certificationExpirationDateTime The timestamp when the current certification for the application will expire.
    */
    private ?DateTime $certificationExpirationDateTime = null;
    
    /**
     * @var bool|null $isCertifiedByMicrosoft Indicates whether the application is certified by Microsoft.
    */
    private ?bool $isCertifiedByMicrosoft = null;
    
    /**
     * @var bool|null $isPublisherAttested Indicates whether the application has been self-attested by the application developer or the publisher.
    */
    private ?bool $isPublisherAttested = null;
    
    /**
     * @var DateTime|null $lastCertificationDateTime The timestamp when the certification for the application was most recently added or updated.
    */
    private ?DateTime $lastCertificationDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new certification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.certification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Certification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Certification {
        return new Certification();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificationDetailsUrl property value. URL that shows certification details for the application.
     * @return string|null
    */
    public function getCertificationDetailsUrl(): ?string {
        return $this->certificationDetailsUrl;
    }

    /**
     * Gets the certificationExpirationDateTime property value. The timestamp when the current certification for the application will expire.
     * @return DateTime|null
    */
    public function getCertificationExpirationDateTime(): ?DateTime {
        return $this->certificationExpirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificationDetailsUrl' => fn(ParseNode $n) => $o->setCertificationDetailsUrl($n->getStringValue()),
            'certificationExpirationDateTime' => fn(ParseNode $n) => $o->setCertificationExpirationDateTime($n->getDateTimeValue()),
            'isCertifiedByMicrosoft' => fn(ParseNode $n) => $o->setIsCertifiedByMicrosoft($n->getBooleanValue()),
            'isPublisherAttested' => fn(ParseNode $n) => $o->setIsPublisherAttested($n->getBooleanValue()),
            'lastCertificationDateTime' => fn(ParseNode $n) => $o->setLastCertificationDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isCertifiedByMicrosoft property value. Indicates whether the application is certified by Microsoft.
     * @return bool|null
    */
    public function getIsCertifiedByMicrosoft(): ?bool {
        return $this->isCertifiedByMicrosoft;
    }

    /**
     * Gets the isPublisherAttested property value. Indicates whether the application has been self-attested by the application developer or the publisher.
     * @return bool|null
    */
    public function getIsPublisherAttested(): ?bool {
        return $this->isPublisherAttested;
    }

    /**
     * Gets the lastCertificationDateTime property value. The timestamp when the certification for the application was most recently added or updated.
     * @return DateTime|null
    */
    public function getLastCertificationDateTime(): ?DateTime {
        return $this->lastCertificationDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('certificationExpirationDateTime', $this->certificationExpirationDateTime);
        $writer->writeBooleanValue('isPublisherAttested', $this->isPublisherAttested);
        $writer->writeDateTimeValue('lastCertificationDateTime', $this->lastCertificationDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the certificationDetailsUrl property value. URL that shows certification details for the application.
     *  @param string|null $value Value to set for the certificationDetailsUrl property.
    */
    public function setCertificationDetailsUrl(?string $value ): void {
        $this->certificationDetailsUrl = $value;
    }

    /**
     * Sets the certificationExpirationDateTime property value. The timestamp when the current certification for the application will expire.
     *  @param DateTime|null $value Value to set for the certificationExpirationDateTime property.
    */
    public function setCertificationExpirationDateTime(?DateTime $value ): void {
        $this->certificationExpirationDateTime = $value;
    }

    /**
     * Sets the isCertifiedByMicrosoft property value. Indicates whether the application is certified by Microsoft.
     *  @param bool|null $value Value to set for the isCertifiedByMicrosoft property.
    */
    public function setIsCertifiedByMicrosoft(?bool $value ): void {
        $this->isCertifiedByMicrosoft = $value;
    }

    /**
     * Sets the isPublisherAttested property value. Indicates whether the application has been self-attested by the application developer or the publisher.
     *  @param bool|null $value Value to set for the isPublisherAttested property.
    */
    public function setIsPublisherAttested(?bool $value ): void {
        $this->isPublisherAttested = $value;
    }

    /**
     * Sets the lastCertificationDateTime property value. The timestamp when the certification for the application was most recently added or updated.
     *  @param DateTime|null $value Value to set for the lastCertificationDateTime property.
    */
    public function setLastCertificationDateTime(?DateTime $value ): void {
        $this->lastCertificationDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
