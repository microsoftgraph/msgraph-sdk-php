<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudFlareVerifiedDetailsModel extends WebApplicationFirewallVerifiedDetails implements Parsable 
{
    /**
     * Instantiates a new CloudFlareVerifiedDetailsModel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudFlareVerifiedDetailsModel');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudFlareVerifiedDetailsModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudFlareVerifiedDetailsModel {
        return new CloudFlareVerifiedDetailsModel();
    }

    /**
     * Gets the enabledCustomRules property value. The enabledCustomRules property
     * @return array<CloudFlareRuleModel>|null
    */
    public function getEnabledCustomRules(): ?array {
        $val = $this->getBackingStore()->get('enabledCustomRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudFlareRuleModel::class);
            /** @var array<CloudFlareRuleModel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabledCustomRules'");
    }

    /**
     * Gets the enabledRecommendedRulesets property value. The enabledRecommendedRulesets property
     * @return array<CloudFlareRulesetModel>|null
    */
    public function getEnabledRecommendedRulesets(): ?array {
        $val = $this->getBackingStore()->get('enabledRecommendedRulesets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudFlareRulesetModel::class);
            /** @var array<CloudFlareRulesetModel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabledRecommendedRulesets'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enabledCustomRules' => fn(ParseNode $n) => $o->setEnabledCustomRules($n->getCollectionOfObjectValues([CloudFlareRuleModel::class, 'createFromDiscriminatorValue'])),
            'enabledRecommendedRulesets' => fn(ParseNode $n) => $o->setEnabledRecommendedRulesets($n->getCollectionOfObjectValues([CloudFlareRulesetModel::class, 'createFromDiscriminatorValue'])),
            'zoneId' => fn(ParseNode $n) => $o->setZoneId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the zoneId property value. The zoneId property
     * @return string|null
    */
    public function getZoneId(): ?string {
        $val = $this->getBackingStore()->get('zoneId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zoneId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('enabledCustomRules', $this->getEnabledCustomRules());
        $writer->writeCollectionOfObjectValues('enabledRecommendedRulesets', $this->getEnabledRecommendedRulesets());
        $writer->writeStringValue('zoneId', $this->getZoneId());
    }

    /**
     * Sets the enabledCustomRules property value. The enabledCustomRules property
     * @param array<CloudFlareRuleModel>|null $value Value to set for the enabledCustomRules property.
    */
    public function setEnabledCustomRules(?array $value): void {
        $this->getBackingStore()->set('enabledCustomRules', $value);
    }

    /**
     * Sets the enabledRecommendedRulesets property value. The enabledRecommendedRulesets property
     * @param array<CloudFlareRulesetModel>|null $value Value to set for the enabledRecommendedRulesets property.
    */
    public function setEnabledRecommendedRulesets(?array $value): void {
        $this->getBackingStore()->set('enabledRecommendedRulesets', $value);
    }

    /**
     * Sets the zoneId property value. The zoneId property
     * @param string|null $value Value to set for the zoneId property.
    */
    public function setZoneId(?string $value): void {
        $this->getBackingStore()->set('zoneId', $value);
    }

}
