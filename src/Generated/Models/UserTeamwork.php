<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserTeamwork extends Entity implements Parsable 
{
    /**
     * @var array<AssociatedTeamInfo>|null $associatedTeams The list of associatedTeamInfo objects that a user is associated with.
    */
    private ?array $associatedTeams = null;
    
    /**
     * @var array<UserScopeTeamsAppInstallation>|null $installedApps The apps installed in the personal scope of this user.
    */
    private ?array $installedApps = null;
    
    /**
     * Instantiates a new UserTeamwork and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userTeamwork');
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
        return $this->associatedTeams;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associatedTeams' => function (ParseNode $n) use ($o) { $o->setAssociatedTeams($n->getCollectionOfObjectValues(array(AssociatedTeamInfo::class, 'createFromDiscriminatorValue'))); },
            'installedApps' => function (ParseNode $n) use ($o) { $o->setInstalledApps($n->getCollectionOfObjectValues(array(UserScopeTeamsAppInstallation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the installedApps property value. The apps installed in the personal scope of this user.
     * @return array<UserScopeTeamsAppInstallation>|null
    */
    public function getInstalledApps(): ?array {
        return $this->installedApps;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('associatedTeams', $this->associatedTeams);
        $writer->writeCollectionOfObjectValues('installedApps', $this->installedApps);
    }

    /**
     * Sets the associatedTeams property value. The list of associatedTeamInfo objects that a user is associated with.
     *  @param array<AssociatedTeamInfo>|null $value Value to set for the associatedTeams property.
    */
    public function setAssociatedTeams(?array $value ): void {
        $this->associatedTeams = $value;
    }

    /**
     * Sets the installedApps property value. The apps installed in the personal scope of this user.
     *  @param array<UserScopeTeamsAppInstallation>|null $value Value to set for the installedApps property.
    */
    public function setInstalledApps(?array $value ): void {
        $this->installedApps = $value;
    }

}
