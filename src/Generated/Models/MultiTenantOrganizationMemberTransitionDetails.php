<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MultiTenantOrganizationMemberTransitionDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MultiTenantOrganizationMemberTransitionDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiTenantOrganizationMemberTransitionDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiTenantOrganizationMemberTransitionDetails {
        return new MultiTenantOrganizationMemberTransitionDetails();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the desiredRole property value. Role of the tenant in the multitenant organization. The possible values are: owner, member, unknownFutureValue.
     * @return MultiTenantOrganizationMemberRole|null
    */
    public function getDesiredRole(): ?MultiTenantOrganizationMemberRole {
        $val = $this->getBackingStore()->get('desiredRole');
        if (is_null($val) || $val instanceof MultiTenantOrganizationMemberRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'desiredRole'");
    }

    /**
     * Gets the desiredState property value. State of the tenant in the multitenant organization currently being processed. The possible values are: pending, active, removed, unknownFutureValue. Read-only.
     * @return MultiTenantOrganizationMemberState|null
    */
    public function getDesiredState(): ?MultiTenantOrganizationMemberState {
        $val = $this->getBackingStore()->get('desiredState');
        if (is_null($val) || $val instanceof MultiTenantOrganizationMemberState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'desiredState'");
    }

    /**
     * Gets the details property value. Details that explain the processing status if any. Read-only.
     * @return string|null
    */
    public function getDetails(): ?string {
        $val = $this->getBackingStore()->get('details');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'desiredRole' => fn(ParseNode $n) => $o->setDesiredRole($n->getEnumValue(MultiTenantOrganizationMemberRole::class)),
            'desiredState' => fn(ParseNode $n) => $o->setDesiredState($n->getEnumValue(MultiTenantOrganizationMemberState::class)),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(MultiTenantOrganizationMemberProcessingStatus::class)),
        ];
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
     * Gets the status property value. Processing state of the asynchronous job. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only.
     * @return MultiTenantOrganizationMemberProcessingStatus|null
    */
    public function getStatus(): ?MultiTenantOrganizationMemberProcessingStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof MultiTenantOrganizationMemberProcessingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('desiredRole', $this->getDesiredRole());
        $writer->writeEnumValue('desiredState', $this->getDesiredState());
        $writer->writeStringValue('details', $this->getDetails());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the desiredRole property value. Role of the tenant in the multitenant organization. The possible values are: owner, member, unknownFutureValue.
     * @param MultiTenantOrganizationMemberRole|null $value Value to set for the desiredRole property.
    */
    public function setDesiredRole(?MultiTenantOrganizationMemberRole $value): void {
        $this->getBackingStore()->set('desiredRole', $value);
    }

    /**
     * Sets the desiredState property value. State of the tenant in the multitenant organization currently being processed. The possible values are: pending, active, removed, unknownFutureValue. Read-only.
     * @param MultiTenantOrganizationMemberState|null $value Value to set for the desiredState property.
    */
    public function setDesiredState(?MultiTenantOrganizationMemberState $value): void {
        $this->getBackingStore()->set('desiredState', $value);
    }

    /**
     * Sets the details property value. Details that explain the processing status if any. Read-only.
     * @param string|null $value Value to set for the details property.
    */
    public function setDetails(?string $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. Processing state of the asynchronous job. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only.
     * @param MultiTenantOrganizationMemberProcessingStatus|null $value Value to set for the status property.
    */
    public function setStatus(?MultiTenantOrganizationMemberProcessingStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
