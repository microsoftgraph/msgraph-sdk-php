<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Graph\Generated\Models\ReferenceNumeric;
use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Composed type wrapper for classes float, ReferenceNumeric, string
*/
class NetworkInfo_sentQualityEventRatio implements BackedModel, ComposedTypeWrapper, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new NetworkInfo_sentQualityEventRatio and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkInfo_sentQualityEventRatio
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkInfo_sentQualityEventRatio {
        $result = new NetworkInfo_sentQualityEventRatio();
        if ($parseNode->getEnumValue(ReferenceNumeric::class) !== null) {
            $result->setReferenceNumeric($parseNode->getEnumValue(ReferenceNumeric::class));
        } else if ($parseNode->getFloatValue() !== null) {
            $result->setFloat($parseNode->getFloatValue());
        } else if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        }
        return $result;
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
        return [];
    }

    /**
     * Gets the float property value. Composed type representation for type float
     * @return float|null
    */
    public function getFloat(): ?float {
        $val = $this->getBackingStore()->get('float');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'float'");
    }

    /**
     * Gets the ReferenceNumeric property value. Composed type representation for type ReferenceNumeric
     * @return ReferenceNumeric|null
    */
    public function getReferenceNumeric(): ?ReferenceNumeric {
        $val = $this->getBackingStore()->get('referenceNumeric');
        if (is_null($val) || $val instanceof ReferenceNumeric) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceNumeric'");
    }

    /**
     * Gets the string property value. Composed type representation for type string
     * @return string|null
    */
    public function getString(): ?string {
        $val = $this->getBackingStore()->get('string');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'string'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getReferenceNumeric() !== null) {
            $writer->writeEnumValue(null, $this->getReferenceNumeric());
        } else if ($this->getFloat() !== null) {
            $writer->writeFloatValue(null, $this->getFloat());
        } else if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        }
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the float property value. Composed type representation for type float
     * @param float|null $value Value to set for the float property.
    */
    public function setFloat(?float $value): void {
        $this->getBackingStore()->set('float', $value);
    }

    /**
     * Sets the ReferenceNumeric property value. Composed type representation for type ReferenceNumeric
     * @param ReferenceNumeric|null $value Value to set for the ReferenceNumeric property.
    */
    public function setReferenceNumeric(?ReferenceNumeric $value): void {
        $this->getBackingStore()->set('referenceNumeric', $value);
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->getBackingStore()->set('string', $value);
    }

}
