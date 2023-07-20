<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\Application;
use Microsoft\Graph\Generated\Models\CustomExtensionCallbackConfiguration;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CustomTaskExtensionCallbackConfiguration extends CustomExtensionCallbackConfiguration implements Parsable 
{
    /**
     * Instantiates a new customTaskExtensionCallbackConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.customTaskExtensionCallbackConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomTaskExtensionCallbackConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomTaskExtensionCallbackConfiguration {
        return new CustomTaskExtensionCallbackConfiguration();
    }

    /**
     * Gets the authorizedApps property value. The authorizedApps property
     * @return array<Application>|null
    */
    public function getAuthorizedApps(): ?array {
        $val = $this->getBackingStore()->get('authorizedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Application::class);
            /** @var array<Application>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizedApps'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authorizedApps' => fn(ParseNode $n) => $o->setAuthorizedApps($n->getCollectionOfObjectValues([Application::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('authorizedApps', $this->getAuthorizedApps());
    }

    /**
     * Sets the authorizedApps property value. The authorizedApps property
     * @param array<Application>|null $value Value to set for the authorizedApps property.
    */
    public function setAuthorizedApps(?array $value): void {
        $this->getBackingStore()->set('authorizedApps', $value);
    }

}
