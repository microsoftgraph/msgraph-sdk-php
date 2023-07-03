<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppRegistryRule extends Win32LobAppRule implements Parsable 
{
    /**
     * Instantiates a new Win32LobAppRegistryRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppRegistryRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppRegistryRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppRegistryRule {
        return new Win32LobAppRegistryRule();
    }

    /**
     * Gets the check32BitOn64System property value. A value indicating whether to search the 32-bit registry on 64-bit systems.
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
     * Gets the comparisonValue property value. The registry comparison value.
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
            'keyPath' => fn(ParseNode $n) => $o->setKeyPath($n->getStringValue()),
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getEnumValue(Win32LobAppRegistryRuleOperationType::class)),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(Win32LobAppRuleOperator::class)),
            'valueName' => fn(ParseNode $n) => $o->setValueName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the keyPath property value. The full path of the registry entry containing the value to detect.
     * @return string|null
    */
    public function getKeyPath(): ?string {
        $val = $this->getBackingStore()->get('keyPath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyPath'");
    }

    /**
     * Gets the operationType property value. Contains all supported registry data detection type.
     * @return Win32LobAppRegistryRuleOperationType|null
    */
    public function getOperationType(): ?Win32LobAppRegistryRuleOperationType {
        $val = $this->getBackingStore()->get('operationType');
        if (is_null($val) || $val instanceof Win32LobAppRegistryRuleOperationType) {
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
     * Gets the valueName property value. The name of the registry value to detect.
     * @return string|null
    */
    public function getValueName(): ?string {
        $val = $this->getBackingStore()->get('valueName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('check32BitOn64System', $this->getCheck32BitOn64System());
        $writer->writeStringValue('comparisonValue', $this->getComparisonValue());
        $writer->writeStringValue('keyPath', $this->getKeyPath());
        $writer->writeEnumValue('operationType', $this->getOperationType());
        $writer->writeEnumValue('operator', $this->getOperator());
        $writer->writeStringValue('valueName', $this->getValueName());
    }

    /**
     * Sets the check32BitOn64System property value. A value indicating whether to search the 32-bit registry on 64-bit systems.
     * @param bool|null $value Value to set for the check32BitOn64System property.
    */
    public function setCheck32BitOn64System(?bool $value): void {
        $this->getBackingStore()->set('check32BitOn64System', $value);
    }

    /**
     * Sets the comparisonValue property value. The registry comparison value.
     * @param string|null $value Value to set for the comparisonValue property.
    */
    public function setComparisonValue(?string $value): void {
        $this->getBackingStore()->set('comparisonValue', $value);
    }

    /**
     * Sets the keyPath property value. The full path of the registry entry containing the value to detect.
     * @param string|null $value Value to set for the keyPath property.
    */
    public function setKeyPath(?string $value): void {
        $this->getBackingStore()->set('keyPath', $value);
    }

    /**
     * Sets the operationType property value. Contains all supported registry data detection type.
     * @param Win32LobAppRegistryRuleOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?Win32LobAppRegistryRuleOperationType $value): void {
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
     * Sets the valueName property value. The name of the registry value to detect.
     * @param string|null $value Value to set for the valueName property.
    */
    public function setValueName(?string $value): void {
        $this->getBackingStore()->set('valueName', $value);
    }

}
