<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\BatchRecordDecisions;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BatchRecordDecisionsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new batchRecordDecisionsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchRecordDecisionsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchRecordDecisionsPostRequestBody {
        return new BatchRecordDecisionsPostRequestBody();
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
     * Gets the decision property value. The decision property
     * @return string|null
    */
    public function getDecision(): ?string {
        $val = $this->getBackingStore()->get('decision');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decision'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'decision' => fn(ParseNode $n) => $o->setDecision($n->getStringValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the justification property value. The justification property
     * @return string|null
    */
    public function getJustification(): ?string {
        $val = $this->getBackingStore()->get('justification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justification'");
    }

    /**
     * Gets the principalId property value. The principalId property
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        $val = $this->getBackingStore()->get('principalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalId'");
    }

    /**
     * Gets the resourceId property value. The resourceId property
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('decision', $this->getDecision());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeStringValue('principalId', $this->getPrincipalId());
        $writer->writeStringValue('resourceId', $this->getResourceId());
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
     * Sets the decision property value. The decision property
     * @param string|null $value Value to set for the decision property.
    */
    public function setDecision(?string $value): void {
        $this->getBackingStore()->set('decision', $value);
    }

    /**
     * Sets the justification property value. The justification property
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the principalId property value. The principalId property
     * @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

    /**
     * Sets the resourceId property value. The resourceId property
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

}
