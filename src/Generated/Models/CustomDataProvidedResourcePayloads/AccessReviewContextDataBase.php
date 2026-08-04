<?php

namespace Microsoft\Graph\Generated\Models\CustomDataProvidedResourcePayloads;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewContextDataBase extends Data implements Parsable 
{
    /**
     * Instantiates a new AccessReviewContextDataBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customDataProvidedResourcePayloads.accessReviewContextDataBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewContextDataBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewContextDataBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.customDataProvidedResourcePayloads.accessReviewContextData': return new AccessReviewContextData();
                case '#microsoft.graph.customDataProvidedResourcePayloads.applyDecisionContextData': return new ApplyDecisionContextData();
            }
        }
        return new AccessReviewContextDataBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'reviewDefinitionId' => fn(ParseNode $n) => $o->setReviewDefinitionId($n->getStringValue()),
            'reviewInstanceId' => fn(ParseNode $n) => $o->setReviewInstanceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the reviewDefinitionId property value. The unique identifier of the access review definition that this data is associated with.
     * @return string|null
    */
    public function getReviewDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('reviewDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewDefinitionId'");
    }

    /**
     * Gets the reviewInstanceId property value. The unique identifier of the access review instance that this data is associated with.
     * @return string|null
    */
    public function getReviewInstanceId(): ?string {
        $val = $this->getBackingStore()->get('reviewInstanceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewInstanceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('reviewDefinitionId', $this->getReviewDefinitionId());
        $writer->writeStringValue('reviewInstanceId', $this->getReviewInstanceId());
    }

    /**
     * Sets the reviewDefinitionId property value. The unique identifier of the access review definition that this data is associated with.
     * @param string|null $value Value to set for the reviewDefinitionId property.
    */
    public function setReviewDefinitionId(?string $value): void {
        $this->getBackingStore()->set('reviewDefinitionId', $value);
    }

    /**
     * Sets the reviewInstanceId property value. The unique identifier of the access review instance that this data is associated with.
     * @param string|null $value Value to set for the reviewInstanceId property.
    */
    public function setReviewInstanceId(?string $value): void {
        $this->getBackingStore()->set('reviewInstanceId', $value);
    }

}
