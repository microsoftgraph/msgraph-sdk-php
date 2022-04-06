<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessFilter implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var FilterMode|null $mode Mode to use for the filter. Possible values are include or exclude. */
    private ?FilterMode $mode = null;
    
    /** @var string|null $rule Rule syntax is similar to that used for membership rules for groups in Azure Active Directory (Azure AD). For details, see rules with multiple expressions */
    private ?string $rule = null;
    
    /**
     * Instantiates a new conditionalAccessFilter and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessFilter
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessFilter {
        return new ConditionalAccessFilter();
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
        return  [
            'mode' => function (self $o, ParseNode $n) { $o->setMode($n->getEnumValue(FilterMode::class)); },
            'rule' => function (self $o, ParseNode $n) { $o->setRule($n->getStringValue()); },
        ];
    }

    /**
     * Gets the mode property value. Mode to use for the filter. Possible values are include or exclude.
     * @return FilterMode|null
    */
    public function getMode(): ?FilterMode {
        return $this->mode;
    }

    /**
     * Gets the rule property value. Rule syntax is similar to that used for membership rules for groups in Azure Active Directory (Azure AD). For details, see rules with multiple expressions
     * @return string|null
    */
    public function getRule(): ?string {
        return $this->rule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('mode', $this->mode);
        $writer->writeStringValue('rule', $this->rule);
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
     * Sets the mode property value. Mode to use for the filter. Possible values are include or exclude.
     *  @param FilterMode|null $value Value to set for the mode property.
    */
    public function setMode(?FilterMode $value ): void {
        $this->mode = $value;
    }

    /**
     * Sets the rule property value. Rule syntax is similar to that used for membership rules for groups in Azure Active Directory (Azure AD). For details, see rules with multiple expressions
     *  @param string|null $value Value to set for the rule property.
    */
    public function setRule(?string $value ): void {
        $this->rule = $value;
    }

}
