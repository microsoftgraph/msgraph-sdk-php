<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessPackageAssignmentRequestorSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessPackageAssignmentRequestorSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequestorSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequestorSettings {
        return new AccessPackageAssignmentRequestorSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowCustomAssignmentSchedule property value. If false, the requestor is not permitted to include a schedule in their request.
     * @return bool|null
    */
    public function getAllowCustomAssignmentSchedule(): ?bool {
        return $this->getBackingStore()->get('allowCustomAssignmentSchedule');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enableOnBehalfRequestorsToAddAccess property value. If true, allows on-behalf-of requestors to create a request to add access for another principal.
     * @return bool|null
    */
    public function getEnableOnBehalfRequestorsToAddAccess(): ?bool {
        return $this->getBackingStore()->get('enableOnBehalfRequestorsToAddAccess');
    }

    /**
     * Gets the enableOnBehalfRequestorsToRemoveAccess property value. If true, allows on-behalf-of requestors to create a request to remove access for another principal.
     * @return bool|null
    */
    public function getEnableOnBehalfRequestorsToRemoveAccess(): ?bool {
        return $this->getBackingStore()->get('enableOnBehalfRequestorsToRemoveAccess');
    }

    /**
     * Gets the enableOnBehalfRequestorsToUpdateAccess property value. If true, allows on-behalf-of requestors to create a request to update access for another principal.
     * @return bool|null
    */
    public function getEnableOnBehalfRequestorsToUpdateAccess(): ?bool {
        return $this->getBackingStore()->get('enableOnBehalfRequestorsToUpdateAccess');
    }

    /**
     * Gets the enableTargetsToSelfAddAccess property value. If true, allows requestors to create a request to add access for themselves.
     * @return bool|null
    */
    public function getEnableTargetsToSelfAddAccess(): ?bool {
        return $this->getBackingStore()->get('enableTargetsToSelfAddAccess');
    }

    /**
     * Gets the enableTargetsToSelfRemoveAccess property value. If true, allows requestors to create a request to remove their access.
     * @return bool|null
    */
    public function getEnableTargetsToSelfRemoveAccess(): ?bool {
        return $this->getBackingStore()->get('enableTargetsToSelfRemoveAccess');
    }

    /**
     * Gets the enableTargetsToSelfUpdateAccess property value. If true, allows requestors to create a request to update their access.
     * @return bool|null
    */
    public function getEnableTargetsToSelfUpdateAccess(): ?bool {
        return $this->getBackingStore()->get('enableTargetsToSelfUpdateAccess');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowCustomAssignmentSchedule' => fn(ParseNode $n) => $o->setAllowCustomAssignmentSchedule($n->getBooleanValue()),
            'enableOnBehalfRequestorsToAddAccess' => fn(ParseNode $n) => $o->setEnableOnBehalfRequestorsToAddAccess($n->getBooleanValue()),
            'enableOnBehalfRequestorsToRemoveAccess' => fn(ParseNode $n) => $o->setEnableOnBehalfRequestorsToRemoveAccess($n->getBooleanValue()),
            'enableOnBehalfRequestorsToUpdateAccess' => fn(ParseNode $n) => $o->setEnableOnBehalfRequestorsToUpdateAccess($n->getBooleanValue()),
            'enableTargetsToSelfAddAccess' => fn(ParseNode $n) => $o->setEnableTargetsToSelfAddAccess($n->getBooleanValue()),
            'enableTargetsToSelfRemoveAccess' => fn(ParseNode $n) => $o->setEnableTargetsToSelfRemoveAccess($n->getBooleanValue()),
            'enableTargetsToSelfUpdateAccess' => fn(ParseNode $n) => $o->setEnableTargetsToSelfUpdateAccess($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onBehalfRequestors' => fn(ParseNode $n) => $o->setOnBehalfRequestors($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the onBehalfRequestors property value. The principals who can request on-behalf-of others.
     * @return array<SubjectSet>|null
    */
    public function getOnBehalfRequestors(): ?array {
        return $this->getBackingStore()->get('onBehalfRequestors');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowCustomAssignmentSchedule', $this->getAllowCustomAssignmentSchedule());
        $writer->writeBooleanValue('enableOnBehalfRequestorsToAddAccess', $this->getEnableOnBehalfRequestorsToAddAccess());
        $writer->writeBooleanValue('enableOnBehalfRequestorsToRemoveAccess', $this->getEnableOnBehalfRequestorsToRemoveAccess());
        $writer->writeBooleanValue('enableOnBehalfRequestorsToUpdateAccess', $this->getEnableOnBehalfRequestorsToUpdateAccess());
        $writer->writeBooleanValue('enableTargetsToSelfAddAccess', $this->getEnableTargetsToSelfAddAccess());
        $writer->writeBooleanValue('enableTargetsToSelfRemoveAccess', $this->getEnableTargetsToSelfRemoveAccess());
        $writer->writeBooleanValue('enableTargetsToSelfUpdateAccess', $this->getEnableTargetsToSelfUpdateAccess());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('onBehalfRequestors', $this->getOnBehalfRequestors());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowCustomAssignmentSchedule property value. If false, the requestor is not permitted to include a schedule in their request.
     * @param bool|null $value Value to set for the allowCustomAssignmentSchedule property.
    */
    public function setAllowCustomAssignmentSchedule(?bool $value): void {
        $this->getBackingStore()->set('allowCustomAssignmentSchedule', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enableOnBehalfRequestorsToAddAccess property value. If true, allows on-behalf-of requestors to create a request to add access for another principal.
     * @param bool|null $value Value to set for the enableOnBehalfRequestorsToAddAccess property.
    */
    public function setEnableOnBehalfRequestorsToAddAccess(?bool $value): void {
        $this->getBackingStore()->set('enableOnBehalfRequestorsToAddAccess', $value);
    }

    /**
     * Sets the enableOnBehalfRequestorsToRemoveAccess property value. If true, allows on-behalf-of requestors to create a request to remove access for another principal.
     * @param bool|null $value Value to set for the enableOnBehalfRequestorsToRemoveAccess property.
    */
    public function setEnableOnBehalfRequestorsToRemoveAccess(?bool $value): void {
        $this->getBackingStore()->set('enableOnBehalfRequestorsToRemoveAccess', $value);
    }

    /**
     * Sets the enableOnBehalfRequestorsToUpdateAccess property value. If true, allows on-behalf-of requestors to create a request to update access for another principal.
     * @param bool|null $value Value to set for the enableOnBehalfRequestorsToUpdateAccess property.
    */
    public function setEnableOnBehalfRequestorsToUpdateAccess(?bool $value): void {
        $this->getBackingStore()->set('enableOnBehalfRequestorsToUpdateAccess', $value);
    }

    /**
     * Sets the enableTargetsToSelfAddAccess property value. If true, allows requestors to create a request to add access for themselves.
     * @param bool|null $value Value to set for the enableTargetsToSelfAddAccess property.
    */
    public function setEnableTargetsToSelfAddAccess(?bool $value): void {
        $this->getBackingStore()->set('enableTargetsToSelfAddAccess', $value);
    }

    /**
     * Sets the enableTargetsToSelfRemoveAccess property value. If true, allows requestors to create a request to remove their access.
     * @param bool|null $value Value to set for the enableTargetsToSelfRemoveAccess property.
    */
    public function setEnableTargetsToSelfRemoveAccess(?bool $value): void {
        $this->getBackingStore()->set('enableTargetsToSelfRemoveAccess', $value);
    }

    /**
     * Sets the enableTargetsToSelfUpdateAccess property value. If true, allows requestors to create a request to update their access.
     * @param bool|null $value Value to set for the enableTargetsToSelfUpdateAccess property.
    */
    public function setEnableTargetsToSelfUpdateAccess(?bool $value): void {
        $this->getBackingStore()->set('enableTargetsToSelfUpdateAccess', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onBehalfRequestors property value. The principals who can request on-behalf-of others.
     * @param array<SubjectSet>|null $value Value to set for the onBehalfRequestors property.
    */
    public function setOnBehalfRequestors(?array $value): void {
        $this->getBackingStore()->set('onBehalfRequestors', $value);
    }

}
