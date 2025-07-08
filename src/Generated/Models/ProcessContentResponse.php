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

class ProcessContentResponse implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ProcessContentResponse and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProcessContentResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProcessContentResponse {
        return new ProcessContentResponse();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyActions' => fn(ParseNode $n) => $o->setPolicyActions($n->getCollectionOfObjectValues([DlpActionInfo::class, 'createFromDiscriminatorValue'])),
            'processingErrors' => fn(ParseNode $n) => $o->setProcessingErrors($n->getCollectionOfObjectValues([ProcessingError::class, 'createFromDiscriminatorValue'])),
            'protectionScopeState' => fn(ParseNode $n) => $o->setProtectionScopeState($n->getEnumValue(ProtectionScopeState::class)),
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
     * Gets the policyActions property value. A collection of policy actions (like DLP actions) triggered by the processed content. NOTE: Currently, the only policy action supported in for this resource type is restrictAccess.
     * @return array<DlpActionInfo>|null
    */
    public function getPolicyActions(): ?array {
        $val = $this->getBackingStore()->get('policyActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DlpActionInfo::class);
            /** @var array<DlpActionInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyActions'");
    }

    /**
     * Gets the processingErrors property value. A collection of errors encountered during the content processing.
     * @return array<ProcessingError>|null
    */
    public function getProcessingErrors(): ?array {
        $val = $this->getBackingStore()->get('processingErrors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProcessingError::class);
            /** @var array<ProcessingError>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processingErrors'");
    }

    /**
     * Gets the protectionScopeState property value. The protectionScopeState property
     * @return ProtectionScopeState|null
    */
    public function getProtectionScopeState(): ?ProtectionScopeState {
        $val = $this->getBackingStore()->get('protectionScopeState');
        if (is_null($val) || $val instanceof ProtectionScopeState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionScopeState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('policyActions', $this->getPolicyActions());
        $writer->writeCollectionOfObjectValues('processingErrors', $this->getProcessingErrors());
        $writer->writeEnumValue('protectionScopeState', $this->getProtectionScopeState());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyActions property value. A collection of policy actions (like DLP actions) triggered by the processed content. NOTE: Currently, the only policy action supported in for this resource type is restrictAccess.
     * @param array<DlpActionInfo>|null $value Value to set for the policyActions property.
    */
    public function setPolicyActions(?array $value): void {
        $this->getBackingStore()->set('policyActions', $value);
    }

    /**
     * Sets the processingErrors property value. A collection of errors encountered during the content processing.
     * @param array<ProcessingError>|null $value Value to set for the processingErrors property.
    */
    public function setProcessingErrors(?array $value): void {
        $this->getBackingStore()->set('processingErrors', $value);
    }

    /**
     * Sets the protectionScopeState property value. The protectionScopeState property
     * @param ProtectionScopeState|null $value Value to set for the protectionScopeState property.
    */
    public function setProtectionScopeState(?ProtectionScopeState $value): void {
        $this->getBackingStore()->set('protectionScopeState', $value);
    }

}
