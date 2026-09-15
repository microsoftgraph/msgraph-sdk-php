<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\BatchApplyCustomDataProvidedResourceDecisions;

use Microsoft\Graph\Generated\Models\AccessReviewInstanceDecisionItemApplyResult;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BatchApplyCustomDataProvidedResourceDecisionsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new BatchApplyCustomDataProvidedResourceDecisionsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchApplyCustomDataProvidedResourceDecisionsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchApplyCustomDataProvidedResourceDecisionsPostRequestBody {
        return new BatchApplyCustomDataProvidedResourceDecisionsPostRequestBody();
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
     * Gets the applyDescription property value. The applyDescription property
     * @return string|null
    */
    public function getApplyDescription(): ?string {
        $val = $this->getBackingStore()->get('applyDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applyDescription'");
    }

    /**
     * Gets the applyResult property value. The applyResult property
     * @return AccessReviewInstanceDecisionItemApplyResult|null
    */
    public function getApplyResult(): ?AccessReviewInstanceDecisionItemApplyResult {
        $val = $this->getBackingStore()->get('applyResult');
        if (is_null($val) || $val instanceof AccessReviewInstanceDecisionItemApplyResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applyResult'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the customDataProvidedResourceId property value. The customDataProvidedResourceId property
     * @return string|null
    */
    public function getCustomDataProvidedResourceId(): ?string {
        $val = $this->getBackingStore()->get('customDataProvidedResourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customDataProvidedResourceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applyDescription' => fn(ParseNode $n) => $o->setApplyDescription($n->getStringValue()),
            'applyResult' => fn(ParseNode $n) => $o->setApplyResult($n->getEnumValue(AccessReviewInstanceDecisionItemApplyResult::class)),
            'customDataProvidedResourceId' => fn(ParseNode $n) => $o->setCustomDataProvidedResourceId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applyDescription', $this->getApplyDescription());
        $writer->writeEnumValue('applyResult', $this->getApplyResult());
        $writer->writeStringValue('customDataProvidedResourceId', $this->getCustomDataProvidedResourceId());
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
     * Sets the applyDescription property value. The applyDescription property
     * @param string|null $value Value to set for the applyDescription property.
    */
    public function setApplyDescription(?string $value): void {
        $this->getBackingStore()->set('applyDescription', $value);
    }

    /**
     * Sets the applyResult property value. The applyResult property
     * @param AccessReviewInstanceDecisionItemApplyResult|null $value Value to set for the applyResult property.
    */
    public function setApplyResult(?AccessReviewInstanceDecisionItemApplyResult $value): void {
        $this->getBackingStore()->set('applyResult', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the customDataProvidedResourceId property value. The customDataProvidedResourceId property
     * @param string|null $value Value to set for the customDataProvidedResourceId property.
    */
    public function setCustomDataProvidedResourceId(?string $value): void {
        $this->getBackingStore()->set('customDataProvidedResourceId', $value);
    }

}
