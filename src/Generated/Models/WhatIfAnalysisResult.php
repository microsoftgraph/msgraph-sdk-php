<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WhatIfAnalysisResult extends ConditionalAccessPolicy implements Parsable 
{
    /**
     * Instantiates a new WhatIfAnalysisResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WhatIfAnalysisResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WhatIfAnalysisResult {
        return new WhatIfAnalysisResult();
    }

    /**
     * Gets the analysisReasons property value. The analysisReasons property
     * @return WhatIfAnalysisReasons|null
    */
    public function getAnalysisReasons(): ?WhatIfAnalysisReasons {
        $val = $this->getBackingStore()->get('analysisReasons');
        if (is_null($val) || $val instanceof WhatIfAnalysisReasons) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'analysisReasons'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'analysisReasons' => fn(ParseNode $n) => $o->setAnalysisReasons($n->getEnumValue(WhatIfAnalysisReasons::class)),
            'policyApplies' => fn(ParseNode $n) => $o->setPolicyApplies($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the policyApplies property value. Specifies whether the policy applies to the sign-in properties provided in the request body. If policyApplies is true, the policy applies to the sign-in based on the sign-in properties provided. If policyApplies is false, the policy doesn't apply to the sign-in based on the sign-in properties provided and the analysisReasons property is populated to show the reason for the policy not applying.
     * @return bool|null
    */
    public function getPolicyApplies(): ?bool {
        $val = $this->getBackingStore()->get('policyApplies');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyApplies'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('analysisReasons', $this->getAnalysisReasons());
        $writer->writeBooleanValue('policyApplies', $this->getPolicyApplies());
    }

    /**
     * Sets the analysisReasons property value. The analysisReasons property
     * @param WhatIfAnalysisReasons|null $value Value to set for the analysisReasons property.
    */
    public function setAnalysisReasons(?WhatIfAnalysisReasons $value): void {
        $this->getBackingStore()->set('analysisReasons', $value);
    }

    /**
     * Sets the policyApplies property value. Specifies whether the policy applies to the sign-in properties provided in the request body. If policyApplies is true, the policy applies to the sign-in based on the sign-in properties provided. If policyApplies is false, the policy doesn't apply to the sign-in based on the sign-in properties provided and the analysisReasons property is populated to show the reason for the policy not applying.
     * @param bool|null $value Value to set for the policyApplies property.
    */
    public function setPolicyApplies(?bool $value): void {
        $this->getBackingStore()->set('policyApplies', $value);
    }

}
