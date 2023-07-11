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
     * Gets the error property value. Error details, if expression evaluation resulted in an error.
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof PublicError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * Gets the evaluationResult property value. A collection of values produced by the evaluation of the expression.
     * @return array<string>|null
    */
    public function getEvaluationResult(): ?array {
        $val = $this->getBackingStore()->get('evaluationResult');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluationResult'");
    }

    /**
     * Gets the evaluationSucceeded property value. true if the evaluation was successful.
     * @return bool|null
    */
    public function getEvaluationSucceeded(): ?bool {
        $val = $this->getBackingStore()->get('evaluationSucceeded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluationSucceeded'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'evaluationResult' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEvaluationResult($val);
            },
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
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the parsedExpression property value. An attributeMappingSource object representing the parsed expression.
     * @return AttributeMappingSource|null
    */
    public function getParsedExpression(): ?AttributeMappingSource {
        $val = $this->getBackingStore()->get('parsedExpression');
        if (is_null($val) || $val instanceof AttributeMappingSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parsedExpression'");
    }

    /**
     * Gets the parsingSucceeded property value. true if the expression was parsed successfully.
     * @return bool|null
    */
    public function getParsingSucceeded(): ?bool {
        $val = $this->getBackingStore()->get('parsingSucceeded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parsingSucceeded'");
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
     * Sets the error property value. Error details, if expression evaluation resulted in an error.
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the evaluationResult property value. A collection of values produced by the evaluation of the expression.
     * @param array<string>|null $value Value to set for the evaluationResult property.
    */
    public function setEvaluationResult(?array $value): void {
        $this->getBackingStore()->set('evaluationResult', $value);
    }

    /**
     * Sets the evaluationSucceeded property value. true if the evaluation was successful.
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
     * Sets the parsedExpression property value. An attributeMappingSource object representing the parsed expression.
     * @param AttributeMappingSource|null $value Value to set for the parsedExpression property.
    */
    public function setParsedExpression(?AttributeMappingSource $value): void {
        $this->getBackingStore()->set('parsedExpression', $value);
    }

    /**
     * Sets the parsingSucceeded property value. true if the expression was parsed successfully.
     * @param bool|null $value Value to set for the parsingSucceeded property.
    */
    public function setParsingSucceeded(?bool $value): void {
        $this->getBackingStore()->set('parsingSucceeded', $value);
    }

}
