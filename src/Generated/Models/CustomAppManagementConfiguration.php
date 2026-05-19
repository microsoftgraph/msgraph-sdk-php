<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomAppManagementConfiguration extends AppManagementConfiguration implements Parsable 
{
    /**
     * Instantiates a new CustomAppManagementConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customAppManagementConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomAppManagementConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomAppManagementConfiguration {
        return new CustomAppManagementConfiguration();
    }

    /**
     * Gets the applicationRestrictions property value. Restrictions that are applicable only to application objects to which the policy is attached.
     * @return CustomAppManagementApplicationConfiguration|null
    */
    public function getApplicationRestrictions(): ?CustomAppManagementApplicationConfiguration {
        $val = $this->getBackingStore()->get('applicationRestrictions');
        if (is_null($val) || $val instanceof CustomAppManagementApplicationConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationRestrictions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationRestrictions' => fn(ParseNode $n) => $o->setApplicationRestrictions($n->getObjectValue([CustomAppManagementApplicationConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicationRestrictions', $this->getApplicationRestrictions());
    }

    /**
     * Sets the applicationRestrictions property value. Restrictions that are applicable only to application objects to which the policy is attached.
     * @param CustomAppManagementApplicationConfiguration|null $value Value to set for the applicationRestrictions property.
    */
    public function setApplicationRestrictions(?CustomAppManagementApplicationConfiguration $value): void {
        $this->getBackingStore()->set('applicationRestrictions', $value);
    }

}
