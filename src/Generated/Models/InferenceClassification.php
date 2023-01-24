<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InferenceClassification extends Entity implements Parsable 
{
    /**
     * Instantiates a new inferenceClassification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InferenceClassification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InferenceClassification {
        return new InferenceClassification();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'overrides' => fn(ParseNode $n) => $o->setOverrides($n->getCollectionOfObjectValues([InferenceClassificationOverride::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the overrides property value. A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
     * @return array<InferenceClassificationOverride>|null
    */
    public function getOverrides(): ?array {
        return $this->getBackingStore()->get('overrides');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('overrides', $this->getOverrides());
    }

    /**
     * Sets the overrides property value. A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
     * @param array<InferenceClassificationOverride>|null $value Value to set for the overrides property.
    */
    public function setOverrides(?array $value): void {
        $this->getBackingStore()->set('overrides', $value);
    }

}
