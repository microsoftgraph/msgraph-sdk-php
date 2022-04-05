<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtection extends Entity 
{
    /** @var Bitlocker|null $bitlocker The bitlocker property */
    private ?Bitlocker $bitlocker = null;
    
    /** @var array<ThreatAssessmentRequest>|null $threatAssessmentRequests The threatAssessmentRequests property */
    private ?array $threatAssessmentRequests = null;
    
    /**
     * Instantiates a new informationProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtection
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtection {
        return new InformationProtection();
    }

    /**
     * Gets the bitlocker property value. The bitlocker property
     * @return Bitlocker|null
    */
    public function getBitlocker(): ?Bitlocker {
        return $this->bitlocker;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'bitlocker' => function (self $o, ParseNode $n) { $o->setBitlocker($n->getObjectValue(Bitlocker::class)); },
            'threatAssessmentRequests' => function (self $o, ParseNode $n) { $o->setThreatAssessmentRequests($n->getCollectionOfObjectValues(ThreatAssessmentRequest::class)); },
        ]);
    }

    /**
     * Gets the threatAssessmentRequests property value. The threatAssessmentRequests property
     * @return array<ThreatAssessmentRequest>|null
    */
    public function getThreatAssessmentRequests(): ?array {
        return $this->threatAssessmentRequests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('bitlocker', $this->bitlocker);
        $writer->writeCollectionOfObjectValues('threatAssessmentRequests', $this->threatAssessmentRequests);
    }

    /**
     * Sets the bitlocker property value. The bitlocker property
     *  @param Bitlocker|null $value Value to set for the bitlocker property.
    */
    public function setBitlocker(?Bitlocker $value ): void {
        $this->bitlocker = $value;
    }

    /**
     * Sets the threatAssessmentRequests property value. The threatAssessmentRequests property
     *  @param array<ThreatAssessmentRequest>|null $value Value to set for the threatAssessmentRequests property.
    */
    public function setThreatAssessmentRequests(?array $value ): void {
        $this->threatAssessmentRequests = $value;
    }

}
