<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContactFolder extends Entity 
{
    /** @var array<ContactFolder>|null $childFolders The collection of child folders in the folder. Navigation property. Read-only. Nullable. */
    private ?array $childFolders = null;
    
    /** @var array<Contact>|null $contacts The contacts in the folder. Navigation property. Read-only. Nullable. */
    private ?array $contacts = null;
    
    /** @var string|null $displayName The folder's display name. */
    private ?string $displayName = null;
    
    /** @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable. */
    private ?array $multiValueExtendedProperties = null;
    
    /** @var string|null $parentFolderId The ID of the folder's parent folder. */
    private ?string $parentFolderId = null;
    
    /** @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable. */
    private ?array $singleValueExtendedProperties = null;
    
    /**
     * Instantiates a new contactFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContactFolder
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ContactFolder {
        return new ContactFolder();
    }

    /**
     * Gets the childFolders property value. The collection of child folders in the folder. Navigation property. Read-only. Nullable.
     * @return array<ContactFolder>|null
    */
    public function getChildFolders(): ?array {
        return $this->childFolders;
    }

    /**
     * Gets the contacts property value. The contacts in the folder. Navigation property. Read-only. Nullable.
     * @return array<Contact>|null
    */
    public function getContacts(): ?array {
        return $this->contacts;
    }

    /**
     * Gets the displayName property value. The folder's display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'childFolders' => function (self $o, ParseNode $n) { $o->setChildFolders($n->getCollectionOfObjectValues(ContactFolder::class)); },
            'contacts' => function (self $o, ParseNode $n) { $o->setContacts($n->getCollectionOfObjectValues(Contact::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'multiValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(MultiValueLegacyExtendedProperty::class)); },
            'parentFolderId' => function (self $o, ParseNode $n) { $o->setParentFolderId($n->getStringValue()); },
            'singleValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(SingleValueLegacyExtendedProperty::class)); },
        ]);
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the parentFolderId property value. The ID of the folder's parent folder.
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->parentFolderId;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('childFolders', $this->childFolders);
        $writer->writeCollectionOfObjectValues('contacts', $this->contacts);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('parentFolderId', $this->parentFolderId);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
    }

    /**
     * Sets the childFolders property value. The collection of child folders in the folder. Navigation property. Read-only. Nullable.
     *  @param array<ContactFolder>|null $value Value to set for the childFolders property.
    */
    public function setChildFolders(?array $value ): void {
        $this->childFolders = $value;
    }

    /**
     * Sets the contacts property value. The contacts in the folder. Navigation property. Read-only. Nullable.
     *  @param array<Contact>|null $value Value to set for the contacts property.
    */
    public function setContacts(?array $value ): void {
        $this->contacts = $value;
    }

    /**
     * Sets the displayName property value. The folder's display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the parentFolderId property value. The ID of the folder's parent folder.
     *  @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value ): void {
        $this->parentFolderId = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

}
