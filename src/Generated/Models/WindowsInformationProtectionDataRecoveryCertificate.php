<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class WindowsInformationProtectionDataRecoveryCertificate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $certificate Data recovery Certificate
    */
    private ?StreamInterface $certificate = null;
    
    /**
     * @var string|null $description Data recovery Certificate description
    */
    private ?string $description = null;
    
    /**
     * @var DateTime|null $expirationDateTime Data recovery Certificate expiration datetime
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $subjectName Data recovery Certificate subject name
    */
    private ?string $subjectName = null;
    
    /**
     * Instantiates a new windowsInformationProtectionDataRecoveryCertificate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windowsInformationProtectionDataRecoveryCertificate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionDataRecoveryCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionDataRecoveryCertificate {
        return new WindowsInformationProtectionDataRecoveryCertificate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificate property value. Data recovery Certificate
     * @return StreamInterface|null
    */
    public function getCertificate(): ?StreamInterface {
        return $this->certificate;
    }

    /**
     * Gets the description property value. Data recovery Certificate description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the expirationDateTime property value. Data recovery Certificate expiration datetime
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
        return  [
            'certificate' => function (ParseNode $n) use ($o) { $o->setCertificate($n->getBinaryContent()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'subjectName' => function (ParseNode $n) use ($o) { $o->setSubjectName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the subjectName property value. Data recovery Certificate subject name
     * @return string|null
    */
    public function getSubjectName(): ?string {
        return $this->subjectName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('certificate', $this->certificate);
        $writer->writeStringValue('description', $this->description);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('subjectName', $this->subjectName);
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
     * Sets the certificate property value. Data recovery Certificate
     *  @param StreamInterface|null $value Value to set for the certificate property.
    */
    public function setCertificate(?StreamInterface $value ): void {
        $this->certificate = $value;
    }

    /**
     * Sets the description property value. Data recovery Certificate description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the expirationDateTime property value. Data recovery Certificate expiration datetime
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the subjectName property value. Data recovery Certificate subject name
     *  @param string|null $value Value to set for the subjectName property.
    */
    public function setSubjectName(?string $value ): void {
        $this->subjectName = $value;
    }

}
