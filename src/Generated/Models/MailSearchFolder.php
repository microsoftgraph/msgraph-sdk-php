<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MailSearchFolder extends MailFolder implements Parsable 
{
    /**
     * Instantiates a new MailSearchFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mailSearchFolder');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailSearchFolder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailSearchFolder {
        return new MailSearchFolder();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'filterQuery' => fn(ParseNode $n) => $o->setFilterQuery($n->getStringValue()),
            'includeNestedFolders' => fn(ParseNode $n) => $o->setIncludeNestedFolders($n->getBooleanValue()),
            'isSupported' => fn(ParseNode $n) => $o->setIsSupported($n->getBooleanValue()),
            'sourceFolderIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSourceFolderIds($val);
            },
        ]);
    }

    /**
     * Gets the filterQuery property value. The OData query to filter the messages.
     * @return string|null
    */
    public function getFilterQuery(): ?string {
        $val = $this->getBackingStore()->get('filterQuery');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filterQuery'");
    }

    /**
     * Gets the includeNestedFolders property value. Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds.
     * @return bool|null
    */
    public function getIncludeNestedFolders(): ?bool {
        $val = $this->getBackingStore()->get('includeNestedFolders');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeNestedFolders'");
    }

    /**
     * Gets the isSupported property value. Indicates whether a search folder is editable using REST APIs.
     * @return bool|null
    */
    public function getIsSupported(): ?bool {
        $val = $this->getBackingStore()->get('isSupported');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSupported'");
    }

    /**
     * Gets the sourceFolderIds property value. The mailbox folders that should be mined.
     * @return array<string>|null
    */
    public function getSourceFolderIds(): ?array {
        $val = $this->getBackingStore()->get('sourceFolderIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceFolderIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('filterQuery', $this->getFilterQuery());
        $writer->writeBooleanValue('includeNestedFolders', $this->getIncludeNestedFolders());
        $writer->writeBooleanValue('isSupported', $this->getIsSupported());
        $writer->writeCollectionOfPrimitiveValues('sourceFolderIds', $this->getSourceFolderIds());
    }

    /**
     * Sets the filterQuery property value. The OData query to filter the messages.
     * @param string|null $value Value to set for the filterQuery property.
    */
    public function setFilterQuery(?string $value): void {
        $this->getBackingStore()->set('filterQuery', $value);
    }

    /**
     * Sets the includeNestedFolders property value. Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds.
     * @param bool|null $value Value to set for the includeNestedFolders property.
    */
    public function setIncludeNestedFolders(?bool $value): void {
        $this->getBackingStore()->set('includeNestedFolders', $value);
    }

    /**
     * Sets the isSupported property value. Indicates whether a search folder is editable using REST APIs.
     * @param bool|null $value Value to set for the isSupported property.
    */
    public function setIsSupported(?bool $value): void {
        $this->getBackingStore()->set('isSupported', $value);
    }

    /**
     * Sets the sourceFolderIds property value. The mailbox folders that should be mined.
     * @param array<string>|null $value Value to set for the sourceFolderIds property.
    */
    public function setSourceFolderIds(?array $value): void {
        $this->getBackingStore()->set('sourceFolderIds', $value);
    }

}
