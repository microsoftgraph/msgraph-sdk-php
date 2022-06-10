<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailSearchFolder extends MailFolder implements Parsable 
{
    /**
     * @var string|null $filterQuery The OData query to filter the messages.
    */
    private ?string $filterQuery = null;
    
    /**
     * @var bool|null $includeNestedFolders Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds.
    */
    private ?bool $includeNestedFolders = null;
    
    /**
     * @var bool|null $isSupported Indicates whether a search folder is editable using REST APIs.
    */
    private ?bool $isSupported = null;
    
    /**
     * @var array<string>|null $sourceFolderIds The mailbox folders that should be mined.
    */
    private ?array $sourceFolderIds = null;
    
    /**
     * Instantiates a new MailSearchFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'filterQuery' => function (ParseNode $n) use ($o) { $o->setFilterQuery($n->getStringValue()); },
            'includeNestedFolders' => function (ParseNode $n) use ($o) { $o->setIncludeNestedFolders($n->getBooleanValue()); },
            'isSupported' => function (ParseNode $n) use ($o) { $o->setIsSupported($n->getBooleanValue()); },
            'sourceFolderIds' => function (ParseNode $n) use ($o) { $o->setSourceFolderIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the filterQuery property value. The OData query to filter the messages.
     * @return string|null
    */
    public function getFilterQuery(): ?string {
        return $this->filterQuery;
    }

    /**
     * Gets the includeNestedFolders property value. Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds.
     * @return bool|null
    */
    public function getIncludeNestedFolders(): ?bool {
        return $this->includeNestedFolders;
    }

    /**
     * Gets the isSupported property value. Indicates whether a search folder is editable using REST APIs.
     * @return bool|null
    */
    public function getIsSupported(): ?bool {
        return $this->isSupported;
    }

    /**
     * Gets the sourceFolderIds property value. The mailbox folders that should be mined.
     * @return array<string>|null
    */
    public function getSourceFolderIds(): ?array {
        return $this->sourceFolderIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('filterQuery', $this->filterQuery);
        $writer->writeBooleanValue('includeNestedFolders', $this->includeNestedFolders);
        $writer->writeBooleanValue('isSupported', $this->isSupported);
        $writer->writeCollectionOfPrimitiveValues('sourceFolderIds', $this->sourceFolderIds);
    }

    /**
     * Sets the filterQuery property value. The OData query to filter the messages.
     *  @param string|null $value Value to set for the filterQuery property.
    */
    public function setFilterQuery(?string $value ): void {
        $this->filterQuery = $value;
    }

    /**
     * Sets the includeNestedFolders property value. Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds.
     *  @param bool|null $value Value to set for the includeNestedFolders property.
    */
    public function setIncludeNestedFolders(?bool $value ): void {
        $this->includeNestedFolders = $value;
    }

    /**
     * Sets the isSupported property value. Indicates whether a search folder is editable using REST APIs.
     *  @param bool|null $value Value to set for the isSupported property.
    */
    public function setIsSupported(?bool $value ): void {
        $this->isSupported = $value;
    }

    /**
     * Sets the sourceFolderIds property value. The mailbox folders that should be mined.
     *  @param array<string>|null $value Value to set for the sourceFolderIds property.
    */
    public function setSourceFolderIds(?array $value ): void {
        $this->sourceFolderIds = $value;
    }

}
