<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContentType extends Entity implements Parsable 
{
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
     * Gets the associatedHubsUrls property value. List of canonical URLs for hub sites with which this content type is associated to. This will contain all hub sites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type will be applied to the lists in the enforced sites.
     * @return array<string>|null
    */
    public function getAssociatedHubsUrls(): ?array {
        return $this->getBackingStore()->get('associatedHubsUrls');
    }

    /**
     * Gets the base property value. Parent contentType from which this content type is derived.
     * @return ContentType|null
    */
    public function getBase(): ?ContentType {
        return $this->getBackingStore()->get('base');
    }

    /**
     * Gets the baseTypes property value. The collection of content types that are ancestors of this content type.
     * @return array<ContentType>|null
    */
    public function getBaseTypes(): ?array {
        return $this->getBackingStore()->get('baseTypes');
    }

    /**
     * Gets the columnLinks property value. The collection of columns that are required by this content type.
     * @return array<ColumnLink>|null
    */
    public function getColumnLinks(): ?array {
        return $this->getBackingStore()->get('columnLinks');
    }

    /**
     * Gets the columnPositions property value. Column order information in a content type.
     * @return array<ColumnDefinition>|null
    */
    public function getColumnPositions(): ?array {
        return $this->getBackingStore()->get('columnPositions');
    }

    /**
     * Gets the columns property value. The collection of column definitions for this contentType.
     * @return array<ColumnDefinition>|null
    */
    public function getColumns(): ?array {
        return $this->getBackingStore()->get('columns');
    }

    /**
     * Gets the description property value. The descriptive text for the item.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the documentSet property value. Document Set metadata.
     * @return DocumentSet|null
    */
    public function getDocumentSet(): ?DocumentSet {
        return $this->getBackingStore()->get('documentSet');
    }

    /**
     * Gets the documentTemplate property value. Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type.
     * @return DocumentSetContent|null
    */
    public function getDocumentTemplate(): ?DocumentSetContent {
        return $this->getBackingStore()->get('documentTemplate');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associatedHubsUrls' => fn(ParseNode $n) => $o->setAssociatedHubsUrls($n->getCollectionOfPrimitiveValues()),
            'base' => fn(ParseNode $n) => $o->setBase($n->getObjectValue([ContentType::class, 'createFromDiscriminatorValue'])),
            'baseTypes' => fn(ParseNode $n) => $o->setBaseTypes($n->getCollectionOfObjectValues([ContentType::class, 'createFromDiscriminatorValue'])),
            'columnLinks' => fn(ParseNode $n) => $o->setColumnLinks($n->getCollectionOfObjectValues([ColumnLink::class, 'createFromDiscriminatorValue'])),
            'columnPositions' => fn(ParseNode $n) => $o->setColumnPositions($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'columns' => fn(ParseNode $n) => $o->setColumns($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'documentSet' => fn(ParseNode $n) => $o->setDocumentSet($n->getObjectValue([DocumentSet::class, 'createFromDiscriminatorValue'])),
            'documentTemplate' => fn(ParseNode $n) => $o->setDocumentTemplate($n->getObjectValue([DocumentSetContent::class, 'createFromDiscriminatorValue'])),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getStringValue()),
            'hidden' => fn(ParseNode $n) => $o->setHidden($n->getBooleanValue()),
            'inheritedFrom' => fn(ParseNode $n) => $o->setInheritedFrom($n->getObjectValue([ItemReference::class, 'createFromDiscriminatorValue'])),
            'isBuiltIn' => fn(ParseNode $n) => $o->setIsBuiltIn($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'order' => fn(ParseNode $n) => $o->setOrder($n->getObjectValue([ContentTypeOrder::class, 'createFromDiscriminatorValue'])),
            'parentId' => fn(ParseNode $n) => $o->setParentId($n->getStringValue()),
            'propagateChanges' => fn(ParseNode $n) => $o->setPropagateChanges($n->getBooleanValue()),
            'readOnly' => fn(ParseNode $n) => $o->setReadOnly($n->getBooleanValue()),
            'sealed' => fn(ParseNode $n) => $o->setSealed($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the group property value. The name of the group this content type belongs to. Helps organize related content types.
     * @return string|null
    */
    public function getGroup(): ?string {
        return $this->getBackingStore()->get('group');
    }

    /**
     * Gets the hidden property value. Indicates whether the content type is hidden in the list's 'New' menu.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->getBackingStore()->get('hidden');
    }

    /**
     * Gets the inheritedFrom property value. If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined.
     * @return ItemReference|null
    */
    public function getInheritedFrom(): ?ItemReference {
        return $this->getBackingStore()->get('inheritedFrom');
    }

    /**
     * Gets the isBuiltIn property value. Specifies if a content type is a built-in content type.
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->getBackingStore()->get('isBuiltIn');
    }

    /**
     * Gets the name property value. The name of the content type.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the order property value. Specifies the order in which the content type appears in the selection UI.
     * @return ContentTypeOrder|null
    */
    public function getOrder(): ?ContentTypeOrder {
        return $this->getBackingStore()->get('order');
    }

    /**
     * Gets the parentId property value. The unique identifier of the content type.
     * @return string|null
    */
    public function getParentId(): ?string {
        return $this->getBackingStore()->get('parentId');
    }

    /**
     * Gets the propagateChanges property value. If true, any changes made to the content type will be pushed to inherited content types and lists that implement the content type.
     * @return bool|null
    */
    public function getPropagateChanges(): ?bool {
        return $this->getBackingStore()->get('propagateChanges');
    }

    /**
     * Gets the readOnly property value. If true, the content type can't be modified unless this value is first set to false.
     * @return bool|null
    */
    public function getReadOnly(): ?bool {
        return $this->getBackingStore()->get('readOnly');
    }

    /**
     * Gets the sealed property value. If true, the content type can't be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types.
     * @return bool|null
    */
    public function getSealed(): ?bool {
        return $this->getBackingStore()->get('sealed');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('associatedHubsUrls', $this->getAssociatedHubsUrls());
        $writer->writeObjectValue('base', $this->getBase());
        $writer->writeCollectionOfObjectValues('baseTypes', $this->getBaseTypes());
        $writer->writeCollectionOfObjectValues('columnLinks', $this->getColumnLinks());
        $writer->writeCollectionOfObjectValues('columnPositions', $this->getColumnPositions());
        $writer->writeCollectionOfObjectValues('columns', $this->getColumns());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('documentSet', $this->getDocumentSet());
        $writer->writeObjectValue('documentTemplate', $this->getDocumentTemplate());
        $writer->writeStringValue('group', $this->getGroup());
        $writer->writeBooleanValue('hidden', $this->getHidden());
        $writer->writeObjectValue('inheritedFrom', $this->getInheritedFrom());
        $writer->writeBooleanValue('isBuiltIn', $this->getIsBuiltIn());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('order', $this->getOrder());
        $writer->writeStringValue('parentId', $this->getParentId());
        $writer->writeBooleanValue('propagateChanges', $this->getPropagateChanges());
        $writer->writeBooleanValue('readOnly', $this->getReadOnly());
        $writer->writeBooleanValue('sealed', $this->getSealed());
    }

    /**
     * Sets the associatedHubsUrls property value. List of canonical URLs for hub sites with which this content type is associated to. This will contain all hub sites where this content type is queued to be enforced or is already enforced. Enforcing a content type means that the content type will be applied to the lists in the enforced sites.
     *  @param array<string>|null $value Value to set for the associatedHubsUrls property.
    */
    public function setAssociatedHubsUrls(?array $value): void {
        $this->getBackingStore()->set('associatedHubsUrls', $value);
    }

    /**
     * Sets the base property value. Parent contentType from which this content type is derived.
     *  @param ContentType|null $value Value to set for the base property.
    */
    public function setBase(?ContentType $value): void {
        $this->getBackingStore()->set('base', $value);
    }

    /**
     * Sets the baseTypes property value. The collection of content types that are ancestors of this content type.
     *  @param array<ContentType>|null $value Value to set for the baseTypes property.
    */
    public function setBaseTypes(?array $value): void {
        $this->getBackingStore()->set('baseTypes', $value);
    }

    /**
     * Sets the columnLinks property value. The collection of columns that are required by this content type.
     *  @param array<ColumnLink>|null $value Value to set for the columnLinks property.
    */
    public function setColumnLinks(?array $value): void {
        $this->getBackingStore()->set('columnLinks', $value);
    }

    /**
     * Sets the columnPositions property value. Column order information in a content type.
     *  @param array<ColumnDefinition>|null $value Value to set for the columnPositions property.
    */
    public function setColumnPositions(?array $value): void {
        $this->getBackingStore()->set('columnPositions', $value);
    }

    /**
     * Sets the columns property value. The collection of column definitions for this contentType.
     *  @param array<ColumnDefinition>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value): void {
        $this->getBackingStore()->set('columns', $value);
    }

    /**
     * Sets the description property value. The descriptive text for the item.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the documentSet property value. Document Set metadata.
     *  @param DocumentSet|null $value Value to set for the documentSet property.
    */
    public function setDocumentSet(?DocumentSet $value): void {
        $this->getBackingStore()->set('documentSet', $value);
    }

    /**
     * Sets the documentTemplate property value. Document template metadata. To make sure that documents have consistent content across a site and its subsites, you can associate a Word, Excel, or PowerPoint template with a site content type.
     *  @param DocumentSetContent|null $value Value to set for the documentTemplate property.
    */
    public function setDocumentTemplate(?DocumentSetContent $value): void {
        $this->getBackingStore()->set('documentTemplate', $value);
    }

    /**
     * Sets the group property value. The name of the group this content type belongs to. Helps organize related content types.
     *  @param string|null $value Value to set for the group property.
    */
    public function setGroup(?string $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the hidden property value. Indicates whether the content type is hidden in the list's 'New' menu.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value): void {
        $this->getBackingStore()->set('hidden', $value);
    }

    /**
     * Sets the inheritedFrom property value. If this content type is inherited from another scope (like a site), provides a reference to the item where the content type is defined.
     *  @param ItemReference|null $value Value to set for the inheritedFrom property.
    */
    public function setInheritedFrom(?ItemReference $value): void {
        $this->getBackingStore()->set('inheritedFrom', $value);
    }

    /**
     * Sets the isBuiltIn property value. Specifies if a content type is a built-in content type.
     *  @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value): void {
        $this->getBackingStore()->set('isBuiltIn', $value);
    }

    /**
     * Sets the name property value. The name of the content type.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the order property value. Specifies the order in which the content type appears in the selection UI.
     *  @param ContentTypeOrder|null $value Value to set for the order property.
    */
    public function setOrder(?ContentTypeOrder $value): void {
        $this->getBackingStore()->set('order', $value);
    }

    /**
     * Sets the parentId property value. The unique identifier of the content type.
     *  @param string|null $value Value to set for the parentId property.
    */
    public function setParentId(?string $value): void {
        $this->getBackingStore()->set('parentId', $value);
    }

    /**
     * Sets the propagateChanges property value. If true, any changes made to the content type will be pushed to inherited content types and lists that implement the content type.
     *  @param bool|null $value Value to set for the propagateChanges property.
    */
    public function setPropagateChanges(?bool $value): void {
        $this->getBackingStore()->set('propagateChanges', $value);
    }

    /**
     * Sets the readOnly property value. If true, the content type can't be modified unless this value is first set to false.
     *  @param bool|null $value Value to set for the readOnly property.
    */
    public function setReadOnly(?bool $value): void {
        $this->getBackingStore()->set('readOnly', $value);
    }

    /**
     * Sets the sealed property value. If true, the content type can't be modified by users or through push-down operations. Only site collection administrators can seal or unseal content types.
     *  @param bool|null $value Value to set for the sealed property.
    */
    public function setSealed(?bool $value): void {
        $this->getBackingStore()->set('sealed', $value);
    }

}
