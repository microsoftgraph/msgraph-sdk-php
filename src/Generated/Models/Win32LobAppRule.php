<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var Win32LobAppRuleType|null $ruleType Contains rule types for Win32 LOB apps.
    */
    private ?Win32LobAppRuleType $ruleType = null;
    
    /**
     * Instantiates a new win32LobAppRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.win32LobAppRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppRule {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.win32LobAppFileSystemRule': return new Win32LobAppFileSystemRule();
                case '#microsoft.graph.win32LobAppPowerShellScriptRule': return new Win32LobAppPowerShellScriptRule();
                case '#microsoft.graph.win32LobAppProductCodeRule': return new Win32LobAppProductCodeRule();
                case '#microsoft.graph.win32LobAppRegistryRule': return new Win32LobAppRegistryRule();
            }
        }
        return new Win32LobAppRule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ruleType' => fn(ParseNode $n) => $o->setRuleType($n->getEnumValue(Win32LobAppRuleType::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the ruleType property value. Contains rule types for Win32 LOB apps.
     * @return Win32LobAppRuleType|null
    */
    public function getRuleType(): ?Win32LobAppRuleType {
        return $this->ruleType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('ruleType', $this->ruleType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the ruleType property value. Contains rule types for Win32 LOB apps.
     *  @param Win32LobAppRuleType|null $value Value to set for the ruleType property.
    */
    public function setRuleType(?Win32LobAppRuleType $value ): void {
        $this->ruleType = $value;
    }

}
