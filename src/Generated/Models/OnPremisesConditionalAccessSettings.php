<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesConditionalAccessSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new onPremisesConditionalAccessSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesConditionalAccessSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesConditionalAccessSettings {
        return new OnPremisesConditionalAccessSettings();
    }

    /**
     * Gets the enabled property value. Indicates if on premises conditional access is enabled for this organization
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->getBackingStore()->get('enabled');
    }

    /**
     * Gets the excludedGroups property value. User groups that will be exempt by on premises conditional access. All users in these groups will be exempt from the conditional access policy.
     * @return array<Guid>|null
    */
    public function getExcludedGroups(): ?array {
        return $this->getBackingStore()->get('excludedGroups');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'excludedGroups' => fn(ParseNode $n) => $o->setExcludedGroups($n->getCollectionOfPrimitiveValues()),
            'includedGroups' => fn(ParseNode $n) => $o->setIncludedGroups($n->getCollectionOfPrimitiveValues()),
            'overrideDefaultRule' => fn(ParseNode $n) => $o->setOverrideDefaultRule($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the includedGroups property value. User groups that will be targeted by on premises conditional access. All users in these groups will be required to have mobile device managed and compliant for mail access.
     * @return array<Guid>|null
    */
    public function getIncludedGroups(): ?array {
        return $this->getBackingStore()->get('includedGroups');
    }

    /**
     * Gets the overrideDefaultRule property value. Override the default access rule when allowing a device to ensure access is granted.
     * @return bool|null
    */
    public function getOverrideDefaultRule(): ?bool {
        return $this->getBackingStore()->get('overrideDefaultRule');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeCollectionOfPrimitiveValues('excludedGroups', $this->getExcludedGroups());
        $writer->writeCollectionOfPrimitiveValues('includedGroups', $this->getIncludedGroups());
        $writer->writeBooleanValue('overrideDefaultRule', $this->getOverrideDefaultRule());
    }

    /**
     * Sets the enabled property value. Indicates if on premises conditional access is enabled for this organization
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the excludedGroups property value. User groups that will be exempt by on premises conditional access. All users in these groups will be exempt from the conditional access policy.
     *  @param array<Guid>|null $value Value to set for the excludedGroups property.
    */
    public function setExcludedGroups(?array $value): void {
        $this->getBackingStore()->set('excludedGroups', $value);
    }

    /**
     * Sets the includedGroups property value. User groups that will be targeted by on premises conditional access. All users in these groups will be required to have mobile device managed and compliant for mail access.
     *  @param array<Guid>|null $value Value to set for the includedGroups property.
    */
    public function setIncludedGroups(?array $value): void {
        $this->getBackingStore()->set('includedGroups', $value);
    }

    /**
     * Sets the overrideDefaultRule property value. Override the default access rule when allowing a device to ensure access is granted.
     *  @param bool|null $value Value to set for the overrideDefaultRule property.
    */
    public function setOverrideDefaultRule(?bool $value): void {
        $this->getBackingStore()->set('overrideDefaultRule', $value);
    }

}
