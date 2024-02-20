<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsAppSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppSettings {
        return new TeamsAppSettings();
    }

    /**
     * Gets the allowUserRequestsForAppAccess property value. Indicates whether users are allowed to request access to the unavailable Teams apps.
     * @return bool|null
    */
    public function getAllowUserRequestsForAppAccess(): ?bool {
        $val = $this->getBackingStore()->get('allowUserRequestsForAppAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowUserRequestsForAppAccess'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowUserRequestsForAppAccess' => fn(ParseNode $n) => $o->setAllowUserRequestsForAppAccess($n->getBooleanValue()),
            'isUserPersonalScopeResourceSpecificConsentEnabled' => fn(ParseNode $n) => $o->setIsUserPersonalScopeResourceSpecificConsentEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isUserPersonalScopeResourceSpecificConsentEnabled property value. Indicates whether resource-specific consent for personal scope in Teams apps is enabled for the tenant. True indicates that Teams apps that are allowed in the tenant and require resource-specific permissions can be installed in the personal scope. False blocks the installation of any Teams app that requires resource-specific permissions in the personal scope.
     * @return bool|null
    */
    public function getIsUserPersonalScopeResourceSpecificConsentEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isUserPersonalScopeResourceSpecificConsentEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUserPersonalScopeResourceSpecificConsentEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUserRequestsForAppAccess', $this->getAllowUserRequestsForAppAccess());
        $writer->writeBooleanValue('isUserPersonalScopeResourceSpecificConsentEnabled', $this->getIsUserPersonalScopeResourceSpecificConsentEnabled());
    }

    /**
     * Sets the allowUserRequestsForAppAccess property value. Indicates whether users are allowed to request access to the unavailable Teams apps.
     * @param bool|null $value Value to set for the allowUserRequestsForAppAccess property.
    */
    public function setAllowUserRequestsForAppAccess(?bool $value): void {
        $this->getBackingStore()->set('allowUserRequestsForAppAccess', $value);
    }

    /**
     * Sets the isUserPersonalScopeResourceSpecificConsentEnabled property value. Indicates whether resource-specific consent for personal scope in Teams apps is enabled for the tenant. True indicates that Teams apps that are allowed in the tenant and require resource-specific permissions can be installed in the personal scope. False blocks the installation of any Teams app that requires resource-specific permissions in the personal scope.
     * @param bool|null $value Value to set for the isUserPersonalScopeResourceSpecificConsentEnabled property.
    */
    public function setIsUserPersonalScopeResourceSpecificConsentEnabled(?bool $value): void {
        $this->getBackingStore()->set('isUserPersonalScopeResourceSpecificConsentEnabled', $value);
    }

}
