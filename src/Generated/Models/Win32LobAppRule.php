<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Win32LobAppRuleType|null $ruleType The rule type indicating the purpose of the rule. Possible values are: detection, requirement.
    */
    private ?Win32LobAppRuleType $ruleType = null;
    
    /**
     * Instantiates a new win32LobAppRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppRule {
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
            'ruleType' => function (ParseNode $n) use ($o) { $o->setRuleType($n->getEnumValue(Win32LobAppRuleType::class)); },
        ];
    }

    /**
     * Gets the ruleType property value. The rule type indicating the purpose of the rule. Possible values are: detection, requirement.
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
     * Sets the ruleType property value. The rule type indicating the purpose of the rule. Possible values are: detection, requirement.
     *  @param Win32LobAppRuleType|null $value Value to set for the ruleType property.
    */
    public function setRuleType(?Win32LobAppRuleType $value ): void {
        $this->ruleType = $value;
    }

}
