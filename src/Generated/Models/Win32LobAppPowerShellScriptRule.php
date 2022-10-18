<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppPowerShellScriptRule extends Win32LobAppRule implements Parsable 
{
    /**
     * @var string|null $comparisonValue The script output comparison value. Do not specify a value if the rule is used for detection.
    */
    private ?string $comparisonValue = null;
    
    /**
     * @var string|null $displayName The display name for the rule. Do not specify this value if the rule is used for detection.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enforceSignatureCheck A value indicating whether a signature check is enforced.
    */
    private ?bool $enforceSignatureCheck = null;
    
    /**
     * @var Win32LobAppPowerShellScriptRuleOperationType|null $operationType Contains all supported Powershell Script output detection type.
    */
    private ?Win32LobAppPowerShellScriptRuleOperationType $operationType = null;
    
    /**
     * @var Win32LobAppRuleOperator|null $operator Contains properties for detection operator.
    */
    private ?Win32LobAppRuleOperator $operator = null;
    
    /**
     * @var bool|null $runAs32Bit A value indicating whether the script should run as 32-bit.
    */
    private ?bool $runAs32Bit = null;
    
    /**
     * @var RunAsAccountType|null $runAsAccount The execution context of the script. Do not specify this value if the rule is used for detection. Script detection rules will run in the same context as the associated app install context. Possible values are: system, user.
    */
    private ?RunAsAccountType $runAsAccount = null;
    
    /**
     * @var string|null $scriptContent The base64-encoded script content.
    */
    private ?string $scriptContent = null;
    
    /**
     * Instantiates a new Win32LobAppPowerShellScriptRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppPowerShellScriptRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppPowerShellScriptRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppPowerShellScriptRule {
        return new Win32LobAppPowerShellScriptRule();
    }

    /**
     * Gets the comparisonValue property value. The script output comparison value. Do not specify a value if the rule is used for detection.
     * @return string|null
    */
    public function getComparisonValue(): ?string {
        return $this->comparisonValue;
    }

    /**
     * Gets the displayName property value. The display name for the rule. Do not specify this value if the rule is used for detection.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enforceSignatureCheck property value. A value indicating whether a signature check is enforced.
     * @return bool|null
    */
    public function getEnforceSignatureCheck(): ?bool {
        return $this->enforceSignatureCheck;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'comparisonValue' => fn(ParseNode $n) => $o->setComparisonValue($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enforceSignatureCheck' => fn(ParseNode $n) => $o->setEnforceSignatureCheck($n->getBooleanValue()),
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getEnumValue(Win32LobAppPowerShellScriptRuleOperationType::class)),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(Win32LobAppRuleOperator::class)),
            'runAs32Bit' => fn(ParseNode $n) => $o->setRunAs32Bit($n->getBooleanValue()),
            'runAsAccount' => fn(ParseNode $n) => $o->setRunAsAccount($n->getEnumValue(RunAsAccountType::class)),
            'scriptContent' => fn(ParseNode $n) => $o->setScriptContent($n->getStringValue()),
        ]);
    }

    /**
     * Gets the operationType property value. Contains all supported Powershell Script output detection type.
     * @return Win32LobAppPowerShellScriptRuleOperationType|null
    */
    public function getOperationType(): ?Win32LobAppPowerShellScriptRuleOperationType {
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
     * Gets the runAs32Bit property value. A value indicating whether the script should run as 32-bit.
     * @return bool|null
    */
    public function getRunAs32Bit(): ?bool {
        return $this->runAs32Bit;
    }

    /**
     * Gets the runAsAccount property value. The execution context of the script. Do not specify this value if the rule is used for detection. Script detection rules will run in the same context as the associated app install context. Possible values are: system, user.
     * @return RunAsAccountType|null
    */
    public function getRunAsAccount(): ?RunAsAccountType {
        return $this->runAsAccount;
    }

    /**
     * Gets the scriptContent property value. The base64-encoded script content.
     * @return string|null
    */
    public function getScriptContent(): ?string {
        return $this->scriptContent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('comparisonValue', $this->comparisonValue);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('enforceSignatureCheck', $this->enforceSignatureCheck);
        $writer->writeEnumValue('operationType', $this->operationType);
        $writer->writeEnumValue('operator', $this->operator);
        $writer->writeBooleanValue('runAs32Bit', $this->runAs32Bit);
        $writer->writeEnumValue('runAsAccount', $this->runAsAccount);
        $writer->writeStringValue('scriptContent', $this->scriptContent);
    }

    /**
     * Sets the comparisonValue property value. The script output comparison value. Do not specify a value if the rule is used for detection.
     *  @param string|null $value Value to set for the comparisonValue property.
    */
    public function setComparisonValue(?string $value ): void {
        $this->comparisonValue = $value;
    }

    /**
     * Sets the displayName property value. The display name for the rule. Do not specify this value if the rule is used for detection.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enforceSignatureCheck property value. A value indicating whether a signature check is enforced.
     *  @param bool|null $value Value to set for the enforceSignatureCheck property.
    */
    public function setEnforceSignatureCheck(?bool $value ): void {
        $this->enforceSignatureCheck = $value;
    }

    /**
     * Sets the operationType property value. Contains all supported Powershell Script output detection type.
     *  @param Win32LobAppPowerShellScriptRuleOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?Win32LobAppPowerShellScriptRuleOperationType $value ): void {
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
     * Sets the runAs32Bit property value. A value indicating whether the script should run as 32-bit.
     *  @param bool|null $value Value to set for the runAs32Bit property.
    */
    public function setRunAs32Bit(?bool $value ): void {
        $this->runAs32Bit = $value;
    }

    /**
     * Sets the runAsAccount property value. The execution context of the script. Do not specify this value if the rule is used for detection. Script detection rules will run in the same context as the associated app install context. Possible values are: system, user.
     *  @param RunAsAccountType|null $value Value to set for the runAsAccount property.
    */
    public function setRunAsAccount(?RunAsAccountType $value ): void {
        $this->runAsAccount = $value;
    }

    /**
     * Sets the scriptContent property value. The base64-encoded script content.
     *  @param string|null $value Value to set for the scriptContent property.
    */
    public function setScriptContent(?string $value ): void {
        $this->scriptContent = $value;
    }

}
