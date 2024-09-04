<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SiteProtectionRule extends ProtectionRuleBase implements Parsable 
{
    /**
     * Instantiates a new SiteProtectionRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.siteProtectionRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SiteProtectionRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SiteProtectionRule {
        return new SiteProtectionRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'siteExpression' => fn(ParseNode $n) => $o->setSiteExpression($n->getStringValue()),
        ]);
    }

    /**
     * Gets the siteExpression property value. Contains a site expression. For examples, see siteExpression example.
     * @return string|null
    */
    public function getSiteExpression(): ?string {
        $val = $this->getBackingStore()->get('siteExpression');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteExpression'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('siteExpression', $this->getSiteExpression());
    }

    /**
     * Sets the siteExpression property value. Contains a site expression. For examples, see siteExpression example.
     * @param string|null $value Value to set for the siteExpression property.
    */
    public function setSiteExpression(?string $value): void {
        $this->getBackingStore()->set('siteExpression', $value);
    }

}
