<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LookupColumn implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new lookupColumn and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LookupColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LookupColumn {
        return new LookupColumn();
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
     * Gets the allowMultipleValues property value. Indicates whether multiple values can be selected from the source.
     * @return bool|null
    */
    public function getAllowMultipleValues(): ?bool {
        $val = $this->getBackingStore()->get('allowMultipleValues');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowMultipleValues'");
    }

    /**
     * Gets the allowUnlimitedLength property value. Indicates whether values in the column should be able to exceed the standard limit of 255 characters.
     * @return bool|null
    */
    public function getAllowUnlimitedLength(): ?bool {
        $val = $this->getBackingStore()->get('allowUnlimitedLength');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowUnlimitedLength'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the columnName property value. The name of the lookup source column.
     * @return string|null
    */
    public function getColumnName(): ?string {
        $val = $this->getBackingStore()->get('columnName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columnName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowMultipleValues' => fn(ParseNode $n) => $o->setAllowMultipleValues($n->getBooleanValue()),
            'allowUnlimitedLength' => fn(ParseNode $n) => $o->setAllowUnlimitedLength($n->getBooleanValue()),
            'columnName' => fn(ParseNode $n) => $o->setColumnName($n->getStringValue()),
            'listId' => fn(ParseNode $n) => $o->setListId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryLookupColumnId' => fn(ParseNode $n) => $o->setPrimaryLookupColumnId($n->getStringValue()),
        ];
    }

    /**
     * Gets the listId property value. The unique identifier of the lookup source list.
     * @return string|null
    */
    public function getListId(): ?string {
        $val = $this->getBackingStore()->get('listId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'listId'");
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
     * Gets the primaryLookupColumnId property value. If specified, this column is a secondary lookup, pulling an additional field from the list item looked up by the primary lookup. Use the list item looked up by the primary as the source for the column named here.
     * @return string|null
    */
    public function getPrimaryLookupColumnId(): ?string {
        $val = $this->getBackingStore()->get('primaryLookupColumnId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryLookupColumnId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowMultipleValues', $this->getAllowMultipleValues());
        $writer->writeBooleanValue('allowUnlimitedLength', $this->getAllowUnlimitedLength());
        $writer->writeStringValue('columnName', $this->getColumnName());
        $writer->writeStringValue('listId', $this->getListId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('primaryLookupColumnId', $this->getPrimaryLookupColumnId());
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
     * Sets the allowMultipleValues property value. Indicates whether multiple values can be selected from the source.
     * @param bool|null $value Value to set for the allowMultipleValues property.
    */
    public function setAllowMultipleValues(?bool $value): void {
        $this->getBackingStore()->set('allowMultipleValues', $value);
    }

    /**
     * Sets the allowUnlimitedLength property value. Indicates whether values in the column should be able to exceed the standard limit of 255 characters.
     * @param bool|null $value Value to set for the allowUnlimitedLength property.
    */
    public function setAllowUnlimitedLength(?bool $value): void {
        $this->getBackingStore()->set('allowUnlimitedLength', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the columnName property value. The name of the lookup source column.
     * @param string|null $value Value to set for the columnName property.
    */
    public function setColumnName(?string $value): void {
        $this->getBackingStore()->set('columnName', $value);
    }

    /**
     * Sets the listId property value. The unique identifier of the lookup source list.
     * @param string|null $value Value to set for the listId property.
    */
    public function setListId(?string $value): void {
        $this->getBackingStore()->set('listId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryLookupColumnId property value. If specified, this column is a secondary lookup, pulling an additional field from the list item looked up by the primary lookup. Use the list item looked up by the primary as the source for the column named here.
     * @param string|null $value Value to set for the primaryLookupColumnId property.
    */
    public function setPrimaryLookupColumnId(?string $value): void {
        $this->getBackingStore()->set('primaryLookupColumnId', $value);
    }

}
