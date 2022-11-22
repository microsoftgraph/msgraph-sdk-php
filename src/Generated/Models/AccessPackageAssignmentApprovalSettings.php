<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessPackageAssignmentApprovalSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessPackageAssignmentApprovalSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isApprovalRequiredForAdd' => fn(ParseNode $n) => $o->setIsApprovalRequiredForAdd($n->getBooleanValue()),
            'isApprovalRequiredForUpdate' => fn(ParseNode $n) => $o->setIsApprovalRequiredForUpdate($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'stages' => fn(ParseNode $n) => $o->setStages($n->getCollectionOfObjectValues([AccessPackageApprovalStage::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isApprovalRequiredForAdd property value. If false, then approval is not required for new requests in this policy.
     * @return bool|null
    */
    public function getIsApprovalRequiredForAdd(): ?bool {
        return $this->getBackingStore()->get('isApprovalRequiredForAdd');
    }

    /**
     * Gets the isApprovalRequiredForUpdate property value. If false, then approval is not required for updates to requests in this policy.
     * @return bool|null
    */
    public function getIsApprovalRequiredForUpdate(): ?bool {
        return $this->getBackingStore()->get('isApprovalRequiredForUpdate');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the stages property value. If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required.
     * @return array<AccessPackageApprovalStage>|null
    */
    public function getStages(): ?array {
        return $this->getBackingStore()->get('stages');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isApprovalRequiredForAdd', $this->getIsApprovalRequiredForAdd());
        $writer->writeBooleanValue('isApprovalRequiredForUpdate', $this->getIsApprovalRequiredForUpdate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('stages', $this->getStages());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isApprovalRequiredForAdd property value. If false, then approval is not required for new requests in this policy.
     *  @param bool|null $value Value to set for the isApprovalRequiredForAdd property.
    */
    public function setIsApprovalRequiredForAdd(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequiredForAdd', $value);
    }

    /**
     * Sets the isApprovalRequiredForUpdate property value. If false, then approval is not required for updates to requests in this policy.
     *  @param bool|null $value Value to set for the isApprovalRequiredForUpdate property.
    */
    public function setIsApprovalRequiredForUpdate(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequiredForUpdate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the stages property value. If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required.
     *  @param array<AccessPackageApprovalStage>|null $value Value to set for the stages property.
    */
    public function setStages(?array $value): void {
        $this->getBackingStore()->set('stages', $value);
    }

}
