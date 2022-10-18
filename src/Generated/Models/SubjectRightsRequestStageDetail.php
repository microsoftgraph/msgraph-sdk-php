<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubjectRightsRequestStageDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PublicError|null $error Describes the error, if any, for the current stage.
    */
    private ?PublicError $error = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var SubjectRightsRequestStage|null $stage The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue.
    */
    private ?SubjectRightsRequestStage $stage = null;
    
    /**
     * @var SubjectRightsRequestStageStatus|null $status Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
    */
    private ?SubjectRightsRequestStageStatus $status = null;
    
    /**
     * Instantiates a new subjectRightsRequestStageDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.subjectRightsRequestStageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectRightsRequestStageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectRightsRequestStageDetail {
        return new SubjectRightsRequestStageDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the error property value. Describes the error, if any, for the current stage.
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'stage' => fn(ParseNode $n) => $o->setStage($n->getEnumValue(SubjectRightsRequestStage::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SubjectRightsRequestStageStatus::class)),
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
     * Gets the stage property value. The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue.
     * @return SubjectRightsRequestStage|null
    */
    public function getStage(): ?SubjectRightsRequestStage {
        return $this->stage;
    }

    /**
     * Gets the status property value. Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     * @return SubjectRightsRequestStageStatus|null
    */
    public function getStatus(): ?SubjectRightsRequestStageStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('error', $this->error);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('stage', $this->stage);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the error property value. Describes the error, if any, for the current stage.
     *  @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the stage property value. The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue.
     *  @param SubjectRightsRequestStage|null $value Value to set for the stage property.
    */
    public function setStage(?SubjectRightsRequestStage $value ): void {
        $this->stage = $value;
    }

    /**
     * Sets the status property value. Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     *  @param SubjectRightsRequestStageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SubjectRightsRequestStageStatus $value ): void {
        $this->status = $value;
    }

}
