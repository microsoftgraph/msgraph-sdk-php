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

class ApprovalSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new approvalSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the approvalMode property value. One of SingleStage, Serial, Parallel, NoApproval (default). NoApproval is used when isApprovalRequired is false.
     * @return string|null
    */
    public function getApprovalMode(): ?string {
        $val = $this->getBackingStore()->get('approvalMode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalMode'");
    }

    /**
     * Gets the approvalStages property value. If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
     * @return array<UnifiedApprovalStage>|null
    */
    public function getApprovalStages(): ?array {
        $val = $this->getBackingStore()->get('approvalStages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedApprovalStage::class);
            /** @var array<UnifiedApprovalStage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalStages'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
            'approvalMode' => fn(ParseNode $n) => $o->setApprovalMode($n->getStringValue()),
            'approvalStages' => fn(ParseNode $n) => $o->setApprovalStages($n->getCollectionOfObjectValues([UnifiedApprovalStage::class, 'createFromDiscriminatorValue'])),
            'isApprovalRequired' => fn(ParseNode $n) => $o->setIsApprovalRequired($n->getBooleanValue()),
            'isApprovalRequiredForExtension' => fn(ParseNode $n) => $o->setIsApprovalRequiredForExtension($n->getBooleanValue()),
            'isRequestorJustificationRequired' => fn(ParseNode $n) => $o->setIsRequestorJustificationRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isApprovalRequired property value. Indicates whether approval is required for requests in this policy.
     * @return bool|null
    */
    public function getIsApprovalRequired(): ?bool {
        $val = $this->getBackingStore()->get('isApprovalRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApprovalRequired'");
    }

    /**
     * Gets the isApprovalRequiredForExtension property value. Indicates whether approval is required for a user to extend their assignment.
     * @return bool|null
    */
    public function getIsApprovalRequiredForExtension(): ?bool {
        $val = $this->getBackingStore()->get('isApprovalRequiredForExtension');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApprovalRequiredForExtension'");
    }

    /**
     * Gets the isRequestorJustificationRequired property value. Indicates whether the requestor is required to supply a justification in their request.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('approvalMode', $this->getApprovalMode());
        $writer->writeCollectionOfObjectValues('approvalStages', $this->getApprovalStages());
        $writer->writeBooleanValue('isApprovalRequired', $this->getIsApprovalRequired());
        $writer->writeBooleanValue('isApprovalRequiredForExtension', $this->getIsApprovalRequiredForExtension());
        $writer->writeBooleanValue('isRequestorJustificationRequired', $this->getIsRequestorJustificationRequired());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the approvalMode property value. One of SingleStage, Serial, Parallel, NoApproval (default). NoApproval is used when isApprovalRequired is false.
     * @param string|null $value Value to set for the approvalMode property.
    */
    public function setApprovalMode(?string $value): void {
        $this->getBackingStore()->set('approvalMode', $value);
    }

    /**
     * Sets the approvalStages property value. If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
     * @param array<UnifiedApprovalStage>|null $value Value to set for the approvalStages property.
    */
    public function setApprovalStages(?array $value): void {
        $this->getBackingStore()->set('approvalStages', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isApprovalRequired property value. Indicates whether approval is required for requests in this policy.
     * @param bool|null $value Value to set for the isApprovalRequired property.
    */
    public function setIsApprovalRequired(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequired', $value);
    }

    /**
     * Sets the isApprovalRequiredForExtension property value. Indicates whether approval is required for a user to extend their assignment.
     * @param bool|null $value Value to set for the isApprovalRequiredForExtension property.
    */
    public function setIsApprovalRequiredForExtension(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequiredForExtension', $value);
    }

    /**
     * Sets the isRequestorJustificationRequired property value. Indicates whether the requestor is required to supply a justification in their request.
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

}
