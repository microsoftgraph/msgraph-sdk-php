<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentRequestRequirements implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $allowCustomAssignmentSchedule Indicates whether the requestor is allowed to set a custom schedule. */
    private ?bool $allowCustomAssignmentSchedule = null;
    
    /** @var bool|null $isApprovalRequiredForAdd Indicates whether a request to add must be approved by an approver. */
    private ?bool $isApprovalRequiredForAdd = null;
    
    /** @var bool|null $isApprovalRequiredForUpdate Indicates whether a request to update must be approved by an approver. */
    private ?bool $isApprovalRequiredForUpdate = null;
    
    /** @var string|null $policyDescription The description of the policy that the user is trying to request access using. */
    private ?string $policyDescription = null;
    
    /** @var string|null $policyDisplayName The display name of the policy that the user is trying to request access using. */
    private ?string $policyDisplayName = null;
    
    /** @var string|null $policyId The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request. */
    private ?string $policyId = null;
    
    /** @var EntitlementManagementSchedule|null $schedule Schedule restrictions enforced, if any. */
    private ?EntitlementManagementSchedule $schedule = null;
    
    /**
     * Instantiates a new accessPackageAssignmentRequestRequirements and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequestRequirements
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequestRequirements {
        return new AccessPackageAssignmentRequestRequirements();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowCustomAssignmentSchedule property value. Indicates whether the requestor is allowed to set a custom schedule.
     * @return bool|null
    */
    public function getAllowCustomAssignmentSchedule(): ?bool {
        return $this->allowCustomAssignmentSchedule;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'allowCustomAssignmentSchedule' => function (self $o, ParseNode $n) { $o->setAllowCustomAssignmentSchedule($n->getBooleanValue()); },
            'isApprovalRequiredForAdd' => function (self $o, ParseNode $n) { $o->setIsApprovalRequiredForAdd($n->getBooleanValue()); },
            'isApprovalRequiredForUpdate' => function (self $o, ParseNode $n) { $o->setIsApprovalRequiredForUpdate($n->getBooleanValue()); },
            'policyDescription' => function (self $o, ParseNode $n) { $o->setPolicyDescription($n->getStringValue()); },
            'policyDisplayName' => function (self $o, ParseNode $n) { $o->setPolicyDisplayName($n->getStringValue()); },
            'policyId' => function (self $o, ParseNode $n) { $o->setPolicyId($n->getStringValue()); },
            'schedule' => function (self $o, ParseNode $n) { $o->setSchedule($n->getObjectValue(EntitlementManagementSchedule::class)); },
        ];
    }

    /**
     * Gets the isApprovalRequiredForAdd property value. Indicates whether a request to add must be approved by an approver.
     * @return bool|null
    */
    public function getIsApprovalRequiredForAdd(): ?bool {
        return $this->isApprovalRequiredForAdd;
    }

    /**
     * Gets the isApprovalRequiredForUpdate property value. Indicates whether a request to update must be approved by an approver.
     * @return bool|null
    */
    public function getIsApprovalRequiredForUpdate(): ?bool {
        return $this->isApprovalRequiredForUpdate;
    }

    /**
     * Gets the policyDescription property value. The description of the policy that the user is trying to request access using.
     * @return string|null
    */
    public function getPolicyDescription(): ?string {
        return $this->policyDescription;
    }

    /**
     * Gets the policyDisplayName property value. The display name of the policy that the user is trying to request access using.
     * @return string|null
    */
    public function getPolicyDisplayName(): ?string {
        return $this->policyDisplayName;
    }

    /**
     * Gets the policyId property value. The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->policyId;
    }

    /**
     * Gets the schedule property value. Schedule restrictions enforced, if any.
     * @return EntitlementManagementSchedule|null
    */
    public function getSchedule(): ?EntitlementManagementSchedule {
        return $this->schedule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowCustomAssignmentSchedule', $this->allowCustomAssignmentSchedule);
        $writer->writeBooleanValue('isApprovalRequiredForAdd', $this->isApprovalRequiredForAdd);
        $writer->writeBooleanValue('isApprovalRequiredForUpdate', $this->isApprovalRequiredForUpdate);
        $writer->writeStringValue('policyDescription', $this->policyDescription);
        $writer->writeStringValue('policyDisplayName', $this->policyDisplayName);
        $writer->writeStringValue('policyId', $this->policyId);
        $writer->writeObjectValue('schedule', $this->schedule);
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
     * Sets the allowCustomAssignmentSchedule property value. Indicates whether the requestor is allowed to set a custom schedule.
     *  @param bool|null $value Value to set for the allowCustomAssignmentSchedule property.
    */
    public function setAllowCustomAssignmentSchedule(?bool $value ): void {
        $this->allowCustomAssignmentSchedule = $value;
    }

    /**
     * Sets the isApprovalRequiredForAdd property value. Indicates whether a request to add must be approved by an approver.
     *  @param bool|null $value Value to set for the isApprovalRequiredForAdd property.
    */
    public function setIsApprovalRequiredForAdd(?bool $value ): void {
        $this->isApprovalRequiredForAdd = $value;
    }

    /**
     * Sets the isApprovalRequiredForUpdate property value. Indicates whether a request to update must be approved by an approver.
     *  @param bool|null $value Value to set for the isApprovalRequiredForUpdate property.
    */
    public function setIsApprovalRequiredForUpdate(?bool $value ): void {
        $this->isApprovalRequiredForUpdate = $value;
    }

    /**
     * Sets the policyDescription property value. The description of the policy that the user is trying to request access using.
     *  @param string|null $value Value to set for the policyDescription property.
    */
    public function setPolicyDescription(?string $value ): void {
        $this->policyDescription = $value;
    }

    /**
     * Sets the policyDisplayName property value. The display name of the policy that the user is trying to request access using.
     *  @param string|null $value Value to set for the policyDisplayName property.
    */
    public function setPolicyDisplayName(?string $value ): void {
        $this->policyDisplayName = $value;
    }

    /**
     * Sets the policyId property value. The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
     *  @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value ): void {
        $this->policyId = $value;
    }

    /**
     * Sets the schedule property value. Schedule restrictions enforced, if any.
     *  @param EntitlementManagementSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?EntitlementManagementSchedule $value ): void {
        $this->schedule = $value;
    }

}
