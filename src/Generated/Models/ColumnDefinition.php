<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ColumnDefinition extends Entity implements Parsable 
{
    /**
     * @var BooleanColumn|null $boolean This column stores boolean values.
    */
    private ?BooleanColumn $boolean = null;
    
    /**
     * @var CalculatedColumn|null $calculated This column's data is calculated based on other columns.
    */
    private ?CalculatedColumn $calculated = null;
    
    /**
     * @var ChoiceColumn|null $choice This column stores data from a list of choices.
    */
    private ?ChoiceColumn $choice = null;
    
    /**
     * @var string|null $columnGroup For site columns, the name of the group this column belongs to. Helps organize related columns.
    */
    private ?string $columnGroup = null;
    
    /**
     * @var ContentApprovalStatusColumn|null $contentApprovalStatus This column stores content approval status.
    */
    private ?ContentApprovalStatusColumn $contentApprovalStatus = null;
    
    /**
     * @var CurrencyColumn|null $currency This column stores currency values.
    */
    private ?CurrencyColumn $currency = null;
    
    /**
     * @var DateTimeColumn|null $dateTime This column stores DateTime values.
    */
    private ?DateTimeColumn $dateTime = null;
    
    /**
     * @var DefaultColumnValue|null $defaultValue The default value for this column.
    */
    private ?DefaultColumnValue $defaultValue = null;
    
    /**
     * @var string|null $description The user-facing description of the column.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The user-facing name of the column.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enforceUniqueValues If true, no two list items may have the same value for this column.
    */
    private ?bool $enforceUniqueValues = null;
    
    /**
     * @var GeolocationColumn|null $geolocation This column stores a geolocation.
    */
    private ?GeolocationColumn $geolocation = null;
    
    /**
     * @var bool|null $hidden Specifies whether the column is displayed in the user interface.
    */
    private ?bool $hidden = null;
    
    /**
     * @var HyperlinkOrPictureColumn|null $hyperlinkOrPicture This column stores hyperlink or picture values.
    */
    private ?HyperlinkOrPictureColumn $hyperlinkOrPicture = null;
    
    /**
     * @var bool|null $indexed Specifies whether the column values can used for sorting and searching.
    */
    private ?bool $indexed = null;
    
    /**
     * @var bool|null $isDeletable Indicates whether this column can be deleted.
    */
    private ?bool $isDeletable = null;
    
    /**
     * @var bool|null $isReorderable Indicates whether values in the column can be reordered. Read-only.
    */
    private ?bool $isReorderable = null;
    
    /**
     * @var bool|null $isSealed Specifies whether the column can be changed.
    */
    private ?bool $isSealed = null;
    
    /**
     * @var LookupColumn|null $lookup This column's data is looked up from another source in the site.
    */
    private ?LookupColumn $lookup = null;
    
    /**
     * @var string|null $name The API-facing name of the column as it appears in the [fields][] on a [listItem][]. For the user-facing name, see displayName.
    */
    private ?string $name = null;
    
    /**
     * @var NumberColumn|null $number This column stores number values.
    */
    private ?NumberColumn $number = null;
    
    /**
     * @var PersonOrGroupColumn|null $personOrGroup This column stores Person or Group values.
    */
    private ?PersonOrGroupColumn $personOrGroup = null;
    
    /**
     * @var bool|null $propagateChanges If true, changes to this column will be propagated to lists that implement the column.
    */
    private ?bool $propagateChanges = null;
    
    /**
     * @var bool|null $readOnly Specifies whether the column values can be modified.
    */
    private ?bool $readOnly = null;
    
    /**
     * @var bool|null $required Specifies whether the column value isn't optional.
    */
    private ?bool $required = null;
    
    /**
     * @var ColumnDefinition|null $sourceColumn The source column for content type column.
    */
    private ?ColumnDefinition $sourceColumn = null;
    
    /**
     * @var ContentTypeInfo|null $sourceContentType ContentType from which this column is inherited from. Used only to fetch contentTypes columns.
    */
    private ?ContentTypeInfo $sourceContentType = null;
    
    /**
     * @var TermColumn|null $term This column stores taxonomy terms.
    */
    private ?TermColumn $term = null;
    
    /**
     * @var TextColumn|null $text This column stores text values.
    */
    private ?TextColumn $text = null;
    
    /**
     * @var ThumbnailColumn|null $thumbnail This column stores thumbnail values.
    */
    private ?ThumbnailColumn $thumbnail = null;
    
    /**
     * @var ColumnTypes|null $type For site columns, the type of column. Read-only.
    */
    private ?ColumnTypes $type = null;
    
    /**
     * @var ColumnValidation|null $validation This column stores validation formula and message for the column.
    */
    private ?ColumnValidation $validation = null;
    
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
        return $this->boolean;
    }

    /**
     * Gets the calculated property value. This column's data is calculated based on other columns.
     * @return CalculatedColumn|null
    */
    public function getCalculated(): ?CalculatedColumn {
        return $this->calculated;
    }

    /**
     * Gets the choice property value. This column stores data from a list of choices.
     * @return ChoiceColumn|null
    */
    public function getChoice(): ?ChoiceColumn {
        return $this->choice;
    }

    /**
     * Gets the columnGroup property value. For site columns, the name of the group this column belongs to. Helps organize related columns.
     * @return string|null
    */
    public function getColumnGroup(): ?string {
        return $this->columnGroup;
    }

    /**
     * Gets the contentApprovalStatus property value. This column stores content approval status.
     * @return ContentApprovalStatusColumn|null
    */
    public function getContentApprovalStatus(): ?ContentApprovalStatusColumn {
        return $this->contentApprovalStatus;
    }

    /**
     * Gets the currency property value. This column stores currency values.
     * @return CurrencyColumn|null
    */
    public function getCurrency(): ?CurrencyColumn {
        return $this->currency;
    }

    /**
     * Gets the dateTime property value. This column stores DateTime values.
     * @return DateTimeColumn|null
    */
    public function getDateTime(): ?DateTimeColumn {
        return $this->dateTime;
    }

    /**
     * Gets the defaultValue property value. The default value for this column.
     * @return DefaultColumnValue|null
    */
    public function getDefaultValue(): ?DefaultColumnValue {
        return $this->defaultValue;
    }

    /**
     * Gets the description property value. The user-facing description of the column.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The user-facing name of the column.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enforceUniqueValues property value. If true, no two list items may have the same value for this column.
     * @return bool|null
    */
    public function getEnforceUniqueValues(): ?bool {
        return $this->enforceUniqueValues;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'boolean' => function (ParseNode $n) use ($o) { $o->setBoolean($n->getObjectValue(array(BooleanColumn::class, 'createFromDiscriminatorValue'))); },
            'calculated' => function (ParseNode $n) use ($o) { $o->setCalculated($n->getObjectValue(array(CalculatedColumn::class, 'createFromDiscriminatorValue'))); },
            'choice' => function (ParseNode $n) use ($o) { $o->setChoice($n->getObjectValue(array(ChoiceColumn::class, 'createFromDiscriminatorValue'))); },
            'columnGroup' => function (ParseNode $n) use ($o) { $o->setColumnGroup($n->getStringValue()); },
            'contentApprovalStatus' => function (ParseNode $n) use ($o) { $o->setContentApprovalStatus($n->getObjectValue(array(ContentApprovalStatusColumn::class, 'createFromDiscriminatorValue'))); },
            'currency' => function (ParseNode $n) use ($o) { $o->setCurrency($n->getObjectValue(array(CurrencyColumn::class, 'createFromDiscriminatorValue'))); },
            'dateTime' => function (ParseNode $n) use ($o) { $o->setDateTime($n->getObjectValue(array(DateTimeColumn::class, 'createFromDiscriminatorValue'))); },
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getObjectValue(array(DefaultColumnValue::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enforceUniqueValues' => function (ParseNode $n) use ($o) { $o->setEnforceUniqueValues($n->getBooleanValue()); },
            'geolocation' => function (ParseNode $n) use ($o) { $o->setGeolocation($n->getObjectValue(array(GeolocationColumn::class, 'createFromDiscriminatorValue'))); },
            'hidden' => function (ParseNode $n) use ($o) { $o->setHidden($n->getBooleanValue()); },
            'hyperlinkOrPicture' => function (ParseNode $n) use ($o) { $o->setHyperlinkOrPicture($n->getObjectValue(array(HyperlinkOrPictureColumn::class, 'createFromDiscriminatorValue'))); },
            'indexed' => function (ParseNode $n) use ($o) { $o->setIndexed($n->getBooleanValue()); },
            'isDeletable' => function (ParseNode $n) use ($o) { $o->setIsDeletable($n->getBooleanValue()); },
            'isReorderable' => function (ParseNode $n) use ($o) { $o->setIsReorderable($n->getBooleanValue()); },
            'isSealed' => function (ParseNode $n) use ($o) { $o->setIsSealed($n->getBooleanValue()); },
            'lookup' => function (ParseNode $n) use ($o) { $o->setLookup($n->getObjectValue(array(LookupColumn::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'number' => function (ParseNode $n) use ($o) { $o->setNumber($n->getObjectValue(array(NumberColumn::class, 'createFromDiscriminatorValue'))); },
            'personOrGroup' => function (ParseNode $n) use ($o) { $o->setPersonOrGroup($n->getObjectValue(array(PersonOrGroupColumn::class, 'createFromDiscriminatorValue'))); },
            'propagateChanges' => function (ParseNode $n) use ($o) { $o->setPropagateChanges($n->getBooleanValue()); },
            'readOnly' => function (ParseNode $n) use ($o) { $o->setReadOnly($n->getBooleanValue()); },
            'required' => function (ParseNode $n) use ($o) { $o->setRequired($n->getBooleanValue()); },
            'sourceColumn' => function (ParseNode $n) use ($o) { $o->setSourceColumn($n->getObjectValue(array(ColumnDefinition::class, 'createFromDiscriminatorValue'))); },
            'sourceContentType' => function (ParseNode $n) use ($o) { $o->setSourceContentType($n->getObjectValue(array(ContentTypeInfo::class, 'createFromDiscriminatorValue'))); },
            'term' => function (ParseNode $n) use ($o) { $o->setTerm($n->getObjectValue(array(TermColumn::class, 'createFromDiscriminatorValue'))); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getObjectValue(array(TextColumn::class, 'createFromDiscriminatorValue'))); },
            'thumbnail' => function (ParseNode $n) use ($o) { $o->setThumbnail($n->getObjectValue(array(ThumbnailColumn::class, 'createFromDiscriminatorValue'))); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(ColumnTypes::class)); },
            'validation' => function (ParseNode $n) use ($o) { $o->setValidation($n->getObjectValue(array(ColumnValidation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the geolocation property value. This column stores a geolocation.
     * @return GeolocationColumn|null
    */
    public function getGeolocation(): ?GeolocationColumn {
        return $this->geolocation;
    }

    /**
     * Gets the hidden property value. Specifies whether the column is displayed in the user interface.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->hidden;
    }

    /**
     * Gets the hyperlinkOrPicture property value. This column stores hyperlink or picture values.
     * @return HyperlinkOrPictureColumn|null
    */
    public function getHyperlinkOrPicture(): ?HyperlinkOrPictureColumn {
        return $this->hyperlinkOrPicture;
    }

    /**
     * Gets the indexed property value. Specifies whether the column values can used for sorting and searching.
     * @return bool|null
    */
    public function getIndexed(): ?bool {
        return $this->indexed;
    }

    /**
     * Gets the isDeletable property value. Indicates whether this column can be deleted.
     * @return bool|null
    */
    public function getIsDeletable(): ?bool {
        return $this->isDeletable;
    }

    /**
     * Gets the isReorderable property value. Indicates whether values in the column can be reordered. Read-only.
     * @return bool|null
    */
    public function getIsReorderable(): ?bool {
        return $this->isReorderable;
    }

    /**
     * Gets the isSealed property value. Specifies whether the column can be changed.
     * @return bool|null
    */
    public function getIsSealed(): ?bool {
        return $this->isSealed;
    }

    /**
     * Gets the lookup property value. This column's data is looked up from another source in the site.
     * @return LookupColumn|null
    */
    public function getLookup(): ?LookupColumn {
        return $this->lookup;
    }

    /**
     * Gets the name property value. The API-facing name of the column as it appears in the [fields][] on a [listItem][]. For the user-facing name, see displayName.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the number property value. This column stores number values.
     * @return NumberColumn|null
    */
    public function getNumber(): ?NumberColumn {
        return $this->number;
    }

    /**
     * Gets the personOrGroup property value. This column stores Person or Group values.
     * @return PersonOrGroupColumn|null
    */
    public function getPersonOrGroup(): ?PersonOrGroupColumn {
        return $this->personOrGroup;
    }

    /**
     * Gets the propagateChanges property value. If true, changes to this column will be propagated to lists that implement the column.
     * @return bool|null
    */
    public function getPropagateChanges(): ?bool {
        return $this->propagateChanges;
    }

    /**
     * Gets the readOnly property value. Specifies whether the column values can be modified.
     * @return bool|null
    */
    public function getReadOnly(): ?bool {
        return $this->readOnly;
    }

    /**
     * Gets the required property value. Specifies whether the column value isn't optional.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Gets the sourceColumn property value. The source column for content type column.
     * @return ColumnDefinition|null
    */
    public function getSourceColumn(): ?ColumnDefinition {
        return $this->sourceColumn;
    }

    /**
     * Gets the sourceContentType property value. ContentType from which this column is inherited from. Used only to fetch contentTypes columns.
     * @return ContentTypeInfo|null
    */
    public function getSourceContentType(): ?ContentTypeInfo {
        return $this->sourceContentType;
    }

    /**
     * Gets the term property value. This column stores taxonomy terms.
     * @return TermColumn|null
    */
    public function getTerm(): ?TermColumn {
        return $this->term;
    }

    /**
     * Gets the text property value. This column stores text values.
     * @return TextColumn|null
    */
    public function getText(): ?TextColumn {
        return $this->text;
    }

    /**
     * Gets the thumbnail property value. This column stores thumbnail values.
     * @return ThumbnailColumn|null
    */
    public function getThumbnail(): ?ThumbnailColumn {
        return $this->thumbnail;
    }

    /**
     * Gets the type property value. For site columns, the type of column. Read-only.
     * @return ColumnTypes|null
    */
    public function getType(): ?ColumnTypes {
        return $this->type;
    }

    /**
     * Gets the validation property value. This column stores validation formula and message for the column.
     * @return ColumnValidation|null
    */
    public function getValidation(): ?ColumnValidation {
        return $this->validation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('boolean', $this->boolean);
        $writer->writeObjectValue('calculated', $this->calculated);
        $writer->writeObjectValue('choice', $this->choice);
        $writer->writeStringValue('columnGroup', $this->columnGroup);
        $writer->writeObjectValue('contentApprovalStatus', $this->contentApprovalStatus);
        $writer->writeObjectValue('currency', $this->currency);
        $writer->writeObjectValue('dateTime', $this->dateTime);
        $writer->writeObjectValue('defaultValue', $this->defaultValue);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('enforceUniqueValues', $this->enforceUniqueValues);
        $writer->writeObjectValue('geolocation', $this->geolocation);
        $writer->writeBooleanValue('hidden', $this->hidden);
        $writer->writeObjectValue('hyperlinkOrPicture', $this->hyperlinkOrPicture);
        $writer->writeBooleanValue('indexed', $this->indexed);
        $writer->writeBooleanValue('isDeletable', $this->isDeletable);
        $writer->writeBooleanValue('isReorderable', $this->isReorderable);
        $writer->writeBooleanValue('isSealed', $this->isSealed);
        $writer->writeObjectValue('lookup', $this->lookup);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('number', $this->number);
        $writer->writeObjectValue('personOrGroup', $this->personOrGroup);
        $writer->writeBooleanValue('propagateChanges', $this->propagateChanges);
        $writer->writeBooleanValue('readOnly', $this->readOnly);
        $writer->writeBooleanValue('required', $this->required);
        $writer->writeObjectValue('sourceColumn', $this->sourceColumn);
        $writer->writeObjectValue('sourceContentType', $this->sourceContentType);
        $writer->writeObjectValue('term', $this->term);
        $writer->writeObjectValue('text', $this->text);
        $writer->writeObjectValue('thumbnail', $this->thumbnail);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeObjectValue('validation', $this->validation);
    }

    /**
     * Sets the boolean property value. This column stores boolean values.
     *  @param BooleanColumn|null $value Value to set for the boolean property.
    */
    public function setBoolean(?BooleanColumn $value ): void {
        $this->boolean = $value;
    }

    /**
     * Sets the calculated property value. This column's data is calculated based on other columns.
     *  @param CalculatedColumn|null $value Value to set for the calculated property.
    */
    public function setCalculated(?CalculatedColumn $value ): void {
        $this->calculated = $value;
    }

    /**
     * Sets the choice property value. This column stores data from a list of choices.
     *  @param ChoiceColumn|null $value Value to set for the choice property.
    */
    public function setChoice(?ChoiceColumn $value ): void {
        $this->choice = $value;
    }

    /**
     * Sets the columnGroup property value. For site columns, the name of the group this column belongs to. Helps organize related columns.
     *  @param string|null $value Value to set for the columnGroup property.
    */
    public function setColumnGroup(?string $value ): void {
        $this->columnGroup = $value;
    }

    /**
     * Sets the contentApprovalStatus property value. This column stores content approval status.
     *  @param ContentApprovalStatusColumn|null $value Value to set for the contentApprovalStatus property.
    */
    public function setContentApprovalStatus(?ContentApprovalStatusColumn $value ): void {
        $this->contentApprovalStatus = $value;
    }

    /**
     * Sets the currency property value. This column stores currency values.
     *  @param CurrencyColumn|null $value Value to set for the currency property.
    */
    public function setCurrency(?CurrencyColumn $value ): void {
        $this->currency = $value;
    }

    /**
     * Sets the dateTime property value. This column stores DateTime values.
     *  @param DateTimeColumn|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTimeColumn $value ): void {
        $this->dateTime = $value;
    }

    /**
     * Sets the defaultValue property value. The default value for this column.
     *  @param DefaultColumnValue|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DefaultColumnValue $value ): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the description property value. The user-facing description of the column.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The user-facing name of the column.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enforceUniqueValues property value. If true, no two list items may have the same value for this column.
     *  @param bool|null $value Value to set for the enforceUniqueValues property.
    */
    public function setEnforceUniqueValues(?bool $value ): void {
        $this->enforceUniqueValues = $value;
    }

    /**
     * Sets the geolocation property value. This column stores a geolocation.
     *  @param GeolocationColumn|null $value Value to set for the geolocation property.
    */
    public function setGeolocation(?GeolocationColumn $value ): void {
        $this->geolocation = $value;
    }

    /**
     * Sets the hidden property value. Specifies whether the column is displayed in the user interface.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value ): void {
        $this->hidden = $value;
    }

    /**
     * Sets the hyperlinkOrPicture property value. This column stores hyperlink or picture values.
     *  @param HyperlinkOrPictureColumn|null $value Value to set for the hyperlinkOrPicture property.
    */
    public function setHyperlinkOrPicture(?HyperlinkOrPictureColumn $value ): void {
        $this->hyperlinkOrPicture = $value;
    }

    /**
     * Sets the indexed property value. Specifies whether the column values can used for sorting and searching.
     *  @param bool|null $value Value to set for the indexed property.
    */
    public function setIndexed(?bool $value ): void {
        $this->indexed = $value;
    }

    /**
     * Sets the isDeletable property value. Indicates whether this column can be deleted.
     *  @param bool|null $value Value to set for the isDeletable property.
    */
    public function setIsDeletable(?bool $value ): void {
        $this->isDeletable = $value;
    }

    /**
     * Sets the isReorderable property value. Indicates whether values in the column can be reordered. Read-only.
     *  @param bool|null $value Value to set for the isReorderable property.
    */
    public function setIsReorderable(?bool $value ): void {
        $this->isReorderable = $value;
    }

    /**
     * Sets the isSealed property value. Specifies whether the column can be changed.
     *  @param bool|null $value Value to set for the isSealed property.
    */
    public function setIsSealed(?bool $value ): void {
        $this->isSealed = $value;
    }

    /**
     * Sets the lookup property value. This column's data is looked up from another source in the site.
     *  @param LookupColumn|null $value Value to set for the lookup property.
    */
    public function setLookup(?LookupColumn $value ): void {
        $this->lookup = $value;
    }

    /**
     * Sets the name property value. The API-facing name of the column as it appears in the [fields][] on a [listItem][]. For the user-facing name, see displayName.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the number property value. This column stores number values.
     *  @param NumberColumn|null $value Value to set for the number property.
    */
    public function setNumber(?NumberColumn $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the personOrGroup property value. This column stores Person or Group values.
     *  @param PersonOrGroupColumn|null $value Value to set for the personOrGroup property.
    */
    public function setPersonOrGroup(?PersonOrGroupColumn $value ): void {
        $this->personOrGroup = $value;
    }

    /**
     * Sets the propagateChanges property value. If true, changes to this column will be propagated to lists that implement the column.
     *  @param bool|null $value Value to set for the propagateChanges property.
    */
    public function setPropagateChanges(?bool $value ): void {
        $this->propagateChanges = $value;
    }

    /**
     * Sets the readOnly property value. Specifies whether the column values can be modified.
     *  @param bool|null $value Value to set for the readOnly property.
    */
    public function setReadOnly(?bool $value ): void {
        $this->readOnly = $value;
    }

    /**
     * Sets the required property value. Specifies whether the column value isn't optional.
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value ): void {
        $this->required = $value;
    }

    /**
     * Sets the sourceColumn property value. The source column for content type column.
     *  @param ColumnDefinition|null $value Value to set for the sourceColumn property.
    */
    public function setSourceColumn(?ColumnDefinition $value ): void {
        $this->sourceColumn = $value;
    }

    /**
     * Sets the sourceContentType property value. ContentType from which this column is inherited from. Used only to fetch contentTypes columns.
     *  @param ContentTypeInfo|null $value Value to set for the sourceContentType property.
    */
    public function setSourceContentType(?ContentTypeInfo $value ): void {
        $this->sourceContentType = $value;
    }

    /**
     * Sets the term property value. This column stores taxonomy terms.
     *  @param TermColumn|null $value Value to set for the term property.
    */
    public function setTerm(?TermColumn $value ): void {
        $this->term = $value;
    }

    /**
     * Sets the text property value. This column stores text values.
     *  @param TextColumn|null $value Value to set for the text property.
    */
    public function setText(?TextColumn $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the thumbnail property value. This column stores thumbnail values.
     *  @param ThumbnailColumn|null $value Value to set for the thumbnail property.
    */
    public function setThumbnail(?ThumbnailColumn $value ): void {
        $this->thumbnail = $value;
    }

    /**
     * Sets the type property value. For site columns, the type of column. Read-only.
     *  @param ColumnTypes|null $value Value to set for the type property.
    */
    public function setType(?ColumnTypes $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the validation property value. This column stores validation formula and message for the column.
     *  @param ColumnValidation|null $value Value to set for the validation property.
    */
    public function setValidation(?ColumnValidation $value ): void {
        $this->validation = $value;
    }

}
