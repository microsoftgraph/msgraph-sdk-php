<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ColumnDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new columnDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.columnDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ColumnDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ColumnDefinition {
        return new ColumnDefinition();
    }

    /**
     * Gets the boolean property value. This column stores boolean values.
     * @return BooleanColumn|null
    */
    public function getBoolean(): ?BooleanColumn {
        return $this->getBackingStore()->get('boolean');
    }

    /**
     * Gets the calculated property value. This column's data is calculated based on other columns.
     * @return CalculatedColumn|null
    */
    public function getCalculated(): ?CalculatedColumn {
        return $this->getBackingStore()->get('calculated');
    }

    /**
     * Gets the choice property value. This column stores data from a list of choices.
     * @return ChoiceColumn|null
    */
    public function getChoice(): ?ChoiceColumn {
        return $this->getBackingStore()->get('choice');
    }

    /**
     * Gets the columnGroup property value. For site columns, the name of the group this column belongs to. Helps organize related columns.
     * @return string|null
    */
    public function getColumnGroup(): ?string {
        return $this->getBackingStore()->get('columnGroup');
    }

    /**
     * Gets the contentApprovalStatus property value. This column stores content approval status.
     * @return ContentApprovalStatusColumn|null
    */
    public function getContentApprovalStatus(): ?ContentApprovalStatusColumn {
        return $this->getBackingStore()->get('contentApprovalStatus');
    }

    /**
     * Gets the currency property value. This column stores currency values.
     * @return CurrencyColumn|null
    */
    public function getCurrency(): ?CurrencyColumn {
        return $this->getBackingStore()->get('currency');
    }

    /**
     * Gets the dateTime property value. This column stores DateTime values.
     * @return DateTimeColumn|null
    */
    public function getDateTime(): ?DateTimeColumn {
        return $this->getBackingStore()->get('dateTime');
    }

    /**
     * Gets the defaultValue property value. The default value for this column.
     * @return DefaultColumnValue|null
    */
    public function getDefaultValue(): ?DefaultColumnValue {
        return $this->getBackingStore()->get('defaultValue');
    }

    /**
     * Gets the description property value. The user-facing description of the column.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The user-facing name of the column.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the enforceUniqueValues property value. If true, no two list items may have the same value for this column.
     * @return bool|null
    */
    public function getEnforceUniqueValues(): ?bool {
        return $this->getBackingStore()->get('enforceUniqueValues');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'boolean' => fn(ParseNode $n) => $o->setBoolean($n->getObjectValue([BooleanColumn::class, 'createFromDiscriminatorValue'])),
            'calculated' => fn(ParseNode $n) => $o->setCalculated($n->getObjectValue([CalculatedColumn::class, 'createFromDiscriminatorValue'])),
            'choice' => fn(ParseNode $n) => $o->setChoice($n->getObjectValue([ChoiceColumn::class, 'createFromDiscriminatorValue'])),
            'columnGroup' => fn(ParseNode $n) => $o->setColumnGroup($n->getStringValue()),
            'contentApprovalStatus' => fn(ParseNode $n) => $o->setContentApprovalStatus($n->getObjectValue([ContentApprovalStatusColumn::class, 'createFromDiscriminatorValue'])),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getObjectValue([CurrencyColumn::class, 'createFromDiscriminatorValue'])),
            'dateTime' => fn(ParseNode $n) => $o->setDateTime($n->getObjectValue([DateTimeColumn::class, 'createFromDiscriminatorValue'])),
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getObjectValue([DefaultColumnValue::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enforceUniqueValues' => fn(ParseNode $n) => $o->setEnforceUniqueValues($n->getBooleanValue()),
            'geolocation' => fn(ParseNode $n) => $o->setGeolocation($n->getObjectValue([GeolocationColumn::class, 'createFromDiscriminatorValue'])),
            'hidden' => fn(ParseNode $n) => $o->setHidden($n->getBooleanValue()),
            'hyperlinkOrPicture' => fn(ParseNode $n) => $o->setHyperlinkOrPicture($n->getObjectValue([HyperlinkOrPictureColumn::class, 'createFromDiscriminatorValue'])),
            'indexed' => fn(ParseNode $n) => $o->setIndexed($n->getBooleanValue()),
            'isDeletable' => fn(ParseNode $n) => $o->setIsDeletable($n->getBooleanValue()),
            'isReorderable' => fn(ParseNode $n) => $o->setIsReorderable($n->getBooleanValue()),
            'isSealed' => fn(ParseNode $n) => $o->setIsSealed($n->getBooleanValue()),
            'lookup' => fn(ParseNode $n) => $o->setLookup($n->getObjectValue([LookupColumn::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getObjectValue([NumberColumn::class, 'createFromDiscriminatorValue'])),
            'personOrGroup' => fn(ParseNode $n) => $o->setPersonOrGroup($n->getObjectValue([PersonOrGroupColumn::class, 'createFromDiscriminatorValue'])),
            'propagateChanges' => fn(ParseNode $n) => $o->setPropagateChanges($n->getBooleanValue()),
            'readOnly' => fn(ParseNode $n) => $o->setReadOnly($n->getBooleanValue()),
            'required' => fn(ParseNode $n) => $o->setRequired($n->getBooleanValue()),
            'sourceColumn' => fn(ParseNode $n) => $o->setSourceColumn($n->getObjectValue([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'sourceContentType' => fn(ParseNode $n) => $o->setSourceContentType($n->getObjectValue([ContentTypeInfo::class, 'createFromDiscriminatorValue'])),
            'term' => fn(ParseNode $n) => $o->setTerm($n->getObjectValue([TermColumn::class, 'createFromDiscriminatorValue'])),
            'text' => fn(ParseNode $n) => $o->setText($n->getObjectValue([TextColumn::class, 'createFromDiscriminatorValue'])),
            'thumbnail' => fn(ParseNode $n) => $o->setThumbnail($n->getObjectValue([ThumbnailColumn::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(ColumnTypes::class)),
            'validation' => fn(ParseNode $n) => $o->setValidation($n->getObjectValue([ColumnValidation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the geolocation property value. This column stores a geolocation.
     * @return GeolocationColumn|null
    */
    public function getGeolocation(): ?GeolocationColumn {
        return $this->getBackingStore()->get('geolocation');
    }

    /**
     * Gets the hidden property value. Specifies whether the column is displayed in the user interface.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->getBackingStore()->get('hidden');
    }

    /**
     * Gets the hyperlinkOrPicture property value. This column stores hyperlink or picture values.
     * @return HyperlinkOrPictureColumn|null
    */
    public function getHyperlinkOrPicture(): ?HyperlinkOrPictureColumn {
        return $this->getBackingStore()->get('hyperlinkOrPicture');
    }

    /**
     * Gets the indexed property value. Specifies whether the column values can be used for sorting and searching.
     * @return bool|null
    */
    public function getIndexed(): ?bool {
        return $this->getBackingStore()->get('indexed');
    }

    /**
     * Gets the isDeletable property value. Indicates whether this column can be deleted.
     * @return bool|null
    */
    public function getIsDeletable(): ?bool {
        return $this->getBackingStore()->get('isDeletable');
    }

    /**
     * Gets the isReorderable property value. Indicates whether values in the column can be reordered. Read-only.
     * @return bool|null
    */
    public function getIsReorderable(): ?bool {
        return $this->getBackingStore()->get('isReorderable');
    }

    /**
     * Gets the isSealed property value. Specifies whether the column can be changed.
     * @return bool|null
    */
    public function getIsSealed(): ?bool {
        return $this->getBackingStore()->get('isSealed');
    }

    /**
     * Gets the lookup property value. This column's data is looked up from another source in the site.
     * @return LookupColumn|null
    */
    public function getLookup(): ?LookupColumn {
        return $this->getBackingStore()->get('lookup');
    }

    /**
     * Gets the name property value. The API-facing name of the column as it appears in the [fields][] on a [listItem][]. For the user-facing name, see displayName.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the number property value. This column stores number values.
     * @return NumberColumn|null
    */
    public function getNumber(): ?NumberColumn {
        return $this->getBackingStore()->get('number');
    }

    /**
     * Gets the personOrGroup property value. This column stores Person or Group values.
     * @return PersonOrGroupColumn|null
    */
    public function getPersonOrGroup(): ?PersonOrGroupColumn {
        return $this->getBackingStore()->get('personOrGroup');
    }

    /**
     * Gets the propagateChanges property value. If 'true', changes to this column will be propagated to lists that implement the column.
     * @return bool|null
    */
    public function getPropagateChanges(): ?bool {
        return $this->getBackingStore()->get('propagateChanges');
    }

    /**
     * Gets the readOnly property value. Specifies whether the column values can be modified.
     * @return bool|null
    */
    public function getReadOnly(): ?bool {
        return $this->getBackingStore()->get('readOnly');
    }

    /**
     * Gets the required property value. Specifies whether the column value isn't optional.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->getBackingStore()->get('required');
    }

    /**
     * Gets the sourceColumn property value. The source column for the content type column.
     * @return ColumnDefinition|null
    */
    public function getSourceColumn(): ?ColumnDefinition {
        return $this->getBackingStore()->get('sourceColumn');
    }

    /**
     * Gets the sourceContentType property value. ContentType from which this column is inherited from. Present only in contentTypes columns response. Read-only.
     * @return ContentTypeInfo|null
    */
    public function getSourceContentType(): ?ContentTypeInfo {
        return $this->getBackingStore()->get('sourceContentType');
    }

    /**
     * Gets the term property value. This column stores taxonomy terms.
     * @return TermColumn|null
    */
    public function getTerm(): ?TermColumn {
        return $this->getBackingStore()->get('term');
    }

    /**
     * Gets the text property value. This column stores text values.
     * @return TextColumn|null
    */
    public function getText(): ?TextColumn {
        return $this->getBackingStore()->get('text');
    }

    /**
     * Gets the thumbnail property value. This column stores thumbnail values.
     * @return ThumbnailColumn|null
    */
    public function getThumbnail(): ?ThumbnailColumn {
        return $this->getBackingStore()->get('thumbnail');
    }

    /**
     * Gets the type property value. For site columns, the type of column. Read-only.
     * @return ColumnTypes|null
    */
    public function getType(): ?ColumnTypes {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the validation property value. This column stores validation formula and message for the column.
     * @return ColumnValidation|null
    */
    public function getValidation(): ?ColumnValidation {
        return $this->getBackingStore()->get('validation');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('boolean', $this->getBoolean());
        $writer->writeObjectValue('calculated', $this->getCalculated());
        $writer->writeObjectValue('choice', $this->getChoice());
        $writer->writeStringValue('columnGroup', $this->getColumnGroup());
        $writer->writeObjectValue('contentApprovalStatus', $this->getContentApprovalStatus());
        $writer->writeObjectValue('currency', $this->getCurrency());
        $writer->writeObjectValue('dateTime', $this->getDateTime());
        $writer->writeObjectValue('defaultValue', $this->getDefaultValue());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('enforceUniqueValues', $this->getEnforceUniqueValues());
        $writer->writeObjectValue('geolocation', $this->getGeolocation());
        $writer->writeBooleanValue('hidden', $this->getHidden());
        $writer->writeObjectValue('hyperlinkOrPicture', $this->getHyperlinkOrPicture());
        $writer->writeBooleanValue('indexed', $this->getIndexed());
        $writer->writeBooleanValue('isDeletable', $this->getIsDeletable());
        $writer->writeBooleanValue('isReorderable', $this->getIsReorderable());
        $writer->writeBooleanValue('isSealed', $this->getIsSealed());
        $writer->writeObjectValue('lookup', $this->getLookup());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('number', $this->getNumber());
        $writer->writeObjectValue('personOrGroup', $this->getPersonOrGroup());
        $writer->writeBooleanValue('propagateChanges', $this->getPropagateChanges());
        $writer->writeBooleanValue('readOnly', $this->getReadOnly());
        $writer->writeBooleanValue('required', $this->getRequired());
        $writer->writeObjectValue('sourceColumn', $this->getSourceColumn());
        $writer->writeObjectValue('sourceContentType', $this->getSourceContentType());
        $writer->writeObjectValue('term', $this->getTerm());
        $writer->writeObjectValue('text', $this->getText());
        $writer->writeObjectValue('thumbnail', $this->getThumbnail());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeObjectValue('validation', $this->getValidation());
    }

    /**
     * Sets the boolean property value. This column stores boolean values.
     *  @param BooleanColumn|null $value Value to set for the boolean property.
    */
    public function setBoolean(?BooleanColumn $value): void {
        $this->getBackingStore()->set('boolean', $value);
    }

    /**
     * Sets the calculated property value. This column's data is calculated based on other columns.
     *  @param CalculatedColumn|null $value Value to set for the calculated property.
    */
    public function setCalculated(?CalculatedColumn $value): void {
        $this->getBackingStore()->set('calculated', $value);
    }

    /**
     * Sets the choice property value. This column stores data from a list of choices.
     *  @param ChoiceColumn|null $value Value to set for the choice property.
    */
    public function setChoice(?ChoiceColumn $value): void {
        $this->getBackingStore()->set('choice', $value);
    }

    /**
     * Sets the columnGroup property value. For site columns, the name of the group this column belongs to. Helps organize related columns.
     *  @param string|null $value Value to set for the columnGroup property.
    */
    public function setColumnGroup(?string $value): void {
        $this->getBackingStore()->set('columnGroup', $value);
    }

    /**
     * Sets the contentApprovalStatus property value. This column stores content approval status.
     *  @param ContentApprovalStatusColumn|null $value Value to set for the contentApprovalStatus property.
    */
    public function setContentApprovalStatus(?ContentApprovalStatusColumn $value): void {
        $this->getBackingStore()->set('contentApprovalStatus', $value);
    }

    /**
     * Sets the currency property value. This column stores currency values.
     *  @param CurrencyColumn|null $value Value to set for the currency property.
    */
    public function setCurrency(?CurrencyColumn $value): void {
        $this->getBackingStore()->set('currency', $value);
    }

    /**
     * Sets the dateTime property value. This column stores DateTime values.
     *  @param DateTimeColumn|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTimeColumn $value): void {
        $this->getBackingStore()->set('dateTime', $value);
    }

    /**
     * Sets the defaultValue property value. The default value for this column.
     *  @param DefaultColumnValue|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DefaultColumnValue $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the description property value. The user-facing description of the column.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The user-facing name of the column.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enforceUniqueValues property value. If true, no two list items may have the same value for this column.
     *  @param bool|null $value Value to set for the enforceUniqueValues property.
    */
    public function setEnforceUniqueValues(?bool $value): void {
        $this->getBackingStore()->set('enforceUniqueValues', $value);
    }

    /**
     * Sets the geolocation property value. This column stores a geolocation.
     *  @param GeolocationColumn|null $value Value to set for the geolocation property.
    */
    public function setGeolocation(?GeolocationColumn $value): void {
        $this->getBackingStore()->set('geolocation', $value);
    }

    /**
     * Sets the hidden property value. Specifies whether the column is displayed in the user interface.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value): void {
        $this->getBackingStore()->set('hidden', $value);
    }

    /**
     * Sets the hyperlinkOrPicture property value. This column stores hyperlink or picture values.
     *  @param HyperlinkOrPictureColumn|null $value Value to set for the hyperlinkOrPicture property.
    */
    public function setHyperlinkOrPicture(?HyperlinkOrPictureColumn $value): void {
        $this->getBackingStore()->set('hyperlinkOrPicture', $value);
    }

    /**
     * Sets the indexed property value. Specifies whether the column values can be used for sorting and searching.
     *  @param bool|null $value Value to set for the indexed property.
    */
    public function setIndexed(?bool $value): void {
        $this->getBackingStore()->set('indexed', $value);
    }

    /**
     * Sets the isDeletable property value. Indicates whether this column can be deleted.
     *  @param bool|null $value Value to set for the isDeletable property.
    */
    public function setIsDeletable(?bool $value): void {
        $this->getBackingStore()->set('isDeletable', $value);
    }

    /**
     * Sets the isReorderable property value. Indicates whether values in the column can be reordered. Read-only.
     *  @param bool|null $value Value to set for the isReorderable property.
    */
    public function setIsReorderable(?bool $value): void {
        $this->getBackingStore()->set('isReorderable', $value);
    }

    /**
     * Sets the isSealed property value. Specifies whether the column can be changed.
     *  @param bool|null $value Value to set for the isSealed property.
    */
    public function setIsSealed(?bool $value): void {
        $this->getBackingStore()->set('isSealed', $value);
    }

    /**
     * Sets the lookup property value. This column's data is looked up from another source in the site.
     *  @param LookupColumn|null $value Value to set for the lookup property.
    */
    public function setLookup(?LookupColumn $value): void {
        $this->getBackingStore()->set('lookup', $value);
    }

    /**
     * Sets the name property value. The API-facing name of the column as it appears in the [fields][] on a [listItem][]. For the user-facing name, see displayName.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the number property value. This column stores number values.
     *  @param NumberColumn|null $value Value to set for the number property.
    */
    public function setNumber(?NumberColumn $value): void {
        $this->getBackingStore()->set('number', $value);
    }

    /**
     * Sets the personOrGroup property value. This column stores Person or Group values.
     *  @param PersonOrGroupColumn|null $value Value to set for the personOrGroup property.
    */
    public function setPersonOrGroup(?PersonOrGroupColumn $value): void {
        $this->getBackingStore()->set('personOrGroup', $value);
    }

    /**
     * Sets the propagateChanges property value. If 'true', changes to this column will be propagated to lists that implement the column.
     *  @param bool|null $value Value to set for the propagateChanges property.
    */
    public function setPropagateChanges(?bool $value): void {
        $this->getBackingStore()->set('propagateChanges', $value);
    }

    /**
     * Sets the readOnly property value. Specifies whether the column values can be modified.
     *  @param bool|null $value Value to set for the readOnly property.
    */
    public function setReadOnly(?bool $value): void {
        $this->getBackingStore()->set('readOnly', $value);
    }

    /**
     * Sets the required property value. Specifies whether the column value isn't optional.
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value): void {
        $this->getBackingStore()->set('required', $value);
    }

    /**
     * Sets the sourceColumn property value. The source column for the content type column.
     *  @param ColumnDefinition|null $value Value to set for the sourceColumn property.
    */
    public function setSourceColumn(?ColumnDefinition $value): void {
        $this->getBackingStore()->set('sourceColumn', $value);
    }

    /**
     * Sets the sourceContentType property value. ContentType from which this column is inherited from. Present only in contentTypes columns response. Read-only.
     *  @param ContentTypeInfo|null $value Value to set for the sourceContentType property.
    */
    public function setSourceContentType(?ContentTypeInfo $value): void {
        $this->getBackingStore()->set('sourceContentType', $value);
    }

    /**
     * Sets the term property value. This column stores taxonomy terms.
     *  @param TermColumn|null $value Value to set for the term property.
    */
    public function setTerm(?TermColumn $value): void {
        $this->getBackingStore()->set('term', $value);
    }

    /**
     * Sets the text property value. This column stores text values.
     *  @param TextColumn|null $value Value to set for the text property.
    */
    public function setText(?TextColumn $value): void {
        $this->getBackingStore()->set('text', $value);
    }

    /**
     * Sets the thumbnail property value. This column stores thumbnail values.
     *  @param ThumbnailColumn|null $value Value to set for the thumbnail property.
    */
    public function setThumbnail(?ThumbnailColumn $value): void {
        $this->getBackingStore()->set('thumbnail', $value);
    }

    /**
     * Sets the type property value. For site columns, the type of column. Read-only.
     *  @param ColumnTypes|null $value Value to set for the type property.
    */
    public function setType(?ColumnTypes $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the validation property value. This column stores validation formula and message for the column.
     *  @param ColumnValidation|null $value Value to set for the validation property.
    */
    public function setValidation(?ColumnValidation $value): void {
        $this->getBackingStore()->set('validation', $value);
    }

}
