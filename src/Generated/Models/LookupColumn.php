<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LookupColumn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowMultipleValues Indicates whether multiple values can be selected from the source.
    */
    private ?bool $allowMultipleValues = null;
    
    /**
     * @var bool|null $allowUnlimitedLength Indicates whether values in the column should be able to exceed the standard limit of 255 characters.
    */
    private ?bool $allowUnlimitedLength = null;
    
    /**
     * @var string|null $columnName The name of the lookup source column.
    */
    private ?string $columnName = null;
    
    /**
     * @var string|null $listId The unique identifier of the lookup source list.
    */
    private ?string $listId = null;
    
    /**
     * @var string|null $primaryLookupColumnId If specified, this column is a secondary lookup, pulling an additional field from the list item looked up by the primary lookup. Use the list item looked up by the primary as the source for the column named here.
    */
    private ?string $primaryLookupColumnId = null;
    
    /**
     * Instantiates a new lookupColumn and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowMultipleValues property value. Indicates whether multiple values can be selected from the source.
     * @return bool|null
    */
    public function getAllowMultipleValues(): ?bool {
        return $this->allowMultipleValues;
    }

    /**
     * Gets the allowUnlimitedLength property value. Indicates whether values in the column should be able to exceed the standard limit of 255 characters.
     * @return bool|null
    */
    public function getAllowUnlimitedLength(): ?bool {
        return $this->allowUnlimitedLength;
    }

    /**
     * Gets the columnName property value. The name of the lookup source column.
     * @return string|null
    */
    public function getColumnName(): ?string {
        return $this->columnName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowMultipleValues' => function (ParseNode $n) use ($o) { $o->setAllowMultipleValues($n->getBooleanValue()); },
            'allowUnlimitedLength' => function (ParseNode $n) use ($o) { $o->setAllowUnlimitedLength($n->getBooleanValue()); },
            'columnName' => function (ParseNode $n) use ($o) { $o->setColumnName($n->getStringValue()); },
            'listId' => function (ParseNode $n) use ($o) { $o->setListId($n->getStringValue()); },
            'primaryLookupColumnId' => function (ParseNode $n) use ($o) { $o->setPrimaryLookupColumnId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the listId property value. The unique identifier of the lookup source list.
     * @return string|null
    */
    public function getListId(): ?string {
        return $this->listId;
    }

    /**
     * Gets the primaryLookupColumnId property value. If specified, this column is a secondary lookup, pulling an additional field from the list item looked up by the primary lookup. Use the list item looked up by the primary as the source for the column named here.
     * @return string|null
    */
    public function getPrimaryLookupColumnId(): ?string {
        return $this->primaryLookupColumnId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowMultipleValues', $this->allowMultipleValues);
        $writer->writeBooleanValue('allowUnlimitedLength', $this->allowUnlimitedLength);
        $writer->writeStringValue('columnName', $this->columnName);
        $writer->writeStringValue('listId', $this->listId);
        $writer->writeStringValue('primaryLookupColumnId', $this->primaryLookupColumnId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowMultipleValues property value. Indicates whether multiple values can be selected from the source.
     *  @param bool|null $value Value to set for the allowMultipleValues property.
    */
    public function setAllowMultipleValues(?bool $value ): void {
        $this->allowMultipleValues = $value;
    }

    /**
     * Sets the allowUnlimitedLength property value. Indicates whether values in the column should be able to exceed the standard limit of 255 characters.
     *  @param bool|null $value Value to set for the allowUnlimitedLength property.
    */
    public function setAllowUnlimitedLength(?bool $value ): void {
        $this->allowUnlimitedLength = $value;
    }

    /**
     * Sets the columnName property value. The name of the lookup source column.
     *  @param string|null $value Value to set for the columnName property.
    */
    public function setColumnName(?string $value ): void {
        $this->columnName = $value;
    }

    /**
     * Sets the listId property value. The unique identifier of the lookup source list.
     *  @param string|null $value Value to set for the listId property.
    */
    public function setListId(?string $value ): void {
        $this->listId = $value;
    }

    /**
     * Sets the primaryLookupColumnId property value. If specified, this column is a secondary lookup, pulling an additional field from the list item looked up by the primary lookup. Use the list item looked up by the primary as the source for the column named here.
     *  @param string|null $value Value to set for the primaryLookupColumnId property.
    */
    public function setPrimaryLookupColumnId(?string $value ): void {
        $this->primaryLookupColumnId = $value;
    }

}
