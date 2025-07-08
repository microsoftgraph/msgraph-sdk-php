<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestrictAccessActionBase extends DlpActionInfo implements Parsable 
{
    /**
     * Instantiates a new RestrictAccessActionBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestrictAccessActionBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestrictAccessActionBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.restrictAccessAction': return new RestrictAccessAction();
            }
        }
        return new RestrictAccessActionBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'restrictionAction' => fn(ParseNode $n) => $o->setRestrictionAction($n->getEnumValue(RestrictionAction::class)),
        ]);
    }

    /**
     * Gets the restrictionAction property value. Action for the app to take. The possible values are: warn, audit, block.
     * @return RestrictionAction|null
    */
    public function getRestrictionAction(): ?RestrictionAction {
        $val = $this->getBackingStore()->get('restrictionAction');
        if (is_null($val) || $val instanceof RestrictionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictionAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('restrictionAction', $this->getRestrictionAction());
    }

    /**
     * Sets the restrictionAction property value. Action for the app to take. The possible values are: warn, audit, block.
     * @param RestrictionAction|null $value Value to set for the restrictionAction property.
    */
    public function setRestrictionAction(?RestrictionAction $value): void {
        $this->getBackingStore()->set('restrictionAction', $value);
    }

}
