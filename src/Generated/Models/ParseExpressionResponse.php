<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ParseExpressionResponse implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new parseExpressionResponse and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParseExpressionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParseExpressionResponse {
        return new ParseExpressionResponse();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the error property value. The error property
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * Gets the evaluationResult property value. The evaluationResult property
     * @return array<string>|null
    */
    public function getEvaluationResult(): ?array {
        return $this->getBackingStore()->get('evaluationResult');
    }

    /**
     * Gets the evaluationSucceeded property value. The evaluationSucceeded property
     * @return bool|null
    */
    public function getEvaluationSucceeded(): ?bool {
        return $this->getBackingStore()->get('evaluationSucceeded');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'evaluationResult' => fn(ParseNode $n) => $o->setEvaluationResult($n->getCollectionOfPrimitiveValues()),
            'evaluationSucceeded' => fn(ParseNode $n) => $o->setEvaluationSucceeded($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'parsedExpression' => fn(ParseNode $n) => $o->setParsedExpression($n->getObjectValue([AttributeMappingSource::class, 'createFromDiscriminatorValue'])),
            'parsingSucceeded' => fn(ParseNode $n) => $o->setParsingSucceeded($n->getBooleanValue()),
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
     * Gets the parsedExpression property value. The parsedExpression property
     * @return AttributeMappingSource|null
    */
    public function getParsedExpression(): ?AttributeMappingSource {
        return $this->getBackingStore()->get('parsedExpression');
    }

    /**
     * Gets the parsingSucceeded property value. The parsingSucceeded property
     * @return bool|null
    */
    public function getParsingSucceeded(): ?bool {
        return $this->getBackingStore()->get('parsingSucceeded');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeCollectionOfPrimitiveValues('evaluationResult', $this->getEvaluationResult());
        $writer->writeBooleanValue('evaluationSucceeded', $this->getEvaluationSucceeded());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('parsedExpression', $this->getParsedExpression());
        $writer->writeBooleanValue('parsingSucceeded', $this->getParsingSucceeded());
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
     * Sets the error property value. The error property
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the evaluationResult property value. The evaluationResult property
     * @param array<string>|null $value Value to set for the evaluationResult property.
    */
    public function setEvaluationResult(?array $value): void {
        $this->getBackingStore()->set('evaluationResult', $value);
    }

    /**
     * Sets the evaluationSucceeded property value. The evaluationSucceeded property
     * @param bool|null $value Value to set for the evaluationSucceeded property.
    */
    public function setEvaluationSucceeded(?bool $value): void {
        $this->getBackingStore()->set('evaluationSucceeded', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the parsedExpression property value. The parsedExpression property
     * @param AttributeMappingSource|null $value Value to set for the parsedExpression property.
    */
    public function setParsedExpression(?AttributeMappingSource $value): void {
        $this->getBackingStore()->set('parsedExpression', $value);
    }

    /**
     * Sets the parsingSucceeded property value. The parsingSucceeded property
     * @param bool|null $value Value to set for the parsingSucceeded property.
    */
    public function setParsingSucceeded(?bool $value): void {
        $this->getBackingStore()->set('parsingSucceeded', $value);
    }

}
