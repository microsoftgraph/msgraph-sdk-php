<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SharePointProtectionPolicy extends ProtectionPolicyBase implements Parsable 
{
    /**
     * Instantiates a new SharePointProtectionPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharePointProtectionPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointProtectionPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointProtectionPolicy {
        return new SharePointProtectionPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'siteInclusionRules' => fn(ParseNode $n) => $o->setSiteInclusionRules($n->getCollectionOfObjectValues([SiteProtectionRule::class, 'createFromDiscriminatorValue'])),
            'siteProtectionUnits' => fn(ParseNode $n) => $o->setSiteProtectionUnits($n->getCollectionOfObjectValues([SiteProtectionUnit::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the siteInclusionRules property value. The rules associated with the SharePoint Protection policy.
     * @return array<SiteProtectionRule>|null
    */
    public function getSiteInclusionRules(): ?array {
        $val = $this->getBackingStore()->get('siteInclusionRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SiteProtectionRule::class);
            /** @var array<SiteProtectionRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteInclusionRules'");
    }

    /**
     * Gets the siteProtectionUnits property value. The protection units (sites) that are protected under the site protection policy.
     * @return array<SiteProtectionUnit>|null
    */
    public function getSiteProtectionUnits(): ?array {
        $val = $this->getBackingStore()->get('siteProtectionUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SiteProtectionUnit::class);
            /** @var array<SiteProtectionUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteProtectionUnits'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('siteInclusionRules', $this->getSiteInclusionRules());
        $writer->writeCollectionOfObjectValues('siteProtectionUnits', $this->getSiteProtectionUnits());
    }

    /**
     * Sets the siteInclusionRules property value. The rules associated with the SharePoint Protection policy.
     * @param array<SiteProtectionRule>|null $value Value to set for the siteInclusionRules property.
    */
    public function setSiteInclusionRules(?array $value): void {
        $this->getBackingStore()->set('siteInclusionRules', $value);
    }

    /**
     * Sets the siteProtectionUnits property value. The protection units (sites) that are protected under the site protection policy.
     * @param array<SiteProtectionUnit>|null $value Value to set for the siteProtectionUnits property.
    */
    public function setSiteProtectionUnits(?array $value): void {
        $this->getBackingStore()->set('siteProtectionUnits', $value);
    }

}
