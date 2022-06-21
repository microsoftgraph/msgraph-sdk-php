<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApprovalSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $approvalMode One of SingleStage, Serial, Parallel, NoApproval (default). NoApproval is used when isApprovalRequired is false.
    */
    private ?string $approvalMode = null;
    
    /**
     * @var array<UnifiedApprovalStage>|null $approvalStages If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
    */
    private ?array $approvalStages = null;
    
    /**
     * @var bool|null $isApprovalRequired Indicates whether approval is required for requests in this policy.
    */
    private ?bool $isApprovalRequired = null;
    
    /**
     * @var bool|null $isApprovalRequiredForExtension Indicates whether approval is required for a user to extend their assignment.
    */
    private ?bool $isApprovalRequiredForExtension = null;
    
    /**
     * @var bool|null $isRequestorJustificationRequired Indicates whether the requestor is required to supply a justification in their request.
    */
    private ?bool $isRequestorJustificationRequired = null;
    
    /**
     * Instantiates a new approvalSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalSettings {
        return new ApprovalSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the approvalMode property value. One of SingleStage, Serial, Parallel, NoApproval (default). NoApproval is used when isApprovalRequired is false.
     * @return string|null
    */
    public function getApprovalMode(): ?string {
        return $this->approvalMode;
    }

    /**
     * Gets the approvalStages property value. If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
     * @return array<UnifiedApprovalStage>|null
    */
    public function getApprovalStages(): ?array {
        return $this->approvalStages;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'approvalMode' => function (ParseNode $n) use ($o) { $o->setApprovalMode($n->getStringValue()); },
            'approvalStages' => function (ParseNode $n) use ($o) { $o->setApprovalStages($n->getCollectionOfObjectValues(array(UnifiedApprovalStage::class, 'createFromDiscriminatorValue'))); },
            'isApprovalRequired' => function (ParseNode $n) use ($o) { $o->setIsApprovalRequired($n->getBooleanValue()); },
            'isApprovalRequiredForExtension' => function (ParseNode $n) use ($o) { $o->setIsApprovalRequiredForExtension($n->getBooleanValue()); },
            'isRequestorJustificationRequired' => function (ParseNode $n) use ($o) { $o->setIsRequestorJustificationRequired($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isApprovalRequired property value. Indicates whether approval is required for requests in this policy.
     * @return bool|null
    */
    public function getIsApprovalRequired(): ?bool {
        return $this->isApprovalRequired;
    }

    /**
     * Gets the isApprovalRequiredForExtension property value. Indicates whether approval is required for a user to extend their assignment.
     * @return bool|null
    */
    public function getIsApprovalRequiredForExtension(): ?bool {
        return $this->isApprovalRequiredForExtension;
    }

    /**
     * Gets the isRequestorJustificationRequired property value. Indicates whether the requestor is required to supply a justification in their request.
     * @return bool|null
    */
    public function getIsRequestorJustificationRequired(): ?bool {
        return $this->isRequestorJustificationRequired;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('approvalMode', $this->approvalMode);
        $writer->writeCollectionOfObjectValues('approvalStages', $this->approvalStages);
        $writer->writeBooleanValue('isApprovalRequired', $this->isApprovalRequired);
        $writer->writeBooleanValue('isApprovalRequiredForExtension', $this->isApprovalRequiredForExtension);
        $writer->writeBooleanValue('isRequestorJustificationRequired', $this->isRequestorJustificationRequired);
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
     * Sets the approvalMode property value. One of SingleStage, Serial, Parallel, NoApproval (default). NoApproval is used when isApprovalRequired is false.
     *  @param string|null $value Value to set for the approvalMode property.
    */
    public function setApprovalMode(?string $value ): void {
        $this->approvalMode = $value;
    }

    /**
     * Sets the approvalStages property value. If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
     *  @param array<UnifiedApprovalStage>|null $value Value to set for the approvalStages property.
    */
    public function setApprovalStages(?array $value ): void {
        $this->approvalStages = $value;
    }

    /**
     * Sets the isApprovalRequired property value. Indicates whether approval is required for requests in this policy.
     *  @param bool|null $value Value to set for the isApprovalRequired property.
    */
    public function setIsApprovalRequired(?bool $value ): void {
        $this->isApprovalRequired = $value;
    }

    /**
     * Sets the isApprovalRequiredForExtension property value. Indicates whether approval is required for a user to extend their assignment.
     *  @param bool|null $value Value to set for the isApprovalRequiredForExtension property.
    */
    public function setIsApprovalRequiredForExtension(?bool $value ): void {
        $this->isApprovalRequiredForExtension = $value;
    }

    /**
     * Sets the isRequestorJustificationRequired property value. Indicates whether the requestor is required to supply a justification in their request.
     *  @param bool|null $value Value to set for the isRequestorJustificationRequired property.
    */
    public function setIsRequestorJustificationRequired(?bool $value ): void {
        $this->isRequestorJustificationRequired = $value;
    }

}
