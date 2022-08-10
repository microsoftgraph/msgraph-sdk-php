<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppFileSystemRule extends Win32LobAppRule implements Parsable 
{
    /**
     * @var bool|null $check32BitOn64System A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems.
    */
    private ?bool $check32BitOn64System = null;
    
    /**
     * @var string|null $comparisonValue The file or folder comparison value.
    */
    private ?string $comparisonValue = null;
    
    /**
     * @var string|null $fileOrFolderName The file or folder name to look up.
    */
    private ?string $fileOrFolderName = null;
    
    /**
     * @var Win32LobAppFileSystemOperationType|null $operationType Contains all supported file system detection type.
    */
    private ?Win32LobAppFileSystemOperationType $operationType = null;
    
    /**
     * @var Win32LobAppRuleOperator|null $operator Contains properties for detection operator.
    */
    private ?Win32LobAppRuleOperator $operator = null;
    
    /**
     * @var string|null $path The file or folder path to look up.
    */
    private ?string $path = null;
    
    /**
     * Instantiates a new Win32LobAppFileSystemRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppFileSystemRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppFileSystemRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppFileSystemRule {
        return new Win32LobAppFileSystemRule();
    }

    /**
     * Gets the check32BitOn64System property value. A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems.
     * @return bool|null
    */
    public function getCheck32BitOn64System(): ?bool {
        return $this->check32BitOn64System;
    }

    /**
     * Gets the comparisonValue property value. The file or folder comparison value.
     * @return string|null
    */
    public function getComparisonValue(): ?string {
        return $this->comparisonValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'check32BitOn64System' => function (ParseNode $n) use ($o) { $o->setCheck32BitOn64System($n->getBooleanValue()); },
            'comparisonValue' => function (ParseNode $n) use ($o) { $o->setComparisonValue($n->getStringValue()); },
            'fileOrFolderName' => function (ParseNode $n) use ($o) { $o->setFileOrFolderName($n->getStringValue()); },
            'operationType' => function (ParseNode $n) use ($o) { $o->setOperationType($n->getEnumValue(Win32LobAppFileSystemOperationType::class)); },
            'operator' => function (ParseNode $n) use ($o) { $o->setOperator($n->getEnumValue(Win32LobAppRuleOperator::class)); },
            'path' => function (ParseNode $n) use ($o) { $o->setPath($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileOrFolderName property value. The file or folder name to look up.
     * @return string|null
    */
    public function getFileOrFolderName(): ?string {
        return $this->fileOrFolderName;
    }

    /**
     * Gets the operationType property value. Contains all supported file system detection type.
     * @return Win32LobAppFileSystemOperationType|null
    */
    public function getOperationType(): ?Win32LobAppFileSystemOperationType {
        return $this->operationType;
    }

    /**
     * Gets the operator property value. Contains properties for detection operator.
     * @return Win32LobAppRuleOperator|null
    */
    public function getOperator(): ?Win32LobAppRuleOperator {
        return $this->operator;
    }

    /**
     * Gets the path property value. The file or folder path to look up.
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('check32BitOn64System', $this->check32BitOn64System);
        $writer->writeStringValue('comparisonValue', $this->comparisonValue);
        $writer->writeStringValue('fileOrFolderName', $this->fileOrFolderName);
        $writer->writeEnumValue('operationType', $this->operationType);
        $writer->writeEnumValue('operator', $this->operator);
        $writer->writeStringValue('path', $this->path);
    }

    /**
     * Sets the check32BitOn64System property value. A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems.
     *  @param bool|null $value Value to set for the check32BitOn64System property.
    */
    public function setCheck32BitOn64System(?bool $value ): void {
        $this->check32BitOn64System = $value;
    }

    /**
     * Sets the comparisonValue property value. The file or folder comparison value.
     *  @param string|null $value Value to set for the comparisonValue property.
    */
    public function setComparisonValue(?string $value ): void {
        $this->comparisonValue = $value;
    }

    /**
     * Sets the fileOrFolderName property value. The file or folder name to look up.
     *  @param string|null $value Value to set for the fileOrFolderName property.
    */
    public function setFileOrFolderName(?string $value ): void {
        $this->fileOrFolderName = $value;
    }

    /**
     * Sets the operationType property value. Contains all supported file system detection type.
     *  @param Win32LobAppFileSystemOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?Win32LobAppFileSystemOperationType $value ): void {
        $this->operationType = $value;
    }

    /**
     * Sets the operator property value. Contains properties for detection operator.
     *  @param Win32LobAppRuleOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?Win32LobAppRuleOperator $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the path property value. The file or folder path to look up.
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

}
