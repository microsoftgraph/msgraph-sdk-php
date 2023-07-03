<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceInsight extends Entity implements Parsable 
{
    /**
     * Instantiates a new GovernanceInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceInsight {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.userSignInInsight': return new UserSignInInsight();
            }
        }
        return new GovernanceInsight();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'insightCreatedDateTime' => fn(ParseNode $n) => $o->setInsightCreatedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the insightCreatedDateTime property value. Indicates when the insight was created.
     * @return DateTime|null
    */
    public function getInsightCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('insightCreatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insightCreatedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('insightCreatedDateTime', $this->getInsightCreatedDateTime());
    }

    /**
     * Sets the insightCreatedDateTime property value. Indicates when the insight was created.
     * @param DateTime|null $value Value to set for the insightCreatedDateTime property.
    */
    public function setInsightCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('insightCreatedDateTime', $value);
    }

}
