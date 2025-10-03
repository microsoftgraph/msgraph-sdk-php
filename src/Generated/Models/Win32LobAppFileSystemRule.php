<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A complex type to store file or folder rule data for a Win32 LOB app.
*/
class Win32LobAppFileSystemRule extends Win32LobAppRule implements Parsable 
{
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
        $val = $this->getBackingStore()->get('check32BitOn64System');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'check32BitOn64System'");
    }

    /**
     * Gets the comparisonValue property value. The file or folder comparison value.
     * @return string|null
    */
    public function getComparisonValue(): ?string {
        $val = $this->getBackingStore()->get('comparisonValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comparisonValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'check32BitOn64System' => fn(ParseNode $n) => $o->setCheck32BitOn64System($n->getBooleanValue()),
            'comparisonValue' => fn(ParseNode $n) => $o->setComparisonValue($n->getStringValue()),
            'fileOrFolderName' => fn(ParseNode $n) => $o->setFileOrFolderName($n->getStringValue()),
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getEnumValue(Win32LobAppFileSystemOperationType::class)),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(Win32LobAppRuleOperator::class)),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileOrFolderName property value. The file or folder name to look up.
     * @return string|null
    */
    public function getFileOrFolderName(): ?string {
        $val = $this->getBackingStore()->get('fileOrFolderName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileOrFolderName'");
    }

    /**
     * Gets the operationType property value. A list of possible operations for rules used to make determinations about an application based on files or folders. Unless noted, can be used with either detection or requirement rules.
     * @return Win32LobAppFileSystemOperationType|null
    */
    public function getOperationType(): ?Win32LobAppFileSystemOperationType {
        $val = $this->getBackingStore()->get('operationType');
        if (is_null($val) || $val instanceof Win32LobAppFileSystemOperationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationType'");
    }

    /**
     * Gets the operator property value. Contains properties for detection operator.
     * @return Win32LobAppRuleOperator|null
    */
    public function getOperator(): ?Win32LobAppRuleOperator {
        $val = $this->getBackingStore()->get('operator');
        if (is_null($val) || $val instanceof Win32LobAppRuleOperator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operator'");
    }

    /**
     * Gets the path property value. The file or folder path to look up.
     * @return string|null
    */
    public function getPath(): ?string {
        $val = $this->getBackingStore()->get('path');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'path'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('check32BitOn64System', $this->getCheck32BitOn64System());
        $writer->writeStringValue('comparisonValue', $this->getComparisonValue());
        $writer->writeStringValue('fileOrFolderName', $this->getFileOrFolderName());
        $writer->writeEnumValue('operationType', $this->getOperationType());
        $writer->writeEnumValue('operator', $this->getOperator());
        $writer->writeStringValue('path', $this->getPath());
    }

    /**
     * Sets the check32BitOn64System property value. A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems.
     * @param bool|null $value Value to set for the check32BitOn64System property.
    */
    public function setCheck32BitOn64System(?bool $value): void {
        $this->getBackingStore()->set('check32BitOn64System', $value);
    }

    /**
     * Sets the comparisonValue property value. The file or folder comparison value.
     * @param string|null $value Value to set for the comparisonValue property.
    */
    public function setComparisonValue(?string $value): void {
        $this->getBackingStore()->set('comparisonValue', $value);
    }

    /**
     * Sets the fileOrFolderName property value. The file or folder name to look up.
     * @param string|null $value Value to set for the fileOrFolderName property.
    */
    public function setFileOrFolderName(?string $value): void {
        $this->getBackingStore()->set('fileOrFolderName', $value);
    }

    /**
     * Sets the operationType property value. A list of possible operations for rules used to make determinations about an application based on files or folders. Unless noted, can be used with either detection or requirement rules.
     * @param Win32LobAppFileSystemOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?Win32LobAppFileSystemOperationType $value): void {
        $this->getBackingStore()->set('operationType', $value);
    }

    /**
     * Sets the operator property value. Contains properties for detection operator.
     * @param Win32LobAppRuleOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?Win32LobAppRuleOperator $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the path property value. The file or folder path to look up.
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->getBackingStore()->set('path', $value);
    }

}
