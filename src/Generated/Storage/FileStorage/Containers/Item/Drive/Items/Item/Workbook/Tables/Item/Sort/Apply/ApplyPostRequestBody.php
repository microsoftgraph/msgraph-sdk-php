<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Tables\Item\Sort\Apply;

use Microsoft\Graph\Generated\Models\WorkbookSortField;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApplyPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplyPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplyPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplyPostRequestBody {
        return new ApplyPostRequestBody();
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
            'fields' => fn(ParseNode $n) => $o->setFields($n->getCollectionOfObjectValues([WorkbookSortField::class, 'createFromDiscriminatorValue'])),
            'matchCase' => fn(ParseNode $n) => $o->setMatchCase($n->getBooleanValue()),
            'method' => fn(ParseNode $n) => $o->setMethod($n->getStringValue()),
        ];
    }

    /**
     * Gets the fields property value. The fields property
     * @return array<WorkbookSortField>|null
    */
    public function getFields(): ?array {
        $val = $this->getBackingStore()->get('fields');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookSortField::class);
            /** @var array<WorkbookSortField>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fields'");
    }

    /**
     * Gets the matchCase property value. The matchCase property
     * @return bool|null
    */
    public function getMatchCase(): ?bool {
        $val = $this->getBackingStore()->get('matchCase');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchCase'");
    }

    /**
     * Gets the method property value. The method property
     * @return string|null
    */
    public function getMethod(): ?string {
        $val = $this->getBackingStore()->get('method');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'method'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('fields', $this->getFields());
        $writer->writeBooleanValue('matchCase', $this->getMatchCase());
        $writer->writeStringValue('method', $this->getMethod());
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
     * Sets the fields property value. The fields property
     * @param array<WorkbookSortField>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value): void {
        $this->getBackingStore()->set('fields', $value);
    }

    /**
     * Sets the matchCase property value. The matchCase property
     * @param bool|null $value Value to set for the matchCase property.
    */
    public function setMatchCase(?bool $value): void {
        $this->getBackingStore()->set('matchCase', $value);
    }

    /**
     * Sets the method property value. The method property
     * @param string|null $value Value to set for the method property.
    */
    public function setMethod(?string $value): void {
        $this->getBackingStore()->set('method', $value);
    }

}
