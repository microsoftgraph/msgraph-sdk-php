<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageAssignmentRequestRequirements implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AccessPackageAssignmentRequestRequirements and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequestRequirements
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequestRequirements {
        return new AccessPackageAssignmentRequestRequirements();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the allowCustomAssignmentSchedule property value. Indicates whether the requestor is allowed to set a custom schedule.
     * @return bool|null
    */
    public function getAllowCustomAssignmentSchedule(): ?bool {
        $val = $this->getBackingStore()->get('allowCustomAssignmentSchedule');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCustomAssignmentSchedule'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowCustomAssignmentSchedule' => fn(ParseNode $n) => $o->setAllowCustomAssignmentSchedule($n->getBooleanValue()),
            'isApprovalRequiredForAdd' => fn(ParseNode $n) => $o->setIsApprovalRequiredForAdd($n->getBooleanValue()),
            'isApprovalRequiredForUpdate' => fn(ParseNode $n) => $o->setIsApprovalRequiredForUpdate($n->getBooleanValue()),
            'isRequestorJustificationRequired' => fn(ParseNode $n) => $o->setIsRequestorJustificationRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyDescription' => fn(ParseNode $n) => $o->setPolicyDescription($n->getStringValue()),
            'policyDisplayName' => fn(ParseNode $n) => $o->setPolicyDisplayName($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'questions' => fn(ParseNode $n) => $o->setQuestions($n->getCollectionOfObjectValues([AccessPackageQuestion::class, 'createFromDiscriminatorValue'])),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([EntitlementManagementSchedule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isApprovalRequiredForAdd property value. Indicates whether a request to add must be approved by an approver.
     * @return bool|null
    */
    public function getIsApprovalRequiredForAdd(): ?bool {
        $val = $this->getBackingStore()->get('isApprovalRequiredForAdd');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApprovalRequiredForAdd'");
    }

    /**
     * Gets the isApprovalRequiredForUpdate property value. Indicates whether a request to update must be approved by an approver.
     * @return bool|null
    */
    public function getIsApprovalRequiredForUpdate(): ?bool {
        $val = $this->getBackingStore()->get('isApprovalRequiredForUpdate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApprovalRequiredForUpdate'");
    }

    /**
     * Gets the isRequestorJustificationRequired property value. Indicates whether requestors must justify requesting access to an access package.
     * @return bool|null
    */
    public function getIsRequestorJustificationRequired(): ?bool {
        $val = $this->getBackingStore()->get('isRequestorJustificationRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequestorJustificationRequired'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the policyDescription property value. The description of the policy that the user is trying to request access using.
     * @return string|null
    */
    public function getPolicyDescription(): ?string {
        $val = $this->getBackingStore()->get('policyDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyDescription'");
    }

    /**
     * Gets the policyDisplayName property value. The display name of the policy that the user is trying to request access using.
     * @return string|null
    */
    public function getPolicyDisplayName(): ?string {
        $val = $this->getBackingStore()->get('policyDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyDisplayName'");
    }

    /**
     * Gets the policyId property value. The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the questions property value. The questions property
     * @return array<AccessPackageQuestion>|null
    */
    public function getQuestions(): ?array {
        $val = $this->getBackingStore()->get('questions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageQuestion::class);
            /** @var array<AccessPackageQuestion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'questions'");
    }

    /**
     * Gets the schedule property value. Schedule restrictions enforced, if any.
     * @return EntitlementManagementSchedule|null
    */
    public function getSchedule(): ?EntitlementManagementSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof EntitlementManagementSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowCustomAssignmentSchedule', $this->getAllowCustomAssignmentSchedule());
        $writer->writeBooleanValue('isApprovalRequiredForAdd', $this->getIsApprovalRequiredForAdd());
        $writer->writeBooleanValue('isApprovalRequiredForUpdate', $this->getIsApprovalRequiredForUpdate());
        $writer->writeBooleanValue('isRequestorJustificationRequired', $this->getIsRequestorJustificationRequired());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyDescription', $this->getPolicyDescription());
        $writer->writeStringValue('policyDisplayName', $this->getPolicyDisplayName());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeCollectionOfObjectValues('questions', $this->getQuestions());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowCustomAssignmentSchedule property value. Indicates whether the requestor is allowed to set a custom schedule.
     * @param bool|null $value Value to set for the allowCustomAssignmentSchedule property.
    */
    public function setAllowCustomAssignmentSchedule(?bool $value): void {
        $this->getBackingStore()->set('allowCustomAssignmentSchedule', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isApprovalRequiredForAdd property value. Indicates whether a request to add must be approved by an approver.
     * @param bool|null $value Value to set for the isApprovalRequiredForAdd property.
    */
    public function setIsApprovalRequiredForAdd(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequiredForAdd', $value);
    }

    /**
     * Sets the isApprovalRequiredForUpdate property value. Indicates whether a request to update must be approved by an approver.
     * @param bool|null $value Value to set for the isApprovalRequiredForUpdate property.
    */
    public function setIsApprovalRequiredForUpdate(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequiredForUpdate', $value);
    }

    /**
     * Sets the isRequestorJustificationRequired property value. Indicates whether requestors must justify requesting access to an access package.
     * @param bool|null $value Value to set for the isRequestorJustificationRequired property.
    */
    public function setIsRequestorJustificationRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequestorJustificationRequired', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyDescription property value. The description of the policy that the user is trying to request access using.
     * @param string|null $value Value to set for the policyDescription property.
    */
    public function setPolicyDescription(?string $value): void {
        $this->getBackingStore()->set('policyDescription', $value);
    }

    /**
     * Sets the policyDisplayName property value. The display name of the policy that the user is trying to request access using.
     * @param string|null $value Value to set for the policyDisplayName property.
    */
    public function setPolicyDisplayName(?string $value): void {
        $this->getBackingStore()->set('policyDisplayName', $value);
    }

    /**
     * Sets the policyId property value. The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the questions property value. The questions property
     * @param array<AccessPackageQuestion>|null $value Value to set for the questions property.
    */
    public function setQuestions(?array $value): void {
        $this->getBackingStore()->set('questions', $value);
    }

    /**
     * Sets the schedule property value. Schedule restrictions enforced, if any.
     * @param EntitlementManagementSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?EntitlementManagementSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

}
