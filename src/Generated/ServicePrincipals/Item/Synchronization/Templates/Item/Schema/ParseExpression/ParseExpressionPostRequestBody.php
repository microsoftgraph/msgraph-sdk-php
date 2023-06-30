<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\Synchronization\Templates\Item\Schema\ParseExpression;

use Microsoft\Graph\Generated\Models\AttributeDefinition;
use Microsoft\Graph\Generated\Models\ExpressionInputObject;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ParseExpressionPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new parseExpressionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParseExpressionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParseExpressionPostRequestBody {
        return new ParseExpressionPostRequestBody();
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the expression property value. The expression property
     * @return string|null
    */
    public function getExpression(): ?string {
        $val = $this->getBackingStore()->get('expression');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expression'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expression' => fn(ParseNode $n) => $o->setExpression($n->getStringValue()),
            'targetAttributeDefinition' => fn(ParseNode $n) => $o->setTargetAttributeDefinition($n->getObjectValue([AttributeDefinition::class, 'createFromDiscriminatorValue'])),
            'testInputObject' => fn(ParseNode $n) => $o->setTestInputObject($n->getObjectValue([ExpressionInputObject::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the targetAttributeDefinition property value. The targetAttributeDefinition property
     * @return AttributeDefinition|null
    */
    public function getTargetAttributeDefinition(): ?AttributeDefinition {
        $val = $this->getBackingStore()->get('targetAttributeDefinition');
        if (is_null($val) || $val instanceof AttributeDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetAttributeDefinition'");
    }

    /**
     * Gets the testInputObject property value. The testInputObject property
     * @return ExpressionInputObject|null
    */
    public function getTestInputObject(): ?ExpressionInputObject {
        $val = $this->getBackingStore()->get('testInputObject');
        if (is_null($val) || $val instanceof ExpressionInputObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'testInputObject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expression', $this->getExpression());
        $writer->writeObjectValue('targetAttributeDefinition', $this->getTargetAttributeDefinition());
        $writer->writeObjectValue('testInputObject', $this->getTestInputObject());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the expression property value. The expression property
     * @param string|null $value Value to set for the expression property.
    */
    public function setExpression(?string $value): void {
        $this->getBackingStore()->set('expression', $value);
    }

    /**
     * Sets the targetAttributeDefinition property value. The targetAttributeDefinition property
     * @param AttributeDefinition|null $value Value to set for the targetAttributeDefinition property.
    */
    public function setTargetAttributeDefinition(?AttributeDefinition $value): void {
        $this->getBackingStore()->set('targetAttributeDefinition', $value);
    }

    /**
     * Sets the testInputObject property value. The testInputObject property
     * @param ExpressionInputObject|null $value Value to set for the testInputObject property.
    */
    public function setTestInputObject(?ExpressionInputObject $value): void {
        $this->getBackingStore()->set('testInputObject', $value);
    }

}
