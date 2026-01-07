<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SensitivityLabel extends Entity implements Parsable 
{
    /**
     * Instantiates a new SensitivityLabel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityLabel {
        return new SensitivityLabel();
    }

    /**
     * Gets the actionSource property value. The actionSource property
     * @return LabelActionSource|null
    */
    public function getActionSource(): ?LabelActionSource {
        $val = $this->getBackingStore()->get('actionSource');
        if (is_null($val) || $val instanceof LabelActionSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionSource'");
    }

    /**
     * Gets the autoTooltip property value. The autoTooltip property
     * @return string|null
    */
    public function getAutoTooltip(): ?string {
        $val = $this->getBackingStore()->get('autoTooltip');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoTooltip'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionSource' => fn(ParseNode $n) => $o->setActionSource($n->getEnumValue(LabelActionSource::class)),
            'autoTooltip' => fn(ParseNode $n) => $o->setAutoTooltip($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'hasProtection' => fn(ParseNode $n) => $o->setHasProtection($n->getBooleanValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'isEndpointProtectionEnabled' => fn(ParseNode $n) => $o->setIsEndpointProtectionEnabled($n->getBooleanValue()),
            'isScopedToUser' => fn(ParseNode $n) => $o->setIsScopedToUser($n->getBooleanValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'rights' => fn(ParseNode $n) => $o->setRights($n->getObjectValue([UsageRightsIncluded::class, 'createFromDiscriminatorValue'])),
            'sublabels' => fn(ParseNode $n) => $o->setSublabels($n->getCollectionOfObjectValues([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
            'toolTip' => fn(ParseNode $n) => $o->setToolTip($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hasProtection property value. The hasProtection property
     * @return bool|null
    */
    public function getHasProtection(): ?bool {
        $val = $this->getBackingStore()->get('hasProtection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasProtection'");
    }

    /**
     * Gets the isDefault property value. The isDefault property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        $val = $this->getBackingStore()->get('isDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefault'");
    }

    /**
     * Gets the isEndpointProtectionEnabled property value. The isEndpointProtectionEnabled property
     * @return bool|null
    */
    public function getIsEndpointProtectionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEndpointProtectionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEndpointProtectionEnabled'");
    }

    /**
     * Gets the isScopedToUser property value. The isScopedToUser property
     * @return bool|null
    */
    public function getIsScopedToUser(): ?bool {
        $val = $this->getBackingStore()->get('isScopedToUser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isScopedToUser'");
    }

    /**
     * Gets the locale property value. The locale property
     * @return string|null
    */
    public function getLocale(): ?string {
        $val = $this->getBackingStore()->get('locale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locale'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the rights property value. The rights property
     * @return UsageRightsIncluded|null
    */
    public function getRights(): ?UsageRightsIncluded {
        $val = $this->getBackingStore()->get('rights');
        if (is_null($val) || $val instanceof UsageRightsIncluded) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rights'");
    }

    /**
     * Gets the sublabels property value. The sublabels property
     * @return array<SensitivityLabel>|null
    */
    public function getSublabels(): ?array {
        $val = $this->getBackingStore()->get('sublabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SensitivityLabel::class);
            /** @var array<SensitivityLabel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sublabels'");
    }

    /**
     * Gets the toolTip property value. The toolTip property
     * @return string|null
    */
    public function getToolTip(): ?string {
        $val = $this->getBackingStore()->get('toolTip');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'toolTip'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionSource', $this->getActionSource());
        $writer->writeStringValue('autoTooltip', $this->getAutoTooltip());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('hasProtection', $this->getHasProtection());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeBooleanValue('isEndpointProtectionEnabled', $this->getIsEndpointProtectionEnabled());
        $writer->writeBooleanValue('isScopedToUser', $this->getIsScopedToUser());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('rights', $this->getRights());
        $writer->writeCollectionOfObjectValues('sublabels', $this->getSublabels());
        $writer->writeStringValue('toolTip', $this->getToolTip());
    }

    /**
     * Sets the actionSource property value. The actionSource property
     * @param LabelActionSource|null $value Value to set for the actionSource property.
    */
    public function setActionSource(?LabelActionSource $value): void {
        $this->getBackingStore()->set('actionSource', $value);
    }

    /**
     * Sets the autoTooltip property value. The autoTooltip property
     * @param string|null $value Value to set for the autoTooltip property.
    */
    public function setAutoTooltip(?string $value): void {
        $this->getBackingStore()->set('autoTooltip', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the hasProtection property value. The hasProtection property
     * @param bool|null $value Value to set for the hasProtection property.
    */
    public function setHasProtection(?bool $value): void {
        $this->getBackingStore()->set('hasProtection', $value);
    }

    /**
     * Sets the isDefault property value. The isDefault property
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the isEndpointProtectionEnabled property value. The isEndpointProtectionEnabled property
     * @param bool|null $value Value to set for the isEndpointProtectionEnabled property.
    */
    public function setIsEndpointProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEndpointProtectionEnabled', $value);
    }

    /**
     * Sets the isScopedToUser property value. The isScopedToUser property
     * @param bool|null $value Value to set for the isScopedToUser property.
    */
    public function setIsScopedToUser(?bool $value): void {
        $this->getBackingStore()->set('isScopedToUser', $value);
    }

    /**
     * Sets the locale property value. The locale property
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the priority property value. The priority property
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the rights property value. The rights property
     * @param UsageRightsIncluded|null $value Value to set for the rights property.
    */
    public function setRights(?UsageRightsIncluded $value): void {
        $this->getBackingStore()->set('rights', $value);
    }

    /**
     * Sets the sublabels property value. The sublabels property
     * @param array<SensitivityLabel>|null $value Value to set for the sublabels property.
    */
    public function setSublabels(?array $value): void {
        $this->getBackingStore()->set('sublabels', $value);
    }

    /**
     * Sets the toolTip property value. The toolTip property
     * @param string|null $value Value to set for the toolTip property.
    */
    public function setToolTip(?string $value): void {
        $this->getBackingStore()->set('toolTip', $value);
    }

}
