<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyTipAction extends DlpActionInfo implements Parsable 
{
    /**
     * Instantiates a new PolicyTipAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyTipAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyTipAction {
        return new PolicyTipAction();
    }

    /**
     * Gets the complianceUrl property value. The complianceUrl property
     * @return string|null
    */
    public function getComplianceUrl(): ?string {
        $val = $this->getBackingStore()->get('complianceUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceUrl' => fn(ParseNode $n) => $o->setComplianceUrl($n->getStringValue()),
            'matchedConditionsDescription' => fn(ParseNode $n) => $o->setMatchedConditionsDescription($n->getStringValue()),
            'policyTip' => fn(ParseNode $n) => $o->setPolicyTip($n->getStringValue()),
        ]);
    }

    /**
     * Gets the matchedConditionsDescription property value. The matchedConditionsDescription property
     * @return string|null
    */
    public function getMatchedConditionsDescription(): ?string {
        $val = $this->getBackingStore()->get('matchedConditionsDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchedConditionsDescription'");
    }

    /**
     * Gets the policyTip property value. The policyTip property
     * @return string|null
    */
    public function getPolicyTip(): ?string {
        $val = $this->getBackingStore()->get('policyTip');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyTip'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('complianceUrl', $this->getComplianceUrl());
        $writer->writeStringValue('matchedConditionsDescription', $this->getMatchedConditionsDescription());
        $writer->writeStringValue('policyTip', $this->getPolicyTip());
    }

    /**
     * Sets the complianceUrl property value. The complianceUrl property
     * @param string|null $value Value to set for the complianceUrl property.
    */
    public function setComplianceUrl(?string $value): void {
        $this->getBackingStore()->set('complianceUrl', $value);
    }

    /**
     * Sets the matchedConditionsDescription property value. The matchedConditionsDescription property
     * @param string|null $value Value to set for the matchedConditionsDescription property.
    */
    public function setMatchedConditionsDescription(?string $value): void {
        $this->getBackingStore()->set('matchedConditionsDescription', $value);
    }

    /**
     * Sets the policyTip property value. The policyTip property
     * @param string|null $value Value to set for the policyTip property.
    */
    public function setPolicyTip(?string $value): void {
        $this->getBackingStore()->set('policyTip', $value);
    }

}
