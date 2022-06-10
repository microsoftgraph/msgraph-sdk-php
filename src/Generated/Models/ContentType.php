<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContentType extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $associatedHubsUrls List of canonical URLs for hub sites with which this content type is associated to. This will contain all hubsites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type will be applied to the lists in the enforced sites.
    */
    private ?array $associatedHubsUrls = null;
    
    /**
     * @var ContentType|null $base Parent contentType from which this content type is derived.
    */
    private ?ContentType $base = null;
    
    /**
     * @var array<ContentType>|null $baseTypes The collection of content types that are ancestors of this content type.
    */
    private ?array $baseTypes = null;
    
    /**
     * @var array<ColumnLink>|null $columnLinks The collection of columns that are required by this content type
    */
    private ?array $columnLinks = null;
    
    /**
     * @var array<ColumnDefinition>|null $columnPositions Column order information in a content type.
    */
    private ?array $columnPositions = null;
    
    /**
     * @var array<ColumnDefinition>|null $columns The collection of column definitions for this contentType.
    */
    private ?array $columns = null;
    
    /**
     * @var string|null $description The descriptive text for the item.
    */
    private ?string $description = null;
    
    /**
     * @var DocumentSet|null $documentSet Document Set metadata.
    */
    private ?DocumentSet $documentSet = null;
    
    /**
     * @var DocumentSetContent|null $documentTemplate Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type.
    */
    private ?DocumentSetContent $documentTemplate = null;
    
    /**
     * @var string|null $group The name of the group this content type belongs to. Helps organize related content types.
    */
    private ?string $group = null;
    
    /**
     * @var bool|null $hidden Indicates whether the content type is hidden in the list's 'New' menu.
    */
    private ?bool $hidden = null;
    
    /**
     * @var ItemReference|null $inheritedFrom If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined.
    */
    private ?ItemReference $inheritedFrom = null;
    
    /**
     * @var bool|null $isBuiltIn Specifies if a content type is a built-in content type.
    */
    private ?bool $isBuiltIn = null;
    
    /**
     * @var string|null $name The name of the content type.
    */
    private ?string $name = null;
    
    /**
     * @var ContentTypeOrder|null $order Specifies the order in which the content type appears in the selection UI.
    */
    private ?ContentTypeOrder $order = null;
    
    /**
     * @var string|null $parentId The unique identifier of the content type.
    */
    private ?string $parentId = null;
    
    /**
     * @var bool|null $propagateChanges If true, any changes made to the content type will be pushed to inherited content types and lists that implement the content type.
    */
    private ?bool $propagateChanges = null;
    
    /**
     * @var bool|null $readOnly If true, the content type cannot be modified unless this value is first set to false.
    */
    private ?bool $readOnly = null;
    
    /**
     * @var bool|null $sealed If true, the content type cannot be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types.
    */
    private ?bool $sealed = null;
    
    /**
     * Instantiates a new contentType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentType {
        return new ContentType();
    }

    /**
     * Gets the associatedHubsUrls property value. List of canonical URLs for hub sites with which this content type is associated to. This will contain all hubsites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type will be applied to the lists in the enforced sites.
     * @return array<string>|null
    */
    public function getAssociatedHubsUrls(): ?array {
        return $this->associatedHubsUrls;
    }

    /**
     * Gets the base property value. Parent contentType from which this content type is derived.
     * @return ContentType|null
    */
    public function getBase(): ?ContentType {
        return $this->base;
    }

    /**
     * Gets the baseTypes property value. The collection of content types that are ancestors of this content type.
     * @return array<ContentType>|null
    */
    public function getBaseTypes(): ?array {
        return $this->baseTypes;
    }

    /**
     * Gets the columnLinks property value. The collection of columns that are required by this content type
     * @return array<ColumnLink>|null
    */
    public function getColumnLinks(): ?array {
        return $this->columnLinks;
    }

    /**
     * Gets the columnPositions property value. Column order information in a content type.
     * @return array<ColumnDefinition>|null
    */
    public function getColumnPositions(): ?array {
        return $this->columnPositions;
    }

    /**
     * Gets the columns property value. The collection of column definitions for this contentType.
     * @return array<ColumnDefinition>|null
    */
    public function getColumns(): ?array {
        return $this->columns;
    }

    /**
     * Gets the description property value. The descriptive text for the item.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the documentSet property value. Document Set metadata.
     * @return DocumentSet|null
    */
    public function getDocumentSet(): ?DocumentSet {
        return $this->documentSet;
    }

    /**
     * Gets the documentTemplate property value. Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type.
     * @return DocumentSetContent|null
    */
    public function getDocumentTemplate(): ?DocumentSetContent {
        return $this->documentTemplate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associatedHubsUrls' => function (ParseNode $n) use ($o) { $o->setAssociatedHubsUrls($n->getCollectionOfPrimitiveValues()); },
            'base' => function (ParseNode $n) use ($o) { $o->setBase($n->getObjectValue(array(ContentType::class, 'createFromDiscriminatorValue'))); },
            'baseTypes' => function (ParseNode $n) use ($o) { $o->setBaseTypes($n->getCollectionOfObjectValues(array(ContentType::class, 'createFromDiscriminatorValue'))); },
            'columnLinks' => function (ParseNode $n) use ($o) { $o->setColumnLinks($n->getCollectionOfObjectValues(array(ColumnLink::class, 'createFromDiscriminatorValue'))); },
            'columnPositions' => function (ParseNode $n) use ($o) { $o->setColumnPositions($n->getCollectionOfObjectValues(array(ColumnDefinition::class, 'createFromDiscriminatorValue'))); },
            'columns' => function (ParseNode $n) use ($o) { $o->setColumns($n->getCollectionOfObjectValues(array(ColumnDefinition::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'documentSet' => function (ParseNode $n) use ($o) { $o->setDocumentSet($n->getObjectValue(array(DocumentSet::class, 'createFromDiscriminatorValue'))); },
            'documentTemplate' => function (ParseNode $n) use ($o) { $o->setDocumentTemplate($n->getObjectValue(array(DocumentSetContent::class, 'createFromDiscriminatorValue'))); },
            'group' => function (ParseNode $n) use ($o) { $o->setGroup($n->getStringValue()); },
            'hidden' => function (ParseNode $n) use ($o) { $o->setHidden($n->getBooleanValue()); },
            'inheritedFrom' => function (ParseNode $n) use ($o) { $o->setInheritedFrom($n->getObjectValue(array(ItemReference::class, 'createFromDiscriminatorValue'))); },
            'isBuiltIn' => function (ParseNode $n) use ($o) { $o->setIsBuiltIn($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'order' => function (ParseNode $n) use ($o) { $o->setOrder($n->getObjectValue(array(ContentTypeOrder::class, 'createFromDiscriminatorValue'))); },
            'parentId' => function (ParseNode $n) use ($o) { $o->setParentId($n->getStringValue()); },
            'propagateChanges' => function (ParseNode $n) use ($o) { $o->setPropagateChanges($n->getBooleanValue()); },
            'readOnly' => function (ParseNode $n) use ($o) { $o->setReadOnly($n->getBooleanValue()); },
            'sealed' => function (ParseNode $n) use ($o) { $o->setSealed($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the group property value. The name of the group this content type belongs to. Helps organize related content types.
     * @return string|null
    */
    public function getGroup(): ?string {
        return $this->group;
    }

    /**
     * Gets the hidden property value. Indicates whether the content type is hidden in the list's 'New' menu.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->hidden;
    }

    /**
     * Gets the inheritedFrom property value. If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined.
     * @return ItemReference|null
    */
    public function getInheritedFrom(): ?ItemReference {
        return $this->inheritedFrom;
    }

    /**
     * Gets the isBuiltIn property value. Specifies if a content type is a built-in content type.
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->isBuiltIn;
    }

    /**
     * Gets the name property value. The name of the content type.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the order property value. Specifies the order in which the content type appears in the selection UI.
     * @return ContentTypeOrder|null
    */
    public function getOrder(): ?ContentTypeOrder {
        return $this->order;
    }

    /**
     * Gets the parentId property value. The unique identifier of the content type.
     * @return string|null
    */
    public function getParentId(): ?string {
        return $this->parentId;
    }

    /**
     * Gets the propagateChanges property value. If true, any changes made to the content type will be pushed to inherited content types and lists that implement the content type.
     * @return bool|null
    */
    public function getPropagateChanges(): ?bool {
        return $this->propagateChanges;
    }

    /**
     * Gets the readOnly property value. If true, the content type cannot be modified unless this value is first set to false.
     * @return bool|null
    */
    public function getReadOnly(): ?bool {
        return $this->readOnly;
    }

    /**
     * Gets the sealed property value. If true, the content type cannot be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types.
     * @return bool|null
    */
    public function getSealed(): ?bool {
        return $this->sealed;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('associatedHubsUrls', $this->associatedHubsUrls);
        $writer->writeObjectValue('base', $this->base);
        $writer->writeCollectionOfObjectValues('baseTypes', $this->baseTypes);
        $writer->writeCollectionOfObjectValues('columnLinks', $this->columnLinks);
        $writer->writeCollectionOfObjectValues('columnPositions', $this->columnPositions);
        $writer->writeCollectionOfObjectValues('columns', $this->columns);
        $writer->writeStringValue('description', $this->description);
        $writer->writeObjectValue('documentSet', $this->documentSet);
        $writer->writeObjectValue('documentTemplate', $this->documentTemplate);
        $writer->writeStringValue('group', $this->group);
        $writer->writeBooleanValue('hidden', $this->hidden);
        $writer->writeObjectValue('inheritedFrom', $this->inheritedFrom);
        $writer->writeBooleanValue('isBuiltIn', $this->isBuiltIn);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('order', $this->order);
        $writer->writeStringValue('parentId', $this->parentId);
        $writer->writeBooleanValue('propagateChanges', $this->propagateChanges);
        $writer->writeBooleanValue('readOnly', $this->readOnly);
        $writer->writeBooleanValue('sealed', $this->sealed);
    }

    /**
     * Sets the associatedHubsUrls property value. List of canonical URLs for hub sites with which this content type is associated to. This will contain all hubsites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type will be applied to the lists in the enforced sites.
     *  @param array<string>|null $value Value to set for the associatedHubsUrls property.
    */
    public function setAssociatedHubsUrls(?array $value ): void {
        $this->associatedHubsUrls = $value;
    }

    /**
     * Sets the base property value. Parent contentType from which this content type is derived.
     *  @param ContentType|null $value Value to set for the base property.
    */
    public function setBase(?ContentType $value ): void {
        $this->base = $value;
    }

    /**
     * Sets the baseTypes property value. The collection of content types that are ancestors of this content type.
     *  @param array<ContentType>|null $value Value to set for the baseTypes property.
    */
    public function setBaseTypes(?array $value ): void {
        $this->baseTypes = $value;
    }

    /**
     * Sets the columnLinks property value. The collection of columns that are required by this content type
     *  @param array<ColumnLink>|null $value Value to set for the columnLinks property.
    */
    public function setColumnLinks(?array $value ): void {
        $this->columnLinks = $value;
    }

    /**
     * Sets the columnPositions property value. Column order information in a content type.
     *  @param array<ColumnDefinition>|null $value Value to set for the columnPositions property.
    */
    public function setColumnPositions(?array $value ): void {
        $this->columnPositions = $value;
    }

    /**
     * Sets the columns property value. The collection of column definitions for this contentType.
     *  @param array<ColumnDefinition>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value ): void {
        $this->columns = $value;
    }

    /**
     * Sets the description property value. The descriptive text for the item.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the documentSet property value. Document Set metadata.
     *  @param DocumentSet|null $value Value to set for the documentSet property.
    */
    public function setDocumentSet(?DocumentSet $value ): void {
        $this->documentSet = $value;
    }

    /**
     * Sets the documentTemplate property value. Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type.
     *  @param DocumentSetContent|null $value Value to set for the documentTemplate property.
    */
    public function setDocumentTemplate(?DocumentSetContent $value ): void {
        $this->documentTemplate = $value;
    }

    /**
     * Sets the group property value. The name of the group this content type belongs to. Helps organize related content types.
     *  @param string|null $value Value to set for the group property.
    */
    public function setGroup(?string $value ): void {
        $this->group = $value;
    }

    /**
     * Sets the hidden property value. Indicates whether the content type is hidden in the list's 'New' menu.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value ): void {
        $this->hidden = $value;
    }

    /**
     * Sets the inheritedFrom property value. If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined.
     *  @param ItemReference|null $value Value to set for the inheritedFrom property.
    */
    public function setInheritedFrom(?ItemReference $value ): void {
        $this->inheritedFrom = $value;
    }

    /**
     * Sets the isBuiltIn property value. Specifies if a content type is a built-in content type.
     *  @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value ): void {
        $this->isBuiltIn = $value;
    }

    /**
     * Sets the name property value. The name of the content type.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the order property value. Specifies the order in which the content type appears in the selection UI.
     *  @param ContentTypeOrder|null $value Value to set for the order property.
    */
    public function setOrder(?ContentTypeOrder $value ): void {
        $this->order = $value;
    }

    /**
     * Sets the parentId property value. The unique identifier of the content type.
     *  @param string|null $value Value to set for the parentId property.
    */
    public function setParentId(?string $value ): void {
        $this->parentId = $value;
    }

    /**
     * Sets the propagateChanges property value. If true, any changes made to the content type will be pushed to inherited content types and lists that implement the content type.
     *  @param bool|null $value Value to set for the propagateChanges property.
    */
    public function setPropagateChanges(?bool $value ): void {
        $this->propagateChanges = $value;
    }

    /**
     * Sets the readOnly property value. If true, the content type cannot be modified unless this value is first set to false.
     *  @param bool|null $value Value to set for the readOnly property.
    */
    public function setReadOnly(?bool $value ): void {
        $this->readOnly = $value;
    }

    /**
     * Sets the sealed property value. If true, the content type cannot be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types.
     *  @param bool|null $value Value to set for the sealed property.
    */
    public function setSealed(?bool $value ): void {
        $this->sealed = $value;
    }

}
