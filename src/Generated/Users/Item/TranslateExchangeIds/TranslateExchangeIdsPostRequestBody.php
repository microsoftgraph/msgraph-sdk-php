<?php

namespace Microsoft\Graph\Generated\Users\Item\TranslateExchangeIds;

use Microsoft\Graph\Generated\Models\ExchangeIdFormat;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TranslateExchangeIdsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new translateExchangeIdsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TranslateExchangeIdsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TranslateExchangeIdsPostRequestBody {
        return new TranslateExchangeIdsPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'inputIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInputIds($val);
            },
            'sourceIdType' => fn(ParseNode $n) => $o->setSourceIdType($n->getEnumValue(ExchangeIdFormat::class)),
            'targetIdType' => fn(ParseNode $n) => $o->setTargetIdType($n->getEnumValue(ExchangeIdFormat::class)),
        ];
    }

    /**
     * Gets the inputIds property value. The InputIds property
     * @return array<string>|null
    */
    public function getInputIds(): ?array {
        $val = $this->getBackingStore()->get('inputIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inputIds'");
    }

    /**
     * Gets the sourceIdType property value. The SourceIdType property
     * @return ExchangeIdFormat|null
    */
    public function getSourceIdType(): ?ExchangeIdFormat {
        $val = $this->getBackingStore()->get('sourceIdType');
        if (is_null($val) || $val instanceof ExchangeIdFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceIdType'");
    }

    /**
     * Gets the targetIdType property value. The TargetIdType property
     * @return ExchangeIdFormat|null
    */
    public function getTargetIdType(): ?ExchangeIdFormat {
        $val = $this->getBackingStore()->get('targetIdType');
        if (is_null($val) || $val instanceof ExchangeIdFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetIdType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('inputIds', $this->getInputIds());
        $writer->writeEnumValue('sourceIdType', $this->getSourceIdType());
        $writer->writeEnumValue('targetIdType', $this->getTargetIdType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the inputIds property value. The InputIds property
     * @param array<string>|null $value Value to set for the inputIds property.
    */
    public function setInputIds(?array $value): void {
        $this->getBackingStore()->set('inputIds', $value);
    }

    /**
     * Sets the sourceIdType property value. The SourceIdType property
     * @param ExchangeIdFormat|null $value Value to set for the sourceIdType property.
    */
    public function setSourceIdType(?ExchangeIdFormat $value): void {
        $this->getBackingStore()->set('sourceIdType', $value);
    }

    /**
     * Sets the targetIdType property value. The TargetIdType property
     * @param ExchangeIdFormat|null $value Value to set for the targetIdType property.
    */
    public function setTargetIdType(?ExchangeIdFormat $value): void {
        $this->getBackingStore()->set('targetIdType', $value);
    }

}
