<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Match;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MatchPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new matchPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MatchPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MatchPostRequestBody {
        return new MatchPostRequestBody();
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
            'lookupArray' => fn(ParseNode $n) => $o->setLookupArray($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'lookupValue' => fn(ParseNode $n) => $o->setLookupValue($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'matchType' => fn(ParseNode $n) => $o->setMatchType($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lookupArray property value. The lookupArray property
     * @return Json|null
    */
    public function getLookupArray(): ?Json {
        $val = $this->getBackingStore()->get('lookupArray');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lookupArray'");
    }

    /**
     * Gets the lookupValue property value. The lookupValue property
     * @return Json|null
    */
    public function getLookupValue(): ?Json {
        $val = $this->getBackingStore()->get('lookupValue');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lookupValue'");
    }

    /**
     * Gets the matchType property value. The matchType property
     * @return Json|null
    */
    public function getMatchType(): ?Json {
        $val = $this->getBackingStore()->get('matchType');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('lookupArray', $this->getLookupArray());
        $writer->writeObjectValue('lookupValue', $this->getLookupValue());
        $writer->writeObjectValue('matchType', $this->getMatchType());
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
     * Sets the lookupArray property value. The lookupArray property
     * @param Json|null $value Value to set for the lookupArray property.
    */
    public function setLookupArray(?Json $value): void {
        $this->getBackingStore()->set('lookupArray', $value);
    }

    /**
     * Sets the lookupValue property value. The lookupValue property
     * @param Json|null $value Value to set for the lookupValue property.
    */
    public function setLookupValue(?Json $value): void {
        $this->getBackingStore()->set('lookupValue', $value);
    }

    /**
     * Sets the matchType property value. The matchType property
     * @param Json|null $value Value to set for the matchType property.
    */
    public function setMatchType(?Json $value): void {
        $this->getBackingStore()->set('matchType', $value);
    }

}
