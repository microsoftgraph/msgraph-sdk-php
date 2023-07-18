<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A complex type to store the product code and version rule data for a Win32 LOB app. This rule is not supported as a requirement rule.
*/
class Win32LobAppProductCodeRule extends Win32LobAppRule implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new win32LobAppProductCodeRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppProductCodeRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppProductCodeRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppProductCodeRule {
        return new Win32LobAppProductCodeRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'productCode' => fn(ParseNode $n) => $o->setProductCode($n->getStringValue()),
            'productVersion' => fn(ParseNode $n) => $o->setProductVersion($n->getStringValue()),
            'productVersionOperator' => fn(ParseNode $n) => $o->setProductVersionOperator($n->getEnumValue(Win32LobAppRuleOperator::class)),
        ]);
    }

    /**
     * Gets the productCode property value. The product code of the app.
     * @return string|null
    */
    public function getProductCode(): ?string {
        $val = $this->getBackingStore()->get('productCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productCode'");
    }

    /**
     * Gets the productVersion property value. The product version comparison value.
     * @return string|null
    */
    public function getProductVersion(): ?string {
        $val = $this->getBackingStore()->get('productVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productVersion'");
    }

    /**
     * Gets the productVersionOperator property value. Contains properties for detection operator.
     * @return Win32LobAppRuleOperator|null
    */
    public function getProductVersionOperator(): ?Win32LobAppRuleOperator {
        $val = $this->getBackingStore()->get('productVersionOperator');
        if (is_null($val) || $val instanceof Win32LobAppRuleOperator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productVersionOperator'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('productCode', $this->getProductCode());
        $writer->writeStringValue('productVersion', $this->getProductVersion());
        $writer->writeEnumValue('productVersionOperator', $this->getProductVersionOperator());
    }

    /**
     * Sets the productCode property value. The product code of the app.
     * @param string|null $value Value to set for the productCode property.
    */
    public function setProductCode(?string $value): void {
        $this->getBackingStore()->set('productCode', $value);
    }

    /**
     * Sets the productVersion property value. The product version comparison value.
     * @param string|null $value Value to set for the productVersion property.
    */
    public function setProductVersion(?string $value): void {
        $this->getBackingStore()->set('productVersion', $value);
    }

    /**
     * Sets the productVersionOperator property value. Contains properties for detection operator.
     * @param Win32LobAppRuleOperator|null $value Value to set for the productVersionOperator property.
    */
    public function setProductVersionOperator(?Win32LobAppRuleOperator $value): void {
        $this->getBackingStore()->set('productVersionOperator', $value);
    }

}
