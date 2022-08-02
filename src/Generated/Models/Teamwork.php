<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Teamwork extends Entity implements Parsable 
{
    /**
     * @var array<WorkforceIntegration>|null $workforceIntegrations A workforce integration with shifts.
    */
    private ?array $workforceIntegrations = null;
    
    /**
     * Instantiates a new Teamwork and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamwork');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Teamwork
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Teamwork {
        return new Teamwork();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'workforceIntegrations' => function (ParseNode $n) use ($o) { $o->setWorkforceIntegrations($n->getCollectionOfObjectValues(array(WorkforceIntegration::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the workforceIntegrations property value. A workforce integration with shifts.
     * @return array<WorkforceIntegration>|null
    */
    public function getWorkforceIntegrations(): ?array {
        return $this->workforceIntegrations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('workforceIntegrations', $this->workforceIntegrations);
    }

    /**
     * Sets the workforceIntegrations property value. A workforce integration with shifts.
     *  @param array<WorkforceIntegration>|null $value Value to set for the workforceIntegrations property.
    */
    public function setWorkforceIntegrations(?array $value ): void {
        $this->workforceIntegrations = $value;
    }

}
