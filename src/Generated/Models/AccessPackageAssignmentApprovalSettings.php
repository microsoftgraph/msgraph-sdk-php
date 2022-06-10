<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentApprovalSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isApprovalRequiredForAdd If false, then approval is not required for new requests in this policy.
    */
    private ?bool $isApprovalRequiredForAdd = null;
    
    /**
     * @var bool|null $isApprovalRequiredForUpdate If false, then approval is not required for updates to requests in this policy.
    */
    private ?bool $isApprovalRequiredForUpdate = null;
    
    /**
     * @var array<AccessPackageApprovalStage>|null $stages If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required.
    */
    private ?array $stages = null;
    
    /**
     * Instantiates a new accessPackageAssignmentApprovalSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentApprovalSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentApprovalSettings {
        return new AccessPackageAssignmentApprovalSettings();
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
            'isApprovalRequiredForAdd' => function (ParseNode $n) use ($o) { $o->setIsApprovalRequiredForAdd($n->getBooleanValue()); },
            'isApprovalRequiredForUpdate' => function (ParseNode $n) use ($o) { $o->setIsApprovalRequiredForUpdate($n->getBooleanValue()); },
            'stages' => function (ParseNode $n) use ($o) { $o->setStages($n->getCollectionOfObjectValues(array(AccessPackageApprovalStage::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isApprovalRequiredForAdd property value. If false, then approval is not required for new requests in this policy.
     * @return bool|null
    */
    public function getIsApprovalRequiredForAdd(): ?bool {
        return $this->isApprovalRequiredForAdd;
    }

    /**
     * Gets the isApprovalRequiredForUpdate property value. If false, then approval is not required for updates to requests in this policy.
     * @return bool|null
    */
    public function getIsApprovalRequiredForUpdate(): ?bool {
        return $this->isApprovalRequiredForUpdate;
    }

    /**
     * Gets the stages property value. If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required.
     * @return array<AccessPackageApprovalStage>|null
    */
    public function getStages(): ?array {
        return $this->stages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isApprovalRequiredForAdd', $this->isApprovalRequiredForAdd);
        $writer->writeBooleanValue('isApprovalRequiredForUpdate', $this->isApprovalRequiredForUpdate);
        $writer->writeCollectionOfObjectValues('stages', $this->stages);
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
     * Sets the isApprovalRequiredForAdd property value. If false, then approval is not required for new requests in this policy.
     *  @param bool|null $value Value to set for the isApprovalRequiredForAdd property.
    */
    public function setIsApprovalRequiredForAdd(?bool $value ): void {
        $this->isApprovalRequiredForAdd = $value;
    }

    /**
     * Sets the isApprovalRequiredForUpdate property value. If false, then approval is not required for updates to requests in this policy.
     *  @param bool|null $value Value to set for the isApprovalRequiredForUpdate property.
    */
    public function setIsApprovalRequiredForUpdate(?bool $value ): void {
        $this->isApprovalRequiredForUpdate = $value;
    }

    /**
     * Sets the stages property value. If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required.
     *  @param array<AccessPackageApprovalStage>|null $value Value to set for the stages property.
    */
    public function setStages(?array $value ): void {
        $this->stages = $value;
    }

}
