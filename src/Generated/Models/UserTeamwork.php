<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserTeamwork extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserTeamwork and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserTeamwork
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserTeamwork {
        return new UserTeamwork();
    }

    /**
     * Gets the associatedTeams property value. The list of associatedTeamInfo objects that a user is associated with.
     * @return array<AssociatedTeamInfo>|null
    */
    public function getAssociatedTeams(): ?array {
        $val = $this->getBackingStore()->get('associatedTeams');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssociatedTeamInfo::class);
            /** @var array<AssociatedTeamInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedTeams'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associatedTeams' => fn(ParseNode $n) => $o->setAssociatedTeams($n->getCollectionOfObjectValues([AssociatedTeamInfo::class, 'createFromDiscriminatorValue'])),
            'installedApps' => fn(ParseNode $n) => $o->setInstalledApps($n->getCollectionOfObjectValues([UserScopeTeamsAppInstallation::class, 'createFromDiscriminatorValue'])),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installedApps property value. The apps installed in the personal scope of this user.
     * @return array<UserScopeTeamsAppInstallation>|null
    */
    public function getInstalledApps(): ?array {
        $val = $this->getBackingStore()->get('installedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserScopeTeamsAppInstallation::class);
            /** @var array<UserScopeTeamsAppInstallation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installedApps'");
    }

    /**
     * Gets the locale property value. The chosen locale of a user in Microsoft Teams.
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
     * Gets the region property value. The region of the user in Microsoft Teams.
     * @return string|null
    */
    public function getRegion(): ?string {
        $val = $this->getBackingStore()->get('region');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'region'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('associatedTeams', $this->getAssociatedTeams());
        $writer->writeCollectionOfObjectValues('installedApps', $this->getInstalledApps());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('region', $this->getRegion());
    }

    /**
     * Sets the associatedTeams property value. The list of associatedTeamInfo objects that a user is associated with.
     * @param array<AssociatedTeamInfo>|null $value Value to set for the associatedTeams property.
    */
    public function setAssociatedTeams(?array $value): void {
        $this->getBackingStore()->set('associatedTeams', $value);
    }

    /**
     * Sets the installedApps property value. The apps installed in the personal scope of this user.
     * @param array<UserScopeTeamsAppInstallation>|null $value Value to set for the installedApps property.
    */
    public function setInstalledApps(?array $value): void {
        $this->getBackingStore()->set('installedApps', $value);
    }

    /**
     * Sets the locale property value. The chosen locale of a user in Microsoft Teams.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the region property value. The region of the user in Microsoft Teams.
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->getBackingStore()->set('region', $value);
    }

}
