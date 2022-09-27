<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharingDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var InsightIdentity|null $sharedBy The user who shared the document.
    */
    private ?InsightIdentity $sharedBy = null;
    
    /**
     * @var DateTime|null $sharedDateTime The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $sharedDateTime = null;
    
    /**
     * @var ResourceReference|null $sharingReference The sharingReference property
    */
    private ?ResourceReference $sharingReference = null;
    
    /**
     * @var string|null $sharingSubject The subject with which the document was shared.
    */
    private ?string $sharingSubject = null;
    
    /**
     * @var string|null $sharingType Determines the way the document was shared, can be by a 'Link', 'Attachment', 'Group', 'Site'.
    */
    private ?string $sharingType = null;
    
    /**
     * Instantiates a new sharingDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.sharingDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharingDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharingDetail {
        return new SharingDetail();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'sharedBy' => function (ParseNode $n) use ($o) { $o->setSharedBy($n->getObjectValue(array(InsightIdentity::class, 'createFromDiscriminatorValue'))); },
            'sharedDateTime' => function (ParseNode $n) use ($o) { $o->setSharedDateTime($n->getDateTimeValue()); },
            'sharingSubject' => function (ParseNode $n) use ($o) { $o->setSharingSubject($n->getStringValue()); },
            'sharingType' => function (ParseNode $n) use ($o) { $o->setSharingType($n->getStringValue()); },
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
     * Gets the sharedBy property value. The user who shared the document.
     * @return InsightIdentity|null
    */
    public function getSharedBy(): ?InsightIdentity {
        return $this->sharedBy;
    }

    /**
     * Gets the sharedDateTime property value. The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getSharedDateTime(): ?DateTime {
        return $this->sharedDateTime;
    }

    /**
     * Gets the sharingReference property value. The sharingReference property
     * @return ResourceReference|null
    */
    public function getSharingReference(): ?ResourceReference {
        return $this->sharingReference;
    }

    /**
     * Gets the sharingSubject property value. The subject with which the document was shared.
     * @return string|null
    */
    public function getSharingSubject(): ?string {
        return $this->sharingSubject;
    }

    /**
     * Gets the sharingType property value. Determines the way the document was shared, can be by a 'Link', 'Attachment', 'Group', 'Site'.
     * @return string|null
    */
    public function getSharingType(): ?string {
        return $this->sharingType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('sharedBy', $this->sharedBy);
        $writer->writeDateTimeValue('sharedDateTime', $this->sharedDateTime);
        $writer->writeStringValue('sharingSubject', $this->sharingSubject);
        $writer->writeStringValue('sharingType', $this->sharingType);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the sharedBy property value. The user who shared the document.
     *  @param InsightIdentity|null $value Value to set for the sharedBy property.
    */
    public function setSharedBy(?InsightIdentity $value ): void {
        $this->sharedBy = $value;
    }

    /**
     * Sets the sharedDateTime property value. The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the sharedDateTime property.
    */
    public function setSharedDateTime(?DateTime $value ): void {
        $this->sharedDateTime = $value;
    }

    /**
     * Sets the sharingSubject property value. The subject with which the document was shared.
     *  @param string|null $value Value to set for the sharingSubject property.
    */
    public function setSharingSubject(?string $value ): void {
        $this->sharingSubject = $value;
    }

    /**
     * Sets the sharingType property value. Determines the way the document was shared, can be by a 'Link', 'Attachment', 'Group', 'Site'.
     *  @param string|null $value Value to set for the sharingType property.
    */
    public function setSharingType(?string $value ): void {
        $this->sharingType = $value;
    }

}
